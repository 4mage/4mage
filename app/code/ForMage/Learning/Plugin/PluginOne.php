<?php

namespace ForMage\Learning\Plugin;

class PluginOne
{
//    public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
//    {
//        return "Plugin Before | ".$name;
//    }
//
//    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
//    {
//        return $result. " | Plugin After";
//    }

    public function aroundGetName(\Magento\Catalog\Model\Product $subject, callable $proceed)
    {
        echo " --- Before Proceed"."<br/>";
        $name = $proceed();
        echo $name."<br/>";
        echo " --- After Proceed"."<br/>";
        return $name;
    }
}
