document.addEventListener('DOMContentLoaded', function () {
    const initialSIPInput = document.getElementById('initialSIP');
    const sipStepUpInput = document.getElementById('sipStepUp');
    const investmentDurationInput = document.getElementById('investmentDuration');
    const expectedReturnInput = document.getElementById('expectedReturn');

    const initialSIPValue = document.getElementById('initialSIPValue');
    const sipStepUpValue = document.getElementById('sipStepUpValue');
    const investmentDurationValue = document.getElementById('investmentDurationValue');
    const expectedReturnValue = document.getElementById('expectedReturnValue');

    const initialSIPDisplay = document.getElementById('initialSIPDisplay');
    const sipStepUpDisplay = document.getElementById('sipStepUpDisplay');
    const investmentDurationDisplay = document.getElementById('investmentDurationDisplay');
    const expectedReturnDisplay = document.getElementById('expectedReturnDisplay');
    const totalInvestmentDisplay = document.getElementById('totalInvestmentDisplay');
    const estimatedReturnsDisplay = document.getElementById('estimatedReturnsDisplay');
    const totalMaturityAmountDisplay = document.getElementById('totalMaturityAmount');

    const ctx = document.getElementById('pieChart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Total Investment', 'Wealth Gained'],
            datasets: [{
                data: [0, 0],
                backgroundColor: ['#273158', '#2EB24C'],
            }]
        }
    });

    function formatCurrency(value) {
        return parseInt(value).toLocaleString();
    }

    function calculateStepUpSIP() {
        let initialSIP = parseFloat(initialSIPInput.value);
        let sipStepUp = parseFloat(sipStepUpInput.value) / 100;
        let years = parseInt(investmentDurationInput.value);
        let expectedReturn = parseFloat(expectedReturnInput.value) / 100;

        let months = years * 12;
        let monthlyReturn = expectedReturn / 12;
        let totalInvestment = 0;
        let totalMaturity = 0;

        for (let i = 1; i <= months; i++) {
            let stepUpFactor = Math.pow(1 + sipStepUp, Math.floor(i / 12));
            let sipAmount = initialSIP * stepUpFactor;
            totalInvestment += sipAmount;
            totalMaturity += sipAmount * Math.pow(1 + monthlyReturn, months - i + 1);
        }

        let wealthGained = totalMaturity - totalInvestment;

        // Update UI
        initialSIPDisplay.textContent = `Rs.${formatCurrency(initialSIP.toFixed(2))}`;
        sipStepUpDisplay.textContent = `${sipStepUpInput.value}%`;
        investmentDurationDisplay.textContent = `${years} years`;
        expectedReturnDisplay.textContent = `${expectedReturnInput.value}%`;
        totalInvestmentDisplay.textContent = `Rs.${formatCurrency(totalInvestment.toFixed(2))}`;
        estimatedReturnsDisplay.textContent = `Rs.${formatCurrency(wealthGained.toFixed(2))}`;
        totalMaturityAmountDisplay.textContent = formatCurrency(totalMaturity.toFixed(2));

        // Update chart data
        chart.data.datasets[0].data = [totalInvestment, wealthGained];
        chart.update();
    }

    // Sync range and input values for Initial SIP
    initialSIPInput.addEventListener('input', function () {
        initialSIPValue.value = formatCurrency(initialSIPInput.value);
        calculateStepUpSIP();
    });

    initialSIPValue.addEventListener('input', function () {
        let formattedValue = initialSIPValue.value.replace(/,/g, '');
        initialSIPInput.value = formattedValue;
        calculateStepUpSIP();
    });

    // Sync range and input values for Annual SIP Increase
    sipStepUpInput.addEventListener('input', function () {
        sipStepUpValue.value = sipStepUpInput.value + "%";
        calculateStepUpSIP();
    });

    sipStepUpValue.addEventListener('input', function () {
        let formattedValue = sipStepUpValue.value.replace('%', '');
        sipStepUpInput.value = formattedValue;
        calculateStepUpSIP();
    });

    // Sync range and input values for Investment Duration
    investmentDurationInput.addEventListener('input', function () {
        investmentDurationValue.value = investmentDurationInput.value;
        calculateStepUpSIP();
    });

    investmentDurationValue.addEventListener('input', function () {
        investmentDurationInput.value = investmentDurationValue.value;
        calculateStepUpSIP();
    });

    // Sync range and input values for Expected Return
    expectedReturnInput.addEventListener('input', function () {
        expectedReturnValue.value = expectedReturnInput.value + "%";
        calculateStepUpSIP();
    });

    expectedReturnValue.addEventListener('input', function () {
        let formattedValue = expectedReturnValue.value.replace('%', '');
        expectedReturnInput.value = formattedValue;
        calculateStepUpSIP();
    });

    // Initial calculation
    calculateStepUpSIP();
});
