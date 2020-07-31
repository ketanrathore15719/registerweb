
<!DOCTYPE html>
<html class="no-js">

@include('layouts.include.head')

<body>
    @include('layouts.include.header')

    <main role="main">
        
            @yield('main')
       
        @include('layouts.include.footer')
    </main>

    @include('layouts.include.js')
</body>

</html>
