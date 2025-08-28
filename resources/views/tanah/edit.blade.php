@extends('layouts.app')
@section('content')
    <div style="margin: 25%;">
        <form action="{{route('tanah.update',$item->id)}}" method="post">
            @csrf
            @method('PUT')
        <table class="table table-striped">
            <tr>
                <td scope="row" class="text-center">Nama Tanah</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="namatanah" value="{{ old('namatanah',$item->namatanah) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Kode Tanah</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="kodetanah" value="{{ old('kodetanah',$item->kodetanah) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Luas</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="luas" value="{{ old('luas',$item->luas) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">No Sertifikat</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="nosertifikat" value="{{ old('nosertifikat',$item->nosertifikat) }}"></td>
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