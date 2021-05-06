<?php

namespace ForMage\Learning\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use ForMage\Learning\Api\SizeInterface;
use ForMage\Learning\Api\ColorInterface;
use ForMage\Learning\Model\Product\Shoe;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $size;
    protected $color;
    protected $product;

    public function __construct(
        Context $context,
        SizeInterface $size,
        ColorInterface $color,
        Shoe $product
    ) {
        parent::__construct($context);
        $this->size = $size;
        $this->color = $color;
        $this->product = $product;
    }

    public function execute()
    {
        echo $this->product->getShoe();
    }
}
