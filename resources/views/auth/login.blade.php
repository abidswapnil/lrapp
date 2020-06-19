<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lrapp</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('partials.header')
    <div class="container jumbotron">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header bg-primary text-white">Login</div>
            <div class="card-body ">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Log in</button>
                <div class="text-right">
                  <a href="{{ url('/password_recover') }}">forgotten password?</a>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>


    </div>

  </body>
</html>
