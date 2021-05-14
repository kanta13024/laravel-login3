<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
  <form class="form-signin" method="POST" action="{{ route('login') }}">
  @csrf
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach (error-all() as $error)
             <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    <label for="inputEmail" class="visually-hidden">Email address</label>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>

</body>
</html>