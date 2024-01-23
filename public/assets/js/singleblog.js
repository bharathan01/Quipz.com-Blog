function wrapTheText(element) {
    element.style.height = "auto";
    element.style.height = (element.scrollHeight) + "px";
    if (element.value.length === 0) {
        element.style.height = 40 + "px"; 
      }
  } 
  
  
function sentData(){
    let xhr = new XMLHttpRequest();
    xhr.open('POST',)
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
const like = document.getElementById('like')

like.addEventListener('click',()=>{
    isLIke = like.classList.contains('like')
    if(isLIke){
        
    }
    else{

    }
    like.classList.toggle('like')

})
