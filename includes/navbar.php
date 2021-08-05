
  
<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">RentACar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Reserve</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button id="show-signup" class="btn btn-primary me-md-2 pop-up" type="button">Sign Up</button>
        <div id="firstpopup" class="pop-up">
          <form action="#" class="sign-up">
            <h1>Sign Up</h1>
            <label for="name"><b>İsim</b></label>
            <input type="text" name="name" required>
            <label for="name"><b> Soy İsim</b></label>
            <input type="text" name="lastname" required>


            <label for="email"><b>Email</b></label>
            <input type="text" name="email" required>

            <label for="psw"><b>Şifre</b></label>
            <input type="password" name="psw" required>

            <button type="submit" class="btn">Kaydol</button>
            <button class="close-btn">X</button>
        </div>
        </form>
        <button class="btn btn-primary" type="button">Log In</button>
      </div>
      
    </div>
  </div>

</nav>

