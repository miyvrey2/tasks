<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tasks</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="language" content="EN">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />

    <!-- Manifest -->
    <link rel="manifest" href="manifest.json">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,700" rel="stylesheet" type="text/css">

    <link href="{{url('/css/material.css')}}" rel="stylesheet" type="text/css">
    <link href="https://games.enzow.org/lib/css/menu.css" rel="stylesheet" type="text/css">
    <link href="{{url('/css/app.css')}}" rel="stylesheet" type="text/css">


</head>
<body>

@include('layouts.nav')

<!-- Main -->
<main>
@yield('content')
    <script>
        //This is the "Offline copy of pages" service worker

        //Add this below content to your HTML page, or add the js file to your page at the very top to register sercie worker
        if (navigator.serviceWorker.controller) {
            console.log('[PWA Builder] active service worker found, no need to register')
        } else {
            //Register the ServiceWorker
            navigator.serviceWorker.register('pwabuilder-sw.js', {
                scope: './'
            }).then(function(reg) {
                console.log('Service worker has been registered for scope:'+ reg.scope);
            });
        }


    </script>

    <!-- JavaScript -->
    <script src="https://sprites.ofzow.nl/lib/js/menu.js"></script>
</main>