@section('title', 'Forget Password Page')
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
                            Forget Password
                            </span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Forgot Password? 🔒</h4>

                    <!-- Session Status -->

                    @session('status')
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endsession

                    <form id="formAuthentication" class="mb-3" action="{{ route('password.email') }}" method="POST">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email"
                                name="email"
                                value="{{old('email')}}"
                                placeholder="Enter your email"
                                required autofocus/>
                        </div>
                        <span class="text-danger">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </span>
                        <button class="btn btn-primary d-grid w-100">Email Password Reset Link</button>
                    </form>
                    <div class="text-center">
                        <a href="{{ route('login') }}" class="d-flex align-items-center justify-content-center">
                            <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
                            Back to login
                        </a>
                    </div>
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
