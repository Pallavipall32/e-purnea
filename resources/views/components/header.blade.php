<div class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container">
            <a href="{{route('homepage')}}" class="navbar-brand"><img src="http://yellowpages.in/images/yellow-pages-logo.png"></a>
            <form action="{{route('search')}}" class="d-flex">
                        <div class="input-group">
                            <input type="search" name="search" placeholder="Search Local Business in Purnea" class="form-control" size="70">
                            <button type="submit" class="btn btn-dark">
                                <i class="bi bi-search lead"></i>
                            </button>
                        </div>
                       
                    </form>
                <div class="navbar-nav">
                    <a href="{{route('business')}}" class="nav-item nav-link">Add a Business</a>
          
               
                    @guest
                    <a href="{{route('Account')}}" class="nav-item nav-link">My Account</a>
                    @endguest
                    @auth
                    <a href="" class="nav-item nav-link">{{Auth::user()->name}}`s Account</a>
                    <a href="{{route('logout')}}" class="btn btn-success">Logout</a>
                    @endauth
                  
                </div>
            </div>
        </div>