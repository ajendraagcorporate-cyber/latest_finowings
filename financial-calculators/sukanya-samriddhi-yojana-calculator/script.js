document.addEventListener('DOMContentLoaded', function () {
    const annualContributionInput = document.getElementById('annualContribution');
    const durationInput = document.getElementById('duration');
    const interestRateInput = document.getElementById('interestRate');

    const annualContributionValue = document.getElementById('annualContributionValue');
    const durationValue = document.getElementById('durationValue');
    const interestRateValue = document.getElementById('interestRateValue');

    const annualContributionDisplay = document.getElementById('annualContributionDisplay');
    const durationDisplay = document.getElementById('durationDisplay');
    const interestRateDisplay = document.getElementById('interestRateDisplay');
    const totalInvestmentDisplay = document.getElementById('totalInvestmentDisplay');
    const totalInterestDisplay = document.getElementById('totalInterestDisplay');
    const maturityYearDisplay = document.getElementById('maturityYearDisplay');
    const maturityValueDisplay = document.getElementById('maturityValueDisplay');

    const currentYear = new Date().getFullYear();

    const ctx = document.getElementById('pieChart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Total Investment', 'Total Interest'],
            datasets: [{
                data: [0, 0],
                backgroundColor: ['#273158', '#2EB24C'],
            }]
        }
    });

    function formatCurrency(value) {
        return parseInt(value).toLocaleString();
    }

    function calculateSukanyaSamriddhi() {
        let P = parseFloat(annualContributionInput.value);
        let t = parseInt(durationInput.value);
        let r = parseFloat(interestRateInput.value) / 100;
        let n = 1; // Compounded annually

        let totalInvestment = P * t;
        let maturityValue = P * (Math.pow((1 + r / n), n * t) - 1) / (r / n);
        let totalInterest = maturityValue - totalInvestment;
        let maturityYear = currentYear + t;

        // Update UI
        annualContributionDisplay.textContent = `Rs. ${formatCurrency(P.toFixed(2))}`;
        durationDisplay.textContent = `${t} years`;
        interestRateDisplay.textContent = `${interestRateInput.value}%`;
        totalInvestmentDisplay.textContent = `Rs. ${formatCurrency(totalInvestment.toFixed(2))}`;
        totalInterestDisplay.textContent = `Rs. ${formatCurrency(totalInterest.toFixed(2))}`;
        maturityYearDisplay.textContent = maturityYear;
        maturityValueDisplay.textContent = formatCurrency(maturityValue.toFixed(2));

        // Update Pie Chart
        chart.data.datasets[0].data = [totalInvestment, totalInterest];
        chart.update();
    }

    // Sync range and input values for Annual Contribution
    annualContributionInput.addEventListener('input', function () {
        annualContributionValue.value = formatCurrency(annualContributionInput.value);
        calculateSukanyaSamriddhi();
    });

    annualContributionValue.addEventListener('input', function () {
        let formattedValue = annualContributionValue.value.replace(/,/g, '');
        annualContributionInput.value = formattedValue;
        calculateSukanyaSamriddhi();
    });

    // Sync range and input values for Duration
    durationInput.addEventListener('input', function () {
        durationValue.value = durationInput.value;
        calculateSukanyaSamriddhi();
    });

    durationValue.addEventListener('input', function () {
        durationInput.value = durationValue.value;
        calculateSukanyaSamriddhi();
    });

    // Sync range and input values for Interest Rate
    interestRateInput.addEventListener('input', function () {
        interestRateValue.value = interestRateInput.value + "%";
        calculateSukanyaSamriddhi();
    });

    interestRateValue.addEventListener('input', function () {
        let formattedValue = interestRateValue.value.replace('%', '');
        interestRateInput.value = formattedValue;
        calculateSukanyaSamriddhi();
    });

    // Initial calculation
    calculateSukanyaSamriddhi();
});
