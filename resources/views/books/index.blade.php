<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #e9f0ff; /* soft light blue */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 2rem 1rem;
            position: relative;
            min-height: 100vh;
        }
        /* Tombol back di kiri atas */
        .back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: #0b3d91; /* navy blue */
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 3px 8px rgba(11, 61, 145, 0.4);
            transition: background-color 0.3s ease;
            z-index: 1000;
        }
        .back-button:hover {
            background-color: #084080; /* navy blue darker */
            color: #ffd1a9; /* soft orange */
        }
        h1 {
            text-align: center;
            margin-bottom: 2rem;
            color: #0b3d91; /* navy blue */
            font-weight: 700;
            text-shadow: 1px 1px 2px rgba(11, 61, 145, 0.3);
        }
        .book-list {
            max-width: 720px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(11, 61, 145, 0.15);
            padding: 2.5rem 3rem;
        }
        .book-item {
            padding: 1rem 1.5rem;
            border-bottom: 2px solid #ffd1a9; /* soft orange */
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.25s ease;
            cursor: default;
        }
        .book-item:last-child {
            border-bottom: none;
        }
        .book-item:hover {
            background-color: #fcefe3; /* very light orange */
        }
        .book-title {
            font-weight: 700;
            color: #0b3d91; /* navy blue */
            font-size: 1.2rem;
        }
        .book-author {
            font-style: italic;
            color: #ff7f50; /* coral orange */
            font-weight: 600;
        }
    </style>
</head>
<body>
    <a href="{{ url('/') }}" class="back-button">&larr; Home</a>

    <h1>Daftar Buku</h1>
    <div class="book-list">
        <ul class="list-unstyled mb-0">
            @foreach($books as $book)
                <li class="book-item">
                    <span class="book-title">{{ $book->title }}</span>
                    <span class="book-author">oleh {{ $book->author->name }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
