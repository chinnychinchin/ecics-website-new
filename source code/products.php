<!-- Products Section -->
<?php?>

<style>

    .icon-box {
        box-shadow: 0 1px 6px rgba(32, 33, 36, 0.28) !important;
        border-radius: 8px !important;
        border: 1px hidden !important;
        background: white;
        width: 175px;
        transition: .3s;
    }

    .icon-box:hover {
        -ms-transform: scale(1.1); /* IE 9 */
        -webkit-transform: scale(1.1); /* Safari 3-8 */
        transform: scale(1.1);
        /*color: orange;*/
        z-index: 1;
    }

    .banner-img {
        padding-right: 0;
    }


    .banner-text-container {
        background: white;
        /*background: #003349;*/
        /*background-image: linear-gradient(#f24036, #fb653c);*/
    }

    .banner-text {
        margin: 3%;
    }

    .orange-btn {
        background: #00adef;
        /*background: #b6a48c;*/
        /*background: #004687;*/
    }

    .orange-btn:hover {
        background: #DF622C;
        /*background: #a28b6e;*/
        /*background: #011b33;*/
    }

    @media screen and (min-width: 1025px) {
        .banner-text {
            text-align: center;
            height: 120px;
            margin-top: 4em;
        }
        .banner-text h3 {
            font-size: 2em;
        }

        .banner-text .lead {
            font-size: 1.3em;
        }

        .banner-text a {
            font-size: 1em;
        }

        .icon-box {
            width: 15%;
        }

    }

    @media screen and (max-width: 1024px) {
        .banner-text {
            text-align: center;
            height: 120px;
            margin-top: 3em;
        }
        .banner-text h3 {
            font-size: 1.9em;
        }

        .banner-text .lead {
            font-size: 1.4em;
        }

        .banner-text a {
            font-size: 12px;
        }

        .icon-box {
            width: 15%;
        }
    }

    @media screen and (max-width: 768px) {
        .banner-text {
            text-align: center;
            height: 120px;
            margin-top: 2em;
        }

        .banner-text h3 {
            font-size: 1.5em;
        }

        .banner-text .lead {
            font-size: 14px;
        }

        .banner-text a {
            font-size: 9px;
        }

        .icon-box{
            width: 30%;
        }

        .icon-box p {
            font-size: 9px;
            font-weight: normal;
        }
    }

    @media screen and (max-width: 576px) {
        .banner-text {
            text-align: center;
            height: 120px;
            margin-top: 2;
        }

        .banner-text h3 {
            font-size: 1.5em;
        }

        .banner-text .lead {
            font-size: 15px;
        }

        .banner-text a {
            font-size: 11px;
        }
    }

    @media screen and (max-width: 375px) {
        .banner-text {
            height: 125px;
        }

        .banner-text h3 {
            font-size: 1em;
        }
    }

    @media screen and (max-width: 325px) {
        .banner-text {
            height: 130px;
        }

        .banner-text h3 {
            font-size: 15px;
        }

        .banner-text .lead {
            font-size: 11px;
        }

        .banner-text a {
            font-size: 9px;
        }
    }

</style>

