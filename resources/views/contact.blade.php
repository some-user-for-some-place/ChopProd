@extends('main')
@section('page_title')
    {{ "Контакты" }}
@endsection
@section('content')
        <div class="px-4 pt-5 my-5 text-center text-white">
            <h1 class="text-white display-4 fw-bold">КОНТАКТЫ ДЛЯ СВЯЗИ С НАМИ</h1>
        </div>

        <div class="container py-4 text-white bg-dark rounded-4">
            <form onsubmit="sendEmail(); reset(); return false">
                <h3 class="h1 text-center bg-black rounded-3" id="listing"> :: Отправте нам письмо для обратной связи </h3>
                <script type="text/javascript">
                    function animate(id) {
                        var node = document.getElementById("listing").childNodes[0];
                        var text = node.data;
                        setInterval(function () {
                            text = text.substring(1) + text[0];
                            node.data = text;
                        }, 125); //интервал прокрутки, мс
                    }
                    window.addEventListener('load', function (e) { animate('marqueeline'); }, false);
                </script>

                <input class="rounded-3 input-group text-center fs-4 mt-3 bg-light" type="text" id="name" placeholder="Ваше имя" required>
                <input class="rounded-3 input-group text-center fs-4 mt-3 bg-light" type="email" id="email" placeholder="Ваш e-mail" required>
                <input class="rounded-3 input-group text-center fs-4 mt-3 bg-light" type="text" id="phone" placeholder="Ваш номер телефона" required>
                <textarea class="rounded-3 input-group text-center fs-4 mt-3 bg-light" cols="32" id="message" rows="1" placeholder="Текст сообщения"></textarea>
                <div class="container text-center">
                    <button onclick="btnClickColor(this)" class="btn btn-outline-info px-5 mt-3 fs-3 rounded-3" type="submit"> Отправить </button>
                </div>
            </form>
        </div>

        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script>
            function sendEmail(){
                Email.send({
                    SecureToken: "cb14849e-9c61-4e04-bec4-fb889e391951",
                    To : "afrolow475@gmail.com",
                    From : "afrolow475@gmail.com",
                    Subject : "New Contact From Enquire",
                    Body : "Name: " + document.getElementById("name").value
                        + "<br> Email: " + document.getElementById("email").value
                        + "<br> Phone no: " + document.getElementById("phone").value
                        + "<br> Message: " + document.getElementById("message").value
                }).then(
                    message => alert("Сообщение было отправлено.")
                );
            }
        </script>

        <div class="container py-4">
            <div class="row align-items-md-stretch">

                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-dark rounded-4 text-center">
                        <h2>Наши номера телефонов</h2>
                        <br>
                        <ul style="list-style-type: none" class="fs-5 row gy-2 fs-4">
                            <li> №1: +7(153)-482-04-09
                                <button onclick="copyText1(); btnClickColor(this)" type="button" class="btn btn-outline-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
                                    </svg>
                                </button>
                            </li>
                            <li> №2: +7(367)-266-75-29
                                <button onclick="copyText2(); btnClickColor(this)" type="button" class="btn btn-outline-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
                                    </svg>
                                </button>
                            </li>
                            <li> №3: +7(268)-123-28-34
                                <button onclick="copyText3(); btnClickColor(this)" type="button" class="btn btn-outline-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
                                    </svg>
                                </button>
                            </li>
                            <li> №4: +7(682)-986-98-23
                                <button onclick="copyText4(); btnClickColor(this)" type="button" class="btn btn-outline-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                        <button onclick="copyTextAll(); btnClickColor(this)" type="button" class="btn btn-outline-light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path>
                            </svg>
                            Копировать всё
                        </button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="h-100 p-5 text-white bg-dark rounded-4 text-center">
                        <h2>Другие наши контакты</h2>
                        <br>
                        <div class="container btn-lg px-5">
                            <div class="row">
                                <div class="col p-1">
                                    <button onclick = "btnClickColor(this)" class="btn btn-outline-light fs-1" style="width: 106px; height: 106px">VK</button>
                                    <button onclick = "btnClickColor(this)" class="btn btn-outline-light" style="width: 106px; height: 106px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col p-1">
                                    <button onclick = "btnClickColor(this)" class="btn btn-outline-light" style="width: 106px; height: 106px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
                                        </svg>
                                    </button>
                                    <button onclick = "btnClickColor(this)" class="btn btn-outline-light" style="width: 106px; height: 106px">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" fill="currentColor" class="bi bi-skype" viewBox="0 0 16 16">
                                            <path d="M4.671 0c.88 0 1.733.247 2.468.702a7.423 7.423 0 0 1 6.02 2.118 7.372 7.372 0 0 1 2.167 5.215c0 .344-.024.687-.072 1.026a4.662 4.662 0 0 1 .6 2.281 4.645 4.645 0 0 1-1.37 3.294A4.673 4.673 0 0 1 11.18 16c-.84 0-1.658-.226-2.37-.644a7.423 7.423 0 0 1-6.114-2.107A7.374 7.374 0 0 1 .529 8.035c0-.363.026-.724.08-1.081a4.644 4.644 0 0 1 .76-5.59A4.68 4.68 0 0 1 4.67 0zm.447 7.01c.18.309.43.572.729.769a7.07 7.07 0 0 0 1.257.653c.492.205.873.38 1.145.523.229.112.437.264.615.448.135.142.21.331.21.528a.872.872 0 0 1-.335.723c-.291.196-.64.289-.99.264a2.618 2.618 0 0 1-1.048-.206 11.44 11.44 0 0 1-.532-.253 1.284 1.284 0 0 0-.587-.15.717.717 0 0 0-.501.176.63.63 0 0 0-.195.491.796.796 0 0 0 .148.482 1.2 1.2 0 0 0 .456.354 5.113 5.113 0 0 0 2.212.419 4.554 4.554 0 0 0 1.624-.265 2.296 2.296 0 0 0 1.08-.801c.267-.39.402-.855.386-1.327a2.09 2.09 0 0 0-.279-1.101 2.53 2.53 0 0 0-.772-.792A7.198 7.198 0 0 0 8.486 7.3a1.05 1.05 0 0 0-.145-.058 18.182 18.182 0 0 1-1.013-.447 1.827 1.827 0 0 1-.54-.387.727.727 0 0 1-.2-.508.805.805 0 0 1 .385-.723 1.76 1.76 0 0 1 .968-.247c.26-.003.52.03.772.096.274.079.542.177.802.293.105.049.22.075.336.076a.6.6 0 0 0 .453-.19.69.69 0 0 0 .18-.496.717.717 0 0 0-.17-.476 1.374 1.374 0 0 0-.556-.354 3.69 3.69 0 0 0-.708-.183 5.963 5.963 0 0 0-1.022-.078 4.53 4.53 0 0 0-1.536.258 2.71 2.71 0 0 0-1.174.784 1.91 1.91 0 0 0-.45 1.287c-.01.37.076.736.25 1.063z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>

            </div>

            <br>

            <div class="p-5 mb-4 text-white bg-dark rounded-4">
                <div style="position:relative;overflow:hidden; filter: grayscale(1); -webkit-filter: grayscale(1);" class="rounded-4 ">
                    <a href="https://yandex.ru/maps/org/kemgu_kolledzh_promyshlennykh_informatsionnykh_tekhnologiy_i_prava/141414738706/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">
                        КемГУ, колледж промышленных, информационных технологий и права
                    </a>
                    <a href="https://yandex.ru/maps/64/kemerovo/category/university_college/184106140/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">
                        ВУЗ в Кемерове
                    </a>
                    <iframe src="https://yandex.ru/map-widget/v1/?ll=86.140494%2C55.338134&mode=poi&poi%5Bpoint%5D=86.139292%2C55.338249&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D141414738706&z=17.4" width="100%" height="600" allowfullscreen="true" style="position:relative;"></iframe>
                </div>
            </div>
        </div>
@endsection
