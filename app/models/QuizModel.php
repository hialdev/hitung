<?php 
require_once('BaseModel.php');

class QuizModel extends BaseModel{

    protected $table = "quiz";
    public function getUser()
    {
        return "Mantaf";
    }
}