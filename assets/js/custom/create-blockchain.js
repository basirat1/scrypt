
Moralis.initialize("QdxKMnCnzwGf10KXcOxWrCQcWk2m0J0tyElyRuD2");
Moralis.serverURL = 'https://vpvpghmqoxnh.usemoralis.com:2053/server'
const TOKEN_CONTRACT_ADDRESS = "0x817dEe2F771430A34fEAF09aA451E52879b5C092";
const MARKETPLACE_CONTRACT_ADDRESS = "0xe7C925992b53fBbCBf582295C27589A68c05e440";

init = async () => {
window.web3 = await Moralis.Web3.enable();
window.tokenContract = new web3.eth.Contract(tokenContractAbi, TOKEN_CONTRACT_ADDRESS);
window.marketplaceContract = new web3.eth.Contract(marketplaceContractAbi, MARKETPLACE_CONTRACT_ADDRESS);
}

createToBlockchain = async () => {

  /* Moralis init code */

  var assetLinkF = document.getElementById('assetLinkF').value;
  var assetTitleF = document.getElementById('assetTitleF').value;
  var assetThumbnailF = document.getElementById('assetThumbnailF').value;
  var channelF = document.getElementById('channelF').value;
  var descriptionF = document.getElementById('descriptionF').value;
  var publishedAtF = document.getElementById('publishedAtF').value;
  var viewCountF = document.getElementById('viewCountF').value;
  var commentCountF = document.getElementById('commentCountF').value;
  var channelAvatarF = document.getElementById('channelAvatarF').value;
  var channelDescriptionF = document.getElementById('channelDescriptionF').value;
  var channelSubscriberCountF = document.getElementById('channelSubscriberCountF').value;
  var channelVideoCountF = document.getElementById('channelVideoCountF').value;
  var channelViewCountF = document.getElementById('channelViewCountF').value;
  var changedStatus = document.getElementById('changedStatus').value;
  var nftPrice = document.getElementById('nftPrice').value;

  if(assetLinkF != '' && assetTitleF != '' && assetThumbnailF != '' && channelF != '' && descriptionF != '' && publishedAtF != '' &&viewCountF != '' &&commentCountF != '' &&channelAvatarF != '' &&channelDescriptionF != '' &&channelVideoCountF != '' &&channelSubscriberCountF != '' &&channelViewCountF != ''){

  const metadata = {
    assetLinkF: assetLinkF,
    assetTitle: assetTitleF,
    assetThumbnail: assetThumbnailF
  }

  const nftFileMetadata = new Moralis.File("metadata.json", {base64 : btoa(JSON.stringify(metadata))});
  await nftFileMetadata.saveIPFS();

  const nftFileMetadataPath = nftFileMetadata.ipfs();
  const nftId = await mintNft(nftFileMetadataPath);
  document.getElementById('nftFileMetadataPath').value = nftFileMetadataPath;
  document.getElementById('nftId').value = nftId;
  
  user = await Moralis.User.current();
  const userAddress = user.get("ethAddress");
  document.getElementById('wallet').value = userAddress;
  document.getElementById('nftContractAddress').value = TOKEN_CONTRACT_ADDRESS;

    switch(changedStatus){
      case "notSale":
        return;
      case "fixedPrice":
        await ensureMarketplaceIsApproved(nftId, TOKEN_CONTRACT_ADDRESS);
        await marketplaceContract.methods.addItemToMarket(nftId, TOKEN_CONTRACT_ADDRESS, nftPrice).send({ from: userAddress });
        break;
      case "openOffers":
        alert('Nog niet supported!');
        return;
    }

  } else {
    alert('niet alles is gevult');
  }
  document.getElementById('asset_info').submit();
}

mintNft = async (metadataUrl) => {
  const receipt = await tokenContract.methods.createItem(metadataUrl).send({from: ethereum.selectedAddress});
  console.log(receipt);
  return receipt.events.Transfer.returnValues.tokenId;
}

document.getElementById("createToBlockchain").onclick = () => createToBlockchain();

ensureMarketplaceIsApproved = async (tokenId, tokenAddress) => {
  user = await Moralis.User.current();
  const userAddress = user.get("ethAddress");
  const contract = new web3.eth.Contract(tokenContractAbi, tokenAddress);
  const approvedAddress = await contract.methods.getApproved(tokenId).call({ from: userAddress });
  if(approvedAddress != MARKETPLACE_CONTRACT_ADDRESS){
    await contract.methods.approve(MARKETPLACE_CONTRACT_ADDRESS,tokenId).send({ from: userAddress });
  }
}

buyItem = async (item) => {
  user = await Moralis.User.current();
  await marketplaceContract.methods.buyItem(item.uid).send({from: user.get('ethaddress'), value: item.askingPrice});
}

init();