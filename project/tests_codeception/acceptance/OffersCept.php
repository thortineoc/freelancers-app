<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('create offers and browse mine');

$I->amOnPage('/orders');

$I->seeCurrentUrlEquals('/login');

$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');
$I->click('Login');

$I->seeCurrentUrlEquals('/orders');

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
$I->click('Finished');

$I->seeCurrentUrlMatches('~/orders/[0-9]+/offer/[0-9]+~');
