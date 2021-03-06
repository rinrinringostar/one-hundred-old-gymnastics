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
    /*スタンプカード*/
    .th_1{text-align: center; width:100%; height:95px; display: flex; -webkit-flex-wrap: wrap; flex-wrap: wrap; justify-content: center;}
    .float-left{width: 100%;}
    </style>

    <title>スタンプカード</title>
  </head>
  <body>
    <header class="sticky-top">
        <div>
            <p>100歳体操スタンプカード
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            </p>
        </div>
    </header>
    <main>
        <div class="container ">
            <div class="float-left my-3">
                    <table cellpadding="0" class="table-borderless">
                      <tbody>
                        <tr>
                            <th class="text-right">チーム名：</th>
                            <td class="text-left">{{ $nickNameUser->groupName }}</td>
                        </tr>
                        <tr>
                            <th class="text-right">名前：</th>
                            <td class="text-left">{{ $nickNameUser->name }}</td>
                        </tr>
                        <tr>
                            <th class="text-right">参加回数：</th>
                            <td class="text-left">{{ $nickNameUser->joincount }}<span>回</span></td>
                        </tr>
                      </tbody>
                    </table>
            </div>
        </div>
        <div class="th_1">
          @foreach ($joindays as $key => $value)
            <span style="position: relative; top: 12px; border: solid 1px black;"><img src="{{ asset('storage/はんこ.png') }}" width="80"></span>
            <span style="position: relative; bottom: -40px; right: 72px; font-size: 14px; color: red; font-weight: bold;">{{ substr($joindays[$key]->joinDateDay, 5) }}</span>
          @endforeach
        </div>
    </main>
    <footer class="fixed-bottom">
        <div class="container-fluid">
          <div class="row align-items-end">
            <div class="col footer-icon"><p><font size="2"><img src="{{ asset('storage/list.png') }}" width="40" ><a href="{{ route('users') }}">ランキング</a></font></p></div>
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
