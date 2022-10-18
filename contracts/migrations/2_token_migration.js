const ShorEaseToken = artifacts.require("ShorEaseToken");

module.exports = function (deployer) {
  deployer.deploy(ShorEaseToken);
};
