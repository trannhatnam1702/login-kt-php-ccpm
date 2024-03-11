<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

<div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card" style="width: 20rem;">
        <div class="card-body">
            <h5>Đăng nhập</h5>
            <form action="result.php" method="post">
                <div class="form-group">
                    <label><b>Tên đăng nhập</b></label>
                    <input type="text" name="txtUsername" class="form-control" required>
                </div>
                <div class="form-group">
                    <label><b>Mật khẩu</b></label>
                    <input type="text" name="txtPassword" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3" name="btnLogin">Đăng nhập</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>