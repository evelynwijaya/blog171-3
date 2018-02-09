<div class="margintop">
<br><br><br>
</div>

<form action="/user/signin" method="post" id="form">
  <h1>LOGIN</h1>
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-md-6">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-md-6">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
  </div>


  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
  </div>

  <div class="row">
    <div class="col-sm-3 form-group">

    </div>
    <div class="col-sm-6 form-group" >
      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Login">
      <a href="/user/reg">Not Register Yet?</a>
    </div>
  </div>
</form>
