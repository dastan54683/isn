<?php
		session_start();
		include_once "registr/db/dbconnection.php";
		 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="Robots" content="noindex, nofollow">
    <meta name="description" lang="ru" content="тест сайта">
          <meta name="description" lang="en" content="Test site">
    <title>InDasPress</title>
		<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css'/>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script language="javascript" type="text/javascript" src="js/functions.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="jquery.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- start menu -->
<script src="js/bootstrap.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<script src="js/simpleCart.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
  <!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
    <body>
        <!--Шапка-->
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
				<div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
					<h1><a href="index.php">IndasPre<span>ssExpress</span></a></h1>	
				</div>
			<div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
					<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Очистить корзину</a></p>

					</div>
			</div>
			<div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
					<span><i class="glyphicon glyphicon-phone"></i>+77762074622</span>
					<p>Тех.Поддержка</p>
				</div>
			<div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">		
				<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
		<div class="container">
			<div class="head-top">
			<div class="n-avigation">
			
				<nav class="navbar nav_bottom" role="navigation">
				
				 <!-- Brand and toggle get grouped for better mobile display -->
				  <div class="navbar-header nav_2">
					  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					  <a class="navbar-brand" href="#"></a>
				   </div> 
				   <!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1">
							<li><a href="index.php">Главная</a></li>
							<li><a href="catalog.php">Каталог</a></li>
							<li class="dropdown mega-dropdown active">
								<a href="#" target="_self" class="dropdown-toggle" data-toggle="dropdown">Категории<span class="caret"></span></a>				
								<div class="dropdown-menu mega-dropdown-menu">
									<div class="container-fluid">
										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active" id="men">
											<ul class="nav-list list-inline">
												<li><a href="smartphone.php">Смартфоны</a></li>
												<li><a href="pc.php">Компьютеры</a></li>
												<li><a href="buttechnika.php">бытовая техника</a></li>
												<li><a href="watch.php">Бижутерия и часы</a></li>
											</ul>
										  </div>
									   </div>
									</div>
									<!-- Nav tabs -->
									                
								</div>				
							</li>
							<li><a href="/registr/login.php">Войти</a></li>
							<li class="last"><a href="contact.php">Контакты</a></li>
						</ul>
					 </div><!-- /.navbar-collapse -->
				  
				</nav>
			</div>
			
				
		<div class="clearfix"> </div>
			<!---pop-up-box---->   
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
						<div class="login">
							<form action="search.php" method="post">
								<input type="submit" value="">
								<input type="text" name="search" value="Поиск" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
							
							</form>
						</div>
					</div>				
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});															
						});
				</script>			
	<!---->		
		</div>
	</div>
</div>
<div class="banner">
	<div class="matter-banner">
	 	<div class="slider">
		 <div class="callbacks_container">
	      		<ul class="rslides" id="slider">
	        		<li>
							<img src="images/1.jpg" alt="">
							<div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							<h2>Добро пожаловать</h2>
							<h3>В магазин</h3>
							<h4>Здесь ты найдешь все</h4>
							<p>Что тебе нужно</p>
						</div>
			 		 <li>
	 	 	</div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="content-top1">
			<?php 
				$result = $db->query("SELECT * FROM `catalog`");
				$catalog = $result->fetchAll();
				if ($catalog[0]): 
			?>
			<div class="col-md-4 col-md4">
            <div class="col-md1 simpleCart_shelfItem">
						<a href="good.php?id=<?= $catalog[0]["id"] ?>">
							<img class="img-responsive" src="<?= $catalog[0]["img"] ?>" alt="" />
						</a>
						<h3><a href="good.php?id=<?= $catalog[0]["id"] ?>"><?= $catalog[0]["name"] ?></a></h3>
						<div class="price">
                                <h5 class="item_price">$<?= $catalog[0]["cost"] ?></h5>
                                <form action="checkout.php" method="post"><input style="display:none;" name="price" value="1000">
								<a href="#" class="item_add">Добавить в корзину</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<?php endif; ?>	
				<?php 
					for ($index = 1; $index < count($catalog); $index++):
				?>	
				<div class="col-md-4 col-md4">
							<div class="col-md1 simpleCart_shelfItem">
							<a href="good.php?id=<?= $catalog[$index]["id"] ?>">
								<img class="img-responsive" src="<?= $catalog[$index]["img"] ?>" alt="" />
							</a>
							<h3><a href="good.php?id=<?= $catalog[$index]["id"] ?>"><?= $catalog[$index]["name"] ?></a></h3>
							<div class="price">
																	<h5 class="item_price">$<?= $catalog[$index]["cost"] ?></h5>
																	<form action="checkout.php" method="post"><input style="display:none;" name="price" value="1000">
									<a href="#" class="item_add">Добавить в корзину</a>
									<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<?php endfor; ?>
			<div class="clearfix"> </div>
			</div>			
		</div>
	</div>
</div>
<!--//content-->
	<div class="con-tp">
		<div class="container">
			<div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
				<a href="smartphone.php">
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="images/smart.jpg" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
										<h4>Смартфоны</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 con-tp-lft animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
				<a href="pc.php">			
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="images/pc.jpg" alt="image" class="img-responsive zoom-img"></div>
							<div class="info-box">
								<div class="info-content simpleCart_shelfItem">
										<h4>Компьютеры</h4>	
								</div>
							</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
				<a href="buttechnika.php">
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="images/but.jpg" alt="image" class="img-responsive zoom-img"></div>
							<div class="info-box">
								<div class="info-content simpleCart_shelfItem">
										<h4>Бытовая техника</h4>	
								</div>
							</div>
					</div>
				</a>
			</div>
				<div class="clearfix"> </div>
			</div>	
		</div>
	</div>
        <!--подвал-->
        <div class="footer">
		<div class="footer-bottom">
		<div class="container">
				<div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
				<h6>Меню</h6>
					<ul>
						<li><a href="index.php">Главная</a></li>
						<li><a href="catalog.php">Каталог</a></li>
						<li><a href="account.php">Войти</a></li>
						<li><a href="contact.php">Контакты</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
					<h6>Помощь покупателю</h6>
					<ul>
						<li><a href="dostavka.php">Доставка и оплата</a></li>
						<li><a href="garantia.php">Гарантия и возрат</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-bottom-cate cate-bottom animated wow fadeInRight" data-wow-delay=".5s">
					<h6>Наш адрес</h6>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : Тагуль 2, Дом 56, <span>Алматы.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto: dastan54683@gmail.com"> InDasPressExpress@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Телефон : +77762074622</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
				<p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> © 2019 InDasPressExpress . All Rights Reserved .</p>
			</div>
	</div>
</div>              
    </body>
            </html>