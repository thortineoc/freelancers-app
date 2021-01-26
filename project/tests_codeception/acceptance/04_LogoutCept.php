<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('logout and be on homepage');

$I->amOnPage('/');

$I->click('Login');
$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');
$I->click('Login');

$I->see('John Doe');

$I->seeLink('Logout', '/logout');
$I->click('Logout');

$I->seeCurrentUrlEquals('/');

$I->dontSeeLink('Dashboard', '/dashboard');
$I->seeLink('Login', '/login');
$I->seeLink('Register', 'register');
