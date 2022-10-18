const ShorEaseMarketContract = artifacts.require("ShorEaseMarketContract");

module.exports = function (deployer) {
  deployer.deploy(ShorEaseMarketContract);
};
