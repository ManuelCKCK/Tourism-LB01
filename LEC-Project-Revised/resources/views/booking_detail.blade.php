@include('header')

@extends('template')

@section('cont')
<div class="container">
    <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card" style="margin-top:70px">
                    <div class="card-body p-0">
                        <div class="invoice-container" style="padding:40px;">
                            <div class="invoice-header">
                                <!-- Row start -->
                                <!-- Row end -->
                                <!-- Row start -->
                                <!-- Row end -->
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <address>
                                                {{$user->name}}<br>
                                                {{$attraction->name}} - {{$booking_data->date}}
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <div class="invoice-num">
                                                <div style="font-weight:bolder">Booking ID: {{$booking_data->id}}</div>
                                            </div>
                                        </div>													
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>
                            <div class="invoice-body">
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <thead>
                                                    <tr>
                                                        <th>Ticket</th>
                                                        <td></td>
                                                        <th>Quantity</th>
                                                        <th>Sub Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            Adult 
                                                        </td>
                                                        <td></td>
                                                        <td>{{$booking_data->adult}}</td>
                                                        <td>Rp. {{$subtotal_adult}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Children
                                                        </td>
                                                        <td></td>
                                                        <td>{{$booking_data->children}}</td>
                                                        <td>Rp. {{$subtotal_children}}</td>
                                                    </tr>
                                
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td colspan="2">
                                                            <p>
                                                                Subtotal<br>
                                                                Shipping &amp; Handling<br>
                                                            </p>
                                                            <h5 class="text-success"><strong>Grand Total</strong></h5>
                                                        </td>			
                                                        <td>
                                                            <p>
                                                                Rp. {{$subtotal}}<br>
                                                                Rp. 5000<br>
                                                            </p>
                                                            <h5 class="text-success"><strong>Rp. {{$total}} (Pay at Counter)</strong></h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>
                            <div class="invoice-footer">
                                Travel Bali ©
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>