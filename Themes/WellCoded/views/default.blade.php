@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop

@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop


@section('content')
    <div id="blue">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="podcast-title">
                        {{ $page->title }}
                    </h1>
                </div>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->

    <div class="container mtb">
        <div class="row">
            <div class="col-lg-12">
                {!! $page->body !!}
            </div>
        </div>
    </div><! --/container -->
@stop
