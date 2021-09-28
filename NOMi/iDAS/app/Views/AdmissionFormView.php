<div class="card mb-3">
	<h4 class="m-3 mb-0">New Admission</h4>
	<hr class="mb-0"/>
	<div class="card-body">
		<form class="row g-3 needs-validation" action="" method="post" autocomplete="off">
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
				<input type="number" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="studentNID" placeholder="3459712345678" required/>
			</div>
			<div class="col-md-3">
				<label for="studentName" class="form-label">Name *</label>
				<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="studentName" required/>
			</div>
			<div class="col-md-2">
				<label for="studentDOB" class="form-label">Date of Birth *</label>
				<input type="date" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="studentDOB" required/>
			</div>
			<div class="col-md-2">
				<label for="studentGender" class="form-label">Gender *</label>
				<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="studentGender" required>
					<option selected disabled></option>
					<option value="1">Male</option>
					<option value="0">Female</option>
				</select>
			</div>
			<div class="col-md-2">
				<label for="studentPhoto" class="form-label">Photo *</label>
				<input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack" id="studentPhoto" accept=".jpg, .jpeg" required />
			</div>
			<hr class="mb-0"/>
			<h5 class="text-center text-decoration-underline">Parents' Information</h5>
			<div class="card shadow border-dark">
				<div class="card-body">
					<div class="row g-3">
						<h6 class="text-muted">Father Information</h6>
						<div class="col-md-3">
							<label for="fatherNID" class="form-label">National ID Number *</label>
							<input type="number" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherNID" placeholder="3459712345678" required />
						</div>
						<div class="col-md-3">
							<label for="fatherName" class="form-label">Name *</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherName" required />
						</div>
						<div class="col-md-3">
							<label for="fatherMobileNumber" class="form-label">Contact Number</label>
							<input type="number" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherMobileNumber" />
						</div>
						<div class="col-md-3">
							<label for="fatherQualification" class="form-label">Qualification</label>
							<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="fatherQualification" />
								<option selected disabled></option>
								<option value="">None</option>
								<option value="">Under Matric</option>
								<option value="">Matric</option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="fatherOccupation" class="form-label">Occupation</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherOccupation" />
						</div>
						<div class="col-md-3">
							<label for="fatherOrganization" class="form-label">Organization</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="fatherOrganization" />
						</div>
						<div class="col-md-6">
							<label for="fatherPhoto" class="form-label">Photo</label>
							<input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack" id="fatherPhoto" accept=".jpg, .jpeg" />
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
							<input type="number" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherNID" placeholder="3459712345678" required/>
						</div>
						<div class="col-md-3">
							<label for="motherName" class="form-label">Name *</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherName" required />
						</div>
						<div class="col-md-3">
							<label for="motherMobileNumber" class="form-label">Contact Number</label>
							<input type="number" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherMobileNumber" />
						</div>
						<div class="col-md-3">
							<label for="motherQualification" class="form-label">Qualification</label>
							<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="motherQualification" >
								<option selected disabled></option>
								<option value="">None</option>
								<option value="">Under Matric</option>
								<option value="">Matric</option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="motherOccupation" class="form-label">Occupation</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherOccupation" />
						</div>
						<div class="col-md-3">
							<label for="motherOrganization" class="form-label">Organization</label>
							<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="motherOrganization" />
						</div>
						<div class="col-md-6">
							<label for="motherPhoto" class="form-label">Photo</label>
							<input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack" id="motherPhoto" accept=".jpg, .jpeg" />
						</div>
					</div>
				</div>
			</div>
			<hr class="mb-0"/>
			<h5 class="text-center text-decoration-underline">Guardian Information</h5>
			<div class="col-md-6">
				<div class="input-group input-group-sm">
					<label class="form-check-label pb-0">Guardian: * &emsp;</label>
					<input type="radio" class="btn-check" value="guardianFather" name="guardianOptions" id="guardianFather" onchange="document.getElementById('collapseGuardian').classList.remove('show');" required />
					<label class="btn btn-outline-secondary" for="guardianFather">Father</label>
					<input type="radio" class="btn-check" value="guardianMother" name="guardianOptions" id="guardianMother" onchange="document.getElementById('collapseGuardian').classList.remove('show');" />
					<label class="btn btn-outline-secondary" for="guardianMother">Mother</label>
					<input type="radio" class="btn-check" value="guardianOther" name="guardianOptions" id="guardianOther" onchange="document.getElementById('collapseGuardian').classList.add('show');" />
					<label class="btn btn-outline-secondary" for="guardianOther">Other</label>
				</div>
			</div>
			<div class="collapse" id="collapseGuardian">
				<div class="row g-3">
					<div class="col-md-3">
						<label for="guardianNID" class="form-label">National ID Number *</label>
						<input type="number" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="guardianNID" placeholder="3459712345678" required/>
					</div>
					<div class="col-md-3">
						<label for="guardianName" class="form-label">Name *</label>
						<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="guardianName" required/>
					</div>
					<div  class="col-md-3">
						<label for="guardianRelationship" class="form-label">Relationship *</label>
						<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="guardianRelationship" required>
							<option selected disabled></option>
							<option value="">Uncle</option>
							<option value="">Ant</option>
							<option value="">Matric</option>
						</select>
					</div>
					<div class="col-md-3">
						<label for="guardianMobileNumber" class="form-label">Contact Number</label>
						<input type="number" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="guardianMobileNumber" />
					</div>
					<div class="col-md-3">
						<label for="guardianQualification" class="form-label">Qualification</label>
						<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="guardianQualification">
							<option selected disabled></option>
							<option value="">None</option>
							<option value="">Under Matric</option>
							<option value="">Matric</option>
						</select>
					</div>
					<div class="col-md-3">
						<label for="guardianOccupation" class="form-label">Occupation</label>
						<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="guardianOccupation" />
					</div>
					<div class="col-md-3">
						<label for="guardianOrganization" class="form-label">Organization</label>
						<input type="text" class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="guardianOrganization" />
					</div>
					<div class="col-md-3">
						<label for="guardianPhoto" class="form-label">Photo</label>
						<input type="file" class="custom-file-input form-control form-select-sm bgDarkBlack border-dark fcLightBlack" id="guardianPhoto" accept=".jpg, .jpeg" />
					</div>
				</div>
			</div>
			<hr class="mb-0"/>
			<h5 class="text-center text-decoration-underline">Address information</h5>
			<div class="col-md-6">
				<label for="permanentAddress" class="form-label">Permanent Address *</label>
				<textarea class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="permanentAddress" rows="2" required></textarea>
			</div>
			<div class="col-md-6">
				<label for="currentAddress" class="form-label">Current Address</label>
				<textarea class="form-control form-control-sm bgDarkBlack border-dark fcLightBlack" id="currentAddress" rows="2"></textarea>
			</div>
			<hr class="mb-0"/>
			<div class="d-grid gap-2 d-flex justify-content-end">
				<button class="btn btn-outline-danger btn-sm" type="reset">Reset</button>
				<button class="btn btn-outline-primary btn-sm" type="submit">Submit</button>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
