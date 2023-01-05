<!doctype html>
<html class="no-js" lang="en">
<head>
@include('frontend.includes.head')      
@yield('style')
</head>
<body>
@include('frontend.includes.header')

@yield('content')

 @include('frontend.includes.footer')
        
@include('frontend.includes.foot')
@yield('script')
</body>
</html>