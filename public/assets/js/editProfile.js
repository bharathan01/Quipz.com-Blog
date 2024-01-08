const profileImageUpdate = document.getElementById('profile_img_input')
const profileImage = document.getElementById('profile_image_update')
const inputImage = document.getElementById('profile_input')

profileImageUpdate.addEventListener('click' ,()=>{
    inputImage.click()
    console.log('haii')
})
inputImage.addEventListener('change',(event) =>{
   displayFile(inputImage.files[0])
})

function displayFile(file){
   const fileType = file.type
   const supportedFileType = ['image/png','image/jpeg','image/jpg']

   if(supportedFileType.includes(fileType)){
     let fileReader = new FileReader
     fileReader.onload = function(e){
        let fileURL = e.target.result
        profileImage.src = `${fileURL}`
     }
     fileReader.readAsDataURL(file)
     }
     else{fileURL

     }
   }