
<!DOCTYPE html>
<html class="no-js">

@include('layouts.include.head')

<body>
    @include('layouts.include.header')

    <main role="main">
        @include('layouts.include.slider')

            @yield('main')
        @include('layouts.include.contact')

        @include('layouts.include.footer')
    </main>

    @include('layouts.include.js')
</body>

</html>
