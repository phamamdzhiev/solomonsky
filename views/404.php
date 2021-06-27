<?php
$uri = $_SERVER['REQUEST_URI'];
$trimed = trim($uri, '/');
$exploded = explode('/', $trimed);

require_once 'views/includes/header.php'
?>


<div class="container p-3" style="min-height: 70vh">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template text-center my-5">
                <h1 class="text-dark my-2">
                    Оопс!</h1>
                <h2 class="text-dark my-3">
                    404 Грешка</h2>
                <div class="error-details">
                    Съжаляваме, тази страница не съществува...  :(
                </div>
                <div class="error-actions my-5">
                    <a href="/" class="btn btn-warning btn-lg mx-3 text-light">
                        Начало
                    </a>
                    <a href="/contacts" class="btn btn-info btn-lg mx-3">
                        Контакти
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

require_once 'views/includes/footer.php'

?>
