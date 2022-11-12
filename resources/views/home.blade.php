@extends('layout.layout')
@section('content')
    <!-- start header -->
    <header class="header">
        <div class="header__inner container">
            <h1 class="header__title">Text Editor</h1>
            <form class="todo-form" method="POST" action="{{ route('todo.post') }}">
                @csrf
                <div class="todo-form__group">
                    <input type="text" name="title" required class="todo-form__input" placeholder="Todo Title..." />
                </div>
                <div class="todo-form__group">
                    <textarea id="summernote" name="content" class="todo-form__textarea" rows="50">
                    </textarea>
                </div>
                <button class="btn btn--primary">Submit</button>
            </form>
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
                                            <input type="radio" name="filter_by_color" id="dropdownFilterColor1"
                                                class="card__dropdown__form__radio" />
                                            <label for="dropdownFilterColor1">Red</label>
                                        </div>
                                        <div class="card__dropdown__form__group">
                                            <input type="radio" name="filter_by_color" id="dropdownFilterColor2"
                                                class="card__dropdown__form__radio" />
                                            <label for="dropdownFilterColor2">Blue</label>
                                        </div>
                                        <div class="card__dropdown__form__group">
                                            <input type="radio" name="filter_by_color" id="dropdownFilterColor3"
                                                class="card__dropdown__form__radio" />
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


    @include('includes.delete-confirm')
@endsection

@section('js')
    <script>
        var itemID = 0;
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Hello Bootstrap 4',
                tabsize: 2,
                height: '30vh',
            });

            $(".delete").click(function(e) {
                e.preventDefault();
                let that = $(this);
                let card = that.closest(".card");
                let itemId = card.find('.todo_id');
                itemID = 0;
                itemID = itemId[0].value;
                // console.log(itemId[0].value);
                $('#confirmDelete').modal('show');
            });

            $("#delete_btn").click(function(e) {
                e.preventDefault();
                console.log("deleting: " + itemID);
                $('#confirmDelete').modal('hide');

                $.ajax({
                    url: `/todo-delete/${itemID}`,
                    type: 'GET',
                    dataType: 'json', // added data type
                    success: function(res) {
                        console.log(res);
                        if (res.status == 200) {
                            window.location.reload();
                        }
                    }
                });
            });
        });
    </script>
@endsection
