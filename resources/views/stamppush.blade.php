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

    <title>スタンプ捺印</title>
  </head>
  <body>
    <header class="sticky-top">
        <div>
            <p>100歳体操スタンプカード</p>
        </div>
    </header>
    <div class="container">
        <div class="text-center">
            <p><u>スタンプ</u></p>
        </div>
        <main class="mb-5">
            <!--日付入力-->
            <div class="col-12 clearfix">
                <div class="float-right">
                    <h7>日付</h7>
                    <input type="date"></input>
                </div>
            </div>
            <!--行間のためのライン-->
            <div>
                <hr>
            </div>
            <!--メンバー一覧・選択-->
            <div class="container">
                @foreach ($nickNameUsers as $nickNameUser)
                    <div class="row border py-2 text-center d-flex align-items-center">
                        <div class="col-2"><img src="ブタ_カラー3.png" width="40" ></div>
                        <div class="col-8"><a href="{{ url('groups/'.$nickNameUser->id.'/edit') }}">{{ $nickNameUser->name }}</a></div>
                        <div class="col-2"><input type="checkbox"></div>
                    </div>
                @endforeach
            </div>
            <!--行間のためのライン-->
            <div>
                <hr>
            </div>
            <!--ボタン-->
            <div class="col-12">
                <div class="col text-center">
                  <button type="button" class="btn btn-dark rounded-pill">スタンプを押す</button>
                </div>
            </div>
        </main>
    </div>
    <footer class="fixed-bottom">
        <div class="container-fluid">
                <div class="row align-items-start">
                  <div class="col"> <button type="button" class="btn btn-outline-dark rounded-pill footer_btn_space">　　　　</button></div>
                  <div class="col"> <button type="button" class="btn btn-dark rounded-pill footer_btn_space">　　　　</button></div>
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
