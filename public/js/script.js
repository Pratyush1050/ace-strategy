$(document).ready(function () {
  navInit();
  // FOOTER COPYRIGHT DATE 
  var currentYear = new Date().getFullYear();
  document.getElementById("copyright").textContent="Copyright  ©  "+currentYear+", ACE STRATEGY.   All rights Reserved."
});


function navInit() {
   
  var scrollTop = 0;
  jQuery(window).scroll(function(){
      scrollTop = jQuery(window).scrollTop();
      jQuery('.counter').html(scrollTop);
      if (scrollTop > 0) {
          jQuery('.navbar').addClass('nav-scroll');
      } else if (scrollTop <=0) {
          jQuery('.navbar').removeClass('nav-scroll');
      }
  });
  
}