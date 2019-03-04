//navigation bar and toggle burger button
var btn = $('.btn'),
    tglnav = $(".toggle-navbar"),
    navbar = $('nav'),
    nav_li = $('.nav-li');
btn.click(function () {
    btn.toggleClass("show");
    tglnav.toggleClass("column");
    navbar.toggleClass("height-220");
    nav_li.toggleClass('w-100');
});
window.onresize = function() {
    if ($(window).width() > 720 && navbar.hasClass("height-220")) {
        btn.removeClass("show");
        tglnav.removeClass("column");
        navbar.removeClass("height-220");
        nav_li.removeClass('w-100');
    }
};


//typing effect
class TypeWriter {
    constructor(txtElement, words, wait = 3000) {
        this.txtElement = txtElement;
        this.words = words;
        this.txt = '';
        this.wordIndex = 0;
        this.wait = parseInt(wait, 10);
        this.type();
        this.isDeleting = false;
    }

    type() {
        // Current index of word
        const current = this.wordIndex % this.words.length;
        // Get full text of current word
        const fullTxt = this.words[current];

        // Check if deleting
        if (this.isDeleting) {
            // Remove char
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            // Add char
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        // Insert txt into element
        this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

        // Initial Type Speed
        let typeSpeed = 300;

        if (this.isDeleting) {
            typeSpeed /= 2;
        }

        // If word is complete
        if (!this.isDeleting && this.txt === fullTxt) {
            // Make pause at end
            typeSpeed = this.wait;
            // Set delete to true
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            // Move to next word
            this.wordIndex++;
            // Pause before start typing
            typeSpeed = 500;
        }

        setTimeout(() => this.type(), typeSpeed);
    }
}

        document.addEventListener('DOMContentLoaded', init);
        document.addEventListener('DOMContentLoaded', init1);
        document.addEventListener('DOMContentLoaded', init2);


// Init On DOM Load


// Init App
function init() {
    const txtElement = document.querySelector('.txt-type');
    const words = JSON.parse(txtElement.getAttribute('data-words'));
    const wait = txtElement.getAttribute('data-wait');
    // Init TypeWriter
    new TypeWriter(txtElement, words, wait);
}

function init1() {
    const txtElement = document.querySelector('.txt-type1');
    const words = JSON.parse(txtElement.getAttribute('data-words1'));
    const wait = txtElement.getAttribute('data-wait1');
    // Init TypeWriter
    new TypeWriter(txtElement, words, wait);
}

function init2() {
    const txtElement = document.querySelector('.txt-type2');
    const words = JSON.parse(txtElement.getAttribute('data-words2'));
    const wait = txtElement.getAttribute('data-wait2');
    // Init TypeWriter
    new TypeWriter(txtElement, words, wait);
}

