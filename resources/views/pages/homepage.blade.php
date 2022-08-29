@extends('template/layout')
@section('content')

{{-- Banner --}}

<div class="banner__layout">
    <div class="banner__content">
        <h2 class="banner__title">Sanggar Inklusi Mutiara Hati</h2>
        <p class="banner__des">Sanggar inklusi mutiara hati merupakan sebuah sanggar yang digunakan untuk tempat melakukan therapy kepada anak inklusi. Sanggar ini terletak di Karang Asem RT 02 RW 03, Kateguhan, Tawangsari, Sukoharjo...</p>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sanggar Inklusi Mutiara Hati</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body modal__content">
                        Sanggar inklusi mutiara hati merupakan sebuah sanggar yang digunakan untuk tempat melakukan therapy kepada anak inklusi. Sanggar ini terletak di Karang Asem RT 01 RW 03, Kateguhan, Tawangsari, Sukoharjo. <br>
                        Sanggar ini menyediakan tiga jenis therapy untuk kebutuhan anak inklusi, yaitu ada okupasi terapi untuk motorik, fisioterapi untuk gerak, dan terapi wicara.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="banner__btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</button>
    </div>
</div>

{{-- End of Banner --}}

{{-- Tentang Kami --}}

<div class="about__layout bg-light">
    <div class="row about__content" data-aos="fade-up">
        <div class="col-md-6">
            <div class="about__left">
                <h1 class="about__title">Tentang Kami</h1>
                <hr class="about__border">
                <p class="about__des">Sanggar inklusi mutiara hati merupakan sebuah sanggar yang digunakan untuk tempat melakukan therapy kepada anak inklusi. Sanggar ini terletak di Karang Asem RT 02 RW 03, Kateguhan, Tawangsari, Sukoharjo...</p>
                <a href="#" class="about__btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Tentang Kami</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="about__right">
                <img src="img/about.jpg" alt="Tentang Kami" class="about__img">
            </div>
        </div>
    </div>
</div>

{{-- End of Tentang Kami --}}


{{-- Pelayanan --}}

<div class="pelayanan__layout bg-light">
    <h1 class="pelayanan__title">Therapy Kami</h1>
    <hr class="pelayanan__border">

    <div class="pelayanan__content">
        <div class="row">
            <div class="col-md-4 pelayanan__content_item" data-aos="fade-up">
                <div class="row">
                    <div class="col-4">
                        <img src="img/motorik.jpg" alt="" class="pelayanan__content__img">
                    </div>
                    <div class="col-8">
                        <h4 class="pelayanan__content__title">Okupasi terapi untuk motorik</h4>
                        <p class="pelayanan__content__desc">Penekanan terapi okupasi adalah sensomotorik dan proses neurologi (saraf) dengan mengolah, melengkapi dan memperlakukan lingkungannya sedemikian rupa hingga tercapai peningkatan, perbaikan dan pemeliharaan kemampuan anak.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pelayanan__content_item" data-aos="fade-down">
                <div class="row">
                    <div class="col-4">
                        <img src="img/about.jpg" alt="" class="pelayanan__content__img">
                    </div>
                    <div class="col-8">
                        <h4 class="pelayanan__content__title">Fisioterapi</h4>
                        <p class="pelayanan__content__desc">Terapi ini bertujuan untuk memeriksa, menangani, dan mengevaluasi pasien yang mengalami keterbatasan pada gerak dan fungsi tubuh.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pelayanan__content_item" data-aos="fade-up">
                <div class="row">
                    <div class="col-4">
                        <img src="img/motorik.jpg" alt="" class="pelayanan__content__img">
                    </div>
                    <div class="col-8">
                        <h4 class="pelayanan__content__title">Terapi wicara</h4>
                        <p class="pelayanan__content__desc">Terapi ini bertujuan untuk meningkatkan kemampuan bicara, memahami, dan mengekspresikan bahasa. selain bahasa yang bersifat verbal, terapi ini juga melatih bentuk bahasa nonverbal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- End of pelayanan --}}


{{-- Pengurus --}}

<div class="pengurus__layout bg-light">
    <h1 class="pengurus__title">Pengurus</h1>
    <hr class="pengurus__border">

    <div class="pengurus__content">
            <div class="owl-carousel owl-theme">
                @foreach ($penguruses as $pengurus)
                    <div class="item">
                            <div class="card card__layout">
                                <img src="img/{{ $pengurus["avatar"] }}" class="card-img-top pengurus__img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $pengurus["nama"] }} - {{ $pengurus["jabatan"] }}</h5>
                                    <p class="card-text">{{ $pengurus["deskripsi"] }}</p>
                                </div>
                            </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- End of pengurus --}}


{{-- Visi Misi --}}

<div class="visi__layout bg-light">
    <h1 class="visi__title">Visi & Misi</h1>
    <hr class="visi__border">

    <div class="visi__content">
        <div class="row">
            <div class="col-md-6" data-aos="zoom-in-down">
                <h3>Visi</h3>
                <p>Menjadikan sanggar sebagai pusat informasi dan layanan edukasi bagi orang tua dan anak</p>
            </div>
            <div class="col-md-6" data-aos="zoom-in-up">
                <h3>Misi</h3>
                <p>
                    1. Mengembangkan dan mengaplikasi pengetahuan orang tua tentang penanganan anak ABK. <br>
                    2. Mensosialisasikan isu-isu disabilitas terhadap masyarakat. <br>
                    3. Memberikan edukasi terbaik yang dibutuhkan anak. <br>
                    4. Membantu semua anak dalam mengembangkan diri secara mandiri, berprestasi sesuai dengan kemampuan dan bakat yang dimilikinya.
                </p>
            </div>
        </div>
    </div>
</div>

{{-- End of Visi Misi --}}


@endsection