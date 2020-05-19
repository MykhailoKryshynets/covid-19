function Message(){   
    var searchForm = document.forms[1];
    var keyBox = searchForm.elements[0];
    keyBox.value += ", ви підписались на наші новини! Дякуємо за це...";
    //const fs = require("fs");
    //fs.appendFileSync("Subscribers.txt", keyBox); 
    //document.write(keyBox.value); 
    alert( keyBox.value );
}