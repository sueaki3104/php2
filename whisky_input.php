<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link ref="stylesheet" href="./style.css">
  <title>ウィスキー購入に関するデータ登録（入力画面）</title>
</head>

<body>
  <div id="site_loader_overlay" style="display: none;">
        <div id="site_loader_spinner" style="display: none;"></div>
    </div>
    <div id="site_wrap" style="display: block;">
        <div id="main_content" class="clearfix row no-gutters">
            <!-- side col -->
            <div id="side_col" class="col-md-2 side_col_left" style="position: relative;">
                <!-- logo -->
                <div id="logo_image">
                    <h1 class="logo">
                        <a href="" title="ウィスキーが好きな方のコミュニティサイト"
                            data-label="ウィスキーが好きな方のコミュニティサイト"><img class="h_logo"
                                src="./img/whisky.png"
                                alt="ウィスキーが好きな方のコミュニティサイト" title="ウィスキーが好きな方のコミュニティサイト"></a>
                    </h1>
                </div>

                <a href="#" class="menu_button pc-none" style="display: none;"><span>menu</span></a>
                <div id="global_menu" class="clearfix">
                    <ul id="" class="menu">
                        <li id="menu-item-186"
                            class=""><a
                                href="" style="visibility: visible;">サイトの使い方</a></li>
                        <li id=""
                            class=""><a
                                href="" style="visibility: visible;">ウィスキーの登録</a></li>
                        <li id=""
                            class=""><a
                                href="" style="visibility: visible;">ウィスキーの部屋</a></li>
                        <li id=""
                            class=""><a
                                href=""
                                style="visibility: visible;">ウィスキーの情報発信</a></li>
                        <li id=""
                            class=""><a
                                href="" style="visibility: visible;">イベント告知</a></li>
                        <li id=""
                            class=""><a
                                href="" style="visibility: visible;">ウィスキー年鑑</a></li>
                        <li id=""
                            class="">
                            <a href="" aria-current="page"
                                style="visibility: visible;">CONTACT</a>
                        </li>
                    </ul>
                </div>
                <!-- social button -->
                <ul class="">
                    <li class="facebook"><a href="" target="_blank"
                            style="visibility: visible;"><span>Facebook</span></a></li>
                    <li class="instagram"><a href="" target="_blank"
                            style="visibility: visible;"><span>Instagram</span></a></li>
                    <li class="twitter"><a href="" target="_blank"
                            style="visibility: visible;"><span>twitter</span></a></li>
                </ul>
                <div class="" style="position: relative;">
                    <p class="store-name">whisky_lovers</p>
                    <p class="store-address">810-3111 福岡県古賀市花見南３−１４−１０</p>
                </div>
            </div>


  <div>
  <img src="./img/whisky.png" alt="whisky">
  </div>
    <form action="./whisky_create.php" method="POST">
      <fieldset class="field">
        <legend>ウィスキー購入に関するデータ登録（入力画面）</legend>
        <a href="./whisky_read.php">一覧画面</a>
        <div class="input">
        <p>購入日 : </p>  <br> <input type="date" name="date_of_purchase" style="width:200px;"> 
        </div>
        <div class="input">
          蒸留所名（ブランド）: <br>  <input type="text" name="distillery_name" placeholder="例：サントリー" style="width:200px;">
        </div>
        <div class="input">
          ウィスキー名: <br>  <input type="text" name="whisky_name" placeholder="例：山崎" style="width:200px;">
        </div>
        <div class="input">
          熟成年数:  <br> <input type="text" name="whisky_age"  placeholder="例：18  半角数字　NAは0で入力" style="width:200px;">
        </div>
        <div class="input">
          購入店名:  <br> <input type="text" name="place" placeholder="例：やまや　古賀店" style="width:200px;">
        </div>
        <div class="input">
          購入本数:  <br> <input type="number" name="how_many" placeholder="例：2 半角数字のみ" style="width:200px;">
        </div>
        <div class="input">
          値段（税込）:  <br> <input type="number" name="price" placeholder="例：10000 半角数字のみ" style="width:200px;">
        </div>
        <div class="input">
          想い出:  <br> <textarea name="memory" placeholder="購入の思い出を書いてください" style="width:200px;" style="height:400px;"></textarea>
        </div>
        <div>
          <button>登録</button>
        </div>
      </fieldset>
    </form>
  <div>

  </div>
</body>

</html>