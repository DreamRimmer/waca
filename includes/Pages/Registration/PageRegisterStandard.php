<?php
/******************************************************************************
 * Wikipedia Account Creation Assistance tool                                 *
 * ACC Development Team. Please see team.json for a list of contributors.     *
 *                                                                            *
 * This is free and unencumbered software released into the public domain.    *
 * Please see LICENSE.md for the full licencing statement.                    *
 ******************************************************************************/

namespace Waca\Pages\Registration;

class PageRegisterStandard extends PageRegisterBase
{
    /**
     * @return string
     */
    protected function getRegistrationTemplate()
    {
        return "registration/register.tpl";
    }

    /**
     * @return string
     */
    protected function getDefaultRole()
    {
        return 'user';
    }
}
