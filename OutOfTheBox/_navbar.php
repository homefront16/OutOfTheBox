<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="http://localhost/OutOfTheBox/presentation/handlers/ProductSearchHandler.php?name=">Out Of The Box</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/OutOfTheBox/presentation/handlers/ProductSearchHandler.php?name=">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/OutOfTheBox/presentation/views/adminShowAllUsers.php">Show All Users</a>
          <a class="dropdown-item" href="http://localhost/OutOfTheBox/presentation/handlers/ProductSearchHandler.php?name=">Show All Products</a>
        </div>
      </li>
    </ul>
    <form action="http://localhost/OutOfTheBox/presentation/handlers/ProductSearchHandler.php" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" name="name" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>