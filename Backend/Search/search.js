$(document).ready(function(){
    $('#search-bar').keyup(function(){
        var query = $(this).val();
        $('.product-items').each(function(){
            var productName = $(this).find('.product-name').text();
            if(productName.toLowerCase().includes(query.toLowerCase())) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});
