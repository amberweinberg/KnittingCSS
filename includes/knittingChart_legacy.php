<?php
    
    // Create a knitting chart grid
    
    function knittingChartLegacy($rows,$columns,$color1,$color2,$color3) {
        
        // first give the chart a container
        
        $totalWidth = $columns * 25 + 1;

        echo '<div class="chart" style="width: '.$totalWidth.'px;">';
        
        // Create number of columns and rows
        
        $unitTotal = $rows * $columns;
        
        // Create rows and columns
        
        for($unitNumber = 1; $unitNumber <= $unitTotal; $unitNumber++ ) {
            
            // If active block, give it a color class
               
            if (in_array($unitNumber, $color1)) {      
                $unit = '<span class="unit color1"></span>';
            } elseif (in_array($unitNumber, $color2)) {      
               $unit = '<span class="unit color2"></span>';
            } elseif (in_array($unitNumber, $color3)) {      
                $unit = '<span class="unit color3"></span>';
            } else {
                $unit = '<span class="unit"></span>';
            }
            
            echo $unit;
        }
                    
        // close chart container
        
        echo '</div>';
        
    }
    
?>