$(document).ready(function(){

    var postid = $('.gallery').prop('id'),
        pid = '"' + postid + '"';
        hheight = $( 'header' ).height();
        fheight = $( 'footer' ).height();
        wheight = $( window ).height();
        heightMathOne = fheight + hheight;
        heightMath = wheight - heightMathOne;

    $('.gallery-icon a').attr( 'data-uk-lightbox', '{group:\" '+postid+'\"}');

    $('.height-fix').css("min-height", heightMath);

});
