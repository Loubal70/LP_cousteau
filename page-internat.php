<?php get_header(); ?>

<div class="template-internat content-body">
    <div class="internat__presentation">
        <h1 class="title"><?php the_title() ?></h1>
        <?php
            $internat = (Object) get_field('page_internat', 'options');
        ?>
        <?php if ( $internat->introduction ): ?>
            <p><?= $internat->introduction ?></p>
        <?php endif; ?>
        <div class="presentation__internat-picture">
            <?php if ( $internat->suite_de_lintroduction['image'] ): ?>
                <?= wp_get_attachment_image($internat->suite_de_lintroduction['image'], 'full') ?>
                <?php else: ?>
                    <img src="https://backoffice-jouve.onpc.fr/ano-images/photo/IN092-62_PF.jpg" alt="Chambre à l'internat">
            <?php endif; ?>

            <?php if ( $internat->suite_de_lintroduction["texte"] ): ?>
                <p>
                    <?= $internat->suite_de_lintroduction["texte"] ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="presentation__internat-number">
            <h2>L'internat en quelques chiffres</h2>
            <div>
                <div>
                    <p class="count"><?= $internat->places_pour_les_filles ?></p>
                    <span>places pour les filles</span>
                </div>
                <div>
                    <p class="count"><?= $internat->places_pour_les_filles ?></p>
                    <span>places pour les garçons</span>
                </div>
                <div>
                    <p class="count"><?= $internat->responsables_dinternat ?></p>
                    <span>responsables d'internat</span>
                </div>
            </div>
        </div>
    </div>

    <div class="internat__register">
        <a href="<?= $internat->dossier_dinscription ?>">Dossier d'inscription pour l'internat</a>
    </div>

    <div class="internat__activites">
        <h2>Activités de l'internat</h2>
        <p>Pendant leur temps libre, les internes ont accès à un patio aménagé ou à différentes activités à l’intérieur de l’établissement comme </p>
        <div class="activites__presentation">
            <div>
                <?php foreach ( $internat->activites_de_linternat as $value ): ?>
                    <p><?= $value ?></p>
                <?php endforeach; ?>
            </div>
            <div>
                <div class="grid grid1"><img loading="lazy" src="https://img.olympicchannel.com/images/image/private/t_social_share_thumb/f_auto/primary/qjxgsf7pqdmyqzsptxju" alt=""></div>
                <div class="grid grid2"><img loading="lazy" src="https://infront-cloudinary.corebine.com/infront-production/image/upload/c_fill,dpr_2.63,f_webp,g_north,h_270,q_auto,w_480/v1/infront-prod/01092019DOM_vs_JOR_GY13293" alt=""></div>
                <div class="grid grid3"><img loading="lazy" src="https://www.superprof.fr/blog/wp-content/uploads/2016/11/acheter-guitare-bon-marche.jpg" alt=""></div>
                <div class="grid grid4"><img loading="lazy" src="https://trustpair.fr/wp-content/uploads/2021/03/attaque-informatique.png" alt=""></div>
            </div>
        </div>
    </div>
    <div class="internat__trip">
        <h2>Sorties hors-internat</h2>
        <p>Tout au long de l’année différentes sorties seront organisées comme :</p>
        <div class="trip__list">
            <?php foreach ( $internat->sorties_hors_internat as $value ): ?>
                <p><?= $value ?></p>
            <?php endforeach; ?>
        </div>
    </div>

    <?php if ( $internat->sorties_hors_internat_image ): ?>
        <?= wp_get_attachment_image($internat->sorties_hors_internat_image, 'full') ?>

        <?php else: ?>
            <img src="<?= get_template_directory_uri(). '/assets/images/skateboard.webp' ?>" alt="Image SkateBoard" loading="lazy">
    <?php endif; ?>

    
    <p class="internat__authorization">Toutes les sorties nécessitent une autorisation des parents pour les mineurs .</p>
    <div class="internat__reglement">
        <p>Découvrez également le <a href="<?= $internat->reglement_interieur_de_linternat ?>">réglement intérieur de l'internat</a></p>
    </div>
</div>

<?php get_footer(); ?>