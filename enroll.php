<?php
$message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $uploadDirectory = 'uploads/';

    $file = $_FILES['file'];
    $fileName = $file['name'];
    $filePath = $uploadDirectory . $fileName;

    // Move the uploaded file to the destination directory
    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        $message = "File uploaded successfully!";
    } else {
        $message = "Failed to upload the file.";
    }
}

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
    

    <!---------course----------->
    <section class="course">
        <h1>IMPORTANT, please read carefully:</h1>
       
        <a href="eff.pdf" class="button1">DOWNLOAD ENROLLMENT FORM</a>
        <div class="row">

            <div class="course-col">
              
                <p><span>!!</span>Once your online application is finalized, no more editing of application <br> <br>Multiple accounts, multiple applications are ground for disqualification<br><br>Wrong entry of information grounds for disqualification</p>
        
            </div>

            <div class="course-col">
                <h3></h3>
                <p>Click (DOWNLOAD ENROLLMENT FORM) This will take you to Registration Form <br><br></p>
                <p>Fill up the registration form. Type or select the required information in the form<br></p>
                <p>*Be sure that the information (particularly your name and date of birth) in the application must be the same as indicated in your PSA birth certificate<br></p>

        
            </div>
            <div class="course-col">
                <h3><br>
                
                </h3>
                <p>Make sure the e-mail address that you will provide in the application is active, correct, and is not use. The applicant's email address must be used in this transaction<br><br></p>
                <p>Click upload pdf form to save your information on admin folder</p>
            </div>
        </div>
    </section>
    <section class="campus">
        
        <div class="text-box">
            <p>San Isidro National High School is the first step towards a brighter future and well-rounded <br> nges of the future.</p>
       <ul>
                    <li><a href="STEM.php">UPLOAD YOUR APPLICATION FORM (STEM)</a></li>
                   
                    <li><a href="HUM.php">UPLOAD YOUR APPLICATION FORM (HUM).</a></li>
                    <li><a href="TVL.php">UPLOAD YOUR APPLICATION FORM (TVL).</a></li>
        </ul>
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
        .text-box p{
            font-size: 25px;
        }
        .text-box ul li a{
            display: inline-block;
            text-decoration: none;
            color: #fff;
            border: 4px solid #F49D1A;
            padding: 12px 5px;
            font-size: 20px;
            font-weight: 4000;
            background: blue;
            position: relative;
            cursor: pointer;
        }

        .container {
            width: 40%;
            background-color: #F49D1A;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            align-items: center;
        }
        
        .label{
            color: white;
        }
        
        .container h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="file"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #4CAF50;
            border-radius: 3px;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 30%;
            font-size: 30px;
        }
        
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: white; /* Add white color to the label */
        }
        
        .message {
            text-align: center;
            margin-top: 20px;
            color: #009933;
        }
        
        /* Additional CSS for the form background color */
        .container form {
            background-color: #F49D1A;
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
        text-align: ;
        }
        .text-box h1{
            font-size: 55px;
        }
        .text-box p{
            margin: 10px 0 40px;
            font-size: 25px;
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
        .button1{
            display: inline-block;
            text-decoration: none;
            color: #fff;
            border: 4px solid #F49D1A;
            padding: 12px 32px;
            font-size: 20px;
            font-weight: 4000;
            background: red;
            position: relative;
            cursor: pointer;
        }
        .button3{
            display: inline-block;
            text-decoration: none;
            color: #fff;
            border: 4px solid #F49D1A;
            padding: 12px 5px;
            font-size: 20px;
            font-weight: 4000;
            background: blue;
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
            background-image: linear-gradient(rgba(4,9,30,0.5),rgba(4,9,30,0.5)),url("img/test.jpg");    
            background-position: center;
            background-size: cover;
            position: relative;
        }
        .course h1{
            color: white;
        }
        h1{
            font-size: 20px;
            font-weight: 600;
        }
        p{
            color: white;
            font-size: 17px;
            font-weight: 300;
            line-height: 22px;
            
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
            margin-bottom: 5%;
            padding: 40px 40px;
            box-sizing: border-box;
        }
        .course-col p span{
           color: crimson;
           font-size: 30px;
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