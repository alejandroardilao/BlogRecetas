<footer class="page-footer blue-custom">
    <div id="pie">    
        <h4><?php echo 'SrUrRe'; ?></h4>
        <p><?php echo 'Comparte tus recetas con todos tus amigos en la WEB'; ?></p>
    </div>
    <div class="footer-copyright blue-custom">
        <div class="container">
            <p>
                <span class="text">
                    <?php if ( is_active_sidebar( 'footer-profile-widgets' ) ) : ?>
                        <a href="#footerProfile"><?php _e('about us', 'blog-recetas'); ?></a>
                    <?php endif; ?>
                    <?php echo esc_attr(get_theme_mod('copyright_text', '& copy 2019;  Todos los derechos reservados - Alejandro Ardila')); ?>
                </span>
            </p>
        </div>
    </div>

</footer>
<a class="btn-floating btn-large grey pulse hide" id="scroll_to_top" href="#!"><i class="material-icons">expand_less</i></a>
<?php wp_footer(); ?>
</body>
</html>