<?php 

/*

Template Name: Home

*/

?>

<?php get_header(); ?>

<main class="home">
    <?php 
        $bannerImg = get_field('imagem_de_fundo_home');
        $fraseBanner = get_field('frase_banner_home');
        $fraseBannerDestaque = get_field('frase_banner_home_destaque');
    ?>
    <!-- div 1 - Background -->
    <div  class="main-background desktop">
        <img class="img-fluid" src="<?php echo $bannerImg; ?>" alt="">
        <div class="absolute-text">
            <div class="container">
                <div class="main-txt pt-5">
                    <p>
                        <?php echo $fraseBanner; ?>
                    </p>
                </div>
                <div class="main-title">
                    <h2>
                        <?php echo $fraseBannerDestaque; ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div  class="main-background mobile" style="background-image: url(<?php echo $bannerImg; ?>);">
        <img class="img-fluid" src="images/background-roki.jpg" alt="">
        <div>
            <div class="container">
                <div class="main-txt pt-5">
                    <p>
                        <?php echo $fraseBanner; ?>
                    </p>
                </div>
                <div class="main-title">
                    <h2>
                        <?php echo $fraseBannerDestaque; ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
        <!-- // div 1 - Background -->
    <?php
        $tituloDoAside = get_field('titulo_do_aside');
        $descricaoDoAside = get_field('descricao_do_aside');
    ?>
    <div>
        <div class="container"> 
            <div class="row">
                <div class=" col-md-4 p-0-620">
               
               
                <div class="main-aside mt-5">
                        <div class="aside-title paddingo-b-aside">
                            <h4 class="head-4-2 mt-0 mb-0">Conversas com<br> 
                                profissionais</h4>
                            <p>
                                Todo mês convidamos um profissional <br> 
                                para conversar sobre a jornada <br> 
                                Rokitansky. Acompanhe e assista pelo <br> 
                                instagram do Instituto Roki.
                            </p>
                        </div>
                      
                      
                            <?php 
                                $query = new WP_Query( array( 'post_type'       => 'evento',
                                'posts_per_page'  => 2,
                                'orderby'         => 'date',
                                'order'           => 'DESC' ) );
                            ?>


                            <div class="paddingo-b-aside">
                                <?php while( $query->have_posts() ) : $query->the_post(); ?>
                                <?php 
                                    $titulo = get_field('nome_do_evento');
                                    $entrevistado = get_field('entrevistado');
                                    $data = get_field('data');
                                    $profissao = get_field('profissao');
                                    $linkEvento = get_field('link_evento');
                                ?>  
                                <?php 
                                    if( have_rows('rede_social') ):
                                    while ( have_rows('rede_social') ) : the_row();
                                    $local = get_sub_field('local-1');
                                    $perfil = get_sub_field('perfil');
                                    $link = get_sub_field('link');
                                    endwhile;
                                     else :
                                    endif;
                                ?>                         
                                <a target="_blank"  href="<?php echo $linkEvento ?>" class="p-lt mb-0 mt-3 line-1-2">
                                 <?php echo $titulo ?>
                                </a>
                                <h6 class="c-dkvine mb-5">
                                    Com <?php echo $entrevistado?><br>
                                    <?php echo $profissao ?>
                                    
                                </h6>


                                <?php endwhile; wp_reset_postdata(); ?>	
                            </div>
                        <!-- /paddingo-b-aside -->
        
                    </div>
            
                    
                </div>
                <!-- /main-aside -->

                <?php 
                    $mulheresTitulo1 = get_field('home_para_mulheres_titulo_1');
                    $mulheresDescricao1 = get_field('home_para_mulheres_descricao_1');
                    
                    $mulheresTitulo2 = get_field('home_para_mulheres_titulo_2');
                    $mulheresDescricao2 = get_field('home_para_mulheres_descricao_2');
                    
                    $mulheresTitulo3 = get_field('home_para_mulheres_titulo_3');
                    $mulheresDescricao3 = get_field('home_para_mulheres_descricao_3');
                ?>
                <div class="col-md-8 main-content" >
                    <div class="main-content-text main-content-mancha-1">
                        <span class="dn620"></span>
                        <h4 class="head-4-4 mt-3"><?php echo $mulheresTitulo1 ?></h4>
                        <p>
                            <?php echo $mulheresDescricao1 ?>
                        </p>
                    </div>
                    <div class=" main-content-text main-content-mancha-2">
                        <span class="dn620"></span>
                        <h4 class="head-4-4"><?php echo $mulheresTitulo2 ?></h4>
                        <p>
                            <?php echo $mulheresDescricao2 ?>
                        </p>

                    </div>
                    <div  class="main-content-text main-content-mancha-3">
                        <span class="dn620"></span>
                        <h4 class="head-4-4"><?php echo $mulheresTitulo3 ?></h4>
                        <p class="mb-0"> <!-- Margin Bottom Zero-->
                            <?php echo $mulheresDescricao3 ?>
                        </p>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</main>


<?php get_footer(); ?>