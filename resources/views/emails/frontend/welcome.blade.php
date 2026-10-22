<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <title>أهلاً بيك</title>
</head>
<body style="font-family: Tahoma, sans-serif; padding: 20px;">
<h2>أهلاً بيك يا {{ $user->name }}!</h2>
<p>شكراً إنك عملت حساب معانا في الموقع.</p>
<p>الإيميل المسجل بتاعك: <strong>{{ $user->email }}</strong></p>
<br>
<p>بالتوفيق، فريق العمل.</p>
</body>
</html>
