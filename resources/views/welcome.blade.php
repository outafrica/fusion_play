<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fusion Play</title>


    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{-- get token and share to vue --}}
    <script>
        (function() {
            window.Laravel = {
                csrfToken: '{{ csrf_token() }}'
            };
        })();
    </script>



</head>

<body class="leading-normal tracking-normal text-gray-900" style="font-family: 'Source Sans Pro', sans-serif;">
    <div id="app" class="h-screen pb-14 bg-right bg-cover" style="background-image:url('../images/bg.svg');">
        <welcome></welcome>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
