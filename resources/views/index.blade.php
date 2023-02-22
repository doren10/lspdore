@extends('layouts.main')

@section('container')
<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark mt-5 shadow-sm">
    <div class="row">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">ASPIRASI MASYARAKAT</h1>
            <p class="lead my-3">Sampaikan aspirasi anda langsung ke pemerintahan cengkareng</p>
            <a href="#form" class="btn btn-secondary btn-lg">Tulis</a>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <img src="/img/aspirasi.png" style="max-width: 300px">
        </div>
    </div>
</div>

<div class="row mb-2">
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static bg-white">
                <strong class="d-inline-block mb-2 text-primary">Profile</strong>
                <h3 class="mb-0">Perbaikan Jalan</h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">Menindak lanjuti adanya jalan yang rusak, pemerintah setempat siaga langsung memperbaikinya</p>
                <a href="/profile" class="stretched-link">Lihat</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="https://source.unsplash.com/200x250?government" >
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static bg-white">
                <strong class="d-inline-block mb-2 text-success">Sistem</strong>
                <h3 class="mb-0">Perbaikan Fitur</h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="mb-auto">Tim IT sudah memperbaiki fitur formulir yang telah di laporkan oleh user.</p>
                <a href="#form" class="stretched-link">Cek</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="https://source.unsplash.com/200x250?form" >
            </div>
        </div>
    </div>
</div>

<div class="row g-5 mb-3">

    <div class="col-md-3">
        <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 rounded bg-white shadow-sm">
                <h4 class="fst-italic">Search</h4>
                <div class="d-flex mt-3">
                    {{-- <input class="form-control me-2" type="search" placeholder="" aria-label="Search"> --}}
                    <a href="/cari" class="btn btn-outline-success btn-block" style="width: 100%">Tekan saya</a>
                </div>
            </div>
            

            @if (session()->has('success'))
                <div class="mt-5">
                    <div class="alert alert-success mx-auto mt-4" role="alert">
                        Berhasil memasukan aspirasi
                    </div>
                </div>
            @endif

        </div>
    </div>

    <div class="col-md-9">
        <article class="blog-post">
            <h2 class="blog-post-title">Layanan baru oleh pemerintah</h2>
            <p class="blog-post-meta">1 Januari 2021 oleh <strong>Pemerintah Kecamatan Cengkareng</strong></p>

            <p>
                Pemerintahan Cengkareng resmi meluncurkan sebuah website yang dirancang agar para masyarakat dapat lebih mudah untuk menyampaikan aspirasinya.
                Dengan adanya website ini pemerintah berharap dapat membantu masyarakat.
            </p>
            <hr>
        </article>

        <div class="card shadow-sm" style="margin-top: 3rem; margin-bottom: 5rem">
            <div class="card-body">
                <h1 class="text-center">Formulir Aspirasi</h1>
                <hr>
                <form action="/aspirasi" method="post" id="form" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}" max="16" required>
                        @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Sesuai KTP</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" name="id_kategori">
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{ old('Lokasi') }}">
                        @error('lokasi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="keterangan_singkat" class="form-label">Keterangan Singkat</label>
                        <input type="text" class="form-control @error('keterangan_singkat') is-invalid @enderror" id="keterangan_singkat" name="keterangan_singkat" value="{{ old('keterangan_singkat') }}">
                        @error('keterangan_singkat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label @error('image') is-invalid @enderror">Bukti Foto</label>
                        <img src="" class="img-preview img-fluid mb-3 col-sm-5">
                        <input class="form-control" type="file" id="image" name="image">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan Lengkap</label>
                        @error('keterangan')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="keterangan" type="hidden" name="keterangan" value="{{ old('keterangan') }}">
                        <trix-editor input="keterangan"></trix-editor>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
