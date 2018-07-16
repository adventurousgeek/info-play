var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }



// Main elements
var canvas = document.getElementById('beam'),
    ctx = canvas.getContext('2d');
//canvas.id = 'beam';

// Vars
var beams_count = 0,
    beams = [];

// Size and set the stage
canvas.height = window.innerHeight;
canvas.width = 60;

if(window.innerWidth < 768){
    canvas.width = 30;

}

// Build the stage
//document.body.appendChild(canvas);
//document.getElementsByClassName('landing-section')[0].appendChild(canvas);



// Beams
var Beam = function () {

    /*
    ------------------------------------------
    | constructor:void (-)
    |
    | Construct.
    ------------------------------------------ */
    function Beam(init_obj) {
        _classCallCheck(this, Beam);

        // Config
        this.color = '#7f6cf5';
        this.range_x = [0, canvas.width];
        this.range_y = [canvas.height, canvas.height/6];

        // Generate random width
        this.width = function () {
            return Math.random() * (2 - 1) + 1;
        };

        // Generate a random target height
        this.height = Math.random() * (25 - 55) + 25;

        // Start X & Y
        this.start_x = Math.random() * (this.range_x[0] - this.range_x[1]) + this.range_x[1];
        this.start_y = Math.random() * canvas.height;

        // Growth & Speed
        this.growth = Math.random()  + 1;
        this.speed = Math.random() * (1 - 2) + 2;

        // Opacity
        this.opacity = 1;

        // Current settings
        this.current_x = this.start_x;
        this.current_y = this.start_y;
        this.current_h = Math.random() * 20;
        this.current_o = this.opacity;
    }

    /*
    ------------------------------------------
    | update:void (-)
    |
    | Update.
    ------------------------------------------ */


    _createClass(Beam, [{
        key: 'update',
        value: function update() {

            this.current_h > this.height ? this.current_h = this.height : this.current_h += this.growth;
            this.current_y -= this.speed;
        }

        /*
        ------------------------------------------
        | draw:void (-)
        |
        | Draw.
        ------------------------------------------ */

    }, {
        key: 'draw',
        value: function draw() {
            ctx.save();
            ctx.beginPath();
            ctx.lineWidth = this.width();
            ctx.moveTo(this.current_x, this.current_y);
            ctx.lineTo(this.current_x, this.current_y + this.current_h);
            ctx.strokeStyle = this.color;

            //ctx.shadowColor = this.color;
            //ctx.shadowBlur = 10;
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;

            ctx.stroke();
            ctx.fill();
            ctx.restore();
        }
    }]);

    return Beam;
}();

/*
------------------------------------------
| draw:void (-)
|
| Draw.
------------------------------------------ */

// Scene


var Scene = function () {

    /*
    ------------------------------------------
    | constructor:void (-)
    |
    | Construct.
    ------------------------------------------ */
    function Scene() {
        _classCallCheck(this, Scene);

        // Beams - put in a delay so randomness happens
        var beam_maker = setInterval(function () {
            if (beams.length < 25) {
                beams.push(new Beam());
                beams_count++;
            } else {
                clearInterval(beam_maker);
            }
        }, 250);

        // kick things off
        this.init();
    }

    /*
    ------------------------------------------
    | init:void (-)
    |
    | Init.
    ------------------------------------------ */


    _createClass(Scene, [{
        key: 'init',
        value: function init() {
            this.update();
        }

        /*
        ------------------------------------------
        | update:void (-)
        |
        | If we need to update anything...
        |
        | Update.
        ------------------------------------------ */

    }, {
        key: 'update',
        value: function update() {

            // Create new beams
            for (var i = beams.length; i < 200; i++) {
                beams.push(new Beam());
            }

            // Update Beams
            for (var _i2 = 0; _i2 < beams.length; _i2++) {
                if (beams[_i2].current_y < beams[_i2].range_y[1]) {
                    beams.splice(_i2, 1);
                } else {
                    beams[_i2].update();
                }
            }

            // Draw
            this.draw();
        }

        /*
        ------------------------------------------
        | draw:void (-)
        |
        | Draw.
        ------------------------------------------ */

    }, {
        key: 'draw',
        value: function draw() {
            var _this = this;

            // Clear the stage
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // Beams
            for (var i = 0; i < beams.length; i++) {
                beams[i].draw();
            }

            // Animate!
            requestAnimationFrame(function () {
                return _this.update();
            });
        }
    }]);

    return Scene;
}();

// Setup


new Scene();