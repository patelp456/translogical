<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- stylesheet for slideshow of featured articles -->
	<link rel="stylesheet" type="text/css" href="stylesheets/animation.css">

	<!-- stylesheet for footer -->
	<link rel="stylesheet" type="text/css" href="stylesheets/footer.css">

	<?php include 'config/css.php'; ?>
	<?php include 'config/js.php'; ?>

	<!-- stylesheet for custom scrollbar -->
	<link rel="stylesheet" href="config/jquery.mCustomScrollbar.css" >

	<!-- custom scroll bar js file -->
	<script src="jquery.mCustomScrollbar.concat.min.js"></script>

</head>

<body class="mCustomScrollbar">

	<div class="container ">
		<!-- body content begin-->
		<!-- grid system for featured animated article should be 2-7-3 -->
		
		<!-- navigation bar begin-->
		 <?php include 'functions/navbar.php'; ?> 
		<!-- navigation bar end -->

		<div class="body">
			<div class="row">
				<div class="col-sm-1"> </div>
			    <div id="slideshow" class="col-sm-9">
				   	<div>
				    	<img class="img-responsive" src="images/1.jpg"> 
				   	</div>
				   	<div>
				    	<img class="img-responsive" src="images/2.jpg">
				   	</div>
				   	<div>
				    	<img class="img-responsive" src="images/3.jpg"> 
			   	  	</div>
				</div>	
			    <div class="col-sm-2" > </div>
			</div>
		</div>

		<!-- footer begin-->
		<?php include 'functions/footer.php'; ?>
		<!-- footer end -->

	</div>

	<script type="text/javascript">
		$(window).ready(function(){
			$("#slideshow > div:gt(0)").hide();

			setInterval(function() { 
			  $('#slideshow > div:first')
			    .fadeOut(1000)
			    .next()
			    .fadeIn(1000)
			    .end()
			    .appendTo('#slideshow');
			},  3000);
		});
	</script>

	<script>
	    (function($){
	        $(window).on("load",function(){
	            $(".content").mCustomScrollbar();
	        });
	    })(jQuery);

	    // $(".content").mCustomScrollbar({
	    //     axis:"yx" // vertical and horizontal scrollbar
	    // });
	</script>


</body>

</html>