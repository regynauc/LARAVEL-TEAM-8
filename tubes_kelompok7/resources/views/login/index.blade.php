<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1
    </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="/style/signin.css" rel="stylesheet">
  </head>
  <body class="text-center" style="background-color:rgb(218, 42, 42)">
    <main class="form-signin">
      <form action="/login" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal" style="font-family: serif">Please sign in
        </h1>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" @error('email')@enderror is-invalid id="email" placeholder="name@example.com">
          <label for="email">Email address
          </label>
        </div>
        <div class="form-floating">
          <input type="password"  name ="password"class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password
          </label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in
        </button>
      </form>
      <small>Not registered ?
        <a href="/register">Register Now !
          </small>
        </main>
      </body>
    </html>