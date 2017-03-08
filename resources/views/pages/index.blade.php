@extends('layouts.master')
@section('body')
hello WORLD

{!! $name !!}</br>
{!! $age !!}</br>
 today is {{ date('d-m-Y')}}

@endsection