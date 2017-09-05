<?php
  $spath = '';
  // /landing/forum-fall/
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Active World Business Forum</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $spath; ?>font-awesome/css/font-awesome.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo $spath; ?>css/style.css">
    <!-- liteAccordion css -->
    <link rel="stylesheet" href="<?php echo $spath; ?>css/liteaccordion.css">
    <!-- Google font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,700,300italic' rel='stylesheet' type='text/css'>
    <!-- FancyBox -->
    <link rel="stylesheet" href="<?php echo $spath; ?>fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="print-page" id="top">
  <header>
    <!-- Fixed navbar -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo-top" href="http://actimir.ru"><img height="30" src="<?php echo $spath; ?>img/logo.png" alt="Активный Мир"></a>
            <a class="navbar-brand phone-top" href="tel:+78123181810"><span class="text-primary">+7 (812) 318-18-10</span></a>
            <a class="navbar-brand email-top" href="mailto:office@actimir.ru"><span class="text-primary">office@actimir.ru</span></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav nav-center">
              <li><a href="#forum">О ФОРУМЕ</a></li>
              <li><a href="#speakers">СПИКЕРЫ</a></li>
              <li><a href="#program">ПРОГРАММА</a></li>
              <li><a href="#price">ЦЕНЫ</a></li>
              <li class="bilets"><a href="#hundred">+100</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="https://www.facebook.com/actimir" target="_blank"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
              <li><a href="https://vk.com/actimir_ru" target="_blank"><i class="fa fa-vk fa-lg" aria-hidden="true"></i></a></li>
              <li class="bg-reg"><a href="#price">ЗАБРОНИРОВАТЬ</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
  </header>
  <p id="back-top">
    <a href="#top"><span></span>Наверх</a>
  </p>
