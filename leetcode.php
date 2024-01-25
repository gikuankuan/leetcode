<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nums = [0,4,3,0];
        $target = 0;
        // print_r($nums);
        twoSum($nums, $target);
        function twoSum($nums, $target) {
            $re_array = array();
            $chk_array = array();
            $one = 0;
            for($i=0;$i<count($nums);$i++){
            $chk_array = $nums;
                if(Count($re_array) == 0 ){
                    $pre_num = $target - $nums[$i];
                   echo $pre_num."X".$target."X".$nums[$i];
                //    exit();
                    unset($chk_array[$i]);
                    
                    if(in_array($pre_num,$chk_array)){
                        $re_array[] = $i;
                        for($n=$i+1;$n<(count($nums));$n++){
    
                            if($nums[$n] == $pre_num){
                                $re_array[] = $n;
                                //print_r($re_array);
                                //exit();
                                return $re_array;
                            }
                        }
                    }
                }
            }
        }
    
    ?>
</body>
</html>
<?php

