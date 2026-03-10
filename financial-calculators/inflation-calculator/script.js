document.addEventListener('DOMContentLoaded', function () {
    const currentAmountInput = document.getElementById('currentAmount');
    const inflationRateInput = document.getElementById('inflationRate');
    const yearsInput = document.getElementById('years');

    const currentAmountValue = document.getElementById('currentAmountValue');
    const inflationRateValue = document.getElementById('inflationRateValue');
    const yearsValue = document.getElementById('yearsValue');

    const currentAmountDisplay = document.getElementById('currentAmountDisplay');
    const futureValueDisplay = document.getElementById('futureValueDisplay');
    const finalFutureValueDisplay = document.getElementById('finalFutureValue');

    const ctx = document.getElementById('pieChart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Current Value', 'Future Value'],
            datasets: [{
                data: [0, 0],
                backgroundColor: ['#273158', '#2EB24C'],
            }]
        }
    });

    function formatCurrency(value) {
        return parseInt(value).toLocaleString();
    }

    function calculateFutureValue() {
        let currentAmount = parseFloat(currentAmountInput.value);
        let inflationRate = parseFloat(inflationRateInput.value) / 100;
        let years = parseInt(yearsInput.value);

        let futureValue = currentAmount * Math.pow((1 + inflationRate), years);

        // Update UI
        currentAmountDisplay.textContent = `Rs.${formatCurrency(currentAmount)}`;
        futureValueDisplay.textContent = `Rs.${formatCurrency(futureValue.toFixed(2))}`;
        finalFutureValueDisplay.textContent = formatCurrency(futureValue.toFixed(2));

        // Update chart data
        chart.data.datasets[0].data = [currentAmount, futureValue - currentAmount];
        chart.update();
    }

    // Sync range and input values for Current Amount
    currentAmountInput.addEventListener('input', function () {
        currentAmountValue.value = formatCurrency(currentAmountInput.value);
        calculateFutureValue();
    });

    currentAmountValue.addEventListener('input', function () {
        let formattedValue = currentAmountValue.value.replace(/,/g, '');
        currentAmountInput.value = formattedValue;
        calculateFutureValue();
    });

    // Sync range and input values for Inflation Rate
    inflationRateInput.addEventListener('input', function () {
        inflationRateValue.value = inflationRateInput.value + "%";
        calculateFutureValue();
    });

    inflationRateValue.addEventListener('input', function () {
        let formattedValue = inflationRateValue.value.replace('%', '');
        inflationRateInput.value = formattedValue;
        calculateFutureValue();
    });

    // Sync range and input values for Number of Years
    yearsInput.addEventListener('input', function () {
        yearsValue.value = yearsInput.value;
        calculateFutureValue();
    });

    yearsValue.addEventListener('input', function () {
        yearsInput.value = yearsValue.value;
        calculateFutureValue();
    });

    // Initial calculation
    calculateFutureValue();
});
