<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient">
    <div class="container">
        <a class="navbar-brand fw-bold px-4" href="/"
            style="background: -webkit-linear-gradient(rgb(18, 116, 155), rgb(123, 229, 255));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;">HANIFPosts</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav rounded-3 px-4 ms-3 fw-normal">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'Posts' ? 'active' : '' }}" aria-current="page"
                        href="/posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'Categories' ? 'active' : '' }}" aria-current="page"
                        href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'About' ? 'active' : '' }}" aria-current="page"
                        href="/about">About</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->username }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i>
                                    My
                                    Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <ul class="navbar-nav ms-auto me-3">
                        <li class="nav-item">
                            <a href="/login" class="nav-link {{ $active === 'Login' ? 'active' : '' }} fw-normal"><i
                                    class="bi bi-box-arrow-right"></i> Login
                            </a>
                        </li>
                    </ul>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<hr class="w-75 ms-auto me-auto mt-0">
