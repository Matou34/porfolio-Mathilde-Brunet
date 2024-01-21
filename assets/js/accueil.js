/*/----------------------------------Animation Arriver MAthilde brunet-----------------------------------/*/

anime.timeline()
.add({
    targets: '.nomPrenom',
    scale: [14,1],
    opacity: [0,1],
    easing: "easeOutCirc",
    duration: 800,
    delay: (el, i) => 800 * i
}).add({
    targets: '.nomPrenom',
    opacity: 1,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
}).add({
    targets: '.nomPrenom',
    opacity: 2,
    duration: 1200,
    easing: "easeOutExpo",
    delay: 1200
});

/*/-------------------------------------------MENU------------------------------------------------------/*/

$('.icon').click(function() {
    $(".container-T").toggleClass("d-none");
    $("#myDIV").toggleClass("d-none");
});