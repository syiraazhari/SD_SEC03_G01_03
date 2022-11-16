paypal.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    currency_code: 'USD',
                    value: '0.1'
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("http://localhost/SD_SEC03_G01_03/GogoTravel/success.php")
        })
    },
    onCancel: function (data) {
        window.location.replace("http://localhost/SD_SEC03_G01_03/GogoTravel/cancel.php")
    }
}).render('#paypal-payment-button');