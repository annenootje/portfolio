@extends('layout')

@section('content')

    <div class='loader'>
        <span></span>
        <span></span>
    </div>

    <section class="line center">
        <div class="home-slider">
            @include('./components/project_previews')
        </div>
    </section>
@endsection