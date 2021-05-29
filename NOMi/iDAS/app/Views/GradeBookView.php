<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-body">
				<div class="row g-3">
					<div class="col-md-6">
						<label for="classesList" class="form-label">Class *</label>
						<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="classesList" onchange="getExamsList();plotResultSheet();" required></select>
					</div>
					<div class="col-md-6">
						<label for="examsList" class="form-label">Exam *</label>
						<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="examsList" onchange="plotResultSheet();" required></select>
					</div>
				</div>
			</div>
		</div>
		<br/>
		<div class="card">
			<h4 class="m-3 mb-0" id="resultSheetHeading"></h4>
			<hr class="mb-0"/>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-dark table-sm table-striped table-hover text-center" id="resultSheetTable">
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
				<div id="resultSheetChartWrapper"></div>
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
							<tr class=" align-middle">
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
<!-- 		<br/>
		<div class="card">
			<h4 class="m-3 mb-0"> Final Result Grading Scheme</h4>
			<hr class="mb-0"/>
			<div class="card-body">
				<canvas id="finalResultGradingSchemeChart"></canvas>
			</div>
		</div>
		<br/> -->
	</div>
</div>

<script>
	function getClassesList()
	{
		var classesListOptions = document.getElementById("classesList");
		classesListOptions.length = 0;
		classesListOptions.options[classesListOptions.options.length] = new Option("Overall Progress", "overall", true, true);

		var classesListDetail = <?php echo json_encode($classesList); ?>;

		for (var i = 0; i < classesListDetail.length; i++)
		{
			classesListOptions.options[classesListOptions.options.length] = new Option(classesListDetail[i].className, classesListDetail[i].classId);
		}
	}

	function getExamsList()
	{
		var classesListOptions = document.getElementById("classesList");
		var examsListOptions = document.getElementById("examsList");
		examsListOptions.length = 0;

		var examsListDetail = <?php echo json_encode($examsList); ?>;

	    for (var i = 0; i < examsListDetail.length; i++)
	    {
	    	if (classesListOptions.value == examsListDetail[i].classId)
	    	{
	    		examsListOptions.options[examsListOptions.options.length] = new Option(examsListDetail[i].examName + " - " + examsListDetail[i].examDescription, examsListDetail[i].examId);
	    	}
	    }

	    if (classesListOptions.value == "overall")
	    {
	    	examsListOptions.options[examsListOptions.options.length] = new Option("Final Result", "finalResult", true, true);
	    }
	}

	function plotResultSheet()
	{
		var table = document.getElementById("resultSheetTable");
		
		var tableBody = table.getElementsByTagName("tbody")[0];
		tableBody.innerHTML = "";
		
		var tfooter = table.getElementsByTagName("tfoot")[0];
		tfooter.innerHTML = "";

		var chartWrapper = document.getElementById("resultSheetChartWrapper");
		chartWrapper.innerHTML = "";

		var classesListIndex = document.getElementById("classesList").selectedIndex;
		var classesListOptions  =  document.getElementById("classesList").options;

		var examsListIndex = document.getElementById("examsList").selectedIndex;
		var examsListOptions  =  document.getElementById("examsList").options;

		var resultSheetHeading = classesListOptions[classesListIndex].text + " (" + examsListOptions[examsListIndex].text + ")";
		resultSheetHeading = document.getElementById("resultSheetHeading").innerHTML = resultSheetHeading;

		var resultDetails = <?php echo json_encode($resultDetails); ?>;

		if (classesListOptions[classesListIndex].value == "overall")
		{
			document.getElementById("classOrSubject").innerHTML = "Class";
		}
		else
		{
			document.getElementById("classOrSubject").innerHTML = "Subject";

			var totalMaxMarks = totalObtainedMarks = 0;
			var chartLabels = [];
			var chartData = [];

			for (var i = 0; i < resultDetails.length; i++)
			{
				if (resultDetails[i].classId == classesListOptions[classesListIndex].value &&
					resultDetails[i].examId == examsListOptions[examsListIndex].value)
				{
					var row = document.createElement("tr");
					
					var cellTextValue =
					[
						resultDetails[i].subjectCode,
						resultDetails[i].maxMarks,
						resultDetails[i].obtainedMarks,
						resultDetails[i].percentage,
						resultDetails[i].grade
					];

					chartLabels.push(resultDetails[i].subjectCode);
					chartData.push(resultDetails[i].percentage);

					totalMaxMarks += resultDetails[i].maxMarks;
					totalObtainedMarks += resultDetails[i].obtainedMarks;

					for (var j = 0; j < cellTextValue.length; j++)
					{
						var cell = document.createElement("td");
						var cellText = document.createTextNode(cellTextValue[j]);

						cell.appendChild(cellText);
						row.appendChild(cell);
					}

					tableBody.appendChild(row);
				}
			}

			var row = document.createElement("tr");
			var totalPercentage = (totalObtainedMarks/totalMaxMarks)*100;

			var cellTextValue =
			[
				"TOTAL",
				totalMaxMarks,
				totalObtainedMarks,
				totalPercentage.toFixed(),
				""
			];

			for (var i = 0; i < cellTextValue.length; i++)
			{
				var cell = document.createElement("th");
				var cellText = document.createTextNode(cellTextValue[i]);

				cell.appendChild(cellText);
				row.appendChild(cell);
			}

			tfooter.appendChild(row);

			var chartConfig =
			{
				chartWrapper: "resultSheetChartWrapper",
				chartLabels: chartLabels,
				chartData: chartData,
				chartDataSetLabel: resultSheetHeading + "    Percentage",
				chartType: 'bar'
			};
			
			plotChart(chartConfig);
		}
	}

	function plotChart(chartConfig)
	{
		// chartConfig = {chartWrapper:, chartLabels:, chartData:, chartDataSetLabel:, chartType: 'bar'};

		const data =
		{
			labels: chartConfig.chartLabels,
			datasets:
			[
				{
					label: chartConfig.chartDataSetLabel,
					data: chartConfig.chartData,
					backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'],
					borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)'],
					borderWidth: 1
				}
			]
		};

		const config =
		{
			type: chartConfig.chartType,
			data 
		};

		var chartWrapper = document.getElementById(chartConfig.chartWrapper);
		chartWrapper.innerHTML = "<canvas></canvas><hr/>";

		new Chart(chartWrapper.getElementsByTagName("canvas"), config);
	}

	function plotGradingSchemeTable()
	{
		var table = document.getElementById("resultGradingSchemeTable");
		var tableBody = document.createElement("tbody");
		var resultGradingScheme = <?php echo json_encode($resultGradingScheme); ?>;

		for (var i = 0; i < resultGradingScheme.length; i++)
		{
			var row = document.createElement("tr");
			var percentageRange = resultGradingScheme[i].minMarks + "-" + resultGradingScheme[i].maxMarks;
			var cellTextValue = [resultGradingScheme[i].grade, percentageRange, resultGradingScheme[i].remarks];

			for (var j = 0; j < 3; j++)
			{
				var cell = document.createElement("td");
				var cellText = document.createTextNode(cellTextValue[j]);

				cell.appendChild(cellText);
				row.appendChild(cell);
			}

			tableBody.appendChild(row);
		}

		table.appendChild(tableBody);
	}
</script>
<script>
	getClassesList();
	getExamsList();
	plotResultSheet();
	plotGradingSchemeTable();
</script>