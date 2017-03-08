@extends('layouts.master')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                <h1>welcome to Profile  {{ $married }}</h1>
                {{ $age }} {{$name}}
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