<main>
  <section class="main-content">
    <div class="triangle-right"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="main-name">
            active<br>
            world<br>
            business<br>
            forum
          </h1>
          <p class="title-second">Личная и</p>
          <p class="title-second">корпоративная</p>
          <p class="title-second">эффективность</p>
          <p class="title-second">в эпоху перемен</p>

            <div class="row inter">
                <button class="btn btn-default btn-primary-2" type="button" data-toggle="modal" data-target="#moreInfo">Хочу участвовать</button>
              <div class="modal fade" id="moreInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span></button>
                      <h4 class="modal-title" id="exampleModalLabel">Хочу участвовать</h4>
                    </div>
                    <div class="modal-body">
                      <form id="info-form" action="form_handler.php" class="form" onclick="validate(this.form)">
                        <div class="form-group">
                          <input id="firstname" type="text" class="form-control" name="first_name" placeholder="Имя" required="required">
                        </div>
                        <div class="form-group">
                          <input id="lastname" type="text" class="form-control" name="last_name" placeholder="Фамилия" required="required">
                        </div>
                        <div class="form-group">
                          <input id="email" type="text" class="form-control" name="email" placeholder="Email" required="required">
                        </div>
                        <p>
                          или
                        </p>
                        <div class="form-group">
                          <input id="phone" class="form-control" name="phone" placeholder="Телефон" required="required">
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button id="info-button" class="btn btn-primary" data-dismiss="modal" type="submit">Оставить заявку</button>
                    </div>
                    <script type="text/javascript">
                      function showError(container, errorMessage) {
                          container.className = 'error';
                          var msgElem = document.createElement('span');
                          msgElem.className = "error-message";
                          msgElem.innerHTML = errorMessage;
                          container.appendChild(msgElem);
                        }

                        function resetError(container) {
                          container.className = '';
                          if (container.lastChild.className == "error-message") {
                            container.removeChild(container.lastChild);
                          }
                        }

                        function validate(form) {
                          var elems = document.querySelector('.form').elements;
                          //console.log(elems.getAttribute);
                          resetError(elems.first_name.parentNode);
                          if (!elems.first_name.value) {
                            showError(elems.first_name.parentNode, ' Укажите свое имя.');
                          }

                          resetError(elems.last_name.parentNode);
                          if (!elems.last_name.value) {
                            showError(elems.last_name.parentNode, ' Укажите фамилию.');
                          }

                          resetError(elems.email.parentNode);
                          if (!elems.email.value) {
                            showError(elems.email.parentNode, ' Укажите email.');
                          }

                          resetError(elems.phone.parentNode);
                          if (!elems.phone.value) {
                            showError(elems.phone.parentNode, ' Не веден телефон.');
                          }
                        }
                    </script>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="row center-block reserv">
              <button class="btn btn-primary btn-primary-2" type="submit"><a href="#price">Забронировать</a></button>
            </div> -->
        </div>

        <div class="col-md-6">
          <div class="row speakers">
            <div class="col-xs-4 col-md-4 show">
              <img src="<?php echo $spath; ?>img/speaker/allen.jpg" width="160" alt="" />
              <!-- <i class="fa fa-video-camera fa-2x web" aria-hidden="true"></i> -->
              <span class="web">WEB</span>
              <div class="title-one text-center">
                <h4>Дэвид Аллен</h4>
                <button class="btn-speaker" role="button" type="button" data-toggle="modal" data-target="#allen">ПОДРОБНЕЕ</a>
              </div>
            </div>
          <div class="col-xs-4 col-md-4">
              <div class="green">
                <div class="text-center">
                  <p class="day">28</p>
                  <p class="month">октября</p>
                </div>
            </div>
          </div>
            <div class="col-xs-4 col-md-4 show">
              <img src="<?php echo $spath; ?>img/speaker/joe.jpg" width="160" alt="" />
              <span class="web">WEB</span>
              <div class="title-one text-center">
                <h4>Джо Язбек</h4>
                <button class="btn-speaker" role="button" type="button" data-toggle="modal" data-target="#joe">ПОДРОБНЕЕ</a>
              </div>
            </div>
          </div>

          <div class="row speakers">
            <div class="col-xs-4 col-md-4">
              <div class="fuksia">
                <span class="text-center">10 звездных спикеров на одной сцене!</span>
              </div>
            </div>
            <div class="col-xs-4 col-md-4 show">
              <img src="<?php echo $spath; ?>img/speaker/hewitt.jpg" width="160" alt="" />
              <span class="web">WEB</span>
              <div class="title-one text-center">
                <h4>Лес Хьюитт</h4>
                <button class="btn-speaker" role="button" type="button" data-toggle="modal" data-target="#hewitt">ПОДРОБНЕЕ</a>
              </div>
            </div>
            <div class="col-xs-4 col-md-4">
              <div class="violet">
                <span class="text-center">2016</span>
              </div>
            </div>
          </div>

          <div class="row speakers">
            <div class="col-xs-4 col-md-4 show">
              <img src="<?php echo $spath; ?>img/speaker/tarasov.jpg" width="160" alt="" />
              <span class="web">WEB</span>
              <div class="title-one text-center">
                <h4>Владимир Тарасов</h4>
                <button class="btn-speaker" role="button" type="button" data-toggle="modal" data-target="#tarasov">ПОДРОБНЕЕ</a>
              </div>
            </div>
            <div class="col-xs-4 col-md-4">
              <img src="<?php echo $spath; ?>img/logo-group.png" width="160" alt="" />
            </div>
            <div class="col-xs-4 col-md-4 show">
              <img src="<?php echo $spath; ?>img/speaker/arcish.png" width="160" alt="" />
              <div class="title-one text-center">
                <h4>Иван Арцишевский</h4>
                <button class="btn-speaker" role="button" type="button" data-toggle="modal" data-target="#arcish">ПОДРОБНЕЕ</a>
              </div>
            </div>
          </div>

          <div class="row speakers">
            <div class="col-xs-4 col-md-4 show">
              <img src="<?php echo $spath; ?>img/speaker/ryzov.jpg" width="160" alt="" />
              <div class="title-one text-center">
                <h4>Игорь Рызов</h4>
                <button class="btn-speaker" role="button" type="button" data-toggle="modal" data-target="#ryzov">ПОДРОБНЕЕ</a>
              </div>
            </div>
            <div class="col-xs-4 col-md-4 show">
              <img src="<?php echo $spath; ?>img/speaker/sidorenko.jpg" width="160" alt="" />
              <div class="title-one text-center">
                <h4>Елена Сидоренко</h4>
                <button class="btn-speaker" role="button" type="button" data-toggle="modal" data-target="#sidorenko">ПОДРОБНЕЕ</a>
              </div>
            </div>
            <div class="col-xs-4 col-md-4 show">
              <img src="<?php echo $spath; ?>img/speaker/mark_luchin.jpg" width="160" alt="" />
              <div class="title-one text-center">
                <h4>Марк Лучин</h4>
                <button class="btn-speaker" role="button" type="button" data-toggle="modal" data-target="#luchin">ПОДРОБНЕЕ</a>
              </div>
            </div>
          </div>

          <div class="row speakers">
            <div class="col-xs-4 col-md-4 show">
              <img src="<?php echo $spath; ?>img/speaker/levch.jpg" width="160" alt="" />
              <div class="title-one text-center">
                <h4>Андрей Левченко</h4>
                <button class="btn-speaker" role="button" type="button" data-toggle="modal" data-target="#levchenko">ПОДРОБНЕЕ</a>
              </div>
            </div>
            <div class="col-xs-4 col-md-4">
              <div class="blue">
                <div class="text-center">
                  <span class="text-center">10 взглядов на эффективность!</span>
                </div>
              </div>
            </div>
            <div class="col-xs-4 col-md-4 show">
              <img src="<?php echo $spath; ?>img/speaker/gil.jpg" width="160" alt="" />
              <div class="title-one text-center">
                <h4>Гил Петерсил</h4>
                <button class="btn-speaker" role="button" type="button" data-toggle="modal" data-target="#gil">ПОДРОБНЕЕ</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="main-content ">
    <div class="consult text-center" id="consult">
      <!-- <div class="second-page">
        <a href="http://actimir.ru"><img height="40" src="<?php echo $spath; ?>img/logo.png" alt="НА ГЛАВНУЮ" /></a>
        <h2 class="slim-header">Active World Business Forum</h2>
      </div> -->
        <h2>Только для участников Active World Business Forum:</h2>
          <div class="free-consult">абсолютно бесплатный консалтинг<br> персональный или корпоративный</div>
          <p>
            прямо на площадке Форума от оффлайн спикеров AWBF в свободное от выступления на сцене время
          </p>
            <ul>
              <li>Длительность одной сессии 30 &ndash; 45 минут.</li>
              <li>Количество консалтингов ограничено.</li>
              <li>Опция доступна в классах участия Стандарт, Бизнес и V.I.P.</li>
              <li>Необходима предварительная регистрация.</li>
            </ul>
            <button class="btn btn-default btn-primary-2 mob" name="button" role="button" type="button" data-toggle="modal" data-target="#consulting">Регистрация на консалтинг</button>
          </div>
        </div>

      <div class="modal fade" id="consulting" tabindex="-1" role="dialog" aria-labelledby="consultLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span></button>
              <h4 class="modal-title" id="consultLabel">Заявка на консалтинг</h4>
            </div>
            <div class="modal-body">
              <form id="consult-form" action="send.php" class="form">
                <div class="form-group">
                  <input id="firstname_cons" type="text" class="form-control" name="first_name" placeholder="Имя" required="required">
                </div>
                <div class="form-group">
                  <input id="lastname_cons" type="text" class="form-control" name="last_name" placeholder="Фамилия" required="required">
                </div>
                <div class="form-group">
                  <label for="select">Выберите спикера</label>
                  <select class="form-control" name="select" id="select">
                    <option value="-1">Выбрать спикера </option>
                    <option value="Арцишевский">Арцишевский</option>
                    <option value="Левченко">Левченко</option>
                    <option value="Лучин">Лучин</option>
                    <option value="Петерсил">Петерсил</option>
                    <option value="Рызов">Рызов</option>
                    <option value="Сидоренко">Сидоренко</option>
                  </select>
                </div>
                <div class="form-group">
                  <input id="email" type="text" class="form-control" name="email" placeholder="Email" required="required">
                </div>
                <p>
                  или
                </p>
                <div class="form-group">
                  <input class="form-control" name="phone" placeholder="Телефон" required="required">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button id="consult-button" class="btn btn-primary" data-dismiss="modal" type="submit">Оставить заявку</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="main-content">
      <div id="forum" class="row what-block text-center">
        <div class="row second-page">
          <!-- <a href="http://actimir.ru"><img height="40" src="<?php echo $spath; ?>img/logo.png" alt="НА ГЛАВНУЮ" /></a> -->
          <h3 class="slim-header"><b>Уникальность</b> Active World Business Forum</h3>
        </div>
        <div class="col-md-3">
          <div class="center-block">
            <a class="pointer" type="button" data-toggle="modal" data-target="#modal1">
              <i class="fa fa-globe fa-5x"></i>
              <p class="text-about">10 звездных спикеров из шести стран мира</p>
            </a>
          </div>
        </div>

        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
              </button>
              <h3 class="text-center">10 звездных спикеров</h3>
            </div>
            <div class="modal-body modal-about">
              <ol>
                <li><b><a role="button" type="button" data-toggle="modal" data-target="#allen">Дэвид Аллен</a></b> (web) &mdash; Персональная продуктивность от автора Методики GTD</li>
                <li><b><a role="button" type="button" data-toggle="modal" data-target="#ryzov">Игорь Рызов</a></b> &mdash; Переговорные и ораторские технологии</li>
                <li><b><a role="button" type="button" data-toggle="modal" data-target="#joe">Джо Язбек</a></b> (web) &mdash; Лидерские качества</li>
                <li><b><a role="button" type="button" data-toggle="modal" data-target="#arcish">Иван Арцишевский</a></b> &mdash; Коммуникационные навыки</li>
                <li><b><a role="button" type="button" data-toggle="modal" data-target="#hewitt">Лес Хьюитт</a></b> (web) &mdash; Система Power of Focus («Сила Фокусировки»)</li>
                <li><b><a role="button" type="button" data-toggle="modal" data-target="#sidorenko">Елена Сидоренко</a></b> &mdash; Психология эмоционального интеллекта</li>
                <li><b><a role="button" type="button" data-toggle="modal" data-target="#gil">Гил Петерсил</a></b> &mdash; Искусство нетворкинга</li>
                <li><b><a role="button" type="button" data-toggle="modal" data-target="#luchin">Марк Лучин</a></b> &mdash; Методы блиц-идентификации человека</li>
                <li><b><a role="button" type="button" data-toggle="modal" data-target="#levchenko">Андрей Левченко</a></b> &mdash; Целеполагание и целеопределение</li>
                <li><b><a role="button" type="button" data-toggle="modal" data-target="#tarasov">Владимир Тарасов</a></b> (web) &mdash; Преодоление комплекса инновационной неполноценности.</li>
              </ol>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
          </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="center-block">
            <a class="pointer" type="button" data-toggle="modal" data-target="#modal2">
              <i class="fa fa-video-camera fa-5x" aria-hidden="true"></i>
              <p class="text-about">
                Онлайн и оффлайн формат выступлений
              </p>
            </a>
          </div>
        </div>
        <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
              </button>
              <h3 class="text-center">Онлайн и оффлайн формат выступлений</h3>
            </div>
            <div class="modal-body modal-about">
              <p>Для более эффективного восприятия большого объема информации на Форуме чередуются «живые» выступления
              и включения web спикеров.</p>
              <p>Выступления онлайн спикеров &mdash; <b>по 18 минут</b>, оффлайн &mdash; <b>по 40-45 минут</b>.</p>
              <p>Для перевода англоязычных выступлений участникам выдается персональная профессиональная гарнитура.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
          </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="center-block">
            <a class="pointer" type="button" data-toggle="modal" data-target="#modal3">
              <i class="fa fa-briefcase fa-5x"></i>
              <p class="text-about">
                Концентрированный
                TED-формат Форума
              </p>
            </a>
          </div>
        </div>
        <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
              </button>
              <h3 class="text-center">Онлайн и оффлайн формат выступлений</h3>
            </div>
            <div class="modal-body modal-about">
              Все спикеры в концентрированном, cжатом <b>TED-формате</b> (без «воды», саморекламы, только по делу)
              поделятся своим взглядом на различные аспекты вопросов эффективности.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
          </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="center-block">
            <a class="pointer" type="button" data-toggle="modal" data-target="#modal4">
              <i class="fa fa-lightbulb-o fa-5x"></i>
              <p class="text-about">
                Бесплатные (!)
                экспресс-консалтинги
                оффлайн спикеров
              </p>
            </a>
          </div>
        </div>
        <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
              </button>
              <h3 class="text-center">Бесплатные (!) экспресс-консалтинги оффлайн спикеров</h3>
            </div>
            <div class="modal-body modal-about">
              Это возможность личного общения с экспертами по вопросам Вашего бизнеса.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
          </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="center-block">
            <a class="pointer" type="button" data-toggle="modal" data-target="#modal5">
              <i class="fa fa-pencil-square-o fa-5x" aria-hidden="true"></i>
              <p class="text-about">
                Дополнительные учебные материалы
                для участников
              </p>
            </a>
          </div>
        </div>
        <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
              </button>
              <h3 class="text-center">Дополнительные учебные материалы для участников</h3>
            </div>
            <div class="modal-body modal-about">
              Участники Форума смогут использовать рабочие тетради и после окончания Форума.
              Совместно со спикерами мы подготовили дополнительные материалы и домашние задания.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
          </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="center-block">
            <a class="pointer" type="button" data-toggle="modal" data-target="#modal6">
              <i class="fa fa-thumbs-up fa-5x"></i>
              <p class="text-about">
                Формат Edutainment (90% &mdash; обучение, 10% &mdash; развлечения)
              </p>
            </a>
          </div>
        </div>

        <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
              </button>
              <h3 class="text-center">Edutainment (90% &mdash; обучение, 10% &mdash; развлечения)</h3>
            </div>
            <div class="modal-body modal-about">
              Английский термин <b>«Edutainment»</b> составлен из двух слов &mdash; «education» (образование)
              и «entertainment» (развлечение) &mdash;
              и относится к практикам, в которых учебный процесс совмещается с развлечением.
              <p>Набирающий обороты формат &mdash; 90% обучения, 10% развлечения.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
          </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="center-block">
            <a class="pointer" type="button" data-toggle="modal" data-target="#modal7">
              <i class="fa fa-building fa-5x"></i>
              <p class="text-about">
                Активный профессиональный нетворкинг
              </p>
            </a>
          </div>
        </div>
        <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
              </button>
              <h3 class="text-center">Активный профессиональный нетворкинг</h3>
            </div>
            <div class="modal-body modal-about">
              На Форуме участники получат не только знания,
              но и расширят деловые контакты под руководством эксперта №1 по нетворкингу в России <b>Гила Петерсила.</b>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-center bg_about">
      <div class="col-xs-12">
        <h4 class="white-header">
          <strong>Active World Business Forum</strong><br><i>«Личная и корпоративная эффективность в эпоху перемен»</i>
          &mdash; <br>это Ваша Территория Роста!
        </h4>
        <p class="about-forum white">
          Это возможность получить ключевые навыки эффективности из первых уст &mdash;<br>
          от авторов систем и методик, признанных в стране и в мире.
        </p>
      </div>
    </div>
  </section>

  <section class="main-content">
    <div class="container" id="price">
      <div class="row second-page">
        <!-- <a href="http://actimir.ru"><img height="40" src="<?php echo $spath; ?>img/logo.png" alt="НА ГЛАВНУЮ" /></a> -->
        <h3 class="slim-header"><b>Участие</b> в Форуме</h3>
      </div>
      <p class="text-center info">
        Исключительное право продажи билетов всех классов комфортности
        принадлежит компании &laquo;Активный Мир&raquo;
      </p>
      
      <div class="row">
        <div class="col-xs-12 col-md-4 online">
          <div class="cost">
            <div class="backgrd"></div>
            <div class="pricing">3 000<i class="fa fa-rub" aria-hidden="true"></i></div>
            <div class="line"></div>
            <div class="prices">C 1 сентября 3 500<i class="fa fa-rub" aria-hidden="true"></i></div>
            <button class="btn btn-default slide-button" name="button" role="button" type="button" data-toggle="modal" data-target="#online">Купить билет</button>
          </div>
        </div>

        <div class="modal fade" id="online" tabindex="-1" role="dialog" aria-labelledby="onlineLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <img height="40" src="<?php echo $spath; ?>img/logo.png" alt="Активный Мир" />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-xs-11 col-md-4 content-border">
                    <h3 class="text-center">Web-трансляция</h3>
                    <ul>
                      <li>Трансляция в HD качестве<br>
                          в режиме реального времени на 1 устройстве<br>
                          (ПК, планшет, мобильное устройство)</li>
                          <li>Электронная версия материалов Форума</li>
                    </ul>
                    <div class="modal-cost text-center">
                      <span class="pricing">3 000</span><i class="fa fa-rub fa-3x" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <!-- <h3 class="modal-title">Информация об участнике</h3> -->
                    <form action="send.php" method="post">
                      <input name="class" type="hidden" class="none" id="form_price_type" value="ONLINE">
                      <div class="form-group">
                        <input type="text" name="company" placeholder="Наименование организации" class="form-control">
                        <label>
                          <input type="checkbox"> Без организации
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="count">
                          <select class="form-control" name="count">
                            <option value="-1">Выберите количество участников</option>
                            <option value="1">1 участник</option>
                            <option value="2">2 участника</option>
                            <option value="3">3 участника</option>
                            <option value="4">4 участника</option>
                            <option value="5">5 участников</option>
                          </select>
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="contact_name">Контактное лицо</label>
                          <input id="contact_name" type="text" class="form-control" placeholder="Имя*" name="name" required="required">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Фамилия*" name="surname" required="required">
                      </div>
                      <div class="form-group">
                        <input class="form-control" name="phone" placeholder="Телефон" required="required">
                      </div>
                      <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="E-mail*">
                      </div>
                      <div class="form-group">
                        <label for="promo">Ввести промокод</label>
                          <input id="promo" type="text" class="form-control">
                      </div>
                      <button type="submit" class="btn btn-primary btn-reg" data-dismiss="modal">Забронировать</button>
                      <span class="or"></span>
                      <a href="http://businessforum281016.ticketforevent.com/ru/" class="btn btn-default" role="button" target="_blank">Купить онлайн</a>
                    </form>
                  </div>
                  </div>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-md-4 econ">
          <div class="cost">
            <div class="backgrd"></div>
            <div class="pricing">9 000<i class="fa fa-rub" aria-hidden="true"></i></div>
            <div class="line"></div>
            <div class="prices">C 1 сентября 10 000<i class="fa fa-rub" aria-hidden="true"></i></div>
            <button class="btn btn-default slide-button" name="button" role="button" type="button" data-toggle="modal" data-target="#econ">Купить билет</button>
          </div>
        </div>

        <div class="modal fade" id="econ" tabindex="-1" role="dialog" aria-labelledby="onlineLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <img height="40" src="<?php echo $spath; ?>img/logo.png" alt="Активный Мир" />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-xs-11 col-md-4 content-border">
                    <h3 class="text-center">Эконом</h3>
                    <ul>
                      <li>Отдаленные ряды</li>
                      <li>Рассадка на стульях</li>
                      <li>Тетрадь с материалами Форума</li>
                      <li>Фото&ndash; и автограф&ndash;сессия</li>
                      <li>Кофе&ndash;брейки</li>
                      <li>Сертификат об участии в Форуме</li>
                    </ul>
                    <div class="modal-cost text-center">
                      <span class="pricing">9 000</span><i class="fa fa-rub fa-3x" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <!-- <h3 class="modal-title">Информация об участнике</h3> -->
                    <form action="form_handler.php" id="reserve-form">
                      <div class="form-group">
                        <input required="" type="text" name="company" id="oname" placeholder="Наименование организации" class="form-control">
                        <label>
                          <input type="checkbox"> Без организации
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="count">
                          <select class="form-control" name="count">
                            <option value="-1">Выберите количество участников</option>
                            <option value="1">1 участник</option>
                            <option value="2">2 участника</option>
                            <option value="3">3 участника</option>
                            <option value="4">4 участника</option>
                            <option value="5">5 участников</option>
                          </select>
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="contact_name2">Контактное лицо</label>
                        <input id="contact_name2" type="text" class="form-control" placeholder="Имя*" name="first_name">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Фамилия*" name="last_name">
                      </div>
                      <div class="form-group">
                        <input class="form-control" name="phone" placeholder="Телефон" required="required">
                      </div>
                      <div class="form-group">
                        <input required class="form-control" type="email" name="email" placeholder="E-mail*">
                      </div>
                      <div class="form-group">
                        <label for="promo2">Ввести промокод</label>
                          <input id="promo2" type="text" class="form-control">
                      </div>
                      <button type="submit" class="btn btn-primary btn-reg" data-dismiss="modal">Забронировать</button>
                      <span class="or"></span>
                      <a href="http://businessforum281016.ticketforevent.com/ru/" class="btn btn-default" role="button" target="_blank">Купить онлайн</a>
                    </form>
                  </div>
                  </div>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-md-4 stand">
          <div class="cost">
            <div class="backgrd"></div>
            <div class="pricing">14 000<i class="fa fa-rub" aria-hidden="true"></i></div>
            <div class="line"></div>
            <div class="prices">C 1 сентября 15 500<i class="fa fa-rub" aria-hidden="true"></i></div>
            <button class="btn btn-default slide-button" name="button" role="button" type="button" data-toggle="modal" data-target="#standart">Купить билет</button>
          </div>
        </div>

        <div class="modal fade" id="standart" tabindex="-1" role="dialog" aria-labelledby="onlineLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <img height="40" src="<?php echo $spath; ?>img/logo.png" alt="Активный Мир" />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
                </button>
                <!-- <h4 class="modal-title" id="onlineLabel">Онлайн</h4> -->
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-xs-11 col-md-4 content-border">
                    <h3 class="text-center">Стандарт</h3>
                    <ul>
                      <li>Середина зала</li>
                      <li>Рассадка за столами</li>
                      <li>Тетрадь с материалами Форума</li>
                      <li>Фото&ndash; и автограф&ndash;сессия</li>
                      <li>Кофе&ndash;брейки</li>
                      <li>Сертификат об участии в Форуме</li>
                      <li>Обед</li>
                    </ul>
                    <div class="modal-cost text-center">
                      <span class="pricing">14 000</span><i class="fa fa-rub fa-3x" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <!-- <h3 class="modal-title">Информация об участнике</h3> -->
                    <form action="form_handler.php" id="reserve-form">
                      <div class="form-group">
                        <input required="" type="text" name="company" id="oname" placeholder="Наименование организации" class="form-control">
                        <label>
                          <input type="checkbox"> Без организации
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="count">
                          <select class="form-control" name="count">
                            <option value="-1">Выберите количество участников</option>
                            <option value="1">1 участник</option>
                            <option value="2">2 участника</option>
                            <option value="3">3 участника</option>
                            <option value="4">4 участника</option>
                            <option value="5">5 участников</option>
                          </select>
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="contact_name3">Контактное лицо</label>
                        <input id="contact_name3" type="text" class="form-control" placeholder="Имя*" name="first_name">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Фамилия*" name="last_name">
                      </div>
                      <div class="form-group">
                        <input class="form-control" name="phone" placeholder="Телефон" required="required">
                      </div>
                      <div class="form-group">
                        <input required class="form-control" type="email" name="email" placeholder="E-mail*">
                      </div>
                      <div class="form-group">
                        <label for="promo3">Ввести промокод</label>
                          <input id="promo3" type="text" class="form-control">
                      </div>
                      <button type="submit" class="btn btn-primary btn-reg" data-dismiss="modal">Забронировать</button>
                      <span class="or"></span>
                      <a href="http://businessforum281016.ticketforevent.com/ru/" class="btn btn-default" role="button" target="_blank">Купить онлайн</a>
                    </form>
                  </div>
                  </div>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-md-4 business">
          <div class="cost">
            <div class="backgrd"></div>
            <div class="pricing">25 000<i class="fa fa-rub" aria-hidden="true"></i></div>
            <div class="line"></div>
            <div class="prices">C 1 сентября 27 000<i class="fa fa-rub" aria-hidden="true"></i></div>
            <button class="btn btn-default slide-button" name="button" role="button" type="button" data-toggle="modal" data-target="#business">Купить билет</button>
          </div>
        </div>

        <div class="modal fade" id="business" tabindex="-1" role="dialog" aria-labelledby="onlineLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <img height="40" src="<?php echo $spath; ?>img/logo.png" alt="Активный Мир" />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-xs-11 col-md-4 content-border">
                    <h3 class="text-center">Бизнес</h3>
                    <ul>
                      <li>Первые ряды</li>
                      <li>Рассадка за столами</li>
                      <li>Тетрадь с материалами Форума</li>
                      <li>Фото&ndash; и автограф&ndash;сессия</li>
                      <li>Кофе&ndash;брейки</li>
                      <li>Сертификат об участии в Форуме</li>
                      <li>Обед</li>
                      <li>Бизнес&ndash;бестселлер в подарок</li>
                      <li>Фуршет со спикерами (возможность личного общения)</li>
                      <li>Запись онлайн&ndash;трансляции</li>
                    </ul>
                    <div class="modal-cost text-center">
                      <span class="pricing">25 000</span><i class="fa fa-rub fa-3x" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <!-- <h3 class="modal-title">Информация об участнике</h3> -->
                    <form action="form_handler.php" id="reserve-form">
                      <div class="form-group">
                        <input required="" type="text" name="company" id="oname" placeholder="Наименование организации" class="form-control">
                        <label>
                          <input type="checkbox"> Без организации
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="count">
                          <select class="form-control" name="count">
                            <option value="-1">Выберите количество участников</option>
                            <option value="1">1 участник</option>
                            <option value="2">2 участника</option>
                            <option value="3">3 участника</option>
                            <option value="4">4 участника</option>
                            <option value="5">5 участников</option>
                          </select>
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="contact_name4">Контактное лицо</label>
                        <input id="contact_name4" type="text" class="form-control" placeholder="Имя*" name="first_name">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Фамилия*" name="last_name">
                      </div>
                      <div class="form-group">
                        <input class="form-control" name="phone" placeholder="Телефон" required="required">
                      </div>
                      <div class="form-group">
                        <input required class="form-control" type="email" name="email" placeholder="E-mail*">
                      </div>
                      <div class="form-group">
                        <label for="promo4">Ввести промокод</label>
                          <input id="promo4" type="text" class="form-control">
                      </div>
                      <button type="submit" class="btn btn-primary btn-reg" data-dismiss="modal">Забронировать</button>
                        <span class="or"></span>
                      <a href="http://businessforum281016.ticketforevent.com/ru/" class="btn btn-default" role="button" target="_blank">Купить онлайн</a>
                    </form>
                  </div>
                  </div>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-md-4 vip">
          <div class="cost">
            <div class="backgrd"></div>
            <div class="pricing">44 000<i class="fa fa-rub" aria-hidden="true"></i></div>
            <div class="line"></div>
            <div class="prices">C 1 сентября 46 500<i class="fa fa-rub" aria-hidden="true"></i></div>
            <button class="btn btn-default slide-button" name="button" role="button" type="button" data-toggle="modal" data-target="#vip">Купить билет</button>
          </div>
        </div>

        <div class="modal fade" id="vip" tabindex="-1" role="dialog" aria-labelledby="onlineLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <img height="40" src="<?php echo $spath; ?>img/logo.png" alt="Активный Мир" />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-xs-11 col-md-4 content-border">
                    <h3 class="text-center">V.I.P.</h3>
                    <ul>
                      <li>Выделенная зона у сцены</li>
                      <li>Рассадка за круглыми столами</li>
                      <li>Тетрадь с материалами Форума</li>
                      <li>Фото&ndash; и автограф&ndash;сессия</li>
                      <li>Кофе&ndash;брейки</li>
                      <li>Сертификат об участии в Форуме</li>
                      <li>VIP обед со спикерами</li>
                      <li>Бизнес&ndash;бестселлер в подарок</li>
                      <li>Фуршет со спикерами (возможность личного общения)</li>
                      <li>Запись онлайн&ndash;трансляции</li>
                    </ul>
                    <div class="modal-cost text-center">
                      <span class="pricing">44 000</span><i class="fa fa-rub fa-3x" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <!-- <h3 class="modal-title">Информация об участнике</h3> -->
                    <form action="form_handler.php" id="reserve-form">
                      <div class="form-group">
                        <input required="required" type="text" name="company" id="oname" placeholder="Наименование организации" class="form-control">
                        <label>
                          <input type="checkbox"> Без организации
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="count">
                          <select class="form-control" name="count">
                            <option value="-1">Выберите количество участников</option>
                            <option value="1">1 участник</option>
                            <option value="2">2 участника</option>
                            <option value="3">3 участника</option>
                            <option value="4">4 участника</option>
                            <option value="5">5 участников</option>
                          </select>
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="contact_name5">Контактное лицо</label>
                        <input id="contact_name5" type="text" class="form-control" placeholder="Имя*" name="first_name">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Фамилия*" name="last_name">
                      </div>
                      <div class="form-group">
                        <input class="form-control" name="phone" placeholder="Телефон" required="required">
                      </div>
                      <div class="form-group">
                        <input required class="form-control" type="email" name="email" placeholder="E-mail*">
                      </div>
                      <div class="form-group">
                        <label for="promo5">Ввести промокод</label>
                          <input id="promo5" type="text" class="form-control">
                      </div>
                      <button type="submit" class="btn btn-primary btn-reg" data-dismiss="modal">Забронировать</button>
                        <span class="or"></span>
                      <a href="http://businessforum281016.ticketforevent.com/ru/" class="btn btn-default" role="button" target="_blank">Купить онлайн</a>
                    </form>
                  </div>
                  </div>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-md-4">
          <div id="hundred" class="present">
            <h3>Первым <b>100</b><br> участникам</h3>
            <h4>Active World Business Forum<br> 28 октября 2016</h4>
            <button class="btn btn-default present-button" name="button" role="button" type="button" data-toggle="modal" data-target="#present">В подарок 1 билет!</button>
          </div>
        </div>

        <div class="modal fade" id="present" tabindex="-1" role="dialog" aria-labelledby="onlineLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <img height="40" src="<?php echo $spath; ?>img/logo.png" alt="Активный Мир" />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
                </button>
              </div>
              <div class="modal-body">
                <div class="present text-center">
                  <h3>Первые <b>100</b> участников</h3>
                   <h4>Active World Business Forum 28 октября 2016</h4>
                  <p class="bilet">
                    при оплате до 31 августа<br>
                    получают в подарок билет на мастер-класс<br>
                    <strong>Гарретта Джонстона</strong>
                    <a href="http://www.actimir.ru/event/ggoodbye-marketing-hello-customer" target="_blank">"Goodbuy marketing, hello customer!"</a><br>
                    09 декабря 2016
                  </p>
                  <p class="bilet">
                    Осталось:
                  </p>
                  <script src="http://megatimer.ru/s/f1f89cb31382c76789257a5961f1ba0e.js"></script>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div id="accordion">
        <ol>
            <li>
                <h2><span>ОНЛАЙН ТРАНСЛЯЦИЯ</span></h2>
                <div>
                    <h3 class="text-center">Онлайн трансляция</h3>
                    <ul>
                      <li>Электронная версия материалов Форума – для личного использования (1 устройство)</li>
                    </ul>
                    <div class="flex-row">
                      <h3 class="pricing1">4 500<i class="fa fa-rub" aria-hidden="true"></i></h3>
                      <button class="btn btn-default btn-primary-1 slide-button" name="button" role="button" type="button" data-toggle="modal" data-target="#registration">Забронировать</button>
                    </div>
                    <div class="flex-row">
                      <h3 class="pricing">3 000*<i class="fa fa-rub" aria-hidden="true"></i></h3>
                      <a href="http://businessforum281016.ticketforevent.com/ru/" class="btn btn-default btn-primary-1" role="button"style="display: flex;
