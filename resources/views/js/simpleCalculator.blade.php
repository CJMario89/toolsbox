<script>
    var input = document.querySelector(".input");
    input.focus();
    input.value = "";
    input.value = 0;


    var AC = document.querySelector(".AC");
    var DEL = document.querySelector(".DEL");
    var minus = document.querySelector(".minus");
    var plus = document.querySelector(".plus");
    var multiple = document.querySelector(".multiple");
    var divide = document.querySelector(".divide");
    var remain = document.querySelector(".remain");
    var dot = document.querySelector(".dot");
    var plusMinus = document.querySelector(".plusMinus");
    var equal = document.querySelector(".equal");
    var one = document.querySelector(".n1");
    var two = document.querySelector(".n2");
    var three = document.querySelector(".n3");
    var four = document.querySelector(".n4");
    var five = document.querySelector(".n5");
    var six = document.querySelector(".n6");
    var seven = document.querySelector(".n7");
    var eight = document.querySelector(".n8");
    var nine = document.querySelector(".n9");
    var zero = document.querySelector(".n0");

    AC.addEventListener("click", allClear);
    function allClear(){
        input.focus();
        input.value = "";
        input.value = 0;
    }
    DEL.addEventListener("click", deleteNum);
    function deleteNum(){
        if(input.value != '0' || input.value.length == 0){
            if(input.value.length == 1){
                input.value = 0;
            }else{
                input.value = input.value.slice(0,-1);
            }
        }
        input.focus();
    }


    minus.addEventListener("click", function(e){ if(checkOperator(e)) input.value += "-"; });
    plus.addEventListener("click", function(e){ if(checkOperator(e)) input.value += "+"; });
    divide.addEventListener("click", function(e){ if(checkOperator(e)) input.value += "/"; });
    multiple.addEventListener("click", function(e){ if(checkOperator(e)) input.value += "*"; });
    remain.addEventListener("click", function(e){ if(checkOperator(e)) input.value += "%"; });


    function checkOperator(e){
        input.focus();
        if(['*', '/', '+', '-', '%'].includes(input.value[input.value.length - 1])){
            if(!e.target.classList.contains("minus")){
                input.value = input.value.slice(0,-1);
            }
            return true;
        }else if(['1', '2', '3', '4', '5', '6', '7', '8', '9', '0', ')'].includes(input.value[input.value.length - 1])){
            return true;
        }else{
            return false;
        }
    }

    plusMinus.addEventListener("click", function(){ 
        input.focus();
        if(input.value != '0' && !isNaN(Number(input.value))){
            input.value = -Number(input.value);
        }
     });

    
    

    dot.addEventListener("click", function(){ if(checkDot()) input.value += "."; });
    function checkDot(){
        input.focus();
        if(['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'].includes(input.value[input.value.length - 1]) || input.value == ""){
            return true;
        }
    }


    one.addEventListener("click", function(){ if(checkNum()) input.value += "1"; });
    two.addEventListener("click", function(){ if(checkNum()) input.value += "2"; });
    three.addEventListener("click", function(){ if(checkNum()) input.value += "3"; });
    four.addEventListener("click", function(){ if(checkNum()) input.value += "4"; });
    five.addEventListener("click", function(){ if(checkNum()) input.value += "5"; });
    six.addEventListener("click", function(){ if(checkNum()) input.value += "6"; });
    seven.addEventListener("click", function(){ if(checkNum()) input.value += "7"; });
    eight.addEventListener("click", function(){ if(checkNum()) input.value += "8"; });
    nine.addEventListener("click", function(){ if(checkNum()) input.value += "9"; });
    zero.addEventListener("click", function(){ if(checkNum()) input.value += "0"; });
    function checkNum(){
        input.focus();
        if(input.value == '0'){
            input.value = "";
            return true;
        }else if(['1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '+', '-', '*', '/', '.', '%', '('].includes(input.value[input.value.length - 1]) || input.value == ""){
            return true;
        }else{
            return false;
        }
    }

    var operatorOrder = {
        '+': 1, 
        '-': 1, 
        '*': 2, 
        '/': 2, 
        '%': 2, 
        '(': 3,
        ')': 0 
    }

    equal.addEventListener("click", operate);
    function operate(){
        var numStack = [];
        var operatorStack = [];
        var waitNum = 0;
        var waitOperator = '';
        var tempNum = '';
        var n = 0;
        var o = 0;
        for(var i = 0; i < input.value.length; i++){
            if(['1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '.'].includes(input.value[i])){
                if(i + 1 != input.value.length){
                    if(['1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '.'].includes(input.value[i + 1])){
                        tempNum += input.value[i];
                    }else{
                        tempNum += input.value[i];
                        numStack[n] = Number(tempNum);
                        n++;
                        tempNum = '';
                    }
                }else{
                    tempNum += input.value[i];
                    numStack[n] = Number(tempNum);
                    n++;
                    tempNum = '';
                }
            }else if(['-'].includes(input.value[i])){
                if(i == 0){
                    tempNum += input.value[i];
                }else{
                    if(['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'].includes(input.value[i - 1])){
                        operatorStack[o] = input.value[i];
                        o++;
                    }else{
                        tempNum += input.value[i];
                    }
                }
            }else if(['*', '/', '+', '%', '(', ')'].includes(input.value[i])){
                operatorStack[o] = input.value[i];
                o++;
            }
        }
        var oi = 0;
        var ni = 1;
        while(oi < o && ni < n){
            if(waitNum != 0 && waitOperator != ''){
                if(operatorOrder[waitOperator] >= operatorOrder[operatorStack[oi]]){//contrast
                    numStack[ni - 1] = shortOperate(waitOperator, waitOperator, numStack[ni - 1]);
                    waitNum = 0;
                    waitOperator = '';
                }else{
                    //keep on
                    if(oi + 1 == o){
                        //operate
                        input.value = shortOperate(numStack[ni - 1], operatorStack[oi], numStack[ni]);
                        if(waitNum != 0 && waitOperator != ''){
                            input.value = shortOperate(waitNum, waitOperator, Number(input.value));
                        }
                        oi++;
                        ni++;
                    }else{
                        if(operatorOrder[operatorStack[oi]] >= operatorOrder[operatorStack[oi + 1]]){
                            //operate
                            numStack[ni] = shortOperate(numStack[ni - 1], operatorStack[oi], numStack[ni]);
                            oi++;
                            ni++;
                        }else{
                            //wait
                            waitNum = numStack[ni - 1];
                            waitOperator = operatorStack[oi];
                            console.log(waitOperator+"@"+waitNum);
                            oi++;
                            ni++;
                        }
                    }
                }
            }else{
                //keep on
                if(oi + 1 == o){
                    //operate
                    input.value = shortOperate(numStack[ni - 1], operatorStack[oi], numStack[ni]);
                    if(waitNum != 0 && waitOperator != ''){
                        input.value = shortOperate(waitNum, waitOperator, Number(input.value));
                    }
                    oi++;
                    ni++;
                }else{
                    if(operatorOrder[operatorStack[oi]] >= operatorOrder[operatorStack[oi + 1]]){
                        //operate
                        numStack[ni] = shortOperate(numStack[ni - 1], operatorStack[oi], numStack[ni]);
                        oi++;
                        ni++;
                    }else{
                        //wait
                        waitNum = numStack[ni - 1];
                        waitOperator = operatorStack[oi];
                        console.log(waitOperator+"@"+waitNum);
                        oi++;
                        ni++;
                    }
                }
            }
        }
    }


    function shortOperate(op1, operator, op2){
        if(operator == '+'){
            return op1 + op2;
        }else if(operator == '-'){
            return op1 - op2;
        }else if(operator == '*'){
            return op1 * op2;
        }else if(operator == '/'){
            return op1 / op2;
        }else if(operator == '%'){
            return op1 % op2;
        }

    }

</script>