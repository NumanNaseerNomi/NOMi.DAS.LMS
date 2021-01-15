<?php require 'components\header.php'; ?>
<?php require 'components\subjectCard.php'; ?>
<div class="card">
  <h4 class="m-3 mb-0">New Admission</h4>
  <hr class="mb-0"/>
  <div class="card-body">
    <div class="">
      <form class="row g-3">
        <h5 class="text-center text-decoration-underline">Admission Information</h5>
        <div class="col-md-6">
          <label for="validationDefault04" class="form-label">Academic Year</label>
          <select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault04" required>
            <option selected disabled></option>
            <option>2021-2022</option>
            <option>2022-2023</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="validationDefault04" class="form-label">Class</label>
          <select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault04" required>
            <option selected disabled></option>
            <option>PG</option>
            <option>Prep</option>
          </select>
        </div>
        <hr class="mb-0"/>
        <h5 class="text-center text-decoration-underline">Student Information</h5>
        <div class="col-md-3">
          <label for="nID" class="form-label">National Identity Number</label>
          <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="nID" placeholder="3459712345678" size="13" pattern="[0-9]{13}" required>
        </div>
        <div class="col-md-3">
          <label for="validationDefault01" class="form-label">Student Name</label>
          <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
        </div>
        <div class="col-md-2">
          <label for="DOB" class="form-label">Date of Birth</label>
          <input type="date" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="DOB" required>
        </div>
        <div class="col-md-1">
          <label for="validationDefault04" class="form-label">Gender</label>
          <select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault04" required>
            <option selected disabled></option>
            <option>Female</option>
            <option>Male</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="validationDefault04" class="form-label">Student Photo</label>
          <input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack" accept=".jpg, .jpeg" id="inputGroupFile01">
        </div>
        <hr class="mb-0"/>
        <h5 class="text-center text-decoration-underline">Parents' Information</h5>
        
        
        
        <div class="card shadow border-dark">
          <div class="card-body">
            <div class="row g-3">
              <h6 class="text-muted">Father Information</h6>
              <div class="col-md-2">
                <label for="nID" class="form-label">National Identity Number</label>
                <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="nID" placeholder="3459712345678" size="13" pattern="[0-9]{13}" required>
              </div>
              <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Father's Name</label>
                <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
              </div>
              <div class="col-md-2">
                <label for="DOB" class="form-label">Date of Birth</label>
                <input type="date" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="DOB" required>
              </div>
              <div class="col-md-1">
                <label for="validationDefault04" class="form-label">Qualification</label>
                <select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault04" required>
                  <option selected disabled></option>
                  <option>None</option>
                  <option>Under Matric</option>
                  <option>Matric</option>
                </select>
              </div>
              <div class="col-md-2">
                <label for="validationDefault01" class="form-label">Mobile Number</label>
                <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
              </div>
              <div class="col-md-2">
                <label for="validationDefault04" class="form-label">Father Photo</label>
                <input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack" accept=".jpg, .jpeg" id="inputGroupFile01">
              </div>
              <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Occupation</label>
                <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
              </div>
              <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Designation</label>
                <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
              </div>
              <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Organization</label>
                <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
              </div>
              <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Annual Income (Rs.)</label>
                <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
              </div>
            </div>
          </div>
        </div>
        <div class="card shadow border-dark">
          <div class="card-body">
            <div class="row g-3">
              <h6 class="text-muted">Mother Information</h6>
              <div class="col-md-2">
                <label for="nID" class="form-label">National Identity Number</label>
                <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="nID" placeholder="3459712345678" size="13" pattern="[0-9]{13}" required>
              </div>
              <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Mother's Name</label>
                <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
              </div>
              <div class="col-md-2">
                <label for="DOB" class="form-label">Date of Birth</label>
                <input type="date" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="DOB" required>
              </div>
              <div class="col-md-1">
                <label for="validationDefault04" class="form-label">Qualification</label>
                <select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault04" required>
                  <option selected disabled></option>
                  <option>None</option>
                  <option>Under Matric</option>
                  <option>Matric</option>
                </select>
              </div>
              <div class="col-md-2">
                <label for="validationDefault01" class="form-label">Mobile Number</label>
                <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
              </div>
              <div class="col-md-2">
                <label for="validationDefault04" class="form-label">Mother Photo</label>
                <input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack" accept=".jpg, .jpeg" id="inputGroupFile01">
              </div>
              <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Occupation</label>
                <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
              </div>
              <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Designation</label>
                <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
              </div>
              <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Organization</label>
                <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
              </div>
              <div class="col-md-3">
                <label for="validationDefault01" class="form-label">Annual Income (Rs.)</label>
                <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
              </div>
            </div>
          </div>
        </div>
        <hr class="mb-0"/>
        <h5 class="text-center text-decoration-underline">Guardian Information</h5>
        <div class="row">
          <div class="col">
            <div class="form-check form-check-inline">
              <input class="form-check-input bgDarkBlack" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Father</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input bgDarkBlack" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Mother</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input bgDarkBlack" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
              <label class="form-check-label" for="inlineRadio3">Other</label>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <label for="nID" class="form-label">National Identity Number</label>
          <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="nID" placeholder="3459712345678" size="13" pattern="[0-9]{13}" required>
        </div>
        <div class="col-md-2">
          <label for="validationDefault01" class="form-label">Guardian's Name</label>
          <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
        </div>
        <div class="col-md-2">
          <label for="DOB" class="form-label">Date of Birth</label>
          <input type="date" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="DOB" required>
        </div>
        <div class="col-md-1">
          <label for="validationDefault04" class="form-label">Qualification</label>
          <select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault04" required>
            <option selected disabled></option>
            <option>None</option>
            <option>Under Matric</option>
            <option>Matric</option>
          </select>
        </div>
        <div class="col-md-2">
          <label for="validationDefault01" class="form-label">Mobile Number</label>
          <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
        </div>
        <div class="col-md-2">
          <label for="validationDefault04" class="form-label">Guardian Photo</label>
          <input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack" accept=".jpg, .jpeg" id="inputGroupFile01">
        </div>

        <div class="col-md-1">
          <label for="validationDefault04" class="form-label">Relationship</label>
          <select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault04" required>
            <option selected disabled></option>
            <option>Uncle</option>
            <option>Ant</option>
            <option>Matric</option>
          </select>
        </div>
        <div class="col-md-3">
          <label for="validationDefault01" class="form-label">Occupation</label>
          <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
        </div>
        <div class="col-md-3">
          <label for="validationDefault01" class="form-label">Designation</label>
          <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
        </div>
        <div class="col-md-4">
          <label for="validationDefault01" class="form-label">Organization</label>
          <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
        </div>
        <div class="col-md-2">
          <label for="validationDefault01" class="form-label">Annual Income (Rs.)</label>
          <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="validationDefault01" required>
        </div>
        <hr class="mb-0"/>
        <div class="col">
          <h5 class="text-center text-decoration-underline">Guardian Information</h5>
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