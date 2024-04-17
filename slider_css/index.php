<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body>


    <div class="slider">
        <div class="owl-carousel">
            <div class="item slide1">
                <div class="caption">
                    <div class="title">slide1</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                </div>
            </div>
            <div class="item slide2">
                <div class="caption">
                    <div class="title">slide2</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </div>
                </div>
            </div>
            <div class="item slide3">
                <div class="caption">
                    <div class="title">slide3</div>
                    <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>

    <script type="text/javascript">
        $('.slider .owl-carousel').owlCarousel({
            loop: true,
            nav: true,
            dots:true,
            items:1,
            autoplay:false,
            smartSpeed:1200
        })
    </script>
</body>

</html>