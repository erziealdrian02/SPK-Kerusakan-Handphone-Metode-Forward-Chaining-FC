<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>HanCell</title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
    />
    <link rel="stylesheet" href="css/admin.css" />
    <style>
        .styled-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
    </style>
</head>
<body>
    <div class="admin">
        <?php include('component/header.php'); ?>
        <?php include('component/navbar.php'); ?>
        <main class="admin__main">
            <h2>Dashboard</h2>
            <div class="dashboard">
                <div class="dashboard__item dashboard__item--full">
                    <div class="card">
                        <img
                            src="./image/RancanganPErtanyaan.drawio.png"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </main>
        <?php include('component/footer.php'); ?>
    </div>
</body>
</html>
