<?php

namespace AdrHumphreys\MailSaver\Control;

use SilverStripe\Control\Email\Email;
use AdrHumphreys\MailSaver\Model\Email as EmailModel;
use SilverStripe\ORM\ValidationException;

class EmailControl extends Email
{
    /**
     * Send the message to the recipients and record it
     *
     * @return bool true if successful or array of failed recipients
     * @throws ValidationException
     */
    public function send()
    {
        // We actually want to send it asap
        $sendResult = parent::send();

        $email = new EmailModel();
        $email->From = implode(', ', array_keys($this->getFrom()));
        $email->To = implode(', ', array_keys($this->getTo()));
        $email->Subject = $this->getSubject();
        $email->Body = $this->getBody();
        $email->CC = implode(', ', array_keys($this->getCC()));
        $email->BCC = implode(', ', array_keys($this->getBCC()));
        $email->ReturnPath = $this->getReturnPath();
        $email->PlainBody = $this->findPlainPart()->getBody() ?? null;
        $email->write();

        return $sendResult;
    }
}
