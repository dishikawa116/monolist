<?php
    // MySQLサーバ接続に必要な値を変数に代入
    $username = 'root';
    $password = '';
    
    // PDDのインスタンスを生成して、MySQLサーバに接続
    $database = new ODO('mysql:host=localhost;dbname=booklist;charset=UTF8;',$username,$paswword);
    
 //フォームから書籍タイトルが送信されていれば、データベースに保存
 if ($_POST['book_title']){
    // 実行するSQLを作成
    $sql = 'SELECT * FROM books ORDER BY created_at DESC';
    //ユーザ入力に依存するSQLを実行するので、セキュリティ対策をする
    $stateent = database->($sql);
    //ユーザ入力データ($_POST['book_title'])をVALUE(?)の?部分に代入する
    $statement->bindParam(':book_title', $_POST['book_title']);
    // SQL文を実行する
    $statement->execute();
    //ステートメントを破棄ずる
    $statement = null;
}
  
    //実行するSQLを作成
    $sql = 'SELECT * FROM books ORDER BY created_at DESC';
    // SQL を実行する直前のステートメントを取得する
    $statement = $database->query($sql);
    //結果レコード（ステートメントオブジェクト）を配列に変換する
    $records = $staetment-> fetchAll();
    
    //ステートメントを破棄する
    $statement = null;
    //MySQLを使った処理が終わると、接続は不要なので切断する
    $database = null;
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>booklist</title>
    </head>
    <body>
<?php
        print '<div style=background-color: skyblue;">';
        print '<p>動作確認用:</p>';
        print_r($_POST);
        print '</div>';
?>
            <a href="booklist.php"><h1>Booklist</h></a>
            <h2>書籍の登録フォーム</h>
            <form action="booklist.php" method="POST">
                <input type="text" name="book_title" placeholder="書籍タイトルを入力" required>
                <input type="submit" mname="submit_add_book" value="登録">
            </form>
            <h2>登録された書類一覧<h2>
            <ul>
               <?php // 登録された書籍のタイトルの数だけループ 開始 ?>
                   <li><?php // print 書籍タイトル; ?></li>
               <?php //ループ 終了 ?>
            </ul>
<?php
                if($records){
                    foreach($records as $record){
                        $book_title = $record['book_title'];
?>
                        <li></php print $book_title; ?></li>
<?php
                    }
                }
?>            
        </body>
</html>