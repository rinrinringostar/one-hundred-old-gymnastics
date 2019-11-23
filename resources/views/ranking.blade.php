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

    </style>

    <title>ランキング</title>
  </head>
  <body>
    <header class="sticky-top">
        <div>
            <p>100歳体操スタンプカード</p>
        </div>
        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </header>
    <div class="container">
        <div class="text-center">
            <p><u>ランキング</u></p>
        </div>
        <main class="mb-5">
            <p>ランキングの表</p>
            <div>
                <ul class="list-group">
                  @foreach ($users as $user)
                    <li class="list-group-item">{{ $user->name }}</li>
                  @endforeach
                  </ul>
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
                  <div class="col"><p><font size="2"><a href="{{ route('userStamp') }}">カード</a></font></p></div>
                  <div class="col"><p><font size="2"><a href="{{ route('users') }}">ランキング</a></font></p></div>
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
