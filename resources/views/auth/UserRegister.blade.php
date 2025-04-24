<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
    <style>
        html{
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
        }
        body{
            background-color: #F8F6F4;
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #wrap {
            color: #344C64;
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        #head{
            height: auto;
            width: 500px;
            display: flex;
            font-size: 30px;
            margin-right: 50px;
        }
        #content {
            background-color: #C4DFDF;
            color: #344C64;
            height: 800px;
            width: 600px;
            border-radius: 20%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            transition: all 0.8s;
            &:hover{
            border-radius: 5%;
            transition: all border-radius 0.8s;
        }
        input {
            font-size: 20px;
            border: none;
            border-radius: 9999em;
        }
        .submit {
            background-color: #F8F6F4;
            color: #344C64;
            font-size: 20px;
            border-width: 0;
            cursor: pointer;
            margin-top: 20px;
            padding: 10px 20px;
        }
        .submit:hover{
            color: #F8F6F4;
            background-color: #344C64;
        }
        #lead {
            text-align: center;
        }
        p a {
            color: #344C64;
        }
        p a:hover{
            text-decoration: none;
            cursor: pointer;
        }
        .error{
            color: #A91D3A;
        }
    </style>
</head>
<body>
    <div id="wrap">
        <div id="head">
            <h1>学生管理システムアカウント作成</h1>
        </div>
        <div id="content">
            <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h2>ユーザー名</h2>
                <input type="text" name="name" size="35" maxlength="255" placeholder="ユーザー名を入力" required/>
                <h2>メールアドレス</h2>
                <input type="email" name="email" size="35" maxlength="255" placeholder="メールアドレス" required/>
                <h2>パスワード</h2>
                <input type="password" name="password" size="35" maxlength="255" placeholder="パスワード" required/>
                <h2>パスワード確認</h2>
                <input type="password" name="password_confirmation" size="35" maxlength="255" placeholder="パスワードを再入力" required/>
                <p class="error">* 必須項目をすべて記入してください</p>
                <div>
                    <input class="submit" type="submit" value="登録する"/>
                </div>
                <div id="lead">
                    <p>アカウントを作成するには、上記の情報を入力してください。</p>
                    <p>既にアカウントをお持ちの方はこちらからログインしてください。</p>
                    <p>➢<a href="{{ route('show.login') }}">ログイン</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>