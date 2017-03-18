@extends('layouts.layout')

@section('title', 'Flickr')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Recent Flickrs Photo</h1>
                <p class="lead">A list of the latest public photos uploaded to flickr.</p>

                @if($flickr->stat == 'ok')
                    <ul class="list-inline">
                    @foreach($flickr->photos->photo as $item)
                        <li>
                            <a href="{{ url('photo', [$item->id]) }}">
                                <img class="img-thumbnail"
                                     src="http://farm{{ $item->farm }}.staticflickr.com/{{ $item->server }}/{{ $item->id }}_{{ $item->secret }}_q.jpg"
                                     alt="{{ $item->title }}" title="{{ $item->title }}">
                                <p>Size: <b>q</b> — 150x150</p>
                            </a>
                        </li>
                    @endforeach
                    </ul>
                @endif

            </div>
        </div>
    </div>
@stop
