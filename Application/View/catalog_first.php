<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>_ ЖКХ catalog.html</title>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:700,400&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
        <!--[if IE ]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" /><![endif]-->
    <link rel="stylesheet" href="<?=URL?>public/css/style.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" type="text/css" href="<?=URL?>public/css/alert.css">
    <script type="text/javascript" src="<?=URL?>public/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=URL?>public/js/script.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.9.0/validate.min.js"></script>
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
        <div class="catalog">
            <div class="catalog_title">
                Справочник организаций
                <div class="catalog_title_right">
                    <div class="catalog_title_city">
                        Минск
                    </div>
                    <div class="catalog_title_city-other">
                        <a href="#">Другой город</a>
                    </div>                  
                </div>
            </div>
            <div class="catalog_search_first">
            <form id="search_organization" method="get" action="#">
            <input class="search_text" type="text" placeholder="Искать...">
            <input class="search_btn" type="button" value="">
            <span class="input_clear">очистить</span>
            <p>Например   <a href="#">ЖРЭО</a>   <a href="#">ЖЭС</a>   <a href="#">РСЦ</a>   <a href="#">Экстренные службы</a>   <a href="#">Поставщики услуг</a></p>
            </form>
            </div>
            <div class="catalog_menu" style="display:none">
                <ul class="ul-clear">
                    <li><a href="#" title="">Все организации</a></li>
                    <li><a href="#" title="">Поставщики услуг</a></li>          
                    <li class="last">Вода и канализация</li>   
                </ul>
            </div>
            <div class="catalog_search" style="display:none">
                <input type="button" class="general" value="&larr; Вернуться к общему поиску">
                <div class="catalog_search_inner">
                <form id="search" method="get" action="#">  
                    <label>Искать в этом разделе:</label>
                    <input class="search_text" type="text" placeholder="Искать...">
                    <input class="search_btn" type="button" value="">
                    </form>
                </div>
            </div>
            <div class="catalog_items">
                <div class="catalog_item">
                    <div class="catalog_item_title">
                        ЖРЭО Центрального района Эксплуатирующая организация Эксплуатирующая организация Эксплуатирующая организация Эксплуатирующая организация &nbsp; <span class="arrow-blue">&nbsp;</span>
                        <div class="catalog_item_title_token">Ж</div>
                    </div>
                    <div class="catalog_item_info">
                        <a href="#">Эксплуатирующая организация Эксплуатирующая организация Эксплуатирующая организация Эксплуатирующая организация Эксплуатирующая организация Эксплуатирующая организация</a><br>
                        Подчиняется: <a href="#">ЖРЭО Центрального района</a><br>
                        Управляет: <a href="#">Подразделение №5</a><br>
                    </div>
                    <div class="catalog_item_data">
                        <div class="catalog_item_data_title">
                            220117, Ул. Романовская Слобода, д. 14а <a href="#"><span class="map">&nbsp;</span> На карте </a>
                        </div>
                        <div class="catalog_item_data_box">
                            Диспетчерская служба<div class="pad-20"></div>
                            <span class="phone">&nbsp;</span>&nbsp;(17) 221-01-01<div class="pad-10"></div>
                            ПН—ПТ: 9<sup>00</sup> — 18<sup>00</sup><br>
                            ВТ, ЧТ, СБ: 14<sup>00</sup> — 20<sup>00</sup><br>
                        </div>
                        <div class="catalog_item_data_box">
                            Приёмная<div class="pad-20"></div>
                            <span class="phone">&nbsp;</span>&nbsp;(17) 221-01-01<div class="pad-10"></div>
                            ПН—ПТ: 9<sup>00</sup> — 18<sup>00</sup><br>
                            ВТ, ЧТ, СБ: 14<sup>00</sup> — 20<sup>00</sup><div class="pad-20"></div>
                            <a href="#">mail@zreo.by</a>
                        </div>
                        <div class="catalog_item_data_box">
                            Директор Василев В. А.<div class="pad-20"></div>
                            <span class="phone">&nbsp;</span>&nbsp;(17) 221-01-01<div class="pad-10"></div>
                            ПН—ПТ: 9<sup>00</sup> — 18<sup>00</sup><br>
                            ВТ, ЧТ, СБ: 14<sup>00</sup> — 20<sup>00</sup><div class="pad-20"></div>
                            <a href="#">mail@zreo.by</a>
                        </div>
                        <div class="separator pad-20"></div>
                        <a style="cursor: pointer" class="e-message"><span class="e-mail">&nbsp;</span>&nbsp;Написать электронное обращение в организацию</a>
                    </div>
                </div>
                <div class="catalog_item">
                    <div class="catalog_item_title">
                        ЖРЭО Центрального района &nbsp; <span class="arrow-blue">&nbsp;</span>
                        <div class="catalog_item_title_token">Ж</div>
                    </div>
                    <div class="catalog_item_info">
                        <a href="#">Эксплуатирующая организация</a><br>
                        Подчиняется: <a href="#">ЖРЭО Центрального района</a><br>
                        Управляет: <a href="#">Подразделение №5</a><br>
                    </div>
                    <div class="catalog_item_data">
                        <div class="catalog_item_data_title">
                            220117, Ул. Романовская Слобода, д. 14а <a href="#"><span class="map">&nbsp;</span> На карте </a>
                        </div>
                        <div class="catalog_item_data_box">
                            Диспетчерская служба<div class="pad-20"></div>
                            <span class="phone">&nbsp;</span>&nbsp;(17) 221-01-01<div class="pad-10"></div>
                            ПН—ПТ: 9<sup>00</sup> — 18<sup>00</sup><br>
                            ВТ, ЧТ, СБ: 14<sup>00</sup> — 20<sup>00</sup><br>
                        </div>
                        <div class="catalog_item_data_box">
                            Приёмная<div class="pad-20"></div>
                            <span class="phone">&nbsp;</span>&nbsp;(17) 221-01-01<div class="pad-10"></div>
                            ПН—ПТ: 9<sup>00</sup> — 18<sup>00</sup><br>
                            ВТ, ЧТ, СБ: 14<sup>00</sup> — 20<sup>00</sup><div class="pad-20"></div>
                            <a href="#">mail@zreo.by</a>
                        </div>
                        <div class="catalog_item_data_box">
                            Директор Василев В. А.<div class="pad-20"></div>
                            <span class="phone">&nbsp;</span>&nbsp;(17) 221-01-01<div class="pad-10"></div>
                            ПН—ПТ: 9<sup>00</sup> — 18<sup>00</sup><br>
                            ВТ, ЧТ, СБ: 14<sup>00</sup> — 20<sup>00</sup><div class="pad-20"></div>
                            <a href="#">mail@zreo.by</a>
                        </div>
                        <div class="separator pad-20"></div>
                        <a style="cursor: pointer" class="e-message"><span class="e-mail">&nbsp;</span>&nbsp;Написать электронное обращение в организацию</a>
                    </div>                  
                </div>
                <div class="catalog_item">
                    <div class="catalog_item_title">
                        ЖРЭО Центрального района &nbsp; <span class="arrow-blue">&nbsp;</span>
                        <div class="catalog_item_title_token">О</div>
                    </div>
                    <div class="catalog_item_info">
                        <a href="#">Эксплуатирующая организация</a><br>
                        Подчиняется: <a href="#">ЖРЭО Центрального района</a><br>
                        Управляет: <a href="#">Подразделение №5</a><br>
                    </div>
                    <div class="catalog_item_data">
                        <div class="catalog_item_data_title">
                            220117, Ул. Романовская Слобода, д. 14а <a href="#"><span class="map">&nbsp;</span> На карте </a>
                        </div>
                        <div class="catalog_item_data_box">
                            Диспетчерская служба<div class="pad-20"></div>
                            <span class="phone">&nbsp;</span>&nbsp;(17) 221-01-01<div class="pad-10"></div>
                            ПН—ПТ: 9<sup>00</sup> — 18<sup>00</sup><br>
                            ВТ, ЧТ, СБ: 14<sup>00</sup> — 20<sup>00</sup><br>
                        </div>
                        <div class="catalog_item_data_box">
                            Приёмная<div class="pad-20"></div>
                            <span class="phone">&nbsp;</span>&nbsp;(17) 221-01-01<div class="pad-10"></div>
                            ПН—ПТ: 9<sup>00</sup> — 18<sup>00</sup><br>
                            ВТ, ЧТ, СБ: 14<sup>00</sup> — 20<sup>00</sup><div class="pad-20"></div>
                            <a href="#">mail@zreo.by</a>
                        </div>
                        <div class="catalog_item_data_box">
                            Директор Василев В. А.<div class="pad-20"></div>
                            <span class="phone">&nbsp;</span>&nbsp;(17) 221-01-01<div class="pad-10"></div>
                            ПН—ПТ: 9<sup>00</sup> — 18<sup>00</sup><br>
                            ВТ, ЧТ, СБ: 14<sup>00</sup> — 20<sup>00</sup><div class="pad-20"></div>
                            <a href="#">mail@zreo.by</a>
                        </div>
                        <div class="separator pad-20"></div>
                        <a style="cursor: pointer" class="e-message"><span class="e-mail">&nbsp;</span>&nbsp;Написать электронное обращение в организацию</a>
                    </div>                  
                </div>
                <div class="catalog_item">
                    <div class="catalog_item_title">
                        ЖРЭО Центрального района &nbsp; <span class="arrow-blue">&nbsp;</span>
                        <div class="catalog_item_title_token">O</div>
                    </div>
                    <div class="catalog_item_info">
                        <a href="#">Эксплуатирующая организация</a><br>
                        Подчиняется: <a href="#">ЖРЭО Центрального района</a><br>
                        Управляет: <a href="#">Подразделение №5</a><br>
                    </div>
                    <div class="catalog_item_data">
                        <div class="catalog_item_data_title">
                            220117, Ул. Романовская Слобода, д. 14а <a href="#"><span class="map">&nbsp;</span> На карте </a>
                        </div>
                        <div class="catalog_item_data_box">
                            Диспетчерская служба<div class="pad-20"></div>
                            <span class="phone">&nbsp;</span>&nbsp;(17) 221-01-01<div class="pad-10"></div>
                            ПН—ПТ: 9<sup>00</sup> — 18<sup>00</sup><br>
                            ВТ, ЧТ, СБ: 14<sup>00</sup> — 20<sup>00</sup><br>
                        </div>
                        <div class="catalog_item_data_box">
                            Приёмная<div class="pad-20"></div>
                            <span class="phone">&nbsp;</span>&nbsp;(17) 221-01-01<div class="pad-10"></div>
                            ПН—ПТ: 9<sup>00</sup> — 18<sup>00</sup><br>
                            ВТ, ЧТ, СБ: 14<sup>00</sup> — 20<sup>00</sup><div class="pad-20"></div>
                            <a href="#">mail@zreo.by</a>
                        </div>
                        <div class="catalog_item_data_box">
                            Директор Василев В. А.<div class="pad-20"></div>
                            <span class="phone">&nbsp;</span>&nbsp;(17) 221-01-01<div class="pad-10"></div>
                            ПН—ПТ: 9<sup>00</sup> — 18<sup>00</sup><br>
                            ВТ, ЧТ, СБ: 14<sup>00</sup> — 20<sup>00</sup><div class="pad-20"></div>
                            <a href="#">mail@zreo.by</a>
                        </div>
                        <div class="separator pad-20"></div>
                        <a style="cursor: pointer" class="e-message"><span class="e-mail">&nbsp;</span>&nbsp;Написать электронное обращение в организацию</a>
                    </div>                  
                </div>              
            </div>
            <div class='pad-40'></div>
        </div><!-- .catalog-->
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

