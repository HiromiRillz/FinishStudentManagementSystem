<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main-Page</title>
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
        nav{
            height: 100%;
        }
        #menuToggle {
          display: block;
          height: 100%;
          position: fixed;
          top: 20px;
          right: 30px;
          margin: 0;
          padding: 0;
          color: #344C64;
          
          z-index: 1;
          
          -webkit-user-select: none;
          user-select: none;
        }

        #menuToggle a
        {
          text-decoration: none;
          color: #344C64;
          
          transition: color 0.3s ease;
        }

        #menuToggle a:hover
        {
          color: tomato;
        }

        #menuToggle input {
          display: block;
          width: 40px;
          height: 32px;
          position: absolute;
          top: -7px;
          left: -5px;

          
          cursor: pointer;
          
          opacity: 0;
          z-index: 2; 
          
          -webkit-touch-callout: none;
        }

        #menuToggle span {
          display: block;
          width: 33px;
          height: 4px;
          margin-bottom: 5px;
          position: relative;
          
          background: #344C64;
          border-radius: 3px;
          
          z-index: 1;
          
          transform-origin: 4px 0px;
          
          transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
                      background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
                      opacity 0.55s ease;
        }

        #menuToggle span:first-child {
          transform-origin: 0% 0%;
        }

        #menuToggle span:nth-last-child(2) {
          transform-origin: 0% 100%;
        }

        #menuToggle input:checked ~ span {
          opacity: 1;
          transform: rotate(45deg) translate(-2px, -1px);
          background: #344C64;
        }

        #menuToggle input:checked ~ span:nth-last-child(3) {
          opacity: 0;
          transform: rotate(0deg) scale(0.2, 0.2);
        }

        #menuToggle input:checked ~ span:nth-last-child(2) {
          opacity: 1;
          transform: rotate(-45deg) translate(0, -1px);
        }

        #menu {
          position: absolute;
          max-width: 400px;
          width: 100vw;
          max-height: 600px;
          margin: -100px 0 0 0;
          padding: 50px;
          padding-top: 125px;
          right: -100px;
          border-radius: 10% 0% 0% 30%;
          text-align: left;
          
          box-sizing: border-box;
          overflow-y: auto;
          background: #C4DFDF;
          list-style-type: none;
          
          -webkit-font-smoothing: antialiased;

          transform-origin: 0% 0%;
          transform: translate(100%, 0);
          
          transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
        }


        #menu li
        {
          padding: 10px 0;
          font-size: 22px;
        }

        #menu li label
        {
          cursor: pointer;
        }
        #menuToggle input:checked ~ ul {
          transform: none;
          opacity: 1;
        }

        .logout button {
          border: none;
          background-color: inherit;
          color: #344C64;
          transition: color 0.3s ease;
        }

        .logout button:hover {
          text-decoration: underline;
          color: tomato;
        }

        #wrap {
            height: 100%;
            width: 1300px;
            background-color: #F8F6F4;
            display: flex;
            border-left: #344C64 solid 5px;
            border-right: #344C64 solid 5px;
        }
        #content {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        #content a {
            font-size: 20px;
            color: #344C64;
        }
        #left-content {
            padding-top: 300px;
            width: 450px;
            background-color: #D2E9E9;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            line-height: 2.5;
        }
        .delete-button form {
            padding-top: 70px;
            color: #344C64;
        }
        form h2 {
            font-size: 50px;
            font-style: underline;
            padding: 0;
            margin: 0;
        }
        #left-content div label {
            display: flex;
            justify-content: space-around;
            align-items: center;
            text-align: center;
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
            top: 30px;
            height: 50px;
            width: 400px;
            font-size: 20px;
            text-align: center;
            background-color: #C4DFDF;            
            border-radius: 40px 40px;
        }
        .search-main div label {
            width: 200px;
            font-weight: bold;
            color: #344C64;
            font-size: 15px;
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
        .edit-button {
            background-color: #D2E9E9 !important;
        }

        .edit-button a {
            text-decoration: none;
            color: #344C64;
        }

        .edit-button a:hover {
            color: #344C64;
            text-decoration: underline;
        } 
        .delete-button {
          background-color: #D2E9E9 !important;
          width: 50px;
          height: 100px;
        }
        .delete-button button{
          border: none;
          background-color: #D2E9E9;
          color: #344C64;
        }
        .delete-button button:hover{
          text-decoration: underline;
          color: tomato;
        }
        #right-content {
          padding-top: 70px;
            width: 100%;
            height: 100%;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            text-align: center;
        }
        .menu-btn {
          height: 100px;
          width: 300px;
          background-color: #C4DFDF;
          font-size: 30px;
          border-radius: 60px;
          display: flex;
          justify-content: center;
          align-items: center;
        }
        .menu-btn :hover{
          background-color: #D2E9E9;
        }

        .menu-btn a {
          text-decoration: none;
          color: #344C64;
          width: 100%;
          height: 100%;
          border-radius: 60px;
          display: flex;
          align-items: center;
          justify-content: center;
        }
        .menu-btn form {
          height: 100px;
          width: 300px;
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .update-grade {
          width: 100%;
          height: 100%;
          border: none;
          background-color:  #C4DFDF;
          border-radius: 60px;
          color: #344C64;
          padding: 10px;
        }
        .alert-success{
          position: absolute;
          color: green;
          font-size: 30px;
          top: 200px;
        }
        
        
    </style>
</head>
<body>
  @auth
  <header>
    <a href="#" class="title">学生管理システム</a>
    <nav role="navigation">
      <div id="menuToggle">
        <input type="checkbox" id="menuCheckbox" />
        <span></span>
        <span></span>
        <span></span>
        <ul id="menu">
          <li>
          <label for="menuCheckbox" onclick="this.parentNode.click();">こんにちは、{{ $user->name }}！</label>
          </li>
          <li>
            <form action="{{ route('logout') }}" method="POST" class="logout">
              @csrf
              <button>Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </nav>
    </header>
    <div id="wrap">
      <div id="left-content">
          @if (session()->has('success'))
              <div class="alert-success">
                  {{ session('success') }}
              </div>
           @endif
        <div class="search-main">
            <div>
              <label>ユーザー名</label>
              <p>{{ $user->name }}</p>
            </div>
            <div>
              <label>メールアドレス</label>
              <p>{{ $user->email }}</p>
            </div>
            <div class="edit-button"><a href="{{ route('edit.User', $user->id) }}">管理ユーザー編集</a></div>
            <div class="delete-button">
              @if(session('confirm_delete'))
              <form action="{{ route('delete.User', $user) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <p>本当に削除しますか？</p>
                  <button type="submit" name="confirm" value="yes">はい (Yes)</button>
                  <button type="submit" name="confirm" value="no">いいえ (No)</button>
              </form>
              @else
                  <form action="{{ route('confirmDelete.User', $user) }}" method="POST">
                      @csrf
                      <button type="submit">ユーザー削除</button>
                  </form>
              @endif
            </div>
          </div>
        </div>
      <div id="right-content">
        <div class="menu-btn">
          <a href="{{ route('student.search')}}">学生検索</a>
        </div>
        <div class="menu-btn">
          <a href="{{ route('student.create')}}">学生新規登録</a>
        </div>
          <form action="{{ route('student.updateGrades') }}" method="POST" class="menu-btn">
            @csrf
            <button type="submit" class="update-grade">学年更新</button>
          </form>
      </div>
    </div>
    @endauth
</body>
</html>