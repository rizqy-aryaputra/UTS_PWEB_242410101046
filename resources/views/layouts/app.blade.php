<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Stockroom</title>

<style>
    * {
        box-sizing: border-box;
        font-family: 'Segoe UI', sans-serif;
    }

    body {
        margin: 0;
        background: #f5f2ed;
        color: #2c2c2c;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    main {
        flex: 1;
    }

    .container {
        width: 90%;
        max-width: 1000px;
        margin: auto;
        padding: 30px 0;
    }

    .card {
        background: #ffffff;
        background-image:
            linear-gradient(45deg, rgba(0,0,0,0.015) 25%, transparent 25%),
            linear-gradient(-45deg, rgba(0,0,0,0.015) 25%, transparent 25%),
            linear-gradient(45deg, transparent 75%, rgba(0,0,0,0.015) 75%),
            linear-gradient(-45deg, transparent 75%, rgba(0,0,0,0.015) 75%);
        background-size: 6px 6px;
        background-position: 0 0, 0 3px, 3px -3px, -3px 0px;
        border-radius: 12px;
        padding: 25px;
        border: 1px solid #e6dfd6;
        box-shadow: 0 6px 14px rgba(0,0,0,0.05);
    }

    h1, h2, h3 {
        margin-top: 0;
        font-weight: 600;
    }

    .btn {
        background: #2c2c2c;
        color: white;
        padding: 10px 16px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        transition: 0.2s;
    }

    .btn:hover {
        background: #444;
    }

    input {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #dcd3c8;
        margin: 10px 0 15px;
        background: #faf8f5;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid #e6dfd6;
    }

    th, td {
        padding: 12px;
        border-bottom: 1px solid #eee;
    }

    th {
        background: #2c2c2c;
        color: white;
    }

    .badge {
        font-size: 12px;
        padding: 5px 10px;
        border-radius: 20px;
        background: #d4c4a8;
        color: #2c2c2c;
    }

    .low-stock {
        background: #e8dcd0;
        color: #2c2c2c;
    }

    .nav-link {
        color: #ffffff;
        text-decoration: none;
        font-size: 14px;
        letter-spacing: 0.5px;
        position: relative;
        transition: 0.25s;
    }

    .nav-link:hover {
        color: #d4c4a8;
    }

    .nav-link::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -4px;
        width: 0%;
        height: 1px;
        background: #d4c4a8;
        transition: 0.3s;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .nav-link {
        color: #ffffff;
        text-decoration: none;
        font-size: 14px;
        letter-spacing: 0.5px;
        padding: 8px 18px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(212, 196, 168, 0.35);
        backdrop-filter: blur(10px);
        transition: 0.3s ease;
    }

    .nav-link:hover {
        color: #2c2c2c;
        background: #d4c4a8;
        border-color: #d4c4a8;
        transform: translateY(-2px);
    }

    .nav-link:active {
        background: #b8a78f;
        color: #ffffff;
        transform: translateY(0);
    }

    .inventory-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        background: #fffaf5;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid #e6dfd6;
        box-shadow: 0 8px 20px rgba(44, 44, 44, 0.07);
    }

    .inventory-table th {
        background: #2c2c2c;
        color: #d4c4a8;
        font-weight: 500;
        letter-spacing: 0.5px;
        padding: 14px;
    }

    .inventory-table td {
        padding: 14px;
        border-bottom: 1px solid #eee4d8;
        background: rgba(255, 255, 255, 0.65);
    }

    .inventory-table tr:hover td {
        background: #f3ede3;
        transition: 0.25s;
    }

    .inventory-table tr:last-child td {
        border-bottom: none;
    }

    .back-button-wrapper {
        margin-top: 24px;
        text-align: left;
    }

    .btn-premium {
        display: inline-block;
        padding: 12px 26px;
        border-radius: 999px;
        text-decoration: none;
        font-weight: 500;
        font-size: 14px;
        letter-spacing: 0.5px;

        /* gradient soft sesuai tema */
        background: linear-gradient(135deg, #d4c4a8, #b8a78f);

        color: #2c2c2c;
        border: none;

        box-shadow: 0 6px 16px rgba(180, 160, 120, 0.35);
        transition: all 0.3s ease;
    }

    /* hover effect */
    .btn-premium:hover {
        background: linear-gradient(135deg, #e0d2b8, #c5b39c);
        transform: translateY(-2px);
        box-shadow: 0 10px 22px rgba(180, 160, 120, 0.45);
    }

    /* klik effect */
    .btn-premium:active {
        transform: translateY(0);
        box-shadow: 0 4px 10px rgba(180, 160, 120, 0.3);
    }
    @media (max-width: 768px) {
        .grid {
            grid-template-columns: 1fr;
        }
    }
</style>
</head>
<body>

    <x-navbar :username="$username ?? null" />

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    @include('components.footer')

</body>
</html>