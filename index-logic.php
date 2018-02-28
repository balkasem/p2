<?php

require 'Form.php';


use DWA\Form;

$form = new Form($_POST);

$haveResults = false;

# Get data from the form
$calResults = 0;
$waysNumber = $form->get('waysNumber');
$tabValue = $form->get('tabValue');
$serviceQuality= $form->get('serviceQuality');
$roundUp = $form->has('RoundUp');

if ($form->isSubmitted()) {
    $errors = $form->validate(
        [
            'waysNumber' => 'required|numeric',
            'tabValue' => 'required|numeric',
        ]
    );

    if (!$form->hasErrors) {
        $calResults = $form->getResult( $waysNumber, $tabValue, $serviceQuality, $roundUp );

            $haveResults = true;

    }
}

