<?php

declare (strict_types = 1);

namespace Macademy\Jumpstart\Controller\Index;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;


class Index extends Action
{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $resultPage->setContents("Welcome to Sanyam's Module");
        return $resultPage;
    }
}
?>
