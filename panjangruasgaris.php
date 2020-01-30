<?php

  function getCentroid($coord){
                $result = array_reduce($coord, function($x,$y) use($coord){
                        $coord_length = count($coord);
                        return [$x[0] + $y[0]/$coord_length,$x[1] + $y[1]/$coord_length];
                }, array(0,0));

                return $result;
        }
     
  
        $coord =array(array(1,1), array(6,4));
        print_r(getCentroid($coord));



?>
