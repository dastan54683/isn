<?php
	session_start();
	require $_SERVER['DOCUMENT_ROOT']."/registr/db/dbconnection.php";
        
	if(isset($_POST['search'])){
		$query = $_POST['search'];
		// dd($query,1);
        if (strlen($query) < 3) {
            $text = '<p>Слишком короткий поисковый запрос.</p>';
        } else if (strlen($query) > 128) { 
            $text = '<p>Слишком длинный поисковый запрос.</p>';
        } else { 
            $q = "SELECT * FROM catalog WHERE about LIKE '%$query%'";

            $stt = $db->prepare($q);
            $stt->execute();
            $result = $stt->fetchAll(PDO::FETCH_ASSOC);
			// dd($result,1);	
            if (!empty($result)) { 
				$num = count($result);
                $text = '<p>По запросу <b>'.$query.'</b> найдено совпадений: '.$num.'</p>';

                // do {
                //     // Делаем запрос, получающий ссылки на статьи
                //     $q1 = "SELECT * FROM `catalog` WHERE `uniq_id` = '$row[page_id]'";
                //     $result1 = mysql_query($q1);

                //     if (mysql_affected_rows() > 0) {
                //         $row1 = mysql_fetch_assoc($result1);
                //     }

                //     $text .= '<p><a> href="'.$row1['name'].'</a></p>
                //     <p>'.$row['desc'].'</p>';

                // } while ($row = mysql_fetch_assoc($result)); 
            } else {
                $text = '<p>По вашему запросу ничего не найдено.</p>';
            }
        } 
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    } 
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="Robots" content="noindex, nofollow">
    <meta name="description" lang="ru" content="тест сайта">
          <meta name="description" lang="en" content="Test site">
    <title>Результат</title>
		<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script language="javascript" type="text/javascript" src="functions.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- start menu -->
<script src="js/bootstrap.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
<script scr="js/jquery.flexslider.js"></script>
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
												<li><a href="electro.php">электроника</a></li>
												<li><a href="buttechnika.php">бытовая техника</a></li>
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
							<form action="search.php" method="post">
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
			</ol>
		</div>
	</div>
    <div class="single">
<div class="container">
<?=$text?>
<?php
foreach ($result as $key => $value) {
	?>
	<div class="col-md-4 col-md4">
		<div class="col-md1 simpleCart_shelfItem">
			<a href="good.php?id=<?= $value["id"] ?>">
				<img class="img-responsive" src="<?= $value["img"] ?>" alt="" />
			</a>
			<h3><a href="good.php?id=<?= $value["id"] ?>"><?= $value["name"] ?></a></h3>
			<div class="price">
				<h5 class="item_price">$<?= $value["cost"] ?></h5>
				<a href="#" class="item_add">Добавить в корзину</a>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<?php
}
?>
      
    </body>
            </html>