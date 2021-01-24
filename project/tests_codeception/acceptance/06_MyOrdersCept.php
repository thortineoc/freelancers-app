<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('browse and create orders');

$I->amOnPage('/myorders');

$I->seeCurrentUrlEquals('/login');

$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');
$I->click('Login');

$I->seeCurrentUrlEquals('/myorders');
