<html>
<head>
<meta charset=UFT-8>
<title>Ari Image Viewer</title>
<style>
    body {
      background-image: linear-gradient(-225deg, #2CD8D5 0%, #C5C1FF 56%, #FFBAC3 100%);;
    }
</style>
</head>
<body>
<body>
<form method="post" enctype="multipart/form-data">
  <input type="file" name="img"><br><br>
  <input type="text" name="img_name"> file name<br><br>
  <input type="submit" value="register">
</form>
    <?php
        // DB認証情報取得
        require_once("get_auth_function.php");
        GetAuth();
       
        // DB認証情報設定
        $dsn  = "mysql:dbname=$dbname;host=$host;charset=utf8";
        $driver_options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
      
        // DB接続
        $pdo = new PDO($dsn, $user, $pw, $driver_options);
        
        // SQL
        $sql = '
              INSERT INTO
                  `image_data` (img_name, img)
              VALUES
                  (:img_name, :img)
        ';
      
        // 画像データ取得
        $img_data = file_get_contents($_FILES['img']['tmp_name']);
      
        // 画像保存
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':img_name', $_POST['img_name'], PDO::PARAM_STR);
        $stmt->bindValue(':img', $img_data, PDO::PARAM_LOB);
        $stmt->execute();
    ?>
</body>
</html>
