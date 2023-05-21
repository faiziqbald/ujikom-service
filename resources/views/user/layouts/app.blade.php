@include('user.layouts.header')

<body>
<div class="container">
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    @include('user.components.navbar')
    
    @yield('content')
        
    @include('user.components.footer')
</div>


@include('user.layouts.script')
