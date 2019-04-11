<?php

namespace AdrHumphreys\MailSaver\Admin;

use AdrHumphreys\MailSaver\Model\Email;
use SilverStripe\Admin\ModelAdmin;

/**
 * Class EmailAdmin
 * @package AdrHumphreys\MailSaver\Admins
 */
class EmailAdmin extends ModelAdmin
{
    /**
     * @var array
     */
    private static $managed_models = [Email::class];

    /**
     * @var string
     */
    private static $url_segment = 'emails';

    /**
     * @var string
     */
    private static $menu_title = 'Emails';
}
