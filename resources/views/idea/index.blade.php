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
  <div class="wrapper">
    <div class="header">
        <h1>アイディアを生み出す</h1>
      </div>

    <div class="choice-list">
        <div class="choice-content">
          <a class="idea-text" href="#">ideaのたね</a>
        </div>
        <div class="choice-content">
          <a class="idea-text" href="#">ideaリスト</a>
        </div>
      </div>

    <div class="roulette">
        <h2>ルーレット</h2>
        <div class="roulette-main">
          <div class="roulette-list">
            <p>高いもの</p>
          </div>
          <p class="symbol">×</p>
          <div class="roulette-list-bottom">
            <p>安いもの</p>
          </div>
        </div>
      </div>

    <div class="idea-section">
        <h3>アイデアを作成する</h3>
        <div class="idea-form">
          {!! Form::open(['route' => 'idea.store']) !!}
            {!! Form::text('idea_text', '', ['class' => 'idea-input', 'placeholder' => 'アイデアを入力してね', 'size' => '40x10']) !!}
            {!! Form::button('作成', ['class' => 'create-btn']) !!}
          {!! Form::close() !!}
        </div>
    </div>
  </div>
</body>
</html>