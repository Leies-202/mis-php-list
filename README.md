## なにこれ
元は[衣亜(@ia@mk.lei202.com)](https://mk.lei202.com/@ia/)にTodoや時報を付けたいと思った結果の産物。

TypeScriptとか無茶なのでググればどうにかなる ~~(と何故か思った)~~ PHPで作った。

時報の条件分岐とかは完全にググりまくっての自作(?)、WebHook部分は[ここ](https://qiita.com/hoto17296/items/621a6e16f23785a543f3)の記事から拝借という体たらくだが動くのでまぁ。

そもそもそれぐらいしないと作れないと踏んでPHPを選んだのだから無かったら泣く。(いやWebHook遅れるなら何でも良いだろと言われればそうだけど...)

## 内容説明
todo:まんま。実行すると[memo.txt]の内容を投稿する単純な仕組み...のはず。

time:時報。0時とそれ以外で分けてある。0時の方は新年に対応させているが ~~うまく動くかは知らない。条件分岐は働いてるし動くんじゃない？~~ ←動いたわ。やったね。

Update:Misskeyをアップデートする際高負荷警報とかなんか色々叫んでくれます。アップデートスクリプトに捻じ込むといいと思います。(curlよくわかんにゃい)

icon:アイコンを変える。それだけ。

## 使い方

内容見ればわかる簡単な構造。

使いたいインスタンスのURL入れて使いたいアカウントのAPIを入れるだけ。

あとは各フォルダの中にもReadmeを大雑把に書いたからそれも見て。

## その他
でもやっぱりPythonとかで同じ事…してみたいよなぁ〜…。（PythonはMisskey.pyという物があるしできるはずだが...）
