@include('header')

@extends('template')

@section('cont')
<div style="background-image: url('https://a.cdn-hotels.com/gdcs/production143/d1112/c4fedab1-4041-4db5-9245-97439472cf2c.jpg'); color:rgb(0, 0, 0); background-size:cover; height:900px; display: flex; justify-content:center; align-items:center">
    <div style="margin-bottom:75px">
        <div class="d-flex flex-column align-items-center mt-4">
            <form action="" method="POST" class="d-flex flex-column align-items-center border p-5" style="background-color: rgb(206, 206, 206)" enctype="multipart/form-data">
                {{-- CSRF --}}
                @csrf
                <div class="mb-3 w-100" style="text-align: center">
                    <h5>{{$attraction->name}} Booking</h5>
                </div>
                <div class="mb-3 w-100">
                    <label for="inputBrand">Time</label>
                    <select name="time" class="form-select mt-2" aria-label="Default select example">
                            <option>6:00AM - 11:59AM</option>
                            <option>12:00PM - 18:00PM</option>
                    </select>
                </div>
    
                <div class="mb-3 w-100">
                    <label for="movie_character" class="form-label">Date DD/MM/YYYY </label>
                    <input type="date" name="date" id="date" class="form-control">
                </div>

                <div class="mb-3 w-100">
                    <label for="movie_character" class="form-label">Adults</label>
                    <input type="text" value="0" class="form-control" name="adult" id="exampleInputPassword1">
                </div>
                <div class="mb-3 w-100">
                    <label for="movie_director" class="form-label">Children (Below 17yo)</label>
                    <input type="text" value="0" class="form-control" name="children" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-danger">Book Travel</button>
            </form>
        </div>
    </div>
    
</div>
@endsection