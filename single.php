<?php require_once 'model.php'; ?>
<?php
		if (isset($_GET['search'])) {
			$sel = $_GET['search'];
		$sql = "SELECT * FROM furniture WHERE id = :id LIMIT 4";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $sel));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		} elseif(isset($_GET['basic'])){
			$bas = $_GET['basic'];
		$sql = "SELECT * FROM stretcher WHERE id = :id LIMIT 4";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $bas));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		} elseif(isset($_GET['autos'])){
			$autos = $_GET['autos'];
		$sql = "SELECT * FROM casuals WHERE id = :id LIMIT 4";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $autos));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['pet'])){
			$pet = $_GET['pet'];
		$sql = "SELECT * FROM pets WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $pet));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['beauty'])){
			$beauty = $_GET['beauty'];
		$sql = "SELECT * FROM beauty WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $beauty));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['blog'])){
			$blog = $_GET['blog'];
		$sql = "SELECT * FROM blog WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $blog));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['business'])){
			$business = $_GET['business'];
		$sql = "SELECT * FROM business WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $business));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['mobile'])){
			$mobile = $_GET['mobile'];
		$sql = "SELECT * FROM mobile WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $mobile));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['music'])){
			$music = $_GET['music'];
		$sql = "SELECT * FROM music WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $music));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['net'])){
			$net = $_GET['net'];
		$sql = "SELECT * FROM netbanking WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $net));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['personal'])){
			$personal = $_GET['personal'];
		$sql = "SELECT * FROM personal WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $personal));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['photo'])){
			$photo = $_GET['photo'];
		$sql = "SELECT * FROM photo WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $photo));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['real'])){
			$real = $_GET['real'];
		$sql = "SELECT * FROM real_e WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $real));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['editor'])){
			$editor = $_GET['editor'];
		$sql = "SELECT * FROM editor WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $editor));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['latest'])){
			$latest = $_GET['latest'];
		$sql = "SELECT * FROM latest WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $latest));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['aids'])){
			$aids = $_GET['aids'];
		$sql = "SELECT * FROM aids WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $aids));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['community'])){
			$community = $_GET['community'];
		$sql = "SELECT * FROM community WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $community));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['coperate'])){
			$coperate = (int) $_GET['coperate'];
		$sql = "SELECT * FROM coperate WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $coperate));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['ecommerce'])){
			$ecommerce = (int) $_GET['ecommerce'];
		$sql = "SELECT * FROM ecommerce WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $ecommerce));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['school'])){
			$school = (int) $_GET['school'];
		$sql = "SELECT * FROM school WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $school));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['email'])){
			$email = (int) $_GET['email'];
		$sql = "SELECT * FROM email WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $email));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['enter'])){
			$enter = (int) $_GET['enter'];
		$sql = "SELECT * FROM entertainment WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $enter));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['exterior'])){
			$exterior = (int) $_GET['exterior'];
		$sql = "SELECT * FROM exterior WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $exterior));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['fashion'])){
			$fashion = (int) $_GET['fashion'];
		$sql = "SELECT * FROM fashion WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $fashion));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['society'])){
			$society = (int) $_GET['society'];
		$sql = "SELECT * FROM society WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $society));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['sport'])){
			$sport = (int) $_GET['sport'];
		$sql = "SELECT * FROM sport WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $sport));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['travel'])){
			$travel = (int) $_GET['travel'];
		$sql = "SELECT * FROM travel WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $travel));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['ui'])){
			$ui = (int) $_GET['ui'];
		$sql = "SELECT * FROM ui WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $ui));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['uikits'])){
			$uikits = (int) $_GET['uikits'];
		$sql = "SELECT * FROM uikits WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $uikits));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['under'])){
			$under = (int) $_GET['under'];
		$sql = "SELECT * FROM under WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $under));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['hand'])){
			$hand = (int) $_GET['hand'];
		$sql = "SELECT * FROM handpicked WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $hand));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['game'])){
			$game = (int) $_GET['game'];
		$sql = "SELECT * FROM game WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $game));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['gameing'])){
			$gameing = (int) $_GET['gameing'];
		$sql = "SELECT * FROM gameing WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $gameing));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['home'])){
			$home = (int) $_GET['home'];
		$sql = "SELECT * FROM home_main WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $home));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['hotel'])){
			$hotel = (int) $_GET['hotel'];
		$sql = "SELECT * FROM hotel WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $hotel));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['human'])){
			$human = (int) $_GET['human'];
		$sql = "SELECT * FROM human WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $human));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['industrail'])){
			$industrail = (int) $_GET['industrail'];
		$sql = "SELECT * FROM industrail WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $industrail));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['interior'])){
			$interior = (int) $_GET['interior'];
		$sql = "SELECT * FROM interior WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $interior));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['laundry'])){
			$laundry = (int) $_GET['laundry'];
		$sql = "SELECT * FROM laundry WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $laundry));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['medical'])){
			$medical = (int) $_GET['medical'];
		$sql = "SELECT * FROM medical WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $medical));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['mobile_app'])){
			$mobile_app = (int) $_GET['mobile_app'];
		$sql = "SELECT * FROM mobile_app WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $mobile_app));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['video'])){
			$video = (int) $_GET['video'];
		$sql = "SELECT * FROM video WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $video));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['video_content'])){
			$video_content = (int) $_GET['video_content'];
		$sql = "SELECT * FROM video_content WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $video_content));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['web_element'])){
			$web_element = (int) $_GET['web_element'];
		$sql = "SELECT * FROM web_element WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $web_element));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['web_hosting'])){
			$web_hosting = (int) $_GET['web_hosting'];
		$sql = "SELECT * FROM web_hosting WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $web_hosting));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['wedding'])){
			$wedding = (int) $_GET['wedding'];
		$sql = "SELECT * FROM wedding WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $wedding));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}elseif(isset($_GET['bootstrap'])){
			$bootstrap = (int) $_GET['bootstrap'];
		$sql = "SELECT * FROM bootstrap WHERE id = :id";
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':id' => $bootstrap));
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
?>
<!DOCTYPE html> 
<html>
<head>
<title>Modern Shoppe a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Shoppe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--//js-->
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider1.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!--flex slider-->
<script src="js/imagezoom.js"></script>
<!--cart-->
<script src="js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
<!--web-fonts-->
<!--animation-effect-->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="top-header navbar navbar-default"><!--header-one-->
			<div class="container">
				<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
					<p>Welcome to Modern Shoppe <a href="register.php">Register </a> Or <a href="signin.php">Sign In </a></p>
				</div>
				<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated" data-wow-delay=".5s">
					<ul>
						<li><a href="#"> </a></li>
						<li><a href="#" class="pin"> </a></li>
						<li><a href="#" class="in"> </a></li>
						<li><a href="#" class="be"> </a></li>
						<li><a href="#" class="you"> </a></li>
						<li><a href="#" class="vimeo"> </a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-two navbar navbar-default"><!--header-two-->
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:pureflorida@gmail.com">pureflorida@gmail.com</a></li>			
					</ul>
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="index.php">Modern <b>Shoppe</b><span class="tag">Everything for Kids world </span> </a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
						<a href="contact.php"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> CONTACT US</a>						
					</div>
					<div class="header-right cart">
						<a href="#"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
						<h4><a href="checkout.php">
								<span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span>) 
						</a></h4>
						<div class="cart-box">
							<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="top-nav navbar navbar-default"><!--header-three-->
			<div class="container">
				<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!--navbar-header-->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav top-nav-info">
							<li><a href="index.php" class="active">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Baby<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column1">
									<div class="row">
										<div class="col-sm-4 menu-grids menulist1">
											<h4>Bath & Care</h4>
											<ul class="multi-column-dropdown ">
												<li><a class="list" href="products.php">Diapering</a></li>
												<li><a class="list" href="products.php">Baby Wipes</a></li>
												<li><a class="list" href="products.php">Baby Soaps</a></li>
												<li><a class="list" href="skincare.php">Lotions & Oils </a></li>
												<li><a class="list" href="deos.php">Powders</a></li>
												<li><a class="list" href="haircare.php">Shampoos</a></li>
											</ul>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Body Wash</a></li>
												<li><a class="list" href="products.php">Cloth Diapers</a></li>
												<li><a class="list" href="products.php">Baby Nappies</a></li>
												<li><a class="list" href="products.php">Medical Care</a></li>
												<li><a class="list" href="products.php">Grooming</a></li>
												<li><h6><a class="list" href="products.php">Combo Packs</a></h6></li>
											</ul>
										</div>																		
										<div class="col-sm-2 menu-grids">
											<h4>Baby Clothes</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Onesies & Rompers</a></li>
												<li><a class="list" href="products.php">Frocks</a></li>
												<li><a class="list" href="products.php">Socks & Tights</a></li>
												<li><a class="list" href="products.php">Sweaters & Caps</a></li>
												<li><a class="list" href="products.php">Night Wear</a></li>
												<li><a class="list" href="products.php">Quilts & Wraps</a></li>
											</ul>
										</div>
										<div class="col-sm-3 menu-grids">
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Blankets</a></li>
												<li><a class="list" href="products.php">Gloves & Mittens</a></li>
												<h4>Shop by Age</h4>
												<li><a class="list" href="kids.php">New Born (0 - 5 M)</a></li>
												<li><a class="list" href="products.php">5 - 10 Months</a></li>
												<li><a class="list" href="products.php">10 - 15 Months</a></li>
												<li><a class="list" href="products.php">15 Months Above</a></li>
											</ul>
										</div>
										<div class="col-sm-3 menu-grids">
											<ul class="multi-column-dropdown">
												<li><h6><a class="list" href="products.php">Feeding & Nursing</a></h6></li>
												<h4>Baby Gear</h4>
												<li><a class="list" href="products.php">Baby Walkers</a></li>
												<li><a class="list" href="products.php">Strollers</a></li>
												<li><a class="list" href="products.php">Prams & Toys</a></li>
												<li><a class="list" href="products.php">Cribs & Cradles</a></li>
												<li><a class="list" href="products.php">Booster Seats</a></li>
											</ul>
										</div>
										<div class="clearfix"> </div>
									</div>
								</ul>
							</li>
							<li class="dropdown grid">
								<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Clothings<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column2">
									<div class="row">
										<div class="col-sm-3 menu-grids">
											<h4>New Arrivals</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="women.php">Topwear</a></li>
												<li><a class="list" href="products.php">Bottomwear</a></li>
												<li><a class="list" href="inner.php">Innerwear</a></li>
												<li><a class="list" href="night.php">Nightwear</a></li>
												<li><a class="list" href="products.php">Swimwear</a></li>
												<li><a class="list" href="products.php">Jumpers</a></li>
											</ul>
										</div>																		
										<div class="col-sm-3 menu-grids">
											<h4>Boys</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Jeans</a></li>
												<li><a class="list" href="men.php">Shirts</a></li>
												<li><a class="list" href="men.php">T-shirts</a></li>
												<li><a class="list" href="products.php">Dhoti Kurta Sets</a></li>
												<li><a class="list" href="products.php">Winter wear</a></li>
												<li><a class="list" href="party.php">Party Wear</a></li>
											</ul>
										</div>
										<div class="col-sm-3 menu-grids">
											<h4>Girls</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Tops</a></li>
												<li><a class="list" href="products.php">Leggings</a></li>
												<li><a class="list" href="formals.php">Dresses </a></li>
												<li><a class="list" href="products.php">Skirts</a></li>
												<li><a class="list" href="casuals.php">Casual Dresses</a></li>
												<li><a class="list" href="products.php">Capris & 3/4ths</a></li>
											</ul>
										</div>
										<div class="col-sm-3 menu-grids new-add2">
											<a href="products.php">
												<h6>Kids Special</h6>
												<img src="images/img1.jpg" alt="">
											</a>
										</div>
										<div class="clearfix"> </div>
									</div>
								</ul>
							</li>
							<li class="dropdown grid">
								<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Accessories<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column menu-two multi-column3">
									<div class="row">
										<div class="col-sm-4 menu-grids">
											<ul class="multi-column-dropdown">
												<li><a class="list" href="jewellery.php">Jewellery</a></li>
												<li><a class="list" href="watches.php">Watches</a></li>
												<li><a class="list" href="cosmetics.php">Cosmetics </a></li>
												<li><a class="list" href="deos.php">Deo & Perfumes</a></li>
												<li><a class="list" href="haircare.php">Hair Care</a></li>
												<li><a class="list" href="shoes.php">Shoes</a></li>
												<li><a class="list" href="handbags.php">Handbags</a></li>
												<li><a class="list" href="skincare.php">Skin care</a></li>
											</ul>
										</div>
										<div class="col-sm-8 menu-grids">
											<a href="products.php">
												<div class="new-add">
													<h5>30% OFF <br> Today Only</h5>
												</div>	
											</a>
										</div>	
										<div class="clearfix"> </div>
									</div>	
								</ul>
							</li>				
							<li class="dropdown grid">
								<a href="#" class="dropdown-toggle list1" data-toggle="dropdown">Toys <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column4">
									<div class="row">
										<div class="col-sm-4 menu-grids menulist1">
											<h4>BABY</h4>
											<ul class="multi-column-dropdown ">
												<li><a class="list" href="products.php">Rockers</a></li>
												<li><a class="list" href="products.php">Rattles</a></li>
												<li><a class="list" href="products.php">Stroller Toys</a></li>
												<li><a class="list" href="products.php">Musical Toys </a></li>
												<li><a class="list" href="products.php">Doll Houses</a></li>
												<li><a class="list" href="products.php">Play Sets</a></li>
											</ul>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Toys Dolls</a></li>
												<li><a class="list" href="products.php">Pacifiers</a></li>
												<li><a class="list" href="products.php">Building Sets</a></li>
												<li><a class="list" href="products.php">Bath Toys</a></li>
												<li><a class="list" href="products.php">Soft Toys</a></li>
												<li><h6><a class="list" href="products.php">Special Off</a></h6></li>
											</ul>
										</div>																		
										<div class="col-sm-2 menu-grids">
											<h4>Pretend Play</h4>
											<ul class="multi-column-dropdown">
												<li><h6><a class="list" href="products.php">Video Games</a></h6></li>
												<li><a class="list" href="products.php">Kitchen Sets</a></li>
												<li><a class="list" href="products.php">Sand Toys</a></li>
												<li><a class="list" href="products.php">Tool Sets</a></li>
												<li><a class="list" href="products.php">Bath Toys</a></li>
												<li><a class="list" href="products.php">Medical Set</a></li>
											</ul>
										</div>
										<div class="col-sm-2 menu-grids">
											<h4>Outdoor</h4>
											<ul class="multi-column-dropdown">
												<li><a class="list" href="products.php">Swimming</a></li>
												<li><a class="list" href="products.php">Rideons </a></li>
												<li><a class="list" href="products.php">Scooters</a></li>
												<li><a class="list" href="products.php">Remote Control</a></li>
												<li><a class="list" href="products.php">Animals</a></li>
												<li><a class="list" href="products.php">Make up</a></li>
											</ul>
										</div>
										<div class="col-sm-4 menu-grids">
											<a href="products.php">
												<div class="new-add">
													<h5>30% OFF <br> Today Only</h5>
												</div>
											</a>	
										</div>
										<div class="clearfix"> </div>
									</div>
								</ul>
							</li>
							<li><a href="codes.php">Special Offers</a></li>
						</ul> 
						<div class="clearfix"> </div>
						<!--//navbar-collapse-->
						<header class="cd-main-header">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons -->
						</header>
					</div>
					<!--//navbar-header-->
				</nav>
				<div id="cd-search" class="cd-search">
					<form>
						<input type="search" placeholder="Search...">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Single page</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--single-page-->
	<div class="single">

		<div class="container">
			<?php foreach($result as $r) : ?>
			<div class="single-info">		
				<div class="col-md-6 single-top wow fadeInLeft animated" data-wow-delay=".5s">	

					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="upload/<?php echo $r['file']; ?>">
								<div class="thumb-image"> <img src="upload/<?php echo $r['file']; ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="upload/<?php echo $r['file']; ?>">
								 <div class="thumb-image"> <img src="upload/<?php echo $r['file']; ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="upload/<?php echo $r['file']; ?>">
							   <div class="thumb-image"> <img src="upload/<?php echo $r['file']; ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li> 
						</ul>
					</div>
					
				</div>
				<div class="col-md-6 single-top-left simpleCart_shelfItem wow fadeInRight animated" data-wow-delay=".5s">
					<h3><?php echo $r['productname']; ?></h3>
					<div class="single-rating">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5" checked>
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3">
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
						<p>5.00 out of 5</p>
						<a href="#">Add Your Review</a>
					</div>
					<h6 class="item_price">$<?php echo $r['price']; ?></h6>			
					<p>Etiam faucibus viverra libero vel efficitur. Ut semper nisl ut laoreet ultrices. Maecenas dictum arcu purus, sit amet volutpat purus viverra sit amet. Quisque lacinia quam sed tortor interdum, malesuada congue nunc ornare. Cum sociis natoque penatibus et magnis dis parturient montes</p>
					<ul class="size">
						<h4>Size</h4>
						<li><a href="#">6-12 M</a></li>
						<li><a href="#">1-2 Y</a></li>
						<li><a href="#">2-3 Y</a></li>
						<li><a href="#">3-4 Y</a></li>
					</ul>
					<ul class="color">
						<h4>Color</h4>
						<li><a href="#"></a></li>
						<li><a href="#" class="red"></a></li>
						<li><a href="#" class="green"></a></li>
						<li><a href="#" class="pink"></a></li>
					</ul>
					<div class="clearfix"> </div>
					<div class="quantity">
						<p class="qty"> Qty :  </p><input min="1" type="number" value="1" class="item_quantity">
					</div>
					<div class="btn_form">
						<a href="register.php?check=<?php echo $r['id'];?>" class="add-cart item_add">CHECKOUT</a>
						<a href="#" class="add-cart item_add">ADD TO CART</a>	
					</div>
				</div>
			   <div class="clearfix"> </div>
			</div>
			<?php endforeach; ?>
			<!--//collapse -->
			<!--related-products-->
		

		
		</div>
		
	</div>
	<!--//single-page-->
	<!--footer-->
	<?php include("includes/footer.php"); ?>