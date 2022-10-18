window.onload = (event) => {
    isConnected();
 };
        
  async function isConnected() {
        if (window.ethereum) {
          const accounts = await window.ethereum.request({method: 'eth_requestAccounts'});
      
          const account = accounts[0]
          const web3 = new Web3(window.ethereum);

          

          document.getElementById('wallet').innerHTML = account.substring(0,8)+'..';
          document.getElementById('wallet').href = 'account';
          
      }
  }

//async function logOut() {
//  await Moralis.User.logOut();
//  console.log("logged out");
//}
//logOut();