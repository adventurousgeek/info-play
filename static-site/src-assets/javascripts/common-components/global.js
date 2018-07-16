var _rotation_angle         = 90;
var _maze_svgs              = $('#maze-container svg');

var _top_maze               = $("#top-maze");
var _middle_maze            = $("#middle-maze");
var _bottom_maze            = $("#bottom-maze");
var _maze_balls             = $('#maze-container a');


var rotateSphere,
    angle        = 2,
    rotate       = angle * (Math.PI / 180),
    scroll_to,
    animating = false;
canShowContent = false,
    xDown = null,
    yDown = null;

var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
var isAndroid = /Android/i.test(navigator.userAgent);

var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
var is_safari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

$('.carousel').carousel({
    interval: false
});