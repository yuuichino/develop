<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Work</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Works</h1>
        <div class='works'>
            @foreach ($works as $work)
                <div class='work'>
                    <p class='body'>{{ $work->title }}</p>
                    <form action="/works/{{ $work->id }}" id="form_{{ $work->id }}" method="work">
    @csrf
    @method('DELETE')
    <button type="button" onclick="deletePost({{ $work->id }})">delete</button> 
</form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $works->links() }}
        </div>
        <a href='/works/create'>create</a>
        <script>
        function deletePost(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>
    </body>
</html>

