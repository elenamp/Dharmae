<?php
/********HEAD DE LAS PÁGINAS DE TERAPIAS***********/
function headTerapia($title){
	?>
    <title><?=$title?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"><meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Slider CSS -->
	<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
        <link type="text/css" rel="stylesheet" href="../css/EstilosIndex.css" />
	<link rel="shortcut icon" href="../img/icon/web-icon.png" />
    
  	<!-- jQuery -->
  	<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>

  	<!-- FlexSlider -->
  	<script type="text/javascript" src="../js/jquery.flexslider.js"></script>

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
