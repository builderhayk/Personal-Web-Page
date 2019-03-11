<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="scripts/script.js"></script>
<script src="scripts/swiper.min.js"></script>
<script src="scripts/parallax.min.js"></script>
<script src="scripts/wow.min.js"></script>
<script>
    //heading swiper
    var swiper = new Swiper('.swiper-container', {
        autoplay: {
            delay: 10000,
            disableOnInteraction: false
        }
    });
    //parallax section
    $('.parallax-window').parallax(
        {
            // imageSrc: '/path/to/image.jpg',
            naturalWidth: '50%',
            position: 'center center'
        });
    //Services swipers
    // start of navbar script
    $(window).on('scroll', function () {
        if ($(window).scrollTop()) {
            $('nav').addClass('black');
            $('.nav-link').addClass('black');
        } else {
            $('nav').removeClass('black');
            $('.nav-link').removeClass('black');
        }
    });
    //end of navbar script
    //start of wowjs script
    new WOW().init();
    $(document).ready(function () {
        $("a[href^='#']").on("click", function (e) {
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top - 50
            }, 777);
            e.preventDefault();
            return false;
        });
    });
    // contact me date script
    document.getElementById('send').addEventListener('click', function () {
        d = new Date();
        p = new Date(d.getTime() + 1 * 86400000);
        monthA = '01,02,03,04,05,06,07,08,09,10,11,12'.split(',');
        document.getElementById("date").value = p.getDate() - 1 + '.' + monthA[p.getMonth()] + '.' + p.getFullYear();
    });
</script>
</body>
</html>