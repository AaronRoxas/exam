<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gradesheet</title>
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
        h1{
            text-align: center;
        }
        #prelim-txt{
            padding-top: 25px;
        }
  
          </style>

</head>
<body>
    <nav>
        <h1>Prelim Exam</h1>
         <ul>
           <li><a href="index.php">Home</a></li>
           <li><a href="classlist.php">Class List</a></li>
           <li><a href="#">Grading Sheet</a></li>
         </ul>
      </nav>  

   
    
      <table>
        <tr>
            <th>No.</th>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Program</th>
            <th>Prelim</th>
            <th>Midterm</th>
            <th>Finals</th>
            <th>Overall</th>
            <th>GPA</th>
        </tr>
      <?php
    

      //Prelim Array
      $studData = [                           //PRELIM                              //Midterm               //FINALS
        ["2022-2-00001", "John Doe", "BSIT",7,10,10,10,20,14,40,40,        10,10,40,40,40,43,19,47,    10, 60, 60, 52, 40, 57],
        ["2022-2-00002", "Jane Smith", "BSIT",10,10,10,10,14,13,35,39,     10,10,40,35,34,43,24,49,    10, 60, 60, 51, 36, 57],
        ["2022-2-00003", "Michael Johnson", "BSIT",10,8,10,10,16,13,35,40, 10,10,40,17,32,45,49,44,    10, 60, 60, 30, 40, 57],
        ["2022-2-00004", "Sarah Brown", "BSIT",0,9,10,9,16,14,40,40,       10,10,40,30,38,40,39,48,    10,60, 60, 0, 38, 57],
        ["2022-2-00005", "David Lee", "BSIT",10,10,8,10,0,0,30,40,         10,10,40,35,40,40,22,46,    10,60, 60, 31, 36, 57],
        ["2022-2-00006", "Emily Wilson", "BSIT",7,8,10,10,13,14,34,34,     10,10,40,40,30,43,45,42,    5, 40, 60, 38, 36, 57],
        ["2022-2-00007", "James Taylor", "BSIT",10,8,10,10,19,14,40,39,    10,10,40,35,30,43,30,49,    10,60, 60, 30, 36, 57],
        ["2022-2-00008", "Olivia Garcia", "BSIT",10,5,10,10,19,14,40,39,   10,10,40,0,30,27,24,41,     0, 40, 40, 20, 34 ,57],
        ["2022-2-00009", "Ethan Martinez ", "BSIT",10,10,10,8,11,0,35,36,  10,10,35,35,32,27,22,39,    10,60, 60, 15, 34, 57],
        ["2022-2-00010", "Ava Rodriguez", "BSIT",10,9,10,10,19,14,40,38,   10,10,40,40,36,43,27,48,    10,60, 60, 30, 38, 57]
    ];

        $count = 1;
        foreach ($studData as $grades)
        {
            $quiz1 = ($grades[7]/20*60+40);
            $quiz2 = ($grades[8]/15*60+40);
            $quiz = ($quiz1 + $quiz2)/2;


            $assign = ($grades[3]/10*60+40);
            $sw =  ($grades[4]/10*60+40);
            $sw_Ass = ($sw + $assign)/2;


            $lab1 = ($grades[5]/10*60+40);
            $lab2 = ($grades[6]/10*60+40);

            $lab = ($lab1 + $lab2)/2;

            $labExam = ($grades[9]/40*60+40);
            $writtenExam = ($grades[10]/40*60+40);
            
            //Formula for getting prelim grade
            $prelimG = round(($sw_Ass * 0.1 ) + ($lab*0.1) + (($quiz)*0.3) + ($labExam*0.1) + ($writtenExam * .4),2);


            //MIDTERM SECTION
            $assign2 = ($grades[11]/10*60+40);
            $sw2 =  ($grades[12]/10*60+40);
            $sw_Ass = ($sw2 + $assign2)/2;
            
            $quiz3 = ($grades[15]/40*60+40);
            $quiz4 = ($grades[16]/50*60+40);
            $quiz = ($quiz3 + $quiz4)/2;

            $lab3 = ($grades[13]/40*60+40);
            $lab4 = ($grades[14]/40*60+40);

            $lab = ($lab3 + $lab4)/2;

            $labExam = ($grades[17]/50*60+40);
            $writtenExam = ($grades[18]/50*60+40);
            
            //Formula for getting midterm grade
            $midG = round(($sw_Ass * 0.1 ) + ($lab*0.1) + (($quiz)*0.3) + ($labExam*0.1) + ($writtenExam * .4),2);


            //FINALS SECTION
            $quiz5= ($grades[22]/60*60+40);
            $assign3 = ($grades[19]/10*60+40);
            


            $lab5 = ($grades[20]/60*60+40);
            $lab6 = ($grades[21]/60*60+40);

            $lab = ($lab5 + $lab6)/2;

            $documentation = ($grades[23]/40*60+40);
            $presentation = ($grades[24]/60*60+40);
            
            //Formula for getting  grade
            $finalG = round(($sw_Ass * 0.1 ) + ($lab*0.1) + (($quiz)*0.3) + ($labExam*0.1) + ($writtenExam * .4),2);

     

            $finalGrade = round(($prelimG * .33) + ($midG * .33) + ($finalG * .34),2);

                        
            switch (true) {
                case $finalGrade >= 99:
                    $gpa = 1.00;
                    break;
                case $finalGrade >= 96:
                    $gpa = 1.25;
                    break;
                case $finalGrade >= 93:
                    $gpa = 1.50;
                    break;
                case $finalGrade >= 90:
                    $gpa = 1.75;
                    break;
                case $finalGrade >= 87:
                    $gpa = 2.00;
                    break;
                case $finalGrade >= 84:
                    $gpa = 2.25;
                    break;
                case $finalGrade >= 81:
                    $gpa = 2.50;
                    break;
                case $finalGrade >= 78:
                    $gpa = 2.75;
                    break;
                case $finalGrade >= 75:
                    $gpa = 3.00;
                    break;
                default:
                    $gpa = 5.00;
                    break;
                }

                echo
                "
                <tr>
                <td>".$count."</td>".
                "<td>".$grades[0]."</td>".
                "<td>".$grades[1]."</td>".
                "<td>".$grades[2]."</td>".
                "<td>".$prelimG."</td>".
                "<td>".$midG."</td>".
                "<td>".$finalG."</td>".
                "<td>".$finalGrade."</td>".
                "<td><b>".$gpa."</td>".
                "</tr>";
                $count++;
           
           
        }
   


  
      ?>

    </table>
    <footer>
             <p style="text-align: center;">&COPY Copyright <b>Prelim Exam</b> All rights reserved</p>
        </footer>
     
</body>
</html>