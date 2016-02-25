    <section id="bottom" class="footer-wiget-area">
        <div class="container">
            <div class="row">
               <?php dynamic_sidebar('bottom'); ?>
            </div>
        </div>
    </section>
    <?php global $themeum; ?>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                
                
                
                <div id="footer-links" class="secondary row">
                <div id="footer-links1" class="col-sm-4">
                <?php
                if(is_active_sidebar('footer-sidebar-1')){
                dynamic_sidebar('footer-sidebar-1');
                }
                ?>
                </div>
                <div id="footer-links2" class="col-sm-4">
                <?php
                if(is_active_sidebar('footer-sidebar-2')){
                dynamic_sidebar('footer-sidebar-2');
                }
                ?>
                </div>
                <div id="footer-links3" class="col-sm-4">
                <?php
                if(is_active_sidebar('footer-sidebar-3')){
                dynamic_sidebar('footer-sidebar-3');
                }
                ?>
                </div>
                </div>
                
                
                   <p><?php if(isset($themeum['footer_text_1'])) echo $themeum['footer_text_1']; ?></p>
                </div>
                <div class="col-sm-6">
                 <div id="footer-right pull-righ">
                <?php
                if(is_active_sidebar('footer-right')){
                dynamic_sidebar('footer-right');
                }
                ?>
                </div>
                
                    <p class="pull-right"><?php if(isset($themeum['footer_text_2'])) echo $themeum['footer_text_2']; ?></p>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php if(isset($themeum['before_body']))  echo $themeum['before_body']; ?>
<?php if(isset($themeum['google_analytics'])) echo $themeum['google_analytics'];?>

    <?php if(isset($themeum['custom_css'])): ?>
        <?php if(!empty($themeum['custom_css'])): ?>
            <style>
                <?php echo $themeum['custom_css']; ?>
            </style>
        <?php endif; ?>
    <?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>