@extends('layouts.app')
@section('content')
    <div style="margin: 25%;">
        <form action="{{route('user.update',$item->id)}}" method="post">
            @csrf
            @method('PUT')
        <table class="table table-striped">
            <tr>
                <td scope="row" class="text-center">Nama</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="nama" value="{{ old('nama',$item->nama) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Email</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="email" value="{{ old('email',$item->email) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Verifikasi Email</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="email_verified_at" value="{{ old('email_verified_at',$item->email_verified_at) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">password</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="password" value="{{ old('password',$item->password) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Role</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="role" value="{{ old('role',$item->role) }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Token</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="remember_token" value="{{ old('remember_token',$item->remember_token) }}"></td>
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