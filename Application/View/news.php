<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>_ ЖКХ news.html</title>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:700,400&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
		<!--[if IE ]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /><![endif]-->
	<link rel="stylesheet" href="<?=URL?>public/css/style.css" type="text/css" media="screen, projection" />
	<script type="text/javascript" src="<?=URL?>public/js/jquery.min.js"></script>
	<!-- script type="text/javascript" src="js/jquery.limit.js"></script -->
	<!-- script type="text/javascript" src="js/script.js"></script -->
	<script type="text/javascript" src="<?=URL?>public/js/catalog.js"></script>
</head>

<body class="base">

<div class="wrapper">

    <div class="header">
        <div class="logo"><a href="<?=URL?>"><img src="<?=URL?>public/img/logo.png" alt="Лого" title="Логотип Компании"></a></div><!--.logo-->
        <div class="header_user"><?=$name?></div>
        <div class="header_user_data"><a title="Изменить личные данные" href="<?=URL?>user">Изменить личные данные</a></div>
        <div class="header_user_exit"><a title="Выход" href="<?=URL?>user/logout">Выход <span class="exit">&nbsp;</span></a></div>
        <div class="header_user_personal-account"><a title="Все лицевые счета" href="#"><span class="personal-account">&nbsp;</span>Все лицевые счета</a></div>
    </div><!-- .header-->

	<div class="middle">
		<div class="poster">
			<div class="poster_title">
				<a class="news_title-link" href="<?=URL?>"><span class="light-blue-arrow">&nbsp;</span> Назад к сводке</a>
				<ul class="news_menu ul-clear">
					<li>
					  <a class="active" href="#" title="Ваш ЖЭС информирует">Ваш ЖЭС информирует</a>
					</li>
					<li>
					  <a href="#" title="Частные объявления">Частные объявления <span>2</span></a>
					</li>
					<li>
					  <a href="#" title="Важные новости">Важные новости <span>1</span></a>
					</li>   
				</ul>
			</div>
			
			<div class="poster_data">
				<div class="news_block_add"><a href="#">+ Разместить своё</a></div>

				<div class="news_block">
					<img src="<?=URL?>public/demo/house.png" alt="" title="">
					<span>15.03.2012</span></br>
					<a href="#">Продам квартиру. 7 этаж, трёхкомнатная, ремонт. Хорошая квартира в 3ем подъезде. Налетай, торопись</a>
					<p>Кластерное вибрато иллюстрирует ритмоформульный эффект «вау-вау», в таких условиях можно спокойно выпускать пластинки раз в три года.</p>
					<span>Константинопольский В. А.</span>
				</div>			

				<div class="news_block">
					<span>15.03.2012</span></br>
					<a href="#">Отдам мешок картошки в хорошие руки - НЕДОРОГО</a>
					<p></p>
					<span>Константинопольский В. А.</span>
				</div>			
			  
				<div class="news_block_old">
					<span>15.03.2012</span></br>
					<a href="#">22 сентября в актовом зале школы №145 состоится собрание жильцов вашего дома. Присутствие обязательно</a>
					<p>Кластерное вибрато иллюстрирует ритмоформульный эффект «вау-вау», в таких условиях можно спокойно выпускать пластинки раз в три года.</p>
					<span>Константинопольский В. А.</span>
				</div>
				
				<div class="news_block_old">
					<img src="<?=URL?>public/demo/house_2.png" alt="" title="">
					<span>15.03.2012</span></br>
					<a href="#">Продам квартиру. 7 этаж, трёхкомнатная, ремонт. Хорошая квартира в 3ем подъезде. Налетай, торопись</a>
					<p>22 сентября в актовом зале школы №145 состоится собрание жильцов вашего дома. Присутствие обязательно</p>
					<span>Константинопольский В. А.</span>
				</div>			
			
				<div class="news_block_old">
					<span>15.03.2012</span></br>
					<a href="#">Отдам мешок картошки в хорошие руки. Недорого.</a>
					<p></p>
					<span>Константинопольский В. А.</span>
				</div>
				
				<div class="news_block_old">
					<img src="<?=URL?>public/demo/house_2.png" alt="" title="">
					<span>15.03.2012</span></br>
					<a href="#">Продам квартиру. 7 этаж, трёхкомнатная, ремонт. Хорошая квартира в 3ем подъезде. Налетай, торопись</a>
					<p>22 сентября в актовом зале школы №145 состоится собрание жильцов вашего дома. Присутствие обязательно</p>
					<span>Константинопольский В. А.</span>
				</div>			
			</div><!-- .poster_data -->
		</div><!-- .poster-->
		<div class='pad-40'></div>
	</div><!-- .middle-->

</div><!-- .wrapper -->

<div class="footer">
	<div class="footer-inner">
		<div class="footer_question"><a href="<?=URL?>faq"><span class="question">&nbsp;</span> Вопросы и ответы</a></div>
		<ul class="footer-ul ul-clear">
			<li><a href="<?=URL?>catalog">Справочник организаций</a></li>
			<li><a href="<?=URL?>privileges">Льготы</a></li>
			<li><a href="<?=URL?>limits">Нормативы по теплу</a></li>
			<li><a href="<?=URL?>tariff">Тарифы</a></li>
		</ul>
		<div class="feedback">
			<a href="<?=URL?>faq">ОБРАТНАЯ СВЯЗЬ</a>
		</div>
		<div class="like">
							  <div class="b-social">
						  <div class="soc fb"><img src="<?=URL?>public/img/soc-fb.png"></div>
						  <div class="soc vk"><img src="<?=URL?>public/img/soc-vk.png"></div>
						  <div class="soc tw"><img src="<?=URL?>public/img/soc-tw.png"></div>
						  <div class="soc ok"><img src="<?=URL?>public/img/soc-ok.png"></div>

					  </div><!--b-social-->
		</div>
		<div class="banner"><a href="#"><img src="<?=URL?>public/img/banner.png" alt=''/></a></div>
		<div class="footer-like">
			<a href="#" class="twitter">&nbsp;</a>&nbsp; 
			<a href="#" class="facebook">&nbsp;</a>&nbsp;
			<a href="#" class="vk">&nbsp;</a>&nbsp;
		</div>
		<div class="copyrights">&copy; 2013, ЖКХ-online</div>
		<div class="support"><a href="#">Разработка сайта <img src="<?=URL?>public/css/pict/link.png" alt=''/></a></div> 

	</div>
</div><!-- .footer -->

</body>
</html>