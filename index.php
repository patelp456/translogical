<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		#slideshow { 
		    margin: 50px auto; 
		    position: relative; 
		}

		#slideshow > div { 
		    position: absolute; 
		    top: 0px; 
		    left: 0px; 
		    right: 0px; 
		    bottom: 0px; 
		}

		img
		{
			 max-width:auto; 
			 max-height:auto;   
		}

	</style>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'config/css.php'; ?>
	<?php include 'config/js.php'; ?>
</head>

<body>

	
	<!-- body content begin-->
	<!-- grid system for featured animated article should be 2-7-3 -->
	<div class="container-fluid">
		<!-- navigation bar begin-->
		 <?php include 'functions/navbar.php'; ?> <br> <br> <br> <br> <br> <br>
		<!-- navigation bar end -->
	
		<div class="row">

			<div class="col-sm-2">

			</div>
		    
		    <div id="slideshow" class="col-sm-8">
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

		    <div class="col-sm-2" >
		    	
		    </div>
		</div>	
		

	</div>
	<!-- body content begin -->
	<!-- footer begin-->
	<!-- footer end -->

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
</body>
</html>