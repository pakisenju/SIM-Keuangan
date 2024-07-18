@extends('layouts.auth-master')
@section('title', 'Login')
@section('style')
@endsection

@section('container')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label text-light">Username</label>
            <input name="username" type="username" class="form-control text-light">
        </div>
        <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label text-light">Password</label>
            <input name="password" type="password" class="form-control text-light" id="exampleInputPassword1">
        </div>
        <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit">Sign In</button>
    </form>
@endsection

@section('script')
@endsection
