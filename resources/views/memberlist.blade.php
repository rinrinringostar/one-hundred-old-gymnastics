<!doctype html>
<html lang="ja">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <!--css-->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/base.css') }}">

      <style>
      th{text-align: center; }
      </style>

      <title>一覧</title>
  </head>
  <body>
      <header class="sticky-top">
          <div>
              <p>100歳体操スタンプカード</p>
          </div>
      </header>
    <div class="container">
        <div class="text-center">
            <p><u>グループメンバー</u></p>
        </div>
        <main>
            <!--新しいメンバーを追加-->
            <div class="container mb-3  text-center">
                <div class="row">
                    <div class="col-9 border border-right-0 rounded-left">新しいメンバーを追加</div>
                      <button onclick="location.href='{{ route('create') }}'" type="button" class="col-3 rounded-right btn btn-default btn-sm btn-dark border-left">＋</button>
                </div>
            </div>
            <!--メンバーリスト-->
            <div class="container">
                <div class="row">
                    @foreach ($nickNameUsers as $nickNameUser)
                        <button onclick="location.href='{{ url('groups/'.$nickNameUser->id.'/showQr') }}'" type="button" style="height: 80px;" class="btn btn-outline-secondary btn-block text-dark d-inline-block page-link text-center d-flex align-items-center">
                            <div class="col-2"><img src="{{ asset('storage/ブタカラー.png') }}" width="40" ></div>
                            <div class="col-8">{{ $nickNameUser->name }}</div>
                            <div class="col-2">{{ $nickNameUser->joincount.'回' }}</div>
                        </button>
                    @endforeach
                </div>
            </div>
          </main>
    </div>
    <footer class="fixed-bottom">
        <div class="container-fluid">
                <div class="row align-items-start">
                  <div class="col"> <button type="button" class="btn btn-dark rounded-pill footer_btn_space">　　　　</button></div>
                  <div class="col"> <button type="button" class="btn btn-outline-dark rounded-pill footer_btn_space">　　　　</button></div>
                </div>
                <div class="row align-items-end">
                  <div class="col"><p><font size="2"><a href="{{ route('index') }}">一覧</a></font></p></div>
                  <div class="col"><p><font size="2"><a href="{{ route('stampPush') }}">スタンプ</a></font></p></div>
                </div>
              </div>
    </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
