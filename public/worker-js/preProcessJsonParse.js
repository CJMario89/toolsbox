self.onmessage = async function preProcessJsonParse(data){
    try{
        var parsed = await JSON.parse(data.data);
        self.postMessage(parsed);
        close();
    }catch(e){
        self.postMessage("e");
        close();
    }
}