<link rel="stylesheet" href="\public\css\style-contact.css">
<main>
    <h1>CONTACTEZ-NOUS</h1>
    <h3>Une requête ? Une suggestion ? Ecris-nous ici.</h3>
    <div class="contact">
    <div class="container">
    <div class="formul">
    <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post"> 
            <div class="rowed">
            <input type="text" id="prenom" name="prenom" placeholder="Prénom"/>
            
		    <input type="text" id="nom" name="nom" placeholder="Nom"/>
            
		    <input type="text" id="email" name="email" placeholder="E-mail"/>
            </div>
            
            <input type="text" id="sujet" name="sujet" placeholder="Sujet"/>
		    <textarea id="message" name="message" placeholder="Message"></textarea>
            <br><br>
		    <input id="botto" type="submit" name="send" value="Envoyer"/>
            <br><br><br>
			<div id="statusMessage"> 
            <?php /*if (! empty($db_msg)) { ?>
              <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
            <?php } */?>
            </div>
    </form>
    </div>
    <div class="adresse">
    <h3>Où nous trouver ?</h3>
    <h5>Vous préférez nous écrire par voie postale ? Pas de soucis !</h5>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10547.553054755608!2d2.5716928!3d48.6311202!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5e3e7afc87863%3A0xacf83e134e0cbf2e!2sUPEC%20-%20B%C3%A2timent%20H!5e0!3m2!1sfr!2sfr!4v1685539008720!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>
    </div>
    </main>