    <script src="js/web3.min.js"></script>

    <script>
        //init web3js
        var web3;
        var contract;
        var token;
        var address;
        var accounts;
        var chainId;
        const contract_addrress = "0xC15B081406DB94366c2f501171acc80367420E46";

        
        if(window.ethereum != undefined){
            web3_init();
            window.ethereum.on('accountsChanged', async function(){
                accounts = await web3.eth.getAccounts();
            });

            window.ethereum.on('chainChanged', async function(){
                chainId = await web3.eth.getChainId();
            });
        }

        async function web3_init(){
            web3 = await new Web3(window.ethereum);
            accounts = await window.ethereum.request({method: "eth_requestAccounts"});
            console.log(accounts)
            accounts = await web3.eth.getAccounts();
            chainId = await web3.eth.getChainId();
            createContract();

            console.log(chainId);
        }


        async function createContract(){
            const raw_abi = await fetch("/abi.abi");
            const abi = await raw_abi.json();
            contract = await new web3.eth.Contract(abi, contract_addrress);
            await createToken();
            excuteContract();
            const account = accounts[0];
            console.log(account)
            var allowance = await token.methods.allowance(account, contract_addrress).call();
            console.log(allowance)
        }

        async function createToken(){
            const raw_abi = await fetch("/busd.abi");
            const abi = await raw_abi.json();
            token = await new web3.eth.Contract(abi, "0xeD24FC36d5Ee211Ea25A80239Fb8C4Cfd80f12Ee");
        }

        async function excuteContract(){
            console.log(contract)
            console.log(token)
            const account = accounts[0];

            const allowance = await checkAllowance();
            console.log(allowance);
            if(allowance){
                var res1 = await contract.methods.stake(web3.utils.toWei("1", "ether")).estimateGas({from: account});
                console.log(res1);
                var res2 = await contract.methods.stake(web3.utils.toWei("1", "ether")).send(({from:account,gas:res1}));
                console.log(res2);
            }
        }

        async function checkAllowance(){
            const account = accounts[0];
            var allowance = await token.methods.allowance(account, contract_addrress).call();
            console.log(allowance);
            if(allowance < 2**50){
                var res = await token.methods.approve(contract_addrress, web3.utils.toWei((1e50).toLocaleString("fullwide", {useGrouping: false}))).estimateGas({from: account});
                var res0 = await token.methods.approve(contract_addrress, web3.utils.toWei((1e50).toLocaleString("fullwide", {useGrouping: false}))).send({from: account,gas:res});
                console.log(res0);

                allowance = await token.methods.allowance(account, contract_addrress);
                if(allowance < web3.utils.toWei("1", "ether")){
                    return false;
                }else{
                    return true;
                }
            }else{
                return true;
            }

        }

    </script>