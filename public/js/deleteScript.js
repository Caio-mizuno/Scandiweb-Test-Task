let massDelete_btn = document.getElementById("delete-product-btn");

console.log('script working')

//AJAX FUNCTION
function deleteAjax(id){
    $.ajax({
        type:'post',
        url:"deleteProduct.php",
        data:{delete_id:id},
        success:function(){
        console.log(id + ": Foi deletado com SUCESSO")
        }
    });
}


//Delete Button
massDelete_btn.onclick = function(){  
    
    var markedCheckbox = document.getElementsByName('product_CheckBox');
    var content = ""
    for (var checkbox of markedCheckbox) {
        if (checkbox.checked){
            content = content + checkbox.value + " "
            deleteAjax(checkbox.value);
            //window.document.innerHTML = '<?php echo $box->deleteBox('+checkbox.value+'); ?>'
           
        }
    }

    console.log(content) 
    // window.location.replace("/productList"); 
}
