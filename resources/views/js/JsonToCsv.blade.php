<script>

    var input = document.querySelector("textarea");

    var otherOptions = document.querySelectorAll(".otherOption");
    for(var i = 0; i < otherOptions.length; i++){
        otherOptions[i].addEventListener("click", function(e){
            e.target.closest(".otherContainer").querySelector(".otherOptionSelected").innerHTML = e.target.closest(".otherOption").innerHTML;
            e.target.closest(".otherContainer").closest(".quoteType").id = e.target.id;
            closeOtherOptionContainer(e);
            changeOption();
            e.stopPropagation();
        });
    }

    


    var otherContainers = document.querySelectorAll(".otherContainer");
    for(var i = 0; i < otherContainers.length; i++){
        otherContainers[i].addEventListener("click", showOtherOptionContainer);
    }

    function showOtherOptionContainer(e){
        e.target.closest(".borderLR").querySelector(".otherOptionContainer").classList.add("showOtherOptionContainer");
    }
    function closeOtherOptionContainer(e){
        e.target.closest(".borderLR").querySelector(".otherOptionContainer").classList.remove("showOtherOptionContainer");
    }
    

    document.addEventListener("click", function(e){
        if(!e.target.closest(".otherContainer")){
            closeAllOtherOptionContainer();
        }
    });

    function closeAllOtherOptionContainer(){
        var otherOptionContainers = document.querySelectorAll(".otherOptionContainer");
        for(var i = 0; i < otherOptionContainers.length; i++){
            otherOptionContainers[i].classList.remove("showOtherOptionContainer");
        }
    }
    
    

    async function convertUnit(data, headerKey, quoteType) {
        try{
            //
            //progressing
            //
            //three.js
            const pre_worker = new Worker("worker-js/preProcessJsonParse.js");
            pre_worker.postMessage(data);

            var result = await new Promise(function(resolve, reject){
                pre_worker.addEventListener("message", async function(data){
                    if(data.data == "e"){
                        addWrongTag();
                        resolve("");
                    }else{
                        let unparsed = await papaparse(data.data, headerKey);
                        let result = await JSON.stringify(unparsed);
                        resolve(result);
                    }
                });
            });

            
            const post_worker = new Worker("worker-js/postProcessJsonParse.js");
            if(quoteType == 'sBrackets'){
                post_worker.postMessage([result, "\"[", "]\""]);
            }else if(quoteType == 'cBrackets'){
                post_worker.postMessage([result, '\"{', '}\"']);
            }else if(quoteType == 'Quote'){
                post_worker.postMessage([result, "\"'", "'\""]);
            }else if(quoteType == 'dQuote'){
                post_worker.postMessage([result, "\"", "\""]);
            }
            return await new Promise(function(resolve, reject){

                post_worker.addEventListener("message", async function(data){
                    if(data.data == "e"){
                        addWrongTag();
                        resolve("");
                    }else{
                        if(data.data == "\"\"" && from.value != ""){
                            addWrongTag();
                            resolve("");
                        }else{
                            resolve(data.data.slice(1, -1));
                        }
                    }
                });
            });
            
            


            {{-- var download = false;
            if(inputMethod == 3){
                download = true;
            } --}}

        }catch(e){
            addWrongTag();
            return e; 
        }
    }

    async function papaparse(data, headerKey){
        return new Promise(resolve => {
            try{
                resolve(Papa.unparse(data,{
                    quotes:false,
                    quoteChar:"`",
                    headerKey:headerKey,
                    newline: '&#10;'
                }));
            }catch(e){
                addWrongTag();
                resolve("");
            }
            
        });
    }




    function addWrongTag(){
        document.querySelector(".middlePanel").classList.add("wrongInput");
    }

    var from = document.querySelector(".from");
    var to = document.querySelector(".to");
    var uploadFile = document.querySelector(".uploadFile").querySelector("input");
    //var https = document.querySelector(".https");
    var headerKey = document.querySelector(".headerKey");
    var quoteType = document.querySelector(".quoteType");
    var fileName = '';
    var flag = 0;
    var carry = 0;
    var exampleObj = '[{"name":"mario","age":24,"birthday":[8,9]},{"name":"marie","age":8,"birthday":[1,12]}]';
    var inputMethod = 1;


    //init
    

    from.addEventListener("input", function(){inputChange(1, from.value)});

    async function inputChange(arg, data){
        inputMethod = arg;
        document.querySelector(".middlePanel").classList.remove("wrongInput");
        if(flag == 0){
            input.removeAttribute("placeholder");
            flag = 1;
        }
        to.innerHTML = await convertUnit(data, headerKey.querySelector("input").checked, quoteType.id);
    }

    headerKey.addEventListener("change", changeOption);


    async function changeOption(){
        if(flag == 0){
            to.innerHTML = '{{__("JsonToCsv.result")}}&#10;{{__("JsonToCsv.example")}}&#10;' + await convertUnit(exampleObj, headerKey.querySelector("input").checked, quoteType.id);
        }else{
            inputChange(1, from.value);
        }
    }

    changeOption();


    uploadFile.addEventListener("change", async function(){
        var data = await uploadFile.files[0].text();
        fileName = uploadFile.files[0].name.split(".")[0];
        from.value = data;
        inputChange(2, data);
    });


    {{-- https.addEventListener("input", function(){
        inputChange(3, https.value);
    }); --}}

    var download = document.querySelector(".download");
    download.addEventListener("click", function(){
        var csvContent = "data:text/csv;charset=utf-8," + encodeURIComponent(to.innerHTML);
        var link = document.createElement("a");
        link.setAttribute("href", csvContent);
        if(fileName != ''){
            link.setAttribute("download", fileName + ".csv");
        }else{
            link.setAttribute("download", "toolsbox.csv");
        }
        document.body.appendChild(link);
        link.click();
    });

    var copy = document.querySelector(".copy");
    copy.addEventListener("click", function(){
        navigator.clipboard.writeText(to.innerHTML);
    })
    
</script>