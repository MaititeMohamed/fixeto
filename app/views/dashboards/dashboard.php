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
            <div class="row g-3 my-2">
                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"><?=$data['NumberofUsers']->Numberofusers;?></h3>
                            <p class="fs-5">Users</p>
                        </div>
                        <i class="fa-solid fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"><?=$data['NumberofClients']->Numberofclients;?></h3>
                            <p class="fs-5">Clients</p>
                        </div>
                        <i class="fa-solid fa-user-group fs-1 primary-text border rounded-full secondary-bg p-3"></i>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2"><?=$data['Numberofmechanicals']->Numberofmechanicals;?></h3>
                            <p class="fs-5">mech</p>
                        </div>
                        <i class="fa-solid fa-wrench fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                        <div>
                            <h3 class="fs-2">%25</h3>
                            <p class="fs-5">Service</p>
                        </div>
                        <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <h3 class="fs-4 mb-3">Registration request</h3>
                <div class="col table-responsive">
                    <table class="table bg-white rounded shadow-sm  table-hover  ">
                        <thead>
                            <tr>
                                <th scope="col">FirstName</th>
                                <th scope="col">LastName</th>
                                <th scope="col">City</th>
                                <th scope="col">Email</th>
                                <th scope="col">status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data['InActivemechanicalInfo'] as $Inactive) : ?>

                            <tr>
                                
                                <td><?=$Inactive->FirstName;?></td>
                                <td><?=$Inactive->LastName;?></td>
                                <td><?=$Inactive->City;?></td>
                                <td><?=$Inactive->Email;?></td>
                                <td>
                                <a class="btn btn-success" href="<?php echo URLROOT; ?>/Dashbords/setActive/<?=$Inactive->idm;?>; ?>">Accept</a>                                    
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->
</div>

<?php require APPROOT . '/views/dashboards/footerDash.php'; ?>