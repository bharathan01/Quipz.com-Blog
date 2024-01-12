const drageArea = document.getElementById("drag_area");
const browseInput = document.getElementById("blog_image");
const openFile = document.querySelector(".open_file");

let file;

openFile.onclick = () => {
  browseInput.click();
};
browseInput.addEventListener("change", () => {
  file = browseInput.files[0];
  displayFile();
});
drageArea.addEventListener("dragover", (e) => {
  e.preventDefault();
});
drageArea.addEventListener("drop", (e) => {
  e.preventDefault();
  file = e.dataTransfer.files[0];
  displayFile();
});

function displayFile() {
  const fileType = file.type;
  const supportedFileType = ["image/png", "image/jpeg", "image/jpg"];
  if (supportedFileType.includes(fileType)) {
    
    let imageLInk = URL.createObjectURL(file);
    let image = `<img src='${imageLInk}'>`;
    drageArea.innerHTML = image;
  } else {
    document.querySelector(".invaild_img").style.display = "block";
  }
}
