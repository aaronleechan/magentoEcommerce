<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 6/9/17
 * Time: 6:05 PM
 */

namespace Mastering\SampleModule\Model;

use Magento\Sales\Model\AbstractModel;

class Item extends AbstractModel
{
    protected function _construct()
    {
        $this-> _init(\Mastering\SampleModule\Model\ResourceModel\Item::class);
    }
}