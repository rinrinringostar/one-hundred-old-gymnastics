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
    button{widows: 200px; height: 30px;}
    </style>

    <title>情報変更</title>
  </head>
  <body>
    <header class="sticky-top">
        <div>
            <p>100歳体操スタンプカード</p>
        </div>
    </header>
    <div class="container">
        <div class="text-center">
            <p><u>メンバー情報変更</u></p>
        </div>
        <main>
            <!--現在の名前-->
            <div><p>{{ $nickNameUser->name }}</p></div>
            <div  class="border-bottom">〇〇〇</div>
            <!--新しい名前-->
            <form action="{{ url('groups/'.$nickNameUser->id.'/edit') }}" method="post">
              {{ csrf_field() }}
              <div class = "form-group row">
                <label for="text3a" class = "col-sm-2 col-form-label">新しい名前</label>
                <div class="col-sm-10 ">
                  <input name="name" type="text" id="text3a" class="form-control" placeholder="新しい名前を入力" required>
                </div>
              </div>
              <div class="col-12 clearfix">
                <div class="float-right">
                  <button><a href="javascript:history.back()">キャンセル</a></button>
                  <button type="submit" name="submit" class="btn btn-primary">登録</button>
                </div>
              </div>
            </form>
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
