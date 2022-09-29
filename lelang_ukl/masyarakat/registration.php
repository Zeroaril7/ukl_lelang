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
            <div class="card-body pt-5 ps-5 pe-5 pb-4 ">
              <h1 class="fs-4 card-title fw-bold mb-5 text-center">Register</h1>
                <form action="proses_registration.php" method="POST">
                    <div class="form-group row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>
                        <div class="col-md-8">
                            <input type="text" id="nama " class="form-control" name="nama" required>
                        </div> 
                    </div>
                    <div class="form-group row mb-3">
                        <label for="telepon" class="col-md-4 col-form-label text-md-right">Telepon</label>
                        <div class="col-md-8">
                            <input type="number" id="telp" class="form-control" name="telp" required>
                        </div> 
                    </div>

                    <div class="form-group row mb-3">
                        <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                        <div class="col-md-8">
                            <input type="text" id="username" class="form-control" name="username" required>
                        </div> 
                    </div>

                    <div class="form-group row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                        <div class="col-md-8">
                            <input type="password" id="password" class="form-control" name="password" required>
                        </div> 
                    </div>
                    <div class="d-flex align-items-center justify-content-sm-center">
                        <button type="submit" class="btn btn-primary col-12 mt-2" name="btnRegist">
                            Register
                        </button>
                    </div>
                </form>
            </div>
            <div class="card-footer py-3 border-0">
                    <div class="text-center">
                      Sudah Punya Akun? <a href="login.php" class="text-dark">Login</a>
                    </div>
                  </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>