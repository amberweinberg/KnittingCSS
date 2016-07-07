// Tabs

$('.tabs a').click(function(e) {
   e.preventDefault();
   
   $('.tabs a').parent().removeClass('active');
   $tabClass = $(this).parent().attr('class');
   $(this).parent().addClass('active');
   
   $('.tab').removeClass('active'); 
   $('#' + $tabClass).addClass('active');
});