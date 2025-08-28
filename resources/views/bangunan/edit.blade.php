@extends('layouts.app')
@section('content')
    <div style="margin: 25%;">
        <form action="{{route('bangunan.update',$item->id)}}" method="post">
            @csrf
            @method('PUT')
        <table class="table table-striped">
            <tr>
                <td scope="row" class="text-center">Nama Bangunan</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="namabangunan" value="{{ old('namabangunan',$item->namabangunan) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Kode Bangunan</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="kodebangunan" value="{{ old('kodebanguan',$item->kodebangunan) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Tanah id </td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="tanahid" value="{{ old('tanahid',$item->tanahid) }}"></td>
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