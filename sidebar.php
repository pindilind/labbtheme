<aside id="secondary" class="col-xs-12 col-md-3">
    <div id="sidebar">
        <ul>
            <li>
                <form id="searchform" class="searchform">
                    <?php get_search_form(); ?>
                </form>
            </li>
        </ul>
        <ul role="navigation">
            <li class="pagenav">
                
                <?php dynamic_sidebar('sidebarHome');?>
                
            </li>
            <li>
                
                    <?php dynamic_sidebar('arkivWidget');?>   
              
            </li>
            <li class="categories">
               
                <?php dynamic_sidebar('kategoriWidget');?>
               
            </li>
        </ul>
    </div>
</aside>
