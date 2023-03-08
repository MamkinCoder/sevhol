<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#160c28">
<title>СевХолСервис</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jura:wght@700&family=Montserrat+Alternates:wght@500;700;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/callme.css">
<link rel="stylesheet" type="text/css" href="css/aurora-gradient.css">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<script src="node_modules/cleave.js/dist/cleave.min.js"></script>
<script src="node_modules/cleave.js/dist/addons/cleave-phone.ru.js"></script>
<script src="node_modules/canvas-confetti/dist/confetti.browser.js"></script>
</head>
<body>
     <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
     <symbol id="envelope" viewBox="0 0 16 16">
     <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
     <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
     </symbol>
     <symbol id="telegram-outline" viewBox="0 0 16 16">
     <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
     </symbol>
     <symbol id="whatsapp-outline" viewBox="0 0 16 16">
     <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
     </symbol>
     <symbol id="bootstrap-outline" viewBox="0 0 16 16">
     <path d="M5.062 12h3.475c1.804 0 2.888-.908 2.888-2.396 0-1.102-.761-1.916-1.904-2.034v-.1c.832-.14 1.482-.93 1.482-1.816 0-1.3-.955-2.11-2.542-2.11H5.062V12zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377H6.375z"/>
     <path d="M0 4a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4zm4-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3H4z"/>
     </symbol>
     <symbol id="clock" viewBox="0 0 16 16">
     <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
     </symbol>
     <symbol id="wrench" viewBox="0 0 16 16">
     <path d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"/>
     <path d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
     </symbol>
     <symbol id="shield" viewBox="0 0 16 16">
     <path fill-rule="evenodd" d="M8 14.933a.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067v13.866zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
     </symbol>
     <symbol id="geo" viewBox="0 0 16 16">
     <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
     </symbol>
