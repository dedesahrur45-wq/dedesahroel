@extends('layouts.app')
@section('content')
    <div style="margin: 25%;">
        <form action="{{route('user.store')}}" method="post">
            @csrf
        <table class="table table-striped">
            <tr>
                <td scope="row" class="text-center">Nama</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="nama" id="" value="{{ old('nama') }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Email</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="email" id="" value="{{ old('email') }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Verifikasi Email</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="email_verified_at" id="" value="{{ old('email_verified_at') }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Password</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="password" id="" value="{{ old('password') }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Role</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="role" id="" value="{{ old('role') }}"></td>
                <td scope="row" class="text-center"><input type="hidden" name="id" id=""></td>
            </tr>
            <tr>
                <td scope="row" class="text-center">Token</td>
                <td scope="row" class="text-center">:</td>
                <td scope="row" class="text-center"><input type="text" name="remember_token" id="" value="{{ old('remember_token') }}"></td>
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