<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>アイディアルーレット</title>
  <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div class="header">
    <h1>アイディアを生み出す</h1>
  </div>

  <div class="choice-list">
    <div class="left-content">
      <p>アイディアのたね</p>
    </div>
    <div class="right-content">
      <p>ideaリスト</p>
    </div>
  </div>

  <div class="roulette">
    <h2>ルーレット</h2>
    <div class="roulette-main"></div>
    {{-- {!! Form::open() !!}
    {!! Form::button('ルーレットスタート') !!}
    {!! Form::close() !!} --}}
  </div>

  <div class="idea-section">
    <h3>上の二つの情報からアイデアを作成する</h3>
    {{-- {!! Form::open() !!}
    {!! Form::text('idea_text') !!}
    {!! Form::button('作成') !!}
    {!! Form::close() !!} --}}
  </div>
</body>
</html>