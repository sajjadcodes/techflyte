

<div class="search-bar">
    <button class="search-btn" type="button"><img src="<?= get_template_directory_uri(); ?>/assets/images/search-btn.png" alt=""></button>
    <div class="search-box">
        <form class="d-flex" action="/" method ="get">
            <input type="search" name="s" placeholder="Search Here..." value="<?php the_search_query();?>">
            <button type="submit">Submit</button>
        </form>
    </div>
</div>




