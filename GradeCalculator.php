<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Grade Calculator</h1>

  <!-- una gumawa munaa ako ng mga  button para makapag enter ng scores --> 
    <div class="calculator">
        <form method="post">
            <input type="text" name="quiz" placeholder="Quiz score">

            <input type="text" name="assignment" placeholder="Assignment score">

            <input type="text" name="exam" placeholder="Exam score" >
            <button type="submit">Submit</button>
        </form>
    </div>




    <?php
    //dito gumawa ako ng variable gamit yung tatlong hihnihingi na given
    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
        $quiz = $_POST['quiz'];
        $assignment = $_POST['assignment'];
        $exam = $_POST['exam'];
        //eto naman yung formula para makuha yung ave and final grade
        $final_grade = ($quiz * 0.3) + ($assignment * 0.3) + ($exam * 0.4);
        
        //dito naman ay gumawa ako ng condition para makuha kung equal ba  final grade  
        if ($final_grade >= 90) {
              echo 'A';
          } else if ($final_grade >= 80) {
            echo 'B';
            } else if ($final_grade >= 70) {
            echo  'C';
        } else if ($final_grade >= 60) {
            echo 'D';
        } else {
            echo 'F';
        }
        //dito naman is kapag walang nalagay na value sa mga variable kapag invalid
         if ($quiz == '' || $assignment == '' || $exam == '') {
        echo "put the scores.";
         }
         // dito naman is kapag hindi number ang nalagay 
           elseif (!is_numeric($quiz) || !is_numeric($assignment) || !is_numeric($exam)) {
         echo "All inputs should be numbers.";
           }

        //lastly tinawag ko nalang yung mga variable dito
        echo "<div class='result'>";
        echo "<p>Final Grade: " . round($final_grade, 2) . "</p>";
        echo "</div>";
    }
    ?>
    
</body>
</html>
