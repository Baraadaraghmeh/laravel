@extends('master')
@section('title')
    create
    @endsection
@section('content')
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">description</label>
            <input type="password" class="form-control" id="exampleInputPassword1" >
        </div>
    @endsection
