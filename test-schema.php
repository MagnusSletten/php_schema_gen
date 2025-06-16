<?php
// test-schema.php


use Spatie\SchemaOrg\Schema;
use Symfony\Component\Yaml\Yaml;
require __DIR__ . '/vendor/autoload.php';

$data = Yaml::parseFile(__DIR__ . '/testyaml.yaml');

$comp = $data['COMPOSITION']; 

$lipid = Schema::ChemicalSubstance()
    ->identifier($data['COMPOSITION']);

echo $lipid->toScript();
