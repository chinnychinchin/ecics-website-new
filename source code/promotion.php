<?php
?>

<style>

    .btn-circle {
        width: 30px;
        height: 30px;
        padding: 6px 0px;
        border-radius: 15px;
        text-align: center;
        font-size: 12px;
        line-height: 1.42857;
    }

    .btn-circle.btn-xl {
        width: 70px;
        height: 70px;
        padding: 10px 16px;
        border-radius: 35px;
        font-size: 24px;
        line-height: 1.33;
    }

    .promo-img img {
        -webkit-box-shadow: 0 8px 6px -6px black;
        -moz-box-shadow: 0 8px 6px -6px black;
        box-shadow: 0 8px 6px -6px black;
        transition: transform .3s;
        padding: 5px;
    }

    .promo-img img:hover {
        cursor: pointer;
        transform: scale(1.05);
        z-index: 100;
    }

    .promo-container {
        /* this is needed for the arrow icons to appear */
        position: relative;
    }

    .promo-controls button {
        z-index: 1;
        transition: 0.3s;
    }

    .promo-controls button:hover {
        background: #011b33;
        color: white;
    }

    .promo-controls{
        width: 100%;
        position: absolute;
        display: flex;
        justify-content: space-between;
        top: 35%;
        padding: 0 7%;
    }

</style>
<h2 class="green-title text-center">PROMOTIONS</h2>

<div class="promo-container">
    <div class="container promo-carousel owl-carousel owl-theme mb-5">
        <div class="row mt-4 mb-4">
            <div class="col"></div>
            <div class="promo-img col-md-10">
                <img class="img-fluid w-100" src="images/promos/promo2.png"/>
            </div>
            <div class="col"></div>
        </div>

        <div class="row mt-4 mb-4">
            <div class="col"></div>
            <div class="promo-img col-md-10">
                <img class="img-fluid w-100" src="images/promos/promo2.png"/>
            </div>
            <div class="col"></div>
        </div>

        <div class="row mt-4 mb-4">
            <div class="col"></div>
            <div class="promo-img col-md-10">
                <img class="img-fluid w-100" src="images/promos/promo2.png"/>
            </div>
            <div class="col"></div>
        </div>

        <div class="row mt-4 mb-4">
            <div class="col"></div>
            <div class="promo-img col-md-10">
                <img class="img-fluid w-100" src="images/promos/promo2.png"/>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <div class=" promo-controls">
        <button class="promo-left-btn btn btn-default btn-circle btn-xl">
            <span class="iconify " data-icon="bx-bx-chevron-left" data-inline="false"></span>
        </button>

        <button class="promo-right-btn btn btn-default btn-circle btn-xl">
            <span class="iconify " data-icon="bx-bx-chevron-right" data-inline="false"></span>
        </button>
    </div>
</div>

