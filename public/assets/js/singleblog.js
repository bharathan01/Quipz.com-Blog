function wrapTheText(element) {
    element.style.height = "auto";
    element.style.height = (element.scrollHeight) + "px";
    if (element.value.length === 0) {
        element.style.height = 40 + "px"; 
      }
  }  
followBtn = document.getElementById("follow")
      followBtn.addEventListener('click' ,()=>{
        isFollowing = followBtn.classList.contains('followed')
        if(isFollowing){
            followBtn.innerHTML = 'Follow'
        }else{
            followBtn.innerHTML = 'Following'
        }
        followBtn.classList.toggle('followed')
    })
    