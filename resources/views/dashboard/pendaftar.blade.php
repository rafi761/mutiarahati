@extends('dashboard/template/layout')
@section('content')
@if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>    
            @endif
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat & Tanggal Lahir</th>
                <th>Nama Orang Tua</th>
                <th>No Hp</th>
                <th>Alamat</th>
                <th>Jenis Difabel</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pendaftars as $pendaftar)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pendaftar['nama'] }}</td>
                    <td>{{ $pendaftar['ttl'] }}</td>
                    <td>{{ $pendaftar['namaortu'] }}</td>
                    <td>{{ $pendaftar['nohp'] }}</td>
                    <td>{{ $pendaftar['alamat'] }}</td>
                    <td>{{ $pendaftar['jnsdifabel'] }}</td>
                    <td>
                        {{-- <a href="" class="badge bg-info"><span data-feather="edit"></span></a> --}}
                        <form action="/dashboard/pendaftar/{{ $pendaftar['id'] }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('Apakah yakin ingin menghapus data ini ?')"><span data-feather="trash-2"></span></button>
                        </form>
                    </td>
                </tr>                
            @endforeach
        </tbody>
    </table>
@endsection