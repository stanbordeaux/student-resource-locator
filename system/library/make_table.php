<?php

/**
 * @author Stan Bordeaux
 * @copyright 2011
 */

class Make_table {
    
      
    public function render($heads, $data, $extra = '')
    {
        $c = true;
        echo "<table class='$extra'>";
        echo "<tr>";
        if (!empty($heads[0]))
        {
            foreach ($heads as $head)
            {
               echo '<th>' .$head. '</th>';
            }
            
            echo '</tr>';
            foreach ($data as $key => $value)
            {
                echo '<tr'.(($c = !$c)?' class="odd"':' class="even"').'>';
                foreach ($value as $val)
                {
                    echo '<td>'.ucfirst(strtolower($val)).'</td>';
                }
            }
             echo '</tr>';
        }
        echo '</table>';
    }
}