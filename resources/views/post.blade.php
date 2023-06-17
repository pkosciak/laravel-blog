<x-layout>
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <div>
            {!! $post->body !!}
        </div>
        <hr>
        <a href="/">go back</a>
    </article>
</x-layout>
