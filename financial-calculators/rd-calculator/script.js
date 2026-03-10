document.addEventListener('DOMContentLoaded', function () {
    const monthlyContributionInput = document.getElementById('monthlyContribution');
    const interestRateInput = document.getElementById('interestRate');
    const yearsInput = document.getElementById('years');

    const monthlyContributionValue = document.getElementById('monthlyContributionValue');
    const interestRateValue = document.getElementById('interestRateValue');
    const yearsValue = document.getElementById('yearsValue');

    const monthlyContributionDisplay = document.getElementById('monthlyContributionDisplay');
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
        let monthlyContribution = parseFloat(monthlyContributionInput.value);
        let interestRate = parseFloat(interestRateInput.value) / 100;
        let years = parseInt(yearsInput.value);

        let n = 12; // Monthly compounding
        let months = years * 12;
        let interestPerMonth = interestRate / 12;
        let maturityAmount = 0;

        // RD Formula: M = P * [(1 + r/n) ^ nt - 1] / (1 - (1 + r/n)^(-1))
        for (let i = 1; i <= months; i++) {
            maturityAmount += monthlyContribution * Math.pow(1 + interestPerMonth, months - i + 1);
        }

        let totalContribution = monthlyContribution * months;
        let interestEarned = maturityAmount - totalContribution;

        // Update UI
        monthlyContributionDisplay.textContent = `Rs.${formatCurrency(monthlyContribution)}`;
        totalInvestedDisplay.textContent = `Rs.${formatCurrency(totalContribution)}`;
        totalInterestDisplay.textContent = `Rs.${formatCurrency(interestEarned.toFixed(2))}`;
        maturityAmountDisplay.textContent = `Rs.${formatCurrency(maturityAmount.toFixed(2))}`;
        finalMaturityAmountDisplay.textContent = formatCurrency(maturityAmount.toFixed(2));

        // Update chart data
        chart.data.datasets[0].data = [totalContribution, interestEarned];
        chart.update();
    }

    // Sync range and input values for Monthly Contribution
    monthlyContributionInput.addEventListener('input', function () {
        monthlyContributionValue.value = formatCurrency(monthlyContributionInput.value);
        calculateMaturityAmount();
    });

    monthlyContributionValue.addEventListener('input', function () {
        let formattedValue = monthlyContributionValue.value.replace(/,/g, '');
        monthlyContributionInput.value = formattedValue;
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