<!-- modal start -->

<div id="elektron" class="modal-window-wrapper"> <!-- Электронное обращение, -->
    <div class="div-elektron">
        <div class="btn-close b-close"><span class="exit-big">&nbsp;</span></div>
        <div class="div-elektron_title">
            Электронное обращение
            <div class="remark">
                В соответствии с Законом Республики Беларусь «Об обращении граждан и юридических лиц» от 18 июля 2011 г. №300-3 обращение в организацию может быть осуществленно в письменной, электронной или устной форме.
                <br>Обращения должны соответствовать требованиям, <a href="#">статей 12 и 25 Закона «Об обращениях граждан и юридических лиц»</a>.
            </div>
            
            <div class="remark-2">Все поля обязательны для заполнения</div>
        </div>
      <div class="registration-error"></div>
      <form id ="form">
        <table width='100%'>
            <tr>
                <td width="150">Место обращения:</td>
                <td width="365"><input type="text" class="gray-input" name="place"></td>
                <td rowspan="5" class="right-row">
                    Вы также можете прикрепить дополнительные документы, более полно раскрывающие суть вашего обращения:<br>
                    <div style="position:relative">
                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                    <input   class="input-file" type="file" name="file">&nbsp;<span class="delete">&nbsp;</span><br>
                    </div>
                    <div class="remark">Допустимые форматы: doc, docx, pdf, txt, jpg, rar, zip. Размер не более 1МБ.</div> 
                </td>               
            </tr>
            <tr>
                <td>ФИО:</td>
                <td><input type="text" name="fio"></td>
            </tr>
            <tr>
                <td>Адрес проживания:</td>
                <td><input type="text" name="address"></td>
            </tr>   
            <tr >
                <td>Контактный телефон например (375331234567):</td>
                <td><input type="text" name ="phone"></td>
            </tr>
            <tr>
                <td>Ответить:</td>
                <td style="line-height: 25px;" class="div-elektron_radio">
                    <input type="radio" name="browser" value="1" class="radio-input radio-mail" checked><span class="radio-text">по эл. почте: <input type="text" class="e-mail" name="email"></span><br/>
                    <input type="radio" name="browser" value="" class="radio-input old"><span class="radio-text">на почту по адресу проживания</span>
                </td>
            </tr>
            <tr >
                <td>Текст сообщения:</td>
                <td>
                    <div class='div-elektron-textarea'>
                        <textarea name="text"></textarea>
                        <div class="chars"></div>
                    </div>
                </td>
                <td class="td_info">

                    <input type="button" value="Отправить обращение" class="orange-43" id="send"> 
                    &nbsp;<a style="cursor:pointer" class="close">Отмена</a>
                </td>
            </tr>           
        </table>
      </form>
    </div>
