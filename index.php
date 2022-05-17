<?php
/*
* Template Name: Home
*/

get_template_part('head');
get_template_part('header');

?>

<body>
    <section id="banner">

        <div class="card">

            <img class="banner-desk" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/bannerprincipal1.jpg" ?>" alt="">
            <img class="banner-mob" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/bannerprincipal1_mobile.png" ?>" alt="">
        </div>

        <div class="card">
            <img class="banner-desk" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/bannerprincipal2.jpg" ?>" alt="">
            <img class="banner-mob" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/bannerprincipal1_mobile.png" ?>" alt="">
        </div>

        <div class="card">
            <img class="banner-desk" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/bannerprincipal3.jpg" ?>" alt="">
            <img class="banner-mob" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/bannerprincipal1_mobile.png" ?>" alt="">
        </div>
    </section>

    <section id="sectionone">

        <div class="">
            <p class="titulo-desk">Quem somos?</p>
            <div class="conteudo">

                <p class="titulo-mob">Quem somos?</p>

                <p class="texto">O Escritório Silveira & Advogados Associados iniciou as atividades no ano de 2010 e
                    desde então vem prestando serviços nas mais diversas áreas e ramos do direito, utilizando técnicas
                    construtivas, modernas e inovadoras, com soluções que perseguem o menor custo sem desprezar a
                    eficiência, a qualidade e as expectativas dos nossos clientes, proporcionando-lhes credibilidade e
                    satisfação nos resultados.</p>

            </div>
        </div>

    </section>

    <section id="sectiontwo">
        <div class="box">
            <div class="card">
                <img class="" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/home1.jpg" ?>" alt="">
                <p class="texto">ADVOCACIA DE APOIO</p>
            </div>

            <div class="card">
                <img class="" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/home2.jpg" ?>" alt="">
                <p class="texto">ESCRITÓRIO</p>
            </div>

            <div class="card">
                <img class="" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/home3.jpg" ?>" alt="">
                <p class="texto">ÁREAS DE ATUAÇÃO</p>
            </div>

            <div class="card">
                <img class="" src="<?php echo get_site_url() . "/" .  "wp-content/uploads/2021/07/home4.jpg" ?>" alt="">
                <p class="texto">FALE CONOSCO</p>
            </div>

    </section>

    <div class="noticias">
        <div>
            <h1>TJMS Notícias</h1>
            <?php
            // permite requisições a urls externas
            ini_set('allow_url_fopen', 1);
            ini_set('allow_url_include', 1);

            // caminho do feed do meu blog
            $feed = 'https://www5.tjms.jus.br/rss/portaltjms.php';
            // leitura do feed
            $rss = simplexml_load_file($feed);

            // limite de itens
            $limit = 5;
            // contador
            $count = 0;

            // imprime os itens do feed
            if ($rss) {
                foreach ($rss->channel->item as $item) {
                    // formata e imprime uma string
                    printf('<a href="%s" title="%s" >%s</a><br />', $item->link, $item->title, $item->title);
                    // incrementamos a variável $count
                    $count++;
                    // caso nosso contador seja igual ao limite paramos a iteração
                    if ($count == $limit) break;
                }
            } else {
                echo 'Não foi possível acessar as notícias.';
            }
            ?>
        </div>
        <div>
            <h1>STJ Notícias</h1>
            <?php
            // permite requisições a urls externas
            ini_set('allow_url_fopen', 1);
            ini_set('allow_url_include', 1);

            // caminho do feed do meu blog
            $feed = 'https://res.stj.jus.br/hrestp-c-portalp/RSS.xml';
            // leitura do feed
            $rss = simplexml_load_file($feed);

            // limite de itens
            $limit = 5;
            // contador
            $count = 0;

            // imprime os itens do feed
            if ($rss) {
                foreach ($rss->channel->item as $item) {
                    // formata e imprime uma string
                    printf('<a href="%s" title="%s" >%s</a><br />', $item->link, $item->title, $item->title);
                    // incrementamos a variável $count
                    $count++;
                    // caso nosso contador seja igual ao limite paramos a iteração
                    if ($count == $limit) break;
                }
            } else {
                echo 'Não foi possível acessar as notícias.';
            }
            ?>
        </div>



    </div>

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