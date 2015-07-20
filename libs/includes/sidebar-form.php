<?php

$ct_form_active = get_post_meta(get_the_ID(),'ct-form-active',true);
if($ct_form_active && $ct_form_active == '1') :

$ct_form_text = get_post_meta(get_the_ID(),'ct-form-text',true);
$ct_form_receiver = get_post_meta(get_the_ID(),'ct-form-receiver',true);
if($ct_form_receiver == ''){
    $footer_options = get_option('footer_options');
    $ct_form_receiver = $footer_options['email'];
}
?>
<div id="sidebar-form">
    <form method="POST" class="ct-form" id="ct-form-<?php the_ID(); ?>" action="<?php echo get_template_directory_uri() ?>/ajax/form.php">
        <?php wp_nonce_field('smamo_nonce_this','nonce_form'); ?>
        <input type="hidden" name="locale" value="<?php echo get_locale(); ?>"/>
        <input type="hidden" name="post_id" value="<?php the_ID(); ?>"/>
        <input type="hidden" name="email_rec" value="<?php echo $ct_form_receiver ?>"/>
        <div>
            <?php echo apply_filters('the_content',$ct_form_text); ?>
        </div>
        <div>
            <label for="navn"><?php echo smamo_lang('Dit navn','Your name'); ?></label>
            <input name="navn" placeholder="Peter Jensen"/>
        </div>

        <div>
            <label for="email"><?php echo smamo_lang('Din e-mail','Your e-mail'); ?></label>
            <input name="email" placeholder="peter@jensen.dk"/>
        </div>

        <div>
            <label for="telefon"><?php echo smamo_lang('Dit telefonnummer','Your phone number'); ?></label>
            <input name="telefon" placeholder="88 88 88 88"/>
        </div>

        <div>
            <label for="kommentar"><?php echo smamo_lang('Tilføj kommentar','Add comment'); ?></label>
            <textarea name="kommentar" placeholder="Peter Jensen"></textarea>
        </div>
        <div class="g-recaptcha" data-sitekey="6LdKBQoTAAAAAMaqbU4Chf4FF6_ECAzU5hc68tbH"></div>
        <a href="#" title="indsend">Send</a>

    </form>
</div>


<?php endif; ?>