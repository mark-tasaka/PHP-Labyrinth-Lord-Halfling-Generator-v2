<?php

function getXPNextLevel ($level)
{
    $xpNext = "";


    switch ($level) 
    {
        case "1":
            $xpNext = "2,187";
          break;

        case "2":
            $xpNext = "4,375";
        break;
        
        case "3":
            $xpNext = "8,725";
        break;
        
        case "4":
            $xpNext = "17,501";
        break;
        
        case "5":
            $xpNext = "35,001";
        break;
        
        case "6":
            $xpNext = "70,001";
        break;        

        case "7":
            $xpNext = "140,001";
        break;
                
        case "8":
            $xpNext = "280,001";
        break;
                
        case "9":
            $xpNext = "400,001";
        break;
                
        case "10":
            $xpNext = "540,001";
        break;
                
        case "11":
            $xpNext = "660,001";
        break;
                
        case "12":
            $xpNext = "---";
        break;


        default:
          $xpNext = " =P ";
      }

      return $xpNext;
}


?>