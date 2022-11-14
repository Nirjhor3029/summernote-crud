@extends('layout.layout')
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
            <h1 class="header__title">Text Editor</h1>
            <form class="todo-form" method="POST" action="{{ route('todo.post') }}">
                @csrf
                <div class="todo-form__group">
                    <input type="text" name="title" required class="todo-form__input" placeholder="Todo Title..." />
                </div>
                <div class="todo-form__group">
                    <textarea name="short_desc" class="todo-form__input todo-form__text_area " id=""
                        placeholder="Short Description" cols="30" rows="10"></textarea>
                    {{-- <input type="text" name="title" required class="todo-form__input" placeholder="Todo Title..." /> --}}
                </div>
                <div class="todo-form__group">
                    <textarea id="summernote" name="content" class="todo-form__textarea" rows="50">
                    </textarea>
                </div>
                <button class="btn btn--primary">Submit</button>
            </form>
        </div>
    </header>
    <!-- end header -->
@endsection

@section('js')
    <script>
        var itemID = 0;
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Hello Bootstrap 4',
                tabsize: 2,
                height: '50vh',
                width: "100%"
            });
        });
    </script>
@endsection
