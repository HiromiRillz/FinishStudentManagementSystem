<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生管理システム</title>
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
    height: 600px;
    width: 600px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    transition: all 0.8s;
    &:hover{
    border-radius: 5%;
    transition: all border-radius 0.8s;
}
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
}
.submit:hover{
    color: #F8F6F4;
    background-color: #344C64;
}
#lead{
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
.alert-success{
    position: absolute;
    top: 100px;
    font-size: 30px;
    color: green;
}

    </style>
</head>
<body>
    @if (session()->has('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif
<div id="wrap">
    <div id="head">
        <h1>学生管理システムへようこそ。</h1>
    </div>
    <div id="content">
        <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
            @csrf 
            <h2>メールアドレス</h2>
            <input type="text" name="email" size="35" maxlength="255" value="{{ old('email') }}" required/>
            
            <h2>パスワード</h2>
            <input type="password" name="password" size="35" maxlength="255" required/>


            @if ($errors->any())
                <p class="error">* メールアドレスとパスワードを正しく正しくご記入ください</p>
                <p class="error">* ログインに失敗しました。正しくご記入ください。</p>
            @endif

            <div>
                <input class="submit" type="submit" value="ログインする"/>
            </div>
            <div id="lead">
                <p>メールアドレスとパスワードを記入してログインしてください。</p>
                <p>会員登録がまだの方はこちらからどうぞ。</p>
                <p>➢<a href="{{ route('register') }}">会員登録をする</a></p>
            </div>
        </form>
    </div>
</div>
</body>
</html>