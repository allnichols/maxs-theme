//setting the height and width of the canvas
var canvas = document.querySelector('canvas');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

//C stands for context
var c = canvas.getContext('2d');

//Color Array
var colorArray = [
    '#3D013C',
    '#60487F',
    '#7888BF',
    '#68C2E5',
    'white'
  ]

//Random color function
function randomColor(colors){
    return colors[Math.floor(Math.random() * colors.length)];
}


function Circle(x, y, dx, dy, radius, color){
    this.x = x;
    this.y = y;
    this.dx = dx;
    this.dy = dy;
    this.radius = radius;
    this.minRadius = radius;
    this.color = color;
    this.radians = Math.random() * Math.PI * 2;
    this.velocity = Math.random() * .01;
    this.distanceFromCenter = (Math.random() * 100) * 10;

    //move the circle
    this.update = () =>{
    this.radians += this.velocity;

    //circular motion
    this.x = x + Math.cos( this.radians ) * this.distanceFromCenter;
    this.y = y + Math.sin( this.radians ) * this.distanceFromCenter;

    //draw circle
    this.draw();
    }
}


Circle.prototype.draw = function(){
    c.beginPath();
    c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
    c.fillStyle = this.color;
    c.fill();
}


var particleArray = [];

function init(){
    for(let i = 0; i < 200; i++){
        var x =  innerWidth / 2;
        var y =  innerHeight / 2;
        var dx = 10;
        var dy = 10;
        var radius = 2.5;
        var color = randomColor( colorArray )

        particleArray.push( new Circle(x, y, dx, dy, radius, color) );

    }
}

function animate(){
    requestAnimationFrame(animate);
    c.clearRect(0, 0, innerWidth, innerHeight);

    for(let i = 0; i < particleArray.length; i++){
        particleArray[i].update();
    }
}

init();
animate();
