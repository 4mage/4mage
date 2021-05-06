<?php

namespace ForMage\Learning\Model;

use ForMage\Learning\Api\SizeInterface;

class SizeGreat implements SizeInterface
{

    public function getSize()
    {
        return "Great";
    }
}
