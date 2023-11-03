<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">

</head>

<body>

    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-XE4NvZIbFy4T6J8OK4p8OU3xN3i3Uj2FSqk9E2N7R9M+r5lOn5f6Fc90Gw3pDP9z" crossorigin="anonymous">
        <style>
            .full-height {
                height: 100vh; /* Esto establece la altura al 100% del viewport height */
            }
        </style>
    </head>
    <body>
        <section class="full-height" style="background-color: #ffffff;">
            <div class="container full-height">
                <div class="row full-height justify-content-center align-items-center">
                    <div class="col-xl-6">
                        <div class="card rounded-3 text-black">
                            <div class="card-body p-5">
                                <div class="text-center">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col">
                                            <img src="{{asset('assets/descarga.png')}}" style="width: 300px;" alt="logo">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('descarga1.jpg')}}" style="width: 100px;" alt="otra imagen">
                                        </div>
                                    </div>
                                    <h4 class="mt-4">Login</h4>
                                </div>

                                <form action="{{route('register')}}" method="post">
                                    @csrf
                                    <p>Iniciar sesion </p>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Nombre</label>
                                        <input type="text" name="name" class="form-control"
                                               placeholder="Ingresa tu nombre" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example11">Correo</label>
                                        <input type="email" name="email" id="form2Example11" class="form-control"
                                               placeholder="Ingresar correo electrónico" />
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example22">Contraseña</label>
                                        <input type="password" name="password" id="form2Example22" class="form-control" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form2Example22">Confimar Contraseña</label>
                                        <input type="password" name="password_confirmation" id="form2Example22" class="form-control" />
                                    </div>
                                    <div class="text-center pt-1 mb-4">
                                        <button class="btn btn-primary btn-block" type="submit">Registrarse</button>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="mb-0 me-2">Ir a Login</p>
                                        <a href="{{route('login')}}" class="btn btn-outline-danger">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-rfApDhIEbAKk2bPGSb6hy/4C2UB2LZGSZ/Kb5Qak6bGOYRR/m7fFwhv06Ukts5u4" crossorigin="anonymous"></script>
    </body>
    </html>

  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
