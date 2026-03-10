document.addEventListener('DOMContentLoaded', function () {
    const loanInput = document.getElementById('loan');
    const rateInput = document.getElementById('rate');
    const tenureInput = document.getElementById('tenure');

    const loanValue = document.getElementById('loanValue');
    const rateValue = document.getElementById('rateValue');
    const tenureValue = document.getElementById('tenureValue');

    const loanAmountDisplay = document.getElementById('loanAmount');
    const interestAmountDisplay = document.getElementById('interestAmount');
    const monthlyEMI = document.getElementById('monthlyEMI');
    const totalAmount = document.getElementById('totalAmount');

    const ctx = document.getElementById('pieChart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Principal', 'Interest'],
            datasets: [{
                data: [94.3, 5.7],
                backgroundColor: ['#273158', '#2EB24C'],
            }]
        }
    });

    function formatCurrency(value) {
        return parseInt(value).toLocaleString();
    }

    function calculateEMI() {
        let loanAmount = parseInt(loanInput.value);
        let annualInterestRate = parseFloat(rateInput.value) / 100;
        let monthlyInterestRate = annualInterestRate / 12;
        let tenureYears = parseInt(tenureInput.value);
        let tenureMonths = tenureYears * 12;

        // EMI Calculation formula
        let emi = loanAmount * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, tenureMonths) / (Math.pow(1 + monthlyInterestRate, tenureMonths) - 1);
        let totalInterest = emi * tenureMonths - loanAmount;
        let totalPayment = loanAmount + totalInterest;

        // Update values in UI
        loanAmountDisplay.textContent = formatCurrency(loanAmount);
        interestAmountDisplay.textContent = formatCurrency(totalInterest.toFixed(2));
        monthlyEMI.textContent = formatCurrency(emi.toFixed(2));
        totalAmount.textContent = formatCurrency(totalPayment.toFixed(2));

        // Update chart data
        chart.data.datasets[0].data = [loanAmount, totalInterest];
        chart.update();
    }

    // Synchronize loan input
    loanInput.addEventListener('input', function () {
        loanValue.value = formatCurrency(loanInput.value);
        calculateEMI();
    });

    loanValue.addEventListener('input', function () {
        let formattedValue = loanValue.value.replace(/,/g, '');
        loanInput.value = formattedValue;
        calculateEMI();
    });

    // Synchronize rate input
    rateInput.addEventListener('input', function () {
        rateValue.value = rateInput.value + '%';
        calculateEMI();
    });

    rateValue.addEventListener('input', function () {
        rateInput.value = rateValue.value.replace('%', '');
        calculateEMI();
    });

    // Synchronize tenure input
    tenureInput.addEventListener('input', function () {
        tenureValue.value = tenureInput.value;
        calculateEMI();
    });

    tenureValue.addEventListener('input', function () {
        tenureInput.value = tenureValue.value;
        calculateEMI();
    });

    // Initial calculation
    calculateEMI();
});
