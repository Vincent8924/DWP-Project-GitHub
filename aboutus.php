<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ABOUT US</title>
        <link rel="stylesheet" href="swiper-bundle.min.css">
        <link rel="icon" type="image/x-icon" href="image/title logo.ico">
        <style type="text/css">
             *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
               
            
                #about h1{
                    text-align: center;
                    font-size: 31px;
                    color:white;
                    top:57%;
                    width:63%;
                    position: absolute;
                }
                .About .title
               {
                text-align: center;
               }
               .About .title h2{
                font-weight: bold;
                font-size: 27px;
                }
                .About .title p{
                font-size: 23px;
                margin:0 auto;
                width: 85%;
                }

                .information{
                    min-height: 50vh;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .slide-container{
                    max-width: 700px;
                    background-color: orange;
                    padding:40px 0;
                }

                .slide-content{
                    margin: 0 40px;
                }

                .card{
                    border-radius: 35px;
                    background-color: black;
                }
                .image-content{
                    row-gap: 5px;
                    position:relative;
                    padding:25px 0;
                }

                .overlay{
                    position: absolute;
                    left:0;
                    top:0;
                    height: 100%;
                    width: 100%;
                    background-color: green;
                    border-radius: 25px 25px 0 25px;
                }

                .overlay::before,.overlay::after{
                    content: '';
                    position: absolute;
                    right: 0;
                    bottom: -40px;
                    height:40px;
                    width: 40px;
                    background-color: green;
                }

                .overlay::after{
                    border-radius: 0 25px 0 0;
                    background-color: black;
                }
                .image-content, .card-content{
                    padding: 10px 14px;
                    flex-direction: column;
                    align-items: center;
                    display: flex;
                }
                .card-image{
                    position: relative;
                    height: 150px;
                    width: 150px;
                    border-radius: 50%;
                    background: white;
                }

                .card-image .card-img{
                    height: 100%;
                    width: 100%;
                    object-fit: cover;
                    border-radius: 50%;
                    border:4px solid blue;
                }

                .name{
                    font-size: 18px;
                    font-weight: bold;
                    color: yellowgreen;
                }

                .information{
                    font-size:20px;
                    color:grey;
                    font-weight: bold;
                }

                .swiper {
      margin-left: auto;
      margin-right: auto;
    }

        </style>
        </head>
        <body>
            <?php include("user_menu.php");?>
                    <div class ="About">
                        <div class="title">
                            <h2>ABOUT US</h2>
                            <br/>
                            <p>At Kuantan Hotel, our passion is to connect our guests to the very best of Kuantan.
                                From the heritage of Pahang to the delicious treats of Kuantan, our hotel 
                                offer guests extraordinary experiences, created by combining unique 
                                architecture and structure, expressive decor and artistry, and magnificent 
                                features. Add great service, and the result is an unforgettable guest 
                                experience.</p>
                                <br/>
                                <p>While we intend to provide you with an authentic experience of the region whenever
                                     you stay with us, we also ensure high standards during your stay at Kuantan Hotel.
                                    </p>
                                <br/>
                                <p>Modern facilities, as well as timeless style, are exhibited throughout every Kuantan Hotel's guest rooms. 
                                    Our restaurants are all ready for your convenience.</p>
                       </div>
                       <br/><hr/><br/>
                       <div class="title"><h2>OUR INFORMATION</h2></div>
                       <br/>
                       <div class="information">
                        <div class="slide-container swiper">
                            <div class="slide-content">
                            <div class="card-wrapper swiper-wrapper">
                                <div class="card swiper-slide">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="Chee.png" alt="" class="card-img">
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="name">LO JIN KAI</h2>
                                        <br/>
                                        <p>1221201364</p>
                                        <p>CEO</p>
                                    </div>
                                </div>
                                <div class="card swiper-slide">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="Chee.png" alt="" class="card-img">
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="name">CHEE JIONG KING</h2>
                                        <br/>
                                        <p>1221203428</p>
                                        <p>MANAGER</p>
                                    </div>
                                </div>
                                <div class="card swiper-slide">
                                    <div class="image-content">
                                        <span class="overlay"></span>
                                        <div class="card-image">
                                            <img src="Chee.png" alt="" class="card-img">
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <h2 class="name">VINCENT TAY YONG JUN</h2>
                                        <br/>
                                        <p>1221202213</p>
                                        <p>MANAGER</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                       </div>
        </body>
        <script src="swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".slide-content", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
          </script>
</html>
