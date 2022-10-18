const connectButton = document.getElementById("metamask_connect");
const walletID = document.getElementById("walletID");

async function metamaskCon(){
    if (window.ethereum) {
      const accounts = await window.ethereum.request({method: 'eth_requestAccounts'});
      const account = accounts[0]
      const web3 = new Web3(window.ethereum);
      askSign();
    }
  }
  
  async function askSign() {
    const web3Js = new Web3(window.ethereum);
    const walletAddress = await ethereum.request({ method: "eth_requestAccounts" });
  
    const message = `Welcome, \n\n` +
        `Click to sign in and accept the Terms of Service.\n\n` +
        `This request will not trigger a blockchain transaction or cost any gas fees.\n\n` +
        `Wallet Address:\n${walletAddress[0]}\n\n` +
        `Nonce:\n`;
    const signature = await web3Js.eth.personal.sign(message, walletAddress[0]);
    const signing_address = await web3Js.eth.personal.ecRecover(message, signature);
  
    return true;
  
  }