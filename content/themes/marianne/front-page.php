<?php get_header(); ?>

     <!-- SECTION BANNER -->

     <?php if (have_posts()): while (have_posts()): the_post();

        get_template_part('template-parts/content/banner');

    endwhile; endif; ?>


        <!-- SECTION PRESENTATION -->

        <div id="about"></div>

        <section class="container container__about">

            <?php

                $args = [
                    'category_name' => 'description'
                ];

                $wp_query = new WP_Query($args);

                if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();

                    get_template_part('template-parts/content/post-excerpt');

                endwhile; endif;

                wp_reset_postdata();

            ?>

        </section>

        <!-- SECTION EXPERIENCE -->

        <div id="exp"></div>

        <section class="container container__exp">
            <h2 class="heading">Expérience</h2>

            <div class="experience">
                <div class="experience__icon">
                    <i class="fa fa-code" aria-hidden="true"></i>
                </div>
                <div class="experience__content">
                    <h2 class="experience__date">Janvier 2019 - Juin 2019</h2>
                    <div class="experience__text">
                        <h2 class="experience__entreprise">O'Clock - Projet Kiemta'o</h2>
                        <h3 class="experience__poste">Git Master & partner lead dev-front</h3>
                        <p>Un projet 100% WordPress, 100% filles et 100% bonne ambiance.
                        Le projet Kiemta'o à été pensé par Anne-Laure, Product Owner et a été joyeusement mis en oeuvre avec l'aide de
                        Timia - Lead dev back et Audie - Lead Dev Front</p>
                        <p>L’objectif de la plateforme est de faciliter la communication et encourager
                        la bonne ambiance dans une organisation. On ajoute ses amis, on créer ses teams et on
                        balance son Kiemtao (= ton humeur, ta citation du jour).</p>
                        <p>C’est du 100% WordPress pour la communication facile avec la base de données mais sans aucun plugin WP.
                        Nous avons créé une sidebar en toggle pour la version responsive, car oui, c’est responsive.
                        Pour une prochaine version, nous avions de nouveaux widgets en tête : calendrier d’anniversaire, forum d’entraide (issues) etc.</p>

                        <strong>Technos utilisées</strong> : Wordpress <em>(et c'est pas un blog ;D )</em>
                        <strong>Présentation du projet</strong> : <a class="live-link" href="https://youtu.be/Q4waFUpPzjA?t=2540" alt="kiemtao-project">Kiemta'o Project</a>
                    </div>
                </div>
            </div>
            <div class="experience">
                <div class="experience__icon">
                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                </div>
                <div class="experience__content">
                <h2 class="experience__date">Janvier 2016 - Décembre 2018</h2>
                    <div class="experience__text">
                        <h2 class="experience__entreprise">Boucheries Novoviande</h2>
                        <h3 class="experience__poste">Responsable Adjointe de magasin</h3>
                        <p>Responsable adjointe du magasin de Pontault-Combault</p>
                        <p>Gestion d'une équipe de 15 personnes: vendeurs, étudiants, bouchers</p>
                        <p>Gestion de la marchandise du magasin: commandes, réception des marchises, méthodes HACCP</p>
                        <p>Découpe, préparation des viandes, mise en rayon, vente, relation-client</p>
                    </div>
                </div>
            </div>
            <div class="experience">
                <div class="experience__icon">
                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                </div>
                <div class="experience__content">
                <h2 class="experience__date">Mai 2015 - Décembre 2016</h2>
                    <div class="experience__text">
                        <h2 class="experience__entreprise">Boucheries Novoviande</h2>
                        <h3 class="experience__poste">Manager des ventes</h3>
                        <p>Formation adjointe du magasin de Rambouillet</p>
                        <p>Gestion d'une équipe de 10 personnes: vendeurs, étudiants, bouchers</p>
                        <p>Gestion de la marchandise du magasin: commandes, réception des marchises, méthodes HACCP</p>
                        <p>Découpe, préparation des viandes, mise en rayon, vente, relation-client</p>
                    </div>
                </div>
            </div>
            <div class="experience">
                <div class="experience__icon">
                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                </div>
                <div class="experience__content">
                    <h2 class="experience__date">Juillet 2014 - Avril 2015</h2>
                    <div class="experience__text">
                        <h2 class="experience__entreprise">Boucheries Novoviande</h2>
                        <h3 class="experience__poste">Vendeuse - Bouchère de laboratoire</h3>
                        <p>Conseil et vente client</p>
                        <p>Connaissance des produits bouchers</p>
                        <p>Respect des méthodes HACCP</p>
                        <p>Découpe, préparation des viandes, mise en rayon</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION FORMATIONS -->

        <div id="training"></div>

        <section class="container container__training">
            <h2 class="heading">Formations</h2>
            <div class="training">
                <div class="training__main">
                    <h3 class="training__main__school">O'Clock</h3>
                    <span class="training__main__date">Janvier 2019 - Juin 2019</span>
                </div>
                <h4 class="training__work">Développeuse web - Web mobile</h4>
                <p>5 mois, soit 700 heures intensives de formation au développement web en téléprésentiel</p>
                <p>3 mois de socle pour apprendre les bases du code</p>
                <ul>
                    <li>Intégration : HTML / CSS</li>
                    <li>Javascript Vanilla et JQuery</li>
                    <li>Frameworks Bootstrap / Bulma</li>
                    <li>PHP7 (MySQL, PMA, modèle MVC, framework Laravel)</li>
                    <li>Programmation Orientée Objet</li>
                    <li>Ajax</li>
                    <li>Git - Github</li>
                </ul>
                <p>1 Mois de spécialisation Wordpress</p>
                <ul>
                    <li>Wordpress et ses fonctions</li>
                    <li>SASS / SCSS</li>
                    <li>Composer et Webpack</li>
                    <li>NPM</li>
                    <li>Custom Themes & Plugins</li>
                    <li>REST API</li>
                </ul>
                <p>1 mois de projet de groupe :
                <a href="https://youtu.be/Q4waFUpPzjA?t=2540" class="live-link">Projet Kiemta'o</a> en full Wordpress</p>
            </div>
            <div class="training">
                <div class="training__main">
                    <h3 class="training__main__school">Certificat d'Aptitude Professionnelle EPB</h3>
                    <span class="training__main__date">2013 - 2014</span>
                </div>
                <h4 class="training__work">Boucherie</h4>
            </div>
            <div class="training">
                <div class="training__main">
                    <h3 class="training__main__school">Brevet de Technicien Supérieur</h3>
                    <span class="training__main__date">2010 - 2012</span>
                </div>
                <h4 class="training__work">Banque et Finances : marché des particuliers</h4>
            </div>
        </section>

        <!-- SECTION COMPETENCES -->

        <div id="skills"></div>

        <section class="container container__skills">
            <h2 class="heading">Compétences Techniques</h2>
            <div class="skills__content">
                <ul>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>SASS / SCSS</li>
                    <li>Vanilla JS</li>
                    <li>JQuery</li>
                    <li>Bootstrap</li>
                    <li>Bulma</li>
                    <li>NPM</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>POO</li>
                    <li>Wordpress</li>
                    <li>Git/Github</li>
                    <li>Linux</li>
                    <li>Agile</li>
                    <li>SCRUM</li>
                    <li>Photoshop CS6</li>
                    <li>Illustrator</li>
                    <li>InDesign</li>
                    <li>Graphisme</li>
                </ul>
            </div>
            <h2 class="heading">Compétences Linguistiques</h2>
            <div class="skills__content">
                <ul>
                    <li>Français</li>
                    <li>Anglais</li>
                    <li>Espagnol</li>
                    <li>Langue des Signes</li>
                </ul>
            </div>
        </section>



        <!-- SECTION FOOTER -->


        <?php get_footer(); ?>
