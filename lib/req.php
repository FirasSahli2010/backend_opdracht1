<?php
    function getPostValue($val, $dafault = '') {
        return ($val && $val!=='')? (isset($_POST[$val])?$_POST[$val]:(isset($_GET[$val])?$_GET[$val]:$dafault)):$dafault;
    }

    function isMeervoud($inputNum, $num) {
        return ($inputNum % $num === 0);
    }

    function fizzString($str = 'Fizz') {
        return $str;
    }

    function buzzString($str = 'Buzz') {
        return $str;
    }

    function FizzBuzz($start = 1, $end = 30, $fizzNum = 3, $buzzNum = 5) {
        if ($start > $end ) {
            return 'Error start '.$start.' number must be smaller  than end number '.$end.' )))';
        }
        $cntResult = '';
        for($cnt = $start; $cnt<=$end; $cnt++ ){
            if(!isMeervoud($cnt, $fizzNum) && !isMeervoud($cnt, $buzzNum)) {
                $cntResult = $cntResult.'<span style="color:black; font-weight: normal">'.$cnt.'</span/>';
            } 
            if(isMeervoud($cnt, $fizzNum)   ) {
                $cntResult = $cntResult.'<span style="color:green; font-weight: bold;">'.fizzString().'</span>';
            } 
            if (isMeervoud($cnt, $buzzNum)) {
                $cntResult = $cntResult.'<span style="color:yelow; font-weight: bold; ">'.buzzString().'</span>';
            }
            
            $cntResult = $cntResult.'<br/>';
        }

        return $cntResult;
    }