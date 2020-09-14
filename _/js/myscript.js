$(function() {
  //make menus drop automatically
  $("ul.nav li.dropdown").hover(
    function() {
      $(".dropdown-menu", this).fadeIn();
    },
    function() {
      $(".dropdown-menu", this).fadeOut("fast");
    }
  ); //hoverpagination bootstrap 3 javascript P
}); //executed when jquery is loaded


//Pagination




