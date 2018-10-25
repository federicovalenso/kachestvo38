
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

window.menuToggle = function() {
    let x = document.getElementById("nav");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
window.w3_open = function() {
    document.getElementById("adminSidebar").style.width = "20%";
    document.getElementById("adminSidebar").style.display = "block";
    document.getElementById("openNav").style.display = 'none';
}
window.w3_close = function() {
    document.getElementById("adminSidebar").style.display = "none";
    document.getElementById("openNav").style.display = "inline-block";
}
window.Vue = require('vue');
Vue.component('slider-component', require('./components/SliderComponent.vue'));

const app = new Vue({
    el: "#app"
});