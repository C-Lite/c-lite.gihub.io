$('#base-navbar .nav-item a.nav-link').click(function(){
    $('#base-navbar .nav-item a.nav-link.active').removeClass('active');
    $(this).addClass('active');
})




function scrollFunction(){
      if (document.body.scrollTop>100||document.documentElement.scrollTop>100){
        $('.container-fluid.navbar-container.fixed-top').addClass('c-shadow');
      }
      else{
        $('.container-fluid.navbar-container.fixed-top.c-shadow').removeClass('c-shadow');
      }     
}

