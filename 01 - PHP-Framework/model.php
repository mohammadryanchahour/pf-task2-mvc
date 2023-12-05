<?php
require_once 'SingletonDB.php';
require_once 'interface.php';

class ClassModel implements ClassInterface {
    private $db;

    public function __construct() {
        $this->db = SingletonDB::getInstance()->getConnection();
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO Class (column1, column2, ...) VALUES (:value1, :value2, ...)");
        // Bind values from $data array to placeholders in the query
        // $data should contain values for the columns in the Class table
        $stmt->bindParam(':value1', $data['value1']);
        $stmt->bindParam(':value2', $data['value2']);
        $stmt->execute();
        // You might want to return the ID of the newly inserted row if needed
        return $this->db->lastInsertId();
    }

    public function read($id) {
        $stmt = $this->db->prepare("SELECT * FROM Class WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function readAll(){
        $stmt = $this->db->prepare("SELECT * FROM Class");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($id, $data) {
        // Implement update method
        // Use a similar approach as create() to update specific columns of the Class table for the given ID
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
