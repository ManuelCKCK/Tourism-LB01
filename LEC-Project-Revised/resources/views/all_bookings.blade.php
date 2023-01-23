@include('header')

@extends('template')

@section('cont')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div style="background-color: white; margin-top:50px">
    <div class="container" >
        <div class="row" >
            <div class="col-lg-12">
                <div class="main-box clearfix" >
                    <div class="table-responsive">
                        <table class="table user-list" style="color: black; font-size:24px">
                            <thead>
                                <tr>
                                    <th><span>Attraction</span></th>
                                    <th class="text-center"><span>Date</span></th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($booking_data as $booking)
                                <div>
                                    <tr style="height: 120px">
                                        <td>
                                            {{$booking->attraction_name}}
                                        </td>
                                        <td class="text-center">
                                            <span class="label label-default">{{$booking->date}}</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                  Menu
                                                </button>
                                                <ul class="dropdown-menu" style="position:absolute;" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="/booking_detail/{{$booking->id}}">View Details</a></li>
                                                    <li><a class="dropdown-item" href="/remove_booking/{{$booking->id}}">Cancel Booking</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </div>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
