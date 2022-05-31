<?php require APPROOT . '/views/inc/header.php'; ?>
<!-- <h1><?php echo $data['title']; ?></h1>
  <p>fixeto app its work</p> -->

<!-- slide start  -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div id="header-carousel" class="carousel-inner md-h-100">
    <div class="carousel-item active">

      <img src="<?php echo URLROOT; ?>/public/img/slider/image_01.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block ">
        <h5 class="ti">Logistique & Bord de route Prestations d'assistance.</h5>


        <button type="button" class="btn btn-warning">Service</button>
      </div>
    </div>
    <div class="carousel-item">

      <img src="<?php echo URLROOT; ?>/public/img/slider/image_02.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption  d-md-block ">
        <h5 class="ti">Logistique & Bord de route Prestations d'assistance.</h5>
        <button type="button" class="btn btn-warning">Service</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo URLROOT; ?>/public/img/slider/image_03.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption  d-md-block ">
        <h5 class="ti">Logistique & Bord de route Prestations d'assistance.</h5>
        <button type="button" class="btn btn-warning">Service</button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- slide start  -->

<!-- start about Us -->
<section class="container p-5 ">
  <div class="row   ">
    <div class="col-md-12  col-lg-6 ">
      <div>
        <img src="<?php echo URLROOT; ?>/public/img/All/image_01.jpg" class="d-block w-100 imgh " alt="...">

      </div>

    </div>

    <div class="col-md-12  col-lg-6 about d-flex align-items-center   ">
      <div class="mt-4   ">
        <h3>Fixeto</h3>
        <h1 class=" text-primary">About Us</h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt velit mauris. Integer
          mollis tellus blandit, luctus lorem quis, lacinia magna. Nam ut volutpat ipsum, at scelerisque
          tellus. Vivamus mattis est libero,
          Sed hendrerit, odio sed congue consectetur, felis mi finibus enim, in egestas justo lacus sed sapien.
          In pharetra sollicitudin leo, molestie molestie sapien lacinia sed. Suspendisse sit amet purus sit

        </p>
      </div>
    </div>
  </div>
</section>
<!-- End about Us -->

<!-- start WHY CHOOSE US -->
<section class="" id="whychooseUs">
  <div class="container p-5">
    <h1 class="pb-2 text-primary"> WHY CHOOSE US?</h1>
  <div class="row">
    <div class="col-md-12 col-lg-3 pb-lg-0 pb-4">
    <h2 class="text-md-center text-lg-start text-center ">  <i class="fa-solid fa-house-chimney"></i></h2>
      Deal with all tire malfunctions by repairing them on site or 
      by transporting the tires to a specialized center
    </div>
    <div class="col-md-12 col-lg-3 pb-lg-0 pb-4">
    <h2 class="text-md-center text-lg-start text-center ">  <i class="fa-solid fa-house-chimney"></i></h2>
    We charge the battery or replace it with a new battery
    </div>
    <div class="col-md-12 col-lg-3  pb-lg-0 pb-4">
    <h2 class="text-md-center text-lg-start text-center ">  <i class="fa-solid fa-house-chimney"></i></h2>
      Customers can choose the desired surface type from a list of all 
      surface types to suit all types of vehicles.
    </div>
    <div class="col-md-12 col-lg-3  ">
    <h2 class="text-md-center text-lg-start text-center ">  <i class="fa-solid fa-house-chimney"></i></h2>
      In-town or out-of-town gasoline or diesel delivery.
    </div>
  </div>
  </div>

</section>
<!-- End WHY CHOOSE US -->
<?php require APPROOT . '/views/inc/footer.php'; ?>