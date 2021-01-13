<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('see Laravel links on homepage');

$I->amOnPage('/');

$I->seeInTitle('Order Directory For Freelancers');
if(!$I->see('Login')) {
    $I->see("Dashboard");
    $I->see("Orders");
}
else
    $I->see('Dashboard');
/*$I->seeLink("Dashboard", "url('/dashboard')");
$I->seeLink("Orders", "url('/orders')");*/
