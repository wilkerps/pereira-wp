<?php
/*
* Template Name: Oque Fazemos
*/

get_template_part('head');
get_template_part('header');

$banner = get_field('banner');


$conhece = get_field('cenheceee');

$novo_layout = get_field('novo_layout');
?>

<body>

    <section id="banner">
    <div class="escurecer"></div>
        <img class="banner-desk" src="<?php echo $banner['imagem']['desktop']['url']; ?>" alt="">
        <img class="banner-mobile" src="<?php echo $banner['imagem']['mobile']['url']; ?>" alt="">
        <p><?php echo $banner['texto']; ?></p>

    </section>
    <?php foreach($conhece as $conhecec) : ?>

        <section id="sectionthree">
            <!-- <h2 class="titulo titulo-desk"><?php echo $conhecec['grupo']['titulo']; ?></h2>
            <h2 class="subtitulo subtitulo-desk"><?php echo $conhecec['grupo']['subtitulo']; ?></h2> -->
            <div class="box-geral">
                <div class="box-esquerdo">
                    <h2 class="titulo titulo-mob"><?php echo $conhecec['grupo']['titulo']; ?></h2>
                    <h2 class="subtitulo titulo-mob"><?php echo $conhecec['grupo']['subtitulo']; ?></h2>
                    <p class="texto"><?php echo $conhecec['grupo']['texto']; ?></p>
                    <div class="box-creditos">
                        <p><?php echo $conhecec['grupo']['creditos']['autor']; ?></p>
                        <p>&nbsp;-&nbsp;</p>
                        <p class="data"><?php echo $conhecec['grupo']['creditos']['data']; ?></p>
                    </div>
                </div>
                <div class="box-direito">
                    <img class="banner-mobile" src="<?php echo $conhecec['imagem']['url']; ?>" alt="">
                </div>
            </div>
        </section>
        
    <?php endforeach; ?>

    <!-- <section id="sectionfour">
    <h2 class="titulo titulo-desk"><?php echo $novo_layout['grupo']['titulo']; ?></h2>
        <h2 class="subtitulo subtitulo-desk"><?php echo $novo_layout['grupo']['subtitulo']; ?></h2>
        <div class="box-geral">
            <div class="box-esquerdo">
                <h2 class="titulo titulo-mob"><?php echo $novo_layout['grupo']['titulo']; ?></h2>
                <h2 class="subtitulo titulo-mob"><?php echo $novo_layout['grupo']['subtitulo']; ?></h2>
                <p class="texto"><?php echo $novo_layout['grupo']['texto']; ?></p>
            </div>
            <div class="box-direito">
                <img class="banner-mobile" src="<?php echo $novo_layout['imagem']['url']; ?>" alt="">
            </div>
        </div>
    </section> -->

</body>



<?php get_template_part('footer'); ?>