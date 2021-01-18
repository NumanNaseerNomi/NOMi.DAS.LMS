<div class="card mb-3">
	<h4 class="m-3 mb-0">New Admission</h4>
	<hr class="mb-0"/>
	<div class="card-body">
		<form class="row g-3 needs-validation">
			<h5 class="text-center text-decoration-underline">Admission Information</h5>
			<div class="col-md-6">
				<label for="academicYear" class="form-label">Academic Year *</label>
				<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="academicYear" required>
					<option selected disabled></option>
					<option value="2021-2022">2021-2022</option>
					<option value="2022-2023">2022-2023</option>
				</select>
			</div>
			<div class="col-md-6">
				<label for="class" class="form-label">Class *</label>
				<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="class" required>
					<option selected disabled></option>
					<option value="PG">PG</option>
					<option value="Prep">Prep</option>
				</select>
			</div>
			<hr class="mb-0"/>
			<h5 class="text-center text-decoration-underline">Student Information</h5>
			<div class="col-md-3">
				<label for="studendNID" class="form-label">National ID Number *</label>
				<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="studendNID" placeholder="3459712345678" size="13" pattern="[0-9]{13}" required>
			</div>
			<div class="col-md-3">
				<label for="studentName" class="form-label">Student Name *</label>
				<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="studentName" required>
			</div>
			<div class="col-md-3">
				<label for="studentDOB" class="form-label">Date of Birth *</label>
				<input type="date" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="studentDOB" required>
			</div>
			<div class="col-md-3">
				<label for="studentPhoto" class="form-label">Student Photo *</label>
				<input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack" accept=".jpg, .jpeg" id="studentPhoto" required>
			</div>
			<hr class="mb-0"/>
			<h5 class="text-center text-decoration-underline">Parents' Information</h5>
			<div class="card shadow border-dark">
				<div class="card-body">
					<div class="row g-3">
						<h6 class="text-muted">Father Information</h6>
						<div class="col-md-3">
							<label for="fatherNID" class="form-label">National ID Number *</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherNID" placeholder="3459712345678" size="13" pattern="[0-9]{13}" required>
						</div>
						<div class="col-md-3">
							<label for="fatherName" class="form-label">Father's Name *</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherName" required>
						</div>
						<div class="col-md-3">
							<label for="fatherMobileNumber" class="form-label">Mobile Number</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherMobileNumber">
						</div>
						<div class="col-md-3">
							<label for="fatherPhoto" class="form-label">Father Photo</label>
							<input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack" accept=".jpg, .jpeg" id="fatherPhoto">
						</div>
						<div class="col-md-3">
							<label for="fatherQualification" class="form-label">Qualification</label>
							<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="fatherQualification">
								<option selected disabled></option>
								<option value="">None</option>
								<option value="">Under Matric</option>
								<option value="">Matric</option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="fatherOccupation" class="form-label">Occupation</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherOccupation">
						</div>
						<div class="col-md-3">
							<label for="fatherDesignation" class="form-label">Designation</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherDesignation">
						</div>
						<div class="col-md-3">
							<label for="fatherOrganization" class="form-label">Organization</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherOrganization">
						</div>
					</div>
				</div>
			</div>
			<div class="card shadow border-dark">
				<div class="card-body">
					<div class="row g-3">
						<h6 class="text-muted">Mother Information</h6>
						<div class="col-md-3">
							<label for="motherNID" class="form-label">National ID Number *</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherNID" placeholder="3459712345678" size="13" pattern="[0-9]{13}" required>
						</div>
						<div class="col-md-3">
							<label for="motherName" class="form-label">Mother's Name *</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherName" required>
						</div>
						<div class="col-md-3">
							<label for="motherMobileNumber" class="form-label">Mobile Number</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherMobileNumber">
						</div>
						<div class="col-md-3">
							<label for="motherPhoto" class="form-label">Mother Photo</label>
							<input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack" accept=".jpg, .jpeg" id="motherPhoto">
						</div>
						<div class="col-md-3">
							<label for="motherQualification" class="form-label">Qualification</label>
							<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="motherQualification">
								<option selected disabled></option>
								<option value="">None</option>
								<option value="">Under Matric</option>
								<option value="">Matric</option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="motherOccupation" class="form-label">Occupation</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherOccupation">
						</div>
						<div class="col-md-3">
							<label for="motherDesignation" class="form-label">Designation</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherDesignation">
						</div>
						<div class="col-md-3">
							<label for="motherOrganization" class="form-label">Organization</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherOrganization">
						</div>
					</div>
				</div>
			</div>
			<hr class="mb-0"/>
			<h5 class="text-center text-decoration-underline">Guardian Information</h5>
			<div class="col-md-6">
				<label class="form-check-label">Guardian: * &emsp;</label>
				<div class="input-group input-group-sm">
					<input type="radio" class="btn-check" name="guardianOptions" id="guardianFather" data-bs-toggle="collapse" data-bs-target="#collapseGuardian" aria-expanded="true" aria-controls="collapseGuardian" onclick="disableGroup('guardianFather', 'isGuardian', true);" required>
					<label class="btn btn-outline-secondary" for="guardianFather">Father</label>
					<input type="radio" class="btn-check" name="guardianOptions" id="guardianMother" data-bs-toggle="collapse" data-bs-target="#collapseGuardian" aria-expanded="true" aria-controls="collapseGuardian" onclick="disableGroup('guardianMother', 'isGuardian', true);">
					<label class="btn btn-outline-secondary" for="guardianMother">Mother</label>
					<input type="radio" class="btn-check" name="guardianOptions" id="guardianOther" data-bs-toggle="collapse" data-bs-target="#collapseGuardian" aria-expanded="true" aria-controls="collapseGuardian" onclick="disableGroup('guardianOther', 'isGuardian', false);">
					<label class="btn btn-outline-secondary" for="guardianOther">Other</label>
					<select class="form-select bgDarkBlack border-dark fcLightBlack isGuardian" id="guardianRelationship" required>
						<option selected disabled></option>
						<option value="">Uncle</option>
						<option value="">Ant</option>
						<option value="">Matric</option>
					</select>
				</div>
			</div>
			<div class="collapse show" id="collapseGuardian">
				<div class="row g-3">
					<div class="col-md-3">
						<label for="guardianNID" class="form-label">National ID Number *</label>
						<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isGuardian" id="guardianNID" placeholder="3459712345678" size="13" pattern="[0-9]{13}" required>
					</div>
					<div class="col-md-3">
						<label for="guardianName" class="form-label">Guardian's Name *</label>
						<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isGuardian" id="guardianName" required>
					</div>
					<div class="col-md-3">
						<label for="guardianMobileNumber" class="form-label">Mobile Number</label>
						<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isGuardian" id="guardianMobileNumber">
					</div>
					<div class="col-md-3">
						<label for="guardianPhoto" class="form-label">Guardian Photo</label>
						<input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack isGuardian" accept=".jpg, .jpeg" id="guardianPhoto">
					</div>
					<div class="col-md-3">
						<label for="guardianQualification" class="form-label">Qualification</label>
						<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack isGuardian" id="guardianQualification">
							<option selected disabled></option>
							<option value="">None</option>
							<option value="">Under Matric</option>
							<option value="">Matric</option>
						</select>
					</div>
					<div class="col-md-3">
						<label for="guardianOccupation" class="form-label">Occupation</label>
						<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isGuardian" id="guardianOccupation">
					</div>
					<div class="col-md-3">
						<label for="guardianOccupation" class="form-label">Designation</label>
						<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isGuardian" id="guardianOccupation">
					</div>
					<div class="col-md-3">
						<label for="guardianOrganization" class="form-label">Organization</label>
						<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isGuardian" id="guardianOrganization">
					</div>
				</div>
			</div>
			<hr class="mb-0"/>
			<h5 class="text-center text-decoration-underline">Address information</h5>
			<div class="card shadow border-dark">
				<div class="card-body">
					<div class="row g-3">
						<h6 class="text-muted">Permanent Address</h6>
						<div class="col-md-3">
							<label for="permanentAddress" class="form-label">Permanent Address *</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="permanentAddress" required>
						</div>
						<div class="col-md-2">
							<label for="permanentCity" class="form-label">City *</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="permanentCity" required>
						</div>
						<div class="col-md-2">
							<label for="permanentState" class="form-label">State *</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="permanentState" required>
						</div>
						<div class="col-md-2">
							<label for="permanentCountry" class="form-label">Country *</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="permanentCountry" required>
						</div>
						<div class="col-md-3">
							<label for="permanentContactNumber" class="form-label">Contact Number</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="permanentContactNumber">
						</div>
					</div>
				</div>
			</div>
			<div class="card shadow border-dark">
				<div class="card-body">
					<h6 class="text-muted">Current Address</h6>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input bgDarkBlack border-dark" type="checkbox" id="asPermanent" data-bs-toggle="collapse" data-bs-target="#collapseCurrentAddress" aria-expanded="true" aria-controls="collapseCurrentAddress" onclick="disableGroup('asPermanent', 'isPermanent', true);">
							<label class="form-check-label" for="asPermanent">Same as Permanent Address *</label>
						</div>
					</div>
					<div class="collapse show" id="collapseCurrentAddress">
						<div class="row g-3">
							<div class="col-md-3">
								<label for="currentAddress" class="form-label">Current Address *</label>
								<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isPermanent" id="currentAddress" required>
							</div>
							<div class="col-md-2">
								<label for="currentCity" class="form-label">City *</label>
								<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isPermanent" id="currentCity" required>
							</div>
							<div class="col-md-2">
								<label for="currentState" class="form-label">State *</label>
								<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isPermanent" id="currentState" required>
							</div>
							<div class="col-md-2">
								<label for="currentCountry" class="form-label">Country *</label>
								<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isPermanent" id="currentCountry" required>
							</div>
							<div class="col-md-3">
								<label for="currentContactNumber" class="form-label">Contact Number</label>
								<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isPermanent" id="currentContactNumber">
							</div>
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

<script type="text/javascript">
function disableGroup(myOption, myOptions, onCheck)
{
	var myOptionElement = document.getElementById(myOption);
	var myOptionElements = document.getElementsByClassName(myOptions);
	for (var i = 0; i < myOptionElements.length; i++)
	{
		if (onCheck == true)
		{
			if (myOptionElement.checked)
			{
				myOptionElements[i].disabled = true;
			}
			else
			{
				myOptionElements[i].disabled = false;
			}
		}
		else
		{
			if (myOptionElement.checked)
			{
				myOptionElements[i].disabled = false;
			}
			else
			{
				myOptionElements[i].disabled = true;
			}
		}
	}
}
</script>