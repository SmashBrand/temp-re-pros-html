$(document).ready(function(){
	
	//Initialize the multi-select functionality
	$(".chzn-select").chosen();

	//Image Switch Functionality
     $(".img-swap").hover(
          function(){this.src = this.src.replace("_off","_on");},
          function(){this.src = this.src.replace("_on","_off");
     });

	//Preload Images that will be switched     
	$.fn.preload = function() {
		this.each(function(){
			$('<img/>')[0].src = this;
		});
	}
	//jQuery Code To Create The Image Array
    // Declare the array variable
    var imgSwap = [];
    // Select all images used in the image swap function - in our case class "img-swap"
    $(".img-swap").each(function(){
        // Loop through all images which are used in our image swap function
        // Get the file name of the active images to be loaded by replacing _off with _on
        imgUrl = this.src.replace("_off","_on");
        // Store the file name in our array
        imgSwap.push(imgUrl);
    });
    // Pass the array to our preload function
    $(imgSwap).preload();
});