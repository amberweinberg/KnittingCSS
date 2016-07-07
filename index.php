<?php 
    include_once('includes/header.php');
    include_once('includes/knittingChart_legacy.php');
    include_once('includes/knittingChart.php');
?>

    <!--Intro Code-->

    <section class="intro">
        <div class="container">
            
            <ul class="tabs">
                <li class="tab-intro active"><a href="#">Intro</a></li>
                <li class="tab-code"><a href="#">The Code</a></li>
            </ul>
            
            <div id="tab-intro" class="tab active">
                
                <h2>What is Fair Isle?</h2>
                <p>Fair Isle (named after a tiny island off Scotland) is a technique of knitting motifs with multiple colors, usually from a chart. While there can be as little as 2 colors, or as much as six, the general rule of fair isle knitting is that there are only two colors per row. The style gained popularity when <strong>Edward VIII</strong> was seen in public with his (now famous) sweater vests. You can read more about the technique on <a href="https://en.wikipedia.org/wiki/Fair_Isle_(technique)" target="_blank">Wikipedia</a>.</p>
                
                <h2>What is this project?</h2>
                <p><span class="logo"><span>Knitting</span>CSS</span> is a collection of modern and vintage fair isle charts, reproduced entirely in code. PHP creates the actual charts and CSS colors them. My goal is to charts with different sizes and multiple colors, and ultimately to get up to charts with multiple motif blocks. This will probably require rewriting the code that creates this chart several times. In fact, I rewrote the PHP twice just for the first chart. Each rewrite aims for better code - less code, faster code and cleaner code.
            </div>
            
            <div id="tab-code" class="tab">
                <h2>The Chart Generator</h2>
                
                <h3>Version 1</h3>
                <p>Version 1 of the codebase used PHP to create the chart and CSS nth-child selectors to select each unit that needed to be colored in. I made it to about Row 6 (of 32 for the first pattern) before realizing this was a totally unfeasible way of going about this.</p>
                
                <h3>Version 2</h3>
                <p>Version 2 got a bit closer to what I was looking for, and instead used an array to apply a color class to the necessary units. However, this too was way too cumbersome and counting 1,024 units was taking was too long. This was also about the time I scrapped the 'responsive' version of the charts (for now).
                    
                <h3>Version 3</h3>
                <p>Version 3 is now still using arrays, but merging basic arrays with ranges to get the pattern charted faster. I also came up with the idea to display the unit count inside the box and overlaying the pattern image behind the coded grid, to make for faster charting. I was able to complete the first chart (with 1,024 units) in less than hour, while on the phone.</p>
                
                <h3>Version 4 (Charts 5 & Up)</h3>
                <p>Version 4 was created with the help of <a href="https://twitter.com/solarise_webdev/" target="_blank">Robin Metcalfe</a>. Instead of multiple arrays and ranges, it now takes numbers and spaces and uses each character as a unit. This sped up time creating patterns and uses a lot less code. The code now even resembles the outputted grid!</p>
                    
                <h3>Version 5 (Charts 5 & Up)</h3>
                <p>Inspired by <a href="http://www.timwestdesigns.com/" target="_blank">Tim West</a>'s sample code, I added responsive widths! The charts now scale down to mobile, instead of scrolling horizontally.</p>
                  
                <?php highlight_file('includes/knittingChart.php');?>
                <?php highlight_file('patterns/pattern6.php');?>
            </div>
            
        </div>
    </section>
    
    <!--Pattern 30-->
    
    <!--Pattern 29-->
    
    <!--Pattern 28-->
    
    <!--Pattern 27-->
    
    <!--Pattern 26-->
    
    <section class="pattern pattern26">
        <div class="container">
            
            <div class="meta">
                <span class="date">26</span>
                <h2><a href="http://www.ravelry.com/patterns/library/heijastuksia" target="_blank">Heijastuksia</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/marja-terttu-hirttio" target="_blank">Marja-Terttu Hirttiö</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern26.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 25-->
    
    <section class="pattern pattern25">
        <div class="container">
            
            <div class="meta">
                <span class="date">25</span>
                <h2><a href="http://www.ravelry.com/patterns/library/katies-mittens" target="_blank">Katies Mittens</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/kristin-lamm" target="_blank">Kristin Lamm</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern25.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 24-->
    
    <section class="pattern pattern24">
        <div class="container">
            
            <div class="meta">
                <span class="date">24</span>
                <h2><a href="http://www.ravelry.com/patterns/library/red-dragon-chart" target="_blank">Red Dragon Chart</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/sandra-jager" target="_blank">Sandra Jäger</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern24.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 23-->
    
    <section class="pattern pattern23">
        <div class="container">
            
            <div class="meta">
                <span class="date">23</span>
                <h2><a href="http://www.ravelry.com/patterns/library/endpaper-mitts" target="_blank">Endpaper Mitts</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/eunny-jang" target="_blank">Eunny Jang</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern23.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 22-->
    
    <section class="pattern pattern22">
        <div class="container">
            
            <div class="meta">
                <span class="date">22</span>
                <h2><a href="http://twostrands.com/2008/09/11/chrysanthemum-mittens-the-pattern/" target="_blank">Chrysanthemum Mittens</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/mary-ann-stephens" target="_blank">Mary Ann Stephens</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern22.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 21-->
    
    <section class="pattern pattern21">
        <div class="container">
            
            <div class="meta">
                <span class="date">21</span>
                <h2><a href="http://www.ravelry.com/patterns/library/fair-isle-mitts-4" target="_blank">Fair Isle Mitts</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/clare-hutchinson" target="_blank">Clare Hutchinson</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern21.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 20-->
    
    <section class="pattern pattern20">
        <div class="container">
            
            <div class="meta">
                <span class="date">20</span>
                <h2><a href="http://www.lionbrand.com/patterns/70556AD.html" target="_blank">Fair Isle Capelet</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/lion-brand-yarn" target="_blank">Lion Brand Yarn</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern20.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 19-->
    
    <section class="pattern pattern19">
        <div class="container">
            
            <div class="meta">
                <span class="date">19</span>
                <h2><a href="http://www.ravelry.com/patterns/library/summer-on-hitland--itse-zomer" target="_blank">Summer on Hitland</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/erry-pieters-korteweg" target="_blank">Erry Pieters-Korteweg</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern19.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 18-->
    
    <section class="pattern pattern18">
        <div class="container">
            
            <div class="meta">
                <span class="date">18</span>
                <h2><a href="http://www.letsknit.co.uk/free-knitting-patterns/heart_is_heart/" target="_blank">Heart is Heart</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/sian-brown" target="_blank">Sian Brown</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern18.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 17-->
    
    <section class="pattern pattern17">
        <div class="container">
            
            <div class="meta">
                <span class="date">17</span>
                <h2><a href="http://www.ravelry.com/patterns/library/newfoundland-texting-mitts" target="_blank">Newfoundland Texting Mitts</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/spannytickle-studio" target="_blank">Spannytickle Studio</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern17.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 16-->
    
    <section class="pattern pattern16">
        <div class="container">
            
            <div class="meta">
                <span class="date">16</span>
                <h2><a href="http://www.ravelry.com/patterns/library/fireweeds" target="_blank">Fireweeds</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/yvette-noel-2" target="_blank">Yvette Noel</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern16.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 15-->
    
    <section class="pattern pattern15">
        <div class="container">
            
            <div class="meta">
                <span class="date">15</span>
                <h2><a href="http://www.ravelry.com/patterns/library/hermiones-scarf" target="_blank">Hermione's Scarf</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/freshisle-fibers" target="_blank">Freshisle Fibers</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern15.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 14-->
    
    <section class="pattern pattern14">
        <div class="container">
            
            <div class="meta">
                <span class="date">14</span>
                <h2><a href="http://www.ravelry.com/patterns/library/floral-fair-isle-gloves" target="_blank">Floral Fair Isle Gloves</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/carol-wassell" target="_blank">Carol Wassell</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern14.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 13-->
    
    <section class="pattern pattern13">
        <div class="container">
            
            <div class="meta">
                <span class="date">13</span>
                <h2><a href="http://www.ravelry.com/patterns/library/grannys-fair-isle-tea-cosy-large" target="_blank">Granny's Fair Isle Tea Cosy</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/ellen-susanne" target="_blank">Ellen Susanne</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern13.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 12-->
    
     <section class="pattern pattern12">
        <div class="container">
            
            <div class="meta">
                <span class="date">12</span>
                <h2><a href="http://www.ravelry.com/patterns/library/keys-and-crosses" target="_blank">Keys and Crosses</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/gcb-designs" target="_blank">GCB Designs</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern12.php'); ?>
            </div>
        
        </div>
     </section>
    
    <!--Pattern 11-->
    
     <section class="pattern pattern11">
        <div class="container">
            
            <div class="meta">
                <span class="date">11</span>
                <h2><a href="http://www.ravelry.com/patterns/library/camilla-2" target="_blank">Camilla</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/spillyjane" target="_blank">SpillyJane</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern11.php'); ?>
            </div>
        
        </div>
     </section>
    
    <!--Pattern 10-->
    
     <section class="pattern pattern10">
        <div class="container">
            
            <div class="meta">
                <span class="date">10</span>
                <h2><a href="http://www.ravelry.com/patterns/library/balls-up-" target="_blank">Balls Up!</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/general-hogbuffer" target="_blank">General Hogbuffer</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern10.php'); ?>
            </div>
        
        </div>
     </section>
    
    <!--Pattern 9-->
    
     <section class="pattern pattern9">
        <div class="container">
            
            <div class="meta">
                <span class="date">9</span>
                <h2><a href="http://www.ravelry.com/patterns/library/sheep-in-the-meadow-pillow-cover" target="_blank">Sheep in the Meadow Pillow Cover</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/carol-quinn" target="_blank">Carol Quinn</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern9.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 8-->
    
     <section class="pattern pattern8">
        <div class="container">
            
            <div class="meta">
                <span class="date">8</span>
                <h2><a href="http://www.ravelry.com/patterns/library/fair-isle-sampler-kal" target="_blank">Fair Isle Sampler</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/wieke-van-keulen" target="_blank">Wieke van Keulen</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern8.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 7-->
    
     <section class="pattern pattern7">
        <div class="container">
            
            <div class="meta">
                <span class="date">7</span>
                <h2><a href="http://www.ravelry.com/patterns/library/fair-isle-cuffs" target="_blank">Fair Isle Cuffs</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/julie-williams-2" target="_blank">Julie Williams</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern7.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 6-->
    
     <section class="pattern pattern6">
        <div class="container">
            
            <div class="meta">
                <span class="date">6</span>
                <h2><a href="http://www.ravelry.com/patterns/library/norwegian-fairisle-snowflake-hat" target="_blank">Norwegian Fair Isle Snowflake Hat</a></h2>
                <p class="pattern-credits">by <a href="http://www.ravelry.com/designers/tim-doran" target="_blank">Tim Doran</a></p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern6.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 5-->
    
     <section class="pattern pattern5">
        <div class="container">
            
            <div class="meta">
                <span class="date">5</span>
                <h2><a href="http://fairmountfibers.com/patterns/schuyler-ac1-3" target="_blank">Schuyler</a></h2>
                <p class="pattern-credits">by Jennifer Burke</p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern5.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 4-->
        
    <section class="pattern pattern4">
        <div class="container">
            
            <div class="meta">
                <span class="date">4</span>
                <h2><a href="http://www.lionbrand.com/patterns/70533AD.html?ss=" target="_blank">Fair Isle Scarf</a></h2>
                <p class="pattern-credits">by Lion Brand</p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern4.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 3-->
        
    <section class="pattern pattern3">
        <div class="container">
            
            <div class="meta">
                <span class="date">3</span>
                <h2><a href="http://www.knitting-and.com/knitting/patterns/hats/ladys-fairisle-hat.htm" target="_blank">Lady's Fair Isle Hat</a></h2>
                <p class="pattern-credits">by Sarah Bradberry</p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern3.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 2-->
        
    <section class="pattern pattern2">
        <div class="container">
            
            <div class="meta">
                <span class="date">2</span>
                <h2><a href="http://www.tricksyknitter.com/view-a-color-chart/?wb_id=39000" target="_blank">Fair Isle Scarf Pattern</a></h2>
                <p class="pattern-credits">by Tricksy Knitter</p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern2.php'); ?>
            </div>
        
        </div>
    </section>
    
    <!--Pattern 1-->
        
    <section class="pattern pattern1">
        <div class="container">
            
            <div class="meta">
                <span class="date">1</span>
                <h2><a href="http://www.purlbee.com/2014/03/16/whits-knits-kids-fair-isle-vest/" target="_blank">Whits Knits Kids Fair Isle Vest</a></h2>
                <p class="pattern-credits">by The Purl Bee</p>
            </div>
            
            <div class="pattern-container">
                <?php include_once('patterns/pattern1.php'); ?>
            </div>
        
        </div>
    </section>
    
<?php include_once('includes/footer.php');?>