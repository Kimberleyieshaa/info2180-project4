window.onload = function() {
	var results = document.getElementById("messages");

	/**/
    function successFunction(res) {
        responsexml = res.responseText;
        result.innerHTML = responsexml;
        console.log(responsexml);
        alert(responsexml);
    }
    
    /**
    * 
    */
    button.addEventListener("click", function() {
        new Ajax.Request("world.php", {
            parameters : {
              lookup: term.value,
              all: all.checked + "",
              format: "xml"
            },
            onSuccess : successFunction,
            method : "post"
        });
    });
}