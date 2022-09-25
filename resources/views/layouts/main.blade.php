@include('assets.header-tags')
    <div class="container-xxl position-relative bg-white d-flex p-0">
        {{--spinner start--}}
        @include('assets.spinner')
        {{--spinner end--}}
        {{--side-bar start--}}
        @yield('side-bar')
        {{--side-bar  start--}}
    </div>
    <!-- Footer Content Start -->
    @yield('footer-content.blade.php')
    <!-- Footer Content Start Extra-code-->
@include('assets.footer-tags')
