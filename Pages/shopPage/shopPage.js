var open_modal_info = document.getElementsByClassName('product-items');
var close_modal_info_list = document.getElementsByClassName('close-modal-info');

for (var i = 0; i < open_modal_info.length; i++) {
    open_modal_info[i].addEventListener('click', function() {
        var product_id = this.getAttribute('id').split('-')[2];
        var modal_info = document.getElementById('modal-info-' + product_id);
        modal_info.style.display = "block";
    });
}


for (var i = 0; i < close_modal_info_list.length; i++) {
    close_modal_info_list[i].addEventListener('click', function() {
        var product_id = this.getAttribute('data-product-id');
        var modal_info = document.getElementById('modal-info-' + product_id);
        modal_info.style.display = "none";
    });
}

function buy_now(buttonValue) {
    
    console.log(buttonValue);
}


