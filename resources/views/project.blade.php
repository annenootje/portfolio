@extends('layout')

@section('content')

    <section class="line no-space fit-height center grey">      
        <div class="container">
            <div class="part-5">
                {{-- <img src="{{$project->content_image}}" alt=""> --}}
                <img src="/uploads/tablet-1.png" alt="">
            </div>
        </div>
    </section>

    <section class="line center extra-small">
        <div class="container">
            <div class="part-12">
                <p class="lightblue uppercase small">
                    {{$project->title}}
                </p>
                <h4>{{$project->subtitle}}</h4>
                <p>
                    {!! $project->content !!}
                </p>
            </div>
        </div>            
    </section>

    <section class="line center small">
        <div class="container">
        </div>
    </section>

@endsection