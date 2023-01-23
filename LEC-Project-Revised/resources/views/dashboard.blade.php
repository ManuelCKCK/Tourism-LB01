@include('header')

@extends('template')

@section('cont')
<div style=" display:flex; position:relative; justify-content:center; align-items:center;">
    <img src='https://a.cdn-hotels.com/gdcs/production143/d1112/c4fedab1-4041-4db5-9245-97439472cf2c.jpg'  style="
    background-size:cover; width:100vw; height:980px; background-position:center; filter: blur(3px);"
    alt="">
    <div style="background-color: rgba(0, 0, 0, 0.466); width:100vw; height:980px; position:absolute; z-index:1; top:0"></div>
  <div style="display:flex; align-items:center; position:absolute; z-index:3; flex-direction:column; justify-content:center">
    <div style="color:white; font-size:75px; font-weight:500">
      Visit Bali
    </div>
    <div >
      <a href="/all_attractions"><button type="button" class="btn btn-primary">View Attractions</button></a>
    </div>

  </div>
</div>

<div style="text-align:center; padding-top:50px">
  <h1>Popular Attraction</h1>
</div>

<div style="display: flex; justify-content:center; align-items:center; padding: 50px; padding-bottom: 200px">
  @foreach ($attraction_data as $attraction)
    <div class="card" style="width: 300px; margin: 20px">
      <img class="card-img-top" src="{{$attraction->image1}}" alt="Card image cap" style="width: 300px; height:200px">
      <div class="card-body">
        <a href="/attraction/{{$attraction->id}}" style="text-decoration: none; color:black">
          <h5>{{$attraction->name}}</h5>
        </a>
        <div class="d-flex">
            <img style="width:25px; height:25px" src= "{{asset('/storage/icon/map.png')}}" alt="">
            <p>{{$attraction->location}}</p>
        </div>
      </div>
    </div>
  @endforeach
</div>

@endsection
