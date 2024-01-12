<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/profile.css">
</head>
<body>
    <div class="profile-page">
        <div class="content">
          <div class="content__cover">
            <div class="content__avatar">
           
            <img src="" alt=""> 

            </div>
            <div class="content__bull"><span></span><span></span><span></span><span></span><span></span>
            </div>
          </div>
          <div class="content__actions"><a href="editProfile">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                <path fill="currentColor" d="M192 256A112 112 0 1 0 80 144a111.94 111.94 0 0 0 112 112zm76.8 32h-8.3a157.53 157.53 0 0 1-68.5 16c-24.6 0-47.6-6-68.5-16h-8.3A115.23 115.23 0 0 0 0 403.2V432a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48v-28.8A115.23 115.23 0 0 0 268.8 288z"></path>
                <path fill="currentColor" d="M480 256a96 96 0 1 0-96-96 96 96 0 0 0 96 96zm48 32h-3.8c-13.9 4.8-28.6 8-44.2 8s-30.3-3.2-44.2-8H432c-20.4 0-39.2 5.9-55.7 15.4 24.4 26.3 39.7 61.2 39.7 99.8v38.4c0 2.2-.5 4.3-.6 6.4H592a48 48 0 0 0 48-48 111.94 111.94 0 0 0-112-112z"></path>
              </svg><span>Follow</span></a><a href="editProfile">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 620 620">
                  <path fill="currentColor" d="M493.1 54.9c-17.8-17.8-46.7-17.8-64.5 0L84.3 363.1c-2.6 2.6-4.7 7.1-4.3 10.5l17.6 135.1c.4 3.4 3.1 6.1 6.5 6.5l135.1 17.6c3.4.4 7.9-1.7 10.5-4.3L493.1 119.4c17.9-17.8 17.9-46.7 0-64.5zM138.3 472.2L107.1 408l43.9-43.9 64.2 64.2-43.9 43.9zM422.7 128.8L161.9 389.7l-27.3-27.3L395.4 101.5c7.5-7.5 19.8-7.5 27.3 0 3.8 3.8 5.9 8.9 5.9 14.2s-2.1 10.4-5.9 14.2c-1.9 1.9-4.1 3.3-6.5 4.8z"></path>
                </svg>
                <span>Edit Profile</span></a></div>
          <div class="content__title">
            <h1><?php echo $_SESSION['name']?></h1>
          </div>
          <div class="content__description">
            <p><?php echo $_SESSION['bio']?></p>
            <p>Columbia University - New York</p>
          </div>
          <ul class="content__list">
            <li><span>65</span>Followers</li>
            <li><span>43</span>Following</li>
            <li><span>21</span>Blogs</li>
          </ul>
          <div class="content__button"><a class="button" href="createblog">
            <div class="button__border"></div>
            <div class="button__bg"></div>
            <p class="button__text">CREATE BOLG</p></a></div>
      </div>
        <div class="bg">
          <div><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
          </div>
        </div>
        <div class="theme-switcher-wrapper" id="theme-switcher-wrapper"><span>Themes color</span>
          <ul>
            <li><em class="is-active" data-theme="orange"></em></li>
            <li><em data-theme="green"></em></li>
            <li><em data-theme="purple"></em></li>
            <li><em data-theme="blue"></em></li>
          </ul>
        </div>
        <div class="theme-switcher-button" id="theme-switcher-button">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
            <path fill="currentColor" d="M352 0H32C14.33 0 0 14.33 0 32v224h384V32c0-17.67-14.33-32-32-32zM0 320c0 35.35 28.66 64 64 64h64v64c0 35.35 28.66 64 64 64s64-28.65 64-64v-64h64c35.34 0 64-28.65 64-64v-32H0v32zm192 104c13.25 0 24 10.74 24 24 0 13.25-10.75 24-24 24s-24-10.75-24-24c0-13.26 10.75-24 24-24z"></path>
          </svg>
        </div>
      </div>
      <section class="user_blogs">
        <div class="blogs_conatiner">
          <div class="my_blogs">
            <h1>My Blogs</h1>
          </div>
          <div class="blog_content">
            <a href="">
              <div class="single_blog">
                <div class="blog_img">
                  <img src="../images/img-4.jpg" alt="">
                </div>
                <div class="blog_discription">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum error hic harum fugiat impedit pariatur.</p>
                </div>
              </div>
            </a>
             <a href=""><div class="single_blog"></div></a>
             <a href=""><div class="single_blog"></div></a>
             <a href=""><div class="single_blog"></div></a>
             <a href=""><div class="single_blog"></div></a>
             <a href=""><div class="single_blog"></div></a>
             <a href=""><div class="single_blog"></div></a>
             <a href=""><div class="single_blog"></div></a>
             <a href=""><div class="single_blog"></div></a>
          </div>
        </div>
      </section>
      <script src="<?= ROOT ?>/assets/js/profile.js"></script>
</body>
</html>