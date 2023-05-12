<?php 
    require 'db.php';
    $Pamyatka = get_Pamyatka();
    session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Soul </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	-->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-page">
        <?php require_once "aside.php"?>

		<div id="fh5co-main">
			<aside id="fh5co-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(https://imgfon.ru/Img/Crop/1280x960/Nature/mostik-trava-kamyshi-zakat-gorizont.jpg?img.1);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<h1>“Научись быть спокойным,  <strong></strong> и ты всегда будешь счастлив!” </h1>
					   					<h2> Парамаханса Йогананда <a href="http://freehtml5.co/" target="_blank"></a></h2>
											<p><a class="btn btn-primary btn-demo popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"> <i class="icon-monitor"></i> Смотреть</a> <a class="btn btn-primary btn-learn">Подробнее <i class="icon-arrow-right3"></i></a></p>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(https://avatars.dzeninfra.ru/get-zen_doc/3644947/pub_616d787f8c1fbb77e8648a1e_616d7ad2ea07c30af18aa33b/scale_1200);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<h1>"Успокойте ум, и душа заговорит"</h1>
											<h2>Ма Джая Сати Бхагавати <a href="http://freehtml5.co/" target="_blank"></a></h2>
											<p><a class="btn btn-primary btn-demo popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"> <i class="icon-monitor"></i> Смотреть</a> <a class="btn btn-primary btn-learn">Подробнее<i class="icon-arrow-right3"></i></a></p>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(https://all-mongolia.ru/wp-content/uploads/9/f/c/9fc0266addd1e688c7107efdc3584f46.jpeg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<h1>“Я медитирую, чтобы мой разум не усложнял мою жизнь”</h1>
											<h2>Шри Чинмой <a href="http://freehtml5.co/" target="_blank"></a></h2>
											<p><a class="btn btn-primary btn-demo popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"> <i class="icon-monitor"></i> Подробнее</a> <a class="btn btn-primary btn-learn">Подробнее<i class="icon-arrow-right3"></i></a></p>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</aside>

<?php
foreach ($Pamyatka as $Pamyatka): ?>	
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Памятка</h2>
				<div class="row">
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-settings"></i>
							</div>
							<div class="fh5co-text">
								<h3><?php echo $Pamyatka["nazvanie"]; ?></h3>
								<p><?php echo $Pamyatka["opisanie"]; ?> </p>
							</div>
						</div>
					</div>
<?php endforeach; ?>

					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-search4"></i>
							</div>
							<div class="fh5co-text">
								<h3>ВТОРОЕ</h3>
								<p>Попытайтесь определить ваши чувства, что именно Вас тревожит?</p>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-paperplane"></i>
							</div>
							<div class="fh5co-text">
								<h3>Третье</h3>
								<p>Найдите в каталоге именно ту медитацию, которая подходит Вам </p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
							<div class="fh5co-icon">
								<i class="icon-params"></i>
							</div>
							<div class="fh5co-text">
								<h3>Четвертое</h3>
								<p>Включите медитацию, не спеша, начинайте вслушиваться в слова диктора и полностью расслабить своё тело... </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Популярные ВИДЕО-медитации:</h2>
				<div class="row row-bottom-padded-md">
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<video width="263" src="video.mp4" poster="https://sun6-22.userapi.com/impg/TIWhAv5lEQ-6h0cBXqMA4-MmGAgS1qlTkowd4A/9YV6HG3IMtQ.jpg?size=604x403&quality=96&sign=1f7aaf41bf481ef4c9e08962fd808008&type=album" controls> </video>
							<div class="desc">
								<h3><a href="#">Благодарность</a></h3>
								<span><small> Урок 1</small> / <small> Занятие 1 </small> / <small> <i class="icon-comment"></i> </small></span>

								<p>Благодарность - хороший способ привлечь еще больше счастья..</p>
								<a href="#" class="lead">Подробнее <i class="icon-arrow-right3"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<video width="263" src="video.mp4" poster="https://stroginowakepark.ru/wp-content/uploads/2022/04/n5-1568x1045.png" controls> </video>
							<div class="desc">
								<h3><a href="#">Принятие</a></h3>
								<span><small>Урок 1 </small> / <small> Занятие 1 </small> / <small> <i class="icon-comment"></i> </small></span>
								<p>Медитация принятия позволит отпустить плохую энергию в вавшей жизни..</p>
								<a href="#" class="lead">Подробнее<i class="icon-arrow-right3"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<video width="263" src="video.mp4" poster="https://stroginowakepark.ru/wp-content/uploads/2022/04/n5-1568x1045.png" controls> </video>
							<div class="desc">
								<h3><a href="#">Осознанность</a></h3>
								<span><small>Урок 1 </small> / <small> Занятие 1 </small> / <small> <i class="icon-comment"></i> </small></span>
								<p>Осознанность - состояние, которое дается не всем с первого раза...</p>
								<a href="#" class="lead">Подробнее <i class="icon-arrow-right3"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<video width="263" src="video.mp4" poster="https://us.123rf.com/450wm/stnazkul/stnazkul2006/stnazkul200600028/148735129-good-looking-woman-practicing-yoga-at-home-use-block-for-more-comfortable-and-easier-for-practise.jpg?ver=6" controls> </video>
							<div class="desc">
								<h3><a href="#">Утренняя</a></h3>
								<span><small>Урок 1 </small> / <small> Занятие 1 </small> / <small> <i class="icon-comment"></i> </small></span>
								<p>Утренняя медитация даёт мощный энергетический импульс на весь день..</p>
								<a href="#" class="lead">Подробнее <i class="icon-arrow-right3"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="get-in-touch">
				<div class="fh5co-narrow-content">
					<div class="row">
						<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
							<h1 class="fh5co-heading-colored">У вас остались вопросы?</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<p class="fh5co-lead">Напишите по номеру: 126 - 288</p>
							<p><a href="#" class="btn btn-primary">Продолжить</a></p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

