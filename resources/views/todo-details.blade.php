@extends('layout.layout')
@section('css')
    <style>
        body {
            background: transparent;
        }
    </style>
@endsection
@section('back_btn')
    <div class="filters-toggler back_btn">
        <div class="filters-toggler__show">
            <a href="{{ url()->previous() }}">
                <span class="material-icons-outlined">arrow_back</span>
            </a>
        </div>
        <div class="filters-toggler__hide">
            <span class="material-icons-outlined"> clear </span>
        </div>
    </div>
@endsection


@section('content')
    <!-- start header -->
    <header class="header">
        <div class="header__inner container">
            <h1 class="header__title">{{ $todo->title }}</h1>
            <div>
                {!! $todo->content !!}
            </div>
        </div>
    </header>
    <!-- end header -->
@endsection
