<div class="card mb-3">
	<h4 class="m-3 mb-0">New Admission</h4>
	<hr class="mb-0"/>
	<div class="card-body">
		<form class="row g-3 needs-validation" autocomplete="off">
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
				<label for="studentNID" class="form-label">National ID Number *</label>
				<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="studentNID" placeholder="3459712345678" size="13" pattern="[0-9]{13}" onchange="disableOnInvalid('studentNID','requiredStudentNID');" required/>
			</div>
			<div class="col-md-3">
				<label for="studentName" class="form-label">Name *</label>
				<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredStudentNID" id="studentName" required disabled/>
			</div>
			<div class="col-md-3">
				<label for="studentDOB" class="form-label">Date of Birth *</label>
				<input type="date" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredStudentNID" id="studentDOB" required disabled/>
			</div>
			<div class="col-md-3">
				<label for="studentPhoto" class="form-label">Photo *</label>
				<input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack requiredStudentNID" accept=".jpg, .jpeg" id="studentPhoto" required disabled/>
			</div>
			<hr class="mb-0"/>
			<h5 class="text-center text-decoration-underline">Parents' Information</h5>
			<div class="card shadow border-dark">
				<div class="card-body">
					<div class="row g-3">
						<h6 class="text-muted">Father Information</h6>
						<div class="col-md-3">
							<label for="fatherNID" class="form-label">National ID Number *</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredStudentNID" id="fatherNID" placeholder="3459712345678" size="13" pattern="[0-9]{13}" onchange="disableOnInvalid('fatherNID','requiredFatherNID');" required disabled/>
						</div>
						<div class="col-md-3">
							<label for="fatherName" class="form-label">Name *</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredFatherNID" id="fatherName" required disabled/>
						</div>
						<div class="col-md-3">
							<label for="fatherMobileNumber" class="form-label">Mobile Number</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredFatherNID" id="fatherMobileNumber"  disabled/>
						</div>
						<div class="col-md-3">
							<label for="fatherQualification" class="form-label">Qualification</label>
							<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack requiredFatherNID" id="fatherQualification"  disabled/>
								<option selected disabled></option>
								<option value="">None</option>
								<option value="">Under Matric</option>
								<option value="">Matric</option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="fatherOccupation" class="form-label">Occupation</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredFatherNID" id="fatherOccupation" disabled/>
						</div>
						<div class="col-md-3">
							<label for="fatherOrganization" class="form-label">Organization</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredFatherNID" id="fatherOrganization" disabled/>
						</div>
						<div class="col-md-6">
							<label for="fatherPhoto" class="form-label">Photo</label>
							<input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack requiredFatherNID" accept=".jpg, .jpeg" id="fatherPhoto"  disabled/>
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
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredStudentNID" id="motherNID" placeholder="3459712345678" size="13" pattern="[0-9]{13}" onchange="disableOnInvalid('motherNID','requiredMotherNID');" required disabled/>
						</div>
						<div class="col-md-3">
							<label for="motherName" class="form-label">Name *</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredMotherNID" id="motherName" required disabled/>
						</div>
						<div class="col-md-3">
							<label for="motherMobileNumber" class="form-label">Mobile Number</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredMotherNID" id="motherMobileNumber" disabled/>
						</div>
						<div class="col-md-3">
							<label for="motherQualification" class="form-label">Qualification</label>
							<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack requiredMotherNID" id="motherQualification" disabled>
								<option selected disabled></option>
								<option value="">None</option>
								<option value="">Under Matric</option>
								<option value="">Matric</option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="motherOccupation" class="form-label">Occupation</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredMotherNID" id="motherOccupation" disabled/>
						</div>
						<div class="col-md-3">
							<label for="motherOrganization" class="form-label">Organization</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredMotherNID" id="motherOrganization" disabled/>
						</div>
						<div class="col-md-6">
							<label for="motherPhoto" class="form-label">Photo</label>
							<input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack requiredMotherNID" accept=".jpg, .jpeg" id="motherPhoto" disabled/>
						</div>
					</div>
				</div>
			</div>
			<hr class="mb-0"/>
			<h5 class="text-center text-decoration-underline">Guardian Information</h5>
			<div class="col-md-6">
				<div class="input-group input-group-sm">
					<label class="form-check-label pb-0">Guardian: * &emsp;</label>
					<input type="radio" class="btn-check requiredFatherNID" name="guardianOptions" id="guardianFather" data-bs-toggle="collapse" data-bs-target="#collapseGuardian" aria-expanded="false" aria-controls="collapseGuardian" onclick="disableGroup('guardianFather', 'isGuardian');" required disabled/>
					<label class="btn btn-outline-secondary" for="guardianFather">Father</label>
					<input type="radio" class="btn-check requiredMotherNID" name="guardianOptions" id="guardianMother" data-bs-toggle="collapse" data-bs-target="#collapseGuardian" aria-expanded="false" aria-controls="collapseGuardian" onclick="disableGroup('guardianMother', 'isGuardian');" disabled/>
					<label class="btn btn-outline-secondary" for="guardianMother">Mother</label>
					<input type="radio" class="btn-check requiredStudentNID" name="guardianOptions" id="guardianOther" onclick="disableGroup('guardianMother', 'isGuardian');" onchange="if (this.form.guardianOther.checked == true) {document.getElementById('collapseGuardian').classList.add('show');}" disabled/>
					<label class="btn btn-outline-secondary" for="guardianOther">Other</label>
				</div>
			</div>
			<div class="collapse" id="collapseGuardian">
				<div class="row g-3">
					<div class="col-md-3">
						<label for="guardianNID" class="form-label">National ID Number *</label>
						<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isGuardian requiredGuardianRelationship" id="guardianNID" placeholder="3459712345678" size="13" pattern="[0-9]{13}" required disabled/>
					</div>
					<div class="col-md-3">
						<label for="guardianName" class="form-label">Name *</label>
						<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isGuardian requiredGuardianRelationship" id="guardianName" required disabled/>
					</div>
					<div  class="col-md-3">
						<label for="guardianRelationship" class="form-label">Relationship *</label>
						<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack isGuardian requiredGuardianRelationship" id="guardianRelationship" required disabled>
							<option selected disabled></option>
							<option value="">Uncle</option>
							<option value="">Ant</option>
							<option value="">Matric</option>
						</select>
					</div>
					<div class="col-md-3">
						<label for="guardianMobileNumber" class="form-label">Mobile Number</label>
						<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isGuardian requiredGuardianRelationship" id="guardianMobileNumber" disabled/>
					</div>
					<div class="col-md-3">
						<label for="guardianQualification" class="form-label">Qualification</label>
						<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack isGuardian requiredGuardianRelationship" id="guardianQualification" disabled>
							<option selected disabled></option>
							<option value="">None</option>
							<option value="">Under Matric</option>
							<option value="">Matric</option>
						</select>
					</div>
					<div class="col-md-3">
						<label for="guardianOccupation" class="form-label">Occupation</label>
						<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isGuardian requiredGuardianRelationship" id="guardianOccupation" disabled/>
					</div>
					<div class="col-md-3">
						<label for="guardianOrganization" class="form-label">Organization</label>
						<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isGuardian requiredGuardianRelationship" id="guardianOrganization" disabled/>
					</div>
					<div class="col-md-3">
						<label for="guardianPhoto" class="form-label">Photo</label>
						<input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack isGuardian requiredGuardianRelationship" accept=".jpg, .jpeg" id="guardianPhoto" disabled/>
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
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredStudentNID" id="permanentAddress" onchange="disableOnInvalid('permanentAddress', 'requiredPermanentAddress');" required disabled/>
						</div>
						<div class="col-md-2">
							<label for="permanentCity" class="form-label">City *</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredStudentNID" id="permanentCity" required disabled/>
						</div>
						<div class="col-md-2">
							<label for="permanentState" class="form-label">State *</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredStudentNID" id="permanentState" required disabled/>
						</div>
						<div class="col-md-2">
							<label for="permanentCountry" class="form-label">Country *</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredStudentNID" id="permanentCountry" required disabled/>
						</div>
						<div class="col-md-3">
							<label for="permanentContactNumber" class="form-label">Contact Number</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack requiredStudentNID" id="permanentContactNumber" disabled/>
						</div>
					</div>
				</div>
			</div>
			<div class="card shadow border-dark">
				<div class="card-body">
					<h6 class="text-muted">Current Address</h6>
					<div class="col-12">
						<div class="form-check">
							<input class="form-check-input bgDarkBlack border-dark requiredPermanentAddress" type="checkbox" id="asPermanent" data-bs-toggle="collapse" data-bs-target="#collapseCurrentAddress" aria-expanded="false" aria-controls="collapseCurrentAddress" onclick="disableGroup('asPermanent', 'isPermanent', false);" disabled/>
							<label class="form-check-label" for="asPermanent"> Add Current Address</label>
						</div>
					</div>
					<div class="collapse" id="collapseCurrentAddress">
						<div class="row g-3">
							<div class="col-md-3">
								<label for="currentAddress" class="form-label">Current Address *</label>
								<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isPermanent" id="currentAddress" required disabled/>
							</div>
							<div class="col-md-2">
								<label for="currentCity" class="form-label">City *</label>
								<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isPermanent" id="currentCity" required disabled/>
							</div>
							<div class="col-md-2">
								<label for="currentState" class="form-label">State *</label>
								<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isPermanent" id="currentState" required disabled/>
							</div>
							<div class="col-md-2">
								<label for="currentCountry" class="form-label">Country *</label>
								<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isPermanent" id="currentCountry" required disabled>
							</div>
							<div class="col-md-3">
								<label for="currentContactNumber" class="form-label">Contact Number</label>
								<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack isPermanent" id="currentContactNumber" disabled/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button class="btn btn-outline-primary btn-sm float-end" type="submit">Submit</button>
		</form>
	</div>
