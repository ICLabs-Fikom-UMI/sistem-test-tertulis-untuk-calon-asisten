<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ICONS -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="style.css" />
    <script>src="script.js"</script>

    <title>Sidebar</title>
    <style>
      @import url(https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900);

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Inter", sans-serif;
}
body{
    background-color: #5b6677;
}
.container {
    width: 100%;
    min-height: 100hv;
}
.sidebar {
    width: 256px;
    height: 100hv;
    display: flex;
    flex-direction: column;
    gap: 20px;
    background-color: #fff;
    padding: 24px;
    border-radius: 30px;
}
.sidebar .head {
  display: flex;
  gap: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #f6f6f6;
}
.user-img{ 
  width: 44px;
  height: 44px;
  border-radius: 50%;
  overflow: hidden;


}
.user.jpg img {
  width: 100%;
  object-fit: cover;
}
.user-details .title,
.menu .title {
  font-size: 10px;
  font-weight: 500;
  color: #757575;
  text-transform: uppercase;
  margin-bottom: 10px;
}
.user-details .name {
  font-size: 14px;
  font-weight: 500;
}
.menu ul li{
  list-style: none;
  margin-bottom: 5px;
}
.menu ul li a{
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 14px;
  font-weight: 500;
  color: #757575;
  text-decoration: none;
  padding: 12px 8px;
  border-radius: 8px;
  transition: all 0.3s;
}
.menu ul li > a:hover,
.menu ul li.active > a {
  color: #000;
  background-color: #f6f6f6;
}
.menu ul li .icon {
  font-szie: 20px;
}
.menu ul li .text {
  flex: 1;
}
.menu ul li .arrow {
  font-size: 14px;
  transition: all 0.3s; 
}
.menu ul li .acitve .arrow {
  transform: rotate(180deg);
} 


.menu .sub-menu {
  display: none ;
  margin-left: 20px;
  padding-left: 20px;
  padding-top: 5px;
  border-left: 1px solid #f6f6f6;

}
.menu .sub-menu li a {
  padding: 10px 8px;
  font-size: 12px;
}
.menu not(:last-child) {
  padding-bottom: 10px;
  margin-bottom: 20px;
  border-bottom: 2px solid ;

}

    </style>
  </head>
  <body>


  <div class="container">
    <div class="sidebar">
      <div class="head">
        <div class="user-img">
          <img src="user.jpg" alt="">
        </div>
        <div class="user details">
          <p class="title">web dev</p>
          <p class="title">nisa</p>
        </div>
      </div>
      <div class="nav">
        <div class="menu">
          <p class=""title>Main</p>
          <ul>
            <li>
              <a href="">
                <i class="icon ph-bold ph-house-simple"></i>
                <span class="text">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="">
                <i class="icon ph-bold ph-user"></i>
                <span class="text">User</span>
                <i class="arrow ph-bold ph-caret-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="">
                    <span class="text">Asisten</span>
                  </a>
                </li>
                <li>
                  <a href="">
                    <span class="text">Calon Asisten</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="active">
              <a href="">
                <i class="icon ph-bold ph-file-text"></i>
                <span class="text">test</span>
              </a>
            </li>
            <li>
              <a href="">
                <i class="icon ph-bold ph-calender-blank"></i>
                <span class="text">hasil test</span>
              </a>
            </li>
            <li>
              <a href="">
                <i class="icon ph-bold ph-house-simple"></i>
                <span class="text">profile</span>
              </a>
            </li>
            <li>
              <a href="">
                <i class="icon ph-bold ph-house-simple"></i>
                <span class="text">logout</span>
              </a>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </div>

    <!-- Jquery -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
      integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
      crossorigin="anonymous"
    ></script>
    <<script>
      greeting();
      </script>
  </body>
</html>