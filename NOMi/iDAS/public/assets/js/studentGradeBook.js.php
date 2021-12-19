<script>
	function getClassesList()
	{
		var classesListDetail = <?php echo json_encode($classesList); ?>;
		
		if (classesListDetail)
		{
			var classesListOptions = document.getElementById("classesList");

			if (classesListDetail.length > 1)
			{
				classesListOptions.options[classesListOptions.options.length] = new Option("Overall Progress", "overall", true, true);
			}

			for (var i = 0; i < classesListDetail.length; i++)
			{
				classesListOptions.options[classesListOptions.options.length] = new Option(classesListDetail[i].className, classesListDetail[i].classId);
			}
			
			document.getElementById("resultAnalysis").classList.remove("collapse");
		}
	}

	function getExamsList()
	{
		var classesListOptions = document.getElementById("classesList");
		
		if (classesListOptions.length > 0)
		{
			var examsListOptions = document.getElementById("examsList");
			examsListOptions.length = 0;
			
			if (classesListOptions.value == "overall")
			{
				examsListOptions.options[examsListOptions.options.length] = new Option("Final Result", "finalResult", true, true);
			}
			else
			{
				// var examsListDetail = <?php echo json_encode($examsList); ?>;
				var allExamsListDetail = <?php echo json_encode($allExamsList); ?>;
				
				var finalGradingScheme = <?php echo json_encode($finalGradingScheme); ?>;
				var isFinalResult = false;

				let dateTimeNow = new Date();
				let comingResults = new Array;

				for (var i = 0; i < allExamsListDetail.length; i++)
				{
					if (classesListOptions.value == allExamsListDetail[i].classId)
					{
						let resultDateTime = new Date(allExamsListDetail[i].resultDateTime);

						if (resultDateTime < dateTimeNow)
						{
							examsListOptions.options[examsListOptions.options.length] = new Option(allExamsListDetail[i].examName + " - " + allExamsListDetail[i].examDescription, allExamsListDetail[i].examId);
						}
						else
						{
							let newOption = new Option(allExamsListDetail[i].examName + " - " + allExamsListDetail[i].examDescription, allExamsListDetail[i].examId);
							comingResults.push(newOption);
						}
					}

					if (finalGradingScheme && finalGradingScheme[0].examId == allExamsListDetail[i].examId)
					{
						isFinalResult = true;
					}
				}

				if (examsListOptions.options.length > 1)
				{
					var newOption = new Option("Overall Progress", "overall", true, true);
					examsListOptions.add(newOption, examsListOptions[0]);
				}

				for(let i = 0; i < comingResults.length; i++)
				{
					examsListOptions.options[examsListOptions.options.length] = comingResults[i];
				}
				
				if (isFinalResult)
				{
					examsListOptions.options[examsListOptions.options.length] = new Option("Final Result", "finalResult", true);
				}
			}
		}
	}

	function plotResultSheet()
	{
		var examsListOptions = document.getElementById("examsList");

		if (examsListOptions.length > 0)
		{
			var table = document.getElementById("resultSheetTable");
			
			var tableBody = table.getElementsByTagName("tbody")[0];
			tableBody.innerHTML = "";
			
			var tFooter = table.getElementsByTagName("tfoot")[0];
			tFooter.innerHTML = "";

			var chartWrapper = document.getElementById("resultSheetChartWrapper");
			chartWrapper.innerHTML = "";

			var classesListIndex = document.getElementById("classesList").selectedIndex;
			var classesListOptions  =  document.getElementById("classesList").options;

			var examsListIndex = document.getElementById("examsList").selectedIndex;
			var examsListOptions  =  document.getElementById("examsList").options;

			var resultSheetHeading = classesListOptions[classesListIndex].text + " (" + examsListOptions[examsListIndex].text + ")";
			resultSheetHeading = document.getElementById("resultSheetHeading").innerHTML = resultSheetHeading;

			var resultDetails = <?php echo json_encode($resultDetails); ?>;

			document.getElementById("finalResultAnalysis").classList.add("collapse");

			if (classesListOptions[classesListIndex].value == "overall")
			{
				document.getElementById("classOrSubject").innerHTML = "Class";
			}
			else if (examsListOptions[examsListIndex].value == "overall")
			{
				document.getElementById("classOrSubject").innerHTML = "Exam";
				
				var examsListDetail = <?php echo json_encode($examsList); ?>;

				var totalMaxMarks = totalObtainedMarks = 0;
				var chartLabels = [];
				var chartData = [];

				for (var i = 0; i < examsListDetail.length; i++)
				{
					var maxMarks = obtainedMarks = 0;

					for (var j = 0; j < resultDetails.length; j++)
					{
						if (examsListDetail[i].examId == resultDetails[j].examId)
						{
							maxMarks += Number(resultDetails[j].maxMarks);
							obtainedMarks += Number(resultDetails[j].obtainedMarks);
						}
					}
					
					var percentage = Math.round((((obtainedMarks/maxMarks)*100) + Number.EPSILON) * 100) / 100;
					totalMaxMarks += maxMarks;
					totalObtainedMarks += obtainedMarks;

					chartLabels.push(examsListDetail[i].examName + " - " + examsListDetail[i].examDescription);
					chartData.push(percentage);

					var cellTextValues =
					[
						examsListDetail[i].examName + " - " + examsListDetail[i].examDescription,
						maxMarks,
						obtainedMarks,
						percentage,
						getGradeByMarks(Math.round(percentage)).grade
					];

					var row = document.createElement("tr");

					for (var j = 0; j < cellTextValues.length; j++)
					{
						var cell = document.createElement("td");
						var cellText = document.createTextNode(cellTextValues[j]);

						cell.appendChild(cellText);
						row.appendChild(cell);
					}

					tableBody.appendChild(row);
				}

				var row = document.createElement("tr");
				var totalPercentage = (totalObtainedMarks/totalMaxMarks)*100;

				var cellTextValues =
				[
					"TOTAL",
					totalMaxMarks,
					totalObtainedMarks,
					Math.round((totalPercentage + Number.EPSILON) * 100) / 100,
					getGradeByMarks(Math.round(totalPercentage)).grade
				];

				for (var i = 0; i < cellTextValues.length; i++)
				{
					var cell = document.createElement("th");
					var cellText = document.createTextNode(cellTextValues[i]);

					cell.appendChild(cellText);
					row.appendChild(cell);
				}

				tFooter.appendChild(row);
				
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
			else if (examsListOptions[examsListIndex].value == "finalResult")
			{
				document.getElementById("classOrSubject").innerHTML = "Exam";
				
				var finalGradingScheme = <?php echo json_encode($finalGradingScheme); ?>;

				var totalMaxMarks = totalObtainedMarks = 0;
				var chartLabels = [];
				var chartData = [];
				var chartDataFinalGradingScheme = [];

				for (var i = 0; i < finalGradingScheme.length; i++)
				{
					var maxMarks = obtainedMarks = 0;

					for (var j = 0; j < resultDetails.length; j++)
					{
						if (finalGradingScheme[i].examId == resultDetails[j].examId)
						{
							maxMarks += ((Number(resultDetails[j].maxMarks)*finalGradingScheme[i].percentage)/100);
							obtainedMarks += ((Number(resultDetails[j].obtainedMarks)*finalGradingScheme[i].percentage)/100);
						}
					}
					
					var percentage = Math.round((((obtainedMarks/maxMarks)*100) + Number.EPSILON) * 100) / 100;
					totalMaxMarks += maxMarks;
					totalObtainedMarks += obtainedMarks;

					chartLabels.push(finalGradingScheme[i].examName + " - " + finalGradingScheme[i].examDescription);
					chartData.push(percentage);
					chartDataFinalGradingScheme.push(finalGradingScheme[i].percentage);

					var cellTextValues =
					[
						finalGradingScheme[i].examName + " - " + finalGradingScheme[i].examDescription,
						maxMarks,
						obtainedMarks,
						percentage,
						getGradeByMarks(Math.round(percentage)).grade
					];

					var row = document.createElement("tr");

					for (var j = 0; j < cellTextValues.length; j++)
					{
						var cell = document.createElement("td");
						var cellText = document.createTextNode(cellTextValues[j]);

						cell.appendChild(cellText);
						row.appendChild(cell);
					}

					tableBody.appendChild(row);
				}

				var row = document.createElement("tr");
				var totalPercentage = (totalObtainedMarks/totalMaxMarks)*100;

				var cellTextValues =
				[
					"TOTAL",
					totalMaxMarks,
					totalObtainedMarks,
					Math.round((totalPercentage + Number.EPSILON) * 100) / 100,
					getGradeByMarks(Math.round(totalPercentage)).grade
				];

				for (var i = 0; i < cellTextValues.length; i++)
				{
					var cell = document.createElement("th");
					var cellText = document.createTextNode(cellTextValues[i]);

					cell.appendChild(cellText);
					row.appendChild(cell);
				}

				tFooter.appendChild(row);
				
				var chartConfig =
				{
					chartWrapper: "resultSheetChartWrapper",
					chartLabels: chartLabels,
					chartData: chartData,
					chartDataSetLabel: resultSheetHeading + "    Percentage",
					chartType: 'bar'
				};
				
				plotChart(chartConfig);
				
				document.getElementById("finalResultAnalysis").classList.remove("collapse");

				var chartConfig =
				{
					chartWrapper: "finalResultGradingSchemeChartWrapper",
					chartLabels: chartLabels,
					chartData: chartDataFinalGradingScheme,
					chartDataSetLabel: resultSheetHeading + "    Percentage",
					chartType: 'pie'
				};
				
				plotChart(chartConfig);
			}
			else
			{
				var allExamsListDetail = <?php echo json_encode($allExamsList); ?>;
				document.getElementById("ClockTickingDiv").classList.add("collapse");

				for (var i = 0; i < allExamsListDetail.length; i++)
				{
					let resultDateTime = new Date(allExamsListDetail[i].resultDateTime);
					
					if ((allExamsListDetail[i].examId == examsListOptions[examsListIndex].value) && (resultDateTime > new Date()))
					{
						document.getElementById("ClockTickingDiv").classList.remove("collapse");

						let x = setInterval(function()
						{
							document.getElementById("ClockTicking").innerHTML = countdown(resultDateTime) + "<br/><h6> ("+ resultDateTime + ")</h6>";
	
							if (new Date() > resultDateTime)
							{
								clearInterval(x);
								document.getElementById("ClockTicking").innerHTML = "Announced <br> Refresh Page";
							}
						}, 1000);
						
						return;
					}
				}
				
				document.getElementById("classOrSubject").innerHTML = "Subjects";

				var totalMaxMarks = totalObtainedMarks = 0;
				var chartLabels = [];
				var chartData = [];

				for (var i = 0; i < resultDetails.length; i++)
				{
					if ((resultDetails[i].classId == classesListOptions[classesListIndex].value) && (resultDetails[i].examId == examsListOptions[examsListIndex].value))
					{
						var row = document.createElement("tr");

						var tempPercentage = ((resultDetails[i].obtainedMarks/resultDetails[i].maxMarks)*100);
						var percentage = Math.round((tempPercentage + Number.EPSILON) * 100) / 100;
						
						var cellTextValues =
						[
							resultDetails[i].subjectCode,
							resultDetails[i].maxMarks,
							resultDetails[i].obtainedMarks,
							percentage,
							getGradeByMarks(Math.round(percentage)).grade
						];

						chartLabels.push(resultDetails[i].subjectCode);
						chartData.push(percentage);
						
						totalMaxMarks += Number(resultDetails[i].maxMarks);
						totalObtainedMarks += Number(resultDetails[i].obtainedMarks);

						for (var j = 0; j < cellTextValues.length; j++)
						{
							var cell = document.createElement("td");
							var cellText = document.createTextNode(cellTextValues[j]);

							cell.appendChild(cellText);
							row.appendChild(cell);
						}

						tableBody.appendChild(row);
					}
				}

				var row = document.createElement("tr");
				var totalPercentage = (totalObtainedMarks/totalMaxMarks)*100;

				var cellTextValues =
				[
					"TOTAL",
					totalMaxMarks,
					totalObtainedMarks,
					Math.round((totalPercentage + Number.EPSILON) * 100) / 100,
					getGradeByMarks(Math.round(totalPercentage)).grade
				];

				for (var i = 0; i < cellTextValues.length; i++)
				{
					var cell = document.createElement("th");
					var cellText = document.createTextNode(cellTextValues[i]);

					cell.appendChild(cellText);
					row.appendChild(cell);
				}

				tFooter.appendChild(row);

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
			var cellTextValues = [resultGradingScheme[i].grade, percentageRange, resultGradingScheme[i].remarks];

			for (var j = 0; j < cellTextValues.length; j++)
			{
				var cell = document.createElement("td");
				var cellText = document.createTextNode(cellTextValues[j]);

				cell.appendChild(cellText);
				row.appendChild(cell);
			}

			tableBody.appendChild(row);
		}

		table.appendChild(tableBody);
	}

	function getGradeByMarks(marks)
	{
		var resultGradingScheme = <?php echo json_encode($resultGradingScheme); ?>;

		for (var i = 0; i < resultGradingScheme.length; i++)
		{
			if (resultGradingScheme[i].minMarks <= marks && resultGradingScheme[i].maxMarks >= marks)
			{
				return resultGradingScheme[i];
			}
		}
	}
</script>

<script>
	plotGradingSchemeTable();
	getClassesList();
	getExamsList();
	plotResultSheet();
	
	document.querySelector("#classesList").addEventListener("change", getExamsList);
	document.querySelector("#classesList").addEventListener("change", plotResultSheet);
	document.querySelector("#examsList").addEventListener("change", plotResultSheet);
</script>
