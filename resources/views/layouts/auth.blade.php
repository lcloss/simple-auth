<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>{{ env('APP_NAME') }} - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="@yield('description')" />
        <meta name="author" content="{{ env('APP_AUTHOR', 'Laravel') }}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        <link href="{{ asset('simple-auth/css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('simple-auth/css/style.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @yield('styles')
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        @yield('content')
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">{!! __('Copyright &copy; :site :year', ['site' => env('APP_NAME'), 'year' => date('Y')]) !!}</div>
                            <div>
                                <a href="#">{{ __('Privacy Policy') }}</a>
                                &middot;
                                <a href="#">{!! __('Terms &amp; Conditions') !!}</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('simple-auth/js/scripts.js') }}"></script>
        @yield('scripts')
    </body>
</html>
