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
use App\Models\CampusSessionClassSectionSubjectTeachersModel;
use App\Models\StaffModel;

class HomeController extends BaseController
{
	public function index()
	{
		$userRolesModel	= new UserRolesModel();
		$userRole	= $userRolesModel->getUserRoleById($this->session->iDASUser->userRoleId);

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
		}

		for ($i = 0; $i < sizeof($campusSessionClassesByStudentId); $i++)
		{
			$studentClasses[$i] = $campusSessionClassesByStudentId[$i]->campusSessionClassId;
		}

		for ($i = 0; $i < sizeof($campusSessionClassesByStudentId); $i++)
		{
			for ($j = 0; $j < sizeof($classesByCampusSessionId); $j++)
			{
				if ($studentClasses[$i] == $sessionClasses[$j])
				{
					$classBySessionId = $classesByCampusSessionId[$j];
				}
			}
		}

		$classId = $classBySessionId->classId;

		$campusSessionClassSectionsModel = new CampusSessionClassSectionsModel();
		$sectionsByCampusSessionClassId = $campusSessionClassSectionsModel->getSectionsByCampusSessionClassId($classBySessionId->id);

		$campusSessionClassSectionStudentsModel = new CampusSessionClassSectionStudentsModel();
		$campusSessionClassSectionByStudentId = $campusSessionClassSectionStudentsModel->getCampusSessionClassSectionsByStudentId($studentId);

		for ($i = 0; $i < sizeof($sectionsByCampusSessionClassId); $i++)
		{
			$classSectionsId[$i] = $sectionsByCampusSessionClassId[$i]->id;
		}

		for ($i = 0; $i < sizeof($campusSessionClassSectionByStudentId); $i++)
		{
			$studentSectionsId[$i] = $campusSessionClassSectionByStudentId[$i]->campusSessionClassSectionId;
		}

		for ($i = 0; $i < sizeof($campusSessionClassSectionByStudentId); $i++)
		{
			for ($j = 0; $j < sizeof($sectionsByCampusSessionClassId); $j++)
			{
				if ($studentSectionsId[$i] == $classSectionsId[$j])
				{
					$sectionByClassId = $sectionsByCampusSessionClassId[$j];
				}
			}
		}

		$sectionId = $sectionByClassId->sectionId;

		$campusSessionClassSectionSubjectsModel = new CampusSessionClassSectionSubjectsModel();
		$subjectsByCampusSessionClassSectionId = $campusSessionClassSectionSubjectsModel->getSubjectsByCampusSessionClassSectionId($sectionId);

		$subjectsModel	= new SubjectsModel();
		$CampusSessionClassSectionSubjectTeachersModel = new CampusSessionClassSectionSubjectTeachersModel();
		$StaffModel = new StaffModel();

		for ($i = 0; $i < sizeof($subjectsByCampusSessionClassSectionId); $i++)
		{
			$staffByCampusSessionClassSectionSubjectId[$i] = $CampusSessionClassSectionSubjectTeachersModel->getStaffByCampusSessionClassSectionSubjectId($subjectsByCampusSessionClassSectionId[$i]->id);
		}

		for ($i = 0; $i < sizeof($subjectsByCampusSessionClassSectionId); $i++)
		{
			for ($j = 0; $j < sizeof($staffByCampusSessionClassSectionSubjectId); $j++)
			{
				if ($subjectsByCampusSessionClassSectionId[$i]->id == $staffByCampusSessionClassSectionSubjectId[$j]->campusSessionClassSectionSubjectId)
				{
					$subjects[$i] = $subjectsModel->getSubjectById($subjectsByCampusSessionClassSectionId[$i]->subjectId);
					$teachers[$j] = $StaffModel->getStaffById($staffByCampusSessionClassSectionSubjectId[$j]->staffId);

					$subjectDedails[$i] = [$subjects[$i], $teachers[$j]];
				}
			}
		}
		
		$data["subjectDedails"] = $subjectDedails; 

		echo view('components/HeaderView', $data);
		echo view('components/SubjectCardView');
		echo view('components/FooterView');
	}

	public function tempComingSoon()
	{
		echo view('components/HeaderView');
		echo "<h1>Coming Soon...</h1>";
		echo view('components/FooterView');
	}

	public function admit()
	{
		echo view('components/HeaderView');
		echo view('components/admissionFormView');
		echo view('components/FooterView');
	}
}
