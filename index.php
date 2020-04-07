<?php
require_once "util.inc.php";
$isValidated1 = "";
$sw1amo = "";
$sw1yie = "";
$sw1peri = "";
$isValidated2 = "";
$sw2amo = "";
$sw2yie = "";
$sw2peri = "";
$isValidated3 = "";
$sw3amo = "";
$sw3yie = "";
$sw3peri = "";
$isValidated4 = "";
$sw4amo = "";
$sw4yie = "";
$sw4peri = "";

    

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["type"]) ) {
        if ($_POST["type"] == 1) {
            $isValidated1 = true;
    $sw1amo = $_POST["sw1-amo"];
    $sw1yie = $_POST["sw1-yie"];
    $sw1peri = $_POST["sw1-peri"];
    if ($sw1amo == "" or !is_numeric($sw1amo)) {
        $isValidated1 = false;
        $sw1amoError = "金額を入力してください";
    }elseif ($sw1amo < 0) {
        $isValidated1 = false;
        $sw1amoError = "1以上の金額を入力してください";
    }else {
        $isValidated1 = true;
    }
    if ($sw1yie == "" or !is_numeric($sw1yie)) {
        $isValidated1 = false;
        $sw1yieError = "運用利回りを入力してください";
    }elseif ($sw1yie < 0.1) {
        $isValidated1 = false;
        $sw1yieError = "0.1以上の利回りを入力してください";
    }else {
        $isValidated1 = true;
    }
    if ($sw1peri == "" or !is_numeric($sw1peri)) {
        $isValidated1 = false;
        $sw1periError = "期間を入力してください";
    }elseif ($sw1peri < 0.1) {
        $isValidated = false;
        $sw1periError = "１年以上の期間を入力してください";
    }else {
        $isValidated = true;
    }
    $keisu = (1 + ($sw1yie/100))**$sw1peri;
    $result = ($sw1amo * $keisu);
        }
    }
    
}



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["type"])) {
        if ($_POST["type"] == 2) {
    $isValidated2 = true;
    $sw2amo = $_POST["sw2-amo"];
    $sw2yie = $_POST["sw2-yie"];
    $sw2peri = $_POST["sw2-peri"];
    if ($sw2amo == "" or !is_numeric($sw2amo)) {
        $isValidated2 = false;
        $sw2amoError = "金額を入力してください";
    }elseif ($sw2amo < 0) {
        $isValidated2 = false;
        $sw2amoError = "1以上の金額を入力してください";
    }else {
        $isValidated2 = true;
    }
    if ($sw2yie == "" or !is_numeric($sw2yie)) {
        $isValidated2 = false;
        $sw2yieError = "運用利回りを入力してください";
    }elseif ($sw2yie < 0.1) {
        $isValidated2 = false;
        $sw2yieError = "0.1以上の利回りを入力してください";
    }else {
        $isValidated2 = true;
    }
    if ($sw2peri == "" or !is_numeric($sw2peri)) {
        $isValidated2 = false;
        $sw2periError = "期間を入力してください";
    }elseif ($sw2peri < 0.1) {
        $isValidated2 = false;
        $sw2periError = "１年以上の期間を入力してください";
    }else {
        $isValidated2 = true;
    }
    $keisu = (1 + ($sw2yie/100))**($sw2peri * -1 );
    $result = (($sw2amo * 10000) * $keisu);
}
    } 
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["type"])) {
        if ($_POST["type"] == 3) {
    $isValidated3 = true;
    $sw3amo = $_POST["sw3-amo"];
    $sw3yie = $_POST["sw3-yie"];
    $sw3peri = $_POST["sw3-peri"];
    if ($sw3amo == "" or !is_numeric($sw3amo)) {
        $isValidated3 = false;
        $sw3amoError = "金額を入力してください";
    }elseif ($sw3amo < 0) {
        $isValidated3 = false;
        $sw3amoError = "1以上の金額を入力してください";
    }else {
        $isValidated3 = true;
    }
    if ($sw3yie == "" or !is_numeric($sw3yie)) {
        $isValidated3 = false;
        $sw3yieError = "運用利回りを入力してください";
    }elseif ($sw3yie < 0.1) {
        $isValidated3 = false;
        $sw3yieError = "0.1以上の利回りを入力してください";
    }else {
        $isValidated3 = true;
    }
    if ($sw3peri == "" or !is_numeric($sw3peri)) {
        $isValidated3 = false;
        $sw3periError = "期間を入力してください";
    }elseif ($sw3peri < 0.1) {
        $isValidated3 = false;
        $sw3periError = "１年以上の期間を入力してください";
    }else {
        $isValidated3 = true;
    }
    $keisu = ($sw3yie/100)/((1+($sw3yie/100))**$sw3peri -1);
    $result = (($sw3amo * 10000) * $keisu)/12;
}
    } 
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["type"])) {
        if ($_POST["type"] == 4) {
    $isValidated4 = true;
    $sw4amo = $_POST["sw4-amo"];
    $sw4yie = $_POST["sw4-yie"];
    $sw4peri = $_POST["sw4-peri"];
    if ($sw4amo == "" or !is_numeric($sw4amo)) {
        $isValidated4 = false;
        $sw4amoError = "金額を入力してください";
    }elseif ($sw4amo < 0) {
        $isValidated4 = false;
        $sw4amoError = "1以上の金額を入力してください";
    }else {
        $isValidated4 = true;
    }
    if ($sw4yie == "" or !is_numeric($sw4yie)) {
        $isValidated4 = false;
        $sw4yieError = "運用利回りを入力してください";
    }elseif ($sw4yie < 0.1) {
        $isValidated4 = false;
        $sw4yieError = "0.1以上の利回りを入力してください";
    }else {
        $isValidated4 = true;
    }
    if ($sw4peri == "" or !is_numeric($sw4peri)) {
        $isValidated4 = false;
        $sw4periError = "期間を入力してください";
    }elseif ($sw4peri < 0.1) {
        $isValidated4 = false;
        $sw4periError = "１年以上の期間を入力してください";
    }else {
        $isValidated4 = true;
    }
    $keisu = (((1 + ($sw4yie/100))**$sw4peri)-1)/($sw4yie/100);
    $result = ($sw4amo * $keisu);

}
    } 
}


