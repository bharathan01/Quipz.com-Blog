function wrapTheText(element) {
    element.style.height = "auto";
    element.style.height = (element.scrollHeight) + "px";
    if (element.value.length === 0) {
        element.style.height = 40 + "px"; 
      }
  } 
  
  
function sentData(followerId,followingId){
    console.log("ok");
    let xhr = new XMLHttpRequest();
    xhr.open('POST','Blog.php',true)
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    var data = 'user_id=' + encodeURIComponent(followerId) + '&blog_id=' + encodeURIComponent(followingId);

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
        }
    };

    xhr.send(data);
}

followBtn = document.getElementById("follow")
      followBtn.addEventListener('click' ,()=>{
        isFollowing = followBtn.classList.contains('followed')
        if(isFollowing){
            followBtn.innerHTML = 'Follow'
        }else{
            followBtn.innerHTML = 'Following'
            sentData(followerId,followingId);
        }
        followBtn.classList.toggle('followed')
    })
const like = document.getElementById('like')

like.addEventListener('click',()=>{
    isLIke = like.classList.contains('like')
    if(isLIke){
        
    }
    else{

    }
    like.classList.toggle('like')

})
