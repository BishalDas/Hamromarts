@include('frontend.layouts.top')
@include('frontend.layouts.header')
@include('frontend.layouts.aside')
@include('frontend.layouts.footer')


@yield('header')
@yield('top')
@yield('aside')
@yield('content')
@yield('scripts')
@yield('footer')
