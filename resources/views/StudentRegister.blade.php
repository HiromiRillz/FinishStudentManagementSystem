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
        .upload{
            width: 250px;
            position: relative;
            margin: auto;
        }

        .upload img{
            border-radius: 50%;
            border: 6px solid #C4DFDF;
        } 

        .upload .round{
            position: absolute;
            bottom: 0;
            right: 0;
            background: #F8F6F4;
            width: 90px;
            height: 32px;
            line-height: 33px;
            text-align: center;
            border: #C4DFDF 2px solid;
            border-radius: 40px 40px;
            overflow: hidden;
            color: #344C64;
            font-style: italic;
        }
        .upload .round:hover {
            background-color: #C4DFDF;
        }
        .upload .round input[type = "file"]{
            position: absolute;
            transform: scale(2);
            opacity: 0;
        }
        input[type=file]::-webkit-file-upload-button{
            cursor: pointer;
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
            width: 200px;
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
            <p class="back-button"><a href="{{ url()->previous() }}">◃戻る</a></p>
            <h2 style="color: #344C64;">情報登録</h2>
        </div>
        <form action="{{ route('student.register')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="bottom">
                <div class="upload">
                    <img src="{{ isset($student) && $student->img_path ? asset('storage/' . $student->img_path) : asset('images/default.png') }}" width = 250 height = 250 alt="" required>
                    <div class="round">
                        <input type="file" name="img_path"> Upload
                        <i class = "fa fa-camera" style = "color: #fff;"></i>
                    </div>
                </div>
            <div class="main-submit">
                <p class="name-submit">  
                    <label>名前</label>
                    <input type="text" name="name" size="35" maxlength="255" value="" required >
                </p>
                <p class="address-submit">  
                    <label>住所</label>
                    <input type="text" name="address" size="35" maxlength="255" value="" required>
                </p>
                <div><input type="submit" class="register" value="登録"/></div>
        </form>
            </div>
        </div>
    </div>
</body>
</html>