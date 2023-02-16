<header class="navbar navbar-dark bg-dark sticky-top flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-4 fw-bold" href="/"
        style="background: -webkit-linear-gradient(rgb(123, 229, 255), rgb(6, 55, 75));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;">HANIFAJIP</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control w-100 rounded-0 border-0 bg-transparent" type="text" placeholder=""
        aria-label="Search" disabled />
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link px-3 border-0 text-dark fw-bold pt-3 pb-3">
                    LOGOUT <span data-feather="log-out"></span></button>
            </form>
        </div>
    </div>
</header>
