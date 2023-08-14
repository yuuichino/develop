<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Category</title>
    </head>
    <body>
        <h1>type</h1>
        <form action="/categories" method="POST">
            @csrf
            <div class="type">
                <textarea name="category[type]" placeholder="追加するカテゴリーを入力してください。">{{ old('category.type') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('category.type') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
 <div class="back">[<a href="/">back</a>]</div>
        </div>
    </body>
</html>