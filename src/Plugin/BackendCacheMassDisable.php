<?php

namespace Firegento\DevDashboard\Plugin;

use Magento\Backend\Controller\Adminhtml\Cache\MassDisable as Subject;

class BackendCacheMassDisable extends BackendCacheMassAbstract
{
    public function afterExecute(Subject $subject, \Magento\Backend\Model\View\Result\Redirect $resultRedirect)
    {
        if (false !== strpos($this->redirect->getRefererUrl(), 'devdashboard/index/index')) {
            /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
            return $resultRedirect->setPath('devdashboard/index/index');
        }
        return $resultRedirect;
    }
}