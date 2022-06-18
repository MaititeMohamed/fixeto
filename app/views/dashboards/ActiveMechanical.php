<?php require APPROOT . '/views/dashboards/headerDash.php'; ?>
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
        <a class="navbar-brand " href="#">
      <img src="<?php echo URLROOT; ?>/public/img/logo/fixeto.png" />
    </a>
        </div>
        <div class="list-group list-group-flush my-3">
            <a href="<?php echo URLROOT; ?>/Dashbords/dashboard" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="<?php echo URLROOT; ?>/Dashbords/ActiveMechanical" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-paperclip me-2"></i>ActiveMechanical</a>

        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                <h2 class="fs-2 m-0">Dashboard</h2>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"></i><?php echo $_SESSION['user_name']; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/users/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
       
     
        <div class="container-fluid px-4">
        

            <div class="row my-5">
                <h3 class="fs-4 mb-3">ActiveMechanical</h3>
                <div class="col table-responsive">
                    <table class="table bg-white rounded shadow-sm  table-hover  ">
                        <thead>
                            <tr>
                                <th scope="col">FirstName</th>
                                <th scope="col">LastName</th>
                                <th scope="col">City</th>
                                <th scope="col">Email</th>
                                <th scope="col">Report/feedback</th>
                            </tr>
                        </thead>
                        <tbody>
                       <?php foreach($data['ActiveMechanical'] as $ActiveMechanical) : ?>
                            <tr class="align-middle">
                                
                                <td><?=$ActiveMechanical->FirstName?></td>
                                <td><?=$ActiveMechanical->LastName?></td>
                                <td><?=$ActiveMechanical->City?></td>
                                <td><?=$ActiveMechanical->Email?></td>
                                <td>
                                <a class="btn btn-success mt-2" href="<?php echo URLROOT; ?>/Dashbords/Reports/<?=$ActiveMechanical->idm?>">Reports</a> 
                                <a class="btn btn-success mt-2" href="<?php echo URLROOT; ?>/Dashbords/feedback/<?=$ActiveMechanical->idm?>">Reviews</a>                                    
                                   
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div> 
        <!-- end page content  -->
    </div>
</div>
<!-- /#page-content-wrapper -->
</div>

<?php require APPROOT . '/views/dashboards/footerDash.php'; ?>