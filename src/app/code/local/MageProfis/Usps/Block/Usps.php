<?php

class MageProfis_Usps_Block_Usps extends Mage_Core_Block_Template
{

    /**
     * get array with usps from store config
     * @return boolean || array
     */
    protected function getUsps()
    {
        $setting = Mage::getStoreConfig('usps/general/usps');
        $usps = array();
        if ($setting)
        {
            $setting = unserialize($setting);

            if (is_array($setting))
            {
                foreach ($setting as $usp)
                {
                    $usps[] = current($usp);
                }
                return $usps;
            }
            return false;
        }
    }

}
