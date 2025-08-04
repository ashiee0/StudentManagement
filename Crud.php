<?php
namespace Claro\StudentManagement\Core;

interface Crud {
    public function create(): void;
    public function read(): void;
    public function update(): void;
    public function delete(): void;
}