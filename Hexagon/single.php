<?php
if(have_posts()){

    the_post();

    rewind_posts();

    if('services' == get_post_type()){

        require_once(__DIR__.'/single-services.php');
        
    }else{

        require_once(__DIR__.'/single-blog.php');
    }


};