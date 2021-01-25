<?php
$I = new AcceptanceTester($scenario);
$I-> amOnPage('/dashboard');
$I->seeCurrentUrlEquals('/login');

$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');
$I->click('Login');
$I->seeCurrentUrlEquals('/dashboard');

$I->seeLink('My Orders', '/myorders');
$I->seeLink('My Offers', '/myoffers');
$I->seeLink('Orders', '/orders');
$I->seeLink('Home', '');
$I->seeLink('Dashboard', '/dashboard');

$I->see('John Doe');
