<?php
require_once 'userGenerator.php';
use Data\UserGenerator;

if ($argc) {

    switch ($argv[1]) {
        case 'generatePassword':
            print (UserGenerator::generatePassword($argv[2]));
            break;

        case 'verifyPassword':
            if (UserGenerator::verifyPassword($argv[2], $argv[3])) {
                print('The hash match to the password.');
            } else {
                print('The hash not match to the password.');
            }
            break;
        
        default:
            print('Invalid command.');
            break;
    }

}
