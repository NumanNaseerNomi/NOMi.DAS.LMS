<?php namespace App\Controllers;

use App\Models\UserRolesModel;
use App\Models\UsersModel;
use App\Models\UserCandidatesModel;
use App\Models\CampusSessionClassesModel;
use App\Models\CampusSessionClassSectionsModel;
use App\Models\ClassesModel;
use App\Models\CampusSessionClassSectionExamsModel;
use App\Models\SubjectsModel;
use App\Models\CampusSessionClassSectionExamSubjectStudentsMarksModel;
use App\Models\CampusSessionClassSectionExamSubjectsModel;
use App\Models\ExamsModel;
use App\Models\CampusSessionClassSectionExamSubjectMaxMarksModel;
use App\Models\ResultGradingSchemeModel;

use App\Models\CampusSessionClassSectionExamFinalGradingSchemeModel;

class GradeBookController extends BaseController
{
	public function index()
	{
		$userRolesModel	= new UserRolesModel();
		$userRole	= $userRolesModel->getUserRoleById($this->session->iDASUser->userRoleId);

		switch (strtolower($userRole->role))
		{
			case "student":	//	Student Grade Book Page
			{
				$this->studentGradeBook();
				break;
			}
			case "parent": // Parents Home Page
			{
				echo view('components/HeaderView');
				echo "u r a Parent";
				echo view('components/FooterView');
				break;
			}
			case "coordinator": // Coordinator Home Page
			{
				$this->coordinatorGradeBook();
				break;
			}
			case "staff": // Staff Home Page
			{
				echo view('components/HeaderView');
				echo "u r a Staff";
				echo view('components/FooterView');
				break;
			}
			default:
			{
				echo view('components/HeaderView');
				echo "u r a Guest";
				echo view('components/FooterView');
				break;
			}
		}
	}

