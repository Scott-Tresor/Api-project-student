<?php

namespace App\Http\Controllers\Form;

use Kris\LaravelFormBuilder\Form;

class StudentResultForm extends  Form
{
    public function  buildForm()
    {
        $this
            ->add('username', 'text', [
                'label' => 'Nom et Post-Nom'
            ])
            ->add('name', 'text', [
                'label' => 'Prénom'
            ])
            ->add('matricule', 'text', [
                'label' => 'Numero matricule'
            ])
            ->add('department', 'text', [
                'label' => 'Departement choisie'
            ])
        ;
    }
}