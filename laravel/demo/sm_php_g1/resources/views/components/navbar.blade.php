<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('categories.index') }}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>

                <li class="nav-item">
                  <form action="{{ route('user.showLogin') }}" method="GET">
    <button class="btn btn-outline-primary" type="submit">
        Login
    </button>
</form>

                </li>
                <li class="nav-item">
                  <form action="{{ route('user.showRegister') }}" method="GET">
    <button class="btn btn-outline-primary" type="submit">
        Register
    </button>
</form>

                </li>
            </ul>
            <form class="d-flex">
                <button class="btn btn-outline-danger" type="submit">Logout</button>
            </form>
        </div>
    </div>
</nav>
