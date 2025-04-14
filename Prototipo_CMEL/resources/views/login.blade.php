<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

    </head>
    <body>
        <main class="form-signin w-100 m-auto">
            <form>
                <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Iniciar Sesion</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Usuario</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Contraseña</label>
                </div>

                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault">
                    <label class="form-check-label" for="checkDefault">
                        Recuerdame
                    </label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Acceder</button>
                <p class="mt-5 mb-3 text-body-secondary">©2025</p>
            </form>
        </main>
    </body>    