<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drawmycity</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap');
      body {
        position:absolute;
        height:100%;
        width:100%;
      }

      ul.pagination {
          background: white;
          /* color: black; */
          padding: 1em;
          border: 1px solid #ccc;
      }
      .hero-foot .columns {
        margin: 0!important;
       }
       
       .hero .navbar {
          background: black;
          z-index: 999999;
      }
      .hero {
        background-color: transparent!important;
      }
      figure.image.portrait {
        margin-bottom: -50px;
      }
      figure.image.portrait img {
        
         border: 3px solid black;
      }
    .citytitle {
        margin-top: 2em;
        float: right;
        text-align: right;
        padding: 1em;
        font-size: large;
        width: max-content;
        min-width: 200px;
        background: white;
        opacity: .75;
    }
      .navbar-item {
        color:orange!important;
      }
     .header-image {
      background-image: url(img/utrecht.jpg);
      background-size: contain;
      background-repeat: none;
      background-color: black;
      vertical-align: center;
    }
    </style>
  </head>
  <body>
    <section class="hero is-primary has-text-white is-fullheight")>
      <div class="hero-head">
        <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
            <figure class="image is-128x128 portrait">
              <a href="/">
              <img class="is-rounded" src="../img/yeon.jpg">
            </a>
            </figure>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            </a>
  </div>

  <div id="navbar" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="/about">About Yellowduck</a>
      <a class="navbar-item" href="/map">Drawings</a>
    </div>
    <div class="navbar-end">
       <a class="navbar-item" href="https://facebook.com/yeon.choi.927">FB</a>
       <a class="navbar-item" href="https://instagram.com/yellowduckcreative">IG</a>
       <a class="navbar-item" href="https://wayisee.blog.me">Blog</a>
       <a class="navbar-item" href="https://brunch.co.kr/yellowduck">Writing</a>
      @if(\Request::is('city/*') && false)
       <a class="navbar-item" href="/buy/{{$city}}">
        Buy this drawing
      </a>
      @endif
     </div>
  </div><!-- end navbar //-->
</nav>

      @yield('content')

  <!-- Hero footer: will stick at the bottom -->
      <div class="hero-foot" style="background-color: rgba(0,0,0,1); z-index: 99999">
          <div class="has-text-centered">
            Made with ♥♥ by <a href="http://creativechoice.org">creativechoice</a>
          </div>
      </div>   

    </section>
    @if ($message = Session::get('success'))
       <div class="notification is-info" style="position:fixed;margin:auto;top: 6px;    right: 6px;    z-index: 999999;}">
              <strong>{{ $message }}</strong>
       </div>
       @endif
    @yield('scripts')
  </body>
</html>