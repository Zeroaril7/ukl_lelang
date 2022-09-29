<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="author" content="Muhamad Nauval Azhar">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="This is a login page template based on Bootstrap 5">
  <title>Bootstrap 5 Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
  <section class="h-100">
    <div class="container h-100">
      <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9" style="margin-top: 12rem">
          <div class="card shadow-lg">
            <div class="card-body p-5">
              <h1 class="fs-3 card-title fw-bold mb-4">Login</h1>
              <form method="POST" action="proses_login.php">
                <div class="mb-3">
                  <label class="mb-2 text-muted" for="username">Username</label>
                  <input id="username" type="username" class="form-control" name="username" value="" required>
                </div>

                <div class="mb-3">
                  <div class="mb-2 w-100">
                    <label class="text-muted" for="password">Password</label>
                  </div>
                  <input id="password" type="password" class="form-control" name="password" required>
                </div>

                <div class="d-flex align-items-center justify-content-sm-center">
                  <button type="submit" class="btn btn-primary col-12 mt-3" name="btnLogin">
                    Login
                  </button>
                </div>
              </form>
            </div>
            <div class="card-footer py-3 border-0">
              <div class="text-center">
                Tak Punya Akun? <a href="registration.php" class="text-dark">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>