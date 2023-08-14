<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Category</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>type</h1>
        <div class='categories'>
            @foreach ($categories as $category)
                <div class='category'>
                    <p class='type'>{{ $category->type }}</p>
                    <form action="/categories/{{ $category->id }}" id="form_{{ $category->id }}" method="category">
    @csrf
    @method('DELETE')
    <button type="button" onclick="deletePost({{ $category->id }})">delete</button> 
</form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $categories->links() }}
        </div>
        <a href='/categories/create'>create</a>
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

