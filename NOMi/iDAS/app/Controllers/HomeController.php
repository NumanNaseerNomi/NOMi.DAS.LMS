<?php namespace App\Controllers;

use App\Models\UserRolesModel;

use App\Models\UsersModel;
use App\Models\UserCandidatesModel;
use App\Models\CampusStudentsModel;
use App\Models\CampusSessionsModel;
use App\Models\CampusSessionClassesModel;
use App\Models\CampusSessionClassStudentsModel;
use App\Models\CampusSessionClassSectionsModel;
use App\Models\CampusSessionClassSectionStudentsModel;
use App\Models\CampusSessionClassSectionSubjectsModel;
use App\Models\SubjectsModel;

//use App\Models\CampusesModel;
//use App\Models\ClassesModel;
//use App\Models\GuardiansModel;
//use App\Models\SectionsModel;
//use App\Models\SessionsModel;

//use App\Models\CampusClassesModel;
// use App\Models\ClassSubjectsModel;
use App\Models\CampusSessionClassSectionSubjectTeachersModel;
use App\Models\StaffModel;



class HomeController extends BaseController
{
	public function index()
	{
		$userRolesModel	= new UserRolesModel();
		$userRole	= $userRolesModel->getUserRole($this->session->iDASUser->userRoleId); //dd($userRole);

		//$userCandidatesModel	= new UsersModel();
		//$userCandidates	= $userCandidatesModel->getUsers(); //dd($userCandidates);

		$userCandidatesModel	= new CampusStudentsModel();
		//$userCandidates	= $userCandidatesModel->getStudentsByCampusID(1); dd($userCandidates);

		//public $iDASData = [];

		//$userRoleID = 1;
		//$this->session->iDASUser->userRoleId;

		switch (strtolower($userRole->role))
		{
			case "student":	//	Student Home Page
			{
				$this->studentSubjectCards();
				break;
			}
			case "parent": // Parents Home Page
			{
				echo view('components/HeaderView');
				echo "u r a Parent";
				echo view('components/FooterView');
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

	private function studentSubjectCards()
	{
		$usersModel	= new UsersModel();
		$user	= $usersModel->getUserById($this->session->iDASUser->userId);

		$userCandidatesModel = new UserCandidatesModel();
		$userCandidate = $userCandidatesModel->getUserCandidateById($user->userCandidateId);
		$studentId = $userCandidate->studentsId;

		$campusStudentsModel = new CampusStudentsModel();
		$campusByStudentId = $campusStudentsModel->getCampusByStudentId($studentId);
		$campusId = $campusByStudentId->campusId;

		$campusSessionsModel = new CampusSessionsModel();
		$activeCampusSession = $campusSessionsModel->getActiveSessionByCampusId($campusId);
		$sessionId = $activeCampusSession->sessionId;

		$campusSessionClassesModel = new CampusSessionClassesModel();
		$classesByCampusSessionId = $campusSessionClassesModel->getClassesByCampusSessionId($activeCampusSession->id);

		$campusSessionClassStudentsModel	= new CampusSessionClassStudentsModel();
		$campusSessionClassesByStudentId	= $campusSessionClassStudentsModel->getCampusSessionClassesByStudentId($studentId);

		for ($i = 0; $i < sizeof($classesByCampusSessionId); $i++)
		{
			$sessionClasses[$i] = $classesByCampusSessionId[$i]->id;
			// echo $i . " sessionClasses : after" . $sessionClasses[$i] . " , befor :" . $classesByCampusSessionId[$i]->id . "<br>";
		}

		for ($i = 0; $i < sizeof($campusSessionClassesByStudentId); $i++)
		{
			$studentClasses[$i] = $campusSessionClassesByStudentId[$i]->campusSessionClassId;
			// echo $i . " : studentClasses after" . $studentClasses[$i] . " , befor :" . $campusSessionClassesByStudentId[$i]->campusSessionClassId . "<br>";
		}

		for ($i = 0; $i < sizeof($campusSessionClassesByStudentId); $i++)
		{
			for ($j = 0; $j < sizeof($classesByCampusSessionId); $j++)
			{
				if ($studentClasses[$i] == $sessionClasses[$j])
				{
					// echo "found :".  $i . ":" . $j;
					$classBySessionId = $classesByCampusSessionId[$j]; //$campusSessionClassesByStudentId[$i];
				}
			}
		}

		$classId = $classBySessionId->classId;

		$campusSessionClassSectionsModel = new CampusSessionClassSectionsModel();
		$sectionsByCampusSessionClassId = $campusSessionClassSectionsModel->getSectionsByCampusSessionClassId($classBySessionId->id);

		$campusSessionClassSectionStudentsModel = new CampusSessionClassSectionStudentsModel();
		$campusSessionClassSectionByStudentId = $campusSessionClassSectionStudentsModel->getCampusSessionClassSectionByStudentId($studentId);

		for ($i = 0; $i < sizeof($sectionsByCampusSessionClassId); $i++)
		{
			$classSectionsId[$i] = $sectionsByCampusSessionClassId[$i]->id;
			// echo $i . " classSectionsId : after " . $classSectionsId[$i] . " , befor :" . $sectionsByCampusSessionClassId[$i]->id . "<br>";
		}

		for ($i = 0; $i < sizeof($campusSessionClassSectionByStudentId); $i++)
		{
			$studentSectionsId[$i] = $campusSessionClassSectionByStudentId[$i]->campusSessionClassSectionId;
			// echo $i . " : studentSectionsId after " . $studentSectionsId[$i] . " , befor :" . $campusSessionClassSectionByStudentId[$i]->campusSessionClassSectionId . "<br>";
		}

		for ($i = 0; $i < sizeof($campusSessionClassSectionByStudentId); $i++)
		{
			for ($j = 0; $j < sizeof($sectionsByCampusSessionClassId); $j++)
			{
				if ($studentSectionsId[$i] == $classSectionsId[$j])
				{
					// echo "found :".  $i . ":" . $j;
					$sectionByClassId = $sectionsByCampusSessionClassId[$j];
				}
			}
		}

		$sectionId = $sectionByClassId->sectionId;
		
		
		
		// $campusSessionClassSectionSubjectStudentsModel = new CampusSessionClassSectionSubjectStudentsModel();
		// $subjectsByStudentId = $campusSessionClassSectionSubjectStudentsModel->getCampusSessionClassSectionSubjectsByStudentId($studentId);

		// $classSubjectsModel = new ClassSubjectsModel();
		// $subjectsByClassId = $classSubjectsModel->getSubjectsByClassId($classId);

		// for ($i = 0; $i < sizeof($subjectsByClassId); $i++)
		// {
		// 	$classSubjectsId[$i] = $subjectsByClassId[$i]->subjectId;
		// }

		$campusSessionClassSectionSubjectsModel = new CampusSessionClassSectionSubjectsModel();
		$subjectsByCampusSessionClassSectionId = $campusSessionClassSectionSubjectsModel->getSubjectsByCampusSessionClassSectionId($sectionId);

		$subjectsModel	= new SubjectsModel();
		$CampusSessionClassSectionSubjectTeachersModel = new CampusSessionClassSectionSubjectTeachersModel();
		$StaffModel = new StaffModel();

		for ($i = 0; $i < sizeof($subjectsByCampusSessionClassSectionId); $i++)
		{
			$subjects[$i]	= $subjectsModel->getSubjectById($subjectsByCampusSessionClassSectionId[$i]->subjectId);
			$staffByCampusSessionClassSectionSubjectId[$i] = $CampusSessionClassSectionSubjectTeachersModel->getStaffByCampusSessionClassSectionSubjectId($subjectsByCampusSessionClassSectionId[$i]->id);
			$teachers[$i] = $StaffModel->getStaffById($staffByCampusSessionClassSectionSubjectId[$i]->staffId);
		}

		// array_multisort( array_column($subjects, "code"), SORT_ASC, $subjects);
		$data["subjects"] = $subjects;
		$data["teachers"] = $teachers;

		
		



		// dd($teachers);
		// $activeSessionID = $classesByCampusSessionId->sessionID; 

		echo view('components/HeaderView', $data);
		echo view('components/SubjectCardView');
		echo view('components/FooterView');
	}

	public function tempComingSoon()
	{
		echo view('components/HeaderView');
		echo "Comong Soon...";
		echo view('components/FooterView');
	}
}
