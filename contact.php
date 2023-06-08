<?php
@include 'config_php';
session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login_page.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISHS.edu.ph</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <script src="scrollreveal.js"></script>
</head>
<body>
    <section class="header">
        <nav> 
            <div class="div nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="user_page.php">HOME</a></li>
                    <li><a href="about_page.php">ABOUT</a></li>
                    <li><a href="course_page.php">STRAND</a></li>
                   
                    <li><a href="logout.php">lOGOUT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>San-isidro National High School</h1>
            <p>We value open communication and encourage you to reach out to us. If you have any questions, inquiries, <br> or would like more information about our school, please don't hesitate to contact us. Our dedicated and friendly <br> staff are ready to assist you and provide the support you need.</p>
            <a href="https://www.facebook.com/DepEdTayoSISHS342570?mibextid=ZbWKwL" class="button1">Contact us</a>
        </div>
    </section>

    <section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247123.39260224142!2d120.98690420534092!3d14.581802107787393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397bb4d40100d85%3A0xe9aa4f354d403728!2sSan%20Isidro%20Senior%20High%20School!5e0!3m2!1sen!2sph!4v1683894840160!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <section class="contact-us">
        <div class="row">
            <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>San Isidro, Rodriguez, Philippines, 1860</h5>
                    <p>Address</p>
                </span>
            </div>  

            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>0917 850 4327</h5>
                    <p>Mobile</p>
                </span>
            </div>  

            <div>
                <i class="fa fa-envelope"></i>
                <span>
                    <h5>marvinjaytead0@gmail.com</h5>
                    <p>Email</p>
                </span>
            </div>  

        </div>
    <div class="contact-col">
    <form action="form-handler.php" method="post">
        <input type="text"  name="name" placeholder="Enter Your name" required>
        <input type="email" name="email" placeholder="Enter Email Address" required>
        <input type="text" name="subject" placeholder="Enter Your Subject"required>
        <textarea rows="8" name="message" placeholder="message" required></textarea>
        <button type="submit" class="button red-button">Send Message<button>
    </form>
    </div>
    </div>
    </section>

    

    <script>
        var navLinks = document.getElementById("navLinks")
        function showMenu(){
            navLinks.style.right = "0"
        }
        function hideMenu(){
            navLinks.style.right = "-200px"
        }
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 2500,
            delay: 400
        });
        ScrollReveal().reveal('.nav-links ul li a', { delay: 600, origin: 'bottom' });
        ScrollReveal().reveal('.text-box h1, .course h1, .campus h1, .activities h1', { delay: 500, origin: 'left'});
        ScrollReveal().reveal('.row .course-col, .row .campus-col, .activities-col img, .course p, .campus p, .activities p, .text-box p, .text-box a, .activities-col h3', { delay: 500, origin: 'bottom'});
    </script>
    
