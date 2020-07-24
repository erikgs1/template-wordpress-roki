<?php 

/*

Template Name: Contato

*/

?>

<?php get_header(); ?>

<main class="main-background" style="background-image: url(images/background-fundadoras.jpg);">
        <div class="container"> 
            <div class="row">
                <!-- Espaço em branco background -->
                <div class=" col-md-4">
                    <ul class="ul-aside-contato">
                        <li>
                            <h4 class="head-4-5 txtwhite">Nossos contatos</h4>
                        </li>
                        <li>
                            <a href="https://wa.me/5511944990015" target="_blank"><img src="images/logo-whatsapp.jpg" alt="" class="mr-2">(11) 9 4499.0015</a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/institutoroki/" target="_blank"><img src="images/logo-facebook.jpg" alt="" class="mr-2">@institutoroki</a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/institutoroki/?hl=pt-br" target="_blank"><img src="images/logo-instagram.jpg" alt="" class="mr-2">@institutoroki</a>
                        </li>
                        <li>
                            <a href="mailto:contato@institutoroki.com.br" target="_blank"><img src="images/logo-email.jpg" alt="" class="mr-2">contato@institutoroki.com.br</a>
                        </li>
                    </ul>
                </div>
                <!-- // Espaço em branco background -->
                <!-- Conteudo -->
                <div class=" col-md-8 pl-5 form">
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
                                <input class="w-100 mb-2" type="text" placeholder="Nome">
                                <input class="w-100 mb-2" type="text" placeholder="Email">
                                <input class="w-100 mb-2" type="text" placeholder="Whatsapp">
                                <textarea class="w-100" name="Mensagem" id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
                                <div class="box">
                                    <input id="one" type="checkbox">
                                    <span class="check"></span>
                                    <label for="one">Desejo receber novidades do Instituto Roki por e-mail ou whatsapp.</label>
                                </div>
                                <button type="submit">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Conteudo -->
            </div>
        </div>   
    </main>

<?php get_footer(); ?>