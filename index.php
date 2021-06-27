<?php
require_once 'views/includes/header.php';
?>
<div class="main__content">
    <div id="homepage__carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#homepage__carousel" data-slide-to="0" class="active"></li>
            <li data-target="#homepage__carousel" data-slide-to="1"></li>
            <li data-target="#homepage__carousel" data-slide-to="2"></li>
            <li data-target="#homepage__carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/assets/images/image_1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/assets/images/image_2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./assets/images/image_3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./assets/images/image_4.jpg" alt="Fourth slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#homepage__carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#homepage__carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
    <section class="index-page-destinations grid-view p-3">
        <!--    grid item 1-->
        <div class="grid-item">
            <div class="content__holder">
                <img src="/assets/images/index-countries/italy.jpg" alt="Italy">
                <p class="absolute-item">Италия</p>
            </div>
        </div>

        <!--    grid item 2-->
        <div class="grid-item">
            <div class="content__holder">
                <img src="/assets/images/index-countries/spain.jpg" alt="Spain">
                <p class="absolute-item">Испания</p>
            </div>
        </div>

        <!--    grid item 3-->
        <div class="grid-item">
            <div class="content__holder">
                <img src="/assets/images/index-countries/egypt.jpg" alt="Egypt">
                <p class="absolute-item">Египет</p>
            </div>
        </div>

        <!--    grid item 4-->
        <div class="grid-item">
            <div class="content__holder">
                <img src="/assets/images/index-countries/maroco.jpg" alt="Maroco">
                <p class="absolute-item">Мароко</p>
            </div>
        </div>

        <!--    grid item 5-->
        <div class="grid-item">
            <div class="content__holder">
                <img src="/assets/images/index-countries/tunis.jpg" alt="Tunis">
                <p class="absolute-item">Тунис</p>
            </div>
        </div>

        <!--    grid item 6-->
        <div class="grid-item">
            <div class="content__holder">
                <img src="/assets/images/index-countries/exotic.jpg" alt="Exotic">
                <p class="absolute-item">Екзотика</p>
            </div>
        </div>
    </section>
</div>
<?php
require_once 'views/includes/footer.php'
?>
