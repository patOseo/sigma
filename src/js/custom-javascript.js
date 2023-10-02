// Custom js goes here.

jQuery(function($) {

    // Scrollspy for Multiple Sections block
    $('body').scrollspy({ target: '#tableContents', offset: 200 });

    // toTopButton
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('#toTopButton').removeClass('hidden');
        } else {
            $('#toTopButton').addClass('hidden');
        }
    });
    $('#toTopButton').click(function(event) {
        event.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    
});