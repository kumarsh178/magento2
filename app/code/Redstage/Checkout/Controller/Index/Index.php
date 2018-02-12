<?php
namespace Redstage\Checkout\Controller\Index;
 
 
class Index extends \Magento\Framework\App\Action\Action {

    protected $resultPageFactory;
    protected $_quote;

    /**
     * Constructor
     * 
     * @param \Magento\Framework\App\Action\Context  $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Checkout\Model\Cart $quote
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->_quote=$quote;
        parent::__construct($context);
    }

    public function execute()
    {
        echo $this->_quote->getQuote()->getId();
        echo 'helooo'; exit;
    }
}