align-items: center;" target="_blank">Купить онлайн</a>
                    </div>
                </div>
            </li>

            <li>
                <h2><span>ЭКОНОМ</span></h2>
                <div>
                  <h3 class="text-center">Эконом</h3>
                  <ul>
                    <li>Отдаленные ряды (рассадка на стульях)</li>
                    <li>Тетрадь с материалами и упражнениями</li>
                    <li>Фото&ndash; и автограф&ndash;сессия</li>
                    <li>Кофе&ndash;брейки</li>
                    <li>Сертификат</li>
                  </ul>
                  <div class="flex-row">
                    <h3 class="pricing1">10 500<i class="fa fa-rub" aria-hidden="true"></i></h3>
                    <button class="btn btn-default btn-primary-1 slide-button" name="button" role="button" type="button" data-toggle="modal" data-target="#registration">Забронировать</button>
                  </div>
                  <div class="flex-row">
                     <h3 class="pricing">9 000*<i class="fa fa-rub" aria-hidden="true"></i></h3>
                     <a href="http://businessforum281016.ticketforevent.com/ru/" class="btn btn-default btn-primary-1" role="button"style="display: flex;
align-items: center;" target="_blank">Купить онлайн</a>
                  </div>
                </div>
            </li>
            <li>
                <h2><span>СТАНДАРТ</span></h2>
                <div>
                  <h3 class="text-center">Стандарт</h3>
                  <ul>
                    <li>+ Ближние ряды со столами</li>
                    <li>Тетрадь с материалами и упражнениями</li>
                    <li>Фото&ndash; и автограф&ndash;сессия</li>
                    <li>Кофе&ndash;брейки</li>
                    <li>Сертификат</li>
                    <li>+ Обед</li>
                  </ul>
                  <div class="flex-row">
                    <h3 class="pricing1">18 500<i class="fa fa-rub" aria-hidden="true"></i></h3>
                    <button class="btn btn-default btn-primary-1 slide-button" name="button" role="button" type="button" data-toggle="modal" data-target="#registration">Забронировать</button>
                  </div>
                  <div class="flex-row">
                    <h3 class="pricing">14 000* <i class="fa fa-rub" aria-hidden="true"></i></h3>
                    <a href="http://businessforum281016.ticketforevent.com/ru/" class="btn btn-default btn-primary-1" role="button"style="display: flex;