</svg>
<div class="parallax_wrapper">
     <div class="container">
     <nav class="m-2 position-absolute navbar navbar-expand navbar-light">
               <div class="d-flex align-items-center">
                    <a class="d-flex navbar-brand align-items-center opacity-75" href="#">
                         <img src="img/logo.svg" class="navbar-icon me-2" alt="logo">
                         <span class="lh-1">СевХол<br>Сервис</span>
                    </a>
                    <div class="navbar-number">
                         <a class="link-primary" href="tel:+79785046000">+7 (978) 504-60-00</a> <br>
                         <div class="marquee">
                              <div>
                                   <svg class="icon"><use xlink:href="#geo"></use></svg>Севастополь<svg class="icon"><use xlink:href="#geo"></use></svg>Евпатория<svg class="icon"><use xlink:href="#geo"></use></svg>Симферополь<svg class="icon"><use xlink:href="#geo"></use></svg>Ялта&nbsp;
                              </div>
                              <div>
                                   <svg class="icon"><use xlink:href="#geo"></use></svg>Севастополь<svg class="icon"><use xlink:href="#geo"></use></svg>Евпатория<svg class="icon"><use xlink:href="#geo"></use></svg>Симферополь<svg class="icon"><use xlink:href="#geo"></use></svg>Ялта&nbsp;
                              </div>
                              <a class="invisible" href="tel:+79785046000">+7 (978) 504-60-00</a>
                         </div>
                    </div>
               </div>
              <!--  <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
               </ul> -->
     </nav>
     </div>
     <img src="img/banner-min.jpg" class="invisible" alt="" style="max-height: 80vh; max-width: 100vw;">
     <nav id="navbar-aos" class="navbar navbar-expand sticky-top bg-light navbar-light">
          <div class="container">
               <a href="/" class="d-flex align-items-center navbar-brand">
                    <img src="img/logo.svg" class="icon me-2" alt="logo">
                    <span class="fs-4">СевХолСервис</span>
               </a>
          </div>
     </nav>
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
          <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Заказать обратный звонок</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="modal-body">
                         <label for="name" class="form-label">Как к Вам обращаться:</label>
                         <div class="input-group mb-3">
                              <input type="text" autocomplete="name" placeholder="Николай Николаевич" id="name" aria-label="Name" class="form-control" required>
                         </div>
                         <label for="tel" class="form-label">Ваш номер телефона:</label>
                         <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1">+7</span>
                              <input class="formatted-phone" placeholder="123 456 78 90" type="tel" id="tel" required>
                         </div>
                         <label class="form-label">Способ связи:</label>
                         <div class="mb-3">
                              <div class="form-check form-check-inline" id="contactType">
                                   <input class="form-check-input" type="radio" name="contactType" value="whatsapp" id="radio_whatsapp" checked>
                                   <label class="form-check-label" for="radio_whatsapp">
                                        <img class="icon" src="img/WhatsApp.svg" alt="whatsapp logo"> WhatsApp
                                   </label>
                              </div>
                              <div class="form-check form-check-inline">
                                   <input class="form-check-input" type="radio" name="contactType" value="telegram" id="radio_telegram">
                                   <label class="form-check-label" for="radio_telegram">
                                        <img class="icon" alt="telegram logo" src="img/Telegram.svg"> Telegram
                                   </label>
                              </div>
                              <div class="form-check form-check-inline">
                                   <input class="form-check-input" type="radio" name="contactType" value="phone" id="radio_phone">
                                   <label class="form-check-label" for="radio_phone">
                                        <img class="icon" alt="phone logo" src="img/phone.svg"> Мобильный
                                   </label>
                              </div>
                         </div>
                         <label for="email_form" class="col-form-label col-form-label-sm">Email (не обязательно):</label>
                         <input type="email" class="form-control form-control-sm" name="email" id="email_form" placeholder="name@example.com">
                    </div>
                    <div class="modal-footer">
                         <div class=" d-flex flex-sm-row align-content-end">
                              <small class = "quet">Нажимая “Отправить”, Вы соглашаетесь с <a href="url">политикой обработки персональных данных</a>.</small>
                              <button type="submit" class="btn btn-primary">Отправить</button>
                         </div>
                    </div>
               </form>
          </div>
     </div>
     </div>
     <div class="relative-container">
          <div class="d-none d-sm-block bgblur"></div>
          <div class="d-block d-sm-none bgblur-easy"></div>
          <section class="relative-container container d-none d-sm-block my-5">
               <div class="rounded cardblur"></div>
               <div class="row g-0">
                    <div class="card text-dark">
                         <div class="card-body p-5">
                              <!-- TODO AOS -->
                               <figure id="brothers-aos" class="ms-5 w-50 float-end ">
                                   <div class="position-relative">
                                        <img src="img/brothers_bg.jpg" class="img-fluid opacity-25 position-absolute rounded" alt="работяги">
                                        <img src="img/brothers.png" class="img-fluid position-absolute" alt="работяги">
                                        <img src="img/invisible.png" class="img-fluid" alt="работяги">
                                   </div>
                              </figure>
                              <h1 class="display-4 fw-bold">О нас</h1>
                              <p class="fs-5">Мы мастера по ремонту бытовых  и промышленных холодильников. Исправляем поломки любой степени сложности, для нас нет невозможных ремонтов. Приедем в  удобное для вас время. У каждого из нас есть все необходимые для ремонта инструменты и запчасти. Мы уже <strong>более десяти лет</strong> предоставляем услуги по ремонту бытовой техники. Работаем в <em>Севастополе, Симферополе, Ялте, Евпатории</em> и пригородах.</p>
                         </div>
                    </div>
               </div>
          </section>
          <section class="d-block d-sm-none mb-3">
               <div class="row g-0">
                    <div class="col-xl col-lg card border-0 align-items-center">
                         <div class="card-body p-1">
                              <h1 class="display-4 p-2 text-center fw-bold">О нас</h1>
                              <figure class="w-100 float-end ">
                                   <div class="position-relative">
                                        <img src="img/brothers_bg.jpg" class="img-fluid opacity-25 position-absolute rounded" alt="работяги">
                                        <img src="img/brothers.png" class="img-fluid position-absolute" alt="работяги">
                                        <img src="img/invisible.png" class="img-fluid" alt="работяги">
                                   </div>
                              </figure>
                              <p class=" p-2 fs-5">Мы мастера по ремонту бытовых  и промышленных холодильников. Исправляем поломки любой степени сложности, для нас нет невозможных ремонтов. Приедем в  удобное для вас время. У каждого из нас есть все необходимые для ремонта инструменты и запчасти. Мы уже <strong>более десяти лет</strong> предоставляем услуги по ремонту бытовой техники. Работаем в <em>Севастополе, Симферополе, Ялте, Евпатории</em> и пригородах.</p>
                         </div>
                    </div>
               </div>
          </section>
          <section class="container position-relative" style="">
               <div class="parallax-wrench aos d-none d-sm-block">
                    <img src="img/t-wrench.png" alt="wrench" class="">
               </div>
               <div class="parallax-clock aos d-none d-sm-block">
                    <img src="img/t-clock.png" alt="clock" class="">
               </div>
               <div class="parallax-shield aos d-none d-sm-block">
                    <img src="img/t-shield.png" alt="shield" class="">
               </div>
               <div class="row gy-3 parallax-cards">
                    <div class="col-md-6">
                         <div class="card bg-transparent text-dark">
                              <div class="rounded cardblur"></div>
                              <h4 class="card-header text-center">
                              <svg class="icon me-2" width="30" height="30">
                                   <use xlink:href="#wrench"></use>
                              </svg>
                              Детали от поставщика
                              </h4>
                              <div class="card-body">
                                   <ul class="list-group list-group-flush fs-6">
                                        <li class="list-group-item">У нас всегда есть  оригинальные запчасти в наличии и под заказ</li>
                                        <li class="list-group-item">Всегда выбираем лучший для вас вариант - ремонт старой детали или замену на новую</li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    <div class="offset-md-3 col-md-7">
                         <div class="card bg-transparent text-dark">
                              <div class="rounded cardblur"></div>
                              <h4 class="card-header text-center">
                              <svg class="icon me-2" width="30" height="30">
                                   <use xlink:href="#clock"></use>
                              </svg>
                              Ремонт в тот же день
                              </h4>
                              <div class="card-body">
                                   <ul class="list-group list-group-flush fs-6">
                                        <li class="list-group-item">В большинстве случаев мастер приедет в день обращения</li>
                                        <li class="list-group-item">По нашей статистике, чаще всего ремонт производится после одного посещения мастера, все необходимые запчасти у него с собой</li>
                                        <li class="list-group-item">Мы <strong>всегда</strong> доводим ремонт до конца</li>
                                   </ul>
                              </div>
                         </div>
                    </div>
                    <div class="offset-md-7 col-md-5">
                         <div class="card bg-transparent text-dark">
                              <div class="rounded cardblur"></div>
                              <h4 class="card-header text-center">
                              <svg class="icon me-2" width="30" height="30">
                                   <use xlink:href="#shield"></use>
                              </svg>
                              Бесплатная диагностика и гарантия
                              </h4>
                              <div class="card-body">
                                   <ul class="list-group list-group-flush fs-6">
                                        <li class="list-group-item">Выезд мастера всегда <strong>бесплатный</strong></li>
                                        <li class="list-group-item">Если вы согласны на ремонт, то диагностика мастера для вас бесплатна</li>
                                        <li class="list-group-item">Гарантия на запчасти <strong>до полугода</strong> </li>
                                   </ul>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <section class="container my-3 d-none d-sm-block">
               <div class="text-dark">
                    <div class="row g-0">
                         <div class="col-lg-4 order-lg-2 rounded">
                              <div class="position-relative d-flex align-items-center" style="width: 100%; height: 100%;">
                                   <img src="img/door.png" alt="" class="" style="position: absolute; width: 100%; transform-origin: center left; transform: translate3d(50px, 0px, -10px) scale3d(1.1, 1.1, 1.0); ">
                                   <div class="card rounded-5" id="we" style="">
                                        <div class="cardblur rounded-5"></div>
                                        <h3 class="p-3 position-relative">Мы ремонтируем все марки холодильников, вот некоторые из них</h3>
                                   </div>
                              </div>
                         </div>
                         <div class="col card bg-transparent order-lg-1 relative-container m-2">
                              <div class="cardblur rounded"></div>
                              <div class="container">
                                   <div class="align-items-center text-center" style="transform: translateZ(0px)">
                                        <div class="marqueeL">
                                             <div class="row">
                                                  <div class="col"><img src="img/logos-01.png" alt="Ariston (Аристон)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-02.png" alt="Samsung (Самсунг)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-03.png" alt="Bosch (Бош)" class="img-fluid"></div>
                                             </div>
                                             <div class="row">
                                                  <div class="col"><img src="img/logos-01.png" alt="Ariston (Аристон)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-02.png" alt="Samsung (Самсунг)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-03.png" alt="Bosch (Бош)" class="img-fluid"></div>
                                             </div>
                                        </div>
                                        <div class="marqueeR">
                                             <div class="row">
                                                  <div class="col"><img src="img/logos-04.png" alt="Beko (Беко)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-05.png" alt="LG (ЭлДжи)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-07.png" alt="Whirlpool (Вирпул)" class="img-fluid"></div>
                                             </div>
                                             <div class="row">
                                                  <div class="col"><img src="img/logos-04.png" alt="Beko (Беко)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-05.png" alt="LG (ЭлДжи)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-07.png" alt="Whirlpool (Вирпул)" class="img-fluid"></div>
                                             </div>
                                        </div>
                                        <div class="marqueeL">
                                             <div class="row">
                                                  <div class="col"><img src="img/logos-06.png" alt="Stinol (Стинол)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-08.png" alt="Бирюса" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-09.png" alt="Indesit (Индезит)" class="img-fluid"></div>
                                             </div>
                                             <div class="row">
                                                  <div class="col"><img src="img/logos-06.png" alt="Stinol (Стинол)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-08.png" alt="Бирюса" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-09.png" alt="Indesit (Индезит)" class="img-fluid"></div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <!-- <div class="LRfade rounded"></div> -->
                         </div>
                    </div>
               </div>
          </section>
          <section class="my-3 d-block d-sm-none">
               <div class="text-dark card border-0">
                    <div class="row g-0">
                         <div class="col-lg-4 order-lg-2 rounded">
                              <div class="position-relative d-flex align-items-center" style="overflow:hidden; width: 100%; height: 100%;">
                                        <h2 class="p-2 text-center position-relative">Мы ремонтируем все марки холодильников, вот некоторые из них:</h2>
                              </div>
                         </div>
                         <div class="col order-lg-1 relative-container m-1">
                              <div class="container">
                                   <div class="align-items-center text-center" style="transform: translateZ(0px)">
                                        <div class="marqueeL">
                                             <div class="row">
                                                  <div class="col"><img src="img/logos-01.png" alt="Ariston (Аристон)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-02.png" alt="Samsung (Самсунг)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-03.png" alt="Bosch (Бош)" class="img-fluid"></div>
                                             </div>
                                             <div class="row">
                                                  <div class="col"><img src="img/logos-01.png" alt="Ariston (Аристон)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-02.png" alt="Samsung (Самсунг)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-03.png" alt="Bosch (Бош)" class="img-fluid"></div>
                                             </div>
                                        </div>
                                        <div class="marqueeR">
                                             <div class="row">
                                                  <div class="col"><img src="img/logos-04.png" alt="Beko (Беко)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-05.png" alt="LG (ЭлДжи)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-07.png" alt="Whirlpool (Вирпул)" class="img-fluid"></div>
                                             </div>
                                             <div class="row">
                                                  <div class="col"><img src="img/logos-04.png" alt="Beko (Беко)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-05.png" alt="LG (ЭлДжи)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-07.png" alt="Whirlpool (Вирпул)" class="img-fluid"></div>
                                             </div>
                                        </div>
                                        <div class="marqueeL">
                                             <div class="row">
                                                  <div class="col"><img src="img/logos-06.png" alt="Stinol (Стинол)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-08.png" alt="Бирюса" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-09.png" alt="Indesit (Индезит)" class="img-fluid"></div>
                                             </div>
                                             <div class="row">
                                                  <div class="col"><img src="img/logos-06.png" alt="Stinol (Стинол)" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-08.png" alt="Бирюса" class="img-fluid"></div>
                                                  <div class="col"><img src="img/logos-09.png" alt="Indesit (Индезит)" class="img-fluid"></div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <!-- <div class="LRfade rounded"></div> -->
                         </div>
                    </div>
               </div>
          </section>
          </div>
          <footer class="d-flex bg-light flex-sm-row justify-content-between align-items-center py-3 my-4 border-top">
     <div class="d-flex align-items-center">
          <a href="/" class="">
               <img src="img/logo.svg" class="icon" id="logo" alt="logo">
          </a>
          <span class="ms-2">
               © 2023 год "СевХолСервис" <br> powered by
               <a href="https://getbootstrap.com">
                    <svg id="b-icon" class="icon footer-shine">
                         <use xlink:href="#bootstrap-outline"></use>
                    </svg>
               </a>
          </span>
     </div>
     <ul class="nav justify-content-end list-unstyled d-flex">
          <li class="mx-2">
               <a href="#">
                    <svg class="icon footer-shine">
                         <use xlink:href="#whatsapp-outline"></use>
                    </svg>
               </a>
          </li>
          <li class="mx-2">
               <a href="#">
                    <svg class="icon footer-shine">
                         <use xlink:href="#telegram-outline"></use>
                    </svg>
               </a>
          </li>
          <!-- TODO -->
          <li class="ms-2">
               <a href="mailto:skv@ngs.ru">
                    <svg class="icon footer-shine" width="30" height="30">
                         <use xlink:href="#envelope"></use>
                    </svg>
               </a>
          </li>
     </ul>
