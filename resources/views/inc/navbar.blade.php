<nav class="navbar navbar-expand-md navbar-dark bg-dark">
   <div class="container">
     <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">                <span  class="sr-only">Toggle Navigation</span>
                <span class="sr-only">Toggle Navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                {{config('app.name', 'ditoweb') }}
            </a>
            </div>
            <div class="colapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                 
                </ul>
                 <ul class="nav navbar-nav ">
                    <li class="nav-navbar-nav">
                    <a class="nav-link" href="/companies">Companies</a></li>
                    <li class="nav-item">
                    <a class="nav-link " href="/employees">Employees</a></li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    @guest
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <ul class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                
                                    {{ __('Logout') }}
                                </a>
                                <li><a href ="/dashboard">Dashboard</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
           </div> 
        
    </div>
        
</nav>