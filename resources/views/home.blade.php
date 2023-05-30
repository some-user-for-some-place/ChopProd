@extends('main')
@section('content')
        <div class="px-4 pt-5 my-5 text-center text-white">
            <h1 class="display-4 fw-bold">НАДЕЖНОСТЬ, ПРОВЕРЕННАЯ ВРЕМЕНЕМ</h1>
            <br>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4 fs-2">НАША ЦЕЛЬ – ВАША БЕЗОПАСНОСТЬ, УСПЕХ И ПРОЦВЕТАНИЕ</p>
                <p class="lead mb-4 fs-4">
                    Охранное подразделение OOO «KRAY»: динамично развивающаяся компания с крепкими традициями и заслуженной репутацией добросовестного и надежного партнера.
                </p>

                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <a href="/contact"><button type="button" onclick = "btnClickColor(this)" class="btn btn-outline-light btn-lg px-4 fw-bold">Связь с нами</button></a>
                    <a href="/services"><button type="button" onclick = "btnClickColor(this)" class="btn btn-outline-light btn-lg px-4 fw-bold">Наши предложения</button></a>
                </div>
            </div>
        </div>
@endsection
