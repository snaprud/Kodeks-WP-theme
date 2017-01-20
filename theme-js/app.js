$(document).ready(function() {
    $( '#main > .flexslider' ).insertBefore('#primary');  
    $( '.type-ansatte header > img' ).prependTo( $(this).siblings('a') );
});
    

$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: false,
  });
});