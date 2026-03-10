document.addEventListener('DOMContentLoaded', function () {
    const principalInput = document.getElementById('principal');
    const rateInput = document.getElementById('rate');
    const tenureInput = document.getElementById('tenure');
    const frequencyInput = document.getElementById('frequency');

    const principalValue = document.getElementById('principalValue');
    const rateValue = document.getElementById('rateValue');
    const tenureValue = document.getElementById('tenureValue');

    const totalPrincipalDisplay = document.getElementById('totalPrincipal');
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

    function calculateCompoundInterest() {
        let principal = parseFloat(principalInput.value);  // Principal amount
        let annualRate = parseFloat(rateInput.value) / 100; // Annual interest rate
        let tenureYears = parseInt(tenureInput.value);      // Time in years
        let frequency = parseInt(frequencyInput.value);     // Compounding frequency (n)

        // Compound Interest Formula: A = P * (1 + r/n)^(nt)
        let totalValue = principal * Math.pow((1 + (annualRate / frequency)), frequency * tenureYears);
        let interestEarned = totalValue - principal;

        // Update UI with results
        totalPrincipalDisplay.textContent = `Rs.${formatCurrency(principal)}`;
        interestEarnedDisplay.textContent = `Rs.${formatCurrency(interestEarned.toFixed(2))}`;
        totalValueDisplay.textContent = `Rs.${formatCurrency(totalValue.toFixed(2))}`;
        futureValueDisplay.textContent = formatCurrency(totalValue.toFixed(2));

        // Update chart data
        chart.data.datasets[0].data = [principal, interestEarned];
        chart.update();
    }

    // Sync range and input values for Principal Amount
    principalInput.addEventListener('input', function () {
        principalValue.value = formatCurrency(principalInput.value);
        calculateCompoundInterest();
    });

    principalValue.addEventListener('input', function () {
        let formattedValue = principalValue.value.replace(/,/g, '');
        principalInput.value = formattedValue;
        calculateCompoundInterest();
    });

    // Sync range and input values for Rate of Interest
    rateInput.addEventListener('input', function () {
        rateValue.value = rateInput.value + '%';
        calculateCompoundInterest();
    });

    rateValue.addEventListener('input', function () {
        rateInput.value = rateValue.value.replace('%', '');
        calculateCompoundInterest();
    });

    // Sync range and input values for Tenure
    tenureInput.addEventListener('input', function () {
        tenureValue.value = tenureInput.value;
        calculateCompoundInterest();
    });

    tenureValue.addEventListener('input', function () {
        tenureInput.value = tenureValue.value;
        calculateCompoundInterest();
    });

    // Sync compounding frequency selection
    frequencyInput.addEventListener('change', function () {
        calculateCompoundInterest();
    });

    // Initial calculation
    calculateCompoundInterest();
});
