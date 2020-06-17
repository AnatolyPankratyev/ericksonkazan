<div class="index_first_block">
    <div class="container">
        <div class="index_first_block-IN">
            <img src="img/logo_white_circle.png" width="40%" alt="">
            <h1 class="text-white mt-4">ERICKSON COACHING INTERNATIONAL</h1>
            <p class="text-white">ПРОВОДИТ ОБУЧАЮЩИЕ ПРОГРАММЫ В ОБЛАСТИ КОУЧИНГА, ОСНОВАННЫЕ НА ТЕХНОЛОГИЯХ ДОСТИЖЕНИЯ
                РЕЗУЛЬТАТА И РАЗВИТИЯ ОСОЗНАННОСТИ.</p>
        </div>
        <div class="bd-example">
            <?php if ($carousels): ?>
                <section class="progs-car mt-5">
                    <div id="progs-car" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach ($carousels as $carousel): ?>
                                <div class="carousel-item <?php if($carousel->id == 1): ?>active<?php endif; ?>">
                                    <div class="car-in-block d-flex">
                                        <div class="car-left text-center d-flex flex-column justify-content-center align-items-center">
                                            <h2 class="mt-5"><?=$carousel->title;?></h2>
                                            <p><?=$carousel->content;?></p>
                                            <a href="main/<?=$carousel->href;?>">подробнее</a>
                                        </div>
                                        <div class="car-right" style="background-image: url('img/carousel/<?=$carousel->img;?>')"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <a class="carousel-control-prev" href="#progs-car" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#progs-car" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </section>
            <?php endif; ?>

        </div>
    </div>
</div>


<div class="index_founder mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img width="100%" src="img/marilyn-atkinson-erickson-coach-training_0.jpg" alt="marilyn">
            </div>
            <div class="col-md-8">
                <h4>Основатель:</h4>
                <h1>Мэрилин Аткинсон</h1>
                <p>Президент Международного Эриксоновского Университета. Доктор психологии, Коуч, всемирно известный
                    тренер Мэрилин Аткинсон является автором многих работ, с 1985 года ведет преподавательскую и
                    консультативную деятельность в ведущих корпорациях мира, является основателем и президентом
                    Международного Эриксоновского Университета (Канада) Президент Международного Эриксоновского
                    Университета Мэрилин Аткинсон работает в России на протяжении 16 лет. Мэрилин Аткинсон вырастила
                    несколько поколений Российских руководителей, оказала огромное влияние на развитие тренеров и
                    бизнес - образования в СНГ, на формирование понятия коучинг.</p>
            </div>
        </div>
    </div>
</div>

<div class="index_ourGoal lg_dis_none mt-5 py-5">
    <div class="container index_ourGoal_IN">
        <h1>Наша цель:</h1>
        <p>трансформировать работу в компаниях, бизнес и способствовать улучшению качества жизни, а также
            поддерживать процесс человеческого развития, что реализуется через коучинговое партнерство.</p>
    </div>
</div>


<div class="index_students mt-5 py-3">
    <div class="container">
        <h1 class="text-center">Наши студенты:</h1>
        <div class="row mt-4">
            <div class="col-sm-4 col-6 col-md-3 col-lg-2">
                <div class="index_students_IN px-1">
                    <p><img src="img/pers.png" alt="p" width="25px"><br>Предприниматели</p>
                </div>
            </div>
            <div class="col-sm-4 col-6 col-md-3 col-lg-2">
                <div class="index_students_IN px-1">
                    <p><img src="img/pers.png" alt="p" width="25px"><br>Политики</p>
                </div>
            </div>
            <div class="col-sm-4 col-6 col-md-3 col-lg-2">
                <div class="index_students_IN px-1">
                    <p><img src="img/pers.png" alt="p" width="25px"><br>Менеджеры</p>
                </div>
            </div>
            <div class="col-sm-4 col-6 col-md-3 col-lg-2">
                <div class="index_students_IN px-1">
                    <p><img src="img/pers.png" alt="p" width="25px"><br>Юристы</p>
                </div>
            </div>
            <div class="col-sm-4 col-6 col-md-3 col-lg-2">
                <div class="index_students_IN px-1">
                    <p><img src="img/pers.png" alt="p" width="25px"><br>Кадровики</p>
                </div>
            </div>
            <div class="col-sm-4 col-6 col-md-3 col-lg-2">
                <div class="index_students_IN px-1">
                    <p><img src="img/pers.png" alt="p" width="25px"><br>Тренеры</p>
                </div>
            </div>
            <div class="col-sm-4 col-6 col-md-3 col-lg-2">
                <div class="index_students_IN px-1">
                    <p><img src="img/pers.png" alt="p" width="25px"><br>Консультанты</p>
                </div>
            </div>
            <div class="col-sm-4 col-6 col-md-3 col-lg-2">
                <div class="index_students_IN px-1">
                    <p><img src="img/pers.png" alt="p" width="25px"><br>Психологи</p>
                </div>
            </div>
            <div class="col-sm-4 col-6 col-md-3 col-lg-2">
                <div class="index_students_IN px-1">
                    <p><img src="img/pers.png" alt="p" width="25px"><br>Врачи</p>
                </div>
            </div>
            <div class="col-sm-4 col-6 col-md-3 col-lg-2">
                <div class="index_students_IN px-1">
                    <p><img src="img/pers.png" alt="p" width="25px"><br>Педагоги</p>
                </div>
            </div>
        </div>
        <p>Мы обучаем коучинговым компетенциям для работы с изменениями, коучинговым навыкам в области лидерства,
            специалистов для увеличения командных результатов, коучингу в управлении предприятиями, коучинговым
            методам в управлении человеческими ресурсами, коучингу семейных отношений, а также готовим коучей к
            международной сертификации в Международной Федерации Коучинга (ICF).</p>
    </div>
