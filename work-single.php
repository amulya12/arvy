<?php 
    include("config.php");
	session_start(); 
	$user_id=$_SESSION['userid'];
	$firstname=$_SESSION['firstname'];
	$strategy_id=$_GET['strategy_id'];
	$strategies_map=$_SESSION['strategies_map'];
?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from pxltheme.com/html/bako/work-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Nov 2020 10:11:46 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>ARVY - Capital</title>
	<meta name="description" content="Bako - Personal Portfolio & Resume HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/slick.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/simplebar.html" type="text/css" media="all">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body style="background-image: url(images/bodyback.png);
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;" onload="startTime()">

<!-- preloader -->
<div id="preloader">
	<div class="outer">
		<div class="spinner">
			<div class="dot1"></div>
			<div class="dot2"></div>
		</div>
	</div>
</div>

<!-- site wrapper -->
<div class="site-wrapper">

	<!-- mobile header -->
	<div class="mobile-header py-2 px-3 mt-4">
		<button class="menu-icon mr-2">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<!-- <a href="index.html" class="logo"><img src="images/logo.png" alt="Bako Doe" /></a> -->
		<a href="index.html" class="site-title dot ml-2">Hi, <?php echo $firstname; ?></a>
	</div>

	<!-- header -->
	<header class="left float-left shadow-dark" id="header">
		<button type="button" class="close" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="header-inner d-flex align-items-start flex-column">
			<a href="index.html"><img src="images/logo.png" alt="ARVY logo" /></a>
			<a href="index.html" class="site-title dot mt-3">Hi, <?php echo $firstname; ?></a>
			<!-- <span class="site-slogan">Web Developer</span> -->
			
			<!-- navigation menu -->
			<nav style="padding-top: 13%;">
				<ul class="vertical-menu scrollspy" style="font-size: large;">
					<li><a href="#overview"  class="active"><i class="icon-book-open"></i>Overview</a></li>
					<li><a href="#checklist"><i class="icon-list"></i>Checklist</a></li>
					<li><a href="#calculator"><i class="icon-calculator"></i>Calculator</a></li>
					<li><a href="welcome.php"><i class="icon-arrow-left"></i>Back</a></li>
				</ul>
			</nav>
			
			<!-- footer -->
			<div class="footer mt-auto">
				<!-- <a href="#" class="btn btn-default btn-lg mr-3" style="margin: 0 0 20px 21%;"><i class="icon-home"></i>Home</a> -->
					<a href="login.php" class="btn btn-default btn-lg mr-3" style="margin-left: 20%;"><i class="icon-logout"></i>Logout</a>
					<div id="time" style="padding:20px 0 0 28%; font-size: 25px; font-weight: 200;"></div>

			</div>
		</div>
	</header>

    <!-- main content area -->
	<main class="content float-right">

        <!-- single portfolio -->
		<section class="single-portfolio background-white rounded padding-50 shadow-blue mt-0" style="margin-bottom:7%;" id="overview">
            <h2 class="archive-header" style="color:#ff5959"><?php echo $strategies_map[$strategy_id]['strategy_name']; ?></h2>
			
			<?php
				$image='"images/portfolio/'.$strategies_map[$strategy_id]['image'].'"';
				echo
				'<img src='."$image".' alt="image">';
			?>
            
            <div class="portfolio-content mt-5">
                <h3>Overview</h3>
                <p><?php echo $strategies_map[$strategy_id]['about_long']; ?></p>
            </div>
		</section>
		
		<section class="single-portfolio background-white rounded padding-50 shadow-blue mt-0" style="margin-bottom:7%;" id="checklist">
            <div class="portfolio-content">
				<h3 style="margin-top: 0;">Checklist</h3>
				option 1 :
					<select class="dropdown">
						<option>YES</option>
						<option>NO</option>
					</select>
					<a href="#" class="btn btn-alt" style="padding: 9px 15px 9px 15px; margin: 0px 0px 1px 10px; font-size: 13px;"><i class="icon-chart"></i>TRADE</a>
				<center>
					<div class="trede-check" style="margin-top:20px">
						.....
					</div>
				</center>
            </div>
		</section>
		
		<section class="single-portfolio background-white rounded padding-50 shadow-blue mt-0" style="margin-bottom:7%;" id="calculator">
            <div class="portfolio-content">
                <h3 style="margin-top: 0;">Position size Calculator</h3>
				<input class="calcInput" style="border: 2px solid #4A63E7; border-radius: 20px;outline: none; padding:7px; margin:12px;" type="number" placeholder="Max Amount" id="amountmax" name="amountmax">
				<input class="calcInput" style="border: 2px solid #4A63E7; border-radius: 20px;outline: none; padding:7px; margin:13px;" type="number" placeholder="Max Risk %" id="riskpercent" name="riskpercent">
				<input class="calcInput" style="border: 2px solid #4A63E7; border-radius: 20px;outline: none; padding:7px; margin:13px;" type="number" placeholder="Current Price" id="currprice" name="currprice">
				<input class="calcInput" style="border: 2px solid #4A63E7; border-radius: 20px;outline: none; padding:7px; margin:12px;" type="number" placeholder="SL Price" id="slprice" name="slprice"><br><br>
				<center><button href="#" onclick="calculatePosSize()" class="btn btn-alt" style="padding: 9px 15px 9px 15px; font-size: 13px;"><i class="icon-chart"></i>CALCULATE</button></center><br>
				<center><span style="border: 0px;font-size: 20px; color:black">Quantity :</span> <span id="qty" style="border: 0px;font-size: 20px; color:#FF5959;text-decoration:underline">&nbsp&nbsp&nbsp&nbsp--&nbsp&nbsp&nbsp&nbsp</span></center>
            </div>
		</section>

		<section class="single-portfolio background-white rounded padding-50 shadow-blue mt-0" style="margin-bottom:7%;" id="calculator">
            <div class="portfolio-content">
				<h3 style="margin-top: 0;">Target Projection Calculator</h3>
				<input class="calcInput" style="border: 2px solid #4A63E7; border-radius: 20px;outline: none; padding:7px; margin:12px;" type="number" placeholder="Quantity" id="qty2" name="qty2">
				<input class="calcInput" style="border: 2px solid #4A63E7; border-radius: 20px;outline: none; padding:7px; margin:13px;" type="number" placeholder="Current Price" id="currprice2" name="currprice2">
				<input class="calcInput" style="border: 2px solid #4A63E7; border-radius: 20px;outline: none; padding:7px; margin:13px;" type="number" placeholder="Target Price" id="targetprice" name="targetprice">
				<input class="calcInput" style="border: 2px solid #4A63E7; border-radius: 20px;outline: none; padding:7px; margin:12px;" type="number" placeholder="SL Price" id="slprice2" name="slprice2"><br><br>
				<center><button href="#" onclick="calculateTargetProj()" class="btn btn-alt" style="padding: 9px 15px 9px 15px; font-size: 13px;"><i class="icon-chart"></i>CALCULATE</button></center><br>
				<center><span style="border: 0px;font-size: 20px; color:black">Profit :</span> <span id="one" style="border: 0px;font-size: 20px; color:#FF5959;text-decoration:underline">&nbsp&nbsp&nbsp&nbsp--&nbsp&nbsp&nbsp&nbsp</span><span id="two" style="border: 0px;font-size: 15px; color:#4A63E7"></span>&nbsp&nbsp&nbsp&nbsp
				<span style="border: 0px;font-size: 20px; color:black">Loss :</span> <span id="three" style="border: 0px;font-size: 20px; color:#FF5959;text-decoration:underline">&nbsp&nbsp&nbsp&nbsp--&nbsp&nbsp&nbsp&nbsp</span><span id="four" style="border: 0px;font-size: 15px; color:#4A63E7"></span> <center>
            </div>
		</section>
		
	</main>

