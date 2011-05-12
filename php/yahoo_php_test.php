<?php

//http://d.hatena.ne.jp/shimooka/20070524/1179984297

//Q1.配列usersに「john」を追加しないのはどれか？
//
//1. $users[] = ‘john’;
//2. array_add($users,’john’);
//3. array_push($users,‘john’);
//4. $users ||= ‘john’;

//A1. 4が答え、2は組み込み関数ではないが、関数として定義されていないとも書かれていないから。

   //$users[''] = 'john';
   //array_add($users,'john');
   //array_push($users,'john');

//2. sort(), asort(), ksort()の違いを述べよ。また、どういった状況で利用するかを述べよ。

$test = array(
        'b' => 5,
        'c' => 1,
        'a' => 3,
        'e' => 10,
        'd' => 11,
        );

//sort($test);  //配列の値を昇順に並び返る=>添え字は振りなおし
                //連想配列に使うと添え字が数字で振りなおされるのであまりよくない。
//asort($test); //添え字も保持しつつ配列の値を昇順に並び替える
//ksort($test); //配列(連想)のキーで昇順にソートする。

//print_r($test);

//
//3. 以下のコードは何を出力するか？それはなぜか？
//

$num = 10;
function multiply(){
    $num = $num * 10;
}
multiply();
echo $num;

//
//4. 参照と通常の変数の違いを述べよ。また、どのように参照渡しをするか、なぜそうするかを述べよ。



//
//5. 実行中のスクリプトにライブラリコードを追加する関数は何か？
//
//6. foo() と @foo()の違いを述べよ。
//
//7. あなたがどのようにPHPアプリをデバッグしているかを述べよ。
//
//8. 「===」は何をするか？ 「==」がtrueを返し「===」がtrueを返さないサンプルを示せ。
//
//9. メソッドやプロパティを持たないクラス「myclass」はどのように宣言するかを示せ。
//
//10. 「myclass」のインスタンスをどうやって生成するかを述べよ。
//
//11. どうやってクラスのプロパティにアクセスしたり値を設定するかを述べよ。
//
//12. includeとinclude_onceの違いを述べよ。また、includeとrequireの違いを述べよ。
//
//13. ブラウザに新しいページにリダイレクトさせるための関数は何か？
//
//1. redir()
//2. header()
//3. location()
//4. redirect()
//
//14. ファイルを読み書きするため、ファイルを「開く」関数どれか？
//
//1. fget();
//2. file_open();
//3. fopen();
//4. open_file();
//
//15. mysql_fetch_row()とmysql_fetch_array()の違いを述べよ。
//
//16. 以下のコードは何をするか？起こっていることを説明せよ。
//
//$date=’08/26/2003’;
//print ereg_replace(“([0-9]+)/([0-9]+)/([0-9]+)”,\\2/\\1/\\3,$date);
//
//17. $stringにテキストが代入されているとき、HTMLタグを全て除去する正規表現はどのように書けば良いか？
//
//18. PHPとPerlにおいて、配列とハッシュの扱い方の違いを述べよ。
//
//19. HTTPのステートレスな性質を避ける方法を述べよ。
//
//20. GDライブラリは何をするかを述べよ。
//
//21. HTMLコードブロックを出力するいくつかの例を挙げよ。
//
//22. PHPはPerlより優れているか、論じよ。


?>