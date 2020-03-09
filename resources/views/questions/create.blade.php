<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CreateQuestion</title>
    <link rel="stylesheet" href="{{ asset('css/styleA.css') }}">
</head>
<body>
<form action="" method="post">
    @csrf
            <div class="title"><h1>作成画面</h1>
        <p class="question"><input type="text" name="first_word" value="{{ old('first_word') }}" >とは<input type="text" name="second_word" value="{{ old('second_word') }}">である</p>
            @error('first_word')
            <p>{{ $message }}</p>
            @enderror
            @error('second_word')
            <p>{{ $message }}</p>
            @enderror
        <div class="answer">
            <div>答え1：</div><div><textarea name="answer1" cols="50" rows="10">{{ old('answer1') }}</textarea></div>
            @error('answer1')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="answer">
            <div>答え2：</div><div><textarea name="answer2" cols="50" rows="10">{{ old('answer2') }}</textarea></div>
            @error('answer2')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="answer">
            <div>答え3：</div><div><textarea name="answer3" cols="50" rows="10">{{ old('answer3') }}</textarea></div>
            @error('answer3')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <p class="bottun">
            <button type="submit"  class="submit-btn">登録</button>
            <button type="button" class="nav-btn" onclick="location.href='/question'" >戻る</button>
        </p>
    </form>
    </div>
</body>
</html>