@extends('layouts.admin_template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4 text-center">
            Laporan Data Keluhan
        </h4>
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="mb-3">
                    <p>Jenis Rawat : {{ $keluhan->layanan }}</p>
                </div>
                <div class="mb-3">
                    <p>Tanggal Kejadian : {{ $keluhan->tglkejadian }}</p>
                </div>
                <div class="mb-3">
                    <p>Nama Ruangan : {{ $keluhan->namaruangan }}</p>
                </div>
                <div class="mb-3">
                    <p>Nama Perawat : {{ $keluhan->namaperawat }}</p>
                </div>
                <div class="mb-3">
                    <p>Nama Dokter : {{ $keluhan->namadokter }}</p>
                </div>
                <div class="mb-3">
                    <p>Rating  : {{ $keluhan->rating }}</p>
                </div>
                <div class="mb-3">
                    <p>Keluhan : {{ $keluhan->isikeluhan }}</p>
                </div>
                <div class="mb-3">
                    <p>Nomor Wa : {{ $keluhan->nomorwa }}</p>
                </div>
                <div class="float-end mb-3">
                    <a href="{{ route('keluhan.index') }}" class="btn btn-success">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection