
@extends('admin.layouts.main')

@section('container')


<div class="card mt-1 border-0">
    <div class="card-body">
        <a class="btn btn-dark mb-5" href="/dashboard"><i class="bi bi-box-arrow-left"></i> Back</a>
        <div class="container">
        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $aspirasi->nik }}</h5>
                        <p>
                            <small class="text-muted">
                                {{ $aspirasi->kategori->kategori }} - {{ $aspirasi->lokasi }}
                            </small>
                        </p>
                        <div style="overflow:hidden">
                            <img src="{{ asset('storage/' . $aspirasi->image) }}" alt="{{ $aspirasi->keterangan_singkat }}" class="" width="300px">
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
        </div>
        </div>
    </div>
</div>

@endsection