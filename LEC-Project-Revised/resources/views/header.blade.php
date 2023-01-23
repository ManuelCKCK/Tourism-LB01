<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/dashboard" style="padding-left: 20px">Travel Bali</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="/dashboard">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/category/1">Nature</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/category/2">Heritage</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/travellist">Travel List</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/all_bookings">Bookings</a>
                </li>
                <li class="nav-item">
                  <a href="/logout" class="btn btn-danger">Logout</a>
                </li>
              </ul>
            </div>
          </nav>
          @yield('content')


        <div class="fixed-bottom bg-primary mt-4 pt-2 pb-2">
            <div class="text-light d-flex justify-content-center pb-2">
                <h3>Travel Bali</h3>
            </div>
            <div class="d-flex justify-content-around">
                <div class="text-light d-flex flex-row">
                    <img style="width:25px; height:25px" src= "{{asset('/storage/icon/phone-call.png')}}" alt="">
                    <p>+62 1212 1212</p>
                </div>

                <div class="text-light d-flex flex-row">
                    <img style="width:25px; height:25px" src= "{{asset('/storage/icon/instagram.png')}}" alt="">
                    <p>travel_bali.id</p>
                </div>

                <div class="text-light d-flex flex-row">
                    <img style="width:25px; height:25px" src= "{{asset('/storage/icon/mail.png')}}" alt="">
                    <p>travel_bali@mail.com</p>
                </div>

                <div class="text-light d-flex flex-row">
                    <img style="width:25px; height:25px" src= "{{asset('/storage/icon/facebook.png')}}" alt="">
                    <p>travel_bali.id</p>
                </div>
            </div>
        </div>
    </body>
</html>
