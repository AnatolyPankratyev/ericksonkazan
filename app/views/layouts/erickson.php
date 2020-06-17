<!DOCTYPE html>
<html lang="ru">

<head>
    <base href="/">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?=$this->getMeta();?>

    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style-v2.css" />

</head>

<body>
<?php
$programs = \ishop\App::$app->getProperty('programs');
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?=PATH;?>">
                <img src="img/logo_kazan.png" width="80" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="<?=PATH;?>">Главная</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="main/about">О коучинге</a>
                    </li>
                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Программы
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="main/all-programs">ВСЕ ПРОГРАММЫ</a>
                            <?php if ($programs): ?>
                                <?php foreach ($programs as $program): ?>
                                    <a class="dropdown-item" href="main/<?=$program['href'];?>"><?=$program['title'];?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="main/for-business">Корпоративным клиентам</a>
                    </li>
                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Для коучей
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="main/mentoring">Менторинг</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            О нас
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="main/contacts">Контакты</a>
                            <a class="dropdown-item" href="gallery">Галерея</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="wave_top">
    <svg version="1.1" preserveAspectRatio="none" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 463.3 612 20.2" enable-background="new 0 463.3 612 20.2" xml:space="preserve">
<path opacity="1" fill="#f8f9fa" enable-background="new    " d="M612,483.5c-58.7-13.7-189.2-22.5-272.8-14.2
	C255.7,477.6,126,492.8,0,474.1c0-22.7,0-10.7,0-10.7h612V483.5z"/>
        </svg>
</div>
<div class="modal fade" id="schedule_4m" tabindex="-1" role="dialog" aria-labelledby="schedule_4mTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="schedule_4mTitle">Расписание "Наука и искусство"</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Месяц</th>
                        <th scope="col">Дата начала</th>
                        <th scope="col">Дата окончания</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="align-middle">Январь</td>
                        <td class="align-middle">23.01.2020 г.</td>
                        <td class="align-middle">26.01.2020 г.</td>
                        <td class="align-middle">
                            <button type="button" class="btn btn-primary-orange btn-to-contact">Заявка</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">Январь</td>
                        <td class="align-middle">30.01.2020 г.</td>
                        <td class="align-middle">02.02.2020 г.</td>
                        <td class="align-middle">
                            <button type="button" class="btn btn-primary-orange btn-to-contact">Заявка</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">Февраль</td>
                        <td class="align-middle">20.02.2020 г.</td>
                        <td class="align-middle">23.02.2020 г.</td>
                        <td class="align-middle">
                            <button type="button" class="btn btn-primary-orange btn-to-contact">Заявка</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">Март</td>
                        <td class="align-middle">05.03.2020 г.</td>
                        <td class="align-middle">08.03.2020 г.</td>
                        <td class="align-middle">
                            <button type="button" class="btn btn-primary-orange btn-to-contact">Заявка</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">Апрель</td>
                        <td class="align-middle">09.04.2020 г.</td>
                        <td class="align-middle">12.04.2020 г.</td>
                        <td class="align-middle">
                            <button type="button" class="btn btn-primary-orange btn-to-contact">Заявка</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>
<?=$content;?>
<div class="wave_footer mt-5"></div>
<footer class="py-4 mt-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 d-flex flex-column justify-content-around p-5 p-sm-1">
                <h4 class="mb-3">ERICKSON COACHING INTERNATIONAL</h4>
                <img src="img/logo-footer.png" alt="footer" width="50%">
                <p class="mt-4">Проводит обучающие программы в области коучинга, основанные на технологиях достижения результата и развития
            </div>
            <div class="col-sm-4 pl-5">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="<?=PATH;?>">Главная</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="main/about">О коучинге</a>
                    </li>
                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Программы
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="main/all-programs">ВСЕ ПРОГРАММЫ</a>
                            <?php if ($programs): ?>
                                <?php foreach ($programs as $program): ?>
                                    <a class="dropdown-item" href="main/<?=$program['href'];?>"><?=$program['title'];?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="main/for-business">Корпоративным клиентам</a>
                    </li>
                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Для коучей
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="main/mentoring">Менторинг</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            О нас
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="main/contacts">Контакты</a>
                            <a class="dropdown-item" href="gallery">Галерея</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4 d-flex flex-column align-items-center justify-content-around">
                <div class="d-flex align-items-center justify-content-around mt-4">
                    <a class="mx-2" target="_blank" href="https://www.instagram.com/ericksonkazan/"><div class="footer_social_media1"></div></a>
                    <a class="mx-2" target="_blank" href="https://vk.com/ericksonkazan"><div class="footer_social_media2"></div></a>
                    <a class="mx-2" target="_blank" href="https://www.facebook.com/ericksonkazanru"><div class="footer_social_media3"></div></a>
                </div>
                <p class="font_M700 text-center mt-4" style="font-size: small">Дизайн и разработка<br>
                    <a href="https://www.instagram.com/ianfox.traveller/?hl=ru" style="font-size: small">Ian Fox</a></p>
            </div>
        </div>
    </div>
</footer>






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<script>
    $('.modal-body').on('click', '.btn-to-contact', function(){
        window.location.href='main/science-and-art#contact';
    });
</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>

</html>