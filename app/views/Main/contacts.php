<section class="contacts">
    <div class="management_top">
        <div class="px-2 text-center container h-100 d-flex flex-column justify-content-center">
            <h1>Наши контакты</h1>
        </div>
    </div>
<!--    <div class="container mt-5">-->
<!--        <div class="row">-->
<!--            <div class="col-md-6">-->
<!--                <div class="image-person">-->
<!--                    <img src="img/tz-1.jpeg" alt="tz">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6 d-flex align-items-center">-->
<!--                <div class="about-person">-->
<!--                    <h4 class="font-weight-bold">Татьяна Зарипова</h4>-->
<!--                    <p class="m-0">Эксперт, кандидат юридических наук, доцент. Руководитель сети "Тренинги прорывных компетенций", SoflSkills. Тренер-эксперт прорывных компетенций. Разработка и проведение образовательных проектов и продуктов, квестов, деловых игр, тренингов, модератор, фасилитатор.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <section class="c-persons mt-5">
        <div class="container">
            <h1>Наши лица</h1>
            <div class="row">
                <?php if(!empty($persons)): ?>
                <?php foreach ($persons as $person): ?>
                    <div class="col-md-4 mt-3">
                        <div class="persons-img" style="background-image: url('img/persons/<?=$person->img;?>')"></div>
                        <h5 class="m-0"><?=$person->name_rus;?> / <?=$person->name_eng;?></h5>
                        <p class="m-0"><?=$person->content;?></p>
                        <h6 class="m-0"><?=$person->phone;?></h6>
                        <h6 class="m-0"><?=$person->email;?></h6>
                    </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <div class="cont-1 container mt-5">
        <h3>Реквизиты</h3>
        <p>Компания: Индивидуальный предприниматель Зарипов Владимир Владимирович</p>
        <p>ИНН  : 166106291714</p>
        <p>Счёт (₽): 40802810507500008988</p>
        <p>Банк: ТОЧКА ПАО БАНКА "ФК ОТКРЫТИЕ"</p>
        <p>БИК: 044525999</p>
        <p>Город: Москва</p>
        <p>Корр. счёт: 30101810845250000999</p>
    </div>
    <div class="cont-1 container mt-5">
        <h3>Requisites</h3>
        <p>Field 59. Beneficiary customer: IP Zaripov Vladimir Vladimirovich</p>
        <p>Address: ul 2-YA STARO-ARAKCHINSKAYA, DOM 41V, KAZAN, RUSSIA</p>
        <p>INN: 166106291714</p>
        <p>Account number: 40802810507500008988</p>
        <p>Field 57. Beneficiary bank: BANK OTKRITIE FINANCIAL CORPORATION (PUBLIC JOINT-STOCK COMPANY) (FORMERLY KHANTY-MANSIYSK BANK OTKRITIE) (TOCHKA BRANCH)</p>
        <p>City, country: STAROKACHALOVSKAYA ST. 1/2, MOSCOW, RUSSIA, 117216</p>
        <p>Bank identifier code: 044525999</p>
        <p>Correspondent account: 30101810845250000999</p>
        <p>SWIFT: RUDLRUM1BNL</p>
    </div>
    <div class="cont-1 container mt-5">
        <h3>Если хотите задать вопрос</h3>
        <h5>можете написать</h5>
        <h3 class="font_M700">questions@ericksonkazan.ru</h3>
    </div>
    <div class="cont-2 container mt-5">
        <h5>Телефон для связи</h5>
        <h3 class="font_M700">+7 917 390-89-86</h3>
    </div>
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
                <div class="container text-center">
                    <button class="btn py-2 px-5 my-2 my-sm-0 px-4" type="submit">
                        Оставить заявку
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!--END CONTACT-->
</section>