align-items: center;" target="_blank">Купить онлайн</a>
                  </div>
                </div>
            </li>
            <li>
                <h2><span>БИЗНЕС</span></h2>
                <div>
                  <h3 class="text-center">Бизнес</h3>
                  <ul>
                    <li>+ Первые ряды со столами</li>
                    <li>Тетрадь с материалами и упражнениями</li>
                    <li>Фото&ndash; и автограф&ndash;сессия</li>
                    <li>Кофе&ndash;брейки</li>
                    <li>Сертификат</li>
                    <li>Обед</li>
                    <li>+ Бизнес&ndash;бестселлер в подарок</li>
                    <li>+ Фуршет со спикерами (возможность личного общения)</li>
                    <li>+ Запись онлайн&ndash;трансляции</li>
                  </ul>
                  <div class="flex-row">
                    <h3 class="pricing1">31 000<i class="fa fa-rub" aria-hidden="true"></i></h3>
                    <button class="btn btn-default btn-primary-1 slide-button" name="button" role="button" type="button" data-toggle="modal" data-target="#registration">Забронировать</button>
                  </div>
                  <div class="flex-row">
                    <h3 class="pricing">25 000* <i class="fa fa-rub" aria-hidden="true"></i></h3>
                    <a href="http://businessforum281016.ticketforevent.com/ru/" class="btn btn-default btn-primary-1" role="button"style="display: flex;
align-items: center;" target="_blank">Купить онлайн</a>
                  </div>
                </div>
            </li>
            <li>
                <h2><span>V.I.P.</span></h2>
                <div>
                  <h3 class="text-center">V.I.P.</h3>
                  <ul>
                    <li>+ Круглые столы у сцены</li>
                    <li>Тетрадь с материалами и упражнениями</li>
                    <li>Фото&ndash; и автограф&ndash;сессия</li>
                    <li>Кофе&ndash;брейки</li>
                    <li>Сертификат</li>
                    <li>+ VIP обед со спикерами</li>
                    <li>+ Бизнес&ndash;бестселлер в подарок</li>
                    <li>+ Фуршет со спикерами (возможность личного общения)</li>
                    <li>Запись онлайн&ndash;трансляции</li>
                  </ul>
                  <div class="flex-row">
                    <h3 class="pricing1">49 500<i class="fa fa-rub" aria-hidden="true"></i></h3>
                    <button class="btn btn-default btn-primary-1 slide-button" name="button" role="button" type="button" data-toggle="modal" data-target="#registration">Забронировать</button>
                  </div>
                  <div class="flex-row">
                    <h3 class="pricing">44 000* <i class="fa fa-rub" aria-hidden="true"></i></h3>
                    <a href="http://businessforum281016.ticketforevent.com/ru/" class="btn btn-default btn-primary-1" role="button"style="display: flex;
align-items: center;" target="_blank">Купить онлайн</a>
                  </div>
                </div>
            </li>
        </ol>
        <noscript>
            <p>Пожалуйста, включите JavaScript!</p>
        </noscript>
    </div> -->

      <!-- <div class="accordion">
      <div class="accordion-section"><a href="#accordion-1" class="accordion-section-title">ОНЛАЙН ТРАНСЛЯЦИЯ</a>
        <div id="accordion-1" class="accordion-section-content">
          <p>
            <h3 class="text-center">Онлайн трансляция</h3>
            <ul>
              <li>Электронная версия материалов Форума</li>
            </ul>
            <div class="flex-row">
              <h3 class="pricing1">4 500<i class="fa fa-rub" aria-hidden="true"></i></h3>
              <button class="btn btn-default btn-primary-1" name="button" role="button" type="button" data-toggle="modal" data-target="#registration">Забронировать</button>
            </div>
            <div class="flex-row">
              <h3 class="pricing">3 000*<i class="fa fa-rub" aria-hidden="true"></i></h3>
              <a href="http://businessforum281016.ticketforevent.com/ru/" class="btn btn-default btn-primary-1" role="button"style="display: flex;
align-items: center;" target="_blank">Купить онлайн</a>
            </div>
          </p>
        </div>
      </div>
      <div class="accordion-section"><a href="#accordion-2" class="accordion-section-title">ЭКОНОМ</a>
        <div id="accordion-2" class="accordion-section-content">
          <p>
            <h3 class="text-center">Эконом</h3>
            <ul>
              <li>Отдаленные ряды</li>
              <li>Тетрадь с материалами и упражнениями</li>
              <li>Фото&ndash; и автограф&ndash;сессия</li>
              <li>Кофе&ndash;брейки</li>
              <li>Сертификат</li>
            </ul>
            <div class="flex-row">
              <h3 class="pricing1">10 500<i class="fa fa-rub" aria-hidden="true"></i></h3>
              <button class="btn btn-default btn-primary-1" name="button" role="button" type="button" data-toggle="modal" data-target="#registration">Забронировать</button>
            </div>
            <div class="flex-row">
               <h3 class="pricing">9 000*<i class="fa fa-rub" aria-hidden="true"></i></h3>
               <a href="http://businessforum281016.ticketforevent.com/ru/" class="btn btn-default btn-primary-1" role="button"style="display: flex;
align-items: center;" target="_blank">Купить онлайн</a>
            </div>
          </p>
        </div>
      </div>
      <div class="accordion-section"><a href="#accordion-3" class="accordion-section-title">СТАНДАРТ</a>
        <div id="accordion-3" class="accordion-section-content">
          <p>
            <h3 class="text-center">Стандарт</h3>
            <ul>
              <li>+ Ближние ряды со столами</li>
              <li>Тетрадь с материалами и упражнениями</li>
              <li>Фото&ndash; и автограф&ndash;сессия</li>
              <li>Кофе&ndash;брейки</li>
              <li>Сертификат</li>
              <li>+ Обед</li>
            </ul>
            <div class="flex-row">
              <h3 class="pricing1">18 500<i class="fa fa-rub" aria-hidden="true"></i></h3>
              <button class="btn btn-default btn-primary-1" name="button" role="button" type="button" data-toggle="modal" data-target="#registration">Забронировать</button>
            </div>
            <div class="flex-row">
              <h3 class="pricing">14 000* <i class="fa fa-rub" aria-hidden="true"></i></h3>
              <a href="http://businessforum281016.ticketforevent.com/ru/" class="btn btn-default btn-primary-1" role="button"style="display: flex;