</div>

<!-- Go to top button -->
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- SCRIPTS -->
<script src="js/jquery-1.12.3.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/infinite-scroll.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/validator.js"></script>
<script src="js/custom.js"></script>

<script>
    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('time').innerHTML =
      h + ":" + m + ":" + s;
      var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
      return i;
    }

	function calculatePosSize(){
		var maxAmt=document.getElementById("amountmax").value;
		var riskPer=document.getElementById("riskpercent").value;
		var currPrice=document.getElementById("currprice").value;
		var slPrice=document.getElementById("slprice").value;

		var qty=(riskPer/100)*maxAmt;
		var second=currPrice-slPrice;
		qty=qty/second;
		document.getElementById("qty").textContent=Math.round( qty * 100 + Number.EPSILON ) / 100;
	}

	function calculateTargetProj(){
		var qty=document.getElementById("qty2").value;
		var currprice=document.getElementById("currprice2").value;
		var targetprice=document.getElementById("targetprice").value;
		var slPrice=document.getElementById("slprice2").value;

		var total=qty*currprice;
		var one=(targetprice-currprice)*qty;
		var two=(one/total)*100;
		var three=(currprice-slPrice)*qty;
		var four=(three/total)*100;

		document.getElementById("one").textContent=one;
		document.getElementById("two").textContent=" "+Math.round( two * 100 + Number.EPSILON ) / 100+"%";
		document.getElementById("three").textContent=three;
		document.getElementById("four").textContent=" "+Math.round( four * 100 + Number.EPSILON ) / 100+"%";
	}
</script>

</body>

<!-- Mirrored from pxltheme.com/html/bako/work-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Nov 2020 10:11:47 GMT -->
</html>