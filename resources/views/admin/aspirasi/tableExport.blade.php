@extends('admin.layouts.mainExport')

@section('container')


<div class="card mt-3 border-0">
    <div class="card-body">
        <div class="table-responsive col-lg-12">
            <table class="table table-striped table-sm" id="tblData">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Keterangan Singkat</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($aspirasis as $aspirasi)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $aspirasi->nik }}</td>
                    <td>{{ $aspirasi->keterangan_singkat }}</td>
                    <td>{{ $aspirasi->lokasi }}</td>
                    <td>{{ $aspirasi->kategori->kategori }}</td>
                    <td>{{ $aspirasi->status }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=hasil.xls");
?>

@endsection