align-items: center;" target="_blank">Купить онлайн</a>
            </div>
          </p>
        </div>
      </div>
      <div class="accordion-section"><a href="#accordion-4" class="accordion-section-title">БИЗНЕС</a>
        <div id="accordion-4" class="accordion-section-content">
          <p>
            <h3 class="text-center">Бизнес</h3>
            <ul>
              <li>+ Первые ряды со столами</li>
              <li>Тетрадь с материалами и упражнениями</li>
              <li>Фото&ndash; и автограф&ndash;сессия</li>
              <li>Кофе&ndash;брейки</li>
              <li>Сертификат</li>
              <li>Обед</li>
              <li>+ Бизнес&ndash;бестселлер в подарок</li>
              <li>+ Фуршет со спикерами (возможность личного общения)</li>
              <li>+ Запись онлайн&ndash;трансляции</li>
            </ul>
            <div class="flex-row">
              <h3 class="pricing1">31 000<i class="fa fa-rub" aria-hidden="true"></i></h3>
              <button class="btn btn-default btn-primary-1" name="button" role="button" type="button" data-toggle="modal" data-target="#registration">Забронировать</button>
            </div>
            <div class="flex-row">
              <h3 class="pricing">25 000* <i class="fa fa-rub" aria-hidden="true"></i></h3>
              <a href="http://businessforum281016.ticketforevent.com/ru/" class="btn btn-default btn-primary-1" role="button"style="display: flex;
align-items: center;" target="_blank">Купить онлайн</a>
            </div>
          </p>
        </div>
      </div>
      <div class="accordion-section"><a href="#accordion-5" class="accordion-section-title">V.I.P.</a>
        <div id="accordion-5" class="accordion-section-content">
          <p>
            <h3 class="text-center">V.I.P.</h3>
            <ul>
              <li>+ Круглые столы у сцены</li>
              <li>Тетрадь с материалами и упражнениями</li>
              <li>Фото&ndash; и автограф&ndash;сессия</li>
              <li>Кофе&ndash;брейки</li>
              <li>Сертификат</li>
              <li>+ VIP обед со спикерами</li>
              <li>+ Бизнес&ndash;бестселлер в подарок</li>
              <li>+ Фуршет со спикерами (возможность личного общения)</li>
              <li>Запись онлайн&ndash;трансляции</li>
            </ul>
            <div class="flex-row">
              <h3 class="pricing1">49 500<i class="fa fa-rub" aria-hidden="true"></i></h3>
              <button class="btn btn-default btn-primary-1" name="button" role="button" type="button" data-toggle="modal" data-target="#registration">Забронировать</button>
            </div>
            <div class="flex-row">
              <h3 class="pricing">44 000* <i class="fa fa-rub" aria-hidden="true"></i></h3>
              <a href="http://businessforum281016.ticketforevent.com/ru/" class="btn btn-default btn-primary-1" role="button"style="display: flex;
              align-items: center;" target="_blank">Купить онлайн</a>
            </div>
          </p>
        </div>
      </div>
    </div> -->

      <!-- <div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
            </button>
            <h3 class="modal-title" id="myModalLabel">Информация об участнике</h3>
          </div>
          <div class="modal-body">
            <form action="form_handler.php" id="reserve-form">
              <div class="form-group">
                <input required="" type="text" name="company" id="oname" placeholder="Наименование организации" class="form-control">
                <label>
                  <input type="checkbox"> Без организации
                </label>
              </div>
              <div class="form-group">
                <input required type="text" class="form-control" placeholder="Имя*" name="field_name" id="field_name">
              </div>
              <div class="form-group">
                <input required type="text" class="form-control" placeholder="Фамилия*" name="field_lastname" id = "field_lastname">
              </div>
              <div class="form-group">
                <input id="field_phone" class="form-control" name="phone" placeholder="Телефон*">
              </div>
              <div class="form-group">
                <input required class="form-control" type="email" name="email" id = "field_email" placeholder="E-mail*">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-primary-2" data-dismiss="modal" id="reserve-button">Забронировать</button>
          </div>
        </div>
      </div>
    </div> -->

      <div class="text-center info">
        &lowast; Цены действительны при оплате до 01 сентября 2016 г
      </div>
    </div>
  </section>

  <section class="main-content">
    <div class="container schedule-bg" id="program">
      <!-- <a href="http://actimir.ru"><img height="40" src="<?php echo $spath; ?>img/logo.png" alt="НА ГЛАВНУЮ" /></a> -->
      <div class="row">
        <div class="col-xs-12 col-md-6 text-center">
          <h3 class="slim-header">Программа</h3>
          <i class="fa fa-clock-o fa-5" aria-hidden="true"></i>
          <p class="date">
            28 октября 2016 года
          </p>
          <p class="map">
            Время проведения
            10:00 &mdash; 19:30
          </p>
          <button class="btn btn-default btn-marg" type="button" name="button" data-toggle="modal" data-target="#schedule">ПОДРОБНАЯ ПРОГРАММА</button>
        </div>

        <div class="col-xs-12 col-md-6 text-center">
          <h3 class="slim-header">Место проведения</h3>
          <i class="fa fa-map-marker fa-5" aria-hidden="true"></i>
          <p class="city">
            Санкт-Петербург
          </p>
          <p class="map">
            Park Inn Прибалтийская
          </p>
          <button class="btn btn-default btn-marg" type="button" name="button">
            <a class="various fancybox.iframe" href="http://go.2gis.com/63g4t">
              ПОСМОТРЕТЬ НА КАРТЕ
            </a>
          </button>
        </div>
      </div>

      <div class="modal fade" id="schedule" tabindex="-1" role="dialog" aria-labelledby="scheduleLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content print_page">
            <div class="modal-header">
              <!-- <button class="btn print" onclick="window.print();">Печать</button> -->
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
              </button>
              <h4 class="modal-title" id="scheduleLabel"><b>Программа</b> Форума</h4>
            </div>
            <div class="text-center schedule">
              <div class="table-responsive schedule-bg">
                <table class="table">
                  <tr>
                    <td>08:30 &ndash; 10:00</td>
                    <td>
                      <i class="fa fa-pencil" aria-hidden="true"></i> Регистрация
                    </td>
                  </tr>
                  <tr>
                    <td>10:00 &ndash; 10:20</td>
                    <td>
                      Приветствие организаторов
                    </td>
                  </tr>
                  <tr>
                    <td>10:20 &ndash; 11:00</td>
                    <td>
                      Иван Арцишевский
                      <p>
                        «Секреты успешного общения»
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>11:00 &ndash; 11:45</td>
                    <td>
                      Гил Петерсил
                      <p>
                        «Нетворкинг как ключевая компетенция бизнесмена в период перемен»
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>11:45 &ndash; 12:15</td>
                    <td>
                      <i class="fa fa-coffee" aria-hidden="true"></i> Кофе &ndash; брейк
                    </td>
                  </tr>
                  <tr>
                    <td>12:15 &ndash; 12:35</td>
                    <td>
                      <i class="fa fa-video-camera" aria-hidden="true"></i> Владимир Тарасов
                      <p>
                        «Комплекс инновационной неполноценности»
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>12:35 &ndash; 13:20</td>
                    <td>
                      Игорь Рызов
                      <p>
                        «Путь к «ДА», «Yes», «Si», «Ja», «Oui» и «Hai» »
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <tr>
                      <td>13:20 &ndash; 13:40</td>
                      <td>
                        <i class="fa fa-video-camera" aria-hidden="true"></i> Джо Язбек
                        <p>
                          «Привлекать больше клиентов и прибыли за счет мощной речи»
                        </p>
                      </td>
                    </tr>
                    <td>13:40 &ndash; 14:45</td>
                    <td>
                      <i class="fa fa-cutlery" aria-hidden="true"></i> Обед
                    </td>
                  </tr>
                  <tr>
                    <td>14:45 &ndash; 15:00</td>
                    <td>
                      <i class="fa fa-birthday-cake" aria-hidden="true"></i> Сюрпризы. Розыгрыши призов
                    </td>
                  </tr>
                  <tr>
                    <td>15:00 &ndash; 15:20</td>
                    <td>
                      <i class="fa fa-video-camera" aria-hidden="true"></i> Дэвид Аллен
                      <p>
                        «Продуктивность становится персональной. Личная ответственность и организационный успех»
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>15:20 &ndash; 16:00</td>
                    <td>
                      Андрей Левченко
                      <p>
                        «Полная личная эффективность - 4: не "ставить цели", а "жить с целью" »
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>16:00 &ndash; 16:20</td>
                    <td>
                      <i class="fa fa-video-camera" aria-hidden="true"></i> Лес Хьюитт
                      <p>
                        «Использование силы фокусировки для достижения успеха в меняющемся мире»
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>16:20 &ndash; 16:50</td>
                    <td>
                      <i class="fa fa-coffee" aria-hidden="true"></i> Кофе &ndash; брейк
                    </td>
                  </tr>
                  <tr>
                    <td>16:50 &ndash; 17:30</td>
                    <td>
                      Елена Сидоренко
                      <p>
                        «Эмоциональный интеллект в бизнесе»
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>17:30 &ndash; 18:15</td>
                    <td>
                      Марк Лучин
                      <p>
                        «Фенотипология»
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td>18:15 &ndash; 19:30</td>
                    <td>
                      <i class="fa fa-camera" aria-hidden="true"></i> Фото- и автограф-сессия, фуршет
                    </td>
                  </tr>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center">
      <div class="row speaker-list">
        <h5 class="forum-sum">Первый <b>Active World Business Forum</b><br>
        состоялся 28 июня 2016 года<br>
        и был посвящен привлечению, удержанию и монетизации клиентов.<br>
        О том, как это было, Вы можете узнать в коротком ролике:</h5>
      <div class="video-content">
        <iframe width="100%" height="378" src="https://www.youtube.com/embed/q_9P2_x2wcc" frameborder="0" allowfullscreen></iframe>
      </div>
      </div>
    </div>
</section>

