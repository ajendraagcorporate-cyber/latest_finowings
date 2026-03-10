document.addEventListener('DOMContentLoaded', function () {
    const initialInvestmentInput = document.getElementById('initialInvestment');
    const monthlyWithdrawalInput = document.getElementById('monthlyWithdrawal');
    const interestRateInput = document.getElementById('interestRate');
    const durationInput = document.getElementById('duration');

    const initialInvestmentValue = document.getElementById('initialInvestmentValue');
    const monthlyWithdrawalValue = document.getElementById('monthlyWithdrawalValue');
    const interestRateValue = document.getElementById('interestRateValue');
    const durationValue = document.getElementById('durationValue');

    const initialInvestmentDisplay = document.getElementById('initialInvestmentDisplay');
    const monthlyWithdrawalDisplay = document.getElementById('monthlyWithdrawalDisplay');
    const interestRateDisplay = document.getElementById('interestRateDisplay');
    const durationDisplay = document.getElementById('durationDisplay');
    const totalWithdrawalsDisplay = document.getElementById('totalWithdrawalsDisplay');
    const totalInterestDisplay = document.getElementById('totalInterestDisplay');
    const balanceMaturityDisplay = document.getElementById('balanceMaturityDisplay');

    const ctx = document.getElementById('pieChart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Total Withdrawals', 'Balance at Maturity', 'Total Interest Earned'],
            datasets: [{
                data: [0, 0, 0],
                // backgroundColor: ['#3498db', '#2ecc71', '#e74c3c']
                backgroundColor: ['#273158', '#2EB24C', '#e74c3c'],
            }]
        }
    });

    function formatCurrency(value) {
        return parseInt(value).toLocaleString();
    }

    function calculateSWP() {
        let P = parseFloat(initialInvestmentInput.value);
        let W = parseFloat(monthlyWithdrawalInput.value);
        let r = parseFloat(interestRateInput.value) / 100 / 12;
        let t = parseInt(durationInput.value) * 12; // Convert years to months

        let totalWithdrawals = W * t;
        let totalInterest = 0;
        let balance = P;

        // Calculate the interest and balance each month
        for (let i = 0; i < t; i++) {
            let interest = balance * r;
            balance = balance + interest - W;
            totalInterest += interest;

            // If the balance reaches zero before the end of the duration, stop
            //if (balance <= 0) {
              //  balance = 0;
              //  break;
            //}
        }

        // Update UI
        initialInvestmentDisplay.textContent = `Rs. ${formatCurrency(P.toFixed(2))}`;
        monthlyWithdrawalDisplay.textContent = `Rs. ${formatCurrency(W.toFixed(2))}`;
        interestRateDisplay.textContent = `${interestRateInput.value}%`;
        durationDisplay.textContent = `${(t / 12).toFixed(0)} years`;
        totalWithdrawalsDisplay.textContent = `Rs. ${formatCurrency(totalWithdrawals.toFixed(2))}`;
        totalInterestDisplay.textContent = `Rs. ${formatCurrency(totalInterest.toFixed(2))}`;
        balanceMaturityDisplay.textContent = formatCurrency(balance.toFixed(2));

        // Update Pie Chart
        chart.data.datasets[0].data = [totalWithdrawals, balance, totalInterest];
        chart.update();
    }

    // Sync range and input values for Initial Investment
    initialInvestmentInput.addEventListener('input', function () {
        initialInvestmentValue.value = formatCurrency(initialInvestmentInput.value);
        calculateSWP();
    });

    initialInvestmentValue.addEventListener('input', function () {
        let formattedValue = initialInvestmentValue.value.replace(/,/g, '');
        initialInvestmentInput.value = formattedValue;
        calculateSWP();
    });

    // Sync range and input values for Monthly Withdrawal
    monthlyWithdrawalInput.addEventListener('input', function () {
        monthlyWithdrawalValue.value = formatCurrency(monthlyWithdrawalInput.value);
        calculateSWP();
    });

    monthlyWithdrawalValue.addEventListener('input', function () {
        let formattedValue = monthlyWithdrawalValue.value.replace(/,/g, '');
        monthlyWithdrawalInput.value = formattedValue;
        calculateSWP();
    });

    // Sync range and input values for Interest Rate
    interestRateInput.addEventListener('input', function () {
        interestRateValue.value = interestRateInput.value + "%";
        calculateSWP();
    });

    interestRateValue.addEventListener('input', function () {
        let formattedValue = interestRateValue.value.replace('%', '');
        interestRateInput.value = formattedValue;
        calculateSWP();
    });

    // Sync range and input values for Duration
    durationInput.addEventListener('input', function () {
        durationValue.value = durationInput.value;
        calculateSWP();
    });

    durationValue.addEventListener('input', function () {
        durationInput.value = durationValue.value;
        calculateSWP();
    });

    // Initial calculation
    calculateSWP();
});
