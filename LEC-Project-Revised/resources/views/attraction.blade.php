@include('header')

@extends('template')

@section('cont')
<div style="display: flex; justify-content:end; margin-right:50px; margin-top:30px">

    <a href="/book_ticket/{{$site->id}}"><button class="btn btn-warning" style="margin-right: 30px">Book Ticket</button></a>
    

    <form method="post" action="/addtravellist/{{$site->id}}">
        @csrf
        <button class="btn btn-dark">Add to Travel List</button>
    </form>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container" style="margin-top:75px">
    <div class="row">
        <div class="col-md-5">
            <div class="project-info-box mt-0" >
                <h2 style="padding-top:25px">{{$site->name}}</h5>
                <h5>{{$site->location}}</h5>
                <p class="mb-0" style="padding-top:25px">{{$site->description}}</p>
            </div>

            <div class="project-info-box" style="padding-top:25px">
                <p><b>Access: </b>{{$site->access}}</p>
            </div>
        </div>

        <div class="col-md-7" style="padding-top:25px; padding-left:150px">
            <img src={{$site->image2}} alt="project-image" class="rounded" style="width:600px">
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top:200px">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src={{$site->image1}} alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src={{$site->image2}} alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src={{$site->image3}} alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div style="margin-top: 60px; margin-bottom:60px">
    <h1 style="color: black; padding-left:120px">Reviews</h1>
    <div style="display:flex; justify-content:center; align-items: center; padding-left:70px">
        <div class="row col">
            @foreach ($review_data as $review)
            <div class="card m-4" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">{{$review->name}}</h5>
                <p class="card-text">{{$review->review}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="d-flex justify-content-center">
    {!! $review_data->links('pagination::bootstrap-4') !!}
</div>

<div style="display:flex; justify-content:center; align-items:center; margin-bottom:100px">
    <div class="card" style="width: 20rem;">
        <div class="card-header text-center font-weight-bold">
          Write a Review
        </div>
        <div class="card-body">
          <form name="add-blog-post-form" id="add-blog-post-form" method="post" action='/addreview/{{$site->id}}'>
           @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Review</label>
              <textarea name="review" class="form-control" required=""></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
</div>

@endsection