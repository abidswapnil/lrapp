<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>lrapp</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('partials.header')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Recover password</div>
            <div class="card-body ">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">Give your email, we will send password recovery link.</small>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
              </form>
            </div>

          </div>
        </div>
      </div>


    </div>

  </body>
</html>
