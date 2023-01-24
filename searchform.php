<form class="d-flex" role="search" method="get" class="searchform group" action="<?php echo home_url('/'); ?>">
    <input class="form-control me-2" type="search"  aria-label="Search" placeholder="<?php echo esc_attr_x('Encontre o que procura', 'placeholder'); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label'); ?>">
    <button class="btn btn-outline-success mdin-btn-outline-success" type="submit" >Procurar</button>
</form>