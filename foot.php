<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/wow.js"></script>
<!-- <script src="https://latesttrack.co.in/assets/js/jquery.mCustomScrollbar.concat.min.js"></script> -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
    $(document).ready(function() {
        $("#message").hide();
        $('#banner-slider').owlCarousel({
            autoplay: true,
            autoplayTimeout: 7999,
            //animateOut: 'fadeOut',
            /*smartSpeed: 100, */
            margin: 0,
            singleItem: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    dot: true,
                    nav: false
                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: true,
                    margin: 0
                }
            }
        });
        $('#product-slider').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            stagePadding: 50,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 30,
                    loop: true,
                    margin: 30,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: true,
                    stagePadding: 30,
                    loop: true,
                    margin: 30

                },
                1000: {
                    items: 3,
                    nav: true,
                    stagePadding: 30,
                    loop: true,
                    margin: 30
                }
            }
        });
        $('#testimonials-slider').owlCarousel({
            loop: true,
            margin: 10,
            autoplayTimeout: 7996,
            animateOut: 'fadeOut',
            autoplay: true,
            responsiveClass: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: true,
                    margin: 10
                }
            }
        });

        $('.gps-list li').on('mouseover', function() {
            desc = $(this).attr('data-desc'); //get the description
            title = $(this).attr('data-title'); //get the description
            $('#content').text(desc);
            $('#content-title').text(title);
        });
    });
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        var objectSelect = $("#sticky-sidebar-stuff");
        var objectPosition = objectSelect.offset().top;
        var objectSelect2 = $("#sticky-sidebar-stuff2");
        var objectPosition2 = objectSelect2.offset().top;
        if (scroll > objectPosition) {
            $(".benifits-text-left").addClass("change");
        } else {
            $(".benifits-text-left").removeClass("change");
        }
        if (scroll > objectPosition2) {
            $(".benifits-text-left").removeClass("change");
        }
    });
</script>

<script>
    wow = new WOW({
        animateClass: 'animated',
        offset: 100,
        callback: function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
    });
    wow.init();
    document.getElementById('moar').onclick = function() {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
    };

    if ($(window).width() < 1024) {
        $('.Request-btn  a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                    return false;
                }
            }
        });
    } else {
        $('.Request-btn  a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 150
                    }, 1000);
                    return false;
                }
            }
        });
    }
</script>
<script>
    $(function() {
        $("#FooterMessage").on('submit', function(e) {
            e.preventDefault();
            var FooterMessage = $(this);
            $.ajax({
                url: FooterMessage.attr('action'),
                type: 'post',
                data: FooterMessage.serialize(),
                success: function(response) {
                    // console.log(response);
                    if (response.status == 'success') {
                        $("#FooterMessage").hide();
                        $("#message").show();
                    }

                    if (response.status == 'error') {
                        if (response.error) {
                            if (response.name_error != '') {
                                $('#name_error').html(response.name_error);
                            } else {
                                $('#name_error').html('');
                            }

                            if (response.email_error != '') {
                                $('#email_error').html(response.email_error);
                            } else {
                                $('#email_error').html('');
                            }

                            if (response.mob_error != '') {
                                $('#mob_error').html(response.mob_error);
                            } else {
                                $('#mob_error').html('');
                            }

                            if (response.type_error != '') {
                                $('#type_error').html(response.type_error);
                            } else {
                                $('#type_error').html('');
                            }

                            if (response.message_error != '') {
                                $('#message_error').html(response.message_error);
                            } else {
                                $('#message_error').html('');
                            }
                        }
                    }
                },
                error: function() {
                    alert('Could not send message');
                }
            });
        });
    });
</script>