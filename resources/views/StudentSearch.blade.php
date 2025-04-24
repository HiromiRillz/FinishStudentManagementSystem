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
        #left-content {
            padding-top: 70px;
            width: 450px;
            background-color: #D2E9E9;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            line-height: 2.5;
        }
        form {
            padding-top: 80px;
            color: #344C64;
        }
        form h2 {
            font-size: 50px;
            font-style: underline;
            font-family: "Klee One";
            padding: 0;
            margin: 0;
        }
        .name-search, .grade-search {
            width: 300px;
            font-size: 30px;
            line-height: 3.5;
        } 

        #left-content form label input  {
            background-color: #E6E6E6;
            border-style: none;
            width: 200px;
            height: 40px;
            text-align: center;
            font-size: 20px;
            margin-top: 50px;
            margin-right: 10px;            
            border: 2px solid #344C64;
            border-radius: 40px 40px;
        }
        #left-content form label {
            display: flex;
            justify-content: space-around;
            align-items: center;
            text-align: center;
            font-family: "Klee One";
            width: 450px;
            margin-top: 20px;

        }
        .send {
            background-color: #344C64;
            color: #F8F6F4;
            width: 300px;
            align-items: center;
            font-size: 20px;
            margin: 10px;
            margin-top: 50px;
            border-style: none;
        }
        .send:hover {
            cursor: pointer;
            background-color: #E6E6E6;
            color: #344C64;
        }
        #right-content {
            padding-top: 70px;
            width: 850px;
            background-color: #F8F6F4;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        p .search-bar {
            display: block;
            justify-content: left;
            margin-top: 15px;
            width: 300px;
        }
        .grade-search p input {
            width: 298px;
        }

        .backbutton {
            font-size: 20px;
            color: #344C64;
            text-align: left;
        }
        .backbutton:hover {
            text-decoration: none;
        }
        .backbutton::after{
            color: #344C64;
        }
        td img {
            height: 80px;
            width: 80px;
            align-items: center;
            border-radius: 50%;
        }
        #MyTable {
        table-layout: fixed;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 30px;
        width: 750px;
        }
        #MyTable thead tr {
        font-size: 20px;
        text-align: center;
        }
        #MyTable th, #MyTable td{
        padding: 12px 15px;
        width: 150px;
        text-align: center;
        }
        #MyTable td{
        padding: 12px 15px;
        width: 200px;
        height: 120px;
        text-align: center;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        }
        #MyTable tbody tr:nth-of-type(odd) {
            background-color: #E6E6E6;
        }
        .search-bar {
            text-align: center;
            font-size: 30px;
            color: #344C64;
            margin: 0;
            padding: 0;
        }
        td a {
            color: #344C64;
        }
        td a:hover {
            text-decoration: none;
        }
        td a::after {
            color: #A91D3A;
        }

    </style>
</head>
<body>
    @auth
    <header>
    <a href="{{ route('show.MainPage') }}" class="title">学生管理システム</a>
    </header>
    <div id="wrap">
        <div id="left-content">
            <p><a href="{{ route('show.MainPage') }}" class="backbutton"><img src="">⇚メイン画面に戻る</a></p>
            <form action="{{ route('student.search') }}" method="get" enctype="multipart/form-data">
                <h2>学生検索欄</h2>
                <label class="name-search">学生名 
                    <p><input type="text" name="name" size="35" maxlength="255"/></p>
                </label>
                <label class="grade-search">学年  
                    <p><input type="number" name="grade-level" min="1" max="3"></p>
                </label>
                <div><input type="submit" class="send" value="🔎 検索"/></div>
            </form>
        </div>
        <div id="right-content">
            <p class="search-bar" style="justfy-content: center;">検索一覧</p>
            <table id="MyTable">
                <thead>
                    <tr class="header">
                        <th></th>
                        <th>学生名</th>
                        <th>学年</th>
                        <th>学生詳細</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                <tr>
                    <td><img src="{{ $student->img_path ? asset('storage/' . $student->img_path) : asset('images/default.jpg') }}" alt="Profile"></td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->grade }}</td>
                    <td><a href="{{ route('student.show', ['id' => $student->id]) }}">学生詳細</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="pagination">{{ $students->appends(request()->query())->links() }}</div>
        </div>
    </div>
    @endauth
</body>
</html>