@extends('layouts.layout')

@section('title', 'Flickr')

    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if($photo->stat == 'ok')
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="h1 panel-title">{{ $info->photo->title->_content }}</h1>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <p>
                                        <a href="{{ $info->photo->urls->url[0]->_content }}" target="_blank">
                                            <img src="{{ $photo->sizes->size[1]->source }}" alt="{{ $info->photo->title->_content }}">
                                        </a>
                                    </p>
                                    <p>Username:
                                        <a href="{{ 'https://www.flickr.com/photos/' . $info->photo->owner->nsid }}" target="_blank">{{ $info->photo->owner->username }}</a>
                                    </p>
                                </div>

                                <div class="col-md-10">
                                    <p class="lead">Photos size</p>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Size</th>
                                            <th>Source</th>
                                        </tr>
                                        </thead>
                                        @foreach($photo->sizes->size as $item)
                                            <tbody>
                                            <tr>
                                                <td>{{ $item->width }} x {{ $item->height }}</td>
                                                <td><a href="{{ $item->source }}" target="_blank">{{ $item->source }}</a></td>
                                            </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