<section class="main-content">
    <div id="speakers" class="container">
      <div class="row">
          <h3 class="slim-header text-center"><b>Спикеры</b> Active World Business Forum</h3>
          <h3 class="title-speakers text-center">Видеоприглашения спикеров</h3>
          <div class="row">
            <div class="col-xs-12 col-md-6 text-center">
              <div class="video-box-spiker">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/kT0ALEsf0NM" frameborder="0" allowfullscreen style="border:1px solid lightgrey;padding:15px;"></iframe>
              </div>
              <a href="#" role="button" type="button" data-toggle="modal" data-target="#hewitt"><p class="iframe-theme"><small>Тематика выступления:</small> <br>&laquo;Использование силы фокусировки для достижения успеха в меняющемся мире&raquo;</p></a>
            </div>
            <div class="col-xs-12 col-md-6 text-center">
              <div class="video-box-spiker">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/lGbWxsfOFkg" frameborder="0" allowfullscreen style="border:1px solid lightgrey;padding:15px;"></iframe>
              </div>
              <a href="#" role="button" type="button" data-toggle="modal" data-target="#allen"><p class="iframe-theme"><small>Тематика выступления:</small> <br>&laquo;Продуктивность становится персональной. Личная ответственность и организационный успех&raquo;</p></a>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-6 text-center">
              <div class="video-box-spiker">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/KzuVOtiwdc4" frameborder="0" allowfullscreen style="border:1px solid lightgrey;padding:15px;"></iframe>
              </div>
              <a href="#" role="button" type="button" data-toggle="modal" data-target="#joe"><p class="iframe-theme"><small>Тематика выступления:</small> <br>&laquo;Привлекать больше клиентов и прибыли за счет мощной речи&raquo;</p></a>
            </div>
            <div class="col-xs-12 col-md-6 text-center">
              <div class="video-box-spiker">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/AEbLqYXQPB4" frameborder="0" allowfullscreen style="border:1px solid lightgrey;padding:15px;"></iframe>
              </div>
              <a href="#" role="button" type="button" data-toggle="modal" data-target="#tarasov"><p class="iframe-theme"><small>Тематика выступления:</small> <br>&laquo;Комплекс инновационной неполноценности&raquo;</p></a>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-6 text-center">
              <div class="video-box-spiker">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/dOOd919E6jM" frameborder="0" allowfullscreen style="border:1px solid lightgrey;padding:15px;"></iframe>
              </div>
              <a href="#" role="button" type="button" data-toggle="modal" data-target="#luchin"><p class="iframe-theme"><small>Тематика выступления:</small> <br>&laquo;Фенотипология&raquo;</p></a>
            </div>
            <div class="col-xs-12 col-md-6 text-center">
              <div class="video-box-spiker">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/RTRVR1Yx5WQ" frameborder="0" allowfullscreen style="border:1px solid lightgrey;padding:15px;"></iframe>
              </div>
              <a href="#" role="button" type="button" data-toggle="modal" data-target="#ryzov"><p class="iframe-theme"><small>Тематика выступления:</small> <br>&laquo;Путь к "ДА", "Yes", "Si", "Ja", "Oui" и "Hai"&raquo;</p></a>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-6 text-center">
              <div class="video-box-spiker">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/kTomrDow59c" frameborder="0" allowfullscreen style="border:1px solid lightgrey;padding:15px;"></iframe>
              </div>
              <a href="#" role="button" type="button" data-toggle="modal" data-target="#sidorenko"><p class="iframe-theme"><small>Тематика выступления:</small> <br>&laquo;Эмоциональный интеллект в бизнесе&raquo;</p></a>
            </div>
            <div class="col-xs-12 col-md-6 text-center">
              <div class="video-box-spiker">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/E44q4ECHgtc" frameborder="0" allowfullscreen style="border:1px solid lightgrey;padding:15px;"></iframe>
              </div>
              <a href="#" role="button" type="button" data-toggle="modal" data-target="#arcish"><p class="iframe-theme"><small>Тематика выступления:</small> <br>&laquo;Секреты успешного общения&raquo;</p></a>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-md-6 text-center">
              <div class="video-box-spiker">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/UqLRZEI5Afk" frameborder="0" allowfullscreen style="border:1px solid lightgrey;padding:15px;"></iframe>
              </div>
              <a href="#" role="button" type="button" data-toggle="modal" data-target="#gil"><p class="iframe-theme"><small>Тематика выступления:</small> <br>&laquo;Нетворкинг как ключевая компетенция бизнесмена в период перемен&raquo;</p></a>
            </div>
            <div class="col-xs-12 col-md-6 text-center">
              <div class="video-box-spiker">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/hs1mRfShx7E" frameborder="0" allowfullscreen style="border:1px solid lightgrey;padding:15px;"></iframe>
              </div>
              <a href="#" role="button" type="button" data-toggle="modal" data-target="#levchenko"><p class="iframe-theme"><small>Тематика выступления:</small> <br>&laquo;Полная личная эффективность - 4: не "ставить цели", а "жить с целью"&raquo;</p></a>
            </div>
          </div>
          <!-- <div class="row text-center">
            <div class="col-md-offset-1 col-md-4">
              <h3 class="title-speakers">Веб-спикеры</h3>
              <div class="row">
                <div class="col-xs-6 col-md-6">
                  <img class="img-rounded" src="<?php echo $spath; ?>img/speaker/hewitt.jpg" width="200" alt="" />
                  <span class="web">WEB</span>
                  <div class="row">
                      <p class="text-center speaker-name">Лес Хьюитт</p>
                      <button class="btn btn-default btn-xs" role="button" type="button" data-toggle="modal" data-target="#hewitt">ПОДРОБНЕЕ</a>
                  </div>
                </div> -->

                <div class="modal fade" id="hewitt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
                        </button>
                        <div class="center-block">
                          <img class="img-round" src="<?php echo $spath; ?>img/speaker/hewitt.jpg" width="200" alt="" />
                        </div>
                        <h3 class="text-center">Лес Хьюитт</h3>
                        <h4 class="modal-title">&laquo;Использование силы фокусировки для достижения успеха в меняющемся мире&raquo;</h4>
                      </div>
                      <div class="modal-body">
                        <p>
                          В течение практической презентации для Active World Forum 28 октября Лес Хьюитт,
                          автор бестселлера № 1 по версии New York Times и тренер по фокусировке для руководителей по всему миру,
                          поделится с вами пятью проверенными стратегиями,
                          которые помогут Вам максимизировать Вашу продуктивность в эти испытывающие нас экономические времена.
                        </p>
                        <p>
                          <b>Вы научитесь тому, как:</b>
                          <ul>
                            <li>Создать устойчивые границы, которые позволят сосредоточить все внимание на Ваших главных приоритетах.</li>
                            <li>Избегать расстройств из-за ежедневного списка дел, который становится причиной стресса и чувства вины.</li>
                            <li>Утроить Вашу способность концентрироваться используя простую технику из 2х шагов.</li>
                            <li>Начинать каждый день с мировоззрением Чемпиона.</li>
                            <li>Заканчивать Ваш день с чувством уверенности в Вашем прогрессе.</li>
                          </ul>
                        </p>
                      </div>
                      <div class="modal-button">
                        <button class="video-btn">
                          <i class="fa fa-play" aria-hidden="true"></i>
                          <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/kT0ALEsf0NM">Видеоприглашение спикера</a>
                        </button>
                        <span class="btn-more">
                          <a href="http://actimir.ru/coach/les-hyuitt" type="button" class="btn btn-default" target="_blank">ПОДРОБНЕЕ О ТРЕНЕРЕ</a>
                        </span>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                      </div>
                    </div>
                  </div>
                </div>

              <!-- <div class="col-xs-6 col-md-6">
                <img class="img-rounded" src="<?php echo $spath; ?>img/speaker/allen.jpg" width="200" alt="" />
                <span class="web">WEB</span>
                <div class="row">
                    <p class="text-center speaker-name">Дэвид Аллен</p>
                    <button class="btn btn-default btn-xs" role="button" type="button" data-toggle="modal" data-target="#allen">ПОДРОБНЕЕ</a>
                </div>
              </div>-->

              <div class="modal fade" id="allen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
                      </button>
                      <div class="center-block">
                        <img class="img-round" src="<?php echo $spath; ?>img/speaker/allen.jpg" width="200" alt="" />
                      </div>
                      <h3 class="text-center">Дэвид Аллен</h3>
                      <h4 class="modal-title">&laquo;Продуктивность становится персональной. Личная ответственность и организационный успех&raquo;</h4>
                    </div>
                    <div class="modal-body">
                      <ul>
                        <li>Почему для успеха организации необходимо совершенствовать личную деятельность</li>
                        <li>Необходимость (и опасность) распределения полномочий</li>
                        <li>8 персональных приемов для руководителей, которые незамедлительно создают более продуктивную культуру</li>
                      </ul>
                    </div>
                    <div class="modal-button">
                      <button class="video-btn">
                        <i class="fa fa-play" aria-hidden="true"></i>
                        <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/lGbWxsfOFkg">Видеоприглашение спикера</a>
                      </button>
                      <span class="btn-more">
                        <a href="http://actimir.ru/coach/devid-allen" class="btn btn-default" target="_blank">ПОДРОБНЕЕ О ТРЕНЕРЕ</a>
                      </span>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class="row">
              <div class="col-xs-6 col-md-6">
                <img class="img-rounded" src="<?php echo $spath; ?>img/speaker/tarasov2.jpg" width="200" alt="" />
                <span class="web">WEB</span>
                <div class="row">
                    <p class="text-center speaker-name">Владимир Тарасов</p>
                    <button class="btn btn-default btn-xs" role="button" type="button" data-toggle="modal" data-target="#tarasov">ПОДРОБНЕЕ</a>
                </div>
              </div>-->

              <div class="modal fade" id="tarasov" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
                      </button>
                      <div class="center-block">
                        <img class="img-round" src="<?php echo $spath; ?>img/speaker/tarasov2.jpg" width="200" alt="" />
                      </div>
                      <h3 class="text-center">Владимир Тарасов</h3>
                      <h4 class="modal-title">&laquo;Комплекс инновационной неполноценности&raquo;</h4>
                    </div>
                    <div class="modal-body">
                      <ul>
                        <li></li>
                      </ul>
                    </div>
                    <div class="modal-button">
                      <button class="video-btn">
                        <i class="fa fa-play" aria-hidden="true"></i>
                        <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/AEbLqYXQPB4">Видеоприглашение спикера</a>
                      </button>
                      <span class="btn-more">
                        <a href="http://actimir.ru/coach/vladimir-tarasov" type="button" class="btn btn-default" target="_blank">ПОДРОБНЕЕ О ТРЕНЕРЕ</a>
                      </span>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <div class="col-xs-6 col-md-6">
                <img class="img-rounded" src="<?php echo $spath; ?>img/speaker/joe.jpg" width="200" alt="" />
                <span class="web">WEB</span>
                <div class="row">
                    <p class="text-center speaker-name">Джо Язбек</p>
                    <button class="btn btn-default btn-xs" role="button" type="button" data-toggle="modal" data-target="#joe">ПОДРОБНЕЕ</a>
                </div>
              </div> -->

              <div class="modal fade" id="joe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
                      </button>
                      <div class="center-block">
                        <img class="img-round" src="<?php echo $spath; ?>img/speaker/joe.jpg" width="200" alt="" />
                      </div>
                      <h3 class="text-center">Джо Язбек</h3>
                      <h4 class="modal-title">&laquo;Привлекать больше клиентов и прибыли за счет мощной речи&raquo;</h4>
                    </div>
                    <div class="modal-body">
                      <ul>
                        <li>Переговоры</li>
                        <li>Презентация товара</li>
                        <li>Лидерство</li>
                        <li>Презентация на камеру</li>
                        <li>Правила эффективной коммуникации</li>
                      </ul>
                    </div>
                    <div class="modal-button">
                      <button class="video-btn">
                        <i class="fa fa-play" aria-hidden="true"></i>
                        <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/KzuVOtiwdc4">Видеоприглашение спикера</a>
                      </button>
                      <span class="btn-more">
                        <a href="http://actimir.ru/coach/dzho-yazbek" type="button" class="btn btn-default" target="_blank">ПОДРОБНЕЕ О ТРЕНЕРЕ</a>
                      </span>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>

            <!-- <div class="col-md-6">
              <h3 class="title-speakers">Оффлайн-спикеры</h3>
              <div class="row">
                <div class="col-xs-6 col-md-4">
                  <img class="img-rounded" src="<?php echo $spath; ?>img/speaker/mark_luchin.jpg" width="200" alt="" />
                  <div class="row">
                      <p class="text-center speaker-name">Марк Лучин</p>
                      <button class="btn btn-default btn-xs" role="button" type="button" data-toggle="modal" data-target="#luchin">ПОДРОБНЕЕ</a>
                  </div>
                </div> -->

                <div class="modal fade" id="luchin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
                        </button>
                        <div class="center-block">
                          <img class="img-round" src="<?php echo $spath; ?>img/speaker/mark_luchin.jpg" width="200" alt="" />
                        </div>
                        <h3 class="text-center">Марк Лучин</h3>
                        <h4 class="modal-title" id="myModalLabel">&laquo;Фенотипология&raquo;</h4>
                      </div>
                      <div class="modal-body">
                        <p>
                          Марк Лучин - разработчик множества изобретений, в том числе автор и владелец патентов,
                          познакомит Вас с одной из своих запатентованных разработок.
                          Это инновационная технология – Фенотипология.
                          Она имеет международную патентную защиту, 30-ти летнюю историю и
                          практическое применение в таких фирмах Европы, России, США
                          как INTEL, TNT, SEKURITAS, PORSCHE AG, концерн AG BAYER, BERLIN-CHEMIE и т.д..
                        </p>
                        <p>
                          <b>Успех компании, особенно в эпоху перемен или кризиса, держится на:</b>
                        </p>
                        <ul>
                          <li>Технологичности всей системы и процессов.</li>
                          <li>Рационально подобранной и расставленной на правильные места команде.</li>
                          <li>Грамотных и харизматичных лидерах.</li>
                          <li>Трудолюбии всех и каждого.</li>
                        </ul>
                      </div>
                      <div class="modal-button">
                        <button class="video-btn">
                          <i class="fa fa-play" aria-hidden="true"></i>
                          <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/dOOd919E6jM">Видеоприглашение спикера</a>
                        </button>
                        <span class="btn-more">
                          <a href="http://actimir.ru/coach/mark-luchin" type="button" class="btn btn-default" target="_blank">ПОДРОБНЕЕ О ТРЕНЕРЕ</a>
                        </span>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- <div class="col-xs-6 col-md-4">
                  <img class="img-rounded" src="<?php echo $spath; ?>img/speaker/ryzov.jpg" width="200" alt="" />
                  <div class="row">
                      <p class="text-center speaker-name">Игорь Рызов</p>
                      <button class="btn btn-default btn-xs" role="button" type="button" data-toggle="modal" data-target="#ryzov">ПОДРОБНЕЕ</a>
                  </div>
                </div> -->

                <div class="modal fade" id="ryzov" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span></button>
                        <div class="center-block">
                          <img class="img-round" src="<?php echo $spath; ?>img/speaker/ryzov.jpg" width="200" alt="" />
                        </div>
                        <h3 class="text-center">Игорь Рызов</h3>
                        <h4 class="modal-title">&laquo;Путь к &quot;ДА&quot;, &quot;Yes&quot;, &quot;Si&quot;, &quot;Ja&quot;, &quot;Oui&quot; и &quot;Hai&quot; &raquo;</h4>
                      </div>
                      <div class="modal-body">
                        <p>
                          &laquo;Он меня не понимает&raquo;. &laquo;Они нас не слышат&raquo;. &laquo;Мы с Марса они с  Венеры&raquo;.
                          Эти и множество других фраз
                          останавливают нас в шаге от соглашений и отбрасывают переговоры назад.
                          Что мешает людям договаривать.
                          Мы все одинаковые и разные, у всех разный психотип и мышление, 
                          по-разному принимают решения женщины и мужчины, юристы и бизнесмены,
                          врачи и инженеры.
                          Культуральные различия часто становятся непреодолимой стеной.
                        </p>
                        <p>
                           <b>Основные темы (тезисы):</b>
                           <ul>
                             <li>Переговоры разных социальных групп</li>
                             <li>Мужчины и Женщины в переговорах</li>
                             <li>Межкультуральные переговоры</li>
                           </ul>
                        </p>
                      </div>
                      <div class="modal-button">
                        <button class="video-btn">
                          <i class="fa fa-play" aria-hidden="true"></i>
                          <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/RTRVR1Yx5WQ">Видеоприглашение спикера</a>
                        </button>
                        <span class="btn-more">
                          <a href="http://actimir.ru/coach/igor-ryzov" type="button" class="btn btn-default" target="_blank">ПОДРОБНЕЕ О ТРЕНЕРЕ</a>
                        </span>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--<div class="col-xs-6 col-md-4 sidorenko">
                  <img class="img-rounded" src="<?php echo $spath; ?>img/speaker/sidorenko.jpg" width="200" alt="" />
                  <div class="row">
                      <p class="text-center speaker-name">Елена Сидоренко</p>
                      <button class="btn btn-default btn-xs" role="button" type="button" data-toggle="modal" data-target="#sidorenko">ПОДРОБНЕЕ</a>
                  </div>
                </div>-->

              <div class="modal fade" id="sidorenko" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
                      </button>
                      <div class="center-block">
                        <img class="img-round" src="<?php echo $spath; ?>img/speaker/sidorenko.jpg" width="200" alt="" />
                      </div>
                      <h3 class="text-center">Елена Сидоренко</h3>
                      <h4 class="modal-title">&laquo;Эмоциональный интеллект в бизнесе&raquo;</h4>
                    </div>
                    <div class="modal-body">
                      <ul>
                        <li>Значение эмоциональных ресурсов: каков вклад в чистую прибыль?</li>
                        <li>Уровень эмоционального интеллекта: как его измерить?</li>
                        <li>Перспективы: как его развить?</li>
                        <li>Техники преобразования неконструктивных эмоциональных состояний  в конструктивные.</li>
                        <li>Стили эмоционального управления эмоциями: Funky, Soft, Rational.</li>
                      </ul>
                    </div>
                    <div class="modal-button">
                      <button class="video-btn">
                        <i class="fa fa-play" aria-hidden="true"></i>
                        <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/kTomrDow59c">Видеоприглашение спикера</a>
                      </button>
                      <span class="btn-more">
                        <a href="http://actimir.ru/coach/elena-sidorenko" type="button" class="btn btn-default" target="_blank">ПОДРОБНЕЕ О ТРЕНЕРЕ</a>
                      </span>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                  </div>
                </div>
              </div>
              </div>

              <!-- <div class="row">
                <div class="col-xs-6 col-md-4">
                  <img class="img-rounded" src="<?php echo $spath; ?>img/speaker/levch.jpg" width="200" alt="" />
                  <div class="row">
                      <p class="text-center speaker-name">Андрей Левченко</p>
                      <button class="btn btn-default btn-xs" role="button" type="button" data-toggle="modal" data-target="#levchenko">ПОДРОБНЕЕ</a>
                  </div>
                </div> -->

                <div class="modal fade" id="levchenko" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
                        </button>
                        <div class="center-block">
                          <img class="img-round" src="<?php echo $spath; ?>img/speaker/levch.jpg" width="200" alt="" />
                        </div>
                        <h3 class="text-center">Андрей Левченко</h3>
                        <h4 class="modal-title">&laquo;Полная личная эффективность - 4: не &quot;ставить цели&quot;, а &quot;жить с целью&quot;&raquo;</h4>
                      </div>
                      <div class="modal-body">
                        <ul>
                          <li>5 целей всех людей</li>
                          <li>5 критериев &quot;моё&quot;/&quot;не моё&quot;: цель, дело, человек</li>
                          <li>Смысл жизни как инструмент</li>
                          <li>Предназначение и как его определить</li>
                          <li>Техники проверки и обеспечения</li>
                        </ul>
                      </div>
                      <div class="modal-button">
                        <button class="video-btn">
                          <i class="fa fa-play" aria-hidden="true"></i>
                          <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/hs1mRfShx7E">Видеоприглашение спикера</a>
                        </button>
                        <span class="btn-more">
                          <a href="http://actimir.ru/coach/andrey-levchenko" type="button" class="btn btn-default" target="_blank">ПОДРОБНЕЕ О ТРЕНЕРЕ</a>
                        </span>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- <div class="col-xs-6 col-md-4">
                  <img class="img-rounded" src="<?php echo $spath; ?>img/speaker/gil.jpg" width="200" alt="" />
                  <div class="row">
                      <p class="text-center speaker-name">Гил Петерсил</p>
                      <button class="btn btn-default btn-xs" role="button" type="button" data-toggle="modal" data-target="#gil">ПОДРОБНЕЕ</a>
                  </div>
                </div> -->

                <div class="modal fade" id="gil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
                        </button>
                        <div class="center-block">
                          <img class="img-round" src="<?php echo $spath; ?>img/speaker/gil.jpg" width="200" alt="" />
                        </div>
                        <h3 class="text-center">Гил Петерсил</h3>
                        <h4 class="modal-title" id="myModalLabel">
                          &laquo;Нетворкинг как ключевая компетенция бизнесмена в период перемен&raquo;
                        </h4>
                      </div>
                      <div class="modal-body">
                        <ul>
                          <li>Каковы 5 основных правил эффективного нетворкинга как инструмента быстрого развития бизнеса, которые работают даже в кризис</li>
                          <li>Как заинтересовать собой и своей деятельностью кого угодно</li>
                          <li>Что делать при знакомстве с новым человеком и каких ошибок избегать</li>
                          <li>Как заручиться поддержкой людей самого высокого уровня – топ-бизнесменов, политиков, инвесторов – и задействовать их экспертность и ресурсы на благо своего бизнеса</li>
                          <li>Как расставлять приоритеты в нетворкинге</li>
                          <li>Как увеличить прибыльность компании и вывести ее на новые рынки с помощью нетворкинга</li>
                        </ul>
                      </div>
                      <div class="modal-button">
                        <button class="video-btn">
                          <i class="fa fa-play" aria-hidden="true"></i>
                          <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/UqLRZEI5Afk">Видеоприглашение спикера</a>
                        </button>
                        <span class="btn-more">
                          <a href="http://actimir.ru/coach/gil-petersil" type="button" class="btn btn-default" target="_blank">ПОДРОБНЕЕ О ТРЕНЕРЕ</a>
                        </span>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- <div class="col-xs-6 col-md-4">
                  <img class="img-rounded" src="<?php echo $spath; ?>img/speaker/arcish.png" width="200" alt="" />
                  <div class="row">
                      <p class="text-center speaker-name">Иван Арцишевский</p>
                      <button class="btn btn-default btn-xs" role="button" type="button" data-toggle="modal" data-target="#arcish">ПОДРОБНЕЕ</a>
                  </div>
                </div> -->

              <div class="modal fade" id="arcish" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
                      </button>
                      <div class="center-block">
                        <img class="img-round" src="<?php echo $spath; ?>img/speaker/arcish.png" width="200" alt="" />
                      </div>
                      <h3 class="text-center">Иван Арцишевский</h3>
                      <h4 class="modal-title">&laquo;Секреты успешного общения&raquo;</h4>
                    </div>
                    <div class="modal-body">
                      <ul>
                        <li>Умение коммуницировать - секрет личного успеха</li>
                        <li>Этикет как пространство коммуникаций</li>
                        <li>Что надо знать и  уметь, что ни в коем случае нельзя делать</li>
                        <li>Особенности коммуникаций в России</li>
                        <li>Практика обращения, приветствия, знакомства</li>
                      </ul>
                    </div>
                    <div class="modal-button">
                      <button class="video-btn">
                        <i class="fa fa-play" aria-hidden="true"></i>
                        <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/E44q4ECHgtc">Видеоприглашение спикера</a>
                      </button>
                      <span class="btn-more">
                        <a href="http://actimir.ru/coach/ivan-arcishevskiy" type="button" class="btn btn-default" target="_blank">ПОДРОБНЕЕ О ТРЕНЕРЕ</a>
                      </span>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <div class="sidorenko2 col-xs-6">
                <img class="img-rounded" src="<?php echo $spath; ?>img/speaker/sidorenko.jpg" width="200" alt="" />
                <div class="row">
                    <p class="text-center speaker-name">Елена Сидоренко</p>
                    <button class="btn btn-default btn-xs" role="button" type="button" data-toggle="modal" data-target="#sidorenko">ПОДРОБНЕЕ</a>
                </div>
              </div> -->

            <div class="modal fade" id="sidorenko" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true"><img src="<?php echo $spath; ?>img/close.svg" alt="Close" /></span>
                    </button>
                    <div class="center-block">
                      <img class="img-round" src="<?php echo $spath; ?>img/speaker/sidorenko.jpg" width="200" alt="" />
                    </div>
                    <h3 class="text-center">Елена Сидоренко</h3>
                    <p class="theme">Тема выступления</p>
                    <h4 class="modal-title">&laquo;Эмоциональный интеллект в бизнесе&raquo;</h4>
                  </div>
                  <div class="modal-body">
                    <ul>
                      <li>Значение эмоциональных ресурсов: каков вклад в чистую прибыль?</li>
                      <li>Уровень эмоционального интеллекта: как его измерить?</li>
                      <li>Перспективы: как его развить?</li>
                      <li>Техники преобразования неконструктивных эмоциональных состояний  в конструктивные.</li>
                      <li>Стили эмоционального управления эмоциями: Funky, Soft, Rational.</li>
                    </ul>
                  </div>
                  <div class="modal-button">
                    <button class="video-btn">
                      <i class="fa fa-play" aria-hidden="true"></i>
                      <a class="fancybox fancybox.iframe" href="https://www.youtube.com/embed/kTomrDow59c">Видеоприглашение спикера</a>
                    </button>
                    <span class="btn-more">
                      <a href="http://actimir.ru/coach/elena-sidorenko" type="button" class="btn btn-default" target="_blank">ПОДРОБНЕЕ О ТРЕНЕРЕ</a>
                    </span>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                  </div>
                </div>
              </div>
            </div>
          <!-- </div>
        </div>
      </div> -->
        <div class="row reserv">
          <button class="btn btn-default btn-primary-2 bottom-btn" type="button" data-toggle="modal" data-target="#moreInfo">Зарегистрироваться</button>
        </div>
      </div>
    </div>
    <hr>
    <div class="container bg-white">
        <h3 class="slim-header text-center"><b>Информационные</b> партнеры</h3>
        <div class="row">
          <div class="col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://www.bookvoed.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/bukvoed.png">
            </a>
          </div>
          <div class="col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://www.igora.biz/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/igora.png">
            </a>
          </div>
          <div class="col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://www.chief-time.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/chif.png">
            </a>
          </div>
          <div class="col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://www.carsberry.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/Carsberry.png">
            </a>
          </div>
        </div>
        <div class="row">
          <div class=" col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://www.flyp.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/fly.png">
            </a>
          </div>
          <div class="col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://lubavich.spb.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/lubavich.png">
            </a>
          </div>
          <div class="col-md-3 col-xs-6">
            <a class="w-inline-block" href="https://spb.hh.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/hh.png">
            </a>
          </div>
          <div class="col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://gammamedia.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/GM_LOGO1.jpg">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://www.it-world.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/itworld.png">
            </a>
          </div>
          <div class=" col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://www.it-weekly.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/itweek.png">
            </a>
          </div>
          <div class=" col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://www.design-navigator.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/zs.png">
            </a>
          </div>
          <div class=" col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://www.goodsmatrix.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/goods.png">
            </a>
          </div>
        </div>
        <div class="row">
          <div class=" col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://beincognito.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/inc.jpg">
            </a>
          </div>
          <div class=" col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://kadis.org/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/kadis.png">
            </a>
          </div>
          <div class=" col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://elama.ru/?verify_authentication=false" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/elama.png">
            </a>
          </div>
          <div class=" col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://www.trinet.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/trinet.png">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-xs-6">
            <a class="w-inline-block" href="https://infostart.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/infst.png">
            </a>
          </div>
          <div class="col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://www.job.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/jobru.jpg">
            </a>
          </div>
          <div class="col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://2gis.ru/spb" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/2gis1.png">
            </a>
          </div>
          <div class="col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://www.real-you.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/Real.png">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://www.marketingone.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/MarketingOne.png">
            </a>
          </div>
          <div class="col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://friendwork.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/fw.png">
            </a>
          </div>
          <div class="col-md-3 col-xs-6">
            <a class="w-inline-block" href="http://alterainvest.ru/" target="_blank" rel="nofollow"><img src="<?php echo $serpath; ?>img/images/altera.jpg">
            </a>
          </div>
          <div class="col-md-3 col-xs-6">
            <a class="w-inline-block" onclick="return:false">
              <img src="<?php echo $serpath; ?>img/images/tvoe.png">
            </a>
          </div>
        </div>
      </div>

     <div class="speaker-list">
       <div class="row">
        <div class="col-xs-12 col-md-offset-2 col-md-8">
          <p class="trans text-center">Хотите стать нашим информационным партнёром
            <br>или участвовать в агентской программе?
            <br>Напишите на почту:
            <br><a href="mailto:office@actimir.ru">office@actimir.ru</a>
          </p>
        </div>
      </div>
     </div>
  </section>

  <!-- <section class="main-content">
    <div class="container">
    <div class="row second-page text-center">
      <a href="http://actimir.ru"><img height="40" src="<?php echo $spath; ?>img/logo.png" alt="НА ГЛАВНУЮ" /></a>
      <h3 class="slim-header"><strong>Active World</strong> Business Forum</h3>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="square text-center">
          <i class="fa fa-certificate fa-3x" aria-hidden="true"></i>
          <p class="about-forum">
            Жизнь учит нас, что в непростые кризисные времена рассчитывать приходится только на себя и на свои личные качества.
            На свою способность быть Эффективным в разных сферах жизни.
          </p>
        </div>
      </div>
    <div class="col-md-4">
      <div class="square text-center">
        <i class="fa fa-certificate fa-3x" aria-hidden="true"></i>
        <p class="about-forum">
          Но далеко не всем от природы дано достаточно силы, талантов, лидерских качеств...
          И потому свою (или, по аналогии, корпоративную) Эффективность нам нужно создавать самим,
          обучаясь, развиваясь, тренируясь &mdash; трудясь.
        </p>
      </div>
    </div>
      <div class="col-md-4">
        <div class="square text-center">
          <i class="fa fa-certificate fa-3x" aria-hidden="true"></i>
          <p class="about-forum">
            Как это сделать опять же эффективно?
            Сжато, концентрированно, в короткое время учиться у самых авторитетных экспертов?
          </p>
        </div>
      </div>
    </div>
    <div class="row center-block">
      <button class="btn btn-default btn-primary-2" type="button" data-toggle="modal" data-target="#moreInfo">Зарегистрироваться</button>
    </div>
  </section> -->
