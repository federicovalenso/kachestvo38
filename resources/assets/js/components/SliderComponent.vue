<style>
    .slide-caption {
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        background-color: rgba(255,255,255,0.7);
        text-align: center;
        font-weight: bold;
        font-size: 2em;
        color:indigo;
    }
    @media screen and (max-width: 600px) {
        .slide-caption {
            font-size: 1em;
        }
    }
    @media screen and (max-width: 320px) {
        .slide-caption {
            font-size: 0.7em;
        }
    }
    .arrow-button {
        cursor: pointer;
    }
</style>

<template>
    <div class="w3-content w3-display-container">
        <div class="w3-display-container w3-animate-fading mySlides" v-for="slider in sliders">
            <img v-bind:src="slider.filename" style="width:100%; max-height:420px;">
            <div class="w3-container w3-padding-16 slide-caption">
                <span>{{slider.caption}}</span>
            </div>
        </div>
        <div class="w3-center w3-large w3-display-middle" style="width:100%">
            <div class="w3-left arrow-button" @click="plusDivs(-1)">&#10094;</div>
            <div class="w3-right arrow-button" @click="plusDivs(1)">&#10095;</div>
        </div>
    </div>    
</template>

<script>
    export default {
        props: [
            'sliders'
        ],
        data : function() {
            return {
                slideIndex : 0,
                timerId : -1,
                timerInterval : 5000
            }
        },
        mounted() {
            this.carousel();
        },
        methods : {
            carousel : function() {
                let x = document.getElementsByClassName("mySlides");
                for (let i = 0; i < x.length; i++) {
                    x[i].style.display = "none"; 
                }
                this.slideIndex++;
                if (this.slideIndex > x.length) {
                    this.slideIndex = 1;
                } 
                x[this.slideIndex-1].style.display = "block"; 
                this.timerId = setTimeout(this.carousel, this.timerInterval);
            },
            showDivs : function(idx) {
                clearTimeout(this.timerId);
                let x = document.getElementsByClassName("mySlides");
                if (idx > x.length) {
                    this.slideIndex = 1;
                } else if (idx < 1) {
                    this.slideIndex = x.length;
                }
                for (let i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[this.slideIndex-1].style.display = "block";
                this.timerId = setTimeout(this.carousel, this.timerInterval);
            },
            plusDivs : function(direction) {
                this.showDivs(this.slideIndex += direction);
            }
        }
    }
</script>
