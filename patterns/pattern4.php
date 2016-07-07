<?php
    
    $color1 = array_merge(
                    
        // Row 1
        array(2,6,10),
        
        // Row 2
        range(12,22,2),
        
        // Row 3
        array(26,30),
        
        // Row 7
        array(72),
        
        // Row 8
        range(82,84),
        
        // Row 9
        array(94),
    
        // Row 15
        array(160),
        
        // Row 16
        range(170,172),
        
        // Row 17
        array(182),
        
        // Row 21
        array(224,228),
        
        // Row 22
        range(232,242,2),
        
        // Row 23
        array(244,248,252)
    );
    
    $color2 = array_merge(
        
        //Row 4
        array(34,36,42,44),
        
        // Row 5 
        array(46,54),
        
        // Row 6
        array(56,58,64,66),
        
        // Row 10
        array(100,102,105,108,110),
        
        // Row 11
        array(112),range(115,117),array(120),
        
        // Row 12
        array(125,126,128,129),
        
        // Row 13
        array(134),range(137,139),array(142),
        
        // Row 14
        array(144,146,149,152,154),
        
        // Row 18
        array(188,190,196,198),
        
        // Row 19
        array(200,208),
        
        // Row 20
        array(210,212,218,220)
        
    );
    
    $color3 = array(NULL);

    knittingChartLegacy(23,11,$color1,$color2,$color3);
?>