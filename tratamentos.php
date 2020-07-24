<?php 

/*

Template Name: Tratamentos

*/

?>
<?php get_header(); ?>
<?php 
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    $thumb_url = $thumb_url_array[0];
?>
<main class="main-background-not100" style="background-image:url(<?php echo $thumb_url ?>)">
        <div class="container"> 
            <div class="row">
                <div class=" col-md-4">
                </div>
                <div class=" col-md-8">
                    <div>
                        <div class="page-title">
                            <h1>Tratamentos</h1>
                        </div>    
                        <p>
                            Pesquisas e estudos médicos apresentam possibilidades de tratamentos, clínicos e cirúrgicos,
                            para o desenvolvimento do canal vaginal. Atualmente, o tratamento com dilatadores é a primeira
                            recomendação entre médicos especialistas em Síndrome de Rokitansky do mundo inteiro. A
                            opção pela cirurgia sempre envolverá riscos, necessita de anestesia geral e não elimina o uso de
                            dilatadores, após a grande maioria das técnicas cirúrgicas. Por isso, devem ser consideradas, apenas,
                            quando não houver sucesso com a dilatação. O médico poderá esclarecer todos os procedimentos e
                            acompanhar a escolha da mulher quando ela estiver segura e confiante para tomar sua decisão.
                        </p>
                        <h4>Dilatadores</h4>
                        <p>
                            A técnica de dilatação progressiva foi definida em 1938 e é conhecida como Método Frank. Consiste
                            no uso diário de dilatadores plásticos de tamanhos diferentes e progressivos. As sessões devem
                            durar de 20 a 30 min, para que se obtenha sucesso no tratamento.
                        </p>
                        <p>
                            Geralmente, os conjuntos de dilatadores são compostos por 5 ou 6 tamanhos diferentes, que variam
                            de 6 a 15 cm de comprimento. O primeiro dilatador é semelhante a um absorvente interno vaginal
                            fino. À medida que a vagina se estende, deve substituir o dilatador pelo próximo tamanho até
                            completar o tratamento com o uso dos dilatadores maiores. A duração do tratamento varia entre 6
                            e 12 meses e deverá ser orientado e acompanhado pelo profissional de saúde.
                        </p>
                        <p>
                            Abaixo indicamos a forma correta para o uso dos dilatadores:
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col-md-3">
                    
                </div>
                <div class=" col-md-9">
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <?php 
                                $image = get_field('sobre_a_sindrome_imagem_primaria');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif;?>
                        </div>
                        <div class="col-md-6">
                            <?php 
                                $image = get_field('sobre_a_sindrome_imagem_secundaria');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif;?>
                        </div> 
                    </div> 
                    <div class="row justify-content-center">
                        <div class="col-md-9 ">
                            <div class="list-bullet">
                                <?php 
                                    $firstText = get_field('sobre_a_sindrome_texto_secundario');
                                    echo $firstText;
                                ?>
                            </div> 
                        <div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>