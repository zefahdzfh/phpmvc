<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            position: sticky;
            top: 0;
            width: 100%;
            background-color: #f8f9fa;
            z-index: 1000;
        }

        .navbar {
            background-color: #f8f9fa;
        }

        .main-container {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            position: fixed;
            top: 56px; /* Height of the navbar */
            left: 0;
            width: 20%;
            background-color: #f8f9fa;
            padding: 20px;
            height: calc(100vh - 56px); /* Full height minus navbar height */
            overflow-y: hidden;
            border-right: 1px solid #ddd;
        }

        .content {
            margin-left: 20%;
            padding: 20px;
            width: 80%;
            box-sizing: border-box;
            height: 100vh; /* Full height */
            overflow-y: hidden;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .card-wrapper {
            flex: 1 1 calc(33.333% - 20px); /* Adjust for gaps */
            display: flex;
            flex-direction: column;
        }

        .card {
            background-color: #333;
            color: white;
            padding: 20px;
            box-sizing: border-box;
            flex: 1;
            height: 200px; /* Adjust as needed */
        }

        .card-text {
            margin-top: 10px;
        }

        footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            width: 100%;
        }

        .section-title {
            margin-top: 40px;
            font-size: 2em;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }

        .sidebar a {
            display: block;
            margin-bottom: 10px;
            color: #007bff;
            text-decoration: none;
        }

        .sidebar a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