<div class="banner-carousel owl-carousel owl-theme mt-5">
 
    <div class="banners row">
        <div class="banner-img col-md-8">
            <img class="img-responsive d-block" src="images\banners\1Singapore.png"/>
        </div>
        <div class="banner-text-container col text-white p-3">
            <div class="banner-text">
                <h3 style="color: black !important">Our Company</h3>
                <div class="lead" style="color: black !important">
                    A homegrown insurer that has its beginnings in Singapore since 1975
                </div>
                <a class="btn orange-btn text-white bg-beige mt-3" href="#" role="button"><strong>Find out more</strong></a>
            </div>
        </div>
    </div>

    <div class="banners row">
        <div class="banner-img col-md-8">
            <img class="img-responsive d-block" src="images\banners\car.jpg"/>
        </div>
        <div class="banner-text-container col text-white p-3">
            <div class="banner-text">
                <h3 style="color: black !important">Private Motor Car</h3>
                <div class="lead" style="color: black !important">
                    Drive With A Peace Of Mind   
                </div>
                <a class="btn orange-btn text-white bg-beige mt-3" href="#" role="button"><strong>Find out more</strong></a>
            </div>
        </div>
    </div>

    <div class="banners row">
        <div class="banner-img col-md-8">
            <img class="img-responsive d-block" src="images\banners\home.jpg"/>
        </div>
        <div class="banner-text-container col text-white p-3">
            <div class="banner-text">
                <h3 style="color: black !important">Home</h3>
                <div class="lead" style="color: black !important">
                    Protect Your Safe Haven 
                </div>
                <a class="btn orange-btn text-white bg-beige mt-3" href="#" role="button"><strong>Find out more</strong></a>
            </div>
        </div>
    </div>

    <div class="banners row">
        <div class="banner-img col-md-8">
            <img class="img-responsive d-block" src="images\banners\4Maid.png"/>
        </div>
        <div class="banner-text-container col text-white p-3">
            <div class="banner-text">
                <h3 style="color: black !important">Maid<em>Assure</em></h3>
                <div class="lead" style="color: black !important">
                    High Coverge Maid Insurance At Low Cost
                </div>
                <a class="btn orange-btn text-white bg-beige mt-3" href="#" role="button"><strong>Find out more</strong></a>
            </div>
        </div>
    </div>


   
</div>

<div class="container mt-4 mb-5" id="products">

    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="text-center">I Want A Quote For</h2>
        </div>
        
    </div>

    <div class="row justify-content-around icons">
        <div class="col-5 col-sm-2 icon-box mt-4 mb-0 pt-3">
            <img class="img-fluid mx-auto d-block w-50" src="images/icons/car.png">
            <p class="small font-weight-bold text-center">Car Insurance</p>
        </div>
        <div class="col-5 col-sm-2 icon-box mt-4 mb-0 pt-3">
            <img class="img-fluid mx-auto d-block w-50" src="images/icons/home.png">
            <p class="small font-weight-bold text-center">Home Insurance</p>
        </div>
        <div class="col-5 col-sm-2 icon-box mt-4 mb-0 pt-3">
            <img class="img-fluid mx-auto d-block w-50" src="images/icons/maid.png">
            <p class="small font-weight-bold text-center">Maid Insurance</p>
        </div>
        <div class="col-5 col-sm-2 icon-box mt-4 mb-0 pt-3">
            <img class="img-fluid mx-auto d-block w-50" src="images/icons/injury.png">
            <p class="small font-weight-bold text-center">Personal Accident</p>
        </div>
        
    </div>
</div>

<!--<div class="container mb-5" id="products">-->
<!--    <div class="row justify-content-around icons">-->
<!--        <div class="icon-box mt-5 mb-0 pt-3">-->
<!--            <img class="img-fluid mx-auto d-block w-50" src="images/icons/car1.png">-->
<!--            <p class="small font-weight-bold text-center">Car Insurance</p>-->
<!--        </div>-->
<!--        <div class="icon-box mt-5 mb-0 pt-3">-->
<!--            <img class="img-fluid mx-auto d-block w-50" src="images/icons/home1.png">-->
<!--            <p class="small font-weight-bold text-center">Home Insurance</p>-->
<!--        </div>-->
<!--        <div class="icon-box mt-5 mb-0 pt-3">-->
<!--            <img class="img-fluid mx-auto d-block w-50" src="images/icons/maid1.png">-->
<!--            <p class="small font-weight-bold text-center">Maid Insurance</p>-->
<!--        </div>-->
<!--        <div class="icon-box mt-5 mb-0 pt-3">-->
<!--            <img class="img-fluid mx-auto d-block w-50" src="images/icons/bike1.png">-->
<!--            <p class="small font-weight-bold text-center">Motorcycle Insurance</p>-->
<!--        </div>-->
<!--        <div class="icon-box mt-5 mb-0 pt-3">-->
<!--            <img class="img-fluid mx-auto d-block w-50" src="images/icons/injury1.png">-->
<!--            <p class="small font-weight-bold text-center">Personal Accident</p>-->
<!--        </div>-->
<!--        <div class="icon-box mt-5 mb-0 pt-3">-->
<!--            <img class="img-fluid mx-auto d-block w-50" src="images/icons/travel1.png">-->
<!--            <p class="small font-weight-bold text-center">Travel Insurance</p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->



