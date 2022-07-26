@extends('base')
@section('content')

@section('title',$title);x
    
    @include("components/home-page-banner")
    
    <div class="container mb-5">
        <div class="row my-4">
            <div class="col-8">
                <h4 class="fw-normal">{{$title}} businesses</h4>
            </div>
        </div>
        <div class="row">
            @foreach ($business as $item)
            <div class="col mb-3" style="width: 20%">
                <div class="card h-100">
                    <!-- <img src="{{('asset/'.$item->image)}}" class="card-img-top w-100" alt=""> -->
                    <img src="{{$item->image}}" class="card-img-top w-100" alt="">
                    <div class="card-body">
                        <a href="{{route('viewBiz',$item->id)}}"><h6  class="text-truncate">{{$item->title}}</h6></a>
                        <div class="w-100">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <a href="" class="small">19 Reviews</a>
                        </div>
                        <div class="w-100">
                            <p class=" mb-0 text-danger fw-bolder"><i class="bi bi-list"></i> {{$item->getCategory->cat_title}}</p>
                            <p>{{$item->address}},{{$item->city}}</p>
                            <h6 class="fw-bolder"><i class="bi bi-phone"></i> {{$item->primary_contact}}</h6>
                        </div>
                    </div>
                </div>
                
            </div>
       @endforeach
        </div>

        <div class="row">
            <div class="col-12 mx-auto">
                    {{$business->links()}}
            </div>
        </div>
    </div>


    @include('footer')

@endsection
