@extends('layouts.layout')

@section('title', 'Flickr')

    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if($photo->stat == 'ok')
                    {{--<ul class="list-unstyled">--}}
                        {{--<li>--}}
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        {{ dump($photo) }}
                                    </h3>
                                </div>
                                <div class="panel-body">

                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-2">--}}
                                            {{--<img src="{{ $photo->sizes->size[0]->source }}" alt="">--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-10">--}}
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Source</th>
                                                    <th>URL</th>
                                                </tr>
                                                </thead>
                                                @foreach($photo->sizes->size as $item)
                                                    <tbody>
                                                    <tr>
                                                        <td><a href="{{ $item->source }}" target="_blank">{{ $item->width }} x {{ $item->height }}</a></td>
                                                        <td><a href="{{ $item->url }}" target="_blank">{{ $item->url }}</a></td>
                                                    </tr>
                                                    </tbody>
                                                @endforeach
                                            </table>
                                        {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                                <div class="panel-footer">
                                    <p>{{ $item->label }}</p>
                                </div>
                            </div>
                        {{--</li>--}}
                    {{--</ul>--}}
                @endif
            </div>
        </div>
    </div>
@stop
