<?php
		session_start();
		include_once "registr/db/dbconnection.php";
		// unset($_SESSION['prod_id']);
		$result = $db->query("SELECT * FROM catalog");
		$catalog = $result->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="Robots" content="noindex, nofollow">
    <meta name="description" lang="ru" content="тест сайта">
          <meta name="description" lang="en" content="Test site">
    <title>Каталог</title>
    <link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- <script language="javascript" type="text/javascript" src="functions.js"></script> -->
<script language="javascript" type="text/javascript" src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- start menu -->

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
						<a href="cart.php">
							<h3> <div class="total">
								<span id="cart_total"></span></div>
								<img src="images/cart.png" alt=""/>
							</h3>
						</a>
						<p><a href="#" id="clear">Очистить корзину</a></p>
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
												<li><a href="electro.php">электроника</a></li>
												<li><a href="buttechnika.php">бытовая техника</a></li>
												<li><a href="allforchild.php">Все для детей</a></li>
												<li><a href="watch.php">Бижутерия и часы</a></li>
											</ul>
										  </div>
									   </div>
									</div>
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
							<form action="#" method="post">
								<input type="submit" value="">
								<input type="text" name="search" value="Поиск" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
							
							</form>
						</div>
					</div>				
				</div>			
	<!---->		
		</div>
	</div>
</div>
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Домой</a></li>
				<li class="active">Каталог</li>
			</ol>
		</div>
	</div>
<!--content-->
<div class="products">
	<div class="container">
		<h2>Каталог</h2>
		<div class="col-md-9">
			<div class="content-top1">
			<?php 
				foreach ($catalog as $good): 
			?>
			<div class="col-md-4 col-md4">
            <div class="col-md1 simpleCart_shelfItem">
						<a href="good.php?id=<?= $good["id"] ?>">
							<img class="img-responsive" src="<?= $good["img"] ?>" alt="" />
						</a>
						<h3><a href="good.php?id=<?= $good["id"] ?>"><?= $good["name"] ?></a></h3>
						<div class="price">
                                <h5 class="item_price">$<?= $good["cost"] ?></h5>
								<div class="add_cart" data-id="<?= $good['id']?>">Добавить в корзину</div>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>	
			
			<div class="clearfix"> </div>
			</div>	
		</div>
		<div class="col-md-3 product-bottom">
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
<!--seller-->
				<div class="product-bottom">
						<h3 class="cate">Бестселлеры</h3>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.html"><img class="img-responsive " src="images/note9.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.html" >Samsung galaxy note 9  </a></h6>
							<span class=" price-in1"> $899.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.html"><img class="img-responsive " src="images/s10+.png" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.html" >Samsung galaxy S10+  </a></h6>
							<span class=" price-in1"> $1935.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.html"><img class="img-responsive " src="images/p20.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.html" >HUAWEI P20 PRO  </a></h6>
							<span class=" price-in1"> $990.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>	
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="single.html"><img class="img-responsive " src="images/mate20.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="single.html" >HUAWEI MATE 20  </a></h6>
							<span class=" price-in1"> $980.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>		
				</div>

<!--//seller-->
<!--tag-->
				<div class="tag">	
						<h3 class="cate">Тэги</h3>
					<div class="tags">
						<ul>
							<li><a href="smartphone.php">Смарт</a></li>
							<li><a href="pc.php">ПК</a></li>
							<li><a href="electro.php">электр</a></li>
						<div class="clearfix"> </div>
						</ul>
				</div>					
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!--//content-->
<div class="footer">
		<div class="footer-bottom">
		<div class="container">
				<div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
                <h6>Меню</h6>
					<ul>
						<li><a href="index.php">Главная</a></li>
						<li><a href="catalog.php">Каталог</a></li>
						<li><a href="#">Умный дом</a></li>
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/cart.js"></script>

            </html>