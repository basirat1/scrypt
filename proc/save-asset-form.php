<?php

require '../root/connection.php';

// Important data
$objectId = htmlspecialchars($_POST['assetLink']);
$nftMetadataPath = htmlspecialchars($_POST['nftMetadataPath']);
$nftContractAddress = htmlspecialchars($_POST['nftContractAddress']);
$nftId = htmlspecialchars($_POST['nftId']);

// Form data $POST
$assetLink = htmlspecialchars($_POST['assetLink']);
$assetTitle = htmlspecialchars($_POST['assetTitle']);
$assetThumbnail = htmlspecialchars($_POST['assetThumbnail']);
$channel = htmlspecialchars($_POST['channel']);
$description = htmlspecialchars($_POST['description']);
$publishedAt = htmlspecialchars($_POST['publishedAt']);
$viewCount = htmlspecialchars($_POST['viewCount']);
$likeCount = htmlspecialchars($_POST['likeCount']);
$commentCount = htmlspecialchars($_POST['commentCount']);
$channelAvatar = htmlspecialchars($_POST['channelAvatar']);
$channelDescription = htmlspecialchars($_POST['channelDescription']);
$channelStartDate = htmlspecialchars($_POST['channelStartDate']);
$channelSubscriberCount = htmlspecialchars($_POST['channelSubscriberCount']);
$channelVideoCount = htmlspecialchars($_POST['channelVideoCount']);
$channelViewCount = htmlspecialchars($_POST['channelViewCount']);
$changedStatus = htmlspecialchars($_POST['changedStatus']);
$askPrice = htmlspecialchars($_POST['askPrice']);
$royalties = htmlspecialchars($_POST['royalties']);
$contentResource = htmlspecialchars($_POST['contentResource']);


// insert a single publisher
$sql = 'INSERT INTO asset(objectId, assetTitle, nftMetadataPath, description, nftContractAddress, nftId, assetLink, assetThumbnail, channel, views, likes, commentCount, contentResource, nftStatus, askPrice) VALUES(:objectId, :assetTitle, :nftMetadataPath, :description, :nftContractAddress, :nftId, :assetLink, :assetThumbnail, :channel, :views, :likes, :commentCount, :contentResource, :nftStatus, :askPrice)';

$statement = $conn->prepare($sql);

$statement->execute([
    ':objectId' => $objectId,
    ':assetTitle' => $assetTitle,
    ':nftMetadataPath' => $nftMetadataPath,
    ':description' => $description,
    ':nftContractAddress' => $nftContractAddress,
    ':nftId' => $nftId,
    ':assetLink' => $assetLink,
    ':assetThumbnail' => $assetThumbnail,
    ':channel' => $channel,
    ':views' => $viewCount,
    ':likes' => $likeCount,
    ':commentCount' => $commentCount,
    ':contentResource' => $contentResource,
    ':nftStatus' => $changedStatus,
    ':askPrice' => $askPrice
]);

$hashedId = base64_encode($conn->lastInsertId());

header('Location: ./asset/'.$hashedId);