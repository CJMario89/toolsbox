//<script>
    console.log(CryptoJS.SHA256("hi").toString());
    var data = "hi"
    dataEnc = encodeUtf8(data);
    console.log(dataEnc);
    console.log(CryptoJS.AES.encrypt(data, 'o').toString());
    var de = CryptoJS.AES.encrypt(data, 'o').toString();
    console.log(CryptoJS.AES.decrypt(de, 'o').toString(CryptoJS.enc.hex));


    function encodeUtf8(text) {
        const code = encodeURIComponent(text);
        const bytes = [];
        for (var i = 0; i < code.length; i++) {
            const c = code.charAt(i);
            if (c === '%') {
                const hex = code.charAt(i + 1) + code.charAt(i + 2);
                const hexVal = parseInt(hex, 16);
                bytes.push(hexVal);
                i += 2;
            } else bytes.push(c.charCodeAt(0));
        }
        return bytes;
    }


    function decodeUtf8(bytes) {
        var encoded = "";
        for (var i = 0; i < bytes.length; i++) {
            encoded += '%' + bytes[i].toString(16);
        }
        return decodeURIComponent(encoded);
    }

//</script>