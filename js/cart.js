$(document).ready(function () {
    // alert();
    var prod_id
    $.ajax({
            type: "POST",
            url: "/cart.php",
            data: 'count=1',
            success: function (count) {
                $('#cart_total').html(count);
            }
        });

    $('.add_cart').click(function (e) { 
        // console.log(e.target.getAttribute('data-id'));
        prod_id = $(this).data('id');
        var data = {
            'prod_id' : prod_id,
        };

        $.ajax({
            type: "POST",
            url: "/cart.php",
            data: data,
            success: function (count) {
                $('#cart_total').html(count);
            }
            
        });
    });
    $('#clear').click(function () { 

        $.ajax({
            type: "POST",
            url: "/cart.php",
            data: 'clear=1',
            success: function (count) {
                $('#cart_total').html(count);
            }
            
        });
    });
});