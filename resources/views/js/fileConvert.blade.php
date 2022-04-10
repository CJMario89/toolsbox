<script>
    var fileFormatContainer = document.querySelector(".fileFormatContainer");
    var otherFormat = document.querySelector(".otherFormat");
    var formatSelected = document.querySelector(".formatSelected");
    var file = document.querySelector(".file");
    var upload = document.querySelector(".upload");
    var download = document.querySelector(".download");
    var convertedFile = document.querySelector(".convertedFile");
    var progress = document.querySelector(".progress");
    var hint = document.querySelector(".hint");
    var tool = document.querySelector(".tool");
    fileFormatContainer.addEventListener("click", function(){
        otherFormat.classList.add("showContainer");
        window.addEventListener("click", function(e){
            if(e.target.closest(".fileFormatContainer") == undefined){
                otherFormat.classList.remove("showContainer");
            }
        });
    });

    var formats = document.querySelectorAll(".format");
    for(var i = 0; i < formats.length; i++){
        formats[i].addEventListener("click", function(e){
            e.stopPropagation();
            formatSelected.innerHTML = e.target.innerHTML;
            formatSelected.id = e.target.id;
            otherFormat.classList.remove("showContainer");
        });
    }


    file.addEventListener('dragover', function(e) {
        e.stopPropagation();
        e.preventDefault();
        e.dataTransfer.dropEffect = 'copy';
    });


    var fileTypes = [];
    var choosedFiles = [];
    var type;
    var Type;
    var Data;
    fileTypes.push("application/pdf");//pdf
    fileTypes.push("application/vnd.openxmlformats-officedocument.wordprocessingml.document");//docx
    fileTypes.push("application/msword");//doc
    fileTypes.push("application/vnd.oasis.opendocument.formula");//odf

    file.addEventListener('drop', function(e) {
        e.stopPropagation();
        e.preventDefault();
        Data = new FormData();
        for(var i = 0; i < e.dataTransfer.files.length; i++){
            Data.append('files[]', e.dataTransfer.files[i]);
        }
        var uploadedFile = document.createElement("div");
        uploadedFile.classList.add("uploadedFile");
        tool.appendChild(uploadedFile);
        for(var i = 0; i < e.dataTransfer.files.length; i++){
            document.querySelector(".uploadedFile").innerHTML += "<div>" + e.dataTransfer.files[i].name + "</div>";
        }
        hint.innerHTML = "";
    });

    file.addEventListener('change', function(e) { //only when clicking
        e.stopPropagation();
        e.preventDefault();
        Data = new FormData();
        for(var i = 0; i < e.target.files.length; i++){
            Data.append('files[]', e.target.files[i]);
        }
        var uploadedFile = document.createElement("div");
        uploadedFile.classList.add("uploadedFile");
        tool.appendChild(uploadedFile);
        for(var i = 0; i < e.target.files.length; i++){
            document.querySelector(".uploadedFile").innerHTML += "<div>" + e.target.files[i].name + "</div>";
        }
        hint.innerHTML = "";
    });


    upload.addEventListener("click", function(){
        if(Data != undefined){
            progress.innerHTML = "{{__('fileConvert.uploading')}}";
            post_file();
        }else{
            hint.innerHTML = "{{__('fileConvert.hint')}}";
        }  
    });

    download.addEventListener("click", function(){
        var files = convertedFile.querySelectorAll("a");
        if(files.length != 0){
            for(var i = 0; i < files.length; i++){
                files[i].click();
            }
        }
    });



    //request pdf, odf, doc(x) //uploading
    //response pdf, odf, doc(x) //converting
    //display //done
    async function post_file(){
        if(formatSelected.id == "pdf"){
            type = "pdf";
            Type = fileTypes[0];
        }else if(formatSelected.id == "docx"){
            type = "docx";
            Type = fileTypes[1];
        }else if(formatSelected.id == "odf"){
            type = "odf";
            Type = fileTypes[3];
        }
        const url = "{{url('/api/fileConvert/convert')}}" + "?type=" + type;   
        progress.innerHTML = "{{__('fileConvert.converting')}}";
        const rawResponse = await fetch(url,{
            method:"POST",
            body: Data,
            headers: new Headers({
                //'content-type': choosedFiles.type,
                //'accept': Type
                'accept': 'application/json'
            })
        });
        console.log(rawResponse);
        if(rawResponse.ok){
            const response = await rawResponse.json();
            for(var i = 0; i < response.length; i++){
                var downloadUrl = 'data:' + Type + ';base64,' + response[i]["file"];
                var a = document.createElement("a");
                a.innerHTML = decodeURI(response[i]["fileName"]);//"" ? ... decode
                convertedFile.appendChild(a);
                a.href = downloadUrl;
                a.download = decodeURI(response[i]["fileName"]);//"" ? ... decode
            }
            progress.innerHTML = "{{__('fileConvert.done')}}";
        }else{
            //format not match
            const response = await rawResponse.json();
            for(let [key, value] of Object.entries(response)){
                if(key == "message") alert(value);
            }
        }
    }
</script>

<script type="module">
    import * as THREE from '/node_modules/three/build/three.module.js';
    import {OrbitControls} from '/node_modules/three/examples/jsm/controls/OrbitControls.js';

    const camera = new THREE.PerspectiveCamera(45, 100/100, 0.01, 100);
    const scene = new THREE.Scene();
    camera.position.set(0, 0, 5);
    camera.lookAt(scene.position)
    
    const renderer = new THREE.WebGLRenderer( { antialias: true } );
    renderer.setSize(100, 100);
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setClearColor(new THREE.Color('rgb(255,255,255)'));
    document.querySelector(".loading").appendChild(renderer.domElement);

    let directionalLight = new THREE.DirectionalLight(0xaaaaaa);
    directionalLight.position.set(0, 5, 0);
    scene.add(directionalLight);

    const sphereGeo = new THREE.SphereGeometry(0.3, 100, 100);
    const sphereMat = new THREE.MeshBasicMaterial({
        color: 0x9a9a9a,
        opacity: 0.3,
        transparent: true

    });
    const sphere = new THREE.Mesh(sphereGeo, sphereMat);
    scene.add(sphere);

    const sphere1 = new THREE.Mesh(sphereGeo, sphereMat);
    scene.add(sphere1);

    
    function play(time){
        requestAnimationFrame(play);
        renderer.render(scene, camera);
        if(progress.innerHTML == "{{__('fileConvert.uploading')}}" || progress.innerHTML == "{{__('fileConvert.converting')}}"){
            sphere.position.x = 1.2 * Math.cos(time / 500);
            sphere.position.y = 1.2 * Math.sin(time / 500) - 0.3;
            sphere.position.z = 1.5 * Math.sin(time / 500);

            sphere1.position.x = -1.2 * Math.cos(time / 500);
            sphere1.position.y = -1.2 * Math.sin(time / 500) - 0.3;
            sphere1.position.z = -1.5 * Math.sin(time / 500);
        }else{
            sphere.position.x = 0;
            sphere.position.y = 0;
            sphere.position.z = 4;

            sphere1.position.x = 0;
            sphere1.position.y = 0;
            sphere1.position.z = 4;
        }
        
    }

    upload.addEventListener("click", function(){
        if(Data != undefined){
            play();
        }
    });

    

</script>