function wrapTheText(element) {
    element.style.height = "auto";
    element.style.height = (element.scrollHeight) + "px";
    if (element.value.length === 0) {
        element.style.height = 40 + "px"; // Set back to the minimum height
      }
  }
  document.querySelector('.comment-like').addEventListener('click' ,()=>{
    if(document.querySelector('.comment-like').style.color == 'red'){
        document.querySelector('.comment-like').style.color = 'black';
    }
    else{
        document.querySelector('.comment-like').style.color = 'red';
    }
     
  })