@extends('layouts.main')

@section('container')
    
<center>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="450" class="img-thumbnail rounded-circle" >
    <br>

    <strong>Full Name</strong> : {{ $name }}
    <br>

   <strong>Email</strong> : {{ $email }}
</center>

@endsection