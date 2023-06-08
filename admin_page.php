
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
                    <li><a href="admin_page.php">HOME</a></li>
                    <li><a href="STEM">VIEW RECORD STEM</a></li>
                    <li><a href="TVL">VIEW RECORD TVL</a></li>
                    <li><a href="HUM">VIEW RECORD HUMS</a></li>
                    
        
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>Welcome  <span>Admin</span></h1>
            <p>San Isidro Senior High School is the first step towards a brighter future and well-rounded <br> education that prepares students for the challenges of the future.</p>
           
        </div>
    </section>

    <!---------course----------->
    <section class="course">
        <h1>Strands We Offer</h1>
        <p>To all incoming Senior High School students,  have you picked your strand for this coming school year 2023-2024?<br> Here's a brief introduction to the different Senior High School strands to help you decide.<br> "Steps on Choosing the Perfect SHS Track and Strand for You" </p>    
        
        <div class="row">

            <div class="course-col">
                <h3>Mission</h3>
                <p>To provide a nurturing and inclusive learning environment that empowers students to reach their full potential academically, socially, and emotionally. We strive to foster a love of learning, critical thinking skills, and a sense of responsibility towards themselves, their community, and the world.</p>
        
            </div>

            <div class="course-col">
                <h3>Introduction</h3>
              <p>San isidro Senior HighSchool our mission is to create a nurturing and inclusive learning environment where students are empowered to reach their full potential academically, socially, and emotionally. Through a comprehensive and innovative curriculum, we aim to foster a love for learning, critical thinking skills.
                </p>
        
            </div>
            <div class="course-col">
                <h3>Vision<br>
                </h3>
                <p>Our vision is to create a school where every student is inspired to excel and become a lifelong learner. We aim to cultivate an atmosphere of intellectual curiosity, creativity, and collaboration, equipping our students with the knowledge, skills, and values necessary to thrive in an ever-changing global society. Through innovative teaching methods, a diverse curriculum, and strong community partnerships</p>
               
            </div>
        </div>
    </section>
    <section class="campus">
        <h1>Our Campus</h1>
        <p>Our campus is a vibrant and inclusive community where students, faculty, and staff come together to learn, grow, and thrive. <br> It offers state-of-the-art facilities and resources, providing a conducive environment for academic pursuits. </p>
        <div class="row">
            <div class="campus-col">
                <img src="img/campus11.png">
                <div class="layer">
                <h3>Campus</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="img/campus1.png">
                <div class="layer">
                <h3>Campus</h3>
            </div>
            </div>
            <div class="campus-col">
                <img src="img/campus3.png">
                <div class="layer">
                <h3>Campus</h3>
            </div>
            <div>
        </div>
    </section>


    <section class="activities">
        <h1>Our Activities</h1>
        <p>
Our campus offers a diverse range of activities to cater to different interests and passions.<br> Students can participate in clubs and organizations focused on various hobbies, sports, arts, and social causes. </p>
        
        <div class="row">
            <div class="activities-col">
                <img src="img/activity 4.png">
                <h3>campus</h3>
                <p> vibrant and dynamic place that fosters a stimulating learning environment for students from various backgrounds.</p>
            </div>
            <div class="activities-col">
                <img src="img/activity1.png">  
                <h3>Campus</h3>
                <p>where dreams are nurtured and aspirations take flight. Step onto these hallowed grounds and feel the energy pulsating through the air. </p>
            </div>
            <div class="activities-col">
                <img src="img/activity2.png">  
                <h3>Campus</h3>
                <p>Our campus is not just a physical space; it is a sanctuary of knowledge and growth. It is a place where minds are ignited and imaginations are set free.</p>
            <div>
        </div>
    </section>
    <section class="cta">

        <h1>If you have any questions, comments, or concerns,<br> please don't hesitate to contact us</h1>
        <a href="https://www.facebook.com/DepEdTayoSISHS342570?mibextid=ZbWKwL" class="button">CONTACT US</a>

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
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');
        :root{
            --main-color: #F49D1A;
        }
        *{
        font-family: 'Poppins' , sans-serif;
         margin:0;
         padding:0;
        }
        .header{
            min-height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url("img/low.jpg");
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
        .text-box span{
            font-size: 55px;
            color: red;
        }
        .text-box p{
            margin: 10px 0 40px;
            font-size: 15px;
            color: #fff;
        }
        .button{
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
        .button:hover{
            border: 1px solid #F49D1A;
            background: #F49D1A;

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
        background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url("img/test1.jpg");
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
        background-image: linear-gradient(rgba(4,9,30,0.6),rgba(4,9,30,0.6)),url("img/logos.png");
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
        color: ;
       }
    </style>
</html>