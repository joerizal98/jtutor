document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
      

button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  


fileInput.addEventListener( "change", function( event ) {
	var path = this.value;
 	var filename_no_fake = path.replace(/^.*\\/, "");
    the_return.innerHTML = filename_no_fake;  
});s