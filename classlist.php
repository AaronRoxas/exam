<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class List</title>
    <link rel="stylesheet" href="style.css">
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

        table{
            border-collapse: collapse;
            display: grid;
            place-items: center;
            margin: 50px;          
        }
        th{
            background-color: #DCA789;
        }
        th, td{
            border: 1px solid black;
            width: 200px;
            padding: 10px;
            text-align:center;
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
           <li><a href="index.php">Home</a></li>
           <li><a href="#">Class List</a></li>
           <li><a href="grades.php">Grading Sheet</a></li>
         </ul>
      </nav>  
    <table>
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Course</th> 
        </tr>
        <?php
        //List of students
            $student = [
                ["2022-2-00001", "John Doe", "BSIT"],
                ["2022-2-00002", "Jane Smith", "BSIT"],
                ["2022-2-00003", "Michael Johnson", "BSIT"],
                ["2022-2-00004", "Sarah Brown", "BSIT"],
                ["2022-2-00005", "David Lee", "BSIT"],
                ["2022-2-00006", "Emily Wilson", "BSIT"],
                ["2022-2-00007", "James Taylor", "BSIT"],
                ["2022-2-00008", "Olivia Garcia", "BSIT"],
                ["2022-2-00009", "Ethan Martinez ", "BSIT"],
                ["2022-2-000010", "Ava Rodriguez", "BSIT"]
            ];
        
            // Used to print the students info in the table
            foreach ($student as $info){
                echo"<tr>
                <td>$info[0]</td>
                <td>$info[1]</td>
                <td>$info[2]</td>
                </tr>";
            }
        ?>
    </table>
    <footer>
        <p>&COPY Copyright <b>Prelim Exam</b> All rights reserved</p>
    </footer>
</body>
</html>