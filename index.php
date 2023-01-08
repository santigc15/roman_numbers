<?php
// function to convert a number to roman number
function solution($number)
{

  //Fill to the left the passed number, then creates an array with its letters
$splitLetters=str_split(str_pad($number,4,"0",STR_PAD_LEFT)); 
  // Array with the roman letters to use in conversion
         $compuesto=array(
            array("","M","MM","MMM"),
            array("","C","CC","CCC","DC","D","DC","DCC","DCCC","CM"),
            array("","X","XX","XXX","XL","L","LX","LXX","LXXX","XC"),
            array("","I","II","III","IV","V","VI","VII","VIII","IX")
        ); 
  //creates the array of the resultant roman letters
        $romanNumber= ($compuesto[0][$splitLetters[0]].
                $compuesto[1][$splitLetters[1]].
                $compuesto[2][$splitLetters[2]].
                $compuesto[3][$splitLetters[3]]
            );  
  return $romanNumber;
  
  
  
}

?>
