<?php include("inc/header.inc.php"); ?>

<div class="container-fluid p-0">  
<hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
    <div class="w-100">
        <h2 class="mb-5">Education</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
        <div class="resume-content">
            <h3 class="mb-0"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->ecole1 ;} ?></h3>
            <div class="subheading mb-3"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->diplome1 ;} ?></div>
            
            
        </div>
        <div class="resume-date text-md-right">
            <span class="text-primary"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->ecole_date1 ;} ?></span>
        </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
        <div class="resume-content">
            <h3 class="mb-0"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->ecole2 ;} ?></h3>
            <div class="subheading mb-3"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->diplome2 ;} ?></div>
        
        </div>
        <div class="resume-date text-md-right">
            <span class="text-primary"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->ecole_date2 ;} ?></span>
        </div>
        </div>


        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
        <div class="resume-content">
            <h3 class="mb-0"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->ecole3 ;} ?></h3>
            <div class="subheading mb-3"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->diplome3 ;} ?></div>
        
        </div>
        <div class="resume-date text-md-right">
            <span class="text-primary"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->ecole_date3 ;} ?></span>
        </div>
        </div>

    </div>
    </section>
</div>


<?php include("inc/footer.inc.php"); ?>