</body>
    <style>
        .location{
            width: 100%;
            margin: auto;
            padding: 80px 0;
            background-image: linear-gradient(rgba(4,9,30,0.5),rgba(4,9,30,0.5)),url("img/low.jpg");    
        }
        .location iframe{
        width: 95%;
        padding-left: 5%;
        }
        .contact-us{
            width: 80%;
            margin: auto;
            background: ;
        }
        .contact-col{
            flex-basis: 48%;
            margin-bottom: 30px;
        }
        .contact-col div{
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }
        .contact-col div .fa{
            font-size: 28px;
            color: #F49D1A;
            margin: 10px;
            margin-right: 30px;
        }

        .contact-col div p{
            padding: 0;
            color: grey;
        }
        .contact-col div h5{
            font-size: 20px;
            margin-bottom: 5px;
            color: #555;
            font-weight: 700;
        }

        .contact-col input, .contact-col textarea{
            width: 100%;
            padding: 15px;
            margin-bottom: 17px;
            outline: none;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');
        :root{
            --main-color: #F49D1A;
        }
        .button1{
            display: inline-block;
            text-decoration: none;
            color: #fff;
            border: 1px solid #fff;
            padding: 12px 32px;
            font-size: 18px;
            background: transparent;
            position: relative;
            cursor: pointer;
        }
        *{
        font-family: 'Poppins' , sans-serif;
         margin:0;
         padding:0;
        }
        .header{
            min-height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url("img/backgroundpic.png");
            background-position: center;
            background-size: cover;
            position: relative;
        }
        nav{
            display:flex;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center ;

        }
        nav img{
            width: 150px;
        }
        .nav-links{
            flex: 1;
            text-align: right;
        }
        .nav-links ul li{
            list-style: none;
            display: inline-block;
            padding: 8px 12px;
            position: relative;
        }
        .nav-links ul li a{
            color: #fff;
            text-decoration: none;
            font-size: 15px;
        }
        .nav-links ul li::after{
            content: '';
            width: 0%;
            height:2px;
            background:#F49D1A;
            display: block;
            margin: auto;
            transition: 1s;
        }
        .nav-links ul li:hover::after{
            width: 100%;
        }
        .text-box{
        width: 100%;
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        text-align: center;
        }
        .text-box h1{
            font-size: 55px;
        }
        .text-box p{
            margin: 10px 0 40px;
            font-size: 15px;
            color: #fff;
        }
        .button{
            display: inline-block;
            text-decoration: none;
            color:  #blue;
            border: 2px solid #000;
            padding: 12px 32px;
            font-size: 18px;
        
            position: relative;
            cursor: pointer;
        }
       
        
        nav .fa{
            display: none;
        }

        @media(max-width: 700px){
            .text-box h1{
                font-size: 20px;
            }
            .nav-links ul li{
                display: block;
            }
            .nav-links{
                position: absolute;
                background:#F49D1A;
                height: 100vh;
                width: 200px;
                top: 0;
                right: -200px;
                text-align: left;
                z-index: 2;
                transition: 1s;
            }
            nav .fa{
                display: block;
                color: white;
                margin: 10px;
                font-size: 22px;
                cursor: pointer;
                position: absolute;
                top: 0;
                right: 0;
            }
            .nav-links ul{
                padding: 30px;
            }
            
        }
        
        /* COURSE*/
        .course-col h3{
            color: blue;
        }
        .course-col h3 span{
            color: white;
        }
        .course-col ul li a{
            color: #fff;
            padding-left: 20px;
            font-size: 15px;
        }
        .course-col ul li a span{
            color: darkblue;
        }
       
        .course-col ul li{
            color: blue;
            padding-right: px;
            font-size: 15px;
            padding-top: 0%;
            
        }
        .course-col ul {
            color: red;
        }
        .course{
            min-height: 100vh;
            width: 100%;
            margin: auto;
            text-align: center;
            padding-top: 50px;
            background-image: linear-gradient(rgba(4,9,30,0.5),rgba(4,9,30,0.5)),url("img/low.jpg");    
            background-position: center;
            background-size: cover;
            position: relative;
        }
        .course h1{
            color: white;
        }
        h1{
            font-size: 36px;
            font-weight: 600;
        }
        p{
            color: white;
            font-size: 14px;
            font-weight: 300;
            line-height: 22px;
            padding: 10px;
        }
        .row{
            margin-top: 5%;
            display: flex;
            justify-content: space-between;
        }
        .course-col{
            flex-basis: 31%;
            background: #F49D1A;
            border-radius: 10px;
            margin-bottom: 10%;
            padding: 40px 40px;
            box-sizing: border-box;
        }
      
            
        
        h3{
            text-align: center;
            font-weight: 600;
            margin: 10px 0;

        }
        .course-col:hover{
            box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);  
        }
        @media(max-width: 700px){
            .course{
                width: 100%;
            }
            .row{
                flex-direction: column ;
            }
        }
       /*----campus----*/

       .campus{
        min-height: 100vh;
        width: 100%;
        margin: auto;
        text-align: center;
        padding-top: 50px;
        background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url("img/background3.png");
        background-position: center;
        background-size: cover;
        position: relative;
       }
       .campus p{
        color: White;
       }
       .campus h1{
        color: white;
        font-size: 40px;
       }
       .campus-col{
        flex-basis: 32%;
        border-radius: 10px;
        margin-bottom: 30px;
        position: relative;
        overflow: hidden;
       }
       .campus-col img{
        width: 125%;
        display: block;
       }
       .layer{
        background: transparent;
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        transition: 0.5s;
       }
       .layer:hover{
        background-color: rgba(244, 157, 26, 0.8);
       }
       .layer h3{
        width: 100% ;
        font-weight: 500;
        color:black ;
        font-size: 40px ;
        bottom: 0;
        left: 0;
        transform:translateX(-500);
        position: absolute;
        opacity: 0;
        transition: 0.5s ;
       }
       .layer:hover h3{
        bottom: 49%;
        opacity: 1;
       }
       @media(max-width: 700px){
            .campus{
                width: 100%;
            }

        }
       /*------activities-----*/
       .activities{
        min-height: 100vh;
        width: 100%;
        margin: auto;
        text-align: center;
        padding-top: 50px;
        background-image: linear-gradient(rgba(4,9,30,0.6),rgba(4,9,30,0.6)),url("img/activity.png");
        background-position: center;
        background-size: cover;
        position: relative;
       
       }
       .activities-col{
        flex-basis: 32%;
        border-radius: 10px;
        margin-bottom: 5%;
        position: relative;
        overflow: hidden;
        text-align: left;
       }
       .activities-col img{
        width: 125%;
        border-radius: 10px;
       }
       .activities-col p{
        padding: 0;
        color: white;
       }
       .activities-col h3{
        margin-top: 16px;
        margin-bottom:  15px;
        padding: 0 5px;
        text-align: left;
        color: #F49D1A;
       }
       .activities p{
        padding: 0 3px;
        color: white;
       }
       .activities h1{
        color: white;
       }
       @media(max-width: 700px){
            .activities{
                width: 100%;
            }
        }
       /*-----CALL------*/
       .cta{
        margin: 100px auto;
        width: 80%;
        background-image: linear-gradient(rgba(0,0,0,1.0),rgba(0,0,0,1.0)),url("img/logos.png");
        background-position: center;
        background-size: cover;
        border-radius: 10px;
        text-align: center;
        padding: 100px 0;
       }
       .cta h1{
        color: white;
        margin-bottom: 40px;
        padding: 0;
       }
       
       @media(max-width: 700px){
        .cta h1{
            font-size: 24px ;
        }
       }
       .footer{
        text-align:center;
        width:100%;
        padding: 30px 0;

       }
       .footer h4{
        margin-bottom: 25px;
        margin-top: 20px;
        font-weight: 600;
       }
       .footer p{
        color: black;
       }
    </style>
</html>