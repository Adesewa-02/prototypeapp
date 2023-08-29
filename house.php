<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"  type="text/css"   href="d.css">
</head>
<body>
            <div class="icon-bar">
                <a href="house.html"   class="acfit"><i class="fa fa-home"><span class="nav-text">Home</span></i></a>
                <a href="help.php"><i class="fa fa-question-circle"><span class="nav-text">Help</span></i></a>
                <a href="sales.php"><img src="img/store-3-line.png" style="height: 17px;"><span class="nav-text">Sell</span></i></a>
                <a href="attendant.php"><i class="fa fa-user-circle-o"><span class="nav-text">Profile</span></i></a>
                <a href="food_list.php"><i class="fa fa-cutlery"><span class="nav-text">Food</span></i></a>
            </div>
            

                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <div class="caption-text">1/5</div>
                    
                        <img src="img/E.jpeg" height="100%">
                        
                    </div>
                    <div class="mySlides fade">
                        <div class="caption-text">2/5</div>
                        <img src="img/images (35).jpeg" height="340px">
                    </div>
                    <div class="mySlides fade">
                        <div class="caption-text">3/5</div>
                        
                        <img src="img/H.jpeg"height="100%">
                    
                    </div>
                    <div class="mySlides fade">
                        <div class="caption-text" >4/5</div>
                    
                        <img src="img/images (35).jpeg"height="100%" >
                
                    </div>
                </div>
                <div style="text-align: center;">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <script>
                    let slideIndex = 0;
                    showSlides();
                    function showSlides() {
                        let i;
                        let slides = document.getElementsByClassName("mySlides");
                        let dots= document.getElementsByClassName("dot");
                        for (i=0; i < slides.length; i++){
                            slides[i].style.display="none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length)
                        {slideIndex = 1}
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace("active","");
                        }
                        slides[slideIndex-1].style.display="block";
                        dots[slideIndex-1].className +="active";
                        setTimeout(showSlides, 5000);

                        }
                </script>
                <section>
                    <h2>Welcome <?php $_SESSION["username"];?></h2>
                <div class="form">
                    <a href="jollof.php"><img src="img/images (11).jpeg" width="200px", height="200px"></a>
                    <br>
                    <a href=""><img src="img/images (12).jpeg"  width="200px", height="200px"></a>
                    <br>
                    <a href=""><img src="img/images (13).jpeg" width="200px", height="200px"></a>
                    <br>     
                    <a href=""><img src="img/images (14).jpeg"  width="200px", height="200px"></a>            
                    <br>      
                    <a href=""><img src="img/images (15).jpeg" width="200px", height="200px"></a>    
                    <br>
                    <a href=""><img src="img/images (16).jpeg" width="200px", height="200px"></a>              
                    <br>
                    <a href=""><img src="img/images (17).jpeg" width="200px", height="200px"></a>       
                    <br>
                    <a href= ""><img src="img/images (18).jpeg" width="200px", height="200px"></a>  
                    <br>
                    <a href=""><img src="img/images (19).jpeg"  width="200px", height="200px"></a>  
                    <br>
                    <a href=""><img src="img/images (20).jpeg" width="200px", height="200px"></a>  
                    <br>
                    <a href=""><img src="img/images (21).jpeg"  width="200px", height="200px"></a>
                    <br>
                    <a href=""><img src="img/images (36).jpeg"  width="200px", height="200px"></a>
                    <br>
                    <a href=""><img src="img/images (37).jpeg"  width="200px", height="200px"></a>
                    <br>
                    <a href=""><img src="img/images (38).jpeg"  width="200px", height="200px"></a>
                    <br>
                    <a href=""><img src="img/images (39).jpeg"  width="200px", height="200px"></a>
                    <br>          
                    <a href=""><img src="img/images (40).jpeg"  width="200px", height="200px"></a>
                    <br>                
                    <a href=""><img src="img/images (41).jpeg"  width="200px", height="200px"></a>
                    <br>               
                    <a href=""><img src="img/images (42).jpeg"  width="200px", height="200px"></a>
                    <br>

                </div>
                </section>
                <p class="tag">Flash sales buy any food with 10% discount</p>
                <br><br>
            
</body>
</html>
