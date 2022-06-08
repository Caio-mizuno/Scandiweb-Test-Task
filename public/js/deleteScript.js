let massDelete_btn = document.getElementById("delete-product-btn");

console.log('script working')

//AJAX FUNCTION
function deleteAjax(id){
    $.ajax({
        type:'post',
        url:"/deleteProduct",
        data:{delete_id:id},
        success:function(){
            document.location.reload(true);
        }
    });
}


//Delete Button
massDelete_btn.onclick = function(){  
    var markedCheckbox = document.getElementsByName('product_CheckBox');
    for (var checkbox of markedCheckbox) {
        if (checkbox.checked){
            deleteAjax(checkbox.value);
        }
    }
}
