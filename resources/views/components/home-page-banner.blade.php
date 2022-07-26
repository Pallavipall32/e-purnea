<div class="main">
        <div class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
           <a href="{{route('homepage')}}" class="navbar-brand">
           <img src="http://yellowpages.in/images/yellow-pages-logo.png">
           </a>

                <div class="navbar-nav">
                    <a href="{{route('business')}}" class="nav-item nav-link">Add a Business</a>
                    <a href="{{route('category')}}" class="nav-item nav-link">Categories</a>
                    @guest
                    <a href="{{route('login')}}" class="nav-item nav-link">My Account</a>
                    @endguest
                    @auth
                    <a href="" class="nav-item nav-link">{{Auth::user()->name}}`s Account</a>
                    <a href="{{route('logout')}}" class="btn btn-success">Logout</a>
                    @endauth
                    
                </div>
            </div>
        </div>
        <div class="container" >
            <div class="row justify-content-center align-items-center" style="height: 500px">
                <div class="col-6">
                    <p  style="font-size: 24px  " class="text-white text-uppercase">#1 INDIAN WEBSITE FOR LISTING LOCAL BUSINESS</p>
                    <form action="{{route('search')}}" class="d-flex">
                        <div class="input-group">
                            <input type="search" placeholder="Search Local Business in Purnea" name="search" class="form-control py-3">
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-search lead"></i>
                            </button>
                            
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid py-3" style="background: rgba(0,0,0,0.8)">
            <div class="container row justify-content-center">
                
            @foreach ($category as $cat)
            <div class="col text-center">
                {{-- <div class="rounded-circle">
                    <img src="asset/p1.png"/>
                </div> --}}
                <div class="text-right text-white">
                    <a href='{{route('category',$cat->id)}}' class="text-white text-decoration-none">{{$cat->cat_title}}</a>
                </div>
            </div>
            @endforeach
           </div>
        </div>
    </div>
    
</div>
