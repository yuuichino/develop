<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Weight</title>
    </head>
    <body>
        <h1>Weight</h1>
        <form action="/weights" method="POST">
            @csrf
            <div class="body">
                <textarea name="weight[weight]" placeholder="体重を入力してください。">{{ old('weight.weight') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('weight.weight') }}</p>
            </div>
             <div class="body">
                <h2>date</h2>
                <textarea name="weight[date]" placeholder="XXXX-XX-XX">{{ old('weight.date') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('weight.date') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
 <div class="back">[<a href="/">back</a>]</div>
        </div>
    </body>
</html>