
@extends('layouts.main')

@section('container')

    <h1 class="mb-1 mt-5 text-center">Cari Aspirasi</h1>
    <p class="mb-1 text-muted text-center">Kata kunci : NIK | Lokasi | Keterangan</p>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/cari">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari" name="search" value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($aspirasis->count())
    <div class="container">
    <div class="row">
        @foreach ($aspirasis as $aspirasi)
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $aspirasi->nik }}</h5>
                    <p>
                        <small class="text-muted">
                            {{ $aspirasi->kategori->kategori }} - {{ $aspirasi->lokasi }}
                        </small>
                    </p>
                    <div style="overflow:hidden">
                        <img src="{{ asset('storage/' . $aspirasi->image) }}" alt="{{ $aspirasi->keterangan_singkat }}" class="" style="max-height: 150px">
                    </div>
                    <p class="card-text" style="text-align:justify">
                        {!! $aspirasi->keterangan !!}
                    </p>
                </div>
                <div class="card-footer d-flex flex-row-reverse">
                    <div class="p-2">
                        {{ $aspirasi->status }}
                    </div> 
                    <div class="p-2">
                        Feedback
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
    @else
    <p class="text-center fs-4">Tidak ada aspirasi</p>
    @endif

@endsection