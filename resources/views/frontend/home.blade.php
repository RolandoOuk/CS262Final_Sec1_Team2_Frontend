<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smos-Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="">
</head>
<style>
    .sidebar{
    background-color: rgb(137, 45, 45);
    color: white;
    
}
body {
    flex-direction: column;
    text-align: center;
}

.carousel-container {
    width: 80%;
    max-width: 1200px;
}


.carousel {
    display: flex;
    overflow: hidden;
    position: relative;
}

.carousel-item {
    min-width: 20%;
    box-sizing: border-box;
    padding: 10px;
}

.carousel-item img {
    width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
}

.carousel-btn {
    background: none;
    border: none;
    font-size: 2rem;
    cursor: pointer;
    padding: 10px;
    user-select: none;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}

#prevBtn {
    left: 0;
}

#nextBtn {
    right: 0;
}

</style>

<body class="vh-100 ">
    <!-- Navbar -->
    <div class="nav-bar" style="height: 60px;">
        <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(137, 45, 45);">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand fs-4" href="#" style="color: white; font-family: 'Times New Roman', Times, serif;">SMOS <b style="color: orange;">COMPANY</b></a>
                <!-- toggler-button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Side-bar -->
                <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <!-- Side-bar header-->
                    <div class="offcanvas-header text-white border-bottom">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SMOS COMPANY</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <!-- Side-bar body-->
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="home" style="color: white;">Home</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="profile.html" style="color: white;">Profile</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link" href="#contact" style="color: white;">Contact Us</a>
                            </li>
                        </ul>
                        <!-- Login -->
                        <div class="d-flex justify-content-center align-item-center gap-3">
                            <a href="login.html" class="text-white text-decoration-none px-3 py-1 rounded-2"
                                style="background-color: orange;">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Row-1 -->
    <div class="first">
        <div class="row">
            <!-- col-1 -->
            <div class="col justify-content-center text-start p-5" style="height: 400px;">
                <h1 style="font-family: 'Times New Roman', Times, serif; font-size: 60px; line-height: 50px; padding-left: 50px;">GOOD DESIGN <br><b>IS GOOD BUSINESS</b></h1>
                <p  style="font-family: 'Times New Roman', Times, serif; line-height: 35px; font-size: 28px; padding-bottom: 20px; padding-left: 50px;">Create your own CV in a minute to <br> apply to be a CEO</p>
                <a href="template.html" class="text-white text-decoration-none px-4 py-2 rounded-2 m-5"
                    style="background-color: rgb(255, 166, 0);">Create Now</a>
            </div>
            <!-- col-2 -->
            <div class="col" style="height: 400px;">
                <img src="pic-front.png" class="rounded mx-auto d-block"  style="height: 400px;">
            </div>
        </div>
    </div>

    <!-- Row-Choose -->
    <div class="second" style="background-color: rgb(137, 45, 45);">
            <h2 class="text-center" style="color: rgb(252, 186, 63); font-family: 'Times New Roman', Times, serif; padding-top: 2%;"><b>Choose Your Own Design</b></h2>
            <h4 class="text-center" style="color: white; font-family: 'Times New Roman', Times, serif; padding-bottom: 3%;">Wide selection of designs. Carefully optimised for clarity and impact. <br>
                One click layouts - no formatting required.</h4>
                <div class="row">
                    <div class="col">
                        <img src="pic1.webp" alt="" style="width: 100%; ">
                    </div>
                    <div class="col">
                        <img src="pic2.webp" alt="" style="width: 100%; ">
                    </div>
                    <div class="col">
                        <img src="pic3.jpg" alt="" style="width: 100%; ">
                    </div>
                    <div class="col">
                        <img src="pic4.png" alt="" style="width: 100%; ">
                    </div>
                    <div class="col">
                        <img src="pic5.jpg" alt="" style="width: 100%; ">
                    </div>
                    <div class="col">
                        <img src="pic7.jpg" alt="" style="width: 100%; ">
                    </div>
                  </div>
        
        
    </div>

    <!-- Row-Offer -->
    <div class="third" >
        <h1 class="text-center" style="font-family: 'Times New Roman', Times, serif; font-weight: bold; color: orange; padding-top: 20px;">What We Offer</h1>
        <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif;">Easiest and most feauture-packed <br>CV builder available</h3>
        <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                <p style="font-weight: bold; font-size: 20px; font-family: 'Times New Roman', Times, serif; color: orange; padding-top: 20px;">Step-by-step builder</p>
                <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;">Easy to use step-by-step <br>bulider enables you to <br>create a well-polished,<br> professional CV in <br> minutes. Impress, Save <br>time</p>
              </div>
              <div class="col">
                <p style="font-weight: bold; font-size: 20px; font-family: 'Times New Roman', Times, serif; color: orange; padding-top: 20px;">Pre-written content</p>
                <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;">Make your CV more <br> sophiisticated. Select from <br>thousands of pre-written <br>bullet points for hundreds <br>of jobs and careers. Just <br>click and insert them <br>directly into your CV!</p>
              </div>
              <div class="col">
                <p style="font-weight: bold; font-size: 20px; font-family: 'Times New Roman', Times, serif; color: orange; padding-top: 20px;">Expert tips & guidance</p>
                <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;">Get detailed CV-building <br>tips and advice every step <br>of the way. CV pro or <br>beginner-we've got you <br>covered</p>
              </div>
            </div>
          </div>
          <hr>
          <!-- Row-feedback -->
          <h1 class="text-center" style="color: orange; font-family: 'Times New Roman', Times, serif;">Your feedback and review <br><b>important to us!</b></h1>
          <p style="text-align: center; font-family: 'Times New Roman', Times, serif; font-size: 18px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi perspiciatis, atque porro quibusdam iure nobis dolorem sequi sit doloremque! Saepe eius <br>dolorem aut aliquam veritatis veniam similique soluta. Ab, aperiam.</p>

          <form>
            <div class="">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write your comment" style="width: 280px; background-color: rgb(194, 193, 193); margin-left: 42%; text-align: center;">
            </div>
    </div>
    <!-- Row-footer -->
    <div class="four" style="background-color: rgb(137, 45, 45); height: 200px; margin-top: 30px;">
        <div class="row">
            <div class="col text-end" style="font-size: 30px; color: white; font-family: 'Times New Roman', Times, serif; padding-top: 40px; line-height: 35px;">SMOS <br><b style="color: orange;">COMPANY</b></div>
            <div class="col" style="text-align: start;">
                <p style="font-size: 19px; font-family: 'Times New Roman', Times, serif; color: white; padding-top: 25px;"><b style="font-size: 22px;">CONTACT</b> <br>smosteaoun@gmail.com <br>085-8888-9999 <br>Contact us</p> 
            </div>
        </div>
    </div>
</body>

</html>