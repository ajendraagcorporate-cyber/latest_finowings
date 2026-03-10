document.addEventListener('DOMContentLoaded', function () {
    const incomeInput = document.getElementById('income');
    const ageGroupInput = document.getElementById('ageGroup');
    const taxRegimeInput = document.getElementById('taxRegime');

    const incomeValue = document.getElementById('incomeValue');

    const annualIncomeDisplay = document.getElementById('annualIncome');
    const taxAmountDisplay = document.getElementById('taxAmount');
    const netIncomeDisplay = document.getElementById('netIncome');
    const finalTaxDisplay = document.getElementById('finalTax');

    const ctx = document.getElementById('pieChart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Net Income', 'Tax Amount'],
            datasets: [{
                data: [0, 0],
                backgroundColor: ['#273158', '#2EB24C'],
            }]
        }
    });

    function formatCurrency(value) {
        return parseInt(value).toLocaleString();
    }

    function calculateTax() {
        let income = parseFloat(incomeInput.value);
        if (isNaN(income) || income <= 0) {
            income = 0;
        }

        let ageGroup = ageGroupInput.value;
        let taxRegime = taxRegimeInput.value;

        let taxAmount = 0;

        if (taxRegime === 'new') {
            // New Tax Regime (FY 2023-24)
            if (income <= 300000) {
                taxAmount = 0;
            } else if (income <= 600000) {
                taxAmount = (income - 300000) * 0.05;
            } else if (income <= 900000) {
                taxAmount = (income - 600000) * 0.1 + 15000;
            } else if (income <= 1200000) {
                taxAmount = (income - 900000) * 0.15 + 45000;
            } else if (income <= 1500000) {
                taxAmount = (income - 1200000) * 0.2 + 90000;
            } else {
                taxAmount = (income - 1500000) * 0.3 + 150000;
            }
        } else if (taxRegime === 'old') {
            // Old Tax Regime (For FY 2023-24)
            if (ageGroup === 'below60') {
                if (income <= 250000) {
                    taxAmount = 0;
                } else if (income <= 500000) {
                    taxAmount = (income - 250000) * 0.05;
                } else if (income <= 1000000) {
                    taxAmount = (income - 500000) * 0.2 + 12500;
                } else {
                    taxAmount = (income - 1000000) * 0.3 + 112500;
                }
            } else if (ageGroup === '60to80') {
                if (income <= 300000) {
                    taxAmount = 0;
                } else if (income <= 500000) {
                    taxAmount = (income - 300000) * 0.05;
                } else if (income <= 1000000) {
                    taxAmount = (income - 500000) * 0.2 + 10000;
                } else {
                    taxAmount = (income - 1000000) * 0.3 + 110000;
                }
            } else if (ageGroup === 'above80') {
                if (income <= 500000) {
                    taxAmount = 0;
                } else if (income <= 1000000) {
                    taxAmount = (income - 500000) * 0.2;
                } else {
                    taxAmount = (income - 1000000) * 0.3 + 100000;
                }
            }
        }

        let netIncome = income - taxAmount;

        // Update UI with results
        annualIncomeDisplay.textContent = `Rs.${formatCurrency(income)}`;
        taxAmountDisplay.textContent = `Rs.${formatCurrency(taxAmount.toFixed(2))}`;
        netIncomeDisplay.textContent = `Rs.${formatCurrency(netIncome.toFixed(2))}`;
        finalTaxDisplay.textContent = formatCurrency(taxAmount.toFixed(2));

        // Update chart data
        chart.data.datasets[0].data = [netIncome, taxAmount];
        chart.update();
    }

    // Sync range and input values for Annual Income
    incomeInput.addEventListener('input', function () {
        incomeValue.value = formatCurrency(incomeInput.value);
        calculateTax();
    });

    incomeValue.addEventListener('input', function () {
        let formattedValue = incomeValue.value.replace(/,/g, '');
        incomeInput.value = parseFloat(formattedValue) || 0; // parse to float
        calculateTax();
    });

    // Update when age group or tax regime is changed
    ageGroupInput.addEventListener('change', calculateTax);
    taxRegimeInput.addEventListener('change', calculateTax);

    // Initial calculation
    calculateTax();
});
