<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('login with existing user');

$I->amOnPage('/');

$I->seeLink('Login', 'localhost:8888/login');

$I->click('Login');

$I->seeCurrentUrlEquals('/login');

$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');

$I->click('Login');

$I->seeCurrentUrlEquals('/dashboard');

$I->see('John Doe');


$I->seeLink('My Orders', 'lovalhost:8888/myorders');
$I->seeLink('My Offers', 'lovalhost:8888/myoffers');
$I->seeLink('Orders', 'lovalhost:8888/orders');
$I->seeLink('About Me', 'lovalhost:8888/aboutme');


