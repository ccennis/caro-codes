@extends('layouts.app')

@section('title', 'home')

@section('content')

<!doctype html>
<html lang="{{ app()->getLocale() }}">

        <div class="flex-top position-ref">
            <div class="content">
                <div class="title m-b-md">
                    <img src="img/carocodes_logo.png">
                </div>
            </div>
        </div>

        {{--TODO div hidden guy pop in--}}
        @include('partials.about')
        @include('partials.repository')
        @include('partials.links')


        @endsection

@section('page-javascript')
    @parent
<script>

    $(document).ready(function() {

        $('#aboutShow').click(function () {
            $('#about').toggle( "slide", {direction: "left" }, 1000 );
        });

        $('#aboutRepo').click(function () {
            console.log("hello");
            $('#repository').toggle( "slide", {direction: "left" }, 1000 );
        });

        $('#myLinks').click(function () {
            console.log("hello");
            $('#links').toggle( "slide", {direction: "left" }, 1000 );
        });

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    });

</script>
@endsection