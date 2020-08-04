<?php 

/*

Template Name: Contatos

*/

?>

<?php get_header(); ?>
<?php 
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    $thumb_url = $thumb_url_array[0];
?>
<main class="main-background fale-conosco" style="background-image:url(<?php echo $thumb_url ?>)">
        <div class="container"> 
            <div class="row">
                <!-- Espaço em branco background -->
                <div class=" col-md-4">
                    <?php 
                        $whatsapp = get_field('whatsapp');
                        $whatsappLink = get_field('whatsapp_link');
                        $facebook2 = get_field('facebook_name');
                        $facebookLink = get_field('facebook_link');
                        $instagram = get_field('instagram');
                        $instagramLink = get_field('instagram_link');
                        $email = get_field('email');
                        $emailLink = get_field('email_link');

                    ?>
                    <ul class="ul-aside-contato">
                        <li>
                            <h4 class="head-4-5 txtwhite">Nossos contatos</h4>
                        </li>
                        <li>
                            <a target="_blank"  href="<?php echo $whatsappLink ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-whatsapp.jpg" alt="" class="mr-2"><?php echo $whatsapp ?></a>
                        </li>
                        <li>
                            <a target="_blank"  href="<?php echo $facebookLink ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-facebook.jpg" alt="" class="mr-2"><?php echo $facebook2 ?></a>
                        </li>
                        <li>
                            <a target="_blank"  href="<?php echo $instagramLink ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-instagram.jpg" alt="" class="mr-2"><?php echo $instagram ?></a>
                        </li>
                        <li>
                            <a target="_blank"  href="mailto:<?php echo $emailLink ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-email.jpg" alt="" class="mr-2"><?php echo $email ?></a>
                        </li>
                    </ul>
                </div>
                <!-- // Espaço em branco background -->
                <!-- Conteudo -->
                <div class=" col-md-8 form">
                    <div>
                        <div class="page-title">
                            <h1>Fale Conosco</h1>
                        </div>    
                        <p> 
                            O Instituto Roki possui diversos canais de comunicação para conversar, compartilhar notícias e<br>
                            informações. Acompanhem nossas redes sociais, indiquem para suas amigas e seus familiares.<br>
                            Nosso compromisso é ajudar e acolher vocês! 
                        </p>
                    </div>
                    <div class=" main-content-text mt-5">
                        <h4>Mande uma mensagem para a gente!</h4>
                        <div class="col-md-8 p-0 pt-2" >
                            <form>
                                <?php echo do_shortcode('[ninja_form id="1"]'); ?>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Conteudo -->
            </div>
        </div>   
    </main>

<?php get_footer(); ?>