@extends('layouts.app')
@section('content')
    {{-- <select name="" id="">
        <option value="">Filter Kategori</option>
        @foreach ($tanah as $item)
            <option value="{{ $item->id }}">{{$item -> nama_tanah}}</option>
        @endforeach
    </select> --}}
    <div class="m-4">
        
        <a class="btn btn-outline-info m-2" href='{{route('ruangan.create')}}';">Tambah Data</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nama Ruangan</th>
                    <th scope="col" class="text-center">Kode Ruangan</th>
                    <th scope="col" class="text-center">luas</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                    <td scope="row" class="text-center">{{ $item->namaruangan}}</td>
                    <td scope="row" class="text-center">{{ $item->koderuangan}}</td>
                    <td scope="row" class="text-center">{{ $item->luas}}</td>
                    <td scope="row" class="text-center">
                        <div class="d-flex justify-content-center gap-2">
                        <a class="btn btn-outline-success me-2" href="{{route('ruangan.edit',$item->id)}}">Edit</a>
                        <form action="{{route('ruangan.destroy',$item->id)}}" method="post">
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