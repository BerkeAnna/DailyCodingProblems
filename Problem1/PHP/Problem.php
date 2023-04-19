<?php

class Problem
{
    public function numberList($numberArray, $k )
    {
        for($i=0; $i<sizeof($numberArray); $i++){
            for($j=0; $j<sizeof($numberArray); $j++){
                if($numberArray[$i] != $numberArray[$j] && ($numberArray[$i]+$numberArray[$j]) == $k){
                    return true;
                }
            }
        }
        return false;
    }

}