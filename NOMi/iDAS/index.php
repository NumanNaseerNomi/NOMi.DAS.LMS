<?php require 'components\header.php'; ?>
<?php require 'components\subjectCard.php'; ?>
<div class="card">
  <h4 class="m-3 mb-0">New Admission</h4>
  <hr class="mb-0"/>
  <div class="card-body">
    <div class="">
      <form class="row g-3">
        <h5 class="text-center text-decoration-underline">Student Information</h5>
        <div class="col-md-4">
          <label for="nID" class="form-label">National Identity Number (CNIC, Birth Certificate, Other...)</label>
          <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="nID" placeholder="34597-1234567-8" size="13" pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" required>
        </div>
        <div class="col-md-4">
          <label for="validationDefault01" class="form-label">Student Name</label>
          <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
        </div>
        <div class="col-md-4">
          <label for="validationDefault02" class="form-label">Last Name</label>
          <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault02" required>
        </div>
        <div class="col-md-4">
          <label for="validationDefaultUsername" class="form-label">Username</label>
          <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">@</span>
            <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationDefault03" class="form-label">City</label>
          <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault03" required>
        </div>
        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">State</label>
          <select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault04" required>
            <option selected disabled>Choose...</option>
            <option>6546</option>
            <option>alksdj</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="validationDefault05" class="form-label">Zip</label>
          <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault05" required>
        </div>
        <div class="col-md-3">
          <label for="DOB" class="form-label">Date of Birth</label>
          <input type="date" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="DOB" required>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input bgDarkBlack border-dark" type="checkbox" id="invalidCheck2" required>
            <label class="form-check-label" for="invalidCheck2">
              Agree to terms and conditions
            </label>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-outline-primary" type="submit">Submit form</button>
        </div>
      </form>
      <hr/>
    </div>
  </div>
</div>
<br><br>
<?php require 'components\footer.php'; ?>