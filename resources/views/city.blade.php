@extends('layout')
@section('header-image')
@if(file_exists('https://drawmycity.com/img/'. strtolower($city) . '.jpg')) 
  style="background-size:contain; background-image: url(https://drawmycity.com/img/{{ strtolower($city) }}.jpg);    background-position: center; background-repeat: no-repeat;
       }"
@else
  <?php 
  //require_once("flickr.php"); /*put it in a library or so */
  //$flickr = get_flickr_img($city, 1, "");  style="background-size:cover; background-image: url({{ $flickr }})" ?>
 
@endif

@endsection

@section('content')
<div style="background:orange;height:3em;padding:.5em;padding-left:128px;width:100%;height:50px;color: black; font-size:1.5em; font-family:'Amatic SC'"><i>"drawing the soul of {{ str_replace('_', ' ', $city) }}</i></div>
</div>
<div class="hero-body is-widescreen" style="background-size:contain; background-color: black; background-image: url(https://drawmycity.com/img/{{ strtolower($city) }}.jpg); background-position: center; background-repeat: no-repeat;">
</div>
@endsection