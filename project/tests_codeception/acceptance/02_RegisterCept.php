<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('register new user');

$I->amOnPage('/');

$I->seeLink('Register', '/register');
$I->click('Register');

$I->seeCurrentUrlEquals('/register');

$I->fillField('name', 'Jack Frost');
$I->fillField('email', 'jack.frost@gmail.com');
$I->fillField('password', 'secret');
$I->fillField('password_confirmation', 'secret');

$I->click('Register');

$I->see('Whoops! Something went wrong.');
$I->seeInField('name', 'Jack Frost');
$I->seeInField('email', 'jack.frost@gmail.com');
$I->fillField('password', 'longpassword');
$I->fillField('password_confirmation', 'longpassword');

$I->click('Register');

$I->seeCurrentUrlEquals('/dashboard');
$I->see('Jack Frost');
$I->seeLink('My Orders', '/myorders');
$I->seeLink('My Offers', '/myoffers');
$I->seeLink('Orders', '/orders');

$I->seeInDatabase('users', ['name' => 'Jack Frost', 'email' => 'jack.frost@gmail.com']);
