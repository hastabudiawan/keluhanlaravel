@extends('layouts.admin_template')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">
            Data User
        </h4>
        <div class="row">
            <div class="col-sm-12 ">
                <div style="overflow-x: auto;">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="float-end mb-3">
                        <a class="btn btn-success" href="{{ route('user.create') }}">Tambah Data User</a>
                    </div>
                    <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Action</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        @foreach ($user as $user)
                        <tbody>
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('user.edit',$user->id) }}">Ubah</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection