<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#ba4547" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ba4547">
    <title>Instituto Roki</title>
    <link rel="stylesheet" type="text/css" href="http://agenciacardeal.com.br/roki-assets/app/responsive-menu/css/icons.css" />
	<link rel="stylesheet" type="text/css" href="http://agenciacardeal.com.br/roki-assets/app/responsive-menu/fontawesome-free-5.14.0-web/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="http://agenciacardeal.com.br/roki-assets/app/responsive-menu/css/component.css" />
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="http://agenciacardeal.com.br/roki-assets/app/responsive-menu/js/modernizr.custom.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <section  class="menu container">
            <div class="row ">
                <div class="col-md-4">
                    <div class="logo">
						<?php the_custom_logo(); ?>
						<div class="menu-hamburger float-right d-sm-none  d-md-none d-lg-none d-xl-none">                            
                            <svg class="menu-act ham hamRotate ham1" viewBox="0 0 100 100" width="80">
                                <path
                                      class="line top"
                                      d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                                <path
                                      class="line middle"
                                      d="m 30,50 h 40" />
                                <path
                                      class="line bottom"
                                      d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
                              </svg>                              
                        </div>
                        
                        <!-- <div class="menu-responsive-trigger menu-responsive-trigger2"></div> -->
                    </div>
                    
                </div>
                <div  class="col-md-8">
                    <div class="main-menu">
                        
                        <div class="redes-sociais-menu">
                            <?php 
                                if( is_active_sidebar( 'social-header' )){
                                    dynamic_sidebar( 'social-header' );
                                }
                            ?>
                        </div>
                            <div class="ul a-dkvine"  >
                                <?php 
                                    wp_nav_menu( 
                                        array( 
                                            'theme_location' => 'my_main_menu' 
                                            ) 
                                    ); 
                                ?>
                            </div>
                           
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!-- menu mobile -->
	<!-- Push Wrapper -->
			<div class="mp-pusher" id="mp-pusher">

                
                <nav id="mp-menu" class="mp-menu">
                
                    <div class="mp-level">
                    
                        <ul>
                            <li class="icon icon-arrow-right">								
                                <a href="http://agenciacardeal.com.br/rokiteste/nossa-historia/">Instituto Roki <i class="fas fa-arrow-right"></i></a>
                                <div class="mp-level">									
                                    <a class="mp-back" href="#"><i class="fas fa-arrow-left"></i> voltar </a>
                                    <ul>
                                        <li>
                                            <a  href="http://agenciacardeal.com.br/rokiteste/nossa-historia/">Nossa história</a>
                                            <a  href="http://agenciacardeal.com.br/rokiteste/fundadoras/">Fundadoras</a>										
                                        </li>	
                                    </ul>
                                </div>
                            </li>
                            <li class="icon icon-arrow-right">
                                <a href="http://agenciacardeal.com.br/rokiteste/sobre-a-sindrome/">Síndrome de Rokitansky <i class="fas fa-arrow-right"></i></a>
                                <div class="mp-level">
                                    
                                    <a class="mp-back" href="#"><i class="fas fa-arrow-left"></i> voltar</a>
                                    <ul>
                                        <li><a href="http://agenciacardeal.com.br/rokiteste/sobre-a-sindrome/">Sobre a Síndrome</a></li>
                                        <li><a href="http://agenciacardeal.com.br/rokiteste/tratamentos/">Tratamentos</a></li>
                                        <li><a href="http://agenciacardeal.com.br/rokiteste/vida-sexual-e-maternidade/">Vida sexual e maternidade</a></li>
                                        <li><a href="http://agenciacardeal.com.br/rokiteste/eventos/">Eventos</a></li> 
                                        <li><a href="http://agenciacardeal.com.br/rokiteste/artigos/">Artigos</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="icon icon-arrow-right">
                                <a href="http://agenciacardeal.com.br/rokiteste/para-mulheres/">Mulheres <i class="fas fa-arrow-right"></i></a>
                                <div class="mp-level">
                                    
                                    <a class="mp-back" href="#"><i class="fas fa-arrow-left"></i> voltar </a>
                                    <ul>
                                        <li><a href="http://agenciacardeal.com.br/rokiteste/para-mulheres/">Para Mulheres</a></li>
                                        <li><a href="http://agenciacardeal.com.br/rokiteste/guia-para-mulheres/">Guia</a></li>
                                        <li><a href="http://agenciacardeal.com.br/rokiteste/relatos-mulheres/">Relatos</a></li>
                                        <li><a href="http://agenciacardeal.com.br/rokiteste/para-saber-mais-mulheres/">Para saber mais</a></li>                                      
                                    </ul>
                                </div>
                            </li>
                            <li class="icon icon-arrow-right">
                                <a  href="http://agenciacardeal.com.br/rokiteste/para-familiares/">Familiares <i class="fas fa-arrow-right"></i></a>
                                <div class="mp-level">
                                    
                                    <a class="mp-back" href="#"><i class="fas fa-arrow-left"></i> voltar </a>
                                    <ul>
                                        <li><a href="http://agenciacardeal.com.br/rokiteste/para-familiares/">Para Familiares</a></li>
                                        <li><a href="http://agenciacardeal.com.br/rokiteste/guia-para-familiares/">Guia</a></li>
                                        <li><a href="http://agenciacardeal.com.br/rokiteste/relatos-familiares/">Relatos</a></li>
                                        <li><a href="http://agenciacardeal.com.br/rokiteste/para-saber-mais-familiares/">Para saber mais</a></li>                                      
                                    </ul>
                                
                                </div>
                            </li>
                            <li class="icon icon-arrow-right">
                                <a href="http://agenciacardeal.com.br/rokiteste/para-profissionais-da-saude/">Profissionais de Saúde <i class="fas fa-arrow-right"></i></a>
                                <div class="mp-level">
                                    <a class="mp-back" href="#"><i class="fas fa-arrow-left"></i> voltar </a>
                                    <ul>
                                        <li><a href="http://agenciacardeal.com.br/rokiteste/para-profissionais-da-saude/">Para profissionais de saúde</a></li>
                                        <li><a href="http://agenciacardeal.com.br/rokiteste/guia-para-profissionais-da-saude/">Guia</a></li>
                                        <li><a href="http://agenciacardeal.com.br/rokiteste/instituicoes-e-profissionais-parceiros/">Instituições e profissionais</a></li>
                                                                        
                                    </ul>
                                </div>
                            </li>

                            <li><a href="http://agenciacardeal.com.br/rokiteste/fale-conosco/">Fale Conosco</a></li>
                        </ul>
                            
                    </div>
                </nav>	
            </div>
                <!-- /menu mobile -->