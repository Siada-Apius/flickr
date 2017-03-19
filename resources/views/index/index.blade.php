@extends('layouts.layout')

@section('title', 'Flickr')

@section('content')

<div class="index">
    <div class="container">
        <div class="row">
            <div class="col-md-12" ng-controller="IndexController" ng-init="initiate()">
                <h1>Recent Flickr Photos</h1>
                <p class="lead">A list of the latest public photos uploaded to flickr.</p>

                <div ng-show=" ! contentLoaded">
                    <div class="text-center"><i class="fa fa-spinner fa-spin fa-3x fa-fw margin-bottom"></i></div>
                </div>

                <div ng-show="contentLoaded">
                    <div ng-if="getData.flickr.stat == 'ok'">
                        <ul class="list-inline">
                            <li ng-repeat="item in getData.flickr.photos.photo">
                                <a ng-click="getPhotoById(item.id)">
                                    <img class="img-thumbnail"
                                         ng-src="http://farm@{{ item.farm }}.staticflickr.com/@{{ item.server }}/@{{ item.id }}_@{{ item.secret }}_q.jpg"
                                         alt="@{{ item.title }}" title="@{{ item.title }}">
                                    <p class="text-center">150x150</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop