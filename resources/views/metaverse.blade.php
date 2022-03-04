<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
    <head>
        <link rel="icon" href="{{asset('images/box.svg')}}" sizes="any" type="image/svg+xml">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-24QLJWWC96"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-24QLJWWC96');
        </script>
        <style>
            html{
                width: 100%;
                height: 100%;
            }
            body{
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
    </body>
    <script type="module">
        import * as THREE from '/node_modules/three/build/three.module.js';
        import {OrbitControls} from '/node_modules/three/examples/jsm/controls/OrbitControls.js';
        import Stats from '/node_modules/three/examples/jsm/libs/stats.module.js';


        var camera = new THREE.PerspectiveCamera(70, window.innerWidth/window.innerHeight, 0.01, 100);
        camera.position.set(0, 0, 10);
        var scene = new THREE.Scene();

    </script>
</html>