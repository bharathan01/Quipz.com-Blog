
window.onscroll = function () {
  stickNavBar();
};
function stickNavBar() {
  const navBar = document.getElementById("nav_link");
  const navBarPosition = navBar.offsetTop;
  if (window.scrollY > navBarPosition) {
    navBar.classList.add("scrolled");
    document.getElementById('search_box').classList.add('active')
  } else {
    navBar.classList.remove("scrolled");
    document.getElementById('search_box').classList.remove('active')
  }
}
document.getElementById("hand_Burger").addEventListener("click", () => {
  document.getElementById("hand_Burger").classList.toggle("active");
  document.getElementById("nav_link").classList.toggle("active");
  document.getElementById("nav-container").classList.toggle("active");
  document.getElementById("search_box").classList.toggle("active");
});
document.querySelector('.nav-button').addEventListener('click', function() {
  this.parentNode.parentNode.classList.toggle('closed')
  console.log("haii")
}, false);