</main>

<footer class="footer-row">
  <a href="http://actimir.ru" class="footer-brand">
    <img src="<?php echo $spath; ?>img/footer_svg/footer-logo.svg" alt="Footer_Logo">
  </a>
  <ul class="footer-nav">
    <li><a href="#forum">О ФОРУМЕ</a></li>
    <li><a href="#speakers">СПИКЕРЫ</a></li>
    <li><a href="#program">ПРОГРАММА</a></li>
    <li><a href="#price">ЦЕНЫ</a></li>
  </ul>
  <ul class="footer-nav">
    <li><a href="http://actimir.ru">Главная</a></li>
    <li><a href="http://actimir.ru/kontaktnaya-informaciya">Контакты</a></li>
    <li><a href="http://actimir.ru/event">Расписание</a></li>
    <li><a href="http://actimir.ru/blog">Блог</a></li>
  </ul>
  <div class="footer-social">
    <div class="svg-icon">
      <a href="https://www.youtube.com/channel/UCFpJfrGOA5hE6he9IZxC0Gg" target="_blank">
        <div class="icon">
        <img src="<?php echo $spath; ?>img/footer_svg/youtube.svg" alt="" />
      </div>
      </a>
    </div>
    <div class="svg-icon">
      <a href="https://www.instagram.com/actimir_ru/" target="_blank">
        <div class="icon">
        <img src="<?php echo $spath; ?>img/footer_svg/insta.svg" alt="" />
      </div>
      </a>
    </div>
    <div class="svg-icon">
      <a href="https://twitter.com/actimir_ru" target="_blank">
        <div class="icon">
        <img src="<?php echo $spath; ?>img/footer_svg/twitter.svg" alt="" />
      </div>
    </a>
    </div>
    <div class="svg-icon">
      <a href="https://facebook.com/actimir" target="_blank">
        <div class="icon">
        <img src="<?php echo $spath; ?>img/footer_svg/facebook.svg" alt="" />
      </div>
    </a>
    </div>
    <div class="svg-icon">
      <a href="https://vk.com/actimir_ru" target="_blank">
      <div class="icon">
        <img height="16" src="<?php echo $spath; ?>img/footer_svg/vk.svg" alt="" />
      </div>
      </a>
    </div>
  </div>
  <div class="footer-copy">
    &copy; 2016 Активный Мир. Все права защищены
  </div>
