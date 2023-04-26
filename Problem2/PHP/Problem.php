<?php

class Problem
{

    public function countArray($array)
    {
        $returnArray= [];
        $retNum=1;

        for($i = 0; $i<sizeof($array); $i++){
            for($j = 0; $j<sizeof($array); $j++){
                    if($i != $j){
                        $retNum *= $array[$j];
                    }
            }
            array_push($returnArray, $retNum);
            $retNum=1;
        }
        return $returnArray;
    }
}