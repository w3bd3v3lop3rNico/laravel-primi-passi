<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="header">
        <h1>{{ $title }}</h1>
        <ul>
            <li>
                <a href="{{ url('about-us') }}">About us</a>
            </li>
            <li>
                <a href="{{ url('contacts') }}">Contacts</a>
            </li>
            <li>
                <a href="{{ url('products') }}">Products</a>
            </li>
            <li>
                <a href="{{ url('reviews') }}">Reviews</a>
            </li>
        </ul>
    </section>
</body>
</html>