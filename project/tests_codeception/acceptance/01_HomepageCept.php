<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('see DF homepage');

$I->amOnPage('/');

$I->seeInTitle('Order Directory For Freelancers');

$I->seeLink('Login', '/login');
$I->seeLink('Register', '/register');

$I = new AcceptanceTester($scenario);
$I->amOnPage('/');
$I->seeLink('Login', '/login');
$I->click('Login');
$I->seeCurrentUrlEquals('/login');
$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');


/*$I->wantTo('see DF homepage');
$I->amOnPage('/');
$I->seeLink('Login', '/login');
$I->seeLink('Register', '/register');*/
