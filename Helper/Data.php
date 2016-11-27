<?php

namespace Smart\ChromeLogger\Helper;

/**
 * Class Data
 * @package Smart\ChromeLogger\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $_logger;

    /**
     * Data constructor.
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Smart\ChromeLogger\Block\Logger $logger
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Smart\ChromeLogger\Block\Logger $logger
    ) {
        parent::__construct($context);
        $this->logger = $logger;
    }

    /**
     * @param $info
     */
    public function log($info)
    {
        $this->logger->log($info);
    }

    /**
     * @param $info
     */
    public function warn($info)
    {
        $this->logger->warn($info);
    }
}