@extends('layout')
@section('header-image')
style="background-image: url(img/utrecht.jpg);background-size: contain;
      background-color: black;background-repeat:no-repeat; background-position:center;vertical-align: middle;"
@endsection
@section('content')
      <div style="background:orange;height:3em;padding:.5em;padding-left:128px;width:100%;height:50px;color: black; font-size:1.5em; font-family:'Amatic SC'"><i>"drawing the soul of urban environments around the world.</i></div>
      </div>
      <div class="hero-body has-text-white" @yield('header-image')>
          <div class="container px-6 py-6 is-size-5" style="display:none; background-color: rgba(0,0,0,0.75)">
              <h1 class="title is-size-2 has-text-white">
                Draw My City
              </h1>
              <p class="subtitle has-text-white">
                Fine Urban Drawings
              </p>
              <p>
              I draw the soul of urban environments around the world. For now, you can browse a <a href = "/map">World Map</a> with a selection of drawing.
              </p>
              <p>
              I also draw urban scenes upon request. If you want the spirit of your town or city captured in an exclusive drawing, or are looking for a unique anniversary gift, do not hesitate to <a href="mailto:onlyhana@hotmail.com">contact me</a>.
              </p>
              <h1>This website is under development. Stay tuned...</h1>
          </div>

      </div>
      
  
@endsection    