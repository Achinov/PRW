<?php
    $x = readline();
    
    while ($x != 0)
        {
          $s = 0;
          if ($x % 2 == 0) 
          {
                for ($cont = 0; $cont < 5; $cont++) {
                    $s += $x;
                    $x += 2;
            }
        } else {
            $x++;
            for ($i = 0; $i < 5; $i++) {
                $s += $x;
                $x += 2;
            }
        }
            echo "$s\n";
            $x = readline();
        }



?>