<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Result</title>
</head>
<body>
    <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h5>Thông báo</h5>
                <div class="alert alert-danger" role="alert" style = "font-family: Tahoma, Arial, sans-serif; color: red;">
                <?php 
                        $username = $_POST["txtUsername"];
                        $password = $_POST["txtPassword"];

                        if($username == "admin" && $password == "admin")
                            echo "Đăng nhập thành công!";
                        else
                            echo "Tên đăng nhập/Mật khẩu sai. <a href=", "login.php", ">Vui lòng nhập lại!</a>";
                    ?>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>