// function disableGroup(inputObj, targerObjs, isTrue = true)
// {
// 	var inputObject = document.getElementById(inputObj);
// 	var targerObjects = document.getElementsByClassName(targerObjs);
// 	for (var i = 0; i < targerObjects.length; i++)
// 	{
// 		if (isTrue == true)
// 		{
// 			if (inputObject.checked)
// 			{
// 				targerObjects[i].disabled = true;
// 			}
// 			else
// 			{
// 				targerObjects[i].disabled = false;
// 			}
// 		}
// 		else
// 		{
// 			if (inputObject.checked)
// 			{
// 				targerObjects[i].disabled = false;
// 			}
// 			else
// 			{
// 				targerObjects[i].disabled = true;
// 			}
// 		}
// 	}
// }

// function disableOnInvalid(inputObj, targerObjs, isTrue = true)
// {
// 	var inputObject = document.getElementById(inputObj);
// 	var targerObjects = document.getElementsByClassName(targerObjs);
	
// 	for (var i = 0; i < targerObjects.length; i++)
// 	{
// 		if (isTrue == true)
// 		{
// 			if (!inputObject.checkValidity())
// 			{
// 				targerObjects[i].disabled = true;
// 			}
// 			else
// 			{
// 				targerObjects[i].disabled = false;
// 			}
// 		}
// 		else
// 		{
// 			if (!inputObject.checkValidity())
// 			{
// 				targerObjects[i].disabled = false;
// 			}
// 			else
// 			{
// 				targerObjects[i].disabled = true;
// 			}
// 		}
// 	}
// }
</script>