@extends('template.layout')
@section('content')
<div class="tengah">
            <ul>@foreach ($berita as $b)
                <li class="berita">
                    <h2>{{$b->title}}</h2>
                    <img class="card-img-top" src="{{$b->picture}}" alt="Card image cap" style="height: 300px;">
                    <p class="des">{{$b->content}}.
                    </p>
                </li>
                @endforeach
            </ul>
</div>
@endsection

