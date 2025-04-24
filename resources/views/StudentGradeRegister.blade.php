<!DOCTYPE html>
<html lang="ja">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade-Register</title>
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
        }
        .menu-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 300px;
            margin-top: 15px;
        }
        .button {
            margin: 20px;
            color: #344C64;
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
            padding: 0;
            margin: 0;
        }
        .name-search, .grade-search {
            font-size: 25px;
            line-height: 3.5;
        } 
        .grade-search {
            padding-right: 130px;
        }
        input {
            background-color: #E6E6E6;
            border-style: none;
            width: auto;
            height: 40px;
            margin-left: 60px;
        }
        label {
            display: flex;
            justify-content: space-around;
            align-items: center;
            text-align: center;
        }
        .back-button {
            margin-left: 20px;
        }
        .back-button a {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-right: 350px;
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
        .icon-pic img{
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }
        .search-main div {
            margin: 30px;
            padding: 0;
            margin-top: 20px;
            position: relative;
            display: flex;
            justify-content: space-around;
            align-items: center;
            top: 30px;
            height: 50px;
            width: 400px;
            font-size: 20px;
            text-align: center;
            background-color: #C4DFDF;            
            border-radius: 40px 40px;
        }
        .search-main div label {
            width: 100px;
            font-weight: bold;
            color: #344C64;
        }
        .search-main div p {
            margin: 0;
            padding: 0;
            height: 50px;
            width: 100%;
            border-style: none;
            background-color: #e6e6e6;
            font-weight: normal;
            color: #344C64;
            border-radius: 0px 40px 40px 0px;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .search-main #comment {
            height: 200px;
            display: flex;
            flex-direction: column;
            font-weight: bold;
            color: #344C64;
            border-radius: 40px 40px;
        }
        .search-main #comment p{
            height: 100%;
            font-weight: normal;
            border-radius: 0px 0px 40px 40px;
        }
        .edit-button a {
            color: #344C64;
            margin-top: 10px;
            font-size: 20px;
            cursor: pointer;
        }
        .edit-button a:hover {
            text-decoration: none;
        }
        #right-content {            
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #MyTable {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 30px;
            min-width: 400px;
            text-align: center;
        }
        #MyTable thead tr {
            font-size: 20px;
            text-decoration: underline;
            text-align: center;
            background-color: #C4DFDF;
            border-collapse: separate;
        }
        #MyTable th, #MyTable td{
            padding: 12px 15px;
            width: 150px;
            text-align: center;
        }
        #MyTable tbody tr:nth-of-type(odd) {
            background-color: #E6E6E6;
        }
        #MyTable tbody td {
            margin: auto;
        }
        form {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .grade-edit {
            width: 100px;
            height: 30px;
            font-size: 20px;
            background-color: #C4DFDF;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 40px 40px;
            margin: 0;
            padding: 0;
            margin-left: 600px;
        }
        .grade-edit a{
            color: #344C64;
        }
        td input {
            font-size: 30px;
            width: 65px;
            margin: auto;
            padding-right: 10px;
            text-align: center;
            background-color: inherit;
            border: #344C64 2px solid;
            border-radius: 10px 10px;
        }
        input[type="submit"] {
            background-color: #C4DFDF;
            position: relative;
            width: auto;
            height: 50px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 40px 40px;
            font-size: 35px;
            color: #344C64;            
            text-decoration: underline;
        }
        input[type="submit"]:hover {
            cursor: pointer;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <header>
        <h1><a href="{{ route('show.MainPage') }}" class="title">学生管理システム</a></h1>
        <div class="menu-bar">
            <p>ようこそ、</p>
            <p><a href="{{ route('show.MainPage')}}" class="button">{{ $user->name }}</a>！</p>
    </header>

    <div id="wrap">
            
        <div id="left-content">
            <p class="back-button"><a href="{{ url()->previous() }}">◃戻る</a></p>
            <div class="icon-pic"><img src="images/profile.jpg"></div>
            <div class="search-main">
                <div>
                    <label>名前</label>
                    <p>{{ $student->name }}</p>
                </div>
                <div>
                    <label>学年</label>
                    <p>{{ $student->grade }}年生</p>
                </div>
                <div>
                    <label>住所</label>
                    <p>{{ $student->address }}</p>
                </div>
                <div id="comment">
                    <label>コメント</label>
                    <p>{{ $student->comment }}</p>
                </div>
                <p class="edit-button"><a href="{{ route('student.edit', $student->id) }}">学生編集</a></p>
            </div>
        </div>
        <div id="right-content">
        <form action="{{ route('register.grade', $student->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <table id="MyTable">
                <thead>
                    <tr>
                        <th>教科</th>
                        <th>成績</th>
                        <th>学年時</th>
                        <th>学期</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($grades as $grade)
                    @php
                        $subjects = [
                            '国語' => 'japanese',
                            '数学' => 'math',
                            '理科' => 'science',
                            '社会' => 'social_studies',
                            '音楽' => 'music',
                            '家庭科' => 'home_economics',
                            '英語' => 'english',
                            '美術' => 'art',
                            '体育' => 'physical_education',
                        ];
                    @endphp
                    @foreach ($subjects as $subjectName => $attribute)
                        <tr>
                            <td>{{ $subjectName }}</td>
                            <td>
                                <input type="number" name="grades[{{ $attribute }}]" min="0" max="100" value="{{ old('grades.' . $attribute) }}">
                                点
                            </td>
                            <td>{{ $grade->grade ?? '--' }} 年</td>
                            <td>--</td>
                        </tr>
                    @endforeach   
                @endforeach                             
                </tbody>
            </table>
            <select name="term" required>
                <option value="">選択してください</option>
                <option value="1" {{ old('term') == 1 ? 'selected' : '' }}>1学期</option>
                <option value="2" {{ old('term') == 2 ? 'selected' : '' }}>2学期</option>
                <option value="3" {{ old('term') == 3 ? 'selected' : '' }}>3学期</option>
                <option value="4" {{ old('term') == 4 ? 'selected' : '' }}>4学期</option>
            </select>
            <div style="margin-top: 20px;">
                <input type="submit" class="send" value="成績登録"/>
            </div>
        </form>

        </div>
    </div>
</body>
</html>