<?php
interface Crud {
    public function create();
    public function getAll();
    public function getById($id);
    public function update($id);
    public function delete($id);
}