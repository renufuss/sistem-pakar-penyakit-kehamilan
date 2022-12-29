<?php

namespace App\Models;

use CodeIgniter\Model;

class DiseaseModel extends Model
{
    protected $table      = 'disease';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name'];

    protected $useTimestamps = false;
    protected $createdField  = null;
    protected $updatedField  = null;
    protected $deletedField  = null;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


    public function showAllData($diseaseId)
    {
        $table = $this->db->table('disease_symptoms');
        $data = $table->select('disease_id, symptom_id, disease.name as name, disease.key as diseaseKey, symptom.name as symptomName, symptom.key as symptomKey, description, url')->join('disease', 'disease_symptoms.disease_id=disease.id', 'inner')->join('symptom', 'disease_symptoms.symptom_id=symptom.id', 'inner')->where('disease_id', $diseaseId)->get()->getResultObject();

        return $data;
    }
}