</div>
<script type="text/javascript">
function disableGroup(inputObj, targerObjs, isTrue = true)
{
	var inputObject = document.getElementById(inputObj);
	var targerObjects = document.getElementsByClassName(targerObjs);
	for (var i = 0; i < targerObjects.length; i++)
	{
		if (isTrue == true)
		{
			if (inputObject.checked)
			{
				targerObjects[i].disabled = true;
			}
			else
			{
				targerObjects[i].disabled = false;
			}
		}
		else
		{
			if (inputObject.checked)
			{
				targerObjects[i].disabled = false;
			}
			else
			{
				targerObjects[i].disabled = true;
			}
		}
	}
}
function disableOnInvalid(inputObj, targerObjs, isTrue = true)
{
	var inputObject = document.getElementById(inputObj);
	var targerObjects = document.getElementsByClassName(targerObjs);
	
	for (var i = 0; i < targerObjects.length; i++)
	{
		if (isTrue == true)
		{
			if (!inputObject.checkValidity())
			{
				targerObjects[i].disabled = true;
			}
			else
			{
				targerObjects[i].disabled = false;
			}
		}
		else
		{
			if (!inputObject.checkValidity())
			{
				targerObjects[i].disabled = false;
			}
			else
			{
				targerObjects[i].disabled = true;
			}
		}
	}
}
</script>