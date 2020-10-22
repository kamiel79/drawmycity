@extends('layout')

@section('content')

      <div class="hero-body">
          <div class="container">
              <h1 class="title has-text-black">
                All Drawings
              </h1>
                <table class="table is-bordered">
                    <thead><td>City</td><td>lat</td><td>lon</td><td>price</td></thead>
                @forelse ($drawings as $drawing)
                  
                    <tr>
                    <td class=""><a href="/city/{{ $drawing->city }}">{{ $drawing->city }}</a></td>
                    <td class="">{{ $drawing->lat }}</td>
                    <td class="">{{ $drawing->lon }}</td>
                    <td class="">{{ $drawing->price }}</td>
                    <td ><img style="height: 50px!important" src="../img/{{ $drawing->city }}.jpg" height="50"></td>
                    </tr>
                  
                @empty
                    No drawings found.
                @endforelse
               </table>
              
              <div class='container'>{{ $drawings->links() }}
              </div>
          </div>
      </div>


@endsection    