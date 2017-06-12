<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 6/10/17
 * Time: 6:30 AM
 */

namespace Mastering\SampleModule\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Mastering\SampleModule\Model\ItemFactory;
use Magento\Framework\Console\Cli;

class AddItem extends Command
{
    const INPUT_KEY_NAME = 'name';
    const INPUT_KEY_DESCRIPTION = 'description';

    private $itemFactory;

    public function _construct(ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
        parent:: _construct();
    }
}