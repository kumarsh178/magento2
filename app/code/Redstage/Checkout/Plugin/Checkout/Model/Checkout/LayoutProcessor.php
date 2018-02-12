<?php
namespace Redstage\Checkout\Plugin\Checkout\Model\Checkout;


class LayoutProcessor
{
    
    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array  $jsLayout
    ) {
        $jsLayout['components']['checkout']['children']['steps']['children']['check-login-step']
        ['children']['customerSignature']['children']['customer-signature-fieldset']['children']['security_number'] = [
            'component' => 'Magento_Ui/js/form/element/abstract',
            'config' => [
                'customScope' => 'customerSignature',
                'template' => 'ui/form/field',
                'elementTmpl' => 'ui/form/element/input',
                'options' => [],
                'id' => 'security_number'
            ],
            'dataScope' => 'customerSignature.security_number',
            'label' => 'Customer Signature',
            'provider' => 'checkoutProvider',
            'visible' => true,
            'validation' => [],
            'sortOrder' => 250,
            'id' => 'security_number'
        ];
        return $jsLayout;
    }
    
}