<?php
class MageProfis_Usps_Block_Config_Usps 
    extends Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract
{
    public function _prepareToRender()
    {
        $this->addColumn('Usp', array(
            'label' => Mage::helper('usps')->__('Usp'),
            'style' => 'width:97%',
        ));
        $this->_addAfter = false;
        $this->_addButtonLabel = Mage::helper('usps')->__('Add');
    }
}