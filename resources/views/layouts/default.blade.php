<!doctype html>
<html lang="pt-br">

<head>
@include('parts.head')

</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        @include('parts.header')

        @include('parts.sidebar')

        <main class="app-main">
            @include('parts.content-header')

            <div class="app-content">
                <div class="container-fluid">
                    @yield('content')

                </div>
            </div>
        </main>
        @include('parts.footer')

    </div>

    @vite('resources/js/app.js')
</body>
<!--end::Body-->

</html>
