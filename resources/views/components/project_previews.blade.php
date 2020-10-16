{{-- <div class="container slide">
    <div class="blue-line">
        <p>
            <b class="light subtitle">Webapplicatie</b>
        </p>
        <img src="/img/mobiel-balgevoel.png" alt="">
        <h6 class="white title">
            Balgevoel
        </h6>
        <div class="play"></div>
    </div>
</div>

<div class="container slide">
    <div class="blue-line">
        <p>
            <b class="light subtitle">Website</b>
        </p>
        <img src="/img/mobiel-1.png" alt="">
        <h6 class="white title">Cocktailbar<br>
            Caipiroski
        </h6>
        <div class="play"></div>
    </div>
</div>

<div class="container slide">
    <div class="blue-line">
        <p>
            <b class="light subtitle">Webshop</b>
        </p>
        <img src="/img/mobiel-huisvanmijn.png" alt="">
        <h6 class="white title">Studio Huis<br>
            van Mijn
        </h6>
        <div class="play"></div>
    </div>
</div> --}}

@foreach($projects as $project)

    <a class="container slide" href="/project/{{$project->id}}">
        <div class="blue-line">
            <p>
                <b class="light subtitle">{{$project->preview}}</b>
            </p>
            <img src="{{$project->image}}" alt="">
            <h6 class="white title">
                {{$project->title}}
            </h6>
            <div class="play"></div>
        </div>
    </a>

@endforeach