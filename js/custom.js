$(".services-menu").on("click", function(){	
$(".design-submenu,.industries-submenu").hide();
$(".services-submenu").toggle();
});
$(".design-menu").on("click", function(){	
$(".services-submenu,.industries-submenu").hide();
$(".design-submenu").toggle();
});
$(".industries-menu").on("click", function(){
$(".services-submenu,.design-submenu").hide();		
$(".industries-submenu").toggle();
});