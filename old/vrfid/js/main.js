// VRFID JS 

// Expandable FAQ Box
$(function($) {
    $('.boxExpand').find('.panelVisible').click(function() { // Main Container  
        $(this).toggleClass("active").next().slideToggle('fast'); // Expand or collapse this panel        
        $(".panelHidden").not($(this).next(this)).slideUp('fast').prev().removeClass('active');
    });
});

// Sandwich Menu Container/Functionality
$(function($) {
    $('.toggle-panel').click(function() {
        $("#panelToggle").toggleClass("navOpen");
    });
});

// Close Sandwich Menu on menu item click (For Animation)
$(function($) {
    $('.mobNav a').click(function() {
        $("#panelToggle").toggleClass("navOpen");
    });
});


// Parallax layout click animation
$(document).on("click", ".animateTo", function(e) {
    e.preventDefault();
    $("body, html").animate({
        scrollTop: $($(this).attr('href')).offset().top - 80
    }, 600);
});

// Login Modal
$(document).ready(function($) {
    $('.open-popup-link').magnificPopup({
        type: 'inline'
    });


    // Tab Widget
    $('.tabWidget li').click(function() {
        var tab_id = $(this).attr('data-tab');

        $(this).siblings().removeClass('current');
        // $('.tab-content').removeClass('current');
        //console.log($(this).parent().siblings('.tab-content'));
        $(this).parent().siblings('.tab-content').removeClass('current');
        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    });
});