@extends('layout')

@section('content')

    <section class="line half small grey center">      
        <div class="container">
            <div class="part-12">
                <img src="{{$about->image}}" alt="">
            </div>
        </div>
    </section>

    <section class="line half center small">
        <div class="container">
            <div class="part-12">
                <p class="lightblue uppercase small greeting">
                    HALLO
                </p>
                <h4>{{$about->title}}</h4>
                <p>
                    {!! $about->content !!}
                </p>
            </div>
        </div>            
    </section>

@endsection