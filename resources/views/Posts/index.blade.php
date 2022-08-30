

<x-layout >
        @foreach($posts as $post)
            <article>
                <h1><a href="Post/{{$post->slug}}">
                        {{ $post->title  }}
                    </a>
                </h1>
                <span style="font-size: 20px">
{{--                   <a href="/category/{{$post->category->name}}" > {{$post->category->name}}</a>--}}
                      <a href="/category/{{$post->category->slug}}" > {{$post->category->name}}</a>
                </span>
                <span style="font-size: 20px ;margin: 5px; ">
                   <a href="/user/{{$post->author->username}}" style="color: cornflowerblue" >
                       {{$post->author->name}}</a>
                </span>
                <p>
                    {{$post->excerpt}}
                </p>
            </article>
        @endforeach
</x-layout>
