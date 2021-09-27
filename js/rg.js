    // Parallax layout click animation
    $(document).on("click", ".animateTo", function(e) {
    	e.preventDefault();
    	$("body, html").animate({
    		scrollTop: $($(this).attr('href')).offset().top - 0
    	}, 600);
    });

     document.addEventListener('DOMContentLoaded', function(){
        Typed.new('h1 span', {
          strings: ["responsive websites.", "intuitive user interfaces.", "accessible web applications.",],
          typeSpeed: 50
      });
  });