</footer>
</div>
<!-- <div class="toast-container position-fixed bottom-0 end-0 p-3">
     <div id="liveToast" class="toast align-items-center text-dark" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex">
               <div class="toast-body" id="toastMessage">
                    Hello, world! This is a toast message.
               </div>
               <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
     </div>
</div> -->

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<?php
$parsed_ini = parse_ini_file("configs/conf.ini");
$url = $parsed_ini['url'];
$chat_id = $parsed_ini['chat_id'];
$name = $message = $contact = $email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
     $name = $_POST['name'];
     $tel = $_POST['tel'];
     $contact = $_POST['contactType'];
     $email = $_POST['email'];
     $message = urlencode($name."\n+7 ".$tel."\n".$contact."\n".$email);
     $bot_response = @file_get_contents($url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
     $toast_msg = "Спасибо! В ближайшее время мы с Вами свяжемся.";
     if ($bot_response ===false) {
          $toast_msg = "Ошибка сервера. Извините, в данный момент мы не можем Вам позвонить.";
          echo "<script type=\"text/javascript\">
          toastErrorColorChange();
          </script>";
     }
     if (empty($tel)) {
          $toast_msg = "Вы не написали телефон! Пожалуйста, укажите, как с вами связаться.";
          echo "<script type=\"text/javascript\">
          toastErrorColorChange();
          </script>";
     }
     if (empty($name)) {
          $toast_msg = "Вы не написали имя! Пожалуйста, скажите, как к Вам обращаться.";
          echo "<script type=\"text/javascript\">
          toastErrorColorChange();
          </script>";
     }
     echo "<script type=\"text/javascript\">
     document.getElementById('toastMessage').innerHTML = \"$toast_msg\";
     const toastLiveExample = document.getElementById('liveToast');
     const toast = new bootstrap.Toast(toastLiveExample);
     toast.show();
     </script>";
}
?>
</body>
</html>
