@extends('layouts.main')
@section('title', 'Create')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Create listing</h3>
    </div>
    
    <div class="panel-body">
        <div class="form-group">
            {!! Form::open(array('action' => 'ClassifiedsController@store', 'enctype' => 'multipart/form-data')) !!}
            
            <div class="form-group">
                {!! 
                    Form::text('title', 
                    $value=null, 
                    $attributes=[
                        'class'=>'form-control', 
                        'name'=>'title', 
                        'placeholder'=>'Title',
                        'required'
                    ]) 
                !!}
            </div>
                        
            <div class="form-group">
                <select name="category_id" class="form-control">
                    <option value="1">Desktops</option>
                </select>
            </div>

            <div class="form-group">
                {!! 
                    Form::textarea('description', 
                    $value=null, 
                    $attributes=[
                        'class'=>'form-control', 
                        'name'=>'description', 
                        'placeholder'=>'Description',
                        'required'
                    ]) 
                !!}
            </div>
            
            <div class="form-group">
                {!! 
                    Form::text('price', 
                    $value=null, 
                    $attributes=[
                        'class'=>'form-control', 
                        'name'=>'price', 
                        'placeholder'=>'Price',
                        'required'
                    ]) 
                !!}
            </div>
            
            <div class="form-group">
                {!! 
                    Form::select('condition', array(
                    '0'=>'Choose condition',
                    'New'=>'New',
                    'Like new'=>'Like new',
                    'Used'=>'Used',
                    'Bad'=>'Bad',
                    'Broken'=>'Broken'), 
                    $value=null, 
                    $attributes=[
                        'class'=>'form-control', 
                        'name'=>'description',
                        'required'
                    ]) 
                !!}
            </div>
            
            <div class="form-group">
                {!! 
                    Form::file('main_image',  
                    $attributes=[
                        'class'=>'btn btn-default',
                        'required'
                    ]) 
                !!}
            </div>
                
            <div class="row">
                <div class="col-md-12">
                    <h3>Sellers contact info</h3>
                </div>
            </div>
            
            <div class="form-group">
                {!! 
                    Form::text('location', 
                    $value=null, 
                    $attributes=[
                        'class'=>'form-control', 
                        'name'=>'location', 
                        'placeholder'=>'Location',
                        'required'
                    ]) 
                !!}
            </div>
            
            <div class="form-group">
                {!! 
                    Form::text('email', 
                    $value=null, 
                    $attributes=[
                        'class'=>'form-control', 
                        'name'=>'email', 
                        'placeholder'=>'Email',
                        'required'
                    ]) 
                !!}
            </div>
            
            <div class="form-group">
                {!! 
                    Form::text('phone', 
                    $value=null, 
                    $attributes=[
                        'class'=>'form-control', 
                        'name'=>'phone', 
                        'placeholder'=>'Phone',
                        'required'
                    ]) 
                !!}
            </div>
            
            <div class="form-group">
                {!! 
                    Form::submit('Submit', 
                    $attributes=[
                        'class'=>'btn btn-primary'
                    ]) 
                !!}
            </div>
            
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop