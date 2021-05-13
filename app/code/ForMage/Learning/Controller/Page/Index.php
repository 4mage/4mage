<?php

namespace ForMage\Learning\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use ForMage\Learning\Api\SizeInterface;
use ForMage\Learning\Api\ColorInterface;
use ForMage\Learning\Model\Product\Shoe;
use ForMage\Learning\Model\Product\Shirt;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $size;
    protected $color;
    protected $product;
    protected $shirt;

    public function __construct(
        Context $context,
        SizeInterface $size,
        ColorInterface $color,
        Shoe $product,
        Shirt $shirt
    ) {
        parent::__construct($context);
        $this->size = $size;
        $this->color = $color;
        $this->product = $product;
        $this->shirt = $shirt;
    }

    public function execute()
    {
        var_dump($this->product);
    }
}
