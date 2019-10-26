<!DOCTYPE html>
<html>
    <head>
        <title>
            QBank-Home
        </title>
        <?php
        require'Includes/bsplugin.php';
        ?>
    </head>
    <body>
        <?php
        require 'Includes/header.php';
        ?>
        <div class="container">
            <div class="row" >
                
                <form action="Scripts/TakeTest.php" method="get">
                    <input type="text" name="testname" value="no_test_selected" />
                    <input type="button" value="Take a Test" action="submit" name="take_test" disabled=<?php if(isset($testname)==true && $testname=="no_test_selected") echo '"true"'; else echo '"false"' ;?>/>
                </form>
            </div>
        </div>
        
    </body>
</html>