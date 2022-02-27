@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <script type="module">
        import * as THREE from '/node_modules/three/build/three.module.js';
        import {OrbitControls} from '/node_modules/three/examples/jsm/controls/OrbitControls.js';
        import Stats from '/node_modules/three/examples/jsm/libs/stats.module.js';
        //three

        //camera scene
        const camera = new THREE.PerspectiveCamera(65, window.innerWidth/350, 0.01, 100);
        const scene = new THREE.Scene();
        camera.position.set(0.7, 1.4, 0.7);
        camera.lookAt(scene.position)


        //box
        const boxGeo = new THREE.BoxGeometry(0.7, 0.7, 0.7);
        let boxMat = [];

        {{-- const toolsboxMark = new THREE.TextureLoader().load(
            "{{asset('images/avatar.jpg')}}"
        ); --}}


        //toolsboxMark
        var bitmap1 = document.createElement('canvas');
        var g = bitmap1.getContext('2d');
        bitmap1.width = 100;
        bitmap1.height = 100;
        g.font = '20px Serif';
        const text = "Toolsbox";

        g.fillStyle = '#D2B48C';
        g.globalAlpha = 0.5;
        g.fillRect(0, 0, 100, 100);
        g.fillStyle = '#9a9a9a';
        g.fillText(text, 12, 55);
        g.strokeStyle = '#9a9a9a';
        g.strokeText(text, 12, 55);


        var bitmap2 = document.createElement('canvas');
        var ctx = bitmap2.getContext('2d');
        bitmap2.width = 100;
        bitmap2.height = 100;
        
        ctx.beginPath();
        ctx.fillStyle = '#D2B48C';
        ctx.fillRect(0, 0, 100, 100);
        ctx.strokeStyle = "#9a9a9a";
        ctx.moveTo(50, 0);
        ctx.lineTo(50, 100);
        ctx.stroke();

        // canvas contents will be used for a texture
        var boxLine = new THREE.Texture(bitmap2);
        boxLine.needsUpdate = true;
        var toolsboxMark = new THREE.Texture(bitmap1) ;
        toolsboxMark.needsUpdate = true;
        for(var i = 0; i < 6; i++){
            if(i == 2){
                boxMat.push(new THREE.MeshBasicMaterial({
                    map: toolsboxMark
                }));
            }else if(i == 5){
                boxMat.push(new THREE.MeshBasicMaterial({
                    map: boxLine
                }));
            }else{
                boxMat.push(new THREE.MeshBasicMaterial({
                    color:0xD2B48C
                }));
            }
        }


        var box = new THREE.Mesh(boxGeo, boxMat);
        {{-- box.castShadow = true;
        box.receiveShadow = true; --}}
        scene.add(box);



        //edge
        var edge = new THREE.EdgesGeometry( boxGeo ); // or WireframeGeometry( geometry )
        var edgeMat = new THREE.LineBasicMaterial( { color: 0x9a9a9a, linewidth: 2 } );
        var wireframe = new THREE.LineSegments( edge, edgeMat );
        scene.add( wireframe );

        {{-- let axes = new THREE.AxesHelper(20) // 參數為座標軸長度
        scene.add(axes) --}}


        //plane
        {{-- const planeGeo = new THREE.PlaneGeometry( 10, 10 );
        const planeMat = new THREE.MeshLambertMaterial({ color:0xffffff });
        const plane = new THREE.Mesh( planeGeo, planeMat );
        plane.rotation.x = -0.5 * Math.PI;
        plane.position.set(0, -2, 0);
        plane.receiveShadow = true;
        scene.add( plane ); --}}


        //render
        const renderer = new THREE.WebGLRenderer( { antialias: true } );
        renderer.setSize(window.innerWidth, 350);
        renderer.setClearColor(new THREE.Color('rgb(255,255,255)'));
        document.querySelector(".cubic").appendChild(renderer.domElement);


        //light
        let directionalLight = new THREE.DirectionalLight(0xaaaaaa);
        directionalLight.position.set(0, 5, 0);
        directionalLight.castShadow = true;
        scene.add(directionalLight);

        {{-- renderer.shadowMap.enabled = true; // 設定需渲染陰影效果
        renderer.shadowMap.type = 2; --}}


        //stat
        {{-- const stats = Stats()
        document.body.appendChild(stats.dom) --}}


        //OrbitControls
        let cameraControl = new OrbitControls(camera, renderer.domElement);
        cameraControl.enableDamping = true // 啟用阻尼效果
        cameraControl.dampingFactor = 0.4 // 阻尼系數

        // animation
        animation();
        function animation() {
            //box wireframe
            wireframe.rotation.x += 0.002;
            wireframe.rotation.y += 0.002;
            wireframe.rotation.z += 0.002;
            box.rotation.x += 0.002;
            box.rotation.y += 0.002;
            box.rotation.z += 0.002;

            //update
            cameraControl.update();
            {{-- stats.update() --}}
            requestAnimationFrame(animation);
            renderer.render(scene, camera);
        }
    </script>
@endsection

@section('content')
    <div class="index">
        <div class="indexText">
            <span class="whyToolsbox">
                Toolsbox
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-question-octagon" viewBox="0 0 16 16">
                    <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z"/>
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                </svg>
            </span>
            
            <br>
            <div class="why">
                {{__('index.offerConvienceAndPracticalTool')}}
                <br>
                {{__('index.webIsBox')}}
                
            </div>
            <div class="what">
                {{__('index.usefulOnlineTool')}}
            </div>
        </div>
        <div class="cubic">
        </div>
    </div>
@endsection

@section('js')
    @include('js.index')
@endsection