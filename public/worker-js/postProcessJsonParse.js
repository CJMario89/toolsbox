self.onmessage = async function preProcessJsonParse(data){
    try{
        var dataArr = data.data[0].split("`");
        var pre = data.data[1];
        var post = data.data[2];
        var result = "";
        for(var i = 0; i < dataArr.length; i++){
            if(i == 0){
                result = dataArr[i];
            }else{
                if(i % 2 == 1){
                    result += pre;
                    result += dataArr[i];
                }else{
                    result += post;
                    result += dataArr[i];
                }
            }
        }
        self.postMessage(result);
        close();
    }catch(e){
        self.postMessage("e");
        close();
    }
}