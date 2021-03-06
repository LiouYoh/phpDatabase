<?php
session_start();
function NumberGen() {
    $arrNumber = array();
    $arrNumber[0] = rand(0,9);
    for ($i=1; $i<=3; $i++) {
        while (1) {
            $n = rand(0,9);
            if (!in_array($n,$arrNumber)) {
                $arrNumber[$i] = $n; break;
            }
        }
    }
    return $arrNumber;
}
function ABCompare($MyNumber, $YourGuess) {
    $A = $B = 0;
    for ($i=0; $i<4; $i++) {
        $n = $YourGuess[$i];
        if (in_array($n, $MyNumber)) {
            if ($n == $MyNumber[$i]) $A++;
            else $B++;
        }
    }
    $Answer = $A . 'A' . $B . 'B';
    return $Answer;
}

// 再新再來
if (isset($_POST['Replay'])) {
    unset($_SESSION['MyNumber']);
    unset($_SESSION['YourGuess']);
	session_unset(); 
}

// 我的數字已存在，就從Session變數中取出，若不存在，則呼叫NumberGen()產生
if (isset($_SESSION['MyNumber'])) {
    $arrNumber = $_SESSION['MyNumber'];
} else {
    $arrNumber = NumberGen();
    // 將我的數字存入Session變數
    $_SESSION['MyNumber'] = $arrNumber;
}
// 使用者點選送出
$yGuess = '';



if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = array();
}



if (isset($_POST['Send']) && !empty($_POST['Send'])) {
    if (isset($_POST['YourGuess'])) $yGuess = $_POST['YourGuess'];
	array_push($_SESSION['name'], $yGuess);
    // 確認有四個數字
    if (strlen($yGuess)==4 && is_numeric($yGuess)) {
        // 將數字拆解
        $arrYourNumber = array();
        for ($i=0; $i<4; $i++) {
            $arrYourNumber[$i] = substr($yGuess,$i,1);
        }
        // 檢查數字是否重複
        $Leagal = TRUE;
        for ($i=0; $i<4; $i++) {
            $n = $arrYourNumber[$i];
            for ($j=0; $j<4; $j++) {
                if ($i<>$j && $n==$arrYourNumber[$j])
                    $Leagal = FALSE;
            }
        }
        // 數字符合規定，進行比對
        if ($Leagal) {
            $Result = ABCompare($arrNumber, $arrYourNumber);
        }
    }
}
?>
<html>
<head>  
<title>網頁程式範例首頁</title> 
</head>
<body>
<div style="text-align:center;margin-top:20px;font-size:30px;font-weight:bold;">
I4010 網頁程式設計與安全實務</div>
<div style="text-align:center;margin-top:20px;font-size:20px;">
I4A64劉宥廷<br />
</div>
<div style="text-align:center;margin-top:20px;font-size:20px;">
<form method="POST" action="">
<input type="text" size="4" name="YourGuess" maxlength="4">&nbsp;
<input type="submit" name="Send" value="送出">&nbsp;&nbsp;
<input type="submit" name="Replay" value="重新再來">
</form>
<?php
echo '我的數字：' . implode('',$arrNumber) . '<br />';
if (!empty($yGuess)) echo '&nbsp;&nbsp;你猜的數字：<br>' . implode('<br>', $_SESSION['name']);
if (isset($Result)) {
    if ($Result == '4A0B') echo '你答對了！';
    else echo '&nbsp;&nbsp;結果：' . $Result;
} else {
    if (!empty($yGuess)) echo '&nbsp;&nbsp;您輸入的數字不合規定！';
}
?>
</div>
</body>
</html>
