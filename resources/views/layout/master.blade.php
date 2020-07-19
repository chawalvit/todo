<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title',"เว็บของฉัน")</title>
</head>
<body>
    <header><a href="/">หน้าแรก</a>|<a href="/login">เข้าสู่ระบบ</a> |<a href="/create">เพิ่มรายการ</a> </header>
    <hr>
    <div>
        @yield("content")
    </div>
    <hr>
    <p>jjj</p>
</body>
</html>
