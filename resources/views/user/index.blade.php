@extends('layouts.app')
@section('content')
    {{-- <select name="" id="">
        <option value="">Filter Kategori</option>
        @foreach ($tanah as $item)
            <option value="{{ $item->id }}">{{$item -> nama_tanah}}</option>
        @endforeach
    </select> --}}
    <div class="m-4">
        
        <a class="btn btn-outline-info m-2" href='{{route('user.create')}}';">Tambah Data</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <td scope="row" class="text-center">{{ $loop->iteration }}</td>
                    <td scope="row" class="text-center">{{ $item->nama}}</td>
                    <td scope="row" class="text-center">{{ $item->email}}</td>
                    <td scope="row" class="text-center">{{ $item->email_verified_at}}</td>
                    <td scope="row" class="text-center">{{ $item->password}}</td>
                    <td scope="row" class="text-center">{{ $item->role}}</td>
                    <td scope="row" class="text-center">{{ $item->remember_token}}</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                        <a class="btn btn-outline-success me-2" href="{{route('user.edit',$item->id)}}">Edit</a>
                        <form action="{{route('user.destroy',$item->id)}}" method="post">
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