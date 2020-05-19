<?php include("inc/header.inc.php"); ?>

<div class="container-fluid p-0">  
    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Experience</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->expt1 ;} ?></h3>
            
            <p><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->experience1 ;} ?></p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->date1 ;} ?></span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->expt2 ;} ?></h3>
            
            <p><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->experience2 ;} ?></p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->date2 ;} ?></span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->expt3 ;} ?></h3>
            
            <p><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->experience3 ;} ?></p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->date3 ;} ?></span>
          </div>
        </div>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
          <div class="resume-content">
            <h3 class="mb-0"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->expt4 ;} ?></h3>
            
            <p><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->experience4 ;} ?></p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php $result = $pdo->query("SELECT * FROM about");
          while($about = $result->fetch(PDO::FETCH_OBJ)) {
        
            echo $about->date4 ;} ?></span>
          </div>
        </div>

      </div>

    </section>
</div>

<?php include("inc/footer.inc.php"); ?>