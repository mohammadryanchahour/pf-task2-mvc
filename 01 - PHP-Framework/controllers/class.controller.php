<?php
require_once '../models/class.model.php';

class ClassController {
    private $classModel;

    public function __construct() {
        $this->classModel = new ClassModel();
    }

    public function createClass($data) {
        return $this->classModel->create($data);
    }

    public function getClass($id) {
        return $this->classModel->read($id);
    }

    public function getAllClasses() {
        return $this->classModel->readAll();
    }

    public function updateClass($id, $data) {
        return $this->classModel->update($id, $data);
    }

    public function deleteClass($id) {
        return $this->classModel->delete($id);
    }

    public function getClassStudents($classId) {
        return $this->classModel->getClassStudents($classId);
    }

    public function getClassTeacher($classId) {
        return $this->classModel->getClassTeacher($classId);
    }

    public function getClassCourses($classId) {
        return $this->classModel->getClassCourses($classId);
    }
}
?>
