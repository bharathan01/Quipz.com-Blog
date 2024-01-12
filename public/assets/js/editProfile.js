const profileImageUpdate = document.getElementById('profile_img_input')
const profileImage = document.getElementById('profile_image_update')
const inputImage = document.getElementById('profile_input')

profileImageUpdate.addEventListener('click' ,()=>{
    inputImage.click()
})
inputImage.addEventListener('change',(event) =>{
   displayFile(inputImage.files[0])
})

function displayFile(file){
   const fileType = file.type
   const supportedFileType = ['image/png','image/jpeg','image/jpg']

   if(supportedFileType.includes(fileType)){
        let fileURL = URL.createObjectURL(file)
        profileImage.src = `${fileURL}`
        document.getElementById("error").innerHTML=""
     }
     else{  
         document.getElementById("error").innerHTML="File not supported! upload png,jpeg,jpg"
     }
   }