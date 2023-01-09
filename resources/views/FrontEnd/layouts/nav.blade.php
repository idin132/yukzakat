<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="item-menu-header">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="item-menu-header">
            <a class="nav-link" href="{{route('berita')}}">Berita</a>
        </li>
        <li class="item-menu-header dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zakat</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="nav-link" href="{{ route('kalkulator.index')}}">Zakat Fitrah</a>
                <a class="nav-link" href="{{ route('penghasilan.index')}}">Zakat Penghasilan</a>
            </div>
        </li>
        @if (Auth::user())
        <!-- <li class="item-menu-header">
            <form action="{{ url('user/actionlogout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-dark">Logout</button>
            </form>
        </li> -->
        <li class="item-menu-header dropdown">
            <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-person-circle"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <form action="{{ url('user/actionlogout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-dark">Logout</button>
            </form>
            </div>
        </li>
        @else
        <li class="item-menu-header">
            <a class="nav-link" href="{{route('userlogin')}}">Login</a>
        </li>
        @endif

    </ul>
</div>