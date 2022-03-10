<!doctype html>
<html lang="fr">
<head>
    <title>Studio Rv & Co</title>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Studio Rv & Co.">

    <link rel="icon" href="assets/img/logos/favicon/favicon.ico" media="(prefers-color-scheme:no-preference)">
    <link rel="icon" href="assets/img/logos/favicon/favicon-light.ico" media="(prefers-color-scheme:dark)">
    <link rel="icon" href="assets/img/logos/favicon/favicon.ico" media="(prefers-color-scheme:light)">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body onload="load()">
    <header>
        <article>
            <!-- Logo et titre -->
            <section>
                <a href="https://rvandco.fr">
                    <img src="assets/img/logos/rv_and_co.png" alt="Logo de l'association Rv & Co.">
                    <p>Studio Rv & Co</p>
                </a>
            </section>

            <!-- Liens internes -->
            <section>
                <a href="#accueil">Accueil</a>
                <a href="#productions">Productions</a>
                <a href="#projets">Projets</a>
                <a href="#association">Association</a>
                <a href="#contact">Contact</a>
            </section>

            <!-- Liens externes -->
            <section>
                <!-- YouTube -->
                <a href="https://www.youtube.com/channel/UCbTaxj24z8viOFR6NXMKurQ">
                    <img src="assets/img/medias/youtube.svg" alt="Logo du site YouTube.">
                </a>
                <!-- Twitter -->
                <a href="https://twitter.com/studiorvandco">
                    <img src="assets/img/medias/twitter.svg" alt="Logo du site Twitter.">
                </a>
                <!-- Instagram -->
                <a href="https://www.instagram.com/studiorvandco">
                    <img src="assets/img/medias/instagram.svg" alt="Logo du site Instagram.">
                </a>
                <!-- Twitch -->
                <a href="https://www.twitch.tv/studiorvandco">
                    <div class="on-air hidden"><i></i></div>
                    <img src="assets/img/medias/twitch.svg" alt="Logo du site Twitch.">
                </a>
            </section>
        </article>
    </header>

    <main>
        <!-- Accueil -->
        <div id="accueil" class="main-container">
            <h1>Ouais, on produit des trucs 😎</h1>
            <article>
                <!-- Vidéo teaser -->
                <section>
                    <video autoplay muted loop preload="none" poster="assets/img/mosaique.png">
                        <source src="assets/vid/teaser.mp4" type="video/mp4">
                    </video>
                </section>

                <!-- Quelques chiffres -->
                <section>
                    <p>Quelques chiffres</p>
                    <!-- TODO: Synchroniser avec l'API YouTube -->
                    <div>
                        <p><strong class="countup">10</strong> Membres</p>
                        <hr>
                        <p><strong class="countup">3</strong> Projets</p>
                        <hr>
                        <p><strong class="countup"><?= json_decode(file_get_contents(__DIR__ . "/assets/data/statistics.json"), true)["viewCount"] ?></strong> Vues</p>
                        <hr>
                        <p><strong class="countup"><?= json_decode(file_get_contents(__DIR__ . "/assets/data/statistics.json"), true)["subscriberCount"] ?></strong> Abonnés</p>
                        <hr>
                        <p><strong class="countup"><?= date_diff(date_create("2020-09-09"), date_create())->format("%y") ?></strong> an</p>
                    </div>
                    <a class="btn" href="#association">En savoir plus</a>
                </section>
            </article>
        </div>

        <!-- Productions -->
        <div id="productions">
            <article class="main-container">
                <h2 class="super_title">Nos productions</h2>
                <section id="main-prod">
                    <!-- 1ère production -->
                    <article class="reveal">
                        <section>
                            <img src="assets/img/un_chemin.jpg" alt="Miniature du court-métrage 'Un Chemin'.">
                        </section>
                        <section>
                            <div>
                                <span class="new">Nouveau</span>
                                <h3>Un Chemin</h3>
                            </div>
                            <p>
                                Tandis que l'humanité est terrassée par une pandémie dévastatrice, deux amis tentent de survivre.<br>
                                Pour cela, ils devront s'engager ensemble sur un long chemin...
                            </p>
                            <a class="btn" href="https://www.youtube.com/watch?v=GXBSu6fq4Wc">Regarder</a>
                        </section>
                    </article>

                    <!-- 2ᵉ production -->
                    <article class="reveal">
                        <section>
                            <img src="assets/img/star_wars_une_quete_de_justice.jpg" alt="Miniature du fan film 'Star Wars : Une quête de justice'.">
                        </section>
                        <section>
                            <h3>Star Wars : Une quête de justice</h3>
                            <p>
                                La galaxie est déchirée par la guerre entre les Jedi et les Sith. Dans ce contexte mouvementé, la notion de justice est incertaine, chaque camp se l’appropriant pour servir ses intérêts. Mais certains n'hésitent pas à se dresser face à cet affrontement sans fin...
                            </p>
                            <a class="btn" href="https://www.youtube.com/watch?v=RAmWSDmg0so">Regarder</a>
                        </section>
                    </article>

                    <!-- 3ᵉ production -->
                    <article class="reveal">
                        <section>
                            <img src="assets/img/un_ete_entre_amis.jpg" alt="Miniature de la série 'Un été entre amis'.">
                        </section>
                        <section>
                            <h3>Un été entre amis</h3>
                            <p>
                                Trois amis s'apprêtent à profiter de vacances assez banales à la campagne. Mais des aventures bien plus palpitantes que prévu les attendent et leurs caractères aussi bien trempés que divergents ne vont pas arranger les choses...
                            </p>
                            <a class="btn" href="https://www.youtube.com/playlist?list=PL6VuKkKwjE2EmFu61Pvn39yP5RvYVpIGB">Regarder</a>
                        </section>
                    </article>
                </section>
            </article>
        </div>

        <!-- Projets -->
        <div id="projets">
            <article class="main-container">
                <h2 class="super_title">Projets annexes</h2>

                <!-- Bannières -->
                <!-- TODO: Carousel de bannières -->
                <section id="project-banners">
                    <img src="assets/img/mosaique.png" alt="">
                    <div>
                        <hr>
                        <hr>
                        <hr>
                        <hr>
                    </div>
                </section>
            </article>
        </div>

        <!-- Association -->
        <div id="association">
            <article class="main-container">
                <h2 class="super_title">L'association</h2>

                <!-- Présentation de l'association -->
                <p class="reveal">
                    Le Studio Rv & Co est un regroupement d'amis passionnés par le monde du cinéma. Ensemble, nous produisons du début à la fin des courts-métrages ou des séries amateurs sur des thèmes variés qui nous plaisent.
                </p>

                <!-- Membres -->
                <section id="members" class="reveal">
                    <div>
                        <img src="assets/img/members/Mael.jpg" alt="Maël.">
                        <p>Maël</p>
                    </div>
                    <div>
                        <img src="assets/img/members/Thomas.jpg" alt="Thomas.">
                        <p>Thomas</p>
                    </div>
                    <div>
                        <img src="assets/img/members/Florent.jpg" alt="Florent.">
                        <p>Florent</p>
                    </div>
                    <div>
                        <img src="assets/img/members/Mathis.jpg" alt="Mathis.">
                        <p>Mathis</p>
                    </div>
                </section>
                <hr class="reveal">

                <!-- Posts Instagram -->
                <!-- TODO: Synchronisation avec l'API Instagram -->
                <section id="instagram-posts" class="reveal">
                    <img src="assets/img/mosaique.png" alt="">
                    <img src="assets/img/mosaique.png" alt="">
                    <img src="assets/img/mosaique.png" alt="">
                    <img src="assets/img/mosaique.png" alt="">
                    <img src="assets/img/mosaique.png" alt="">
                    <img src="assets/img/mosaique.png" alt="">
                    <img src="assets/img/mosaique.png" alt="">
                    <img src="assets/img/mosaique.png" alt="">
                    <img src="assets/img/mosaique.png" alt="">
                </section>
                <a class="btn" href="https://www.instagram.com/studiorvandco">Plus de photos...</a>
            </article>
        </div>

        <!-- Contact -->
        <div id="contact">
            <article class="main-container">
                <h2 class="super_title">Nous contacter</h2>
                <section>
                    <!-- Adresse et email -->
                    <div>
                        <h3>Studio Rv & Co</h3>
                        <p>
                            4 Lotissement Cantalause <br>
                            31450 Montgiscard, France
                        </p>
                        <p><strong>Email : </strong><a href="mailto:studio@rvandco.fr">studio@rvandco.fr</a></p>
                    </div>
                    <hr>

                    <!-- Réseaux sociaux -->
                    <div>
                        <h3>Réseaux sociaux</h3>
                        <div>
                            <!-- YouTube -->
                            <a href="https://www.youtube.com/channel/UCbTaxj24z8viOFR6NXMKurQ">
                                <img src="assets/img/medias/youtube.svg" alt="Logo du site YouTube.">
                            </a>
                            <!-- Twitter -->
                            <a href="https://twitter.com/studiorvandco">
                                <img src="assets/img/medias/twitter.svg" alt="Logo du site Twitter.">
                            </a>
                            <!-- Instagram -->
                            <a href="https://www.instagram.com/studiorvandco">
                                <img src="assets/img/medias/instagram.svg" alt="Logo du site Instagram.">
                            </a>
                            <!-- Twitch -->
                            <a href="https://www.twitch.tv/studiorvandco">
                                <div class="on-air hidden"><i></i></div>
                                <img src="assets/img/medias/twitch.svg" alt="Logo du site Twitch.">
                            </a>
                        </div>
                    </div>
                    <hr>

                    <!-- Logo Studio Rv & Co -->
                    <img src="assets/img/logos/studio_rv_and_co.png" alt="Logo alternatif de l'association Rv & Co.">
                </section>
            </article>
        </div>
    </main>

    <footer>
        <!-- Copyright -->
        <p>&copy; <script>document.write(new Date().getFullYear().toString());</script> &nbsp;|&nbsp; <a href="https://rvandco.fr">RvAndCo.fr</a></p>

        <!-- Créateur -->
        <p>Site Web créé par <a href="https://github.com/Minarox">Minarox</a>.</p>
    </footer>

    <script>
        const animationDuration = 2600;
        const frameDuration = 1000 / 60;
        const totalFrames = Math.round(animationDuration / frameDuration);
        const easeOutQuad = t => t * (2 - t);

        const animateCountUp = el => {
            let frame = 0;
            const countTo = parseInt(el.innerHTML, 10);
            const counter = setInterval(() => {
                frame++;
                const progress = easeOutQuad(frame / totalFrames);
                const currentCount = Math.round(countTo * progress);

                if (parseInt(el.innerHTML, 10) !== currentCount) {
                    el.innerHTML = currentCount;
                }

                if (frame === totalFrames) {
                    clearInterval(counter);
                }
            }, frameDuration);
        };

        function reveal() {
            let reveals = document.querySelectorAll(".reveal");

            for (let i = 0; i < reveals.length; i++) {
                let windowHeight = window.innerHeight;
                let elementTop = reveals[i].getBoundingClientRect().top;
                let elementVisible = 44;

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");

                    if (i === 6) {
                        window.removeEventListener("scroll", reveal);
                    }
                }
            }
        }

        function load() {
            reveal();
            window.addEventListener("scroll", reveal);

            // Smooth scroll to anchor
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    window.scroll({
                        top: (document.querySelector(this.getAttribute('href')).offsetTop - 60),
                        left: 0,
                        behavior: 'smooth'
                    })
                });
            });

            document.querySelectorAll('.countup').forEach(animateCountUp);
        }
    </script>
</body>
</html>