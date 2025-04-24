<!DOCTYPE html>
<html lang="ja">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
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
            display: flex;
            justify-content: space-around;
            align-items: center;
            text-align: center;
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
            font-size: 20px;
            cursor: pointer;
            width: 100%;
        }
        .edit-button:hover{
            background-color: #D2E9E9;
        }
        #right-content {            
            padding-top: 80px;
            width: 100%;
            left: 500px;
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
            color: #344C64;
        }
        #MyTable tbody tr:nth-of-type(odd) {
            background-color: #E6E6E6;
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
        .grade-register {
            width: 200px;
            height: 50px;
            font-size: 30px;
            font-weight: bold;
            border-radius: 40px 40px;
            background-color: #C4DFDF;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }
        .grade-register a {
            color: #344C64;
        }

    </style>
</head>
<body>
    <header>
        <h1><a href="{{ route('show.MainPage') }}" class="title">学生管理システム</a></h1>
    </header>

    <div id="wrap">
        <div id="left-content">
            <p class="back-button"><a href="{{ route('student.search') }}">◃戻る</a></p>
            <div class="icon-pic"><img src="{{ $student->img_path ? asset('storage/' . $student->img_path) : asset('images/default.jpg') }}"></div>
            <div class="search-main">
                <div>
                    <label>名前</label>
                    <p>{{ $student->name }}</p>
                </div>
                <div>
                    <label>住所</label>
                    <p>{{ $student->address }}</p>
                </div>
                <div id="comment">
                    <label>コメント</label>
                    <p>{{ $student->comment }}</p>
                </div>
                <div class="edit-button"><a href="{{ route('student.edit', $student->id) }}">学生編集</a></div>
            </div>
        </div>
        <div id="right-content">
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
                        $hasNullGrade = false; // Flag to track null grades
                    @endphp

                    @foreach ($grades as $grade)
                        @foreach ($subjects as $subjectName => $attribute)
                            <tr>
                                <td>{{ $subjectName }}</td>
                                <td>{{ $grade->$attribute ?? '--' }}点</td>
                                <td>{{ $grade->grade ?? '--' }}年</td>
                                <td>{{ $grade->term ?? '--' }}</td>
                            </tr>
                            @if (is_null($grade->$attribute))
                                @php
                                    $hasNullGrade = true;
                                @endphp
                            @endif
                        @endforeach
                    @endforeach
                </tbody>
            </table>
            @if (!$hasNullGrade)
                <p class="grade-edit"><a href="{{ route('show.grade.edit', $student->id) }}">成績編集</a></p>
            @endif


            @if ($hasNullGrade)
                <p class="grade-register"><a href="{{ route('show.student.grade', $student->id) }}">成績登録</a></p>
            @endif

        </div>
    </div>
</body>
</html>
