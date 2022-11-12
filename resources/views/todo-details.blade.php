@extends('layout.layout')
@section('content')
<!-- start header -->
<header class="header">
    <div class="header__inner container">
        <h1 class="header__title">{{$todo->title}}</h1>
        <div>
            {!!$todo->content!!}
        </div>
        <div class="header__filters">
            <div class="header__filters__item">
                <span class="material-icons-outlined"> clear </span>
                blue
            </div>
            <div class="header__filters__item">
                <span class="material-icons-outlined"> clear </span>
                completed
            </div>
        </div>
    </div>
</header>
<!-- end header -->
{{-- <a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Confirm Modal</a> --}}
<!-- start body -->
<div class="body">
    <div class="container">
        <div class="cards">
            <div class="cards__row">
                @foreach ($todoList as $item)
                <div class="card">
                    <div class="card__header">
                        <h3 class="card__title" style="display: block">
                            <a href="{{ route('todo.view', [$item->id]) }}">
                                {{ $item->title }}
                            </a>
                        </h3>
                        <input type="hidden" class="todo_id" name="todo_id" value="{{ $item->id }}">
                        <div class="card__remove-icon">
                            <span class="material-icons-outlined delete"> clear </span>
                        </div>
                    </div>
                    <div class="card__body">
                        <p class="card__text">
                            {!! $item->content !!}
                        </p>
                    </div>
                    <div class="card__footer">
                        <div class="footer__item">
                            <span class="material-icons-outlined"> clear </span>
                            blue
                        </div>
                        <div class="footer__item">
                            <span class="material-icons-outlined"> clear </span>
                            completed
                        </div>
                    </div>
                    <div class="card__dropdown">
                        <div class="card__dropdown__toggler">
                            <span class="material-icons-outlined"> more_vert </span>
                        </div>
                        <div class="card__dropdown__menu">
                            <form class="card__dropdown__form">
                                <div class="card__dropdown__form__group">
                                    <input type="radio" name="filter_by_color" id="dropdownFilterColor1" class="card__dropdown__form__radio" />
                                    <label for="dropdownFilterColor1">Red</label>
                                </div>
                                <div class="card__dropdown__form__group">
                                    <input type="radio" name="filter_by_color" id="dropdownFilterColor2" class="card__dropdown__form__radio" />
                                    <label for="dropdownFilterColor2">Blue</label>
                                </div>
                                <div class="card__dropdown__form__group">
                                    <input type="radio" name="filter_by_color" id="dropdownFilterColor3" class="card__dropdown__form__radio" />
                                    <label for="dropdownFilterColor3">Green</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- end body -->

@endsection