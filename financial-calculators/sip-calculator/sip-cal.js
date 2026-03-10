document.addEventListener('DOMContentLoaded', function () {
    const sipAmountInput = document.getElementById('sipAmount');
    const rateInput = document.getElementById('rate');
    const tenureInput = document.getElementById('tenure');

    const sipAmountValue = document.getElementById('sipAmountValue');
    const rateValue = document.getElementById('rateValue');
    const tenureValue = document.getElementById('tenureValue');

    const totalInvestmentDisplay = document.getElementById('totalInvestment');
    const interestEarnedDisplay = document.getElementById('interestEarned');
    const totalValueDisplay = document.getElementById('totalValue');
    const futureValueDisplay = document.getElementById('futureValue');

    const ctx = document.getElementById('pieChart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Principal', 'Interest'],
            datasets: [{
                data: [75, 25], // Initial placeholder data
                backgroundColor: ['#273158', '#2EB24C'],
            }]
        }
    });

    function formatCurrency(value) {
        return parseInt(value).toLocaleString();
    }

    function calculateSIP() {
        let sipAmount = parseInt(sipAmountInput.value);  // SIP amount (monthly investment)
        let annualRate = parseFloat(rateInput.value) / 100;
        let monthlyRate = annualRate / 12;  // Monthly interest rate
        let tenureYears = parseInt(tenureInput.value);
        let tenureMonths = tenureYears * 12;

        // SIP Formula: A = P * [(1 + r)^n - 1] * (1 + r) / r
        let totalValue = sipAmount * ((Math.pow(1 + monthlyRate, tenureMonths) - 1) / monthlyRate) * (1 + monthlyRate);
        let totalInvestment = sipAmount * tenureMonths;
        let interestEarned = totalValue - totalInvestment;

        // Update UI with results
        totalInvestmentDisplay.textContent = `Rs.${formatCurrency(totalInvestment)}`;
        interestEarnedDisplay.textContent = `Rs.${formatCurrency(interestEarned.toFixed(2))}`;
        totalValueDisplay.textContent = `Rs.${formatCurrency(totalValue.toFixed(2))}`;
        futureValueDisplay.textContent = formatCurrency(totalValue.toFixed(2));

        // Update chart data
        chart.data.datasets[0].data = [totalInvestment, interestEarned];
        chart.update();
    }

    // Sync range and input values for SIP Amount
    sipAmountInput.addEventListener('input', function () {
        sipAmountValue.value = formatCurrency(sipAmountInput.value);
        calculateSIP();
    });

    sipAmountValue.addEventListener('input', function () {
        let formattedValue = sipAmountValue.value.replace(/,/g, '');
        sipAmountInput.value = formattedValue;
        calculateSIP();
    });

    // Sync range and input values for Rate of Return
    rateInput.addEventListener('input', function () {
        rateValue.value = rateInput.value + '%';
        calculateSIP();
    });

    rateValue.addEventListener('input', function () {
        rateInput.value = rateValue.value.replace('%', '');
        calculateSIP();
    });

    // Sync range and input values for Tenure
    tenureInput.addEventListener('input', function () {
        tenureValue.value = tenureInput.value;
        calculateSIP();
    });

    tenureValue.addEventListener('input', function () {
        tenureInput.value = tenureValue.value;
        calculateSIP();
    });

    // Initial calculation
    calculateSIP();
});
