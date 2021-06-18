<!-- NOMi - Subject Cards - Start-->
<div class="row">
  <!-- NOMi - Subject Card - Start-->
  <?php for ($i = 0; $i < sizeof($subjectDedails); $i++) { ?>
    <div class="col-md-6 col-xl-4 p-3">
      <div class="card">
        <p class="fs-4 fw-bold m-3 mb-0"><?php echo $subjectDedails[$i][0]->code . " - " . $subjectDedails[$i][0]->name; ?></p>
        <hr class="mb-0"/>
        <div class="card-body">
          <div class="row align-items-center justify-content-center fw-bold">
            <div class="col-9">
              <p class="fs-4 m-0"><?php echo $subjectDedails[$i][1]->name; ?></p>
              <p class="m-0"><?php echo $subjectDedails[$i][1]->qualification; ?></p>
            </div>
            <div class="col-3">
              <div class="d-flex">
                <p class="fs-4 m-0">N/A</p>
                <p class="m-0">%</p>
              </div>
              <p class="m-0">Rating</p>
            </div>
          </div>
          <hr/>
          <div class="d-flex justify-content-around h3 m-0">
            <a title="ClassWork" role="button" href="<?php echo base_url('ClassWork'); ?>"><i class="far fa-chalkboard-teacher"></i></a>
            <a title="HomeWork" role="button" href="<?php echo base_url('HomeWork'); ?>"><i class="far fa-book-reader"></i></a>
            <a title="Discussion Board" role="button" href="<?php echo base_url('DiscussionBoard'); ?>"><i class="far fa-comments"></i></a>
            <a title="Announcements" role="button" href="<?php echo base_url('Announcements'); ?>"><i class="far fa-bullhorn"></i></a>
          </div>
        </div>
      </div>
    </div>
  <?php }  ?>
  <!-- NOMi - Subject Card - End-->
</div>
<!-- NOMi - Subject Cards - Start-->