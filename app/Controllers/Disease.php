<?php

namespace App\Controllers;

use App\Models\DiseaseModel;

class Disease extends BaseController
{
    protected $DiseaseModel;

    public function __construct()
    {
        $this->DiseaseModel = new DiseaseModel();
    }


    public function index()
    {
        return view('index');
    }

    public function check()
    {
        $diseases = $this->DiseaseModel->findAll();

        // symptom input user
        $inputs = $this->request->getPost();
        $symptomUser = [];
        foreach ($inputs as $key => $value) {
            $isSymptom = ($key != 'name' && $value != 'no' && $key != 'age');
            if ($isSymptom) {
                array_push($symptomUser, $key);
            }
        }

        $result = $this->DiseaseModel->where('key', 'NULL')->first();

        //symptom test
        // loop diseases
        foreach ($diseases as $disease) {
            // symptom disease
            $symptomDisease = [];
            $relations = $this->DiseaseModel->showAllData($disease->id);
            foreach ($relations as $relation) {
                array_push($symptomDisease, $relation->symptomKey);
            }
            if ($symptomUser == $symptomDisease) {
                $result = $disease;
                break;
            }
        }
        $data = [
            'name' => $this->request->getPost('name'),
            'age' => $this->request->getPost('age'),
            'disease' => $result,
        ];
        return view('disease', $data);
    }
}
