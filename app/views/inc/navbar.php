<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand " href="#">
      <img src="<?php echo URLROOT; ?>/public/img/logo/fixeto.png" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse me-3" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#AboutUs">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#OURSERVICES">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <?php if (isset($_SESSION['iduser'])) : ?>


          <!-- stat dropdown  -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $_SESSION['user_name']; ?>
            </a>
            <?php if ($_SESSION['client'] != null || $_SESSION['mechanical'] != null) : ?>
              <?php if ($_SESSION['mechanical'] != null) : ?>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/pages/mechanicalprofile">My profile</a></li>
                <?php else : ?>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/clients/index">My profile</a></li>

                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/pages/mechaniclist">find mechanical</a></li>

                  <?php endif; ?>
                  
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/users/logout">Logout</a></li>
                  </ul>
                </li>
                </ul>
                <?php endif; ?>
              
                <!-- end dropdown  -->
              <?php else : ?>
                <li class="nav-item">
                  <a class="nav-link me-2" href="<?php echo URLROOT; ?>/users/login">login</a>
                </li>

              <?php endif; ?>
      </ul>

    </div>
  </div>
</nav>