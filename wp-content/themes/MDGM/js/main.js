$(document).ready(function(){

    var postid = $('.gallery').prop('id'),
        pid = '"' + postid + '"';


    $('.gallery-icon a').attr( 'data-uk-lightbox', '{group:\" '+postid+'\"}');

    hheight = $( 'header' ).height();
    fheight = $( 'footer' ).height();
    wheight = $( window ).height();
    heightMathOne = fheight + hheight;
    heightMath = wheight - heightMathOne - 32;

    $('.height-fix').css("min-height", heightMath);

});
