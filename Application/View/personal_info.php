<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>personal_info</title>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:700,400&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?=URL?>public/css/style.css" type="text/css" media="screen, projection" />
    <!--[if IE ]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /><![endif]-->
    <script type="text/javascript" src="<?=URL?>public/js/jquery.min.js"></script>
</head>

<body class="base">

<div class="wrapper">

    <div class="header">
        <div class="logo"><a href="<?=URL?>"><img src="<?=URL?>public/img/logo.png" alt="Лого" title="Логотип Компании"></a></div><!--.logo-->
        <div class="header_user_exit_2"><a title="Выход" href="<?=URL?>user/logout">Выход <span class="exit">&nbsp;</span></a></div>
        <div class="header_user_personal-account"><a title="Все лицевые счета" href="#"><span class="personal-account">&nbsp;</span>&nbsp;Все лицевые счета</a></div>
    </div><!-- .header-->

    <div class="middle">
        <div class="personal-info">
            <div class="personal-info_title">
                Личные данные
                <a herf="#" onClick='confirm("Подтвердить удаление")'><span class="delete">&nbsp;</span> Удалить учётную запись</a>
            </div><!-- .personal-info -->
            <div class="personal-info_left">
                <div class="personal-info_left_data">
                    <div>E-mail: <input type="text" value="<?=$email?>"></div>
                    <div>ФИО:<input type="text" value="<?=$name?>"></div>
                </div>
                <div class="personal-info_left_password">
                    Изменить пароль<br><br>
                    <div>Старый пароль:<input type="password" value="" placeholder="password"></div>
                    <div>Новый пароль:<input type="password" value=""placeholder="new-password" ></div>
                    <div>Ещё раз новый пароль:<input type="password" value="" placeholder="re-password"></div>
                </div>              
                <div class="personal-info_left_bottom">
                    <input class="orange-43" type="button" value="Сохранить">
                </div>  
            </div>
            <div class="personal-info_right">
                <div class="personal-info_right_title">Подписка на получение уведомлений</div>
                <input type="checkbox"  class="radio-input"><span class="radio-text">Уведомления о новых объявлениях и новостях</span><br>
                <input type="checkbox"  class="radio-input"><span class="radio-text">Счет-извещение по электронной почте</span><br>
                <input type="checkbox"  class="radio-input"><span class="radio-text">Напоминание о необходимости ввода новых показаний</span><br>
                <input type="checkbox"  class="radio-input"><span class="radio-text">Напоминание о приближении крайнего срока оплаты</span><br>
                <input type="checkbox"  class="radio-input"><span class="radio-text">Напоминание о начале начисленй пени</span><br><br>
                <input class="orange-43" type="button" value="Сохранить">
                
            </div>
            <div class="separator"></div>
        </div><!-- .personal-info -->


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