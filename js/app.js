/* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */

/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */
/*
particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.js loaded - callback');
});
*/

/* Otherwise just put the config content (json): */

particlesJS('particles-js',
  
{
  "particles": {
    "number": {
      "value": 90,
      "density": {
        "enable": true,
        "value_area": 900
      }
    },
    "color": {
      "value": "#fa0000"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
 "color": "#ff0000"
      },
      "polygon": {
        "nb_sides": 6
      },
      "image": {
        "src": "",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 1,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 3.979178340276591,
        "opacity_min": 0.1,
        "sync": true
      }
    },
    "size": {
      "value": 2,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 200,
      "color": "#ffffff",
      "opacity": 0.2,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 5,
//     "direction": "none",
       "direction": "top",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
         "mode": "repulse"
      },
      "onclick": {
        "enable": true,
        "mode": "bubble"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 267.9854800594439,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 316.71011279752463,
        "size": 20.301930307533627,
        "duration": 2.1926084732136317,
        "opacity": 0.2679854800594439,
        "speed": 3
      },
      "repulse": {
        "distance": 230.53621458328246,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
}
);