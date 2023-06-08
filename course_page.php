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
                    <li><a href="contact.php">CONTACT</a></li>
                    
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        </div>
        <h1>STRAND WE OFFER</h1>
        <p>We are thrilled to introduce you to the exciting opportunities and unique educational pathway offered within our program. Our strand is specifically designed to provide students with a focused and specialized learning experience, tailored to their interests and future career goals. </p>    
        
        <div class="row">

            <div class="course-col">
                
                <p>Our school offers a diverse range of strands to cater to the <br> unique interests and talents of our students. One of the strands we provide is the <span>Technical-Vocational-Livelihood (TVL) strand.</span> <br> <br> Another strand we offer is the<span> Humanities and Social Sciences (HUMSS) strand.</span> This strand is designed for students who have a passion for the social sciences, arts, and humanities. </p>
        
            </div>
            
            <div class="course-col">
               
                <p>We also provide the<span> Information and Communications Technology (ICT)</span> strand, which focuses on preparing students for the digital age. <br><br>In this strand, students acquire knowledge and skills in computer programming, web development, networking, and multimedia design. They also learn about emerging technologies such as artificial intelligence, cybersecurity, and data analytics.</p>
        
            </div>
            
            <div class="course-col">
             
                <p>For students interested in business and entrepreneurship, we offer the<span> General Academic Strand (GAS)</span>. This strand provides a broad-based curriculum that covers various academic disciplines, including mathematics, sciences, languages, and social sciences. <br><br>It equips students with a solid foundation of knowledge and skills that are applicable across different fields. </p>
        
            </div>
        </div>
        <h1>Possible job</h1>
        <p>We Are Thrilled To Introduce You To The Exciting Opportunities And Unique Educational Pathway Offered Within Our Program. </p>   
      
    </section>

    <!---------course----------->
   
   
    
    <section class="section">
