<?php

namespace Runalyze\Profile\Sport\Zones;

use Runalyze\Profile\Sport\Zones\ZoneInterface;

/**
 * @codeCoverageIgnore
 */
class Pace implements ZoneInterface
{

    public function getInternalName() {
        return 'pace';
    }

    public function getName()
    {
        return __('Pace');
    }
    //TODO Depends on sport type, so stored values should be in s
    public function getUnit()
    {
        return 's';
    }

    public function getDefaultSettings()
    {
        return [];
    }

    /**
     * @return array
     */
    public function getFormType() {
        return ;
    }

}