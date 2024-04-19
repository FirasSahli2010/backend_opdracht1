<?php
    require('lib/req.php');
?>
<html>
    <head>
    </head>
    <body>
        <?php
            
            $isSubmit = getPostValue('btnSubmit', null);
            $start = getPostValue('numStart', 0);
            $end = getPostValue('numEnd', 15);
            $fizzNum = getPostValue('fizzNum', 3);
            $buzzNum = getPostValue('buzzNum', 5);
            
        ?>
        <div>
        <form name="frmOpdracht1" action="index.php" method="post"> 
            <div > 
                <label for="numStart" >Start from</label>
                <input type="number" id="numStart" name="numStart" value="<?=$start?>" />
            </div> 
            <div > 
                <label for="numEnd" >End on</label>
                <input type="number" id="numEnd" name="numEnd" value="<?=$end?>" />
            </div> 
            <div > 
                <label for="fizzNum" >Fizz number</label>
                <input type="number" id="fizzNum" name="fizzNum" value="<?=$fizzNum?>" />
            </div> 
            <div > 
                <label for="buzzNum" >Buzz number</label>
                <input type="number" id="buzzNum" name="buzzNum" value="<?=$buzzNum?>" />
            </div> 
            <div >
                <input type="submit" name="btnSubmit" id="btnSubmit" >
            </div>
        </form>
        </div>
        <div style="background-color: transparent">
            <?php  
            $result = '';
                if($isSubmit) {
                    $result = FizzBuzz($start, $end, $fizzNum, $buzzNum);
                }
                ?>
                <div>
                    <?php
                    echo $result;  
                    ?>
                </div>
                <?
            ?>
        </div>
    </body>
</html>