document.addEventListener('DOMContentLoaded', function () {
    const yearlyContributionInput = document.getElementById('yearlyContribution');
    const interestRateInput = document.getElementById('interestRate');
    const yearsInput = document.getElementById('years');

    const yearlyContributionValue = document.getElementById('yearlyContributionValue');
    const interestRateValue = document.getElementById('interestRateValue');
    const yearsValue = document.getElementById('yearsValue');

    const yearlyContributionDisplay = document.getElementById('yearlyContributionDisplay');
    const totalInvestedDisplay = document.getElementById('totalInvestedDisplay');
    const totalInterestDisplay = document.getElementById('totalInterestDisplay');
    const maturityAmountDisplay = document.getElementById('maturityAmountDisplay');
    const finalMaturityAmountDisplay = document.getElementById('finalMaturityAmount');

    const ctx = document.getElementById('pieChart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Total Contribution', 'Interest Earned'],
            datasets: [{
                data: [0, 0],
                backgroundColor: ['#273158', '#2EB24C'],

            }]
        }
    });

    function formatCurrency(value) {
        return parseInt(value).toLocaleString();
    }

    function calculateMaturityAmount() {
        let yearlyContribution = parseFloat(yearlyContributionInput.value);
        let interestRate = parseFloat(interestRateInput.value) / 100;
        let years = parseInt(yearsInput.value);

        let maturityAmount = 0;
        for (let i = 1; i <= years; i++) {
            maturityAmount += yearlyContribution;
            maturityAmount *= (1 + interestRate);
        }

        let totalContribution = yearlyContribution * years;
        let interestEarned = maturityAmount - totalContribution;

        // Update UI
        yearlyContributionDisplay.textContent = `Rs.${formatCurrency(yearlyContribution)}`;
        totalInvestedDisplay.textContent = `Rs.${formatCurrency(totalContribution)}`;
        totalInterestDisplay.textContent = `Rs.${formatCurrency(interestEarned.toFixed(2))}`;
        maturityAmountDisplay.textContent = `Rs.${formatCurrency(maturityAmount.toFixed(2))}`;
        finalMaturityAmountDisplay.textContent = formatCurrency(maturityAmount.toFixed(2));

        // Update chart data
        chart.data.datasets[0].data = [totalContribution, interestEarned];
        chart.update();
    }

    // Sync range and input values for Yearly Contribution
    yearlyContributionInput.addEventListener('input', function () {
        yearlyContributionValue.value = formatCurrency(yearlyContributionInput.value);
        calculateMaturityAmount();
    });

    yearlyContributionValue.addEventListener('input', function () {
        let formattedValue = yearlyContributionValue.value.replace(/,/g, '');
        yearlyContributionInput.value = formattedValue;
        calculateMaturityAmount();
    });

    // Sync range and input values for Interest Rate
    interestRateInput.addEventListener('input', function () {
        interestRateValue.value = interestRateInput.value + "%";
        calculateMaturityAmount();
    });

    interestRateValue.addEventListener('input', function () {
        let formattedValue = interestRateValue.value.replace('%', '');
        interestRateInput.value = formattedValue;
        calculateMaturityAmount();
    });

    // Sync range and input values for Number of Years
    yearsInput.addEventListener('input', function () {
        yearsValue.value = yearsInput.value;
        calculateMaturityAmount();
    });

    yearsValue.addEventListener('input', function () {
        yearsInput.value = yearsValue.value;
        calculateMaturityAmount();
    });

    // Initial calculation
    calculateMaturityAmount();
});
