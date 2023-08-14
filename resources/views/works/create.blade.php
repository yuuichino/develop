<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Work</title>
    </head>
    <body>
        <h1>Work</h1>
        <form action="/works" method="POST">
            @csrf
            <div class="title">
                <textarea name="work[title]" placeholder="トレーニング名を入力してください。">{{ old('work.title') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('work.title') }}</p>
            </div>
             <div class="count">
                <h2>count</h2>
                <textarea name="work[count]" placeholder="回数を入力してください">{{ old('work.count') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('work.count') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
 <div class="back">[<a href="/">back</a>]</div>
        </div>
    </body>
</html>