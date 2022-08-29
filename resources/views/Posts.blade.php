

<x-layout >
        @foreach($posts as $post)

            <article>
                <h1><a href="Post/{{$post->slug}}">
                        {{ $post->title  }}
                    </a>
                </h1>
                <span style="font-size: 20px">
                   <a href="/category/{{$post->category->name}}" > {{$post->category->name}}</a>
                </span>
                <span style="font-size: 20px ;margin: 5px; ">
                   <a href="/user/{{$post->auther->id}}" style="color: cornflowerblue" >
                       {{$post->auther->name}}</a>
                </span>
                <p>
                    {{$post->excerpt}}
                </p>
            </article>
        @endforeach
</x-layout>
