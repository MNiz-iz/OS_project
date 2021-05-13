<?php
    error_reporting (E_ALL ^ E_NOTICE);

    //require_once dirname(__FILE__).'/vendor/autoload.php';

    require_once 'omise-php/omise-php-master/lib/Omise.php';

    define('OMISE_PUBLIC_KEY', 'pkey_test_5nrcrcdovncjon6xew4');
    define('OMISE_SECRET_KEY', 'skey_test_5nrcrcdowh6c503y7o5');
    define('OMISE_API_VERSION', '2019-05-29');

    $data=OmiseCharge::create(array(
        'amount' =>12345,
        'currency' =>'thb',
        'card' => $_POST['omiseToken'],
    ));

    if ($data['status'] == 'successful'){
        require("success.html");
    } else {
        echo 'Failed';
    }

?>