	private function studentGradeBook()
	{
		$resultDetails		= null;
		$classesList		= null;
		$examsList			= null;
		$finalGradingScheme	= null;
		
		$usersModel	= new UsersModel();
		$user = $usersModel->getUserById($this->session->iDASUser->userId);

		$userCandidatesModel = new UserCandidatesModel();
		$userCandidate = $userCandidatesModel->getUserCandidateById($user->userCandidateId);
		$studentId = $userCandidate->studentsId;

		$campusSessionClassSectionExamSubjectStudentsMarksModel = new CampusSessionClassSectionExamSubjectStudentsMarksModel();
		$campusSessionClassSectionExamSubjectStudentsMarks = $campusSessionClassSectionExamSubjectStudentsMarksModel->getCampusSessionClassSectionExamSubjectMarksByStudentId($studentId);

		if ($campusSessionClassSectionExamSubjectStudentsMarks)
		{
			for ($i = 0; $i < sizeof($campusSessionClassSectionExamSubjectStudentsMarks); $i++)
			{
				$campusSessionClassSectionExamSubjectsModel = new CampusSessionClassSectionExamSubjectsModel();
				$campusSessionClassSectionExamSubject = $campusSessionClassSectionExamSubjectsModel->getCampusSessionClassSectionExamSubjectById($campusSessionClassSectionExamSubjectStudentsMarks[$i]->campusSessionClassSectionExamSubjectId);

				$campusSessionClassSectionExamsModel = new CampusSessionClassSectionExamsModel();
				$campusSessionClassSectionExam = $campusSessionClassSectionExamsModel->getCampusSessionClassSectionExamById($campusSessionClassSectionExamSubject->campusSessionClassSectionExamId);

				$campusSessionClassSectionsModel = new CampusSessionClassSectionsModel();
				$campusSessionClassSection = $campusSessionClassSectionsModel->getCampusSessionClassSectionById($campusSessionClassSectionExam->campusSessionClassSectionId);

				$examsModel = new ExamsModel();
				$exam = $examsModel->getExamById($campusSessionClassSectionExam->examId);

				$campusSessionClassesModel = new CampusSessionClassesModel();
				$campusSessionClass = $campusSessionClassesModel->getCampusSessionClassById($campusSessionClassSection->campusSessionClassId);

				$classesModel = new ClassesModel();
				$class = $classesModel->getClassById($campusSessionClass->classId);

				$campusSessionClassSectionExamSubjectMaxMarksModel = new CampusSessionClassSectionExamSubjectMaxMarksModel();
				$campusSessionClassSectionExamSubjectMaxMarks = $campusSessionClassSectionExamSubjectMaxMarksModel->getMaxMarksByCampusSessionClassSectionExamSubjectId($campusSessionClassSectionExamSubject->id);

				$subjectsModel = new SubjectsModel();

				$obtainedMarks	= $campusSessionClassSectionExamSubjectStudentsMarks[$i]->marks;
				$maxMarks		= $campusSessionClassSectionExamSubjectMaxMarks->maxMarks;

				$allResultDetails[$i] =
				[
					"obtainedMarks"		=> $obtainedMarks,
					"maxMarks"			=> $maxMarks,
					"subjectCode"		=> $subjectsModel->getSubjectById($campusSessionClassSectionExamSubject->subjectId)->code,
					"examId"			=> $campusSessionClassSectionExam->id,
					"resultDateTime"	=> $campusSessionClassSectionExam->resultDateTime,
					"examDescription"	=> $campusSessionClassSectionExam->description,
					"examName"			=> $exam->name,
					"classId"			=> $class->id,
					"className"			=> $class->class,
					"classOrder"		=> $class->priorityOrder
				];
			}

			$resultDetailsArrayIndex = 0;

			for ($i = 0; $i < sizeof($allResultDetails); $i++)
			{
				if ($allResultDetails[$i]['resultDateTime'] <= date("Y-m-d H:i:s"))
				{
					$resultDetails[$resultDetailsArrayIndex++] = $allResultDetails[$i];
				}
			}

			array_multisort(array_column($resultDetails, "subjectCode"), SORT_ASC, $resultDetails);
			$tempClassesList = array_unique(array_column($resultDetails, 'classId'));
			$classesList = array_intersect_key($resultDetails, $tempClassesList);
			array_multisort(array_column($classesList, "classOrder"), SORT_ASC, $classesList);

			$tempExamsList = array_unique(array_column($resultDetails, 'examId'));
			$examsList = array_intersect_key($resultDetails, $tempExamsList);
			array_multisort(array_column($examsList, "examId"), SORT_ASC, $examsList);

			$tempAllExamsList = array_unique(array_column($allResultDetails, 'examId'));
			$allExamsList = array_intersect_key($allResultDetails, $tempAllExamsList);
			array_multisort(array_column($allExamsList, "examId"), SORT_ASC, $allExamsList);

			$campusSessionClassSectionExamFinalGradingSchemeModel = new CampusSessionClassSectionExamFinalGradingSchemeModel();

			for ($i = 0; $i < sizeof($allExamsList); $i++)
			{
				$isFoundFinalGradingScheme = $campusSessionClassSectionExamFinalGradingSchemeModel->getFinalGradingSchemeByCampusSessionClassSectionExamId($allExamsList[$i]['examId']);
				
				if ($isFoundFinalGradingScheme)
				{
					$finalGradingScheme[$i] = 
					[
						"examId"		=> $isFoundFinalGradingScheme->campusSessionClassSectionExamId,
						"percentage"	=> $isFoundFinalGradingScheme->percentage
					];
				}
			}

			if ($finalGradingScheme)
			{
				$tempFinalGradingScheme = array_intersect_key($allExamsList, $finalGradingScheme);
				$finalGradingScheme = array_replace_recursive($tempFinalGradingScheme, $finalGradingScheme);
			}
		}

		$data =
		[
			"resultDetails"			=> $resultDetails,
			"classesList"			=> $classesList,
			"examsList"				=> $examsList,
			"resultGradingScheme"	=> $this->getResultGradingScheme(),
			"finalGradingScheme"	=> $finalGradingScheme
		];
		
		echo view('components/HeaderView', $data);
		echo view('GradeBookView');
		echo view('components/FooterView');
	}

	// private function coordinatorGradeBook()
	// {
	// 	$usersModel	= new UsersModel();
	// 	$user = $usersModel->getUserById($this->session->iDASUser->userId); //dd($user);

	// 	$userCandidatesModel = new UserCandidatesModel();
	// 	$userCandidate = $userCandidatesModel->getUserCandidateById($user->userCandidateId); //dd($userCandidate);
	// 	$staffId = $userCandidate->staffId; //dd($staffId);

	// 	$campusSessionClassSectionExamSubjectStudentsMarksModel = new CampusSessionClassSectionExamSubjectStudentsMarksModel();
	// 	$campusSessionClassSectionExamSubjectStudentsMarks = $campusSessionClassSectionExamSubjectStudentsMarksModel->getCampusSessionClassSectionExamSubjectMarksByStudentId($studentId);

	// 	for ($i = 0; $i < sizeof($campusSessionClassSectionExamSubjectStudentsMarks); $i++)
	// 	{
	// 		$campusSessionClassSectionExamSubjectsModel = new CampusSessionClassSectionExamSubjectsModel();
	// 		$campusSessionClassSectionExamSubject = $campusSessionClassSectionExamSubjectsModel->getCampusSessionClassSectionExamSubjectById($campusSessionClassSectionExamSubjectStudentsMarks[$i]->campusSessionClassSectionExamSubjectId);

