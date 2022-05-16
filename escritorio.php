<?php
/*
* Template Name: Escritório
*/

get_template_part('head');
get_template_part('header');

?>

<body>
    </div>
    <section id="banner">

        <div class= "card">
            <img class="banner-desk" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/bannerprincipal1.jpg"?>" alt="">
            <img class="banner-mob" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/bannerprincipal1_mobile.png"?>" alt="">
        </div>

        <div class= "card">
            <img class="banner-desk" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/bannerprincipal2.jpg"?>" alt="">
            <img class="banner-mob" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/bannerprincipal1_mobile.png"?>" alt="">
        </div>

        <div class= "card">
            <img class="banner-desk" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/bannerprincipal3.jpg"?>" alt="">
            <img class="banner-mob" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/bannerprincipal1_mobile.png"?>" alt="">
        </div>
    </section>
    
    <section id="sectionone">
        
        <div class="">
            <p class="titulo-desk">O Escritório</p>
            <div class="conteudo">

                <picture class="esquerdo">
                <img class="banner-mob" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/escritorio.jpg"?>" alt="">
                </picture>

                <p class="titulo-mob">O Escritório</p>

                <p class="texto">O Escritório Silveira & Advogados Associados iniciou as atividades no ano de 2010 e desde então vem prestando serviços nas mais diversas áreas e ramos do direito.</p>
                <p class="texto">Desde o início dos trabalhos não foram poupados esforços para  que o nosso escritório alcançasse a excelência na prestação dos serviços que dispõe aos clientes e parceiros, investindo em infraestrutura moderna e logistica de atendimento capacitando-nos a atender todos os clientes que nos confiam suas causas.</p>
                <p class="texto">Temos como principal objetivo a prestação de serviços juridicos de qualidade, alcançando sempre a justiça através do direito, respeitando sempre a ética e a moral.</p>
                <p class="texto">Como missão, desejamos, através da ética, da moral e dos bons constumes, levar a todos os nossos clientes as melhores respostas e soluções a cada demanda seja ela judicial, administrativa ou apenas duvidas.</p>
                <p class="texto">Os principais valores são a ética, a eficiência, o compromisso com o trabalho e com os clientes, o trabalho em equipe, o respeito, e, acima de tudo, o respeito a Deus.</p>

            </div>
        </div>

    </section>

    <section id="sectionthree">
        <div class="box">
            <div class="card">1</div>
            <div class="card">2</div>
            <div class="card">3</div>
            <div class="card">4</div>
            <div class="card">5</div>
        </div>
    </section>

    
</body>

<?php get_template_part('footer'); ?>