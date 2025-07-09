<?php

require_once 'Water.php';
require_once 'Alcohol.php';
require_once 'Sugary.php';
require_once 'Invoice.php';

$drinks = [
    new Water('Watter', 10, 1),
    new Alcohol('Beer', 20, 2, 2),
    new Sugary('Wine', 30, 3, 1),
];

$invoice = new Invoice($drinks);
echo $invoice->calculateTotal();