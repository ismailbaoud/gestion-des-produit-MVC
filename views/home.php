<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Login - Scholar Online School</title>


    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f9f9f9;
        }
        .auth-section {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 60px 0;
        }
        .auth-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 500px;
            width: 100%;
        }
        .auth-header h2 {
            font-size: 30px;
            margin-bottom: 20px;
            text-align: center;
        }
        .auth-header p {
            font-size: 14px;
            margin-bottom: 30px;
            text-align: center;
        }
        .form-control {
            border-radius: 4px;
            margin-bottom: 15px;
        }
        .main-button {
            text-align: center;
        }
        .main-button a {
            background: #0d6efd;
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .main-button a:hover {
            background: #0d6efd;
        }
        .auth-footer {
            text-align: center;
            margin-top: 20px;
        }
        .auth-footer a {
            text-decoration: none;
            color: #4CAF50;
        }
    </style>
</head>

<body>


    <div class="auth-section">
        <div class="auth-container">
            <div class="auth-header">
                <h2>Login to RNVous</h2>
                <p>Welcome back!</p>
            </div>

            <form action="controllers/add_controle.php" method="POST">
             
                <input type="text" class="form-control" placeholder="nom" name="nom" required>
                

                <input type="number" class="form-control" placeholder="prix" name="prix" required>

                <input type="text" class="form-control" placeholder="descrition" name="descrition" required>

                <div class="main-button">
                    <input type="submit" class="btn btn-primary" name="ajout_btn" value="ajout">
                </div>

                <div class="auth-footer">
                    <p>Don't have an account? <a href="/signUp">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>