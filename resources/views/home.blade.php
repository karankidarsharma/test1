@extends('layouts.master')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                <h1>HEello  {!! $myname !!} you are {!! $age !!}  year old</h1>
                    You are logged in {!! Auth::user()->name !!} 

                          {!! $auth->email !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
