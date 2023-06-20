<button id="rzp-button1" class="btn btn-default check_out">Pay Now</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_BbZ7Iy5kpLnVby",
    "amount": "222", // 2000 paise = INR 20
    "name": "CREATIVE PRINTS",
    "description": "wwwww",
    "image": "img/logo.png",
    "handler": function (response){
       
       window.location="payment.php?ordid=1&payid="+response.razorpay_payment_id;
    },
    "prefill": {
        "name": "wwwww",
        "email": "abc@xyz.com"
    },
    "notes": {
        "address": "Hello World"
    },
    "theme": {
        "color": "#F37254"
    }
};
var rzp1 = new Razorpay(options);

document.getElementById('rzp-button1').onclick = function(e){
    alert("hi");
    rzp1.open();
    e.preventDefault();
}
</script>