/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */


import "./scss/app.scss";

// start the Stimulus application

import $ from 'jquery';
import 'bootstrap';


// Récupération du nom de notre image dans la barre de recherche
$('.custom-file-input').on('change', function(e) {
    var inputFile = e.currentTarget;
    $(inputFile).parent().find('.custom-file-label').html(inputFile.files[0].name);
});