@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mt-4">
        <div class="col-lg-5 bg-dark bg-gradient rounded-3 text-light pt-5 pb-5 px-5 shadow-lg">
            <main class="form-registration">
                <h3 class="text-center mb-4">Register</h3>
                <form class="rounded-3" action="/register" method="post">
                    @csrf
                    <div class="form-floating text-dark">
                        <input type="text" name="name"
                            class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                            placeholder="Name" required value="{{ old('name') }}" autofocus />
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating text-dark">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="Username" required value="{{ old('username') }}" />
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating text-dark">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="Name@email.com" required value="{{ old('email') }}" />
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
                    <center><button class="w-100 btn btn-secondary bg-gradient mt-4 fw-bold"
                            type="submit">Register</button>
                    </center>
                </form>
                <small class="d-block mb-4 mt-3">Already registered? <a href="/login"
                        class="text-decoration-none text-info">Login</a></small>
                <center>
                    <small style="font-size: 12px" class="text-muted">Copyright <i class="bi bi-c-circle"></i>
                        2022 by <a href="https://www.instagram.com/hanip_yokkk/" class="text-decoration-none fw-bold"
                            style="background: linear-gradient(to right, #8a2387, #e94057, #f27121); -webkit-text-fill-color: transparent; -webkit-background-clip: text;">Hanif
                            Aji Prasetyo</a></small>
                </center>
            </main>
            {{-- <main class="form-registration w-100 m-auto text-light">
                <h3 class="text-center mb-3 fw-normal">Registration Form</h3>
                <form class="text-dark" action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" name="name"
                            class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                            placeholder="Name" required value="{{ old('name') }}" />
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback bg-dark">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder="Username" required value="{{ old('username') }}" />
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback bg-dark">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="Name@email.com" required value="{{ old('email') }}" />
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback bg-dark">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" required />
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback bg-dark">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <center><button class="w-100 btn btn-lg btn-info mt-3 text-light" type="submit">Register !</button>
                    </center>
                </form><br>
                <small class="d-block text-center">Already registered? <a href="/login"
                        class="text-decoration-none text-dark">Login</a></small>
            </main> --}}
        </div>
    </div>
@endsection
