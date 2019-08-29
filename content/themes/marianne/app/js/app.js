var rellax = new Rellax('.rellax', {
    speed: -2,
    center: false,
    wrapper: null,
    round: true,
    vertical: true,
    horizontal: true
})

var app = {

    $body: null,
    $banner: null,
    $art: null,

    init: function() {
        console.log('init');

        app.$body = $('body');
        app.$banner = $('.banner');
        app.$art = $('.art');

        // Je dépose un event click sur mes boutons ui-button
        $('.ui-button').on('click', app.handleToggleMenu);

        app.$art.on('click', app.openImage);

        $('a[href^="#"]').on('click', app.scrollSection);


    },

    handleToggleMenu: function(evt) {

        console.log('app.handle');

        // J'évite le rechargement de la page
        evt.preventDefault();

        app.$body.toggleClass('menu-visible');

        $('.header').toggleClass('hidden');
    },

    openImage: function(evt) {

        console.log('coucou image');

        evt.preventDefault();

        $(this).toggleClass('image-zoom')

        $('.art').find('.image-zoom');

    },

    scrollSection: function(event){
        event.preventDefault();

        var target = $(this).attr('href');

       /* le sélecteur $(html, body) permet de corriger un bug sur chrome
       et safari (webkit) */
        $('html, body')

       // on arrête toutes les animations en cours
       .stop()

       /* on fait maintenant l'animation vers le haut (scrollTop) vers
        notre ancre target */
       .animate({scrollTop: $(target).offset().top}, 1500 );

    }

};

$(app.init);