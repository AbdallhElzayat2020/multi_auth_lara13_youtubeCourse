@section('title', 'Register Page')
    <!DOCTYPE html>


<html
    lang="en"
    class="light-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{asset('assets/frontend/')}}/"
    data-template="vertical-menu-template-free">

@include('frontend.auth.layouts.head')

<body>
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register Card -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="{{route('home')}}" class="app-brand-link gap-2">
                          <span class="app-brand-logo demo">
                                @include('frontend.auth.layouts.logo')
                          </span>
                            <span class="app-brand-text demo text-body fw-bolder">
                            Register
                            </span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Adventure starts here 🚀</h4>
                    <p class="mb-4">Make your app management easy and fun!</p>

                    <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
                        @csrf
                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">name</label>
                            <input type="text" class="form-control" value="{{old('name')}}" id="name" name="name" placeholder="Enter your name" required autofocus autocomplete="name"/>
                            <span class="text-danger">
                                @error('name')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" required autocomplete="username" placeholder="Enter your email"/>
                            <span class="text-danger">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <!-- Password -->
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group input-group-merge">
                                <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="password"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password"/>
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>

                                <span class="text-danger">
                                @error('password')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>


                        <!-- Password Confirmation -->
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password_confirmation">Password Confirmation</label>
                            <div class="input-group input-group-merge">
                                <input
                                    type="password"
                                    id="password"
                                    class="form-control"
                                    name="password_confirmation"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password_confirmation"/>
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>

                                <span class="text-danger">
                                @error('password_confirmation')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <button class="btn btn-primary d-grid w-100">Sign up</button>
                    </form>

                    <p class="text-center">
                        <span>Already have an account?</span>
                        <a href="{{ route('login') }}">
                            <span>Sign in instead</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- Register Card -->
        </div>
    </div>
</div>

<!-- / Content -->

<!-- Core JS -->
@include('frontend.auth.layouts.scripts')
</body>
</html>
