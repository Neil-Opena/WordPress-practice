$(function(){
    //cache the window object
    var $window = $(window);

    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this);

        $window.scroll(function(){
            //scroll the background at var speed
            //the yPos is a negative value because we're scrolling it Up!!1
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));

            //put together our final background position
            var coords = '50% ' + yPos + 'px';

            //move the background
            $bgobj.css({backgroundPosition: coords});
        });
    });
});