$(document).ready(function(){
  // départ ed ma console
  console.log("Démarrage de ma console");

  $('.dropdown-toggle').dropdown();


  $('[data-toggle="popover"]').popover('show');

  $(function(){
            //Keep track of last scroll
            var lastScroll = 0;
            $(window).scroll(function(event){
                //Sets the current scroll position
                var st = $(this).scrollTop();
                console.log(st);
                //Determines up-or-down scrolling
                if (st == 0){
                  $(".footer").fadeIn( "slow" );
                }
                else{
                  $(".footer").fadeOut( "slow" );
                }
                //Updates scroll position
                lastScroll = st;
            });
          });

})// fin de document ready
