<form class="header-search-form hidden md:flex" role="search" method="get" id="searchform"
    action="<?php echo home_url('/') ?>">
    <label class="screen-reader-text" for="s">Поиск: </label>

    <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="поиск по товарам" />

    <button>
        <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/icon-search.svg" height="22" width="22"
            alt="search">
    </button>
</form>