</div>


<div id="end" class="modal-window-wrapper"> <!-- Регистрация 4 -->
  <div class="div-registration">
    <div class="btn-close b-close"><span class="exit-big">&nbsp;</span></div>
    <div class="div-registration_title"></div>
    <div class="div-registration_wrapper-2"></div>
  </div>  
</div>
<!-- modal end -->

<script type="text/javascript">
f = {
  error: "",
  message: "",
  file: false
}

$('.b-close').click(function() {
    $('.base').removeClass('modal_hide');
    $("#end").hide();
    $("#elektron").hide();
});
$('.e-message').click(function(){
  $('.base').addClass('modal_hide');
  $('#elektron').show();
});

$(':file').change(function(){
    var file = this.files[0];
    if (file == null) {
      f.file = false;
    } else {
      var reg = /jpeg|text|pdf|rar|msword|zip/;
      f.file = true;
      if (!reg.test(file.type)) {
        console.log(file);
        f.message = "Недопустимый формат файла";
        f.error = true;
        return 0;
      }
      if (file.size > 1050000) {
        f.message = "Размер файла больше максимального";
        f.error = true;
        return 0;
      }
      f.message = "";
      f.error = false;   
    }


});

$('#send').click(function(){
  file = [];
  var form = $('#form');
  var field = ["fio","address","phone"];
  var constraints = {
    phone: {
      format: {
        pattern: "^\\d{12}$",
        message: "Не правильный формат номера телефона"
      }
    },
    fio: {
      format: {
        pattern: "^[\\w\\x20]+$",
        message: "ФИО содержит не допустимые симфолы"
      }
    }

  };

  if ($('.radio-mail').attr("checked") == 'checked') {
    constraints.email = {email: {message: "Не действительный email"}};
    field.push("email");
  };
  var err = validate(form,constraints);
  error = [];
  for(var x in err) { 
    error.push(err[x][0]);
  };
  

  for (var i = field.length - 1; i >= 0; i--) {
    selector = "input[name="+field[i]+"]";
    if (validate.isEmpty($(selector).val())) {
      
      error.push("Все поля должны быть заполнены");
      break;
    }
  };
  if (f.file && f.error) {
    error.push(f.message);
  }
  if (error.length > 0) {
    $('.registration-error').load('<?=URL?>public/ajax/error.html',function(){
      $('.m-alert').html('');
      var content ='';
      for (var i = 0; i < error.length; i++) {
        content+='<li>'+error[i]+'</li>';
      };
      $('.m-alert').append(content);
    });
  } else {
    var formData = new FormData($('#form')[0]);
    $.ajax({
      url: '<?=URL?>user/message',
      type: 'post',
      success: function(e){
        $('#elektron').hide();
        $('#end').show();
        if (e.error) {
          $('.div-registration_title').html('Опсс...');
          $('.div-registration_wrapper-2').html('Что то пошло не так...');
        } else {
          $('.div-registration_title').html('Спасибо!');
          $('.div-registration_wrapper-2').html('Ваше обращение будет рассмотрено в ближайшее время');
        }
      },
      data: formData,
      processData: false,
      contentType: false,
    });
  }
});

$('.radio-mail').click(function(){
  $('.e-mail').attr('name','email');
});
$('.old').click(function(){
  $('.e-mail').attr('name','');
});

</script>
</body>
</html>