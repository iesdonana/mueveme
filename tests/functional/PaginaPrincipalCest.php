<?php

class PaginaPrincipalCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnPage('/');
    }

    public function felicitaAlUsuario(FunctionalTester $I)
    {
        $I->see('Congratulations!', 'h1');
    }

    public function elAnyoEsCorrecto(FunctionalTester $I)
    {
        $I->see('My Company ' . date('Y'));
    }
}
