<!DOCTYPE html>
<html>
    <head>
        <?php
        require 'Includes/connector.php'
        ?>
        <?php
        require '';
        ?>
        <title>
            <?php 
            if(isset($_GET["exam"]))
                echo "Qbank Exam-"+$_SESSION["exam"];
            ?>            
        </title>
        
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                
            </div>
            <div class="row">
                <form method="post" action=<?php echo "\"exam.php?msg={$SESSION["exam"]}\""?>>
                    <select name="language">
                        <option>English</option>
                        <option>Hindi</option>
                    </select>
                <button action="submit">Start Exam</button>
                <button><a href="index.php">Go Back to Index</a></button>
                </form>
            </div>            
        </div>
    </body>
</html>