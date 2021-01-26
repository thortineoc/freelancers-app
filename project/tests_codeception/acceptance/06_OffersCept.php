<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('create offers and browse mine');

//Login as John and create order

$I->amOnPage('/orders');
$I->seeCurrentUrlEquals('/login');
$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');
$I->click('Login');
$I->seeCurrentUrlEquals('/orders');
$I->click('Create new...');
$I->fillField('title', 'DevOps');
$I->fillField('budget', 10);
$I->fillField('description', 'Needed: someone who can make photo editor with QTCreator.');
$I->fillField('deadline', 'Wed Mar 31 2021');
$I->click('Create');

//Logout and login as Max

$I->click('Logout');
$I->seeLink('Login', '/login');
$I->click('Login');
$I->seeCurrentUrlEquals('/login');
$I->fillField('email', 'max.doe@gmail.com');
$I->fillField('password', 'secret');
$I->click('Login');

//create offers

$I->amOnPage('/orders');
$I->seeLink('Apply');
$I->click('Apply');

$I->seeCurrentUrlMatches('~/orders/[0-9]+/offer/create~');

$I->click('Create');

$I->fillField('details', 'Details about offer');
$I->fillField('price', 10);
$I->fillField('deadline', 'Wed Mar 31 2021');
$I->click('Create');

$I->seeCurrentUrlMatches('~/orders/[0-9]+/offer/[0-9]+~');



$I->amOnPage('/myoffers');

$I->see('There are all of your job offers. When you finish working, please click on the "Finished" button to announce your employer that the job is done. ');
$I->see('Details about offer');
