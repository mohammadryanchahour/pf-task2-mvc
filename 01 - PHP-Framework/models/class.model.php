<?php
require_once '../config/SingletonDB.php';
require_once '../interface.php';

class ClassModel implements ClassInterface {
    private $db;

    public function __construct() {
        $this->db = SingletonDB::getInstance()->getConnection();
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO Class (column1, column2, ...) VALUES (:value1, :value2, ...)");
        $stmt->bindParam(':value1', $data['value1']);
        $stmt->bindParam(':value2', $data['value2']);
        // Bind other values similarly for each column
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    public function read($id) {
        $stmt = $this->db->prepare("SELECT * FROM Class WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function readAll() {
        $stmt = $this->db->prepare("SELECT * FROM Class");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($id, $data) {
        // Assuming $data contains values to be updated
        $query = "UPDATE Class SET column1 = :value1, column2 = :value2 WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':value1', $data['value1']);
        $stmt->bindParam(':value2', $data['value2']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM Class WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function getClassStudents($classId) {
        // Implement method to get students of a class
        // Use JOIN queries to fetch students related to the given class ID
    }

    public function getClassTeacher($classId) {
        // Implement method to get teacher of a class
        // Use JOIN queries to fetch the teacher related to the given class ID
    }

    public function getClassCourses($classId) {
        // Implement method to get courses of a class
        // Use JOIN queries to fetch courses related to the given class ID
    }
}
?>