</div>

<div class="index_about_ericson py-5">
    <div class="container">
        <div class="max-width_DEV mx-auto">
            <h4>Международный Эриксоновский Университет проводит обучение, тренинги, сертификационные программы, школы
                управления в 102 городах, в 85 странах на 5 континентах с 1980 года.</h4>
            <img class="my-4" src="img/atlas.jpeg" alt="atlas" width="100%">
            <hr>
            <img src="img/erickson_logo_kazan.png" alt="er_online" width="50%">
            <h5 class="mt-4">является одной из крупнейших компаний, проводящих обучение коучингу.</h5>
            <p>Наши выпускники работают в Международной Федерации Коучей, руководят крупнейшими компаниями во всем мире.
                Международный Эриксоновский Университет во всех странах присутствия ежегодно выпускает несколько тысяч
                сертифицированных коучей и тренеров.</p>
            <hr>
            <h3>ЦЕНТРАЛЬНЫЙ ОФИС МЕЖДУНАРОДНОГО ЭРИКСОНОВСКОГО УНИВЕРСИТЕТА НАХОДИТСЯ В ВАНКУВЕРЕ, КАНАДА.</h3>
            <div class="btn_orange py-2">
                <a target="_blank" href="https://erickson.edu/">на сайт erickson.edu</a>
            </div>
        </div>
    </div>
</div>
<div class="index_our_clients container mt-5">
    <h1>Наши клиенты</h1>
    <img src="img/Erickson Coaching Corporate Clients.png" alt="clents" width="100%">
</div>
<div class="pt-5"></div>

<div class="index_ourGoal sm_dis_none mt-5 py-5">
    <div class="container index_ourGoal_IN">
        <h1>Наша цель:</h1>
        <p>трансформировать работу в компаниях, бизнес и способствовать улучшению качества жизни, а также
            поддерживать процесс человеческого развития, что реализуется через коучинговое партнерство.</p>
    </div>
</div>
<div class="pt-5"></div>

<div class="index_programms mt-5">
    <div class="container">
        <h1>Программы</h1>
        <p>Мы обучаем коучинговым компетенциям для работы с изменениями, коучинговым навыкам в области лидерства,
            специалистов для увеличения командных результатов, коучингу в управлении предприятиями, коучинговым
            методам в управлении человеческими ресурсами, коучингу семейных отношений, а также готовим коучей к
            международной сертификации в Международной Федерации Коучинга (ICF).</p>
        <hr>

        <h4>
            ERICKSON COACHING INTERNATIONAL<br />
            предлагает около 20-ти авторских программ и тренингов.
        </h4>

    </div>
</div>
<div class="py-3"></div>
<div class="index_mostPopular py-5">
    <div class="container">
        <img class="my-4" src="img/erickson_logo_kazan1.png" alt="logo" width="50%">
        <h3>
            Самая популярная программа
        </h3>
        <h3>
            «НАУКА И ИСКУССТВО ТРАНСФОРМАЦИОННОГО КОУЧИНГА»
        </h3>
        <div class="btn_blue py-2">
            <a href="main/science-and-art">Описание программы</a>
        </div>
    </div>
