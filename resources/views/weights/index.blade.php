<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Muscle</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Weights</h1>
        <div class='weights'>
            @foreach ($weights as $weight)
                <div class='weight'>
                    <p class='body'>{{ $weight->weight }}</p>
                    <form action="/weights/{{ $weight->id }}" id="form_{{ $weight->id }}" method="weight">
    @csrf
    @method('DELETE')
    <button type="button" onclick="deletePost({{ $weight->id }})">delete</button> 
</form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $weights->links() }}
        </div>
        <a href='/weights/create'>create</a>
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

