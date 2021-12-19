<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-body">
				<div class="row g-3">
					<div class="col-md-6">
						<label for="classesList" class="form-label">Class *</label>
						<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="classesList"></select>
					</div>
					<div class="col-md-6">
						<label for="examsList" class="form-label">Exam *</label>
						<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="examsList"></select>
					</div>
				</div>
			</div>
		</div>
		<br/>
		<div class="card collapse" id="resultAnalysis">
			<h4 class="m-3 mb-0" id="resultSheetHeading"></h4>
			<hr class="mb-0"/>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-dark table-sm table-striped table-hover text-center align-middle" id="resultSheetTable">
						<thead>
							<tr class="align-middle">
								<th scope="col" id="classOrSubject">Class/Subjects</th>
								<th scope="col">Max Marks</th>
								<th scope="col">Obtained Marks</th>
								<th scope="col">Percentage</th>
								<th scope="col">Grade</th>
							</tr>
						</thead>
						<tbody></tbody>
						<tfoot></tfoot>
					</table>
					<hr/>
				</div>
				<div id="ClockTickingDiv" class="text-center collapse" >
					<h2>Result Time</h2>
					<h4>THE CLOCK IS TICKING..! GET READY.</h4>
					<h2 id="ClockTicking"></h2>
				</div>
				<div id="resultSheetChartWrapper"></div><hr/>
			</div>
		</div>
		<br/>
	</div>
	<div class="col-md-4">
		<div class="card">
			<h4 class="m-3 mb-0">Grading Scheme</h4>
			<hr class="mb-0"/>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-dark table-sm table-striped table-hover text-center" id="resultGradingSchemeTable">
						<thead>
							<tr class="align-middle">
								<th scope="col">Grade</th>
								<th scope="col">Percentage</th>
								<th scope="col">Remarks</th>
							</tr>
						</thead>
					</table>
					<hr/>
				</div>
			</div>
		</div>
		<br/>
		<div class="card collapse" id="finalResultAnalysis">
			<h4 class="m-3 mb-0">Grading Scheme <span class="h6">(Final Result)</span></h4>
			<hr class="mb-0"/>
			<div class="card-body">
				<div id="finalResultGradingSchemeChartWrapper"></div><hr/>
			</div>
		</div>
		<br/>
	</div>
</div>

<script src="<?php echo base_url('/assets/plugins/chartJS/chart.min.js') ?>"></script>
<script src="<?php echo base_url('/assets/plugins/chartJS/plotChart.js') ?>"></script>
<?php require FCPATH.'/assets/js/studentGradeBook.js.php'; ?>
<script src="<?php echo base_url('/assets/plugins/countdown.min.js') ?>"></script>
