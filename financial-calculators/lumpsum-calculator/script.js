document.addEventListener('DOMContentLoaded', function () {
    const investmentInput = document.getElementById('investment');
    const rateInput = document.getElementById('rate');
    const tenureInput = document.getElementById('tenure');

    const investmentValue = document.getElementById('investmentValue');
    const rateValue = document.getElementById('rateValue');
    const tenureValue = document.getElementById('tenureValue');

    const totalInvestmentDisplay = document.getElementById('totalInvestment');
    const interestEarnedDisplay = document.getElementById('interestEarned');
    const totalValueDisplay = document.getElementById('totalValue');
    const futureValueDisplay = document.getElementById('futureValue');  // Future Value Element

    const ctx = document.getElementById('pieChart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Principal', 'Interest'],
            datasets: [{
                data: [71.4, 28.6], // Initial placeholder data
                backgroundColor: ['#273158', '#2EB24C'],
            }]
        }
    });

    function formatCurrency(value) {
        return parseInt(value).toLocaleString();
    }

    function calculateLumpsum() {
        let investmentAmount = parseInt(investmentInput.value);
        let annualRate = parseFloat(rateInput.value) / 100;
        let tenureYears = parseInt(tenureInput.value);

        // Lumpsum Calculation Formula: A = P (1 + r/n)^(nt)
        let totalValue = investmentAmount * Math.pow(1 + annualRate, tenureYears);
        let interestEarned = totalValue - investmentAmount;

        // Update UI with results
        totalInvestmentDisplay.textContent = `Rs.${formatCurrency(investmentAmount)}`;
        interestEarnedDisplay.textContent = `Rs.${formatCurrency(interestEarned.toFixed(2))}`;
        totalValueDisplay.textContent = `Rs.${formatCurrency(totalValue.toFixed(2))}`;
        futureValueDisplay.textContent = formatCurrency(totalValue.toFixed(2));  // Update Future Value

        // Update chart data
        chart.data.datasets[0].data = [investmentAmount, interestEarned];
        chart.update();
    }

    // Sync range and input values for Investment
    investmentInput.addEventListener('input', function () {
        investmentValue.value = formatCurrency(investmentInput.value);
        calculateLumpsum();
    });

    investmentValue.addEventListener('input', function () {
        let formattedValue = investmentValue.value.replace(/,/g, '');
        investmentInput.value = formattedValue;
        calculateLumpsum();
    });

    // Sync range and input values for Rate of Return
    rateInput.addEventListener('input', function () {
        rateValue.value = rateInput.value + '%';
        calculateLumpsum();
    });

    rateValue.addEventListener('input', function () {
        rateInput.value = rateValue.value.replace('%', '');
        calculateLumpsum();
    });

    // Sync range and input values for Tenure
    tenureInput.addEventListener('input', function () {
        tenureValue.value = tenureInput.value;
        calculateLumpsum();
    });

    tenureValue.addEventListener('input', function () {
        tenureInput.value = tenureValue.value;
        calculateLumpsum();
    });

    // Initial calculation
    calculateLumpsum();
});
