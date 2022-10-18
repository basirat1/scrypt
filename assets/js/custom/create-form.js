function changedContentResource(resource){
    if(resource == 'youtube'){
        document.getElementById('youtube').className = 'active';
        document.getElementById('instagram').className = '';
        document.getElementById('tiktok').className = '';
        document.getElementById('onlyfans').className = '';
        document.getElementById('contentResource').value = 'youtube';

        document.getElementById('resourceLink').placeholder = 'A Link to your YouTube video';
    }
    if(resource == 'instagram'){
        document.getElementById('youtube').className = '';
        document.getElementById('instagram').className = 'active';
        document.getElementById('tiktok').className = '';
        document.getElementById('onlyfans').className = '';
        document.getElementById('contentResource').value = 'instagram';
    }
    if(resource == 'tiktok'){
        document.getElementById('youtube').className = '';
        document.getElementById('instagram').className = '';
        document.getElementById('tiktok').className = 'active';
        document.getElementById('onlyfans').className = '';
        document.getElementById('contentResource').value = 'tiktok';
    }
    if(resource == 'onlyfans'){
        document.getElementById('youtube').className = '';
        document.getElementById('instagram').className = '';
        document.getElementById('tiktok').className = '';
        document.getElementById('onlyfans').className = 'active';
        document.getElementById('contentResource').value = 'onlyfans';
    }
}

function changedStatus(resource){
    if(resource == 'fixedPrice'){
        document.getElementById('fixedPrice').className = 'active';
        document.getElementById('openOffers').className = '';
        document.getElementById('notSale').className = '';
        document.getElementById('changedStatus').value = 'fixedPrice';
    }
    if(resource == 'openOffers'){
        document.getElementById('fixedPrice').className = '';
        document.getElementById('openOffers').className = 'active';
        document.getElementById('notSale').className = '';
        document.getElementById('changedStatus').value = 'openOffers';
    }
    if(resource == 'notSale'){
        document.getElementById('fixedPrice').className = '';
        document.getElementById('openOffers').className = '';
        document.getElementById('notSale').className = 'active';
        document.getElementById('changedStatus').value = 'notSale';
    }
}

function linkChanged(vidLink){
    var apiKey = "AIzaSyA63m6Cfu16Ww1raE8mmHH-o3VXQBFTa4w";
    var videoId = vidLink.value.slice(vidLink.value.length - 11);
    var gUrl = "https://www.googleapis.com/youtube/v3/videos?id=" + videoId + "&key=" + apiKey + "&part=snippet,statistics,contentDetails";

    document.getElementById('assetLinkF').value = vidLink.value;

    // Check if video exist
    $.get(gUrl, function (data) {
        if(data.pageInfo.resultsPerPage != 0){

            //document.getElementById('previewAsset').style.display = 'block';
            $("#previewAsset").slideDown("slow");
    
            $.get(gUrl, function (data) {

                var title = data.items[0].snippet.title;
                var thumbnail = data.items[0].snippet.thumbnails.medium.url;
                var channel = data.items[0].snippet.channelTitle;
                var channelId = data.items[0].snippet.channelId;
                var description = data.items[0].snippet.description;
                var publishedAt = data.items[0].snippet.publishedAt;
                var viewCount = data.items[0].statistics.viewCount;
                var likeCount = data.items[0].statistics.likeCount;
                var commentCount = data.items[0].statistics.commentCount;
        
                // Client Side
                document.getElementById('channel').innerHTML = channel;
                document.getElementById('assetTitle').innerHTML = title;
                document.getElementById('assetThumbnail').src = thumbnail;
                document.getElementById('viewCount').innerHTML = numFormatter(viewCount);
                document.getElementById('likeCount').innerHTML = numFormatter(likeCount);
                document.getElementById('commentCount').innerHTML = numFormatter(commentCount);
                
                // Server Side
                document.getElementById('channelF').value = channel;
                document.getElementById('assetTitleF').value = title;
                document.getElementById('assetThumbnailF').value = thumbnail;
                document.getElementById('viewCountF').value = numFormatter(viewCount);
                document.getElementById('likeCountF').value = numFormatter(likeCount);
                document.getElementById('commentCountF').value = numFormatter(commentCount);
                document.getElementById('descriptionF').value = description;
                document.getElementById('publishedAtF').value = publishedAt;
        
                var apiKey = "AIzaSyA63m6Cfu16Ww1raE8mmHH-o3VXQBFTa4w";
                var gUrl = "https://www.googleapis.com/youtube/v3/channels/?part=snippet,contentDetails,statistics&id=" + channelId + "&key=" + apiKey;
            
                $.get(gUrl, function (data) {
                    var channelAvatar = data.items[0].snippet.thumbnails.medium.url;
                    var channelDescription = data.items[0].snippet.description;
                    var channelStartDate = data.items[0].snippet.publishedAt;
                    var channelSubscriberCount = data.items[0].statistics.subscriberCount;
                    var channelVideoCount = data.items[0].statistics.videoCount;
                    var channelViewCount = data.items[0].statistics.viewCount;
                    
                    // Client Side
                    document.getElementById('channelAvatar').src = channelAvatar;
                    
                    // Server Side
                    document.getElementById('channelAvatarF').value = channelAvatar;
                    document.getElementById('channelDescriptionF').value = channelDescription;
                    document.getElementById('channelStartDateF').value = channelStartDate;
                    document.getElementById('channelSubscriberCountF').value = numFormatter(channelSubscriberCount);
                    document.getElementById('channelVideoCountF').value = likeCount;
                    document.getElementById('channelViewCountF').value = numFormatter(channelViewCount);

                    $("#errorCont").slideUp("slow");
                });
            });
        } else {
            $("#errorCont").slideDown("slow");
        }
    });

}