<?php
  function generateSlides($path){ 

  	$directory = $path;
  	$images = glob($directory . "*.jpg");
  	$indexOfImage = 1;

  	$output = "<ul id='sliderBottom'>";

    shuffle($images);

  	foreach($images as $image)
  	{
  		
  		$output .= "<li class='item-a' data-thumb='" . $image . "'  data-src='" . $image . "'><img src='" . $image . "' alt='" . basename($image,".jpg") . " | Danubiana'></li>";
  		$indexOfImage++;
  	}

  	$output .= "</ul>";
  	echo $output;
  }

  function generateSliderScript(){
  	$output = "<script>
  	$(document).ready(function() {
  		$('#sliderBottom').lightSlider({
  			gallery:true,
  			auto:true,
  			loop:true,
  			speed: 1000,
  			pause: 3000,
  			thumbItem : 0,
  			autoWidth: true,
  			pauseOnHover: true,
  			getCaptionFromTitleOrAlt: true,
  			controls: false,
  			slideMargin:3,
        enableDrag: false,
        slideEndAnimation: false,

  			onSliderLoad: function(el) {
  				el.lightGallery({
  					selector: '#sliderBottom .lslide'
  				});
  			} 
  		});  
  	});
  	</script>";

  	echo $output;
  } 

 // **********************************************************************************

  ?>