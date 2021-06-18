-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 10:00 AM
-- Server version: 8.0.23
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idarearqam`
--

-- --------------------------------------------------------

--
-- Table structure for table `campuses`
--

CREATE TABLE `campuses` (
  `id` int NOT NULL,
  `campusCode` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `campusName` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `campusAddress` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `campus_classes`
--

CREATE TABLE `campus_classes` (
  `id` int NOT NULL,
  `classId` int NOT NULL,
  `campusId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `campus_sessions`
--

CREATE TABLE `campus_sessions` (
  `id` int NOT NULL,
  `campusId` int NOT NULL,
  `sessionId` int NOT NULL,
  `isActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `campus_session_classes`
--

CREATE TABLE `campus_session_classes` (
  `id` int NOT NULL,
  `campusSessionId` int NOT NULL,
  `classId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `campus_session_class_sections`
--

CREATE TABLE `campus_session_class_sections` (
  `id` int NOT NULL,
  `campusSessionClassId` int NOT NULL,
  `sectionId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `campus_session_class_section_exams`
--

CREATE TABLE `campus_session_class_section_exams` (
  `id` int NOT NULL,
  `campusSessionClassSectionId` int NOT NULL,
  `examId` int NOT NULL,
  `description` varchar(45) COLLATE utf8mb4_bin NOT NULL,
  `resultDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `campus_session_class_section_exam_subjects`
--

CREATE TABLE `campus_session_class_section_exam_subjects` (
  `id` int NOT NULL,
  `campusSessionClassSectionExamId` int NOT NULL,
  `subjectId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `campus_session_class_section_exam_subject_maxmarks`
--

CREATE TABLE `campus_session_class_section_exam_subject_maxMarks` (
  `id` int NOT NULL,
  `campusSessionClassSectionExamSubjectId` int NOT NULL,
  `maxMarks` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `campus_session_class_section_exam_subject_students_marks`
--

CREATE TABLE `campus_session_class_section_exam_subject_students_marks` (
  `id` int NOT NULL,
  `campusSessionClassSectionExamSubjectId` int NOT NULL,
  `studentId` int NOT NULL,
  `marks` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `campus_session_class_section_students`
--

CREATE TABLE `campus_session_class_section_students` (
  `id` int NOT NULL,
  `campusSessionClassSectionId` int NOT NULL,
  `studentId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `campus_session_class_section_subjects`
--

CREATE TABLE `campus_session_class_section_subjects` (
  `id` int NOT NULL,
  `campusSessionClassSectionId` int NOT NULL,
  `subjectId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `campus_session_class_section_subject_teachers`
--

CREATE TABLE `campus_session_class_section_subject_teachers` (
  `id` int NOT NULL,
  `staffId` int NOT NULL,
  `campusSessionClassSectionSubjectId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `campus_session_class_students`
--

CREATE TABLE `campus_session_class_students` (
  `id` int NOT NULL,
  `campusSessionClassId` int NOT NULL,
  `studentId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `campus_staff`
--

CREATE TABLE `campus_staff` (
  `id` int NOT NULL,
  `staffId` int NOT NULL,
  `campusId` int NOT NULL,
  `isAcademic` bit(1) NOT NULL COMMENT '1 = Academic, 0 = Non-Academic'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `campus_students`
--

CREATE TABLE `campus_students` (
  `id` int NOT NULL,
  `campusId` int NOT NULL,
  `studentId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `candidatetypes`
--

CREATE TABLE `candidateTypes` (
  `id` int NOT NULL,
  `CandidateType` varchar(45) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int NOT NULL,
  `class` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `priorityOrder` float NOT NULL
) ;

-- --------------------------------------------------------

--
-- Table structure for table `class_subjects`
--

CREATE TABLE `class_subjects` (
  `id` int NOT NULL,
  `classId` int NOT NULL,
  `subjectId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` int NOT NULL,
  `parentId` int NOT NULL,
  `relation` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int NOT NULL,
  `nid` bigint NOT NULL COMMENT 'National Identity Number',
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `dob` date NOT NULL COMMENT 'Date of Birth'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `resultgradingscheme`
--

CREATE TABLE `resultGradingScheme` (
  `id` int NOT NULL,
  `grade` varchar(2) COLLATE utf8mb4_bin NOT NULL,
  `remarks` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `minMarks` decimal(2,0) NOT NULL COMMENT 'Marks in Percentage',
  `maxMarks` decimal(3,0) NOT NULL COMMENT 'Marks in Percentage'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int NOT NULL,
  `section` varchar(20) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int NOT NULL,
  `session` varchar(20) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int NOT NULL,
  `nid` bigint NOT NULL COMMENT 'National Identity Number',
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `dob` date NOT NULL COMMENT 'Date of Birth',
  `qualification` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int NOT NULL,
  `nid` bigint NOT NULL COMMENT 'National Identity Number',
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `dob` date NOT NULL COMMENT 'Date of Birth',
  `parentId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `student_parents`
--

CREATE TABLE `student_parents` (
  `id` int NOT NULL,
  `fatherId` int NOT NULL,
  `motherId` int NOT NULL,
  `guardianId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `isActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `usercandidates`
--

CREATE TABLE `userCandidates` (
  `id` int NOT NULL,
  `staffId` int DEFAULT NULL,
  `studentsId` int DEFAULT NULL,
  `parentsId` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `userroles`
--

CREATE TABLE `userRoles` (
  `id` int NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `userName` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `userPassword` text COLLATE utf8mb4_bin NOT NULL,
  `userRoleId` int NOT NULL,
  `userCandidateId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campuses`
--
ALTER TABLE `campuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `campusCode_UNIQUE` (`campusCode`);

--
-- Indexes for table `campus_classes`
--
ALTER TABLE `campus_classes`
  ADD PRIMARY KEY (`classId`,`campusId`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_campus_classes_classes1_idx` (`classId`),
  ADD KEY `fk_campus_classes_campuses1_idx` (`campusId`);

--
-- Indexes for table `campus_sessions`
--
ALTER TABLE `campus_sessions`
  ADD PRIMARY KEY (`campusId`,`sessionId`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_campus_sessions_campuses1_idx` (`campusId`),
  ADD KEY `fk_campus_sessions_sessions1_idx` (`sessionId`);

--
-- Indexes for table `campus_session_classes`
--
ALTER TABLE `campus_session_classes`
  ADD PRIMARY KEY (`campusSessionId`,`classId`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_campus_session_classes_campus_sessions1_idx` (`campusSessionId`),
  ADD KEY `fk_campus_session_classes_classes1_idx` (`classId`);

--
-- Indexes for table `campus_session_class_sections`
--
ALTER TABLE `campus_session_class_sections`
  ADD PRIMARY KEY (`campusSessionClassId`,`sectionId`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_campus_session_class_sections_campus_session_classes1_idx` (`campusSessionClassId`),
  ADD KEY `fk_campus_session_class_sections_sections1_idx` (`sectionId`);

--
-- Indexes for table `campus_session_class_section_exams`
--
ALTER TABLE `campus_session_class_section_exams`
  ADD PRIMARY KEY (`campusSessionClassSectionId`,`examId`,`description`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_campus_session_class_section_exams_exams1_idx` (`examId`),
  ADD KEY `fk_campus_session_class_section_exams_campus_session_class__idx` (`campusSessionClassSectionId`);

--
-- Indexes for table `campus_session_class_section_exam_subjects`
--
ALTER TABLE `campus_session_class_section_exam_subjects`
  ADD PRIMARY KEY (`campusSessionClassSectionExamId`,`subjectId`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_campus_session_class_section_exam_subjects_campus_sessio_idx` (`campusSessionClassSectionExamId`),
  ADD KEY `fk_campus_session_class_section_exam_subjects_subjects1_idx` (`subjectId`);

--
-- Indexes for table `campus_session_class_section_exam_subject_maxmarks`
--
ALTER TABLE `campus_session_class_section_exam_subject_maxMarks`
  ADD PRIMARY KEY (`campusSessionClassSectionExamSubjectId`,`maxMarks`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `campusSessionClassSectionExamSubjectId_UNIQUE` (`campusSessionClassSectionExamSubjectId`),
  ADD KEY `fk_campus_session_class_section_exam_subject_MaxMarks_campu_idx` (`campusSessionClassSectionExamSubjectId`);

--
-- Indexes for table `campus_session_class_section_exam_subject_students_marks`
--
ALTER TABLE `campus_session_class_section_exam_subject_students_marks`
  ADD PRIMARY KEY (`campusSessionClassSectionExamSubjectId`,`studentId`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_campus_session_class_section_exam_subject_students_marks_idx` (`campusSessionClassSectionExamSubjectId`),
  ADD KEY `fk_campus_session_class_section_exam_subject_students_marks_idx1` (`studentId`);

--
-- Indexes for table `campus_session_class_section_students`
--
ALTER TABLE `campus_session_class_section_students`
  ADD PRIMARY KEY (`campusSessionClassSectionId`,`studentId`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_campus_session_class_section_students_campus_session_cla_idx` (`campusSessionClassSectionId`),
  ADD KEY `fk_campus_session_class_section_students_students1_idx` (`studentId`);

--
-- Indexes for table `campus_session_class_section_subjects`
--
ALTER TABLE `campus_session_class_section_subjects`
  ADD PRIMARY KEY (`campusSessionClassSectionId`,`subjectId`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_campus_session_class_section_subjects_campus_session_cla_idx` (`campusSessionClassSectionId`),
  ADD KEY `fk_campus_session_class_section_subjects_subjects1_idx` (`subjectId`);

--
-- Indexes for table `campus_session_class_section_subject_teachers`
--
ALTER TABLE `campus_session_class_section_subject_teachers`
  ADD PRIMARY KEY (`campusSessionClassSectionSubjectId`,`staffId`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_campus_session_class_section_subject_teachers_campus_ses_idx` (`campusSessionClassSectionSubjectId`),
  ADD KEY `fk_campus_session_class_section_subject_teachers_staff1_idx` (`staffId`);

--
-- Indexes for table `campus_session_class_students`
--
ALTER TABLE `campus_session_class_students`
  ADD PRIMARY KEY (`campusSessionClassId`,`studentId`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_campus_session_classes_campus_sessions10_idx` (`campusSessionClassId`),
  ADD KEY `fk_campus_session_classes_classes10_idx` (`studentId`);

--
-- Indexes for table `campus_staff`
--
ALTER TABLE `campus_staff`
  ADD PRIMARY KEY (`campusId`,`staffId`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_campus_staff_campuses1_idx` (`campusId`),
  ADD KEY `fk_campus_staff_staff1_idx` (`staffId`);

--
-- Indexes for table `campus_students`
--
ALTER TABLE `campus_students`
  ADD PRIMARY KEY (`campusId`,`studentId`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `studentID_UNIQUE` (`studentId`),
  ADD KEY `fk_table1_campuses1_idx` (`campusId`),
  ADD KEY `fk_table1_students1_idx` (`studentId`);

--
-- Indexes for table `candidatetypes`
--
ALTER TABLE `candidateTypes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `CandidateType_UNIQUE` (`CandidateType`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `class_subjects`
--
ALTER TABLE `class_subjects`
  ADD PRIMARY KEY (`classId`,`subjectId`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `subjectId_UNIQUE` (`subjectId`),
  ADD KEY `fk_class_subjects_classes1_idx` (`classId`),
  ADD KEY `fk_class_subjects_subjects1_idx` (`subjectId`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `guardians`
--
ALTER TABLE `guardians`
  ADD PRIMARY KEY (`relation`,`parentId`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_guardians_parents_idx` (`parentId`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`nid`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `nid_UNIQUE` (`nid`);

--
-- Indexes for table `resultgradingscheme`
--
ALTER TABLE `resultGradingScheme`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `grade_UNIQUE` (`grade`),
  ADD UNIQUE KEY `remarks_UNIQUE` (`remarks`),
  ADD UNIQUE KEY `minMarks_UNIQUE` (`minMarks`),
  ADD UNIQUE KEY `maxMarks_UNIQUE` (`maxMarks`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `section_UNIQUE` (`section`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `session_UNIQUE` (`session`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`nid`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `nid_UNIQUE` (`nid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `nid_UNIQUE` (`nid`),
  ADD KEY `fk_students_student_parents1_idx` (`parentId`);

--
-- Indexes for table `student_parents`
--
ALTER TABLE `student_parents`
  ADD PRIMARY KEY (`guardianId`,`fatherId`,`motherId`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_student_parents_guardians1_idx` (`guardianId`),
  ADD KEY `fk_student_parents_parents1_idx` (`motherId`),
  ADD KEY `fk_student_parents_parents2_idx` (`fatherId`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `code_UNIQUE` (`code`);

--
-- Indexes for table `usercandidates`
--
ALTER TABLE `userCandidates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `staff_id_UNIQUE` (`staffId`),
  ADD UNIQUE KEY `students_id_UNIQUE` (`studentsId`),
  ADD UNIQUE KEY `parents_id_UNIQUE` (`parentsId`),
  ADD KEY `fk_userCandidates_staff1_idx` (`staffId`),
  ADD KEY `fk_userCandidates_students1_idx` (`studentsId`),
  ADD KEY `fk_userCandidates_parents1_idx` (`parentsId`);

--
-- Indexes for table `userroles`
--
ALTER TABLE `userRoles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `role_UNIQUE` (`role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userRoleId`,`userCandidateId`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `userName_UNIQUE` (`userName`),
  ADD KEY `fk_users_userRoles1_idx` (`userRoleId`),
  ADD KEY `fk_users_userCandidates1` (`userCandidateId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campuses`
--
ALTER TABLE `campuses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_classes`
--
ALTER TABLE `campus_classes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_sessions`
--
ALTER TABLE `campus_sessions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_session_classes`
--
ALTER TABLE `campus_session_classes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_session_class_sections`
--
ALTER TABLE `campus_session_class_sections`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_session_class_section_exams`
--
ALTER TABLE `campus_session_class_section_exams`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_session_class_section_exam_subjects`
--
ALTER TABLE `campus_session_class_section_exam_subjects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_session_class_section_exam_subject_maxmarks`
--
ALTER TABLE `campus_session_class_section_exam_subject_maxMarks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_session_class_section_exam_subject_students_marks`
--
ALTER TABLE `campus_session_class_section_exam_subject_students_marks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_session_class_section_students`
--
ALTER TABLE `campus_session_class_section_students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_session_class_section_subjects`
--
ALTER TABLE `campus_session_class_section_subjects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_session_class_section_subject_teachers`
--
ALTER TABLE `campus_session_class_section_subject_teachers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_session_class_students`
--
ALTER TABLE `campus_session_class_students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_staff`
--
ALTER TABLE `campus_staff`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_students`
--
ALTER TABLE `campus_students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_subjects`
--
ALTER TABLE `class_subjects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resultgradingscheme`
--
ALTER TABLE `resultGradingScheme`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_parents`
--
ALTER TABLE `student_parents`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usercandidates`
--
ALTER TABLE `userCandidates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userroles`
--
ALTER TABLE `userRoles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campus_classes`
--
ALTER TABLE `campus_classes`
  ADD CONSTRAINT `fk_campus_classes_campuses1` FOREIGN KEY (`campusId`) REFERENCES `campuses` (`id`),
  ADD CONSTRAINT `fk_campus_classes_classes1` FOREIGN KEY (`classId`) REFERENCES `classes` (`id`);

--
-- Constraints for table `campus_sessions`
--
ALTER TABLE `campus_sessions`
  ADD CONSTRAINT `fk_campus_id` FOREIGN KEY (`campusId`) REFERENCES `campuses` (`id`),
  ADD CONSTRAINT `fk_campus_sessions_sessions1` FOREIGN KEY (`sessionId`) REFERENCES `sessions` (`id`);

--
-- Constraints for table `campus_session_classes`
--
ALTER TABLE `campus_session_classes`
  ADD CONSTRAINT `fk_campus_session_classes_campus_sessions1` FOREIGN KEY (`campusSessionId`) REFERENCES `campus_sessions` (`id`),
  ADD CONSTRAINT `fk_campus_session_classes_classes1` FOREIGN KEY (`classId`) REFERENCES `classes` (`id`);

--
-- Constraints for table `campus_session_class_sections`
--
ALTER TABLE `campus_session_class_sections`
  ADD CONSTRAINT `fk_campus_session_class_sections_campus_session_classes1` FOREIGN KEY (`campusSessionClassId`) REFERENCES `campus_session_classes` (`id`),
  ADD CONSTRAINT `fk_campus_session_class_sections_sections1` FOREIGN KEY (`sectionId`) REFERENCES `sections` (`id`);

--
-- Constraints for table `campus_session_class_section_exams`
--
ALTER TABLE `campus_session_class_section_exams`
  ADD CONSTRAINT `fk_campus_session_class_section_exams_campus_session_class_se1` FOREIGN KEY (`campusSessionClassSectionId`) REFERENCES `campus_session_class_sections` (`id`),
  ADD CONSTRAINT `fk_campus_session_class_section_exams_exams1` FOREIGN KEY (`examId`) REFERENCES `exams` (`id`);

--
-- Constraints for table `campus_session_class_section_exam_subjects`
--
ALTER TABLE `campus_session_class_section_exam_subjects`
  ADD CONSTRAINT `fk_campus_session_class_section_exam_subjects_campus_session_1` FOREIGN KEY (`campusSessionClassSectionExamId`) REFERENCES `campus_session_class_section_exams` (`id`),
  ADD CONSTRAINT `fk_campus_session_class_section_exam_subjects_subjects1` FOREIGN KEY (`subjectId`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `campus_session_class_section_exam_subject_maxmarks`
--
ALTER TABLE `campus_session_class_section_exam_subject_maxMarks`
  ADD CONSTRAINT `fk_campus_session_class_section_exam_subject_MaxMarks_campus_1` FOREIGN KEY (`campusSessionClassSectionExamSubjectId`) REFERENCES `campus_session_class_section_exam_subjects` (`id`);

--
-- Constraints for table `campus_session_class_section_exam_subject_students_marks`
--
ALTER TABLE `campus_session_class_section_exam_subject_students_marks`
  ADD CONSTRAINT `fk_campus_session_class_section_exam_subject_students_marks_c1` FOREIGN KEY (`campusSessionClassSectionExamSubjectId`) REFERENCES `campus_session_class_section_exam_subjects` (`id`),
  ADD CONSTRAINT `fk_campus_session_class_section_exam_subject_students_marks_s1` FOREIGN KEY (`studentId`) REFERENCES `students` (`id`);

--
-- Constraints for table `campus_session_class_section_students`
--
ALTER TABLE `campus_session_class_section_students`
  ADD CONSTRAINT `fk_campus_session_class_section_students_campus_session_class1` FOREIGN KEY (`campusSessionClassSectionId`) REFERENCES `campus_session_class_sections` (`id`),
  ADD CONSTRAINT `fk_campus_session_class_section_students_students1` FOREIGN KEY (`studentId`) REFERENCES `students` (`id`);

--
-- Constraints for table `campus_session_class_section_subjects`
--
ALTER TABLE `campus_session_class_section_subjects`
  ADD CONSTRAINT `fk_campus_session_class_section_subjects_campus_session_class1` FOREIGN KEY (`campusSessionClassSectionId`) REFERENCES `campus_session_class_sections` (`id`),
  ADD CONSTRAINT `fk_campus_session_class_section_subjects_subjects1` FOREIGN KEY (`subjectId`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `campus_session_class_section_subject_teachers`
--
ALTER TABLE `campus_session_class_section_subject_teachers`
  ADD CONSTRAINT `fk_campus_session_class_section_subject_teachers_campus_sessi1` FOREIGN KEY (`campusSessionClassSectionSubjectId`) REFERENCES `campus_session_class_section_subjects` (`id`),
  ADD CONSTRAINT `fk_campus_session_class_section_subject_teachers_staff1` FOREIGN KEY (`staffId`) REFERENCES `staff` (`id`);

--
-- Constraints for table `campus_session_class_students`
--
ALTER TABLE `campus_session_class_students`
  ADD CONSTRAINT `fk_campus_session_classes_campus_sessions10` FOREIGN KEY (`campusSessionClassId`) REFERENCES `campus_session_classes` (`id`),
  ADD CONSTRAINT `fk_campus_session_classes_classes10` FOREIGN KEY (`studentId`) REFERENCES `students` (`id`);

--
-- Constraints for table `campus_staff`
--
ALTER TABLE `campus_staff`
  ADD CONSTRAINT `fk_campus_staff_campuses1` FOREIGN KEY (`campusId`) REFERENCES `campuses` (`id`),
  ADD CONSTRAINT `fk_campus_staff_staff1` FOREIGN KEY (`staffId`) REFERENCES `staff` (`id`);

--
-- Constraints for table `campus_students`
--
ALTER TABLE `campus_students`
  ADD CONSTRAINT `fk_campus_student_campuses` FOREIGN KEY (`campusId`) REFERENCES `campuses` (`id`),
  ADD CONSTRAINT `fk_campus_student_students` FOREIGN KEY (`studentId`) REFERENCES `students` (`id`);

--
-- Constraints for table `class_subjects`
--
ALTER TABLE `class_subjects`
  ADD CONSTRAINT `fk_class_subjects_classes1` FOREIGN KEY (`classId`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `fk_class_subjects_subjects1` FOREIGN KEY (`subjectId`) REFERENCES `subjects` (`id`);

--
-- Constraints for table `guardians`
--
ALTER TABLE `guardians`
  ADD CONSTRAINT `fk_guardians_parents` FOREIGN KEY (`parentId`) REFERENCES `parents` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_students_student_parents1` FOREIGN KEY (`parentId`) REFERENCES `student_parents` (`id`);

--
-- Constraints for table `student_parents`
--
ALTER TABLE `student_parents`
  ADD CONSTRAINT `fk_student_parents_guardians1` FOREIGN KEY (`guardianId`) REFERENCES `guardians` (`id`),
  ADD CONSTRAINT `fk_student_parents_parents1` FOREIGN KEY (`motherId`) REFERENCES `parents` (`id`),
  ADD CONSTRAINT `fk_student_parents_parents2` FOREIGN KEY (`fatherId`) REFERENCES `parents` (`id`);

--
-- Constraints for table `usercandidates`
--
ALTER TABLE `userCandidates`
  ADD CONSTRAINT `fk_userCandidates_parents1` FOREIGN KEY (`parentsId`) REFERENCES `parents` (`id`),
  ADD CONSTRAINT `fk_userCandidates_staff1` FOREIGN KEY (`staffId`) REFERENCES `staff` (`id`),
  ADD CONSTRAINT `fk_userCandidates_students1` FOREIGN KEY (`studentsId`) REFERENCES `students` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_userCandidates1` FOREIGN KEY (`userCandidateId`) REFERENCES `userCandidates` (`id`),
  ADD CONSTRAINT `fk_users_userRoles` FOREIGN KEY (`userRoleId`) REFERENCES `userRoles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
