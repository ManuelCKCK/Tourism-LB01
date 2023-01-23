@include('header')

@extends('template')

@section('cont')
<div class="" style="padding: 50px">
    <h1>All Attractions</h1>
</div>
<div class="row col" style="display: flex; justify-content:center; align-items:center; padding-top: 50px; padding-bottom: 50px">
    @foreach ($attraction_data as $attraction)
        <div style="width: 350px">
            <img class="card-img-top" src="{{$attraction->image1}}" style="width: 300px; height:200px">
            <div class="card-body" style="padding-top: 15px">
                <a href="/attraction/{{$attraction->id}}" style="text-decoration: none; color:black">
                    <h5>{{$attraction->name}}</h5>
                    <div class="d-flex">
                        <img style="width:25px; height:25px" src= "{{asset('/storage/icon/map.png')}}" alt="">
                        <p>{{$attraction->location}}</p>
                    </div>
                </a>
            </div>
        </div>
    @endforeach
</div>

@endsection
