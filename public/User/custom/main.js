$("#buybtn").click(function () {
    var checkOutButton = document.getElementById("checkoutbtn");
    checkOutButton.disabled = false;
    var checkout = document.getElementById("checkout");
    checkout.style.opacity = 1;
});