<h2>science, technology, engineering and mathematics.</h2>

    <div class="card">
        <div class="image">
            <img src="img/stem11.jpg">
        </div>
        <div class="title">
           
        </div>
        <div class="des">
            
            <button>Read More...</button>
        </div>
    </div>

    
    <div class="card">
        <div class="image">
        <img src="img/stem2.jpg">
        </div>
        <div class="title">
            
        </div>
        <div class="des">
            <button>Read More...</button>
        </div>
    </div>

    <div class="card">
        <div class="image">
        <img src="img/stem10.jpg">
        </div>
        <div class="title">
            
        </div>
        <div class="des">
           
            <button>Read More...</button>
        </div>
    </div>


    <div class="card">
        <div class="image">
        <img src="img/stem9.jpg">
        </div>
        <div class="title">
          
        </div>
        <div class="des">
          
            <button>Read More...</button>
        </div>
    </div>



    <div class="card">
        <div class="image">
        <img src="img/stem5.jpg">
        </div>
        <div class="title">
          
        </div>
        <div class="des">
           
            <button>Read More...</button>
        </div>
    </div>



    <div class="card">
        <div class="image">
        <img src="img/stem6.jpg">
        </div>
        <div class="title">
            
        </div>
        <div class="des">
           
            <button>Read More...</button>
        </div>
    </div>


    <div class="card">
        <div class="image">
        <img src="img/stem7.jpg">
        </div>
        <div class="title">
           
        </div>
        <div class="des">
           
            <button>Read More...</button>
        </div>
    </div>


    <div class="card">
        <div class="image">
        <img src="img/stem8.jpg">
        </div>
        <div class="title">
           
        </div>
        <div class="des">
            
            <button>Read More...</button>
        </div>
    </div>

    <h2>Technical-Vocational-Livelihood track</h2>

    <div class="card">
        <div class="image">
        <img src="img/tvl1.jpg">
        </div>
        <div class="title">
           
        </div>
        <div class="des">
            
            <button>Read More...</button>
        </div>
    </div>

    
    <div class="card">
        <div class="image">
        <img src="img/tvl2.jpg">
        </div>
        <div class="title">
         
        </div>
        <div class="des">
          
            <button>Read More...</button>
        </div>
    </div>

    <div class="card">
        <div class="image">
        <img src="img/tvl3.jpg">
        </div>
        <div class="title">
           
        </div>
        <div class="des">
           
            <button>Read More...</button>
        </div>
    </div>


    <div class="card">
        <div class="image">
        <img src="img/tvl5.jpg">
        </div>
        <div class="title">
           
        </div>
        <div class="des">
            
            <button>Read More...</button>
        </div>
    </div>



    <div class="card">
        <div class="image">
        <img src="img/tvl6.jpg">
        </div>
        <div class="title">
           
        </div>
        <div class="des">
           
            <button>Read More...</button>
        </div>
    </div>



    <div class="card">
        <div class="image">
        <img src="img/tvl7.jpg">
        </div>
        <div class="title">
           
        </div>
        <div class="des">
            
            <button>Read More...</button>
        </div>
    </div>


    <div class="card">
        <div class="image">
        <img src="img/tvl11.jpg">
        </div>
        <div class="title">
          
        </div>
        <div class="des">
         
            <button>Read More...</button>
        </div>
    </div>


    <div class="card">
        <div class="image">
        <img src="img/tvl9.jpg">
        </div>
        <div class="title">
           
        </div>
        <div class="des">
           
            <button>Read More...</button>
        </div>
    </div>



    
    <h2>Humanities and Social Sciences.</h2>

    <div class="card">
        <div class="image">
            <img src="img/stem11.jpg">
        </div>
        <div class="title">
           
        </div>
        <div class="des">
           
            <button>Read More...</button>
        </div>
    </div>

    
    <div class="card">
        <div class="image">
            <img src="img/stem10.jpg">
        </div>
        <div class="title">
           
        </div>
        <div class="des">
          
            <button>Read More...</button>
        </div>
    </div>

    <div class="card">
        <div class="image">
            <img src="img/stem9.jpg">
        </div>
        <div class="title">
          
        </div>
        <div class="des">
            
            <button>Read More...</button>
        </div>
    </div>


    <div class="card">
        <div class="image">
            <img src="img/stem8.jpg">
        </div>
        <div class="title">
          
        </div>
        <div class="des">
            
            <button>Read More...</button>
        </div>
    </div>



    <div class="card">
        <div class="image">
            <img src="img/stem7.jpg">
        </div>
        <div class="title">
            
        </div>
        <div class="des">
            
            <button>Read More...</button>
        </div>
    </div>



    <div class="card">
        <div class="image">
            <img src="img/stem6.jpg">
        </div>
        <div class="title">
         
        </div>
        <div class="des">
              <button>Read More...</button>
        </div>
    </div>


    <div class="card">
        <div class="image">
            <img src="img/stem5.jpg">
        </div>
        <div class="title">
          
        </div>
        <div class="des">
            
            <button>Read More...</button>
        </div>
    </div>


    <div class="card">
        <div class="image">
            <img src="img/stem4.jpg">
        </div>
        <div class="title">
           
        </div>
        <div class="des">
           
            <button>Read More...</button>
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
       
    </script>
    
</body>
    <style>
       
    .section {
    background-image: linear-gradient(rgba(4,9,30,0.5),rgba(4,9,30,0.5)),url("img/low.jpg");    
    background-size: cover;
    background-position: center;
}

    .card{
     width:20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
     background-image: linear-gradient(rgba(4,9,30,0.5),rgba(4,9,30,0.5)),url("img/low.jpg");    
     
    }

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  

 
 }

.title{
 
  text-align: center;
  padding-bottom: 5px;
  font-size: 5px;
  

  
 }
.title h1{
    font-size: 25px;
    background: #F49D1A;
}
h1{
  font-size: 10px;
  
 }

.des{
    padding: 3px;
    text-align: center;
    padding-top: 10px;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    background: #F49D1A;
}
button{
  margin-top: 10px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;
}
button:hover{
  background-color: blue;
  color: white;
  transition: .5s;
  cursor: pointer;
}
h2{
            font-size: 30px;
            font-weight: 600;
            text-align: center;
            color: white;
            
            
        }
        p{
            text-align: center;
            color: white;
            font-size: 14px;
            font-weight: 300;
            line-height: 22px;
            

        }

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
        .header h1{
            color: white;
            text-align: center;
        }
        h1{
            font-size: 36px;
            font-weight: 600;
        }
        p{
            text-align: center;
            color: white;
            font-size: 18px;
            font-weight: 300;
            line-height: 22px;
            padding: 10px;
        }
        p span{
            color: blue;
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
       .p span{
        color: blue;
       }

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