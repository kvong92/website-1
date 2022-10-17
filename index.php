<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fichier css : main.css body -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <!-- Librarie Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Accueil</title>
</head>

<body>
    <header class=header_main>
        <section class="menu_nav">

            <div class="power_memory">The Power of Memory</div>
            
            <nav>
                <a style="color: #EC9222;" href="./index.html">ACCUEIL</a>
                <a href="./memory.php">JEU</a>
                <a href="./scores.php">SCORES</a>
                <a href="./contact.php">NOUS CONTACTER</a>
                <a href="./register.php">INSCRIPTION</a>
                <a href="./login.php">CONNEXION</a>
                <a href="./myaccount.php">MON COMPTE</a>
            </nav>

        </section>

        <section id="titre_main">
            <h2>Bienvenue dans notre studio</h2>

            <p id="text_main">Venez challenger les cerveaux les plus agiles</p>

            <a href="./memory.html">
                <button id="button_jouer">JOUER !</button>
            </a>
        </section>
    </header>
    <!-- 1er container : 3 images +  3 textes -->
    <section id="main_all_content">
        <section class="main_container">
            <!-- Block 1 : 3 images -->
            <div class="images_block">
                <img class=images_top src="https://placekitten.com/600/350" alt="img_600x350">
                <img class=images_top src="https://placekitten.com/300/350" alt="img_300x350">
                <img class=images_top src="https://placekitten.com/300/350" alt="img_300x350">
            </div>
            <!-- Block 2.1 : nombre + titre + text -->
            <section class="nb-text_block">
                <p class="nb_top">01</p>
                <div class="title-text_top">
                    <h2 class="title_top">Lorem Ipsum</h2>
                    <p class="text_top">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos rem sequi
                        sint!
                        At dicta laboriosam nemo, porro officiis quidem magnam tempora totam eos odit, reprehenderit
                        delectus. Dicta enim laudantium veritatis sit fuga aliquid nostrum. Veritatis temporibus vero at
                        debitis nam.</p>
                </div>
                <!-- Block 2.2 : nombre + titre + text -->
                <p class="nb_top">02</p>
                <div class="title-text_top">
                    <h2 class="title_top">Lorem Ipsum</h2>
                    <p class="text_top">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos rem sequi
                        sint!
                        At dicta laboriosam nemo, porro officiis quidem magnam tempora totam eos odit, reprehenderit
                        delectus. Dicta enim laudantium veritatis sit fuga aliquid nostrum. Veritatis temporibus vero at
                        debitis nam.</p>
                </div>
                <!-- Block 2.3 : nombre + titre + text -->
                <p class="nb_top">03</p>
                <div class="title-text_top">
                    <h2 class="title_top">Lorem Ipsum</h2>
                    <p class="text_top">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos rem sequi
                        sint!
                        At dicta laboriosam nemo, porro officiis quidem magnam tempora totam eos odit, reprehenderit
                        delectus. Dicta enim laudantium veritatis sit fuga aliquid nostrum. Veritatis temporibus vero at
                        debitis nam.</p>
                </div>
            </section>
        </section>

        <!-- 2e container : image +  4 block : stats du jeu -->
        <section id="img_block">
            <!-- Block 1 : image -->
            <div>
                <img src="https://placekitten.com/750/380" alt="img_450x380">
            </div>
            <!-- Block 2 : 2 block stats bleu/vert-->
            <section id="block_four_images">
                <!-- Block 2.1 : Parties jouées bleu -->
                <section class="grid_stats">
                    <div class="square_1">
                        <p class="square_nb">310</p>
                        <p class="square_text">Parties jouées</p>
                    </div>
                    <!-- Block 2.2 : Joueurs connectés vert -->
                    <div class="square_2">
                        <p class="square_nb">1020</p>
                        <p class="square_text">Joueurs connectés</p>
                    </div>
                </section>
                <!-- Block 3 : 2 block stats violet/orange -->
                <section class="grid_stats">
                    <!-- Block 3.1 : Temps record violet -->
                    <div class="square_3">
                        <p class="square_nb">10 sec</p>
                        <p class="square_text">Temps record</p>
                    </div>
                    <!-- Block 3.2 : Joueurs inscrits orange -->
                    <div class="square_4">
                        <p class="square_nb">21 300</p>
                        <p class="square_text">Joueurs inscrits</p>
                    </div>
                </section>
            </section>
        </section>
        <!-- 3e container : block titre : notre equipe -->
        <section class="equipe_container">
            <h3 id="title_equipe">Notre Équipe</h3>
            <p id="text_equipe">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quibusdam.</p>
            <img id="img_equipe_separator" src="assets/image/separator-orange.png" alt="separator">
        </section>
        <!-- 4e container : 3 block person -->
        <section id="equipe">
            <div class="person_block">
                <img class="img_person" src="https://placekitten.com/200/200" alt="img_150x150">
                <p class="name_person">Celia CHALLAM</p>
                <p class="job_person">Developpeur</p>
                <!-- Add font awesome icons -->
                <div class="icon_social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-github"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </div>
            </div>

            <div class="person_block">
                <img class="img_person" src="https://placekitten.com/200/200" alt="img_150x150">
                <p class="name_person">Ilan OUIDIR</p>
                <p class="job_person">Developpeur</p>
                <!-- Font awesome icons -->
                <div class="icon_social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-github"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </div>
            </div>

            <div class="person_block">
                <img class="img_person" src="https://placekitten.com/200/200" alt="img_150x150">
                <p class="name_person">Kevin VONG</p>
                <p class="job_person">Developpeur</p>
                <!-- Font awesome icons -->
                <div class="icon_social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-github"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </div>
            </div>
        </section>
    </section>

    <footer>
        <section id="information">
            <div id="titre_info">Information</div>
            <div class="text_info">Lorem ipsum dolor sit amet, consectetur elit.</div>
            <section class="tel_email_location">
                <div class="label_info">Tel: </div>
                <div class="text_info">01 23 45 67 89</div>
            </section>

            <section class="tel_email_location">
                <div class="label_info">Email: </div>
                <div class="text_info">support@powerofmemory.com</div>
            </section>

            <section class="tel_email_location">
                <div class="label_info">Location: </div>
                <div class="text_info">Paris</div>
            </section>

            <div class="icon_social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-github"></a>
            </div>
        </section>

        <section id="menu_nav_footer">
            <div id="titre_info">Power Of Memory</div>
            <ul>
                <li>
                    <a href="./memory.html">Jouer</a>
                </li>
                <li>
                    <a href="./scores.html">Les scores</a>
                </li>
                <li>
                    <a href="./contact.html">Nous contacter</a>
                </li>
            </ul>
        </section>
    </footer>

</body>

</html>