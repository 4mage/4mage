<?php

namespace ForMage\Learning\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use ForMage\Learning\Api\SizeInterface;
use ForMage\Learning\Api\ColorInterface;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $size;
    protected $color;

    public function __construct(
        Context $context,
        SizeInterface $size,
        ColorInterface $color
    ) {
        parent::__construct($context);
        $this->size = $size;
        $this->color = $color;
    }

    public function execute()
    {
        echo "My shirt is {$this->color->getColor()} and its size is {$this->size->getSize()}";
    }
}
