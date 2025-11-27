@extends('layouts.app')
@section('content')
    {{-- <select name="" id="">
        <option value="">Filter Kategori</option>
        @foreach ($tanah as $item)
            <option value="{{ $item->id }}">{{$item -> nama_tanah}}</option>
        @endforeach
    </select> --}}
    <div class="m-4">
        
        <a class="btn btn-outline-info m-2" href='{{route('tanah.create')}}';">Tambah Data</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nama Tanah</th>
                    <th scope="col" class="text-center">Kode Tanah</th>
                    <th scope="col" class="text-center">luas</th>
                    <th scope="col" class="text-center">No Sertifikat</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                    <td scope="row" class="text-center">{{ $item->namatanah}}</td>
                    <td scope="row" class="text-center">{{ $item->kodetanah}}</td>
                    <td scope="row" class="text-center">{{ $item->luas}}</td>
                    <td scope="row" class="text-center">{{ $item->nosertifikat}}</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                        <a class="btn btn-outline-success me-2" href="{{route('tanah.edit',$item->id)}}">Edit</a>
                        <form action="{{route('tanah.destroy',$item->id)}}" method="post">
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