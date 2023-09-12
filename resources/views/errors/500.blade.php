@extends('layouts.error_layout')

@section('title', "ERROR 404 - Absensi Peserta Magang CV. Inti Grafika")

@section('content')
        <div class="error-box bg-light" style="background-image:none;">
            <div class="error-body text-center">
                <h1 class="error-title text-info">500</h1>
                <h3 class="text-uppercase error-subtitle">INTERNAL SERVER ERROR !</h3>
                <p class="text-muted m-t-30 m-b-30">PLEASE TRY AFTER SOME TIME</p>
                <a href="{{route('login')}}" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Back to home</a>
            </div>
        </div>
    </div>

@endsection
