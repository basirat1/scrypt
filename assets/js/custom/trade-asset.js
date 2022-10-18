
Moralis.initialize("QdxKMnCnzwGf10KXcOxWrCQcWk2m0J0tyElyRuD2");
Moralis.serverURL = 'https://vpvpghmqoxnh.usemoralis.com:2053/server'
const TOKEN_CONTRACT_ADDRESS = "0x817dEe2F771430A34fEAF09aA451E52879b5C092";
const MARKETPLACE_CONTRACT_ADDRESS = "0xe7C925992b53fBbCBf582295C27589A68c05e440";

init = async () => {
window.web3 = await Moralis.Web3.enable();
window.tokenContract = new web3.eth.Contract(tokenContractAbi, TOKEN_CONTRACT_ADDRESS);
window.marketplaceContract = new web3.eth.Contract(marketplaceContractAbi, MARKETPLACE_CONTRACT_ADDRESS);
}




ensureMarketplaceIsApproved = async (tokenId, tokenAddress) => {
    user = await Moralis.User.current();
    const userAddress = user.get("ethAddress");
    const contract = new web3.eth.Contract(tokenContractAbi, tokenAddress);
    const approvedAddress = await contract.methods.getApproved(tokenId).call({ from: userAddress });
    if(approvedAddress != MARKETPLACE_CONTRACT_ADDRESS){
      await contract.methods.approve(MARKETPLACE_CONTRACT_ADDRESS,tokenId).send({ from: userAddress });
    }
  }
  
  buyItem = async () => {
    const nftId = document.getElementById('nftId').value;
    const askingPrice = document.getElementById('askingPrice').value;
    alert(nftId);
    user = await Moralis.User.current();
    await marketplaceContract.methods.buyItem(nftId).send({from: '0x20174C4387bE496b03b51C178d61Dedb2E24bD77', value: 9999999999});
  }










init();