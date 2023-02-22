@extends('layouts.main')

@section('container')


<div class="card mt-5">
    <div class="card-body card-fluid ">
        <h1 class="text-center p-5 pb-3 pt-1">Pemerintahan Cengkareng Raya</h1>
        <div class="p-3" style="text-align: justify">
            <p>&emsp; Pemerintahan sebagai sekumpulan orang-orang yang mengelola kewenangan-kewenangan, melaksanakan kepemimpinan dan koordinasi pemerintahan serta pembangunan masyarakat dari lembaga-lembaga dimana mereka ditempatkan. Pemerintahan merupakan organisasi atau wadah orang yang mempunyai kekuasaaan dan lembaga yang mengurus masalah kenegaraan dan kesejahteraan rakyat dan negara.</p> 
            <p>Pemerintahan dalam arti luas adalah segala kegiatan badan-badan publik yang meliputi kegiatan legislatif, eksekutif dan yudikatif dalam usaha mencapai tujuan negara. Pemerintahan dalam ari sempit adalah segala kegiatan badan-badan publik yang hanya meliputi kekuasaan eksekutif. (C.F. Strong)</p>
            <p>Pemerintahan dalam arti luas juga diartikan adalah segala urusan yang dilakukan oleh Negara dalam menyelenggarakan kesejahteraan rakyatnya dan kepentingan Negara sendiri; jadi tidak diartikan sebagai Pemerintah yang hanya menjalankan tugas eksekutif saja, melainkan juga meliputi tugas- tugas lainnya temasuk legislatif dan yudikatif.</p>
        </div>
    </div>
</div>

<div class="row mt-5">
    <h1 class="text-center mt-2 mb-2">Galeri Pemerintahan</h1>
    {{-- @for($i=1; $i<7; $i++)
    <div class="col-md-4 mt-1 mb-3">
        <div class="card">
            <img src="https://source.unsplash.com/400x400?government" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    @endfor --}}
    <div class="col-md-4 mt-1 mb-3">
        <div class="card">
            <img src="https://images.bisnis-cdn.com/thumb/posts/2019/05/21/925179/perbaikan-jalan-101017.jpg?w=400&h=400" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Perbaikan Jalan</h5>
                <p class="card-text">Jalan di cengkareng timur mendapatkan renovasi, dengan bantuan alat berat</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mt-1 mb-3">
        <div class="card">
            <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/01/26/811415077.jpg" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Program Sembako</h5>
                <p class="card-text">Pengeluaran kartu program baru, yang dapat digunakan untuk mendapatkan bantuan sembako</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mt-1 mb-3">
        <div class="card">
            <img src="https://source.unsplash.com/400x400?lamp" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Perbaikan Lampu Taman</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
    </div>
</div>

@endsection
