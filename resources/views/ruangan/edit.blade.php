@extends('layouts.app')
@section('content')
    <div style="margin: 25%;">
        <form action="{{route('ruangan.update',$item->id)}}" method="post">
            @csrf
            @method('PUT')
        <table class="table table-striped">
            <tr>
                <td scope="row" class="text-center">Nama Ruangan</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="namaruangan" value="{{ old('namaruangan',$item->namaruangan) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Kode Ruangan</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="koderuangan" value="{{ old('koderuangan',$item->koderuangan) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Luas</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="luas" value="{{ old('luas',$item->luas) }}"></td>
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