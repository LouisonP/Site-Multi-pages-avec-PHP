<?php
include_once('php/header.php');
?>

    <!--Notre équipe de dév pourri-->
    <!--Mettre les photos de nos guiffes dans le dosssier des images-->

    <div class="content-global-notreEquipe">
            <div class="content-people">
                <img src="img/Louison.jpg" alt="">
                <div class="content-text">
                    <div class="arrow-content"><i class="fas fa-angle-up"></i></div>
                    <div class="textes">
                        <h3>Louison Poiriez</h3>
                        <h4>Scrum Master</h4>   
                    </div>
                </div>
            </div>

            <div class="content-people">
                <img src="img/Philippe.jpg" alt="">
                <div class="content-text">
                    <div class="arrow-content"><i class="fas fa-angle-up"></i></div>
                    <div class="textes">
                        <h3>Philippe Lamorski</h3>
                        <h4>Porduct Owner</h4>
                        
                    </div>
                </div>
            </div>

            <div class="content-people">
                <img src="img/Julien.jpg" alt="">
                <div class="content-text">
                    <div class="arrow-content"><i class="fas fa-angle-up"></i></div>
                    <div class="textes">
                        <h3>Julien Guiluy</h3>
                        <h4>Développeur junior</h4>      
                    </div>
                </div>
            </div>

            <div class="content-people">
                <img src="img/Laura.jpg" alt="">
                <div class="content-text">
                    <div class="arrow-content"><i class="fas fa-angle-up"></i></div>
                    <div class="textes">
                        <h3>Laura Latour</h3>
                        <h4>Développeuse junior</h4>
                    </div>
                </div>
            </div>

            <div class="content-people">
                <img src="img/Alexandre.jpg" alt="">
                <div class="content-text">
                    <div class="arrow-content"><i class="fas fa-angle-up"></i></div>
                    <div class="textes">
                        <h3>Alexandre Douchez</h3>
                        <h4>Développeur junior</h4>      
                    </div>
                </div>
            </div>

        </div>
        <br>
        <br>
        <br>
        <br>
    
        <div class="texte">
                <p class="p-texte">Contactez-nous
                    Pour tout renseignement, question ou information, n'hésitez pas à nous contacter via le formulaire ci-dessous.
                    Nous y donnerons suite dans les deux jours ouvrables. Vous pouvez aussi consulter nos questions fréquentes.
                    Peut-être y trouverez-vous la réponse à votre question.            
                    Pour un suivi optimal de votre question, merci de renseigner vos coordonnées complètes ci-contre, 
                    en particulier votre numéro de téléphone (qui ne sera en aucun cas communiqué à un tiers).
                </p></div>
                <div id="manip2">
                    <div class="manip3">
                    <form class="formulaire">
                    <div class="div-form">
                        <div class="nom">
                            <input class="nom" type="text" name="nom" placeholder="Nom"/><br/>
                        </div>
                        <div class="prenom">
                            <input class="prenom" type="text" name="prénom" placeholder="prénom"/><br>
                        </div>
                        <div class="adresse">
                            <input class="adresse" type="text" name="Adresse" placeholder="Adresse postal"/><br/>
                        </div>
                        <div class="codepostal">
                            <input class="Code postal" type="texte" name="Code postal" placeholder="Code postal"/><br>
                        </div>
                        <div class="ville">
                            <input class="Ville" type="texte" name="Ville" placeholder="Ville"/><br>
                        </div>
                        <div class="telephone">
                            <input class="Téléphone" type="texte" name="téléphone" placeholder="Numéro de téléphone"/><br>
                        </div>
                        <div class="carte">
                            <input class="n°carte de fidélité" type="texte" name="n°carte de fidélité" placeholder="Numéro de carte de fidélité"/><br>
                        </div>
                        <div class="age">
                            <input class="age" type="text" name="age" placeholder="Age"/><br>
                        </div>
                        <div class="email">
                            <input class="email" type="email" name="email" placeholder="Adresse email"/><br/>  
                        </div>                  
                        <div class="questions">
                            <label for="questions" type="texte" name="Questions"></label><br />
                            <textarea name="Questions" id="Questions" placeholder="Questions" rows="10" cols="50" ></textarea>
                            <input type="submit" value="envoyer"/><br/> 
                        </div>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
                        
            </div>

            <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Sniglet" rel="stylesheet">

<?php
include_once('php/footer.php');

?>