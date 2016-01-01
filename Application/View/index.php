<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>_ ЖКХ _</title>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:700,400&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <!--[if IE ]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /><![endif]-->
    <link rel="stylesheet" href="<?=URL?>public/css/style.css" type="text/css" media="screen, projection" />
    <script type="text/javascript" src="<?=URL?>public/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=URL?>public/js/jquery.limit.js"></script>
    <script type="text/javascript" src="<?=URL?>public/js/jquery.formstyler.min.js"></script>
    <link rel="stylesheet" href="<?=URL?>public/css/jquery.formstyler.css" type="text/css" />
    <script type="text/javascript" src="<?=URL?>public/js/script.js"></script>
        <script type="text/javascript" src="<?=URL?>public/js/inputstyler.js"></script>
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
        <div class="container">

            <div class="header_text">
                Минск, ул. Рафиева, д. 45, корп. 2, кв. 175<br>
                <a href="#" title="Подробности лицевого счёта и дома">Подробности лицевого счёта и дома</a>
            </div><!-- .header_text-->
            <ul class="top_menu ul-clear">
                <li><a href="<?=URL?>news" title="Сводка">Сводка <span>на 20 ноября 2013</span></a></li>
                <li><a href="#" title="Показания счётчиков">Показания счётчиков</a></li>
                <li><a href="#" title="Начисления">Начисления <span>249 500</span></a></li>
                <li><a href="#" title="Где оплатить">Где оплатить</a></li>
                <li><a href="#" title="Куда обращаться">Куда обращаться</a></li>
                <li class="active"><a href="#" title="Доп. услуги">Доп. услуги</a></li>                
            </ul>
            <div class="searvise_search">
            <form id="searvise_search" method="get" action="#">
            <input class="search_text" type="text" placeholder="Искать...">
            <input class="search_btn" type="button" value="">
            <span class="input_clear">очистить</span>
            </form>
            </div>
            <ul class="bread_crumbs  ul-clear">
                <li><a href="#" title="Все услуги">Все услуги</a></li>
                <li class="bread_crumbs_separator">&rarr;</li> 
                <li>Ремонт и отделка</li>
                <li class="bread_crumbs_separator">&darr;</li>           
            </ul>   

            
            
            <div class="content">
                <div class="search">
                    <form>
                        Искать в этом разделе:
                        <input class="search_text" type="text" placeholder="Искать...">
                        <input class="search_btn" type="button" value="">
                    </form>
                </div>
                <div class="menu_main">

                    <div class="menu_main_block">
                        <span>Комплексный ремонт «под ключ»</span>
                        <ul  class="ul-clear">
                            <li><a href="#" title="Мастер на все руки (мелкий ремонт)">Мастер на все руки (мелкий ремонт)</a></li>
                            <li><a href="#" title="Ремонт ванной комнаты и санузла «под ключ»">Ремонт ванной комнаты и санузла «под ключ»</a></li>
                            <li><a href="#" title="Ремонт квартир, коттеджей">Ремонт квартир, коттеджей</a></li>
                            <li><a href="#" title="Ремонт офисов, общественных помещений ">Ремонт офисов, общественных помещений</a></li>
                            <li><a href="#" title="Вывоз мусора ">Вывоз мусора</a></li>
                        </ul>
                    </div><!-- .menu_main_block-->  
                    
                    <div class="menu_main_block">
                        <span>Отделочные работы. Внутренняя отделка стен</span>
                        <ul  class="ul-clear">
                            <li><a href="#" title="Лепнина ">Лепнина </a></li>
                            <li><a href="#" title="Монтаж гипсокартона">Монтаж гипсокартона</a></li>
                            <li><a href="#" title="Монтаж панелей ПВХ">Монтаж панелей ПВХ</a></li>
                            <li><a href="#" title="Нанесение декоративной штукатурки">Нанесение декоративной штукатурки</a></li>
                            <li><a href="#" title="Облицовка плиткой">Облицовка плиткой</a></li>
                            <li><a href="#" title="Оклейка обоями">Оклейка обоями</a></li>         
                            <li><a href="#" title="Покраска, обои под покраску">Покраска, обои под покраску</a></li>         
                            <li><a href="#" title="Художественная роспись. Фрески.">Художественная роспись. Фрески.</a></li>         
                            <li><a href="#" title="Шпаклевка стен">Шпаклевка стен</a></li>
                            <li><a href="#" title="Штукатурка стен">Штукатурка стен</a></li>
                        </ul>
                    </div><!-- .menu_main_block-->

                    <div class="menu_main_block">
                        <span>Перепланировка квартир</span>
                        <ul  class="ul-clear">
                            <li><a href="#" title="Возведение перегородок">Возведение перегородок</a></li>
                            <li><a href="#" title="Демонтаж стен">Демонтаж стен</a></li>
                            <li><a href="#" title="Межкомнатные перегородки ">Межкомнатные перегородки </a></li>
                            <li><a href="#" title="Разрушение перегородок, проемы">Разрушение перегородок, проемы</a></li>
                            <li><a href="#" title="Сантехнические перегородки">Сантехнические перегородки</a></li>
                        </ul>
                    </div><!-- .menu_main_block-->  

                    <div class="separator"></div>
                </div><!-- .menu_main-->


                <div class="card">
                    <div class="card_title"><img src="<?=URL?>public/demo/demo1.png" alt="">Козловский Н.В., ИП</div>
                    <ul  class="card_items ul-clear">
                        <li>Ремонт и отделка квартир</li>
                        <li>Плиточные работы</li>
                        <li>Сантехнические работы</li>
                        <li>Электрика</li>
                        <li>Малярные работы</li>
                        <li>Гипсокартонные работы</li>
                    </ul>

                    <div class="card_text">
                        <p>Наши специалисты - мастера своего дела, проверенные временем. Также мы беремся за отдельные виды внутренних отделочных работ. Поможем подобрать оптимальные материалы. Воплотим Ваши идеи в жизнь.</p> 
                        <p>Производим ремонт от косметического до люкс и премиум класса. Также выполним работы по покраске различных металлоконструкций из соответствующего оборудования (опыт и качество гарантируем).</p>
                    </div>

                    <div class="card_contact">
                        г. Минск, ул. Орловская, 40 А, офис 46
                        <ul class="ul-clear">
                            <li>(017) 233-32-37</li>
                            <li>(029) 677-06-71</li>
                            <li>(029) 770-67-17</li>
                            <li><a href="#" title="remontbest.by">remontbest.by</a></li>
                        </ul>
                    </div><!-- .sidebar#sideRight_two -->
                    <div class="separator"></div>
                </div><!-- card-->              

                <div class="card">
                    <div class="card_title"><img src="<?=URL?>public/demo/demo1.png" alt="">Козловский Н.В., ИП</div>
                    <ul  class="card_items ul-clear">
                        <li>Ремонт и отделка квартир</li>
                        <li>Плиточные работы</li>
                        <li>Сантехнические работы</li>
                        <li>Электрика</li>
                        <li>Малярные работы</li>
                        <li>Гипсокартонные работы</li>
                    </ul>

                    <div class="card_text">
                        <p>Наши специалисты - мастера своего дела, проверенные временем. Также мы беремся за отдельные виды внутренних отделочных работ. Поможем подобрать оптимальные материалы. Воплотим Ваши идеи в жизнь.</p> 
                        <p>Производим ремонт от косметического до люкс и премиум класса. Также выполним работы по покраске различных металлоконструкций из соответствующего оборудования (опыт и качество гарантируем).</p>
                    </div>

                    <div class="card_contact">
                        г. Минск, ул. Орловская, 40 А, офис 46
                        <ul class="ul-clear">
                            <li>(017) 233-32-37</li>
                            <li>(029) 677-06-71</li>
                            <li>(029) 770-67-17</li>
                            <li><a href="#" title="remontbest.by">remontbest.by</a></li>
                        </ul>
                    </div><!-- .sidebar#sideRight_two -->
                    <div class="separator"></div>
                </div><!-- card-->              
                <div class="pad-60"></div>
            </div><!-- .content-->
        </div><!-- .container-->
        
<!-- модальные START -->





<!-- Демо управление графиками  END -->



<!-- модальные END -->  


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