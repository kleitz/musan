@extends('layouts.main')
@section('title', 'Home')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Latest listings</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            @foreach($classifieds as $classified)
            <div class="col-md-4 classified-item">
                <div class="classified-item-image">
                     <img src="/images/{{$classified->main_image}}" />
                </div>
                
                <h4>
                    <a href="/classifieds/{{$classified->id}}">
                        {{$classified->title}}
                    </a>
                </h4>
                
                <h2><b>{{$classified->price}}$</b></h2>
                
                <p>{{$classified->description}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop