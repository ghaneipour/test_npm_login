
$("#sidebar_menu li").click(function(){
    var displ=$('.submenu',this).css('display');
    
    $(".submenu").slideUp(500);
    $(".fa-angle-down").removeClass("fa-angle-down");
    $(".fa-angle-down").addClass('fa-angle-left');
  
    if(displ=='none')
    {
        $(".submenu",this).slideDown(500);
        $(".fa-angle-left",this).addClass('fa-angle-down');
    }
    else{
        $(".submenu",this).slideUp(500);  
        $(".fa-angle-left",this).addClass('fa-angle-left');
    }
     //alert("hi");
  });
  
  var toggle=false;
  $("#sidebarToggle").click(function(){
    if($(".page_sidebar").hasClass("toggled"))
    {
    // alert("a");
        toggle=false;
        $('.page_sidebar').removeClass('toggled');
        $('.page_content').css('padding-right','235px');
    }
    else
    {
        toggle=true;
        $('.page_sidebar').removeClass('toggled');
        $('.page_sidebar').addClass('toggled'); 
        $('.page_content').css('padding-right','60px');
        $(".submenu").slideUp(500); 
        //alert("bbb");
    } 
  });
  
  
  