document.addEventListener('DOMContentLoaded', function () {
    const currentAgeInput = document.getElementById('currentAge');
    const retirementAgeInput = document.getElementById('retirementAge');
    const monthlyContributionInput = document.getElementById('monthlyContribution');
    const annualReturnInput = document.getElementById('annualReturn');

    const currentAgeValue = document.getElementById('currentAgeValue');
    const retirementAgeValue = document.getElementById('retirementAgeValue');
    const monthlyContributionValue = document.getElementById('monthlyContributionValue');
    const annualReturnValue = document.getElementById('annualReturnValue');

    const currentAgeDisplay = document.getElementById('currentAgeDisplay');
    const retirementAgeDisplay = document.getElementById('retirementAgeDisplay');
    const monthlyContributionDisplay = document.getElementById('monthlyContributionDisplay');
    const annualReturnDisplay = document.getElementById('annualReturnDisplay');
    const totalSavingsDisplay = document.getElementById('totalSavingsDisplay');
    const finalSavingsAmountDisplay = document.getElementById('finalSavingsAmount');

    const ctx = document.getElementById('pieChart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Total Contribution', 'Investment Growth'],
            datasets: [{
                data: [0, 0],
                backgroundColor: ['#273158', '#2EB24C'],
            }]
        }
    });

    function formatCurrency(value) {
        return parseInt(value).toLocaleString();
    }

    function calculateRetirementSavings() {
        let currentAge = parseInt(currentAgeInput.value);
        let retirementAge = parseInt(retirementAgeInput.value);
        let monthlyContribution = parseFloat(monthlyContributionInput.value);
        let annualReturn = parseFloat(annualReturnInput.value) / 100;

        let yearsUntilRetirement = retirementAge - currentAge;
        let monthsUntilRetirement = yearsUntilRetirement * 12;
        let monthlyReturnRate = annualReturn / 12;
        let totalSavings = 0;

        // Compound Interest Formula for regular contributions
        for (let i = 1; i <= monthsUntilRetirement; i++) {
            totalSavings += monthlyContribution * Math.pow(1 + monthlyReturnRate, monthsUntilRetirement - i + 1);
        }

        let totalContribution = monthlyContribution * monthsUntilRetirement;
        let investmentGrowth = totalSavings - totalContribution;

        // Update UI
        currentAgeDisplay.textContent = `${currentAge} years`;
        retirementAgeDisplay.textContent = `${retirementAge} years`;
        monthlyContributionDisplay.textContent = `Rs.${formatCurrency(monthlyContribution)}`;
        annualReturnDisplay.textContent = `${annualReturnInput.value}%`;
        totalSavingsDisplay.textContent = `Rs.${formatCurrency(totalSavings.toFixed(2))}`;
        finalSavingsAmountDisplay.textContent = formatCurrency(totalSavings.toFixed(2));

        // Update chart data
        chart.data.datasets[0].data = [totalContribution, investmentGrowth];
        chart.update();
    }

    // Sync range and input values for Current Age
    currentAgeInput.addEventListener('input', function () {
        currentAgeValue.value = currentAgeInput.value;
        calculateRetirementSavings();
    });

    currentAgeValue.addEventListener('input', function () {
        currentAgeInput.value = currentAgeValue.value;
        calculateRetirementSavings();
    });

    // Sync range and input values for Retirement Age
    retirementAgeInput.addEventListener('input', function () {
        retirementAgeValue.value = retirementAgeInput.value;
        calculateRetirementSavings();
    });

    retirementAgeValue.addEventListener('input', function () {
        retirementAgeInput.value = retirementAgeValue.value;
        calculateRetirementSavings();
    });

    // Sync range and input values for Monthly Contribution
    monthlyContributionInput.addEventListener('input', function () {
        monthlyContributionValue.value = formatCurrency(monthlyContributionInput.value);
        calculateRetirementSavings();
    });

    monthlyContributionValue.addEventListener('input', function () {
        let formattedValue = monthlyContributionValue.value.replace(/,/g, '');
        monthlyContributionInput.value = formattedValue;
        calculateRetirementSavings();
    });

    // Sync range and input values for Expected Annual Return
    annualReturnInput.addEventListener('input', function () {
        annualReturnValue.value = annualReturnInput.value + "%";
        calculateRetirementSavings();
    });

    annualReturnValue.addEventListener('input', function () {
        let formattedValue = annualReturnValue.value.replace('%', '');
        annualReturnInput.value = formattedValue;
        calculateRetirementSavings();
    });

    // Initial calculation
    calculateRetirementSavings();
});
