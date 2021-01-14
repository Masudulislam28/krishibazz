@extends('master')

@section('page')
<div class="container">
<h1>Product List</h1>


    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">crop_category</th>
                <th scope="col">Crop_Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($list as $key=>$data )
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$data->crop_category}}</td>
                <td>{{$data->Crop_Name}}</td>
                <td>{{$data->Quantity}}</td>
                <td>{{$data->Price}}</td>

                <td>
                <a class="btn btn-primary" href="{{route('farmer.edit',$data->id)}}">Edit</a>
                <a class="btn btn-danger" href="{{route('farmer.delete',$data->id)}}">Delete</a>
                <a class="btn btn-warning" href="#">View</a>
                </td>
                
            </tr>
        @endforeach
            </tbody>
        </table>
    </div>
    {{$list->links()}}

    @stop
