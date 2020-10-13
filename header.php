

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" height="30"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
      data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav m-auto">
      <?php $query=mysqli_query($con,"select id,CategoryName from tblcategory where Is_Active = 1");
      while($row=mysqli_fetch_array($query))
      {
      ?>
        <li class="nav-item">
          <a class="nav-link" href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
        </li>
      <?php } ?>
      </ul>
      <ul class="navbar-nav ml-auto">
        <form name="search" action="search.php" method="post">
          <div class="input-group">
            <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
            </span>
        </form>
      </ul>
        <!-- <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="about-us.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact-us.php">Contact us</a>
          </li>
        </ul> -->
    </div>
  </div>
</nav>