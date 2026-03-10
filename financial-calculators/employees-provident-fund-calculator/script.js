document.addEventListener('DOMContentLoaded', function () {
    const basicSalaryInput = document.getElementById('basicSalary');
    const rateInput = document.getElementById('rate');
    const tenureInput = document.getElementById('tenure');

    const basicSalaryValue = document.getElementById('basicSalaryValue');
    const rateValue = document.getElementById('rateValue');
    const tenureValue = document.getElementById('tenureValue');

    const employeeContributionDisplay = document.getElementById('employeeContribution');
    const employerContributionDisplay = document.getElementById('employerContribution');
    const interestEarnedDisplay = document.getElementById('interestEarned');
    const totalValueDisplay = document.getElementById('totalValue');
    const futureValueDisplay = document.getElementById('futureValue');

    const ctx = document.getElementById('pieChart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Employee Contribution', 'Employer Contribution', 'Interest'],
            datasets: [{
                data: [0, 0, 0], // Initial placeholder data
                backgroundColor: ['#273158', '#b62d1f', '#2EB24C']
            }]
        }
    });

    function formatCurrency(value) {
        return parseInt(value).toLocaleString();
    }

    function calculateEPF() {
        let basicSalary = parseFloat(basicSalaryInput.value);
        let annualRate = parseFloat(rateInput.value) / 100;
        let tenureYears = parseInt(tenureInput.value);

        // Employee contribution (12% of basic salary)
        let employeeContributionMonthly = 0.12 * basicSalary;
        let employerContributionMonthly = 0.0367 * basicSalary; // Employer's EPF contribution (remaining after EPS)

        // Total Monthly EPF Contribution (both employee + employer)
        let totalMonthlyContribution = employeeContributionMonthly + employerContributionMonthly;

        // Calculate total EPF using compound interest formula: A = P(1 + r/n)^(nt)
        let months = tenureYears * 12;
        let totalContribution = totalMonthlyContribution * months;
        let futureValue = 0;

        for (let i = 0; i < months; i++) {
            futureValue += totalMonthlyContribution;
            futureValue *= (1 + annualRate / 12);
        }

        let interestEarned = futureValue - totalContribution;

        // Update UI with results
        employeeContributionDisplay.textContent = `Rs.${formatCurrency(employeeContributionMonthly * months)}`;
        employerContributionDisplay.textContent = `Rs.${formatCurrency(employerContributionMonthly * months)}`;
        interestEarnedDisplay.textContent = `Rs.${formatCurrency(interestEarned.toFixed(2))}`;
        totalValueDisplay.textContent = `Rs.${formatCurrency(futureValue.toFixed(2))}`;
        futureValueDisplay.textContent = formatCurrency(futureValue.toFixed(2));

        // Update chart data
        chart.data.datasets[0].data = [
            employeeContributionMonthly * months,
            employerContributionMonthly * months,
            interestEarned
        ];
        chart.update();
    }

    // Sync range and input values for Basic Salary
    basicSalaryInput.addEventListener('input', function () {
        basicSalaryValue.value = formatCurrency(basicSalaryInput.value);
        calculateEPF();
    });

    basicSalaryValue.addEventListener('input', function () {
        let formattedValue = basicSalaryValue.value.replace(/,/g, '');
        basicSalaryInput.value = formattedValue;
        calculateEPF();
    });

    // Sync range and input values for Rate of Interest
    rateInput.addEventListener('input', function () {
        rateValue.value = rateInput.value + '%';
        calculateEPF();
    });

    rateValue.addEventListener('input', function () {
        let formattedValue = rateValue.value.replace('%', '');
        rateInput.value = formattedValue;
        calculateEPF();
    });

    // Sync range and input values for Tenure
    tenureInput.addEventListener('input', function () {
        tenureValue.value = tenureInput.value;
        calculateEPF();
    });

    tenureValue.addEventListener('input', function () {
        tenureInput.value = tenureValue.value;
        calculateEPF();
    });

    // Initial calculation
    calculateEPF();
});
