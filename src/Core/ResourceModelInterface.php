<?php
namespace MVC\Core;
interface ResourceModelInterface{
    public function getAll();
    public function get($id);
    public function delete($id);
    public function save($model);
}