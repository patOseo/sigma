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
    
    // Menu Dropdowns
    var svgOpen = '<div class="dropdown-trigger p-1 position-absolute top-50 end-0 translate-middle d-xl-none text-center lh-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#ffffff" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg></div>';
    $('#main-nav .menu-item.dropdown').each(function() { // Appends the dropdown arrow
        $(this).append(svgOpen);
    });
    $('#main-nav .menu-item .dropdown-trigger').click(function() { // Toggles the dropdown
        $(this).siblings('.dropdown-menu').toggleClass('show');
    });

    // Search Overlay
    $('.search-button').click(function() {
        $('.search-overlay').toggleClass('in-view');
        $('.search-overlay .search-field').focus();
    });
    $('.search-close').click(function() {
        if($('.search-overlay').hasClass('in-view')) {
            $('.search-overlay').removeClass('in-view');
        }
    });

    // Blog Filtering
    var currentPage = 1;
    function filterBlogs(e) {
        e.preventDefault();
        
        var cat = $(this).data('cat');
        $.ajax({
            url: '/wp-admin/admin-ajax.php',
            type: 'POST',
            data: {
                action: 'filter_blogs',
                page: currentPage,
                category: cat
            },
            beforeSend: function() {
                $('#blogFeed').removeClass('fade-in');
                $('#blogFeed').html('<div class="my-6 py-6 text-center"><div class="my-lg-6 spinner-grow text-primary text-center mx-auto" role="status"><span class="visually-hidden">Loading...</span></div></div>');
            },

            success: function(response) {
                $('#blogFeed').html(response);
                $('#blogFeed').addClass('fade-in');
            }
        });
    }

    $('.category-link').click(function(){
        $('.category-link').removeClass('current-cat');
        $(this).addClass('current-cat');
    });
    $('.category-link').click(filterBlogs);

    // AJAX Pagination handling
    $(document).on('click', '.blog-feed-block .pagination a', function(e) {
        e.preventDefault();
        var href = $(this).attr('href');
        currentPage = $(this).attr('data-page'); // Update the page number from pagination links
        // Scroll to top of Resource list
        $('html, body').animate({
            scrollTop: $('#blogFeed').offset().top - 200
        }, 200);
        filterBlogs();
    });

});