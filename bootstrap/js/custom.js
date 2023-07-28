$(document).ready(function() {
    $('.incremenet-btn').click(function(e) {
        e.preventDefault();

        var qty = $('.input-qty').val();
        alert(qty);

        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 10) {
            value++;
            $('.input-qty').val(value);
        }
    });
});