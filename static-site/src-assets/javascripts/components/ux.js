
var initiated = true;
function rotateSphereDown() {

    getScrollTo();
    TweenLite.to(_maze_balls, 0.2, { display: 'none', ease: Linear.easeOut });
    TweenMax.to(_top_maze, 0.2, {top: "-290px", ease: Linear.easeOut});
    TweenMax.to(_bottom_maze, 0.2, {top: "-290px", ease: Linear.easeOut});

    TweenLite.to(_maze_svgs, 0.2, {
        display: 'none', onComplete: function () {
            TweenMax.to(window, 2, {
                scrollTo: {
                    y: scroll_to,
                    autoKill: true
                },
                ease: Power3.easeOut
            });
            canShowContent = true;
            $('.technology-service-team').fadeIn();
        }
    });
}

function rotateSphereUp() {
    canShowContent = false;
    $('.technology-service-team').fadeOut();
    TweenMax.to(window, 2, {
        scrollTo: {
            y: 0,
            autoKill: true
        },
        ease: Power3.easeOut
    });

    TweenLite.to(_maze_svgs, 2.5, {
        display: 'block', onComplete: function () {


        }, ease: Linear.easeOut
    });

    TweenMax.to(_bottom_maze, 0.3, {top: "-260px", ease: Linear.easeOut});
    TweenMax.to(_top_maze, 0.3, {top: "-320px", ease: Linear.easeOut});
    _maze_balls.fadeIn();

}

function toggle_content(){}

function radToDeg(radians) {
    return radians * 180 / Math.PI
}

function getScrollTo() {



    scroll_to = window.innerHeight * 0.85;

    if(window.innerWidth <= 1200){
        scroll_to = window.innerHeight * 0.7 ;


        if(isAndroid && isChrome) {
            scroll_to -= 35;
        }
    }



    $('.technology-service-team').css('top',scroll_to+'px');
}


function initInfoPlay(){

    bodyHeight = window.innerHeight + sphereHeight;

    if(isAndroid && isChrome && initiated) {

        bodyHeight += 35;
        initiated = false;
    }

    if(isAndroid ){
        $('#maze-container').css('bottom', '90px');
    }


    document.body.style.height = bodyHeight + 'px';




}



// Window Functions
<!-- On refresh start from top -->
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}

<!-- Scroll Function -->
window.onscroll = function (event) {
    sphereRotateAngle = radToDeg(sphere.rotation.x);
    if (rotateSphere === "up" && sphereRotateAngle < -1) {
        sphere.rotation.x += rotate;
        renderSphere();
    }
    if (rotateSphere === "down" && sphereRotateAngle >= -53) {
        sphere.rotation.x -= rotate;
        renderSphere();
    }
}

<!-- Onresize Function -->
window.onresize = function (event){
    if(!isAndroid) {
        initInfoPlay();
    }

}

window.addEventListener('wheel', function (e) {
    if (e.deltaY < 0) {
        rotateSphere = "up";
        rotateSphereUp();
    }
    if (e.deltaY > 0) {
        rotateSphere = "down";
        rotateSphereDown();
    }
});

window.addEventListener('touchstart', function(evt){
    xDown = evt.touches[0].clientX;
    yDown = evt.touches[0].clientY;
    evt.preventDefault();
}, false);

window.addEventListener('touchmove', function(evt) {

    var xUp = evt.touches[0].clientX;
    var yUp = evt.touches[0].clientY;

    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;

    if ( Math.abs( yDiff ) ) {
        if ( yDiff > 0 ) {
            rotateSphere = "down";
            if(canShowContent){

            }
            else{
                rotateSphereDown();
            }


        }
        else {
            rotateSphere = "up";
            rotateSphereUp();
        }

    }

    evt.preventDefault();
}, false);


initInfoPlay();


window.addEventListener("orientationchange", function() {
    alert("the orientation of the device is now " + screen.orientation.angle);

    if(screen.orientation.angle === 90){
        if(window.innerWidth < 1024){
            //temproary fix
            if(window.innerWidth > window.innerHeight){
                $('#orientation-modal').modal('show');
            }

            if(window.innerHeight > window.innerWidth){
                window.scrollTo(0, 0);
                $('#orientation-modal').modal('hide');
            }
        }
    }
});
