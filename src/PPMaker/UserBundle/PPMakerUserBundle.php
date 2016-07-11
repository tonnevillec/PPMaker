<?php

namespace PPMaker\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PPMakerUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
