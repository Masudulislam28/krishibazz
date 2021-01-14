@extends('master')

@section('page')
<div class="container">
<h1>Wholeseller List</h1>
@if($errors->any())
    @foreach($errors->all() as $er)
        <p class="alert alert-danger">{{$er}}</p>
    @endforeach
@endif
@if(Session::has('message'))
    <div class="alert alert-success"> {{ Session::get('message') }}</div>
  @endif


    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Mobile_Num</th>
                <th scope="col">Gender</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $key=>$data )
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->mobile_Num}}</td>
                <td>{{$data->gender}}</td>

                <td>

                <a class="btn btn-primary" href="{{route('wholeseller.editlist',$data->id)}}">Edit</a>
                <a class="btn btn-warning" href="{{route('wholeseller.view',$data->id)}}">View</a>
                <a class="btn btn-danger" href="{{route('wholeseller.delete',$data->id)}}">Delete</a>
                

                </td>
                
            </tr>
        @endforeach
            </tbody>
        </table>
    </div>
    {{$list->links()}}

    @stop
