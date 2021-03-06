<footer id="footer">
    <div class="container">
        <div class="row top">

        <!-- dessa tre dynamic_sidebars hämtar widgetar -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <?php dynamic_sidebar('kortOmOssWidget'); ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <?php dynamic_sidebar('kontaktWidget'); ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <ul class="social">
                    <?php dynamic_sidebar('socialWidget'); ?>
                </ul>
                
            </div>
        </div>
        <div class="row bottom">
            <div class="col-xs-12">
                <p>Copyright &copy; Grupp X, 2016</p>
            </div>
        </div>
    </div>
</footer>

</div>

<!-- Hämtar javascript-fil -->
<script src="<?php echo get_template_directory_uri() . './js/script.js'; ?>"></script>
<?php wp_footer(); ?> <!-- skriver ut script/data -->
</body>

</html>