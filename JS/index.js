
$('.tabheading li').click(function () {
       var tabid = $(this).attr("rel");
       $(this).parents('.tabcontainer').find('.active').removeClass('active');
       $('.tabbody').hide();
       $('#' + tabid).show();
       $(this).addClass('active');

       return false;
   });