</footer>

    <script src="<?php echo $spath; ?>js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo $spath; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $spath; ?>js/jquery.maskedinput.min.js"></script>
    <script src="<?php echo $spath; ?>fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script src="<?php echo $spath; ?>js/jquery.maskedinput.min.js" charset="utf-8"></script>
    <script src="<?php echo $spath; ?>js/liteaccordion.jquery.min.js"></script>
    <script src="<?php echo $spath; ?>js/app.js"></script>
    <script type="text/javascript">
      (function(e,a){
          var t,r=e.getElementsByTagName("head")[0],c=e.location.protocol;
          t=e.createElement("script");t.type="text/javascript";
          t.charset="utf-8";t.async=!0;t.defer=!0;
          t.src=c+"//front.optimonk.com/public/"+a+"/js/preload.js";r.appendChild(t);
      })(document,"12274");
          </script>
          <!-- Yandex.Metrika counter -->
      <script type="text/javascript">
      (function (d, w, c) {
          (w[c] = w[c] || []).push(function() {
              try {
                  w.yaCounter11897987 = new Ya.Metrika({id:11897987,
                          webvisor:true,
                          clickmap:true,
                          trackLinks:true,
                          accurateTrackBounce:true});
              } catch(e) { }
          });

          var n = d.getElementsByTagName("script")[0],
              s = d.createElement("script"),
              f = function () { n.parentNode.insertBefore(s, n); };
          s.type = "text/javascript";
          s.async = true;
          s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

          if (w.opera == "[object Opera]") {
              d.addEventListener("DOMContentLoaded", f, false);
          } else { f(); }
      })(document, window, "yandex_metrika_callbacks");
      </script>
      <noscript><div><img src="//mc.yandex.ru/watch/11897987" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
      <!-- /Yandex.Metrika counter -->
  </body>
</html>
