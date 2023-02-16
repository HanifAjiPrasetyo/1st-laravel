@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 bg-dark bg-gradient rounded-3 text-light pt-5 pb-5 px-5 shadow-lg">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-login">
                <h3 class="text-center mb-4">Login</h3>
                <form class="rounded-3" action="/login" method="post">
                    @csrf
                    <div class="form-floating text-dark">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="your@email.com" autofocus required value="{{ old('email') }}" />
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating text-dark">
                        <input type="password" name="password"
                            class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" required />
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <center><button class="w-100 btn btn-secondary bg-gradient mt-4 fw-bold" type="submit">Login</button>
                    </center>
                </form>

                <small class="d-block mb-4 mt-3">Not registered yet ? <a href="/register"
                        class="register text-decoration-none text-info">Register Now</a></small>
                <center>
                    <small style="font-size: 12px" class="text-muted">Copyright <i class="bi bi-c-circle"></i>
                        2022 by <a href="https://www.instagram.com/hanip_yokkk/" class="text-decoration-none fw-bold"
                            style="background: linear-gradient(to right, #8a2387, #e94057, #f27121); -webkit-text-fill-color: transparent; -webkit-background-clip: text;">Hanif
                            Aji Prasetyo</a></small>
                </center>
            </main>
        </div>
    </div>
@endsection
