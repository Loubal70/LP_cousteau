<?php get_header(); ?>

<div class="template-editorial content-body">
    <div class="editorial__presentation container">
        <div>
            <img src="https://www.tangycoffee.com/wp-content/uploads/2020/12/coffee-4609952_1280-e1607080525823.jpg" alt="">
        </div>
        <div>
            <h1 class="title"><?php the_title() ?></h1>
            <p>Depuis prés de cinquante ans, la communauté éducative du lycée professionnel Jacques-Yves Cousteau accueille avec le même engouement des jeunes venus de divers horizons et participe activement à la concrétisation de leur projet professionnel.</p>
        </div>
    </div>

    <div class="editorial__localisation">
        <p>Niché au cœur de la ville de Wasquehal, <span>à 15 minutes de la gare Lille Flandres </span> par le métro et disposant d’un internat, notre lycée implanté dans la métropole lilloise possède de sérieux atouts permettant la mobilité géographique des jeunes.</p>
        <div>
            <img src="" alt="">
        </div>
    </div>

    <div  class="editorial__formation-presentation">
        <p>Notre lycée propose des formations en <span>CAP, BAC PRO et BT</span> dans des secteurs industriels qui recrutent :</p>
        <div class="formation-presentation__gallery">
            <div>
                <img src="https://afpic.com/wp-content/uploads/2021/01/La-chimie-au-laboratoire.jpg" alt="">
                <p>L'hygiène, la propeté et la stérilisation</p>
            </div>
            <div>
                <img src="https://afpic.com/wp-content/uploads/2021/01/La-chimie-au-laboratoire.jpg" alt="">
                <p>Chimie</p>
            </div>
            <div>
                <img src="https://afpic.com/wp-content/uploads/2021/01/La-chimie-au-laboratoire.jpg" alt="">
                <p>L'agroalimentaire</p>
            </div>
        </div>
        <div class="formation-presentation__insertion">
            <p>L’insertion des jeunes diplômés dans la vie active s’en trouve donc favorisée.</p>
            <span class="underline-text"></span>
        </div>
    </div>

    <div class="editorial__young-student">
        <div>
            <img src="https://st2.depositphotos.com/3944627/7866/i/450/depositphotos_78664718-stock-photo-double-exposure-of-scientist-hand.jpg" alt="">
        </div>
        <div>
            <p>Ainsi l’établissement accueille aussi de jeunes apprentis et contribue à la formation tout au long de la vie d’adultes. Disposant de plateaux techniques à la pointe du modernisme, les espaces numériques et pédagogiques font l’unanimité tant auprès des personnels et des jeunes que des professionnels.</p>
            <p>De taille humaine, le lycée professionnel Jacques-Yves Cousteau dispose d’un cadre verdoyant et les enseignements en groupe à effectifs réduits permettent un meilleur apprentissage des savoirs, savoir-faire et l’acquisition de savoir-être.</p>
        </div>
    </div>

    <div class="editorial__resume">
        <p>Enfin la communauté éducative est attachée à l’ouverture culturelle des apprenants. Ainsi de nombreux projets éducatifs et pédagogiques se déroulent tout au long de l’année scolaire. L’éducation du citoyen de demain vient, de fait, compléter la formation du futur salarié et ce dans un épanouissement culturel certain.</p>
        <img src="https://cousteau-wasquehal.enthdf.fr/wp-content/uploads/2019/11/image-lycee-900x420.jpg" alt="">
        <p>Vous l’aurez compris, le lycée Jacques-Yves Cousteau, fort d’une longue expérience, poursuit son ambition de faire réussir chaque jeune qui lui fait confiance en menant à terme son projet professionnel.</p>
    </div>

    <div class="editorial__proviseur">
        <?php while ( have_rows( 'direction', 'options' ) ) : the_row(); ?>
                <p><?php the_sub_field( 'civilite', 'options' ); ?> <?php the_sub_field( 'prenom', 'options' ); ?> <?php the_sub_field( 'nom', 'options' ); ?></p>
                <p><?php the_sub_field( 'fonction', 'options' ); ?></p>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>