</div>
<div class="py-3"></div>
<div class="container gifts mt-5">
    <table class="table">
        <thead>
        <tr>
            <th colspan="3">Система скидок</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>При оплате 2 модулей</td>
            <td class="text-center">5%</td>
        </tr>
        <tr>
            <td>При оплате 3 модулей</td>
            <td class="text-center">10%</td>
        </tr>
        <tr>
            <td>При оплате 4 модулей</td>
            <td class="text-center">15%</td>
        </tr>
        <tr>
            <td>При предоплате больше чем за 30 дней до начала курса</td>
            <td class="text-center">10%</td>
        </tr>
        <tr>
            <td>2 человека от одной организации</td>
            <td class="text-center">10%</td>
        </tr>
        <tr>
            <td>3 человека от одной организации</td>
            <td class="text-center">15%</td>
        </tr>
        <tr>
            <td>Федеральным клиентам во всех регионах</td>
            <td class="text-center">15%</td>
        </tr>
        <tr>
            <td>Оплата 2 спецкурсов, которые идут подряд</td>
            <td class="text-center">10%</td>
        </tr>
        <tr>
            <td>Многодетные и люди с инвалидностью</td>
            <td class="text-center">30%</td>
        </tr>
        <tr>
            <td>Золотой студент Erickson на все спец курсы после третьего</td>
            <td class="text-center">15%</td>
        </tr>
        </tbody>
    </table>
</div>
<div class="py-3"></div>
<!--CONTACT-->
<a name="contact"></a>
<div class="container-fluid mt-5">
    <div class="container contact_block border py-4">
        <div class="text-center pb-5">
            <h1 class="title_block pb-2">Оставьте заявку</h1>
        </div>
            <form action="main/send" method="post" class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="name">Ваше имя</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Введите имя" required>
                    <div class="valid-feedback">

                    </div>
                    <div class="invalid-feedback">
                        Введите пожалуйста имя!
                    </div>
                </div>
                <div class="form-group">
                    <label for="tel">Ваш телефон</label>
                    <input name="tel" type="tel" class="form-control" id="tel" placeholder="Введите телефон" required>
                    <div class="valid-feedback">

                    </div>
                    <div class="invalid-feedback">
                        Введите пожалуйста телефон!
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Ваша электронная почта</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Введите email" required>
                    <div class="valid-feedback">

                    </div>
                    <div class="invalid-feedback">
                        Введите пожалуйста email!
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Комментарий (необязательно)</label>
                    <textarea name="message" class="form-control" id="message" rows="3" placeholder="Вводите сообщение в это поле"></textarea>
                </div>
            <div class="gifts123">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-check">
                            <input name="bonus1" type="checkbox" class="form-check-input" id="gift1">
                            <label class="form-check-label" for="gift1">БОНУС 1 – Скачать книгу*<br><span>Достижение целей. Аткинсон М.</span></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-check">
                            <input name="bonus2" type="checkbox" class="form-check-input" id="gift2">
                            <label class="form-check-label" for="gift2">БОНУС 2 – 10 областей применения коучинга*<br><span>10 областей применения коучинга</span></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-check">
                            <input name="bonus3" type="checkbox" class="form-check-input" id="gift3">
                            <label class="form-check-label" for="gift3">БОНУС 3 – Коучинг на вкус.<br><span>Встреча с практикующим коучем. Вы нам вопросы, Мы вам ответы! Зарегистрируйтесь на сайте или приходите сразу к Нам.</span></label>
                        </div>
                    </div>
                </div>
            </div>
                <div class="form-group mt-4">
                    <div class="form-check">
                        <p>*при выборе подарком 1 и 2, они будут отправлены вам на указанную электронную почту</p>
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Согласие на обработку персональных данных
                        </label>
                        <div class="invalid-feedback">
                            Примите пожалуйста условия перед отправкой заявки
                        </div>
                    </div>
                </div>
            <div class="container text-center">
                <button class="btn py-2 px-5 my-2 my-sm-0 px-4" type="submit">
                    Оставить заявку
                </button>
            </div>
        </form>
    </div>
</div>
<!--END CONTACT-->
<div class="py-3"></div>
<div class="index_team mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="img/group-of-people-watching-on-laptop-1595385.jpg" width="100%" alt="team">
            </div>
            <div class="col-md-8 d-flex flex-column align-items-center justify-content-center">
                <p class="text-justify">В команде Эриксоновского Университета работают профессиональные сертифицированные коучи. Люди,
                    вдохновленные принципами Милтона Эриксона и коучингом, ориентированным на поиск решения. Наши
                    сотрудники имеют различное образование, прошли обучение коучингу и регулярно повышают
                    квалификацию.</p>
            </div>
        </div>
    </div>
