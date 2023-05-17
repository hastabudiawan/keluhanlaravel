@extends('layouts.admin_template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            Data Keluhan
        </h4>
        <div class="row">
            <div class="col-sm-12">
                <div style="overflow-x: auto;">
                    <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Action</th>
                                <th>Jenis Layanan</th>
                                <th>Tanggal Kejadian</th>
                                <th>Nama Ruangan</th>
                                <th>Nama Perawat</th>
                                <th>Nama Dokter</th>
                                <th>Isi Keluhan</th>
                                <th>Rating</th>
                                <th>Nomor WA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($keluhan as $kel)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="d-flex">
                                        <form onsubmit="return confirm('are you sure?')" action="/keluhan/{{$kel->id}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input class="btn btn-danger ms-1" type="submit" value="Hapus">
                                        </form>
                                        <a href="{{ route('keluhan.show',$kel->id) }}" class="btn btn-success ms-1">Detail</a>
                                    </div>
                                </td>
                                <td>{{ $kel->layanan }}</td>
                                <td>{{ $kel->tglkejadian }}</td>
                                <td>{{ $kel->namaruangan }}</td>
                                <td>{{ $kel->namaperawat }}</td>
                                <td>{{ $kel->namadokter }}</td>
                                <td>{{ $kel->isikeluhan }}</td>
                                <td>{{ $kel->rating }}</td>
                                <td>{{ $kel->nomorwa }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection