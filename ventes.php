<?php
require('php/header.php');//PHP on l'inclu à l'endroit ou il doit se mett
?>
<!-- include nav en exemple -->
<!-- Pour mettre en commentaire PLUS RAPIDEMENT on sélectionne le texte que 
l'on veut mettre en commentaire et on clique sur ctrl et la touche slash(windows) -->

<form>
    <div class="grid-container">
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
    </div>
</form>

<?php
require('php/footer.php');
?>