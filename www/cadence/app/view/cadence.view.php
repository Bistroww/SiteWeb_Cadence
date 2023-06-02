<main>

    <section class="home">
        <img class="fruit1" src="public/Images/Accueil/carambole1.png">
        <img class="biere" src="public/Images/Accueil/biere.png">
        <img class="fruit2" src="public/Images/Accueil/carambole2.png">
        <img class="fruit3" src="public/Images/Accueil/carambole3.png">
        <img class="fruit4" src="public/Images/Accueil/carambole2.png">
        <div class="home-content">
            <img class="logo" src="public/Images/Accueil/logo_cadence_blanc.png">
            <h3>Une <span class="span2">explosion</span> de saveur</h3>
            <h2>Carnaval de <span class="multiple-text"></span></h2>
            <p>Découvrez la nouvelle collection de CADENCE. Les bières s'inspirant des plus grands carnavals au monde !</p>
        </div>
    </section>

        <div class="waves2">
            <div class="wave2" id="wave1"></div>
            <div class="wave2" id="wave2"></div>
            <div class="wave2" id="wave3"></div>
            <div class="wave2" id="wave4"></div>
        </div>

    <section class="section_biere">
        <div class="titre_section_biere">
        <h1>Nos bières</h1>
        <p>Notre nouvelle collection est arrivée ! Allez-vous tenir la CADENCE ?</p>
        </div>

        <div class="boutique_accueil">

        </div>
    </section>

    <section class="pub">
        <video class="publicite" src="public/Images/Accueil/CADENCE_video.mp4" controls poster="public/Images/Accueil/miniature.png"></video>
    </section>

    <section class="presentation">
        <img class="pimage" src='public/Images/Accueil/logo_cadence_noir.png'>
        <p class="p1">- une brasserie <span class="span1">artisanale</span> qui vous offre le meilleur équilibre gustatif pour <span class="span1">émerveiller</span> vos papilles avec chaque gorgée.</p>

        <p class="p2">Chez Cadence, nous sommes une marque passionnée par la <span class="span1">fête</span> et la <span class="span1">célébration</span> de la diversité culturelle à travers notre bière artisanale.</p> 
        <p class="p2">Inspirés par les <span class="span1">festivals</span> du monde entier, nous créons des brassins uniques qui captivent les papilles et font vibrer les sens.</p>

        <p class="p3">Nos bières festives sont conçues pour vous offrir une expérience gustative inégalée.</p> 
        <p class="p3">Chaque gorgée est une invitation à plonger dans un univers exaltant, où les <span class="span1">saveurs</span> se mêlent <span class="span1">harmonieusement</span> pour créer une symphonie de délices.</p>

        <p class="p4">En utilisant des ingrédients soigneusement sélectionnés, nous mettons en avant notre <span class="span1">savoir-faire</span> artisanal pour produire des bières de qualité supérieure.</p> 
        <p class="p4">Nous nous engageons à offrir des produits de première classe, où l'authenticité et la passion se mêlent à chaque étape de notre processus de brassage.</p>

        <p class="p5"><span class="span1">Rejoignez-nous</span> dans notre quête de joie, d'émerveillement et de partage.</p> 
        <p class="p5">Que ce soit lors de festivals, de soirées entre amis ou de moments de détente, notre bière <span class="span1">Cadence</span> est là pour accompagner vos instants les plus festifs.</p>

        <p class="p6">Parcourez notre site et découvrez notre gamme de bières <span class="span11">uniques</span>, plongez dans notre histoire et laissez-vous inspirer par notre univers festif.</p> 
        <p class="p6">Préparez-vous à tenir la Cadence et à vivre des moments inoubliables</p>

        <p class="p7">Cadence - Brasserie Artisanale de Bière Festive.</p>
    </section>
<style>
    
.span2 {
    font-family: 'Alata';
    color: #F7EE85;
}

.multiple-text {
    font-family: 'Alata';
    color: #F7EE85;
}


