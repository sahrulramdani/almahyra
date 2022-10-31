<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>

    <title>Prawira Umroh Murah</title>

    <!-- Bootstrap Personal CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Online CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!-- Personal CSS Files -->
    <link rel="stylesheet" href="/css/homepage/fontawesome.css">
    <link rel="stylesheet" href="/css/homepage/templatemo-onix-digital.css">
    <link rel="stylesheet" href="/css/homepage/animated.css">
    <link rel="stylesheet" href="/css/homepage/owl.css">
    <link rel="stylesheet" href="/css/homepage/homepage.css">
    <link href="/css/homepage/templatemo-nomad-force.css" rel="stylesheet">
</head>

<body>
    <!-- Loading Start -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <div class="content">
        <?= $this->renderSection('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/js/homepage/owl-carousel.js"></script>
    <script src="/js/homepage/animation.js"></script>
    <script src="/js/homepage/imagesloaded.js"></script>
    <script src="/js/homepage/custom.js"></script>

    <!-- Font Awesome 4 -->
    <script src="https://kit.fontawesome.com/347e750e98.js" crossorigin="anonymous"></script>

    <!-- Online Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

<script>
// Acc
$(document).on("click", ".naccs .menu div", function() {
    var numberIndex = $(this).index();

    if (!$(this).is("active")) {
        $(".naccs .menu div").removeClass("active");
        $(".naccs ul li").removeClass("active");

        $(this).addClass("active");
        $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

        var listItemHeight = $(".naccs ul")
            .find("li:eq(" + numberIndex + ")")
            .innerHeight();
        $(".naccs ul").height(listItemHeight + "px");
    }
});
</script>
</body>

</html>