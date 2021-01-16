@extends('frontend.master')

@section('content')

<div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-md-3">
                @foreach($post as $data)

                    
                        <div class="card shadow-sm">
                            <img src="{{asset('uploads/'.$data->image)}}"class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></svg>

                            <div class="card-body">
                                <p class="card-text">{{$data->product_name}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a  type="button" class="btn btn-sm btn-outline-secondary" href="{{route('farmerview.details',$data->id)}}" >View </a>
                                        <a  type="button" class="btn btn-sm btn-outline-secondary" href="{{route('my.postdelete',$data->id)}}" >Delete </a>
                                       
                                    </div>
                                    <small class="text-muted">{{$data->price}} BDT Per Kg</small>
                                </div>
                            </div>
                        </div>
                @endforeach

            </div>
     </div>
</div>
@stop