.home {
    display: flex;
    background: radial-gradient(closest-side, #F39322, #F39322, #e65504);
    background-size: cover;
    background-position: center;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.home-content {
    margin-left: 55%;
    margin-top: 5%;
    color: var(--text-color);
}

.home-content h1 {
    font-size: 3.5rem;
}

.home-content .logo {
    position: absolute;
    width: 35%;
    margin-top: -11%;
}

.home-content h3 {
    font-size: 2rem;
    font-weight: 200;
}

.home-content h2 {
    font-size: 3rem;
}

.home-content p {
    padding-top: 2%;
    padding-right: 40%;
}

.biere {
    position: absolute;
    width: 55%;
    left: 0;
    margin-left: 10%;
    margin-top: 5%;
}

.fruit1 {
    position: absolute;
    width: 23%;
    left: 0;
    margin-left: 27%;
    margin-top: 22%;
}

.fruit2 {
    position: absolute;
    width: 23%;
    left: 0;
    margin-left: 9.5%;
    margin-top: 30%;
    animation: floatImage1 4s ease-in-out infinite;
}

.fruit3 {
    position: absolute;
    width: 15%;
    left: 0;
    margin-left: 5%;
    margin-top: -20%;
    animation: floatImage2 4s ease-in-out infinite;
}

.fruit4 {
    position: absolute;
    width: 25%;
    left: 0;
    margin-left: 37%;
    margin-top: -30%;
    animation: floatImage3 4s ease-in-out infinite;
}

@keyframes floatImage1 {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(2rem);
    }
    100% {
        transform: translateY(0);
    }
}

@keyframes floatImage2 {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-2rem);
    }
    100% {
        transform: translateY(0);
    }
}

@keyframes floatImage3 {
    0% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-1rem);
    }
    100% {
        transform: translateY(0);
    }
}


.section_biere {
    display: flex;
    justify-content: center;
    align-items: center;
}

.titre_section_biere {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    flex-direction: column;
    margin-top: 8%;
}

.titre_section_biere h1 {
    font-size: 3.3rem;
    font-weight: 500;
    margin-top: 5%;
    padding-bottom: 3%;
}

.titre_section_biere p {
    color: gray;
    padding-bottom: 7%;
}

.publicite {
    min-height: 100vh;
    width: 100%;
    object-fit: cover;
}

.presentation {
    font-size: 1.3rem;
    margin-top: 5%;
}

.presentation .span1 {
    color: var(--main-color);
    padding-left: 6px;
    padding-right: 6px;
}

.presentation .span11 {
    color: var(--main-color);
    padding-left: 6px;
    padding-right: 2px;
}


.presentation .p1 {
    display: flex;
    justify-content: center;
    align-items: center;
}

.presentation .p2 {
    display: flex;
    justify-content: center;
    align-items: center;
}

.presentation .p3 {
    display: flex;
    justify-content: center;
    align-items: center;
}

.presentation .p4 {
    display: flex;
    justify-content: center;
    align-items: center;
}

.presentation .p5 {
    display: flex;
    justify-content: center;
    align-items: center;
}

.presentation .p6 {
    display: flex;
    justify-content: center;
    align-items: center;
}

.presentation .p7 {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.1rem;
}

.presentation p:nth-child(1) {
    font-size: 2rem;
}

.presentation .pimage {
    width:300px;
    display: block;
    margin: auto;
    padding-bottom: 2%;
}

.presentation p:nth-child(2) {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 2%;
}

.presentation p:nth-child(4) {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 2%;
}

.presentation p:nth-child(6) {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 2%;
}

.presentation p:nth-child(8) {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 2%;
}

.presentation p:nth-child(10) {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 2%;
}

.presentation p:nth-child(12) {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 3%;
}

.presentation p:nth-child(13) {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-bottom: 10%;
}

.wave2 {
    position: absolute;
    left: 0;
    margin-top: -2px;
    width: 100%;
    height: 100px;
    background: url('public/Images/Accueil//wave/wave2.png');
    background-size: 1000px 100px;
    z-index: 2;
}

.wave2#wave1 {
    z-index: 1;
    animation: animate 20s linear infinite;
    opacity: 0.5;
    filter: blur(2px);
}

.wave2#wave2 {
    z-index: 2;
    animation: animate 15s linear infinite reverse;
    opacity: 0.8;
    filter: blur(1px);
}

.wave2#wave3 {
    z-index: 3;
    animation: animate 25s linear infinite;
    opacity: 0.3;
    filter: blur(3px);
}

@keyframes animate {
    0% {
        background-position-x: 0;
    }
    100% {
        background-position-x: 1000px;
    }
}








