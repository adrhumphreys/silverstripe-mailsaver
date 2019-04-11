<?php

namespace AdrHumphreys\MailSaver\Model;

use SilverStripe\ORM\DataObject;

/**
 * Class Email
 * @package AdrHumphreys\MailSaver\Models
 * @property string From
 * @property string To
 * @property string Subject
 * @property string Body
 * @property string CC
 * @property string BCC
 * @property string ReturnPath
 * @property string PlainBody
 */
class Email extends DataObject
{
    /**
     * @var array|string[]
     */
    private static $db = [
        'From' => 'Varchar(256)',
        'To' => 'Text',
        'Subject' => 'Text',
        'Body' => 'Text',
        'CC' => 'Text',
        'BCC' => 'Text',
        'ReturnPath' => 'Text',
        'PlainBody' => 'Text'
    ];

    private static $summary_fields = [
        'From',
        'To',
        'Subject',
        'Created'
    ];

    /**
     * @var string
     */
    private static $table_name = 'MailSaver_Email';

    /**
     * @var string
     */
    private static $singular_name = 'Email';

    /**
     * @var string
     */
    private static $plural_name = 'Emails';

    /**
     * @var string
     */
    private static $menu_icon_class = 'font-icon-box';
}
