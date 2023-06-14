<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>BSA Developer Test</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
        <link rel="stylesheet" href="dist/css/index.css">
    </head>
    <body>
        <?php include_once('template-parts/navigation.php'); ?>

        <main class="main-content">
            <?php include_once('template-parts/hero.php'); ?>
            <?php include_once('template-parts/openings.php'); ?>
            <?php include_once('template-parts/culture.php'); ?>
            <?php include_once('template-parts/about.php'); ?>
            <?php include_once('template-parts/testimonials.php'); ?>
        </main>

        <?php include_once('template-parts/footer.php'); ?>
        <script type="text/javascript" src="dist/js/index.js" defer></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js "></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js "></script>
        <script type="text/javascript">
            $(function() {
                $('#footer-scroll-top').click(function() {
                    $('html,body').animate({ scrollTop: 0 }, 2000);
                });
                $("a").click(function(e) {
                    var target = $(this).attr("href"); //$(this.hash);
                    console.log( target );
                    target = this.hash.slice(1);
                    if ( target.length  ){
                        e.preventDefault();
                        if ( target != "" ){
                            $('html,body').animate({ scrollTop: $("#"+target).offset().top }, 2000);
                        }
                    }else{
                        // Do nothing
                        var url = $(this).attr("href");
                        if ( url == "#" ){
                            e.preventDefault();
                            $('html,body').animate({ scrollTop: 0 }, 2000);
                        }
                    }
                });
            });
            gsap.registerPlugin("ScrollTrigger");

            gsap.utils.toArray(".hero-content").forEach((box) => {
            var tl = gsap.timeline({
                scrollTrigger: {
                trigger: box,
                toggleActions: "restart none none none",
                start: "top 95%",
                markers: false,
                },
            });

            tl.from(box, {
                duration: 3,
                // scaleX: 0,
                opacity: 0,
                transformOrigin: "left center",
            });
            });
            gsap.utils.toArray(".hero__media").forEach((media) => {
            var tl = gsap.timeline({
                scrollTrigger: {
                trigger: media,
                toggleActions: "restart none none none",
                start: "top 95%",
                markers: false,
                },
            });

            tl.from(media, {
                duration: 3,
                // scaleX: 0,
                opacity: 0,
                transformOrigin: "right center",
            });
            });
            gsap.utils.toArray(".openings-content").forEach((op_cn) => {
            var tl = gsap.timeline({
                scrollTrigger: {
                trigger: op_cn,
                toggleActions: "restart none none none",
                start: "top 95%",
                markers: false,
                },
            });

            tl.from(op_cn, {
                duration: 2,
                scaleY: 0,
                opacity: 0,
                transformOrigin: "right center",
            });
            });
            gsap.utils.toArray(".openings-list__item").forEach((op_li) => {
            var tl = gsap.timeline({
                scrollTrigger: {
                trigger: op_li,
                toggleActions: "restart none none none",
                start: "top 95%",
                markers: false,
                },
            });

            tl.from(op_li, {
                duration: 1,
                scaleY: 0,
                opacity: 0,
                transformOrigin: "right center",
            });
            });
            gsap.utils.toArray(".left-image-block").forEach((lf_im) => {
            var tl = gsap.timeline({
                scrollTrigger: {
                trigger: lf_im,
                toggleActions: "restart none none none",
                start: "top 95%",
                markers: false,
                },
            });

            tl.from(lf_im, {
                duration: 1,
                scaleX: 0,
                opacity: 0,
                transformOrigin: "right center",
            });
            });
            gsap.utils.toArray(".company-culture-block").forEach((cl_cmp) => {
            var tl = gsap.timeline({
                scrollTrigger: {
                trigger: cl_cmp,
                toggleActions: "restart none none none",
                start: "top 95%",
                markers: false,
                },
            });

            tl.from(cl_cmp, {
                duration: 1,
                scaleX: 0,
                opacity: 0,
                transformOrigin: "left center",
            });
            });
            gsap.utils.toArray(".about-content__picture").forEach((cl_cn_pic) => {
            var tl = gsap.timeline({
                scrollTrigger: {
                trigger: cl_cn_pic,
                toggleActions: "restart none none none",
                start: "top 95%",
                markers: false,
                },
            });

            tl.from(cl_cn_pic, {
                duration: 1,
                scaleY: 0,
                opacity: 0,
                transformOrigin: " center",
            });
            });
            gsap.utils.toArray(".card-item").forEach((cl_crd) => {
            var tl = gsap.timeline({
                scrollTrigger: {
                trigger: cl_crd,
                toggleActions: "restart none none none",
                start: "top 95%",
                markers: false,
                },
            });

            tl.from(cl_crd, {
                duration: 2,
                opacity: 0,
                transformOrigin: " center",
            });
            });
            gsap.utils.toArray(".testimonials-header").forEach((test_head) => {
            var tl = gsap.timeline({
                scrollTrigger: {
                trigger: test_head,
                toggleActions: "restart none none none",
                start: "top 95%",
                markers: false,
                },
            });

            tl.from(test_head, {
                duration: 2,
                // scaleY: 0,
                opacity: 0,
                transformOrigin: " center",
            });
            });
            gsap.utils.toArray(".testimonials-carousel").forEach((test_slider) => {
            var tl = gsap.timeline({
                scrollTrigger: {
                trigger: test_slider,
                toggleActions: "restart none none none",
                start: "top 95%",
                markers: false,
                },
            });

            tl.from(test_slider, {
                duration: 3,
                // scaleY: 0,
                scale:0.5,
                opacity: 0,
                transformOrigin: " center",
            });
            });
            gsap.utils.toArray(".footer").forEach((foot) => {
            var tl = gsap.timeline({
                scrollTrigger: {
                trigger: foot,
                toggleActions: "restart none none none",
                start: "top 95%",
                markers: false,
                },
            });

            tl.from(foot, {
                duration: 3,
                opacity: 0,
                transformOrigin: " center",
            });
            });
        </script>
    </body>
</html>
