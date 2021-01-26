<?php

use Codeception\Util\Locator;

$I = new AcceptanceTester($scenario);
$I->wantTo('test interactions between users');

//Login as John

$I->amOnPage('/');
$I->seeLink('Login', '/login');
$I->click('Login');
$I->seeCurrentUrlEquals('/login');
$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');
$I->click('Login');

//[John] create order

$I->click('Orders');
$I->click('Create new...');
$I->seeCurrentUrlEquals('/myorders/create');
$I->see('Creating a new order');
$I->fillField('title', 'DevOps');
$I->fillField('budget', '10');
$I->fillField('description', 'Needed: someone who can make photo editor with QTCreator.');
$I->fillField('deadline', '2021-07-07 00:00');
$I->click('Create');

//Logout and login as Max

$I->click('Logout');
$I->seeLink('Login', '/login');
$I->click('Login');
$I->seeCurrentUrlEquals('/login');
$I->fillField('email', 'max.doe@gmail.com');
$I->fillField('password', 'secret');
$I->click('Login');

//[Max] create offer for John's order

$I->click('Orders');
$I->click('Apply', []);
$I->seeCurrentUrlMatches('~/orders/[0-9]+/offer/create~');
$I->fillField('details', "I can't do it but I know someone who also can't");
$I->fillField('price', 1);
$I->fillField('deadline', 'Wed Mar 31 2021');
$I->click('Create');
$I->seeCurrentUrlMatches('~/orders/[0-9]+/offer/[0-9]+~');

//Logout and login as John

$I->click('Logout');
$I->seeLink('Login', '/login');
$I->click('Login');
$I->seeCurrentUrlEquals('/login');
$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');
$I->click('Login');

//[John] accept Max's offer

$I->click('My Orders');
$I->see('DevOps');
$I->click('See offers...');
$I->seeCurrentUrlMatches('~/myorders/[0-9]+/offers~');
//$I->checkOption(['id' => '1']);               //Unreachable field "1".
//$I->click(['id' => '1']);                     //seems to click, but apparently doesn't
//$I->checkOption('#1');                        //Unreachable field "1".
$I->click('#1');                              //seems to click, but apparently doesn't
//$I->checkOption('input[type="checkbox"]');    //Unreachable field "1".    <-but i found it!
//$I->seeCheckboxIsChecked('*[@id="1"]');

$I->haveInDatabase('accepted', [
    'priority' => 1,
    'offer_id' => 1
]);

$I->haveInDatabase('selected', [
    'finished' => false,
    'rejected' => false,
    'accepted_id' => 1
]);

//$I->see('priority 1');

$I->click('Submit');

//Logout and login as Max

$I->amOnPage('/dashboard');
$I->click('Logout');
$I->seeLink('Login', '/login');
$I->click('Login');
$I->seeCurrentUrlEquals('/login');
$I->fillField('email', 'max.doe@gmail.com');
$I->fillField('password', 'secret');
$I->click('Login');

//[Max] accept and finish work

$I->amOnPage('/myoffers');
$I->click('Finished');

//Logout and login as John

$I->click('Logout');
$I->seeLink('Login', '/login');
$I->click('Login');
$I->seeCurrentUrlEquals('/login');
$I->fillField('email', 'john.doe@gmail.com');
$I->fillField('password', 'secret');
$I->click('Login');

//[John] rate Max

$I->see('User Max Doe has just finished working on DevOps');
$I->selectOption('quality_rate', '4');
$I->selectOption('time_rate', '4');
$I->click('Submit');

$I->seeInDatabase('users', [
    'name' => 'Max Doe',
    'number_of_rates'   =>  1
]);
