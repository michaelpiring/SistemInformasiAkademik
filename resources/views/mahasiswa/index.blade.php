@extends('layout.app')

@section('content')
    <div class="mt-5">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Sistem Informasi Akademik</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('mahasiswa.create') }}" title="Input Data Mahasiswa"> <i class="fas fa-plus-circle"></i>
                        </a>
                </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tgl Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Jalur Masuk</th>
            <th>ID Prodi</th>
            <th>ID UKT</th>
            <th>Date Created</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($mahasiswa as $mahasiswas)
            <tr>
                <td>{{ $mahasiswas->nim }}</td>
                <td>{{ $mahasiswas->nama_mahasiswa }}</td>
                <td>{{ $mahasiswas->tgl_lahir }}</td>
                <td>{{ $mahasiswas->jenis_kelamin }}</td>
                <td>{{ $mahasiswas->jalur_masuk }}</td>
                <td>{{ $mahasiswas->id_prodi }}</td>
                <td>{{ $mahasiswas->id_ukt }}</td>
                <td>{{ date_format($mahasiswas->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('mahasiswa.destroy', $mahasiswas->id_mahasiswa) }}" method="POST">

                        <a href="{{ route('mahasiswa.show', $mahasiswas->id_mahasiswa) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('mahasiswa.edit', $mahasiswas->id_mahasiswa) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection