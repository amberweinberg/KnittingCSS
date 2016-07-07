<?php
    
    // Create a knitting chart grid
    
    function knittingChart($columns,$pattern) {
        
        // first give the chart a container
        
        $totalWidth = $columns * 25;

        echo '<div class="chart" style="max-width: '.$totalWidth.'px;">';
        
        // Create responsive dimensions
        
        $unitWidth = 100 / $columns;
        $unitHeight = $unitWidth * 0.8;
        
        // Create units
        
        $unitNumber = 1;
        
        foreach($pattern as $row) {
                        
        	for($i = 1; $i < strlen($row); $i++) {
            	
            	// access char in a string using array-like notation
            	
        		$char = $row[$i];
        		if($char == ' ') {
        			$class = 'unit';
        		} else {
        			$class = "unit color{$char}";
        		}
        		echo "<span class='{$class}' style='width: $unitWidth%; padding-bottom: $unitHeight%;'></span>";
        		
        		$unitNumber++;
        	}
        }
                    
        // close chart container
                
        echo '</div>';
        
    }
    
?>