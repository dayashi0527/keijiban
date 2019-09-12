<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>4eachblog</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	
<?php
	
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
$stmt=$pdo->query("select*from 4each_keijiban");

?>


<header>
    <img src="4eachblog_logo.jpg">
	<ul>
		<li>トップ</li>
		<li>プロフィール</li>
		<li>4eachについて</li>
		<li>登録フォーム</li>
		<li>問い合わせ</li>
		<li>その他</li>
	</ul>
</header>
<main>
	<div class="left">
		<h1>プログラミングに役立つ掲示板</h1>
	<form method="post" action="insert.php">
		<div class="top">入力フォーム</div>
		
        <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename">
        </div>
        
        <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
		</div>
		
		<div>
            <label>コメント</label>
            <br>
            <textarea cols="70" rows="12" name="comments"></textarea>
        </div>
        
        <div>
            <input type="submit" class="submit" value="投稿する">
        </div>
		
	</form>
		
	<div class="kiji">
		<h3>タイトル</h3>
		<div class="contents">
		 記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。
		 記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
         記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
         記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
		<div class="handlename">posted by 通りすがり</div>
		</div>
	</div>
	
	<?php
		while ($row = $stmt->fetch()) {

 		echo "<div class='kiji'>";
 		echo "<h3>".$row['title']."</h3>";
 		echo "<div class='contents'>";
 		echo $row['comments'];
 		echo "<div class='handlename'>posted by".$row['handlename']."</div>";
 		echo "</div>";
 		echo "</div>";
 }
	?>

	</div>
			
	
	
	<div class="right">
		<div class="r1">
			<h1>人気の記事</h1>
			<p>PHP おすすめ本</p>
			<p>PHP MyAdminの使い方</p>
			<p>今人気のエディタ　TOP5</p>
			<p>HTMLの基礎</p>
			<h1>オススメリンク</h1>
			<p>インターノウス株式会社</p>
			<p>XAMPPのダウンロード</p>
			<P>Eclipseのダウンロード</P>
			<p>Bracketsのダウンロード</p>
			<h1>カテゴリ</h1>
			<p>HTML</p>
			<p>PHP</p>
			<p>MySQL</p>
			<p>JavaScript</p>
		</div>
	</div>
</main>
<footer>
copyright Ⓒ internous 4each blog the one which provides A to Z about programming.
</footer>
</body>
</html>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	