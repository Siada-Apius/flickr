@extends('layouts.layout')

@section('title', 'Flickr')

@section('content')
<div class="photo">
    <div class="container">
        <div class="row">
            <div class="col-md-12" ng-controller="PhotoController" ng-init="initiate()">
                <div ng-if="getData.info.stat == 'ok'">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="h1 panel-title">@{{ getData.info.photo.title._content }}</h1>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <p>
                                        <a href="@{{ getData.info.photo.urls.url[0]._content }}" target="_blank">
                                            <img ng-src="@{{ getData.photo.sizes.size[1].source }}" alt="@{{ getData.info.photo.title._content }}">
                                        </a>
                                    </p>
                                    <p>Username:
                                        <a href="https://www.flickr.com/photos/@{{ getData.info.photo.owner.nsid }}" target="_blank">@{{ getData.info.photo.owner.username }}</a>
                                    </p>
                                </div>

                                <div class="col-md-10">
                                    <p class="lead">Photo size</p>
                                    <table class="table table-responsive table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Size</th>
                                            <th>Source</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr ng-repeat="item in getData.photo.sizes.size">
                                            <td nowrap="">@{{ item.width }} x @{{ item.height }}</td>
                                            <td><a href="@{{ item.source }}" target="_blank">@{{ item.source }}</a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
