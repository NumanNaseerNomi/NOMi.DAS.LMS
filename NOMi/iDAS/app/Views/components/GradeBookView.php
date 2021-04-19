<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-body">
				<form class="row g-3 needs-validation" autocomplete="off">
					<div class="col-md-6">
						<label for="class" class="form-label">Class *</label>
						<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="class" required>
							<option selected>Overall Progress</option>
							<option value="PG">PG</option>
							<option value="Prep">Prep</option>
						</select>
					</div>
					<div class="col-md-6">
						<label for="academicYear" class="form-label">Exam *</label>
						<select class="form-select form-select-sm bgDarkBlack border-dark fcLightBlack" id="academicYear" required>
							<option value="2021-2022">Mid Term</option>
							<option value="2022-2023" selected>Final Term</option>
							<option value="2021-2022">Final Result</option>
						</select>
					</div>
				</form>
			</div>
		</div>
		<br/>
		<div class="card">
			<h4 class="m-3 mb-0">Overall Progress (Final Term)</h4>
			<hr class="mb-0"/>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-dark table-sm table-striped table-hover text-center">
						<thead>
							<tr class=" align-middle">
								<th scope="col">Class/Subjects</th>
								<th scope="col">Max Marks</th>
								<th scope="col">Obtained Marks</th>
								<th scope="col">Percentage</th>
								<th scope="col">Grade</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Four</td>
								<td>400</td>
								<td>356</td>
								<td>85%</td>
								<td>A+</td>
							</tr>
							<tr>
								<td>Three</td>
								<td>300</td>
								<td>280</td>
								<td>81%</td>
								<td>A</td>
							</tr>
							<tr>
								<td>Two</td>
								<td>350</td>
								<td>320</td>
								<td>88%</td>
								<td>B</td>
							</tr>
							<tr>
								<td>One</td>
								<td>200</td>
								<td>180</td>
								<td>80%</td>
								<td>A+</td>
							</tr>
						</tbody>
					</table>
					<hr/>
				</div>
				<canvas id="myChart"></canvas>
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
					<table class="table table-dark table-sm table-striped table-hover text-center">
						<thead>
							<tr class=" align-middle">
								<th scope="col">Grade</th>
								<th scope="col">Percentage</th>
								<th scope="col">Remarks</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>A+</td>
								<td>91-100</td>
								<td>Excellent</td>
							</tr>
							<tr>
								<td>A</td>
								<td>81-90</td>
								<td>Brilliant</td>
							</tr>
							<tr>
								<td>B+</td>
								<td>71-80</td>
								<td>Good</td>
							</tr>
							<tr>
								<td>B</td>
								<td>61-70</td>
								<td>Satisfactory</td>
							</tr>
							<tr>
								<td>C</td>
								<td>51-60</td>
								<td>Acceptable</td>
							</tr>
							<tr>
								<td>D</td>
								<td>40-50</td>
								<td>Poor</td>
							</tr>
							<tr>
								<td>F</td>
								<td>0-39</td>
								<td>Fail</td>
							</tr>
						</tbody>
					</table>
					<hr/>
				</div>
			</div>
		</div>
		<br/>
		<div class="card">
			<h4 class="m-3 mb-0"> Final Result Grading Scheme</h4>
			<hr class="mb-0"/>
			<div class="card-body">
				<canvas id="finalResultGradingSchemeChart"></canvas>
			</div>
		</div>
		<br/>
	</div>
</div>
<script>
	const chartLabels = ['One', 'Two', 'Three', 'Four'];
	const chartData = [80, 88, 81, 85];
	const chartDataSetLabels = ['My First dataset by NOMi'];

	function plotChart(chartLabels, chartData, chartCanvas, chartType = 'bar')
	{
		const data =
		{
			labels: chartLabels,
			datasets:
			[
				{
					label: chartDataSetLabels,
					data: chartData,
					backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)'],
					borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)'],
					borderWidth: 1
				}
			]
		};

		const config =
		{
			type: chartType,
			data 
		};

		//var chartCanvas = document.getElementById(chartCanvas);
		var myChart = new Chart(document.getElementById(chartCanvas), config);
	}
</script>

<script>
	plotChart(chartLabels, chartData, 'myChart');
	plotChart(chartLabels, chartData, 'finalResultGradingSchemeChart', 'pie');
</script>