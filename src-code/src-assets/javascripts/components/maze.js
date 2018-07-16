
   
   // replace_text();

    _maze_balls.click(function (e) {
        //maze_rotation_animation();
        //text_animation();
    });


    function maze_rotation_animation(){
        _maze_svgs.css("transform", "rotateX(73deg) rotateZ("+_rotation_angle+"deg)");
        _rotation_angle += 90;
    }

    function text_animation(){
        TweenMax.staggerFromTo( _slider_caption.find("span"), 1.0, {autoAlpha:0, scale:0}, {autoAlpha:1, scale:1}, 0.1 );
    }

    function replace_text(){
        _slider_caption.html(_slider_caption.html().replace(/./g, "<span>$&</span>").replace(/\s/g, "&nbsp;"));
    }
