<div class="search-overlay">
    <div class="search-close position-absolute end-0 top-0 p-4">
        <button class="btn btn-link text-white">
            <?php include( get_stylesheet_directory() . '/images/icons/icon-x.svg' ); ?>
        </button>
    </div>
    <div class="position-absolute top-50 start-50 translate-middle p-5 w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</div>