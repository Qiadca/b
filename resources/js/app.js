require('./bootstrap');

<script>
$(document).ready(function(){
    var owl = $(".slide-carousel");
    owl.owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        nav: true,
        dots: true
    });

    // Custom Navigation Events
    $(".next-slide").click(function() {
        owl.trigger('next.owl.carousel');
    });
    $(".prev-slide").click(function() {
        owl.trigger('prev.owl.carousel');
    });
});
</script>
