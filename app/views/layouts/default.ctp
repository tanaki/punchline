<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Punchline</title>

	<?php
            echo $this->Html->meta('icon');

            echo $this->Html->css('reset');
            echo $this->Html->css('default');
            echo $this->Html->css('carousel');

            echo $this->Html->script('lib/jquery.min');
            echo $this->Html->script('lib/jquery.plugins');
	?>

        <script type="text/javascript">
            var aImages = [
                // filled in PHP ---
                'img/shirts/medium/shirt_1.png',
                'img/shirts/medium/shirt_2.png',
                'img/shirts/medium/shirt_3.png',
                'img/shirts/large/shirt_1.png',
                'img/shirts/large/shirt_2.png',
                'img/shirts/large/shirt_3.png',
                // --- filled in PHP

                'img/site/misc/bg_site.jpg', 'img/site/misc/logo_punchline_24.png',
                'img/site/titles/title_teeshirts_24.png', 'img/site/titles/title_boutique_24.png',
                'img/site/titles/title_punchline_24.png', 'img/site/titles/title_session_24.png',
                'img/site/titles/title_galerie_24.png', 'img/site/titles/title_photos_24.png',
                'img/site/titles/title_evenements_24.png', 'img/site/titles/title_a-venir_24.png',
                'img/site/menu/small/img_shop_24.png', 'img/site/menu/small/img_session_24.png', 'img/site/menu/small/img_photo_24.png', 'img/site/menu/small/img_event_24.png',
                'img/site/menu/large/img_shop_24.png', 'img/site/menu/large/img_session_24.png', 'img/site/menu/large/img_photo_24.png', 'img/site/menu/large/img_event_24.png'
            ];
        </script>

        <?php
            echo $this->Html->script('punchline/preload');
            echo $this->Html->script('punchline/init_modal');
            echo $this->Html->script('punchline/toggle_content');
            echo $this->Html->script('punchline/menu');
            echo $this->Html->script('punchline/carousel');
            echo $this->Html->script('punchline/init');
        ?>
    </head>

    <body id="index" class="home">
        <div id="loading">
            <canvas id="canvas-loading" width="100" height="100">Loading</canvas>
        </div>
        <div id="wrapper" class="hidden">
            <div id="header">
                <img src="img/site/misc/logo_punchline_24.png" />
                <div id ="menu">
                    <a href="/shirts" class="current" id="btn_shop"
                       data-img-small="img/site/menu/small/img_shop_24.png"
                       data-img-large="img/site/menu/large/img_shop_24.png" >
                        <img src="img/site/menu/large/img_shop_24.png" alt="Boutique Tee Shirt" />
                    </a>
                    <a href="/punchline-session" class="menu-1" id="btn_session"
                       data-img-small="img/site/menu/small/img_session_24.png"
                       data-img-large="img/site/menu/large/img_session_24.png" >
                        <img src="img/site/menu/small/img_session_24.png" alt="Punchline Session" />
                    </a>
                    <a href="/galeries-photo" class="menu-2" id="btn_photo"
                       data-img-small="img/site/menu/small/img_photo_24.png"
                       data-img-large="img/site/menu/large/img_photo_24.png" >
                        <img src="img/site/menu/small/img_photo_24.png" alt="Galeries Photos" />
                    </a>
                    <a href="/evenements-a-venir" class="menu-3" id="btn_event"
                       data-img-small="img/site/menu/small/img_event_24.png"
                       data-img-large="img/site/menu/large/img_event_24.png" >
                        <img src="img/site/menu/small/img_event_24.png" alt="Evenements a venir" />
                    </a>
                </div>
            </div>
            <div id="content">
				<div id="titles">
					<img src="img/site/titles/title_teeshirts_24.png" alt="Tee Shirts" class="subtitle" />
					<img src="img/site/titles/title_boutique_24.png" alt="Boutique" class="title" />
				</div>
				<?php echo $content_for_layout; ?>
            </div>
            <div id="footer">
                <ul class="list-footer">
                    <li>Copyright &copy; <?php echo date("Y"); ?></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/credits">Credits</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>