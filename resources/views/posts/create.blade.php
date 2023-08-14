<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Muscle</title>
    </head>
    <body>
        <h1>Muscle</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="comment">
                <textarea name="post[comment]" placeholder="コメントを入力してください。">{{ old('post.comment') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.comment') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
 <div class="back">[<a href="/">back</a>]</div>
        </div>
    </body>
</html>