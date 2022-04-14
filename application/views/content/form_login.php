<section class="page-section bg-light" id="login">
    <div class="container">
       <center>
        <h2 class="section-heading text-uppercase">login</h2>
        <h6> Belum punya akun ???</h6><a href="<?=base_url('index.php/auth/register')?>">klik disini<a>
        </center>
        <form action="<?=base_url('index.php/auth/proses_login')?>"method="post">
     
  <div class="container">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="container">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="container form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <center><button type="submit" class="btn btn-primary">Masuk</button></center>
</form>
</div>
</section>
        
   
        