@extends('layouts.app')
@section('content')
    <div style="margin: 25%;">
        <form action="{{route('barang.update',$item->id)}}" method="post">
            @csrf
            @method('PUT')
        <table class="table table-striped">
            <tr>
                <td scope="row" class="text-center">Nama Barang</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="namabarang" value="{{ old('namabarang',$item->namabarang) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Kode inventaris</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="kodeinventaris" value="{{ old('kodeinventaris',$item->kodeinventaris) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Kategori id </td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="kategoriid" value="{{ old('kategoriid',$item->kategoriid) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Ruangan id</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="ruanganid" value="{{ old('ruanganid',$item->ruanganid) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Tahun Pengadaan</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="tahunpengadaan" value="{{ old('tahunpengadaan',$item->tahunpengadaan) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Sumber Dana</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="sumberdana" value="{{ old('sumberdana',$item->sumberdana) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Kondisi</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="kondisi" value="{{ old('kondisi',$item->kondisi) }}"></td>  
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td></td>
                <td scope="row" class="text-center"><input type="submit" value="SIMPAN" id="" class="btn btn-outline-success me-2"></td>
                <td scope="row" class="text-center"><button type="reset" class="btn btn-outline-danger me-2">BATAL</button></td>
            </tr>
        </table>
    </form>
    </div>

    @endsection