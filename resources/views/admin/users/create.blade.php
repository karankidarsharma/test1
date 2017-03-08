
@extends('layouts.master')

@section('body')
<div style="margin: 10px; ">
	<form method="POST" action="/users">
	{{ csrf_field() }}

User Name: <input type="text" name="name" >
<br>
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	Email: <input type="email" name="email">
<br>
<br>
&nbsp&nbspPassword: <input type="password" name="password">
<br>
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" name="create">
</form>
</div>
@endsection
