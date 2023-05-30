@extends('main')
@section('page_title')
    {{ "Услуги" }}
@endsection
@section('content')
    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="text-white display-4 fw-bold">МЫ ПРЕДОСТОВЛЯЕМ СЛЕДУЮЩИЕ УСЛУГИ</h1>
    </div>

    <br>

    <div class="container py-4 p-5 mb-5 text-white bg-dark rounded-4">
        <div class="container">
            <div class="row gx-2">
                <div class="col">
                    <p class="text-white display-5 fw-bold px-4 text-center display-6 bg-black rounded-4 shadow-lg">Охрана объектов</p><br>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row gx-2">
                <div class="col-1"></div>
                <div class="col fs-5 p-1">
                    <p class="text-justify px-1">
                        Охрана объектов включает в себя:
                    </p>

                    <ul class="px-1 text-justify">
                        <li> организацию контрольно-пропускного режима на предприятии; </li>
                        <li> пресечение попыток несанкционированного доступа посторонних лиц; </li>
                        <li> обеспечение сохранности собственности  предприятия; </li>
                        <li>  недопущение несанкционированного выноса ТМЦ; </li>
                        <li> патрулирование периметра территории; </li>
                        <li> поддержание общественного порядка на охраняемой территории; </li>
                        <li> визуальный мониторинг объектов 24 часа в сутки. </li>
                    </ul>
                </div>

                <div class="col pt-5">
                    <img class="img-fluid ms-5 rounded-4 shadow-lg mb-4" src="{{ asset('/serv1.png') }}" alt="This is logo" width="465"/>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        <div class="container">
            <div class="row gx-2">
                <div class="col"></div>
                <div class="col pt-2 my-3 text-center">
                    <a href="">
                        <a href="/services/moreInfoServicesOne">
                            <button onclick = "btnClickColor(this);" class="btn btn-outline-light btn-lg px-4 display-4 fs-4 fw-bold">
                                Узнать подробнее
                            </button>
                        </a>
                    </a>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>

    <div class="container py-4 p-5 mb-5 text-white bg-dark rounded-4">
        <div class="container">
            <div class="row gx-2">
                <div class="col">
                    <p class="text-white display-5 fw-bold px-4 text-center display-6 bg-black rounded-4 shadow-lg">Личная охрана</p><br>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row gx-2">
                <div class="col-1"></div>
                <div class="col fs-5 p-1">

                    <dl class="px-1 text-justify" style="text-align: justify;">
                        <dt>
                            Личная охрана – это комплекс действий по предотвращению негативных воздействий на охраняемое лицо.
                            Личную охрану обеспечивают хорошо подготовленные, физически крепкие телохранители, прошедшие строгий отбор.
                            В основу работы заложен принцип предотвращения угрозы.
                            По взаимному соглашению сторон осуществляется постоянное взаимодействие сотрудников личной охраны с группой быстрого реагирования.
                            Все охранники-телохранители обучены боевым видам самообороны и владению оружием.
                            Профессиональный охранник — телохранитель обеспечивает охрану клиента при всех его перемещениях.
                        </dt>
                    </dl>
                </div>

                <div class="col pt-2">
                    <img class="img-fluid ms-5 rounded-4 shadow-lg mb-4" src="{{ asset('/serv2.png') }}" alt="This is logo" width="480"/>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        <div class="container">
            <div class="row gx-2">
                <div class="col"></div>
                <div class="col pt-2 my-3 text-center">
                    <a href="">
                        <a href="/services/moreInfoServicesTwo">
                            <button onclick = "btnClickColor(this)" class="btn btn-outline-light btn-lg px-4 display-4 fs-4 fw-bold">
                                Узнать подробнее
                            </button>
                        </a>
                    </a>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>

    <div class="container py-4 p-5 mb-5 text-white bg-dark rounded-4">
        <div class="container">
            <div class="row gx-2">
                <div class="col">
                    <p class="text-white display-5 fw-bold px-4 text-center display-6 bg-black rounded-4 shadow-lg">Сопровождение грузов</p><br>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row gx-2">
                <div class="col-1"></div>
                <div class="col fs-5 p-1">

                    <dl class="px-1 text-justify" style="text-align: justify;">
                        <dt>
                            Сопровождение грузов включает организацию и проведение комплексных мероприятий по обеспечению безопасности при сопровождении грузов.
                            При необходимости выделяется дополнительная мобильная группа вооруженных охранников на автомобиле сопровождения.
                            Охрану осуществляют подготовленные сотрудники ЧОП, прошедшие специальное обучение охране ценных грузов и имеющие достаточно большой стаж работы в области охраны.
                            Все сотрудники ЧОП обеспечены средствами безопасности и защиты, мобильной связью и радиоустройствами.
                            Каждый сотрудник имеет разрешение на использование огнестрельного оружия.
                        </dt>
                    </dl>
                </div>

                <div class="col pt-2">
                    <img class="img-fluid ms-5 rounded-4 shadow-lg mb-4" src="{{ asset('/serv3.png') }}" alt="This is logo" width="480"/>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        <div class="container">
            <div class="row gx-2">
                <div class="col"></div>
                <div class="col pt-2 my-3 text-center">
                        <a href="/services/moreInfoServicesThree">
                        <button onclick = "btnClickColor(this)" class="btn btn-outline-light btn-lg px-4 display-4 fs-4 fw-bold">
                            Узнать подробнее
                        </button>
                        </a>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>

    <div class="container py-4 p-5 mb-5 text-white bg-dark rounded-4">
        <div class="container">
            <div class="row gx-2">
                <div class="col">
                    <p class="text-white display-5 fw-bold px-4 text-center display-6 bg-black rounded-4 shadow-lg">Установка системы «ТРЕВОЖНАЯ КНОПКА»</p><br>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row gx-2">
                <div class="col-1"></div>
                <div class="col fs-5 p-1">

                    <dl class="px-1 text-justify" style="text-align: justify;">
                        <dt>
                            Наша организация использует интегрированный программно-аппаратный комплекс "STEMAX", предназначенный для мониторинга пожарной, охранной и тревожной сигнализации стационарных объектов.
                            Введен в эксплуатацию с 2012 года и зарекомендовал себя, как гарант высокой надежности и точности.
                            Наличие штата квалифицированных специалистов технического отдела, позволяет 24 часа в сутки контролировать и незамедлительно реагировать на нештатные ситуации.
                            Получение информации о тревоге на объекте и реагирование.
                        </dt>
                    </dl>
                </div>

                <div class="col pt-2">
                    <img class="img-fluid ms-5 rounded-4 shadow-lg mb-4" src="{{ asset('/serv4.png') }}" alt="This is logo" width="460"/>
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        <div class="container">
            <div class="row gx-2">
                <div class="col"></div>
                <div class="col pt-2 my-3 text-center">
                    <a href="">
                        <a href="/services/moreInfoServicesFour">
                        <button onclick = "btnClickColor(this)" class="btn btn-outline-light btn-lg px-4 display-4 fs-4 fw-bold">
                            Узнать подробнее
                        </button>
                        </a>
                    </a>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
@endsection
