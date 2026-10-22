@section('title', 'Verify Email')
    <!DOCTYPE html>

<html
    lang="en"
    class="light-style customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('assets/frontend/') }}/"
    data-template="vertical-menu-template-free">

@include('frontend.auth.layouts.head')

<body>
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <div class="card">
                <div class="card-body">

                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="{{ route('home') }}" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                @include('frontend.auth.layouts.logo')
                            </span>
                            <span class="app-brand-text demo text-body fw-bolder">
                                Verify Email
                            </span>
                        </a>
                    </div>
                    <!-- /Logo -->

                    <h4 class="mb-2">Verify Your Email ✉️</h4>
                    <p class="mb-4 text-muted">
                        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
                    </p>

                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success alert-dismissible mb-4" role="alert">
                            A new verification link has been sent to the email address you provided during registration.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="mt-4 d-flex flex-column gap-3">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary d-grid w-100">
                                Resend Verification Email
                            </button>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-secondary d-grid w-100">
                                Log Out
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- / Content -->

<!-- Core JS -->
@include('frontend.auth.layouts.scripts')
</body>
</html>
