<?php 

/*

Template Name: Manutenção

*/

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Roki</title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/manutencao/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/manutencao/css/responsive.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <style>
        
.shadow-modal{
    position: fixed;
    z-index: 4;
    background: #000000;;
    opacity: 0.5;
    height: 100vh;
    width: 100%;
    top: 0;
    left: 0;
}
.modal {
    width: 725px;
    padding: 40px 50px 45px 40px;
    background-color: #fff;
    margin: 150PX auto 0;
    display: block;
    position: absolute;
    z-index: 4;
    top: 0;
    left: 0;
    right: 0;
}
.modal p{
    margin: 0 0 10px 0;
    font-size: 18px;
}
.modal .close{
    position: absolute;
    right: 10px;
    top: 5px;
    color: #9b383e;
    cursor: pointer;
}
.modal .close:hover .modal{
    display: none;
}
.modal .logo-modal{
    position: absolute;
    right: 50px;
    bottom: 40px;
}
.responsive-modal {
    display: none;
}
@media (max-width: 768px){ 
    .modal{
        display: none;
    }
    .responsive-modal {
        max-width: 95%;
        padding: 40px 40px 45px 40px;
        background-color: #fff;
        display: block;
        z-index: 4;
        position: absolute;
        left: 0;
        right: 0;
        top: 10vh;
        margin: 0 auto;
    }
    .responsive-modal .logo-modal{
        text-align:center;
        margin-top: 50px;
    }
    .responsive-modal .close {
        position: absolute;
        right: 15px;
        top: 10px;
        color: #9b383e;
    }
    .responsive-modal p{
        margin: 0 0 10px 0;
        font-size: 14px;
    }
}
    </style>
</head>
<body style="background-image: url(http://institutoroki.com.br/wp-content/uploads/2020/07/background-roki.png);
background-repeat: no-repeat;
background-position: 50% 140px;
background-size: cover;
min-height: 600px">

    
<div class="shadow-modal close"></div>
    <header>
        <!-- responsive menu -->
        <div class="nav-responsive header ">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/manutencao/images/logo-roki.png" alt="">
            </div>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu">
                <ul>
                    <li><a href="<?php echo get_template_directory_uri(); ?>/manutencao/instituto_roki_ebook_portadoras.pdf" target="_blank">Mulheres portadoras</a> </li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>/manutencao/instituto_roki_ebook_familiares.pdf" target="_blank">Familiares</a> </li>
                    <li><a href="<?php echo get_template_directory_uri(); ?>/manutencao/instituto_roki_ebook_profissionais_saude.pdf" target="_blank">Profissionais de saúde</a> </li>
                </ul>
            </ul>
            <div class="socials">
                <ul>
                    <li>
                        <a href="https://wa.me/5511944990015" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/manutencao/images/whatsapp-logo.png" alt=""></a></li>
                    <li>
                        <a href="https://www.facebook.com/institutoroki/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/manutencao/images/facebook-logo.png" alt=""></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/institutoroki/?hl=pt-br" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/manutencao/images/instagram-logo.png" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //responsive menu -->
        <section  class="container menu-desktop">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/manutencao/images/logo-roki.png" alt="">
            </div>
                <nav class="nav">
                    <ul>
                        <li class="pipe"><a href="<?php echo get_template_directory_uri(); ?>/manutencao/guia-para-mulheres-instituto-roki.pdf" target="_blank">Mulheres portadoras</a> </li>
                        <li class="pipe"><a href="<?php echo get_template_directory_uri(); ?>/manutencao/guia-para-familiares-instituto-roki.pdf" target="_blank">Familiares</a> </li>
                        <li><a href="<?php echo get_template_directory_uri(); ?>/manutencao/guia-para-profissionais-da-saude-instituto-roki.pdf" target="_blank">Profissionais de saúde</a> </li>
                    </ul>
                </nav>
                
            <div class="socials">
                <ul>
                    <li>
                        <a href="https://wa.me/5511944990015" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/manutencao/images/whatsapp-logo.png" alt=""></a></li>
                    <li>
                        <a href="https://www.facebook.com/institutoroki/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/manutencao/images/facebook-logo.png" alt=""></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/institutoroki/?hl=pt-br" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/manutencao/images/instagram-logo.png" alt=""></a>
                    </li>
                </ul>
            </div>
        </section>
    </header>
    <main>
        <!-- modal -->
    <div class="modal">
    
        <span class="close">x</span>
        <div class="text-modal">
            <p>
                Assistam a Live da Dra Claudia Takano na nossa página do Instagram!<br>
                E quem quiser o contato dela:
            </p>
            <p>
                Unifesp - Ambulatório da Neovagina<br>
                Rua Botucatu, 821, 6° andar<br>
                E-mail para agendamento: carolina.oliveira@huhsp.org.br
            </p>
            <p>
                Clínica particular<br>
                Rua Borges Lagoa, 1065 cj 156<br>
                Telefone para agendamento: (11) 5549.3864
            </p>
        </div>
        <div class="logo-modal">
            <img src="<?php echo get_template_directory_uri(); ?>/manutencao/images/logo-roki.png" alt="">
        </div>
    </div>
    <div class="responsive-modal">
        <span class="close">x</span>
        <div class="text-modal">
            <p>
                Assistam a Live da Dra Claudia Takano na nossa página do Instagram!<br>
                E quem quiser o contato dela:
            </p>
            <p>
                Unifesp - Ambulatório da Neovagina<br>
                Rua Botucatu, 821, 6° andar<br>
                E-mail para agendamento: carolina.oliveira@huhsp.org.br
            </p>
            <p>
                Clínica particular<br>
                Rua Borges Lagoa, 1065 cj 156<br>
                Telefone para agendamento:<br> (11) 5549.3864
            </p>
        </div>
        <div class="logo-modal">
            <?php the_custom_logo(); ?>
        </div>
    </div>
    <!-- //modal -->
        <div class="text container ">
            <div class="reponsive-txt">
                <p>
                    O Instituto Roki foi criado para acolher mulheres 
                    portadoras da Síndrome de Rokitansky, e seus 
                    familiares, pelo compartilhamento de vivências e 
                    informações sempre atualizadas em parceria com 
                    profissionais da área de saúde. Entendemos os 
                    processos e as emoções envolvidas nessa jornada 
                    e acreditamos que ajudar é o nosso propósito.
                    <br>
                    <br>
                </p>    
                <p class="plus-txt">Site em construção.</p>
            </div>
            
            <div class="desktop-txt">
                <p >
                    O Instituto Roki foi criado para acolher mulheres <br>
                    portadoras da Síndrome de Rokitansky, e seus <br>
                    familiares, pelo compartilhamento de vivências e <br>
                    informações sempre atualizadas em parceria com <br>
                    profissionais da área de saúde. Entendemos os <br>
                    processos e as emoções envolvidas nessa jornada <br>
                    e acreditamos que ajudar é o nosso propósito.<br>
                    <br>
                    <br>
                </p>
                <p class="plus-txt">Site em construção.</p>
            </div>
            
        </div>
    </main>
    <script> 
        jQuery('.close').on('click', function(){
        jQuery('.modal, .shadow-modal, .responsive-modal').hide();
        });
    </script>
</body>
</html>