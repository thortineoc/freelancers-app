<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('login with existing user');

$I->amOnPage('/');

$I->seeLink('Login', '/login');

$I->click('Login');

$I->seeCurrentUrlEquals('/login');

$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');

$I->click('Login');

$I->seeCurrentUrlEquals('/dashboard');

$I->see('John Doe');

$I->seeLink('My Orders', '/myorders');
$I->seeLink('My Offers', '/myoffers');
$I->seeLink('Orders', '/orders');
$I->seeLink('Home', '');
