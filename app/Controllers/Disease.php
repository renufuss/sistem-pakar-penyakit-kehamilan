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

    public function checkDiseases($symptomUser = [])
    {
        $diseases = $this->DiseaseModel->findAll();
        // Default Result
        $result = $this->DiseaseModel->where('key', 'NULL')->first();
        foreach ($diseases as $disease) {
            // symptom disease
            $symptomDisease = [];
            $relations = $this->DiseaseModel->showAllData($disease->id);
            foreach ($relations as $relation) {
                array_push($symptomDisease, $relation->symptomKey);
            }
            if ($symptomUser == $symptomDisease) {
                $result = $disease;
                return $result;
            }
        }
        return $result;
    }

    public function getSymptomUser($inputs = [])
    {
        $symptomUser = [];
        foreach ($inputs as $key => $value) {
            $isSymptom = ($key != 'name' && $value != 'no' && $key != 'age');
            if ($isSymptom) {
                array_push($symptomUser, $key);
            }
        }
        return $symptomUser;
    }

    public function result()
    {
        // Symptom input user
        $inputs = $this->request->getPost();
        $symptomUser = $this->getSymptomUser($inputs);

        //Check Diseases
        $result = $this->checkDiseases($symptomUser);

        $data = [
            'name' => $this->request->getPost('name'),
            'age' => $this->request->getPost('age'),
            'disease' => $result,
        ];

        // Show View
        return view('disease', $data);
    }
}
