@extends('layouts.main')
@section('title', 'Show')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            {{$classified->title}}
        </h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-4">
                <div class="classified-show-image">
                    <img src="/images/{{$classified->main_image}}" />
                </div>
            </div>
            
            <div class="col-md-8 no-padding">
                <div class="col-md-12">
                    <h3>Description</h3>
                    <p>{{$classified->description}}</p>
                </div>
                
                <div class="col-md-6">
                    <h3>Product details</h3>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Price:</strong> {{$classified->price}}</li>
                        <li class="list-group-item"><strong>Condition:</strong> {{$classified->condition}}</li>
                    </ul>
                </div>
                
                <div class="col-md-6">
                    <h3>Seller</h3>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Location:</strong> {{$classified->location}}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{$classified->email}}</li>
                        <li class="list-group-item"><strong>Phone:</strong> {{$classified->phone}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop