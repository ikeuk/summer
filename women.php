<?php require_once 'model.php'; ?>
<?php
									//User input
							$self = $_SERVER['PHP_SELF'];
								$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
							
								$perPage = 6; 
								//positioning
  								
  								$limit=" LIMIT " . ($page - 1) * $perPage . ',' . $perPage;
								//query
								$sql = "SELECT * FROM casuals ORDER BY id ASC";
								$query = $sql.$limit;
								$stmt = $pdo->prepare($query);
								$stmt->execute();
								$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

								?>

								<?php
									$sql1 = "SELECT * FROM casuals ORDER BY id ASC";
									$stmt = $pdo->prepare($sql1);
									$stmt->execute();
									$row_count = $stmt->rowCount();
								 $pages = ceil($row_count/$perPage);
									
?>  
<?php include("includes/header.php"); ?>
	<!--banner-->
	<div class="banner">
		<div class="container">
			<div class="banner-text">			
				<div class="col-sm-5 banner-left wow fadeInLeft animated" data-wow-delay=".5s">			
					<h2>On Entire Fashion range</h2>
					<h3>Coming Soon </h3>
					<h4>Our New Designs</h4>
					<div class="count main-row">
						<ul id="example">
							<li><span class="hours">00</span><p class="hours_text">Hours</p></li>
							<li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
							<li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
						</ul>
							<div class="clearfix"> </div>
							<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
							<script type="text/javascript">
								$('#example').countdown({
									date: '12/24/2020 15:59:59',
									offset: -8,
									day: 'Day',
									days: 'Days'
								}, function () {
									alert('Done!');
								});
							</script>
					</div>

				</div>
				<div class="col-sm-7 banner-right wow fadeInRight animated" data-wow-delay=".5s">			
					<section class="slider grid">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<h4>-30%</h4>
									<img src="images/b1.png" alt="">
								</li>
								<li>
									<h4>-25%</h4>
									<img src="images/b2.png" alt="">
								</li>
								<li>
									<h4>-32%</h4>
									<img src="images/b3.png" alt="">
								</li>
							</ul>
						</div>
					</section>
					<!--FlexSlider-->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "pagination",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					</script>
					<!--End-slider-script-->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>			
	<!--//banner-->

		<!--new-->
	<div class="gallery">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">Popular<span> Products</span></h3>
			</div>
			<div class="gallery-info">
				<?php foreach($result as $r) : ?>
			<div class="col-md-3 gallery-grid gallery-grid1 wow flipInY animated" data-wow-delay=".7s">
					<a href="products.php"><img src="upload/<?php echo $r['file']; ?>" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="single.php?autos=<?php echo $r['id']; ?>"><?php echo $r['productname']; ?> </a></h5>
						<p><span class="item_price">$<?php echo $r['price']; ?></span></p>
						<h4 class="sizes">Sizes: <a href="#"> s</a> - <a href="#">m</a> - <a href="#">l</a> - <a href="#">xl</a> </h4>
						<ul>
							<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							<li><a class="item_add" href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
	<!--//new-->
		<!--trend-->
	<div class="trend wow zoomIn animated" data-wow-delay=".5s">
		<div class="container">
			<div class="trend-info">
				<section class="slider grid">
					<div class="flexslider trend-slider">
						<ul class="slides">
							<?php foreach($result as $rr) : ?>
							<li>
								<div class="col-md-5 trend-left">
									<img src="upload/<?php echo $rr['file']; ?>" alt=""/>
								</div>
								<div class="col-md-7 trend-right">
									<h4>TOP 10 TRENDS <span>FOR YOU</span></h4>
									<h5>Flat 20% OFF</h5>
					
								</div>
								<div class="clearfix"></div>
							</li>
								<?php endforeach; ?>
						</ul>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!--//trend-->
	<?php include("includes/footer.php"); ?>