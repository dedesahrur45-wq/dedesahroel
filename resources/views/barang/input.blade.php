@extends('layouts.app')
@section('content')
    <div style="margin: 25%;">
        <form action="{{route('barang.store')}}" method="post">
            @csrf
        <table class="table table-striped">
            <tr>
                <td scope="row" class="text-center">Nama Barang</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="namabarang" id="" value="{{ old('namabarang') }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Kode inventaris</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="kodeinventaris" id="" value="{{ old('kodeinventaris') }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Kategori Id</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="kategoriid" id="" value="{{ old('kategoriid') }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Ruanagan Id</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="ruanganid" id="" value="{{ old('ruanganid') }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Tahun Pengadaan</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="tahunpengadaan" id="" value="{{ old('tahunpengadaan') }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Sumber Dana</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="sumberdana" id="" value="{{ old('sumberdana') }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Kondisi</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="kondisi" id="" value="{{ old('kondisi') }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            
            <tr>
                <td></td>
                <td scope="row" class="text-center"><input type="submit" value="SIMPAN" id=""></td>
                <td scope="row" class="text-center"><button type="reset" style="border-radius: 5px;">BATAL</button></td>
            </tr>
        </table>
    </form>
    </div>

    @endsection