<!DOCTYPE html>
<html land="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/main-page.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
      <script defer src="{{ asset('js/login.js') }}"></script>
      <title>Главная</title>
   </head>
   <body>
      <div class="main-frame-container">
         <div class="modal" id="modal-login">
            <div class="modal_box">
               <button id="close-modal-login-button" class="modal-login-button">
               <img src="{{ asset('img/close.png') }}" width="23" height="25" alt="Close" />
               </button>
               <h1>Авторизация</h1>
               <form name="singup" action="#" method="post">
                  <div class="login">
                     <input type="text" name="username" placeholder="Введите логин" class="input"/> 
                     <input type="password" name="password" placeholder="Введите пароль" class="input"/> 
                     <input type="submit" name="login" value="Войти" class="input"/> 
                  </div>
               </form>
            </div>
         </div>
         <div class="main-frame-main-frame">
            <img src="{{ asset('img/Back-1.png') }}" alt="MainFramePicture" class="main-frame-back1" />
            <div class="main-frame-body">
               <img src="{{ asset('img/Back-2.png') }}" alt="MainFrameBodyPicture" class="main-frame-back21" />
               <div class="main-frame-releases">
                  <span class="main-frame-text"><span>Недавние релизы:</span></span>
                  <div class="main-frame-new">
                     <img src="{{ asset('img/Content.jpg') }}" alt="content2896" class="main-frame-content" />
                  </div>
                  <br>
                  <div class="main-frame-new">
                     <img src="{{ asset('img/Content.jpg') }}" alt="content2896" class="main-frame-content" />
                  </div>
                  <br>
                  <div class="main-frame-new">
                     <img src="{{ asset('img/Content.jpg') }}" alt="content2896" class="main-frame-content" />
                  </div>
                  <div class="main-frame-new">
                     <img src="{{ asset('img/Content.jpg') }}" alt="content2896" class="main-frame-content" />
                  </div>
               </div>
               <div class="main-frame-news">
                  @foreach($posts as $post)
                  <div class="main-frame-block">
                     <img src="{{ asset('img/Content.jpg') }}" alt="content{{ $post->id }}" class="main-frame-content2" />
                     <span class="main-frame-text03">
                        <span>
                           <p>{{ $post->Zagolovok }}
                        </span>
                        <span style="float:right;"> Дата: {{ $post->date_post }}</span></p>
                     </span>
                     <span class="main-frame-text02" style="font-size: 1.1em;">
                     <span>
                     {!! nl2br(e($post->text)) !!} <!-- Для безопасного вывода текста !-->
                     </span>
                     </span>     
                  </div>
                  <br>
                  @endforeach
               </div>
            </div>
            <div class="main-frame-head">
               <img src="{{ asset('img/Head.png') }}" alt="Head" class="main-frame-head1" />
               <div class="main-frame-frame1">
                  <img src="{{ asset('img/logo.png') }}" alt="Logo" class="main-frame-logo1" />
               </div>
               <div class="main-frame-logreg">
                  <button class="button-login" id="button-login-id">
                  <span class="button-login-text"><span>Авторизация</span></span>
                  </button>
                  <button class="button-registration">
                  <span class="button-registration-text"><span>Регистрация</span></span>
                  </button>
               </div>
               <div class="search-line">
                  <input class="search-line-text" type="text" placeholder="Поиск">
                  <button class="search-line-button">
                  <span class="search-line-button-text"><span>Поиск</span></span>
                  </button>
                  <span class="text-news">
                  <span> Новость 1 - Вышла модифицаия “Ловец снов”.</span> <br>
                  <span >Новость 2 - Мододелы выпустили S.T.A.L.K.E.R. 2</span> <br>
                  </span>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>