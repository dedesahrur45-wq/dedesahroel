@extends('layouts.app')
@section('content')
    {{-- <select name="" id="">
        <option value="">Filter Kategori</option>
        @foreach ($tanah as $item)
            <option value="{{ $item->id }}">{{$item -> nama_tanah}}</option>
        @endforeach
    </select> --}}
    <div class="m-4">

        <a class="btn btn-outline-info m-2" href='{{ route('barang.create') }}';">Tambah Data</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nama Kategori</th>
                    <th scope="col" class="text-center">Kode Inventaris</th>
                    <th scope="col" class="text-center">Katagori Id</th>
                    <th scope="col" class="text-center">Tanhun pengadaan</th>
                    <th scope="col" class="text-center">Sumber dana</th>
                    <th scope="col" class="text-center">Kondisi</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                        <td scope="row" class="text-center">{{ $item->namabarang }}</td>
                        <td scope="row" class="text-center">{{ $item->kodeinventaris }}</td>
                        <td scope="row" class="text-center">{{ $item->kategoriid }}</td>
                        <td scope="row" class="text-center">{{ $item->ruanganid }}</td>
                        <td scope="row" class="text-center">{{ $item->tahunpengadaan }}</td>
                        <td scope="row" class="text-center">{{ $item->sumberdana }}</td>
                        <td scope="row" class="text-center">{{ $item->kondisi }}</td>
                        <td>
                            <div class="d-flex justify-content-center gap-2">
                                <a class="btn btn-outline-success me-2" href="{{ route('barang.edit', $item->id) }}">Edit</a>
                                <form action="{{ route('barang.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger me-2" type="submit">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
