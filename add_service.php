<?php 
require_once('service.php');

if (isset($_POST['save'])) {
    $data = new Service();
    $data->setServiceName($_POST['ServiceName']);
    $data->setPrice($_POST['Price']);
    $data->setPhoto($_POST['Photo']);
    $data->insert();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Service</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Cormorant Garamond", serif;
            background: linear-gradient(135deg, rgba(227, 210, 179, 0.5) 0%, rgba(247, 245, 240, 1) 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            padding: 50px;
            max-width: 500px;
            width: 100%;
        }

        h3 {
            color: rgb(124, 118, 100);
            font-size: 32px;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            color: rgb(124, 118, 100);
            font-size: 16px;
            margin-bottom: 8px;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 2px solid rgba(227, 210, 179, 0.5);
            border-radius: 8px;
            font-size: 16px;
            font-family: inherit;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: rgb(227, 210, 179);
            background-color: rgba(227, 210, 179, 0.1);
        }

        button {
            width: 100%;
            padding: 14px;
            background: rgb(227, 210, 179);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
            font-family: inherit;
        }

        button:hover {
            background: rgb(207, 190, 159);
        }

        button:active {
            transform: scale(0.98);
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: rgb(124, 118, 100);
            text-decoration: none;
            font-size: 14px;
        }

        a:hover {
            color: rgb(207, 190, 159);
        }

        @media (max-width: 480px) {
            .container {
                padding: 30px 20px;
            }

            h3 {
                font-size: 24px;
                margin-bottom: 20px;
            }

            button {
                padding: 12px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h3>Add New Service</h3>
    
    <form method="POST">
        <div class="form-group">
            <label>Service Name</label>
            <input type="text" name="ServiceName" required>
        </div>

        <div class="form-group">
            <label>Price</label>
            <input type="number" name="Price" required>
        </div>

        <div class="form-group">
            <label>Photo (filename)</label>
            <input type="text" name="Photo" required>
        </div>

        <button type="submit" name="save">SAVE</button>
    </form>

    <a href="dashboard.php">← Back to Dashboard</a>
</div>

</body>
</html>