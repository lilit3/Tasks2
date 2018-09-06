<?php

class ForArrayClass
{
    public $arr1;
    public $needle;
    
    public function __construct(array $arr1){
        $this->arr1 = $arr1;
        $this->needle = 8;
    }
    
    // array_sum
    public function arraySum() {
        $sum = $this->arr1[0] - $this->arr1[0];

        foreach ($this->arr1 as $value) {
            $sum += $value;
        }
        
        return $sum;
    }
    
    // in_array
    public function inArray() {
        
        foreach ($this->arr1  as $value) {
            
            if ($value == $this->needle) {
                return true;
                
            }
        }
        
        return false;
        
    }
    
    // array_diff
    public function arrayDiff($arr1, $arr2) {
        
        foreach ($arr1 as $key => $value1) {
            
            foreach ($arr2 as $value2) {
                if ($value1 === $value2) {
                    unset($arr1[$key]);
                }
            }
        }

        return $arr1;
    }
    
     // sort
     public function sortArray() {
        
        $count_arr = count($this->arr1);
        $change = $this->arr1[0];
        
        foreach ($this->arr1 as $value) {
            
            for ($j=0; $j<$count_arr-1; $j++) {
       
                if ($this->arr1[$j] > $this->arr1[$j+1]) {
                    $change = $this->arr1[$j];
                    $this->arr1[$j] = $this->arr1[$j+1];
                    $this->arr1[$j+1] = $change;
                }
            }
        }
        
        return $this->arr1;
    }
    
}

$obj = new ForArrayClass([5, 7, 1, 4, 19, 8, 75, 14]);

var_dump($obj->arraySum());

var_dump($obj->inArray());

$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");

var_dump($obj->arrayDiff($array1, $array2));

var_dump($obj->sortArray());