@media screen and (max-width: 1336px) {
    .home-content {
    margin-left: 52%;
    margin-top: 7%;
    color: var(--text-color);
    }
    
    .home-content h3 {
        font-size: 1.6rem;
        font-weight: 200;
    }
    
    .home-content h2 {
        font-size: 2.6rem;
    }
    
    .home-content p {
        padding-top: 2%;
        padding-right: 40%;
        font-size: 95%;
    }

    .presentation {
        padding-left: 5%;
        padding-right: 5%;
    }

    .presentation p {
        font-size: 80%;
    }

    .pimage {
        padding-bottom: 3%;
    }
    
}


@media screen and (max-width: 1200px) {
    .home-content h3 {
        font-size: 1.4rem;
        font-weight: 200;
    }
    
    .home-content h2 {
        font-size: 2.2rem;
    }
    
    .home-content p {
        padding-top: 2%;
        padding-right: 40%;
        font-size: 90%;
    }

    .presentation {
        padding-left: 5%;
        padding-right: 5%;
    }

    .presentation p {
        font-size: 60%;
    }

    .pimage {
        padding-bottom: 3%;
    }
    
}

@media screen and (max-width: 992px) {
    .home-content h3 {
        font-size: 1.3rem;
        font-weight: 200;
    }
    
    .home-content h2 {
        font-size: 2rem;
    }
    
    .home-content p {
        padding-top: 2%;
        padding-right: 40%;
        font-size: 80%;
    }

    .presentation {
        padding-left: 5%;
        padding-right: 5%;
    }

    .presentation p {
        font-size: 60%;
    }

    .pimage {
        padding-bottom: 3%;
    }
    
}

@media screen and (max-width: 720px) {
    .home-content {
        margin-left: 40%;
    }
    
    .home-content h3 {
        font-size: 1.3rem;
        font-weight: 200;
    }
    
    .home-content h2 {
        font-size: 2rem;
    }
    
    .home-content p {
        padding-top: 2%;
        padding-right: 40%;
        font-size: 80%;
    }

    .fruit1 {
        display: none;
    }

    .fruit4 {
        margin-top: -45%;
    }

    .titre_section_biere {
        margin-top: 15%;
    }

    .titre_section_biere h1 {
        font-size: 2.8rem;
    }
    
    .titre_section_biere p {
        font-size: 90%;
    }

    .presentation {
        padding-left: 5%;
        padding-right: 5%;
    }

    .presentation p {
        font-size: 43%;
    }

    .presentation .pimage {
        width: 150px;
    }    
}



@media screen and (max-width: 500px) {
    .home-content {
        margin-left: 40%;
    }

    .biere {
        position: absolute;
        width: 100%;
        left: -5%;
        margin-left: 0%;
        margin-top: 0%;
    }
    
    .home-content h3 {
        font-size: 1rem;
        font-weight: 200;
    }
    
    .home-content h2 {
        font-size: 1.4rem;
    }
    
    .home-content p {
        padding-top: 2%;
        padding-right: 40%;
        font-size: 60%;
    }

    .fruit1 {
        display: none;
    }

    .fruit4 {
        margin-top: -45%;
    }

    .titre_section_biere {
        margin-top: 20%;
    }

    .titre_section_biere h1 {
        font-size: 2rem;
    }
    
    .titre_section_biere p {
        font-size: 80%;
    }

    .presentation {
        padding-left: 5%;
        padding-right: 5%;
    }

    .presentation p {
        font-size: 30%;
    }

    .presentation .pimage {
        width: 130px;
    }    
}

</style>
</main>

<script src="https://unpkg.com/scrollreveal"></script>

<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

<script>
ScrollReveal({ 
    //reset: true,
    distance: '120px',
    duration: 2000,
    delay: 200 
  });
  
  ScrollReveal().reveal('.biere, .fruit1, .titre_section_biere, .pimage', { origin: 'top' });
  ScrollReveal().reveal('.boutique_accueil, video, .p7', { origin: 'bottom' });
  ScrollReveal().reveal('.fruit2, .fruit3, .p1, .p3, .p5', { origin: 'left' });
  ScrollReveal().reveal('.fruit4, .home-content, .p2, .p4, .p6', { origin: 'right' });
  
  
  const typed = new Typed('.multiple-text', {
    strings: ['Rio de Janeiro', 'Venise', 'Dunkerque', 'Pékin', 'Santa-Cruz', 'Cap-Vert', 'Mexico'],
    typeSpeed: 50,
    backSpeed: 50,
    typeDelay: 500,
    loop: true
  });
  </script>
</body>
