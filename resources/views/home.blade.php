<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6f42c1, #d6336c);
            color: white;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .home-container {
            background: rgba(0, 0, 0, 0.5);
            padding: 3rem 4rem;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
            max-width: 400px;
        }
        h1 {
            font-weight: 700;
            font-size: 2.8rem;
            margin-bottom: 1rem;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        .btn-primary {
            background-color: #ff6f61;
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #e85c50;
        }
    </style>
</head>
<body>
    <div class="home-container text-center">
        <h1>Selamat Datang</h1>
        <p>Klik tombol di bawah untuk melihat daftar buku:</p>
        <a href="{{ url('/books') }}" class="btn btn-primary">Lihat Buku</a>
    </div>
</body>
</html>
