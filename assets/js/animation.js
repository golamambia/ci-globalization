$(document).ready(function ($) {
    $(function(){
        var NodeBlue = $('.second-anim-block-wrap .grey-block .blue-block .progress-block');
        var NodeGrey = $('.second-anim-block-wrap .grey-block .progress-block-g'),
            BaseWidthB = NodeBlue.width();
            BaseWidthG = NodeGrey.width();

        $(window).resize();

        $(window).scroll(function() {
            //----Second Block

            var winScrollTopB = $(window).scrollTop()-700,
                newSizeB = winScrollTopB  * 1.5 ;
            NodeBlue.css({
                width: newSizeB
            });
            var winScrollTopG = $(window).scrollTop()-700,
                newSizeG = (winScrollTopG  * 1.9) + 50;
            NodeGrey.css({
                width: newSizeG
            });

        });

    });

    $(function(){
        var NodeBlue1 = $('.third-anim-block-wrap .grey-block .blue-block .progress-block');
        var NodeGrey1 = $('.third-anim-block-wrap .grey-block .progress-block-g'),
            BaseWidthB1 = NodeBlue1.width();
            BaseWidthG1 = NodeGrey1.width();

        $(window).resize();

        $(window).scroll(function() {

            //----Third Block

            var winScrollTopB1 = $(window).scrollTop() - 1250,
                newSizeB = winScrollTopB1  * 1.3;
            NodeBlue1.css({
                width: newSizeB
            });
            var winScrollTopG = $(window).scrollTop() - 1250,
                newSizeG = (winScrollTopG  * 1.6) + 50;
            NodeGrey1.css({
                width: newSizeG
            });

        });

    });

    $(function(){
        var NodeBlue2 = $('.fourth-anim-block-wrap .grey-block .blue-block .progress-block');
        var NodeGrey2 = $('.fourth-anim-block-wrap .grey-block .progress-block-g'),
            BaseWidthB2 = NodeBlue2.width();
            BaseWidthG2 = NodeGrey2.width();

        $(window).resize();

        $(window).scroll(function() {

            //----Third Block

            var winScrollTopB2 = $(window).scrollTop() - 1950,
                newSizeB = winScrollTopB2  * 1.5;

            NodeBlue2.css({
                width: newSizeB
            });
            var winScrollTopG2 = $(window).scrollTop() - 1950,

                newSizeG = (winScrollTopG2  * 1.8) + 50;

            NodeGrey2.css({
                width: newSizeG
            });

        });

    });


    var first = $('.first-anim-block-wrap').offset().top - window.innerHeight;
    var second = $('.second-anim-block-wrap').offset().top - window.innerHeight;
    var third = $('.third-anim-block-wrap').offset().top - window.innerHeight;
    var fourth = $('.fourth-anim-block-wrap').offset().top - window.innerHeight;

    if((window.innerWidth > 1200)) {
        $(window).scroll(function () {
            if ($(window).scrollTop() > (first + 600)) {

                $('.first-anim-block-wrap .front-block').animate({
                    right: '49px',
                    bottom: '-42px',
                }, 800);
            }

            if ($(window).scrollTop() > (second + 720)){
                $('.second-icon-anim-block .front-block').animate({
                    right: '40px',
                    bottom: '-41px',
                }, 800);
            }

            if ($(window).scrollTop() > (third + 730)){
                $('.third-icon-anim-block .front-block').animate({
                    right: '-7px',
                    bottom: '-41px',
                }, 800);
            }

            if ($(window).scrollTop() > (fourth + 730)){
                $('.fourth-icon-anim-block .front-block').animate({
                    right: '25px',
                    bottom: '-30px',
                }, 800);
            }
        });
    }
});