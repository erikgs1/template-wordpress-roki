<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/roki-logo-rodape.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                   <?php 
                        if( is_active_sidebar( 'footer' )){
                            dynamic_sidebar( 'footer' );
                        }
                    ?>
                    <?php 
                        if( is_active_sidebar( 'footer-2' )){
                            dynamic_sidebar( 'footer-2' );
                        }
                    ?>
                    <?php 
                        if( is_active_sidebar( 'footer-3' )){
                            dynamic_sidebar( 'footer-3' );
                        }
                    ?>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/dist/all.js?cb=1595453396632"></script>
<?php wp_footer(); ?>	
</body>
</html>