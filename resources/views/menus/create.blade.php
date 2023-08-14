<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Muscle</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/menus" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
               <input type="text" name="menu[title]" placeholder="タイトル" value="{{ old('menu.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('menu.title') }}</p>
                
                <input type="text" name="menu[test]" placeholder="タイトル"/>
                <input type="text" name="cat[title]" placeholder="タイトル"/>
                <input type="text" name="cat[body]" placeholder="タイトル"/>
                <input type="text" name="dog[1][title]" placeholder="タイトル"/>
                <input type="text" name="dog[1][body]" placeholder="タイトル"/>
                
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="menu[body]" placeholder="今日も1日お疲れさまでした。">{{ old('menu.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('menu.body') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
 <div class="back">[<a href="/">back</a>]</div>
        </div>
    </body>
</html>