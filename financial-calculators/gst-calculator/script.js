document.addEventListener('DOMContentLoaded', function () {
    const priceInput = document.getElementById('price');
    const gstRateInput = document.getElementById('gstRate');
    const priceTypeInput = document.getElementById('priceType');

    const priceValue = document.getElementById('priceValue');
    const gstRateValue = document.getElementById('gstRateValue');

    const initialPriceDisplay = document.getElementById('initialPrice');
    const gstAmountDisplay = document.getElementById('gstAmount');
    const totalPriceWithGSTDisplay = document.getElementById('totalPriceWithGST');
    const finalPriceDisplay = document.getElementById('finalPrice');

    const ctx = document.getElementById('pieChart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Initial Price', 'GST Amount'],
            datasets: [{
                data: [0, 0], // Initial placeholder data
                backgroundColor: ['#273158', '#2EB24C'],
            }]
        }
    });

    function formatCurrency(value) {
        return parseInt(value).toLocaleString();
    }

    function calculateGST() {
        let price = parseFloat(priceInput.value);
        let gstRate = parseFloat(gstRateInput.value);
        let priceType = priceTypeInput.value;

        let gstAmount = 0;
        let totalPrice = 0;

        if (priceType === "exclusive") {
            // GST Exclusive: Final Price = Price + GST
            gstAmount = price * gstRate / 100;
            totalPrice = price + gstAmount;
        } else {
            // GST Inclusive: Price = Final Price / (1 + GST Rate / 100)
            totalPrice = price;
            gstAmount = price - (price / (1 + gstRate / 100));
        }

        // Update UI with results
        initialPriceDisplay.textContent = `Rs.${formatCurrency(price)}`;
        gstAmountDisplay.textContent = `Rs.${formatCurrency(gstAmount.toFixed(2))}`;
        totalPriceWithGSTDisplay.textContent = `Rs.${formatCurrency(totalPrice.toFixed(2))}`;
        finalPriceDisplay.textContent = formatCurrency(totalPrice.toFixed(2));

        // Update chart data
        chart.data.datasets[0].data = [price, gstAmount];
        chart.update();
    }

    // Sync range and input values for Initial Price
    priceInput.addEventListener('input', function () {
        priceValue.value = formatCurrency(priceInput.value);
        calculateGST();
    });

    priceValue.addEventListener('input', function () {
        let formattedValue = priceValue.value.replace(/,/g, '');
        priceInput.value = formattedValue;
        calculateGST();
    });

    // Sync range and input values for GST Rate
    gstRateInput.addEventListener('input', function () {
        gstRateValue.value = gstRateInput.value + '%';
        calculateGST();
    });

    gstRateValue.addEventListener('input', function () {
        let formattedValue = gstRateValue.value.replace('%', '');
        gstRateInput.value = formattedValue;
        calculateGST();
    });

    // Update when price type (GST Inclusive or Exclusive) is changed
    priceTypeInput.addEventListener('change', calculateGST);

    // Initial calculation
    calculateGST();
});
