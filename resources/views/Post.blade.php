{{--@extends('components.layout')--}}
{{--@section('Contion')--}}
{{--    <article>--}}
{{--        <h1>--}}
{{--            {{$File_Contines->title}}--}}
{{--        </h1>--}}
{{--        <img src="{{$File_Contines->img}}" style="width: 300px"--}}
{{--             height="300px">--}}
{{--        <p {!! $File_Contines->body !!}--}}
{{--        <!-- <#?php--}}
{{--echo $Post;--}}
{{--?>-->--}}
{{--    </article>--}}
{{--    <a href="/"> Go Back</a>--}}
{{--@endsection--}}
<x-layout>
        <article>
            <h1>
                {{$File_Contines->title}}
            </h1>
            <img src="{{$File_Contines->img}}" style="width: 300px"
                 height="300px">
            <p {!! $File_Contines->body !!}
            <!-- <#?php echo $Post; ?>-->
        </article>
        <a href="/"> Go Back</a>
</x-layout>
