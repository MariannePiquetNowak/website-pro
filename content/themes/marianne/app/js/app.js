require('jquery.scrollex');

var app = {

    $body: null,

    init: function() {
        console.log('init');

        app.$body = $('body');

        // Je dépose un event click sur mes boutons ui-button
        $('.ui-button').on('click', app.handleToggleMenu);

    },

    handleToggleMenu: function(evt) {

        console.log('app.handle');

        // J'évite le rechargement de la page
        evt.preventDefault();

        app.$body.toggleClass('menu-visible');
    }

};


$(app.init);