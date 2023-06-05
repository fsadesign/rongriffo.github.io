  // Animate to results when filter done button is clicked
  $(document).on("click", ".animateTo", function(e) {
    e.preventDefault();
    $("body, html").animate({
      scrollTop: $($(this).attr('href')).offset().top - 0
    }, 600);
  });


     document.addEventListener('DOMContentLoaded', function(){
        Typed.new('h1 span', {
          strings: ["responsive websites.", "engaging presentations.", "interactive articles.", "user interfaces.",],
          typeSpeed: 50
      });
  });

