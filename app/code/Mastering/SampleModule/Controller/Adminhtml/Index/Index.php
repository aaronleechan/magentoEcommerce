<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 6/9/17
 * Time: 9:48 PM
 */

namespace Mastering\SampleModule\Controller\Adminhtml\Index;

use Magento\CatalogSearch\Block\Result;
use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        /** @var  $result */
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('Hello Admins!');
        return $result;
    }
}