const userNameField = document.getElementById('username');
const userEmailField = document.getElementById('email');
const fileAvatarFile = document.getElementById('fileAvatar');

openUserInfo = async () => {
    const serverUrl = "https://em7dcoc6tniu.usemoralis.com:2053/server";
    const appId = "vKeTUwqWYPVjpnM0s79u7Mp9US9jKKaBYTYUO5sl";
    Moralis.start({ serverUrl, appId });   
    user = await Moralis.User.current();
    if(user){
        const email = user.get('email');
        if(email){
            userEmailField.value = email;
        } else {
            userEmailField.value = '';
        }

        const username = user.get('username');
        if(username){
            userNameField.value = username;
        } else {
            userEmailField.value = '';
        }

        const userAvatar = user.get('avatar');
        if(userAvatar){
            userAvatar.src = userAvatar.url();
        }
    }
}

saveUserInfo = async () => {
    const serverUrl = "https://em7dcoc6tniu.usemoralis.com:2053/server";
    const appId = "vKeTUwqWYPVjpnM0s79u7Mp9US9jKKaBYTYUO5sl";
    Moralis.start({ serverUrl, appId });   
    user.set('email', userEmailField.value);
    user.set('username', userNameField.value);
    
    if(fileAvatarFile.files.length > 0){
        const avatar = new Moralis.file("avatar.jpg", fileAvatarFile.Files[0]);
        user.set('avatar', avatar);
    }
    await user.save();
    alert('User info saved!');
    openUserInfo();
}

document.getElementById('saveProfile').onclick = saveUserInfo();
//openUserInfo();