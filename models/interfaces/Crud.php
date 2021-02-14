<?php
interface Crud {
    public function createUser($data);
    public function getAll();
    public function getById($id);
    public function update($id);
    public function delete($id);
}