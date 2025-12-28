<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'ROODIO - Register')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script type="text/javascript" src="{{ asset('js/design/register-bg.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/design/particle-network.js') }}" defer></script>
    @stack('script')
</head>
<body class='h-screen bg-primary-100 overflow-x-hidden'>
    <div class='relative w-screen min-h-screen justify-items-center items-center'>
        <div id="particle-canvas" class='h-screen md:h-[130%] xl:h-[100%]'></div>
        <div class='absolute z-10 border-primary-30 border-4 rounded-4xl bg-secondary-happy-10/85 w-sm h-max top-[50%] -translate-y-[50%] p-8 pt-5 font-secondaryAndButton rounded-3xl shadow-xl shadow-primary-20/40 lg:w-md'>
            <div class='flex flex-col items-center gap-1'>
                @yield('mainImage')
                <p class='font-primary text-subtitle font-bold text-primary-85'>
                    @yield('mainTitle')
                </p>
                <p class='text-center text-primary-50 text-small mb-4'>
                    @yield('description')
                </p>
            </div>
            <div>
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>