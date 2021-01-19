<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('see DF homepage');

$I->amOnPage('/');

$I->seeInTitle('Order Directory For Freelancers');

$I->seeLink('Login', '/login');
$I->seeLink('Register', '/register');
