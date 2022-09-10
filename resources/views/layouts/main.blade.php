<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/styles.scss')
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="header__logo">
                Villa.io
            </div>
            <div class="header__menu">
                <a class="header__menu-link header__menu-link--active" href="/">Home</a>
                <a class="header__menu-link" href="/">Listing</a>
                <a class="header__menu-link" href="/">Property</a>
                <a class="header__menu-link" href="/about">About</a>
                <a class="header__menu-link" href="/contact">Contact</a>
            </div>
            <div class="header__account">
                <div class="header__account-link header__account-link--active"><i class="fa-solid fa-heart"></i></div>
                <div class="header__account-link"><i class="fa-solid fa-user"></i></div>
            </div>
        </div>
    </div>
    @yield('content')
</body>

</html>