</div>
<div class="py-3"></div>
<div class="index_directions mt-5">
    <div class="container">
        <h3>Направления работы</h3>
        <h2 class="font-cr">ERICKSON KAZAN</h2>
        <h5 class="pt-4">У нас вы можете выбрать:</h5>
        <div class="row">
            <div class="col-sm-6 col-md-4 mt-3">
                <div class="card" style="width: 100%;">
                    <a href="" data-toggle="modal" data-target="#exampleModalCenter">
                        <img src="img/co_1.png" class="card-img-top" alt="c1">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Индивидуальный коучинг</h5>
                        <a href="" class="btn" data-toggle="modal" data-target="#exampleModalCenter">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mt-3">
                <div class="card" style="width: 100%;">
                    <a href="" data-toggle="modal" data-target="#training_programs">
                        <img src="img/co_2.png" class="card-img-top" alt="c1">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Обучающие программы</h5>
                        <a href="main/all-programs" class="btn">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 mt-3">
                <div class="card" style="width: 100%;">
                    <a href="main/for-business">
                        <img src="img/c03.jpg" class="card-img-top" alt="c1">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Корпоративным клиентам</h5>
                        <a href="main/for-business" class="btn">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Заявка на индивидуальный коучинг</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact_block">
                    <form action="main/send" method="post" class="needs-validation" novalidate>
                        <div class="form-group">
                            <label for="name">Ваше имя</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Введите имя" required>
                            <div class="valid-feedback">

                            </div>
                            <div class="invalid-feedback">
                                Введите пожалуйста имя!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel">Ваш телефон</label>
                            <input name="tel" type="tel" class="form-control" id="tel" placeholder="Введите телефон" required>
                            <div class="valid-feedback">

                            </div>
                            <div class="invalid-feedback">
                                Введите пожалуйста телефон!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Ваша электронная почта</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Введите email" required>
                            <div class="valid-feedback">

                            </div>
                            <div class="invalid-feedback">
                                Введите пожалуйста email!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Комментарий (необязательно)</label>
                            <textarea name="message" class="form-control" id="message" rows="3" placeholder="Вводите сообщение в это поле"></textarea>
                        </div>
                        <div class="gifts123">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-check">
                                        <input name="bonus1" type="checkbox" class="form-check-input" id="gift1">
                                        <label class="form-check-label" for="gift1">БОНУС 1 – Скачать книгу<br><span>Достижение целей. Аткинсон М.</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-check">
                                        <input name="bonus2" type="checkbox" class="form-check-input" id="gift2">
                                        <label class="form-check-label" for="gift2">БОНУС 2 – 10 областей применения коучинга<br><span>10 областей применения коучинга</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-check">
                                        <input name="bonus3" type="checkbox" class="form-check-input" id="gift3">
                                        <label class="form-check-label" for="gift3">БОНУС 3 – Коучинг на вкус.<br><span>Встреча с практикующим коучем. Вы нам вопросы, Мы вам ответы! Зарегистрируйтесь на сайте или приходите сразу к Нам.</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Согласие на обработку персональных данных
                                </label>
                                <div class="invalid-feedback">
                                    Примите пожалуйста условия перед отправкой заявки
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="container text-center">
                    <div class="contact_block">
                        <button class="btn py-2 px-5 my-2 my-sm-0 px-4" type="submit">
                            Оставить заявку
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="training_programs" tabindex="-1" role="dialog" aria-labelledby="training_programsTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="training_programsTitle">Обучающие программы</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="row">
                    <div class="col-6">
                        <div class="but_l">
                            <a href="main/science-and-art">
                                <h5>4-х модульная программа</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="but_l">
                            <a href="main/management-coaching">
                                <h5>Управленческий коучинг</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="modal-open-start" tabindex="-1" role="dialog" aria-labelledby="modal-open-start-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-open-start-title">Успей зарегистрироваться!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p>Успей зарегистрироваться на 1 Модуль программы</p>
                <h3>Наука и Исскуство Трансформационного Коучинга</h3>
                <p>Старт программы 18 июня в online формате.</p>
                <h4>Специальная цена 31 500₽</h4>
                <div class="container text-center mt-4">
                    <div class="contact_block">
                        <button class="btn py-2 px-5 my-2 my-sm-0 px-4">
                            <a class="button-a" href="main/science-and-art#contact">Оставить заявку</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>