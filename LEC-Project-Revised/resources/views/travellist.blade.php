@include('header')

@extends('template')

@section('cont')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div style="background-color: white; margin-top:50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box clearfix">
                    <div class="table-responsive">
                        <table class="table user-list" style="color: black;">
                            <thead>
                                <tr>
                                    <th><span>Poster</span></th>
                                    <th><span>Title</span></th>
                                    <th class="text-center"><span>Description</span></th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($attraction_data as $attraction)
                                    <tr>
                                        <td>
                                            <img src={{$attraction->image1}} alt="" style="width: 120px; height: 80px">
                                        </td>
                                        <td>
                                            {{$attraction->name}}
                                        </td>
                                        <td class="text-center">
                                            <span class="label label-default">{{$attraction->description}}</span>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                      
                                                  <a method="post" style="color:white; font-weight:bolder" class="btn btn-danger" href="/update_travellist/{{$attraction->id}}">Remove</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {!! $attraction_data->links('pagination::bootstrap-4') !!}
    </div>
</div>