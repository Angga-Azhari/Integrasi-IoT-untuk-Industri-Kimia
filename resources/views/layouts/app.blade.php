<!DOCTYPE html>

<html lang="en">

<head>
    @include('layouts.meta')
    @include('layouts.style')
</head>

<body>
    <div class="main-wrapper">
        @include('layouts.sidebar')
        <div class="page-wrapper">

            <div class="page-content">
                @yield('content')

                @include('layouts.footer')
            </div>

        </div>
    </div>
    @include('layouts.script')
</body>

</html>
