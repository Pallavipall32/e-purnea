

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
            <div class="card-header bg-warning">Category</div>
            <div class="card-body">
                <form action="{{route('category')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">Cat_title</label>
                        <input type="text" name="cat_title" class="form-control @error('cat_title') is-invalid @enderror">
                        @error('cat_title')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Cat_description</label>
                        <input type="text" name="cat_description" class="form-control @error('cat_description') is-invalid @enderror">
                        @error('cat_description')
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
@endsection