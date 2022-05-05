<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Image Gallery with Lightbox | CodingLab </title>
    <link rel="stylesheet" href="{{asset('assets/css/test.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
   </head>
<body>
  <section>
    <div class="lightBox">
      <div class="lightBox_content">
        <i class="fas fa-times close"></i>
        <div class="logo_icons">
          <a href="#">
            <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
            <div class="text_content">
              <span class="name">CodingLab</span>
              <span class="followers">50k followers</span>
            </div>
          </a>
          <div class="icons">
            <i class="fas fa-heart"></i>
            <i class="fas fa-arrow-down"></i>
          </div>
        </div>
        <div class="showImg">
          <div class="image">
            <img src="{{asset('assets/imagestest/img1.jpg')}}" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="image-gallery">
      <header>Masonry Image Gallery</header>
      <div class="image-container">
        <div class="image-box">
          <img class="gImg" src="{{asset('assets/imagestest/img1.jpg')}}" alt="">
          <div class="logo_icons">
            <a href="#">
              <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
              <div class="text_content">
                <span class="name">CodingLab</span>
                <span class="followers">50k followers</span>
              </div>
            </a>
            <div class="icons">
              <i class="fas fa-heart"></i>
              <i class="fas fa-arrow-down"></i>
            </div>
          </div>
        </div>
        <div class="image-box">
          <img class="gImg" src="{{asset('assets/imagestest/img2.jpg')}}" alt="">
          <div class="logo_icons">
            <a href="#">
              <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
              <div class="text_content">
                <span class="name">CodingLab</span>
                <span class="followers">50k followers</span>
              </div>
            </a>
            <div class="icons">
              <i class="fas fa-heart"></i>
              <i class="fas fa-arrow-down"></i>
            </div>
          </div>
        </div>
        <!--TEST IMG-->
        <div class="image-box">
          <img class="gImg" src="{{asset('assets/imagestest/img16.jpg')}}" alt="">
          <div class="logo_icons">
            <a href="#">
              <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
              <div class="text_content">
                <span class="name">CodingLab</span>
                <span class="followers">50k followers</span>
              </div>
            </a>
            <div class="icons">
              <i class="fas fa-heart"></i>
              <i class="fas fa-arrow-down"></i>
            </div>
          </div>
        </div>
        <!--TEST IMG-->
        <div class="image-box">
          <img class="gImg" src="{{asset('assets/imagestest/img3.jpg')}}" alt="">
          <div class="logo_icons">
            <a href="#">
              <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
              <div class="text_content">
                <span class="name">CodingLab</span>
                <span class="followers">50k followers</span>
              </div>
            </a>
            <div class="icons">
              <i class="fas fa-heart"></i>
              <i class="fas fa-arrow-down"></i>
            </div>
          </div>
        </div>
        <div class="image-box">
          <img class="gImg" src="{{asset('assets/imagestest/img4.jpg')}}" alt="">
          <div class="logo_icons">
            <a href="#">
              <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
              <div class="text_content">
                <span class="name">CodingLab</span>
                <span class="followers">50k followers</span>
              </div>
            </a>
            <div class="icons">
              <i class="fas fa-heart"></i>
              <i class="fas fa-arrow-down"></i>
            </div>
          </div>
        </div>
        <div class="image-box">
          <img class="gImg" src="{{asset('assets/imagestest/img5.jpg')}}" alt="">
          <div class="logo_icons">
            <a href="#">
              <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
              <div class="text_content">
                <span class="name">CodingLab</span>
                <span class="followers">50k followers</span>
              </div>
            </a>
            <div class="icons">
              <i class="fas fa-heart"></i>
              <i class="fas fa-arrow-down"></i>
            </div>
          </div>
        </div>
        <div class="image-box">
          <img class="gImg" src="{{asset('assets/imagestest/img6.jpg')}}" alt="">
          <div class="logo_icons">
            <a href="#">
              <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
              <div class="text_content">
                <span class="name">CodingLab</span>
                <span class="followers">50k followers</span>
              </div>
            </a>
            <div class="icons">
              <i class="fas fa-heart"></i>
              <i class="fas fa-arrow-down"></i>
            </div>
          </div>
        </div>
        <div class="image-box">
          <img class="gImg" src="{{asset('assets/imagestest/img7.jpg')}}" alt="">
          <div class="logo_icons">
            <a href="#">
              <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
              <div class="text_content">
                <span class="name">CodingLab</span>
                <span class="followers">50k followers</span>
              </div>
            </a>
            <div class="icons">
              <i class="fas fa-heart"></i>
              <i class="fas fa-arrow-down"></i>
            </div>
          </div>
        </div>
        <div class="image-box">
          <img class="gImg" src="{{asset('assets/imagestest/img8.jpg')}}" alt="">
          <div class="logo_icons">
            <a href="#">
              <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
              <div class="text_content">
                <span class="name">CodingLab</span>
                <span class="followers">50k followers</span>
              </div>
            </a>
            <div class="icons">
              <i class="fas fa-heart"></i>
              <i class="fas fa-arrow-down"></i>
            </div>
          </div>
        </div>
        <div class="image-box">
          <img class="gImg" src="{{asset('assets/imagestest/img9.jpg')}}" alt="">
          <div class="logo_icons">
            <a href="#">
              <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
              <div class="text_content">
                <span class="name">CodingLab</span>
                <span class="followers">50k followers</span>
              </div>
            </a>
            <div class="icons">
              <i class="fas fa-heart"></i>
              <i class="fas fa-arrow-down"></i>
            </div>
          </div>
        </div>
        <div class="image-box">
          <img class="gImg" src="{{asset('assets/imagestest/img10.jpg')}}" alt="">
          <div class="logo_icons">
            <a href="#">
              <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
              <div class="text_content">
                <span class="name">CodingLab</span>
                <span class="followers">50k followers</span>
              </div>
            </a>
            <div class="icons">
              <i class="fas fa-heart"></i>
              <i class="fas fa-arrow-down"></i>
            </div>
          </div>
        </div>
        <div class="image-box">
          <img class="gImg" src="{{asset('assets/imagestest/img11.jpg')}}" alt="">
          <div class="logo_icons">
            <a href="#">
              <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
              <div class="text_content">
                <span class="name">CodingLab</span>
                <span class="followers">50k followers</span>
              </div>
            </a>
            <div class="icons">
              <i class="fas fa-heart"></i>
              <i class="fas fa-arrow-down"></i>
            </div>
          </div>
        </div>
        <div class="image-box">
          <img class="gImg" src="{{asset('assets/imagestest/img12.jpg')}}" alt="">
          <div class="logo_icons">
            <a href="#">
              <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
              <div class="text_content">
                <span class="name">CodingLab</span>
                <span class="followers">50k followers</span>
              </div>
            </a>
            <div class="icons">
              <i class="fas fa-heart"></i>
              <i class="fas fa-arrow-down"></i>
            </div>
          </div>
        </div>
        <div class="image-box">
          <img class="gImg" src="{{asset('assets/imagestest/img13.jpg')}}" alt="">
          <div class="logo_icons">
            <a href="#">
              <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
              <div class="text_content">
                <span class="name">CodingLab</span>
                <span class="followers">50k followers</span>
              </div>
            </a>
            <div class="icons">
              <i class="fas fa-heart"></i>
              <i class="fas fa-arrow-down"></i>
            </div>
          </div>
        </div>
        <div class="image-box">
          <img class="gImg" src="{{asset('assets/imagestest/img14.jpg')}}" alt="">
          <div class="logo_icons">
            <a href="#">
              <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
              <div class="text_content">
                <span class="name">CodingLab</span>
                <span class="followers">50k followers</span>
              </div>
            </a>
            <div class="icons">
              <i class="fas fa-heart"></i>
              <i class="fas fa-arrow-down"></i>
            </div>
          </div>
        </div>
        <div class="image-box">
          <img class="gImg" src="{{asset('assets/imagestest/img15.jpg')}}" alt="">
          <div class="logo_icons">
            <a href="#">
              <img class="logoImg" src="{{asset('assets/imagestest/logo.png')}}" alt="">
              <div class="text_content">
                <span class="name">CodingLab</span>
                <span class="followers">50k followers</span>
              </div>
            </a>
            <div class="icons">
              <i class="fas fa-heart"></i>
              <i class="fas fa-arrow-down"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>

let body = document.querySelector("body"),
    lightBox = document.querySelector(".lightBox"),
    img = document.querySelectorAll(".gImg"),
    showImg = lightBox.querySelector(".showImg img"),
    close = lightBox .querySelector(".close");

   for (let image of img) {
     image.addEventListener("click", ()=>{
       showImg.src = image.src;
       lightBox.style.display = "block";
       body.style.overflow = "hidden";
       close.onclick = ()=>{
         lightBox.style.display = "none";
         body.style.overflow = "visible";
       };
     });
   }

</script>

</body>
</html>
