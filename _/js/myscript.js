$(function() {
  //make menus drop automatically
  $("ul.nav li.dropdown").hover(
    function() {
      $(".dropdown-menu", this).fadeIn();
    },
    function() {
      $(".dropdown-menu", this).fadeOut("fast");
    }
  ); //hover
}); //executed when jquery is loaded



