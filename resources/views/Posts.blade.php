{{--@extends('components.layout')--}}
{{--@section('Contion')--}}
<x-layout >
{{--    <#?php foreach($posts as $post): ?>--}}
        @foreach($posts as $post)
{{--             Blade Code--}}

{{--            <article style="{{$loop->even?:'background-color: #e1ca47 ;padding: 5px; border: 1px solid black;',''}}">--}}
            <article>
                <h1><a href="Posts_Group/{{$post->slug}}">
{{--                                <#?=$post->title;?>--}}
                        {{ $post->title  }}
                    </a></h1>
                <p>
{{--                            <#?=$post->excert;?>  PHP Code --}}
                    {{$post->excert}}
                </p>
            </article>
        @endforeach
{{--    <#?php endforeach ;?>--}}
</x-layout>


