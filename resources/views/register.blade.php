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
            <div class="card-header bg-warning">Register Page</div>
            <div class="card-body">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="">name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">Contact</label>
                        <input type="text" name="contact" class="form-control @error('contact') is-invalid @enderror">
                        @error('contact')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                        <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="send" value="Create an account" class="btn btn-warning w-100">
                    </div>
                    <a href="{{route('register')}}" class="small float-end text-decoration-none">Already have an Account</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection