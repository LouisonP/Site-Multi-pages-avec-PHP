<?php
require('php/header.php');//PHP on l'inclu à l'endroit ou il doit se mett
?>
<!-- include nav en exemple -->
<!-- Pour mettre en commentaire PLUS RAPIDEMENT on sélectionne le texte que 
l'on veut mettre en commentaire et on clique sur ctrl et la touche slash(windows) -->

<form>
        <!-- <div class="grid-container">
            <div class="grid-x grid-padding-x">
                    <div class="small-12 medium-6 cell">
                    <label class='text-center middle'><strong>Type de bien</strong></label>
                        <select>
                            <option value="appartement">Appartement</option>
                            <option value="maison">Maison</option>
                            <option value="terrain">Terrain</option>
                        </select>
                    <hr>
                    </div>
            </div>
            <br>
            <div class="grid-x grid-padding-x">
                    <div class="small-12 medium-6 cell">
                        <label for="middle-label" class="text-center middle"><strong>Ville</strong></label>
                    </div>
                    <div class="small-12 medium-6 cell">
                        <input type="text" id="middle-label" placeholder="Ville">
                    <hr>
                    </div>
            </div>
            <br>
            <div class="grid-x grid-padding-x">
                    <div class="small-12 medium-6 cell">
                        <label for="middle-label" class="text-center middle"><strong>Adresse</strong></label>
                    </div>
                    <div class="small-12 medium-6 cell">
                        <input type="text" id="middle-label" placeholder="Adresse">
                    <hr>
                    </div>
            </div>
            <br>
            <div class="grid-x grid-padding-x">
                    <div class="small-12 medium-6 cell">
                        <label for="middle-label" class="text-center middle"><strong>Surface en mètres carrés</strong></label>
                    </div>
                    <div class="small-12 medium-6 cell">
                        <input type="text" id="middle-label" placeholder="mètre carré">
                    <hr>
                    </div>
            </div>
            <br>
            <div class="grid-x grid-padding-x">
                    <div class="small-12 medium-6 cell">
                        <label for="middle-label" class="text-center middle"><strong>Prix</strong></label>
                    </div>
                    <div class="small-12 medium-6 cell">
                        <input type="text" id="middle-label" placeholder="Prix">
                    <hr>
                    </div>
            </div> 
    </div> -->


    <h3 class="formulaireventeh3">Formulaire de vente</h3>
    <div class="row">
        <div class="small-12 medium-6 columns">
            <label><strong>Type de bien</strong>
                <select>
                    <option value="appartement">Appartement</option>
                    <option value="maison">Maison</option>
                    <option value="terrain">Terrain</option>
                </select>
            </label>
        </div>
        <div class="small-12 medium-6 columns">
            <label><strong>Nom</strong>
            <input type="text" placeholder="Nom">
            </label>
        </div>
    </div>
    <div class="row">
        <div class="small-12 medium-6 columns">
            <label><strong>Ville</strong>
            <input type="text" placeholder="Ville">
            </label>
        </div>
        <div class="small-12 medium-6 columns">
            <label><strong>prenon</strong>
            <input type="text" placeholder="prenon">
            </label>
        </div>
    </div>
    <div class="row">
        <div class="small-12 medium-6 columns">
            <label><strong><address>Adresse du bien</address> </strong>
            <input type="text" placeholder="Adresse du bien">
            </label>
        </div>
        <div class="small-12 medium-6 columns">
            <label><strong>Adresse</strong>
            <input type="text" placeholder="Adresse">
            </label>
        </div>
        <div class="small-12 medium-6 columns">
            <label><strong>Surface mètres Carrés</strong>
            <input type="text" placeholder="Mètres carrés">
        </label>
        </div>
        <div class="small-12 medium-6 columns">
            <label><strong>Prix</strong>
            <input type="text" placeholder="Prix">
            </label>
        </div>
    </div>
    <a class="button large bbttnn" href="#"><i>Valider</i></a>
    















</form>

<?php
require('php/footer.php');
?>