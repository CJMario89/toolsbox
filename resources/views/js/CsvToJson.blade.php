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
    
    

    async function convertUnit(data, headerKey, parseType, quoteType) {
        try{
            //preProcessQuote(data, preQuote, postQuote);// [] {} "" ''
            const worker = new Worker("worker-js/preProcessQuoteWorker.js");
            if(quoteType == 'sBrackets'){
                worker.postMessage([data, "[", "]"]);
            }else if(quoteType == 'cBrackets'){
                worker.postMessage([data, '{', '}']);
            }else if(quoteType == 'Quote'){
                worker.postMessage([data, "'", "'"]);
            }
            return new Promise(function(resolve, reject){
                worker.addEventListener("message", async function(value){
                    data = value.data;
                    let parsed = await papaparse(data, headerKey, parseType);
                    let result = await JSON.stringify(parsed);
                    resolve(result);
                });
            });
            


            {{-- var download = false;
            if(inputMethod == 3){
                download = true;
            } --}}

            
        }catch(e){
            return e; 
        }
    }

    async function papaparse(data, headerKey, parseType){
        return new Promise(resolve => {
            Papa.parse(data, {
                header: headerKey,
                worker: true,
                dynamicTyping: parseType,
                complete: results => {
                    resolve(results.data);
                }
            });
        });
    }




    function addWrongTag(){
        from.closest(".from").classList.add("wrongInput");
    }

    var from = document.querySelector(".from");
    var to = document.querySelector(".to");
    var parseType = document.querySelector(".parseType");
    var headerKey = document.querySelector(".headerKey");
    var quoteType = document.querySelector(".quoteType");
    var uploadFile = document.querySelector(".uploadFile").querySelector("input");
    var https = document.querySelector(".https");
    var flag = 0;
    var carry = 0;
    var exampleObj = "name,age,birthday\nmario,24,{8,9}\nmarie,8,{1,12}";
    var inputMethod = 1;


    //init
    

    from.addEventListener("input", function(){inputChange(1, from.value)});

    async function inputChange(arg, data){
        inputMethod = arg;
        from.closest(".from").classList.remove("wrongInput");
        if(flag == 0){
            input.removeAttribute("placeholder");
            flag = 1;
        }
        to.value = await convertUnit(data, headerKey.querySelector("input").checked, parseType.querySelector("input").checked, quoteType.id);
    }

    parseType.addEventListener("change", changeOption);
    headerKey.addEventListener("change", changeOption);


    async function changeOption(){
        if(flag == 0){
            to.setAttribute("placeholder", '{{__("CsvToJson.result")}}\n{{__("CsvToJson.example")}}\n' + await convertUnit(exampleObj, headerKey.querySelector("input").checked, parseType.querySelector("input").checked, quoteType.id));
        }else{
            inputChange(1, from.value);
        }
    }

    changeOption();


    uploadFile.addEventListener("change", async function(){
        var data = await uploadFile.files[0].text();
        from.value = data;
        inputChange(2, data);
    });


    {{-- https.addEventListener("input", function(){
        inputChange(3, https.value);
    }); --}}


    
</script>