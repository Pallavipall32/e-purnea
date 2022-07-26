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
            <div class="card-header bg-warning">login Page</div>
            <div class="card-body">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                 
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
                        <input type="submit" name="send" value="login here" class="btn btn-warning w-100">
                    </div>

                    @if(session("error"))
                    <div class="col-12">
                        <div class="alert alert-danger">
                            {{session("error")}}
                            @endif
                        </div>
                        
                <a href="{{route('register')}}" class="small float-end text-decoration-none" style="text-align:center">New User? Create an Account</a>
                    </div>
                </form>
       
            </div>
        </div>
     </div>
   </div>
</div>   
@endsection