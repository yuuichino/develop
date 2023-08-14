<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Work</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/works/{{ $work->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__comment'>
                <h2>コメント</h2>
                <input type='text' name='weight[title]' value="{{ $work->title }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>
</html>

