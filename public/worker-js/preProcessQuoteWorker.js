self.onmessage = function preProcessQuote(data){
    var index = 0;
    var pre = data.data[1];
    var post = data.data[2];
    //var quoteNum = 0;
    data = data.data[0];
    index = data.indexOf(pre);
    while(index != -1){
        data = data.slice(0, index) + "\"" + data.slice(index);
        index = data.indexOf(post, index + 2);
        if(index == -1){
            self.postMessage(data);
            close();
        }
        data = data.slice(0, index + 1) + "\"" + data.slice(index + 1);
        index = data.indexOf(pre, index + 1);
        if(index == -1){
            self.postMessage(data);
            close();
        }
    }
    if(index == -1){
        self.postMessage(data);
        close();
    }
}