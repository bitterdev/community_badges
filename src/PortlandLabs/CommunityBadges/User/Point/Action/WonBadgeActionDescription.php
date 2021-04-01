<?php
namespace PortlandLabs\CommunityBadges\User\Point\Action;

use Group;

/**
 * Class WonBadgeActionDescription
 * @deprecated
 * @package PortlandLabs\CommunityBadges\User\Point\Action
 */
class WonBadgeActionDescription extends ActionDescription
{
    public function setBadgeGroupID($gID)
    {
        $this->gID = $gID;
    }

    public function getUserPointActionDescription()
    {
        $group = Group::getByID($this->gID);

        return t('Won the <strong>%s</strong> Badge', $group->getGroupDisplayName(false));
    }
}
