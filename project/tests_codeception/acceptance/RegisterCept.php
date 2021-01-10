<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('register new user');

$I->amOnPage('/');

$I->seeLink('Register', 'localhost:8888/register');
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
$I->seeLink('My Orders', 'lovalhost:8888/myorders');
$I->seeLink('My Offers', 'lovalhost:8888/myoffers');
$I->seeLink('Orders', 'lovalhost:8888/orders');
$I->seeLink('About Me', 'lovalhost:8888/aboutme');

$I->seeInDatabase('users', ['name' => 'Jack Frost', 'email' => 'jack.frost@gmail.com']);
