@section('title', 'Reset Password Page')
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
        <div class="authentication-inner py-4">
            <!-- Forgot Password -->
            <div class="card">


                <div class="card-body">

                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="{{ route('home') }}" class="app-brand-link gap-2">
                          <span class="app-brand-logo demo">
                                @include('frontend.auth.layouts.logo')
                          </span>
                            <span class="app-brand-text demo text-body fw-bolder">
                            Reset Password
                            </span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Reset Password? 🔒</h4>

                    <!-- Session Status -->
                    <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('password.store') }}">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email"
                                name="email"
                                value="{{old('email', $request->email)}}"
                                placeholder="Enter your email"
                                required autofocus/>
                        </div>
                        <span class="text-danger">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </span>

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
                            </div>
                        </div>
                        <span class="text-danger">
                                @error('password')
                            {{ $message }}
                            @enderror
                        </span>

                        <!-- Password Confirmation -->
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password_confirmation">Password Confirmation</label>
                            <div class="input-group input-group-merge">
                                <input
                                    type="password"
                                    id="password_confirmation"
                                    class="form-control"
                                    name="password_confirmation"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="password_confirmation"/>
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <span class="text-danger">
                                @error('password_confirmation')
                            {{ $message }}
                            @enderror
                        </span>

                        <button class="btn btn-primary d-grid w-100">Reset Password</button>
                    </form>
                </div>
            </div>
            <!-- /Forgot Password -->
        </div>
    </div>
</div>

<!-- / Content -->

<!-- Core JS -->
@include('frontend.auth.layouts.scripts')
</body>
</html>
