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

    <title>QRコード表示</title>
  </head>
  <body>
    <header class="sticky-top">
        <div>
            <p>100歳体操スタンプカード</p>
        </div>
    </header>
    <main>
      <div class="container">
          <div class="text-center">
              <!--QRコード-->
              {{ $nickNameUser->name.'さん' }}
              <p><u>QRコード</u></p>
              <div id="qrcode"></div>
          </div>
          <div class="text-center">
        </div>
        <div class="col-12 clearfix">
            <div class="float-right">
              <button><a href="javascript:history.back()">戻る</a></button>
            </div>
          </div>
      </div>
    </main>
    <footer class="fixed-bottom">
    </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/jquery.qrcode.min.js') }}"></script>
    <script>
      $('#qrcode').qrcode({width: 200, height: 200, text: "https://www.yahoo.co.jp/"});
    </script>
  </body>
</html>
