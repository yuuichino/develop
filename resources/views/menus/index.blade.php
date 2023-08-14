<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Muscle</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Muscle</h1>
        <div class='menus'>
            @foreach ($menus as $menu)
                <div class='menu'>
                    <h2 class='title'>
    <a href="/menus/{{ $menu->id }}">{{ $menu->title }}</a>
    </h2>
                    <p class='body'>{{ $menu->body }}</p>
                    <form action="/menus/{{ $menu->id }}" id="form_{{ $menu->id }}" method="menu">
    @csrf
    @method('DELETE')
    <button type="button" onclick="deletePost({{ $menu->id }})">delete</button> 
</form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $menus->links() }}
        </div>
        <a href='/menus/create'>create</a>
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