?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投資シミュレーション</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

    
</head>

<body>
    <header class="glheader w">
        <h1 class="glheader__title">投資シミュレーション</h1>
    </header>
    <div class="glmenu w">
        <ul class="glmenu__list">
            <a class="glmenu__item" href="#SW1">
                <li>運用したらいくらになるか調べる</li>
            </a>
            <a class="glmenu__item" href="#SW2">
                <li>いくら投資すればいいか調べる</li>
            </a>
            <a class="glmenu__item" href="#SW3">
                <li>毎月の積み立て金額を調べる</li>
            </a>
            <a class="glmenu__item" href="#SW4">
                <li>積み立てをするといくらになるか調べる</li>
            </a>
        </ul>
    </div>
    <!-- 終価係数 -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'); ?>"> 
        <input type="hidden" name="type" value="1">
        <input type="hidden" name="position" value="0">
            <div class="calc w" id="SW1">
            <h2 class="calc__title">運用したらいくらになるか調べる</h2>
            <div class="calc__table">
                <div class="calc__row">
                    <p class="calc__item">投資金額</p>
                    <p class="calc__input"><input type="text" name="sw1-amo">円</p>
                </div>
                <?php if(isset($sw1amoError)):?>
                <div class="calc__error"><?= h($sw1amoError)?></div>
                <?php endif; ?>
                <div class="calc__row">
                    <p class="calc__item">運用利回り</p>
                    <p class="calc__input"><input type="text" name="sw1-yie">％</p>
                </div>
                <?php if(isset($sw1yieError)):?>
                <div class="calc__error"><?= h($sw1yieError)?></div>
                <?php endif; ?>
                <div class="calc__row">
                    <p class="calc__item">期間</p>
                    <p class="calc__input"><input type="text" name="sw1-peri">年</p>
                </div>
                <?php if(isset($sw1periError)):?>
                <div class="calc__error"><?= h($sw1periError)?></div>
                <?php endif; ?>
            </div>
            <p class="calc__button"><input type="submit" value="計算する"></p>
    </form>
    <?php if($isValidated1 ==true) :?>
    <div class="calc__result">
        <p class="calc__content1"><?= number_format(h($sw1amo))?>円を<?= h($sw1peri)?>年間<?= h($sw1yie)?>％の運用利回りで運用すると・・・</p>
        <p class="calc__content2"><span class="calc__content2__strong"><?= number_format(floor(h($result)))?></span>円になります！！</p>
    </div>
    <?php endif;?>
    </div>
    <!-- 現価係数 -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'); ?>"> 
    <input type="hidden" name="type" value="2">
    <input type="hidden" name="position" value="0">
        <div class="calc w" id="SW2">
            <h2 class="calc__title">いくらから投資すればいいか調べる</h2>
            <div class="calc__table">
                <div class="calc__row">
                    <p class="calc__item">目標金額</p>
                    <p class="calc__input"><input type="text" name="sw2-amo">万円</p>
                </div>
                <?php if(isset($sw2amoError)):?>
                <div class="calc__error"><?= h($sw2amoError)?></div>
                <?php endif; ?>
                <div class="calc__row">
                    <p class="calc__item">運用利回り</p>
                    <p class="calc__input"><input type="text" name="sw2-yie">％</p>
                </div>
                <?php if(isset($sw2yieError)):?>
                <div class="calc__error"><?= h($sw2yieError)?></div>
                <?php endif; ?>
                <div class="calc__row">
                    <p class="calc__item">期間</p>
                    <p class="calc__input"><input type="text" name="sw2-peri">年</p>
                </div>
                <?php if(isset($sw2periError)):?>
                <div class="calc__error"><?= h($sw2periError)?></div>
                <?php endif; ?>
            </div>
            <p class="calc__button"><input type="submit" value="計算する"></p>
    </form>
    <?php if($isValidated2 ==true) :?>
    <div class="calc__result">
        <p class="calc__content1"><?= h($sw2amo)?>万円を目指して<?= h($sw2peri) ?>年間<?= h($sw2yie)?>％の運用利回りで運用するには・・・</p>
        <p class="calc__content2">初期投資は<span class="calc__content2__strong"><?= number_format(floor(h($result)))?></span>円必要です！！</p>
    </div>
    <?php endif; ?>
    </div>
    <!-- 減債基金係数 -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'); ?>"> 
    <input type="hidden" name="type" value="3">
    <input type="hidden" name="position" value="0">
        <div class="calc w" id="SW3">
            <h2 class="calc__title">毎月の積み立て金額を調べる</h2>
            <div class="calc__table">
                <div class="calc__row">
                    <p class="calc__item">目標金額</p>
                    <p class="calc__input"><input type="text" name="sw3-amo">万円</p>
                </div>
                <?php if(isset($sw3amoError)):?>
                <div class="calc__error"><?= h($sw3amoError)?></div>
                <?php endif; ?>
                <div class="calc__row">
                    <p class="calc__item">運用利回り</p>
                    <p class="calc__input"><input type="text" name="sw3-yie">％</p>
                </div>
                <?php if(isset($sw3yieError)):?>
                <div class="calc__error"><?= h($sw3yieError)?></div>
                <?php endif; ?>
                <div class="calc__row">
                    <p class="calc__item">積立期間</p>
                    <p class="calc__input"><input type="text" name="sw3-peri">年</p>
                </div>
                <?php if(isset($sw3periError)):?>
                <div class="calc__error"><?= h($sw3periError)?></div>
                <?php endif; ?>
            </div>
            <p class="calc__button"><input type="submit" value="計算する"></p>
    </form>
    <?php if($isValidated3 == true) :?>
    <div class="calc__result">
        <p class="calc__content1"><?= h($sw3amo)?>万円を目指して<?= h($sw3peri) ?>年間<?= h($sw3yie)?>％の運用利回りで運用するには・・・</p>
        <p class="calc__content2">毎月<span class="calc__content2__strong"><?= number_format(floor(h($result)))?></span>円の積立が必要です！！</p>
    </div>
    <?php endif; ?>
    </div>
    <!-- 年金終価係数 -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'); ?>"> 
    <input type="hidden" name="type" value="4">
    <input type="hidden" name="position" value="0">
        <div class="calc w" id="SW4">
            <h2 class="calc__title">積み立てをするといくらになるか調べる</h2>
            <div class="calc__table">
                <div class="calc__row">
                    <p class="calc__item">毎月の積立金額</p>
                    <p class="calc__input"><input type="text" name="sw4-amo">円</p>
                </div>
                <?php if(isset($sw4amoError)):?>
                <div class="calc__error"><?= h($sw4amoError)?></div>
                <?php endif; ?>
                <div class="calc__row">
                    <p class="calc__item">運用利回り</p>
                    <p class="calc__input"><input type="text" name="sw4-yie">％</p>
                </div>
                <?php if(isset($sw4yieError)):?>
                <div class="calc__error"><?= h($sw4yieError)?></div>
                <?php endif; ?>
                <div class="calc__row">
                    <p class="calc__item">積立期間</p>
                    <p class="calc__input"><input type="text" name="sw4-peri">年</p>
                </div>
                <?php if(isset($sw4periError)):?>
                <div class="calc__error"><?= h($sw4periError)?></div>
                <?php endif; ?>
            </div>
            <p class="calc__button"><input type="submit" value="計算する"></p>
    </form>
    <?php if($isValidated4 == true) :?>
    <div class="calc__result">
        <p class="calc__content1"><?= h($sw4amo)?>円を<?= h($sw4peri) ?>年間<?= h($sw4yie)?>％の運用利回りで積み立て運用すると・・・</p>
        <p class="calc__content2"><span class="calc__content2__strong"><?= number_format(floor(h($result)))?></span>円になります！！</p>
    </div>
    <?php endif; ?>
    </div>
</body>

</html>