	// 		$campusSessionClassSectionExamsModel = new CampusSessionClassSectionExamsModel();
	// 		$campusSessionClassSectionExam = $campusSessionClassSectionExamsModel->getCampusSessionClassSectionExamById($campusSessionClassSectionExamSubject->campusSessionClassSectionExamId);

	// 		$campusSessionClassSectionsModel = new CampusSessionClassSectionsModel();
	// 		$campusSessionClassSection = $campusSessionClassSectionsModel->getCampusSessionClassSectionById($campusSessionClassSectionExam->campusSessionClassSectionId);

	// 		$examsModel = new ExamsModel();
	// 		$exam = $examsModel->getExamById($campusSessionClassSectionExam->examId);

	// 		$campusSessionClassesModel = new CampusSessionClassesModel();
	// 		$campusSessionClass = $campusSessionClassesModel->getCampusSessionClassById($campusSessionClassSection->campusSessionClassId);

	// 		$classesModel = new ClassesModel();
	// 		$class = $classesModel->getClassById($campusSessionClass->classId);

	// 		$campusSessionClassSectionExamSubjectMaxMarksModel = new CampusSessionClassSectionExamSubjectMaxMarksModel();
	// 		$campusSessionClassSectionExamSubjectMaxMarks = $campusSessionClassSectionExamSubjectMaxMarksModel->getMaxMarksByCampusSessionClassSectionExamSubjectId($campusSessionClassSectionExamSubject->id);

	// 		$subjectsModel = new SubjectsModel();
	// 		$resultGradingSchemeModel = new ResultGradingSchemeModel();

	// 		$obtainedMarks	= round($campusSessionClassSectionExamSubjectStudentsMarks[$i]->marks);
	// 		$maxMarks		= round($campusSessionClassSectionExamSubjectMaxMarks->maxMarks);
	// 		$percentage		= round(($obtainedMarks/$maxMarks)*100);

	// 		$allResultDetails[$i] =
	// 		[
	// 			"obtainedMarks"		=> $obtainedMarks,
	// 			"maxMarks"			=> $maxMarks,
	// 			"percentage"		=> $percentage,
	// 			"grade"				=> $resultGradingSchemeModel->getGradeByMarks($percentage)->grade,
	// 			"subjectCode"		=> $subjectsModel->getSubjectById($campusSessionClassSectionExamSubject->subjectId)->code,
	// 			"examId"			=> $campusSessionClassSectionExam->id,
	// 			"resultDateTime"	=> $campusSessionClassSectionExam->resultDateTime,
	// 			"examDescription"	=> $campusSessionClassSectionExam->description,
	// 			"examName"			=> $exam->name,
	// 			"classId"			=> $class->id,
	// 			"className"			=> $class->class,
	// 			"classOrder"		=> $class->priorityOrder
	// 		];
	// 	}

	// 	$resultDetailsArrayIndex = 0;

	// 	for ($i = 0; $i < sizeof($allResultDetails); $i++)
	// 	{
	// 		if ($allResultDetails[$i]['resultDateTime'] <= date("Y-m-d H:i:s"))
	// 		{
	// 			$resultDetails[$resultDetailsArrayIndex++] = $allResultDetails[$i];
	// 		}
	// 	}

	// 	$tempClassesList = array_unique(array_column($resultDetails, 'classId'));
	// 	$classesList = array_intersect_key($resultDetails, $tempClassesList);
	// 	array_multisort(array_column($classesList, "classOrder"), SORT_ASC, $classesList);

	// 	$tempExamsList = array_unique(array_column($resultDetails, 'examId'));
	// 	$examsList = array_intersect_key($resultDetails, $tempExamsList);
	// 	array_multisort(array_column($examsList, "examId"), SORT_ASC, $examsList);

	// 	$data =
	// 	[
	// 		"resultDetails"			=> $resultDetails,
	// 		"classesList"			=> $classesList,
	// 		"examsList"				=> $examsList,
	// 		"resultGradingScheme"	=> $this->getResultGradingScheme()
	// 	];

	// 	echo view('components/HeaderView', $data);
	// 	echo view('GradeBookView');
	// 	echo view('components/FooterView');
	// }

	private function getResultGradingScheme()
	{
		$resultGradingSchemeModel = new ResultGradingSchemeModel();
		return $resultGradingSchemeModel->getResultGradingScheme();
	}

	// private function getFinalResultGradingScheme()
	// {
	// 	$campusSessionClassSectionExamFinalGradingSchemeModel = new CampusSessionClassSectionExamFinalGradingSchemeModel();
	// 	return $campusSessionClassSectionExamFinalGradingSchemeModel->getFinalResultGradingSchemeByCampusSessionClassSectionExamId(2);
	// }
}
