<?php
    
    $color1 = array_merge(
                    
        // Row 1
        range(1,12),
        
        // Row 3
        range(26,30),range(32,36),
        
        // Row 4
        range(39,41),array(43),range(45,47),
        
        // Row 5 
        array(52),range(54,56),array(58),
        
        // Row 8
        array(86,87,89,90,92,93,95,96),
        
        // Row 11
        array(124),range(126,128),array(130),
        
        // Row 12
        range(135,137),array(139),range(141,143),
        
        // Row 13
        range(146,150),range(152,156),
        
        // Row 15
        range(169,180)
        
    );
    
    $color2 = array_merge(
        
        // Row 3
        array(25),array(31),
        
        // Row 4
        array(37,38,42,44,48),
        
        // Row 5
        range(49,51),array(53,57,59,60),
        
        // Row 11
        range(121,123),array(125,129,131,132),
        
        // Row 12
        array(133,134,138,140,144),
        
        // Row 13
        array(145,151)
        
    );
    
    $color3 = array_merge(
        
        // Row 6
        array(61,62,64,70,72),
        
        // Row 7
        array(73),range(75,77),range(81,83),
        
        // Row 9
        array(97),range(99,101),range(105,107),
        
        // Row 10
        array(109,110,112,118,120)
        
    );

    knittingChartLegacy(15,12,$color1,$color2,$color3);
?>