<?php

interface DatabaseInterface {
    public function create($data);
    public function read($id);
    public function readAll();
    public function update($id, $data);
    public function delete($id);
}

interface ClassInterface extends DatabaseInterface {
    public function getClassStudents($classId);
    public function getClassTeacher($classId);
    public function getClassCourses($classId);
}

interface TeacherInterface extends DatabaseInterface {
    public function getTeacherCourses($teacherId);
}

interface StudentInterface extends DatabaseInterface {
    public function getStudentCourses($studentId);
}

interface CourseInterface extends DatabaseInterface {
    public function getCourseClasses($courseId);
}

?>