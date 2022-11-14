@extends('layout.layout')
@section('css')
    <style>
        body {
            background: transparent;
        }
        .filters-toggler{
            display: none;
        }
    </style>
@endsection

@section('content')
    <!-- start header -->
    <header class="header">
        <div class="header__inner container">
            <!-- <h1 class="header__title">{{ $todo->title }}</h1> -->
            <div>
                {!! $todo->content !!}
            </div>
        </div>
    </header>
    <!-- end header -->
@endsection
