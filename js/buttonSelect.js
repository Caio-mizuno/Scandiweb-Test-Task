function elementVisibility(size,weight,height,width,length){
    (size == 1) ? window.document.getElementsByName("size")[0].style.visibility="visible" : window.document.getElementsByName("size")[0].style.visibility="hidden";
    (weight == 1) ? window.document.getElementsByName("weight")[0].style.visibility="visible" : window.document.getElementsByName("weight")[0].style.visibility="hidden";
    (height == 1) ? window.document.getElementsByName("height")[0].style.visibility="visible" : window.document.getElementsByName("height")[0].style.visibility="hidden";
    (width == 1) ? window.document.getElementsByName("width")[0].style.visibility="visible" : window.document.getElementsByName("width")[0].style.visibility="hidden";
    (length == 1) ? window.document.getElementsByName("length")[0].style.visibility="visible" : window.document.getElementsByName("length")[0].style.visibility="hidden";
}


function clearBox(componente_id) {
    document.getElementById(componente_id).innerHTML = ""
}

var formEventClick = document.getElementById("productType")
       elementVisibility(0,0,0,0,0); 
formEventClick.addEventListener('click', () => {

    var element = document.getElementById("productType").value
        
    if (element == 'DVD') {
        // dvdElement()
        elementVisibility(1,0,0,0,0);
    } else {
        if (element == 'Furniture') {
            // furnitureElement()
            elementVisibility(0,0,1,1,1);
        } else {
            if (element == 'Book') {
                // bookElement()
                elementVisibility(0,1,0,0,0);
            }
        }
    }
})
