function wrapTheText(element) {
  element.style.height = "auto";
  element.style.height = element.scrollHeight + "px";
  if (element.value.length === 0) {
    element.style.height = 40 + "px";
  }
}

function sentData(followerId, followingId, isFollowed, blogId) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "UserIntraction", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  var data =
    "whoFollowed=" +
    encodeURIComponent(followerId) +
    "&whomFollowed=" +
    encodeURIComponent(followingId) +
    "&isfollow=" +
    encodeURIComponent(isFollowed) +
    "&blogId=" +
    encodeURIComponent(blogId);

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
        
    }
  };

  xhr.send(data);
}

followBtn = document.getElementById("follow");
followBtn.addEventListener("click", () => {
  isFollowing = followBtn.classList.contains("followed");
  if (isFollowing) {
    followBtn.innerHTML = "Follow";
    sentData(followerId, followingId, false,'');
  } else {
    followBtn.innerHTML = "Following";
    sentData(followerId, followingId, true,'');
  }
  followBtn.classList.toggle("followed");
});
const like = document.getElementById("like");
const likeCountData = document.getElementById('like_count')
function isUserLikedOrNot(){
    if(isUserliked == 1){
        like.classList.add("like");
        likeCountData.innerHTML = likeCount;
    }else{
        likeCountData.innerHTML = likeCount;
    }
}
isUserLikedOrNot();
like.addEventListener("click", () => {
  isLIke = like.classList.contains("like");
  if (isLIke) {
    likeCountData.innerHTML = likeCount - 1;
    sentData(followerId,'', false,blogId);
  } else {
    likeCountData.innerHTML = likeCount + 1;
    sentData(followerId, '', true,blogId);
  }
  like.classList.toggle("like");
});
