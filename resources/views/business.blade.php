
@extends("base")


@section("content")

@include("components/header")

<div class="container mt-5">
    <div class="col-4 mx-auto">
        @if(session("error"))
        <div class="alert alert-danger">
            {{session("error")}}
        </div>
        @endif
        <div class="card">
            <div class="card-header bg-warning">Business</div>
            <div class="card-body">
                <form action="{{route('business.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}"> 
                        @error('title')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="row">
                    <div class="mb-3 col">
                        <label for="">primary_Contact</label>
                        <input type="text" name="primary_contact" class="form-control @error('primary_contact') is-invalid @enderror" value="{{old('primary_contact')}}">
                        @error('primary_contact')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">secondary_Contact</label>
                        <input type="text" name="secondary_contact" class="form-control @error('secondary_contact') is-invalid @enderror" value="{{old('secondary_contact')}}">
                        @error('secondary_contact')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    </div>
                    <div class="row">
                    <div class="mb-3 col">
                        <label for="">category</label>
                        <select name="category_id" class="form-select">
                        <option value="">Select category</option>
                                @foreach ($categories as $item)
                                    <option value="{{$item->id}}">{{$item->cat_title}}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control   @error('email') is-invalid @enderror" value="{{old('email')}}">
                        @error('email')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    </div>
                    <div class="row">
                    <div class="mb-3 col">
                        <label for="">Website</label>
                        <input type="text" name="website" class="form-control @error('website') is-invalid @enderror" value="{{old('website')}}">
                        @error('website')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}">
                        @error('address')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="mb-3 col">
                        <label for="">city</label>
                        <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{old('city')}}">
                        @error('city')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">state</label>
                        <input type="text" name="state" class="form-control @error('state') is-invalid @enderror" value="{{old('state')}}">
                        @error('state')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    </div>
                    <div class="row">
                    <div class="mb-3 col">
                        <label for="">proprietor</label>
                        <input type="text" name="proprietor" class="form-control @error('proprietor') is-invalid @enderror" value="{{old('proprietor')}}">
                        @error('proprietor')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="">pin_code</label>
                        <input type="text" name="pincode" class="form-control @error('pin_code') is-invalid @enderror" value="{{old('pin_code')}}">
                        @error('pin_code')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    </div>
                    <div class="row">
                    <!-- <div class="mb-3 col">
                        <label for="">status</label>
                        <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" value="{{old('status')}}">
                        @error('status')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div> -->
                    <div class="mb-3 col">
                        <label for="">image</label>
                        <input type="file" name="image" class="form-control">
                        @error('images')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    </div>
                    
                  
                    <div class="mb-3">
                        <label for="">description</label>
                        <textarea rows="10" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}"></textarea>
                        @error('description')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="send" value="submit" class="btn btn-warning w-100">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection