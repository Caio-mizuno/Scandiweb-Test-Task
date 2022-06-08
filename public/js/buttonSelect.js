function clearBox(componente_id) {
    document.getElementById(componente_id).innerHTML = ""
}
var formEventClick = document.getElementById("product_type")
formEventClick.addEventListener('click', () => {

    var element = document.getElementById("product_type").value

    if (element == 'dvd') {
        document.getElementById('size').innerHTML = '<input id="size" name="size" type="text" class="form-control" placeholder="Size (MB)" aria-label="size" required="required">'
        clearBox("height") 
        clearBox("width") 
        clearBox("lenght") 
        clearBox("weight") 
    } else {
        if (element == 'furniture') {
            document.getElementById('height').innerHTML = '<input id="height" name="height" type="text" class="form-control" placeholder="Height (cm)" aria-label="height" required="required">'
            document.getElementById('width').innerHTML = '<input id="width" name="width" type="text" class="form-control" placeholder="Width (cm)" aria-label="width" required="required">'
            document.getElementById('lenght').innerHTML = '<input id="lenght" name="lenght" type="text" class="form-control" placeholder="Lenght (cm)" aria-label="lenght" required="required">'
            clearBox("size") 
            clearBox("weight") 
        } else {
            if (element == 'book') {
                document.getElementById('weight').innerHTML = '<input id="weight" name="weight" type="text" class="form-control" placeholder="Weight (Kg)" aria-label="weight" required="required">'
                clearBox("height") 
                clearBox("width") 
                clearBox("lenght") 
                clearBox("size") 
            }
        }
    }
})
