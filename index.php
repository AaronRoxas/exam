<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <title>Home</title>
   
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <style>

        nav {
            background: #0E0C0A;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 1.5rem;
            
            position: sticky;
            top: 0;
            left: 0;
            z-index: 1;
            width: 100;
            height: 75px;
        }

        nav h1{
        font-family: 'Quicksand';
        color:white;
        }
        
        ul li {
            list-style-type: none;
        }
        
        a {
            text-decoration: none;
            color: white;
            padding: 20px;
        
        }
        
        a:hover {
            color: gray;
        }
        ul {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }
        hr
        {
            width: 30%;
            margin-top: 20px;
        }
        #landing-h1{
            font-size: 40px;
            font-weight: 400;
        }

        .contents{
            padding: 200px;
            margin: 25px;
        }

        .contents h1, p
        {
            padding: 25px;
        }
        .img-container {
            position: absolute;
            top: 50%;
            right: 400px; /* Adjust this value to position the image horizontally */
            transform: translateY(-50%);
        }
        footer {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            text-align: center;
            color: black;
            padding: 10px 0;
        }




    </style>

</head>
<body>
    <nav>
        <h1>Prelim Exam</h1>
         <ul>
           <li><a href="#">Home</a></li>
           <li><a href="classlist.php">Class List</a></li>
           <li><a href="grades.php">Grading Sheet</a></li>
         </ul>
      </nav>  


     
        <div class="contents">
            <h1 id="landing-h1">Welcome to
                <span style="color:tomato;">
                Grading<br>System
                <hr>
                </span></h1>
            <p>Prelim Exam</p>   
           
        </div> 
        <div class="img-container">
         <img src="icon.jpg" style="border-radius: 50%;" height="350px" width="350px" alt="">
            </div>
        <footer>
             <p>&COPY Copyright <b>Prelim Exam</b> All rights reserved</p>
        </footer>
     

</body>
</html>