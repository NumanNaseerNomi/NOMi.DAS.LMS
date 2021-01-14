<div class="card mb-3">
  <h4 class="m-3 mb-0">New Admission</h4>
  <hr class="mb-0"/>
  <div class="card-body">
    <form class="row g-3">
      <h5 class="text-center text-decoration-underline">Admission Information</h5>
      <div class="col-md-6">
        <label for="academicYear" class="form-label">Academic Year</label>
        <select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="academicYear" required>
          <option selected disabled></option>
          <option>2021-2022</option>
          <option>2022-2023</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="class" class="form-label">Class</label>
        <select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="class" required>
          <option selected disabled></option>
          <option>PG</option>
          <option>Prep</option>
        </select>
      </div>
      <hr class="mb-0"/>
      <h5 class="text-center text-decoration-underline">Student Information</h5>
      <div class="col-md-3">
        <label for="studendNID" class="form-label">National Identity Number</label>
        <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="studendNID" placeholder="3459712345678" size="13" pattern="[0-9]{13}" required>
      </div>
      <div class="col-md-3">
        <label for="studentName" class="form-label">Student Name</label>
        <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="studentName" required>
      </div>
      <div class="col-md-2">
        <label for="studentDOB" class="form-label">Date of Birth</label>
        <input type="date" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="studentDOB" required>
      </div>
      <div class="col-md-1">
        <label for="studentGender" class="form-label">Gender</label>
        <select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="studentGender" required>
          <option selected disabled></option>
          <option>Female</option>
          <option>Male</option>
        </select>
      </div>
      <div class="col-md-3">
        <label for="studentPhoto" class="form-label">Student Photo</label>
        <input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack" accept=".jpg, .jpeg" id="studentPhoto">
      </div>
      <hr class="mb-0"/>
      <h5 class="text-center text-decoration-underline">Parents' Information</h5>
      <div class="card shadow border-dark">
        <div class="card-body">
          <div class="row g-3">
            <h6 class="text-muted">Father Information</h6>
            <div class="col-md-2">
              <label for="fatherNID" class="form-label">National Identity Number</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherNID" placeholder="3459712345678" size="13" pattern="[0-9]{13}" required>
            </div>
            <div class="col-md-3">
              <label for="fatherName" class="form-label">Father's Name</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherName" required>
            </div>
            <div class="col-md-2">
              <label for="fatherDOB" class="form-label">Date of Birth</label>
              <input type="date" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherDOB" required>
            </div>
            <div class="col-md-1">
              <label for="fatherQualification" class="form-label">Qualification</label>
              <select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="fatherQualification" required>
                <option selected disabled></option>
                <option>None</option>
                <option>Under Matric</option>
                <option>Matric</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="fatherMobileNumber" class="form-label">Mobile Number</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherMobileNumber" required>
            </div>
            <div class="col-md-2">
              <label for="fatherPhoto" class="form-label">Father Photo</label>
              <input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack" accept=".jpg, .jpeg" id="fatherPhoto">
            </div>
            <div class="col-md-3">
              <label for="fatherOccupation" class="form-label">Occupation</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherOccupation" required>
            </div>
            <div class="col-md-3">
              <label for="fatherDesignation" class="form-label">Designation</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherDesignation" required>
            </div>
            <div class="col-md-3">
              <label for="fatherOrganization" class="form-label">Organization</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherOrganization" required>
            </div>
            <div class="col-md-3">
              <label for="fatherIncome" class="form-label">Annual Income (Rs.)</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherIncome" required>
            </div>
          </div>
        </div>
      </div>
      <div class="card shadow border-dark">
        <div class="card-body">
          <div class="row g-3">
            <h6 class="text-muted">Mother Information</h6>
            <div class="col-md-2">
              <label for="motherNID" class="form-label">National Identity Number</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherNID" placeholder="3459712345678" size="13" pattern="[0-9]{13}" required>
            </div>
            <div class="col-md-3">
              <label for="motherName" class="form-label">Mother's Name</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherName" required>
            </div>
            <div class="col-md-2">
              <label for="motherDOB" class="form-label">Date of Birth</label>
              <input type="date" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherDOB" required>
            </div>
            <div class="col-md-1">
              <label for="motherQualification" class="form-label">Qualification</label>
              <select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="motherQualification" required>
                <option selected disabled></option>
                <option>None</option>
                <option>Under Matric</option>
                <option>Matric</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="motherMobileNumber" class="form-label">Mobile Number</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherMobileNumber" required>
            </div>
            <div class="col-md-2">
              <label for="motherPhoto" class="form-label">Mother Photo</label>
              <input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack" accept=".jpg, .jpeg" id="motherPhoto">
            </div>
            <div class="col-md-3">
              <label for="motherOccupation" class="form-label">Occupation</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherOccupation" required>
            </div>
            <div class="col-md-3">
              <label for="motherDesignation" class="form-label">Designation</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherDesignation" required>
            </div>
            <div class="col-md-3">
              <label for="motherOrganization" class="form-label">Organization</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherOrganization" required>
            </div>
            <div class="col-md-3">
              <label for="motherIncome" class="form-label">Annual Income (Rs.)</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherIncome" required>
            </div>
          </div>
        </div>
      </div>
      <hr class="mb-0"/>
      <h5 class="text-center text-decoration-underline">Guardian Information</h5>
      <div class="row">
        <div class="col">
          <div class="form-check form-check-inline">
            <input class="form-check-input bgDarkBlack" type="radio" name="guardianOptions" id="guardianFather" value="Father">
            <label class="form-check-label" for="guardianFather">Father</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input bgDarkBlack" type="radio" name="guardianOptions" id="guardianMother" value="Mother">
            <label class="form-check-label" for="guardianMother">Mother</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input bgDarkBlack" type="radio" name="guardianOptions" id="guardianOther" value="Mother">
            <label class="form-check-label" for="guardianOther">Other</label>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <label for="guardianNID" class="form-label">National Identity Number</label>
        <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="guardianNID" placeholder="3459712345678" size="13" pattern="[0-9]{13}" required>
      </div>
      <div class="col-md-2">
        <label for="guardianName" class="form-label">Guardian's Name</label>
        <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="guardianName" required>
      </div>
      <div class="col-md-2">
        <label for="guardianDOB" class="form-label">Date of Birth</label>
        <input type="date" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="guardianDOB" required>
      </div>
      <div class="col-md-1">
        <label for="guardianQualification" class="form-label">Qualification</label>
        <select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="guardianQualification" required>
          <option selected disabled></option>
          <option>None</option>
          <option>Under Matric</option>
          <option>Matric</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="guardianMobileNumber" class="form-label">Mobile Number</label>
        <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="guardianMobileNumber" required>
      </div>
      <div class="col-md-2">
        <label for="guardianPhoto" class="form-label">Guardian Photo</label>
        <input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack" accept=".jpg, .jpeg" id="guardianPhoto">
      </div>
      <div class="col-md-1">
        <label for="guardianRelationship" class="form-label">Relationship</label>
        <select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="guardianRelationship" required>
          <option selected disabled></option>
          <option>Uncle</option>
          <option>Ant</option>
          <option>Matric</option>
        </select>
      </div>
      <div class="col-md-3">
        <label for="guardianOccupation" class="form-label">Occupation</label>
        <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="guardianOccupation" required>
      </div>
      <div class="col-md-3">
        <label for="guardianOccupation" class="form-label">Designation</label>
        <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="guardianOccupation" required>
      </div>
      <div class="col-md-4">
        <label for="guardianOrganization" class="form-label">Organization</label>
        <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="guardianOrganization" required>
      </div>
      <div class="col-md-2">
        <label for="guardianIncome" class="form-label">Annual Income (Rs.)</label>
        <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="guardianIncome" required>
      </div>
      <hr class="mb-0"/>
      <h5 class="text-center text-decoration-underline">Address information</h5>
      <div class="card shadow border-dark">
        <div class="card-body">
          <div class="row g-3">
            <h6 class="text-muted">Permanent Address</h6>
            <div class="col-md-4">
              <label for="permanentAddress" class="form-label">Permanent Address</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="permanentAddress" required>
            </div>
            <div class="col-md-2">
              <label for="permanentCity" class="form-label">City</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="permanentCity" required>
            </div>
            <div class="col-md-2">
              <label for="permanentState" class="form-label">State</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="permanentState" required>
            </div>
            <div class="col-md-2">
              <label for="permanentCountry" class="form-label">Country</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="permanentCountry" required>
            </div>
            <div class="col-md-2">
              <label for="permanentContactNumber" class="form-label">Contact Number</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="permanentContactNumber" required>
            </div>
          </div>
        </div>
      </div>
      <div class="card shadow border-dark">
        <div class="card-body">
          <div class="row g-3">
            <h6 class="text-muted">Current Address</h6>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input bgDarkBlack border-dark" type="checkbox" id="asPermanent" required>
                <label class="form-check-label" for="asPermanent">Same as Permanent Address</label>
              </div>
            </div>
            <div class="col-md-4">
              <label for="currentAddress" class="form-label">Current Address</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="currentAddress" required>
            </div>
            <div class="col-md-2">
              <label for="currentCity" class="form-label">City</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="currentCity" required>
            </div>
            <div class="col-md-2">
              <label for="currentState" class="form-label">State</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="currentState" required>
            </div>
            <div class="col-md-2">
              <label for="currentCountry" class="form-label">Country</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="currentCountry" required>
            </div>
            <div class="col-md-2">
              <label for="currentContactNumber" class="form-label">Contact Number</label>
              <input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="currentContactNumber" required>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-outline-primary" type="submit">Submit form</button>
      </div>
    </form>
  </div>
</div>