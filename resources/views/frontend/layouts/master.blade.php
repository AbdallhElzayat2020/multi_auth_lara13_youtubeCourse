<!DOCTYPE html>


<html
    lang="en"
    class="light-style layout-menu-fixed" dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{asset('assets/frontend/')}}/"
    data-template="vertical-menu-template-free">

@include('frontend.layouts.head')

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        @include('frontend.layouts.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            @include('frontend.layouts.navbar')

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                @yield('content')
                <!-- / Content -->

                <!-- Footer -->
                @include('frontend.layouts.footer')
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->


<!-- Core JS -->
@include('frontend.layouts.scripts')
</body>
</html>
