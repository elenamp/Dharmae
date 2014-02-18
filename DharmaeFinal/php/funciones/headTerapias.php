<?php
/********HEAD DE LAS PÁGINAS DE TERAPIAS***********/
function headTerapia($title){
	?>
    <title><?=$title?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <!-- Slider CSS -->
	<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
    <link type="text/css" rel="stylesheet" href="../css/EstilosIndex.css">
    
  	<!-- jQuery -->
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

  	<!-- FlexSlider -->
  	<script src="../js/jquery.flexslider.js"></script>

  	<script type="text/javascript">
    	$(function(){
      	  SyntaxHighlighter.all();
    	});

		$(window).load(function() {
	  	  $('.flexslider').flexslider({
	    	  animation: "slide",
	    	  animationLoop: false,
	    	  itemWidth: 300,
	    	  itemMargin: 5
	  	  });
		});
  </script>
	<?php
}
