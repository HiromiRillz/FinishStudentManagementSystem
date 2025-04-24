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
            flex-direction: column;
            justify-content: left;
            align-items: left;
            width: 100px;

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
            top: 200px;
            left: 600px;
            position: absolute;
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
        .student-info-top {
            position: absolute;
            width: 400px;
            height: 250px;
            top: 200px;
            right: 600px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .student-info-top p {
            margin-top: 20px;
            height: 50px;
            width: 400px;
            background-color: #C4DFDF;
            border-radius: 40px 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .student-info-top p label{
            width: 100px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            text-align: center;
            font-size: 20px;
        }
        .student-info-top p input {
            height: 50px;
            width: 100%;
            background-color: #e6e6e6;
            border-style: none;
            border-radius: 0 40px 40px 0;
            text-align: center;
            font-size: 20px;
        }
        .student-info-bottom {
            margin-top: 0;
            position: absolute;
            width: 600px;
            height: 300px;
            top: 450px;
            left: 670px;
            margin-left: auto;
            margin-right: auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }        
        .student-info-bottom p {
            margin-top: 30px;
            height: 50px;
            width: 800px;
            background-color: #C4DFDF;
            border-radius: 40px 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .student-info-bottom p label{
            width: 100px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            text-align: center;
            font-size: 20px;
        }
        .student-info-bottom p input {
            height: 50px;
            width: 100%;
            background-color: #e6e6e6;
            border-style: none;
            border-radius: 0 40px 40px 0;
            text-align: center;
            font-size: 20px;
        }
        .student-info-bottom .comment {
            margin: 0;
            padding: 0;
            margin-top: 20px;
            height: 100%;
            display: flex;
            flex-direction: column;
            border-radius: 40px 40px;
        }
        .student-info-bottom .comment input {
            height: 100%;
            border-radius: 15px 15px 40px 40px;
        }
        .send {
            position: absolute;
            bottom: 80px;
            right: 400px;
            border-style: none;
            border-radius: 40px 40px;
            background-color: #C4DFDF;
            font-size: 30px;
            width: 200px;
            height: 70px;
            cursor: pointer;
            font-weight: bold;
            color: #344C64;
        }
        .send:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1><a href="{{ route('show.MainPage') }}" class="title">学生管理システム</a></h1>
    </header>
    <div id="wrap">
        <div class="top">
            <p class="back-button"><a href="{{ route('student.show', ['id' => $student->id]) }}">◃戻る</a></p>
        </div>
        <div class="bottom">
            <form action="{{ route('student.update', $student->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')    
                <div class="upload">
                    <img src="{{ asset('storage/' . $student->img_path) }}" width = 250 height = 250 alt="">
                    <div class="round">
                        <input type="file" name="img_path"> 画像編集
                        <i class = "fa fa-camera" style = "color: #fff;"></i>
                    </div>
                </div>
            
                <div class="student-info-top">
                    <p>
                        <label>名前</label>
                        <input type="text" name="name" size="35" maxlength="255" value="{{ old('name', $student->name ?? '') }}">
                    </p>
                    <p>
                        <label>学年</label>
                        <input type="number" name="grade" size="35" min="1" max="3" value="{{ old('grade', $student->grade ?? '') }}">
                    </p>
                    <p>
                        <label>学生ID</label>
                        <input type="number" name="student-id" value="{{ old('student-id', $student->id ?? '') }}">
                    </p>
                </div>
                <div class="student-info-bottom">
                    <p>
                        <label>住所</label>
                        <input type="text" name="address" size="35" maxlength="255" value="{{ old('address', $student->address ?? '') }}">
                    </p>
                    <p class="comment">
                        <label>コメント</label>
                        <input type="text" name="comment" size="35" maxlength="255" value="{{ old('comment', $student->comment ?? '') }}">
                    </p>
                </div>
                <div><input type="submit" class="send" value="情報変更登録"/></div>
            </form>
        </div>
    </div>
</body>
</html>