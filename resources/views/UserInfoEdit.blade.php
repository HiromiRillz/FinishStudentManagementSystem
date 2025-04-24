<!DOCTYPE html>
<html lang="ja">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
            height: 100%;
            width: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            background-color: #F8F6F4;
            display: flex;
            justify-content: center;
        }
        header {
            height: 60px;
            width: 100%;
            font-family: ;
            background-color: #C4DFDF;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            top: 0;
        }
        .title {
            font-size: 40px;
            font-family: "Klee one";
            font-weight: normal;
            color: #344C64;
            text-decoration-thickness: 3px;
            margin-left: 20px;
            margin-bottom: 7px;
        }
        #wrap {
            height: 100%;
            width: 1300px;
            background-color: #F8F6F4;
            display: flex;
            flex-direction: column;
            border-left: #344C64 solid 5px;
            border-right: #344C64 solid 5px;
        }
        .profile-pic img {
            width: 50px;
            height: 50px;
            margin-right: 20px;
            margin-left: 20px;
            border-radius: 50%;
        }
        .top {
            padding-top: 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        h2 {
            margin-right: 20px;
        }
        .back-button {
            margin-left: 20px;
        }
        .back-button a {
            display: flex;
            justify-content: space-around;
            align-items: center;
            color: #344C64;
            font-size: 20px;
            text-decoration: none;
        }
        .back-button a img {
            height: 30px;
            width: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .back-button a:hover {
            text-decoration: underline;
        }
        .bottom {
            padding-top: 70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .main-submit {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        form {
            margin-top: 50px;
        }

        form p {
            margin: 80px;
            padding: 0;
            margin-top: 20px;
            position: relative;
            display: flex;
            justify-content: space-around;
            align-items: center;
            top: 30px;
            height: 50px;
            width: 750px;
            font-size: 30px;
            text-align: center;
            background-color: #C4DFDF;
        }
        form p label {
            width: 500px;
            color: #344C64;
        }
        form p input {
            margin: 0;
            padding: 0;
            height: 50px;
            width: 100%;
            border-style: none;
            background-color: #e6e6e6;
            text-align: center;
        }
        form div {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        form div input .name-submit .address-submit{
            height: 80px;
            width: 100px;
            background-color: #C4DFDF;
            color: #344C64;
            border-radius: 40px 40px;
            border-style: none;
            font-size: 30px;
        }

        .register {
            height: 80px;
            width: 100px;
            background-color: #C4DFDF;
            color: #344C64;
            border-radius: 40px 40px;
            border-style: none;
            font-size: 30px;
            margin-top: 50px;
        }

        .register:hover {
            cursor: pointer;
            border: #344C64 2px solid;
        }
    </style>
</head>
<body>
    <header>
        <a href="{{ route('show.MainPage') }}" class="title">学生管理システム</a>
    </header>
    <div id="wrap">
        <div class="top">
            <p class="back-button"><a href="{{ route('show.MainPage') }}">◃戻る</a></p>
            <h2 style="color: #344C64;">情報編集</h2>
        </div>
        <form action="{{ route('update.User', $user->id )}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="bottom">
            <div class="main-submit">
                <p class="name-submit">  
                    <label>ユーザー名</label>
                    <input type="text" name="name" size="35" maxlength="255" value="{{ $user->name }}">
                </p>
                <p class="address-submit">  
                    <label>メールアドレス</label>
                    <input type="email" name="email" size="35" maxlength="255" value="{{ $user->email }}">
                </p>
                <p class="password-submit">  
                    <label>パスワード</label>
                    <input type="password" name="password" size="35" maxlength="255">
                </p>
                <div><input type="submit" class="register" value="編集"/></div>
        </form>
            </div>
        </div>
    </div>
</body>
</html>