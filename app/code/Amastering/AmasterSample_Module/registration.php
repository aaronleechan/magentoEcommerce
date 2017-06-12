<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Amastering_AmasterSample_Module',
    __DIR__
);

/**
    Step 3 
    *Run php bin/magento setup:upgrade
    check the file inside app/etc/config.php for installation success or not
    
    Create controller xml in the following part
    app/code/inchoo/Helloworld/etc/frontend folder/routes.xml
    

*/
