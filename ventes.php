<?php
require('php/header.php');//PHP on l'inclu à l'endroit ou il doit se mett
require('php/footer.php');
?>
<!-- include nav en exemple -->
<!-- Pour mettre en commentaire PLUS RAPIDEMENT on sélectionne le texte que 
l'on veut mettre en commentaire et on clique sur ctrl et la touche slash(windows) -->

<form>
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
                <div class="small-12 medium-6 cell">
                <label class='text-center middle'>Type de bien</label>
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
                    <label for="middle-label" class="text-center middle">Ville</label>
                </div>
                <div class="small-12 medium-6 cell">
                    <input type="text" id="middle-label" placeholder="Ville">
                <hr>
                </div>
        </div>
        <br>
        <div class="grid-x grid-padding-x">
                <div class="small-12 medium-6 cell">
                    <label for="middle-label" class="text-center middle">Adresse</label>
                </div>
                <div class="small-12 medium-6 cell">
                    <input type="text" id="middle-label" placeholder="Adresse">
                <hr>
                </div>
        </div>
        <br>
        <div class="grid-x grid-padding-x">
                <div class="small-12 medium-6 cell">
                    <label for="middle-label" class="text-center middle">Surface en mètres carrés</label>
                </div>
                <div class="small-12 medium-6 cell">
                    <input type="text" id="middle-label" placeholder="mètre carré">
                <hr>
                </div>
        </div>
        <br>
        <div class="grid-x grid-padding-x">
                <div class="small-12 medium-6 cell">
                    <label for="middle-label" class="text-center middle">Prix</label>
                </div>
                <div class="small-12 medium-6 cell">
                    <input type="text" id="middle-label" placeholder="Prix">
                <hr>
                </div>
        </div>
    </div>
</form>
