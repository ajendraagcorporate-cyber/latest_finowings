document.addEventListener('DOMContentLoaded', function () {
    const principalInput = document.getElementById('principal');
    const rateInput = document.getElementById('rate');
    const tenureInput = document.getElementById('tenure');
    const frequencyInput = document.getElementById('frequency');

    const principalValue = document.getElementById('principalValue');
    const rateValue = document.getElementById('rateValue');
    const tenureValue = document.getElementById('tenureValue');

    const principalAmountDisplay = document.getElementById('principalAmount');
    const interestEarnedDisplay = document.getElementById('interestEarned');
    const totalMaturityDisplay = document.getElementById('totalMaturity');
    const maturityValueDisplay = document.getElementById('maturityValue');

    const ctx = document.getElementById('pieChart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Principal', 'Interest'],
            datasets: [{
                data: [0, 0], // Initial placeholder data
                backgroundColor: ['#273158', '#2EB24C'],
            }]
        }
    });

    function formatCurrency(value) {
        return parseInt(value).toLocaleString();
    }

    function calculateFD() {
        let principal = parseFloat(principalInput.value);
        let annualRate = parseFloat(rateInput.value) / 100;
        let tenureYears = parseInt(tenureInput.value);
        let frequency = parseInt(frequencyInput.value);
         // Compounding frequency (monthly, quarterly, yearly)

        let compoundRate = annualRate / frequency;
        let periods = tenureYears * frequency;

        // Calculate FD Maturity using compound interest formula: A = P(1 + r/n)^(nt)
        let maturityAmount = principal * Math.pow((1 + compoundRate), periods);
        let interestEarned = maturityAmount - principal;

        // Update UI with results
        principalAmountDisplay.textContent = `Rs.${formatCurrency(principal)}`;
        interestEarnedDisplay.textContent = `Rs.${formatCurrency(interestEarned.toFixed(2))}`;
        totalMaturityDisplay.textContent = `Rs.${formatCurrency(maturityAmount.toFixed(2))}`;
        maturityValueDisplay.textContent = formatCurrency(maturityAmount.toFixed(2));

        // Update chart data
        chart.data.datasets[0].data = [principal, interestEarned];
        chart.update();
    }

    // Sync range and input values for Principal
    principalInput.addEventListener('input', function () {
        principalValue.value = formatCurrency(principalInput.value);
        calculateFD();
    });

    principalValue.addEventListener('input', function () {
        let formattedValue = principalValue.value.replace(/,/g, '');
        principalInput.value = formattedValue;
        calculateFD();
    });

    // Sync range and input values for Rate of Interest
    rateInput.addEventListener('input', function () {
        rateValue.value = rateInput.value + '%';
        calculateFD();
    });

    rateValue.addEventListener('input', function () {
        let formattedValue = rateValue.value.replace('%', '');
        rateInput.value = formattedValue;
        calculateFD();
    });

    // Sync range and input values for Tenure
    tenureInput.addEventListener('input', function () {
        tenureValue.value = tenureInput.value;
        calculateFD();
    });

    tenureValue.addEventListener('input', function () {
        tenureInput.value = tenureValue.value;
        calculateFD();
    });

    // Update when compounding frequency is changed
    frequencyInput.addEventListener('change', calculateFD);

    // Initial calculation
    calculateFD();
});
