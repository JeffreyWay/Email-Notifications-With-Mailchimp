<?php namespace Acme\Mail\Blasts;

use Mailchimp;

class MailchimpBlast implements EmailBlastInterface {

    /**
     * @var Mailchimp
     */
    private $mailchimp;

    /**
     * Constructor
     *
     * @param Mailchimp $mailchimp
     */
    public function __construct(Mailchimp $mailchimp)
    {
        $this->mailchimp = $mailchimp;
    }

    /**
     * Send email blast with Mailchimp
     *
     * @param $type
     * @param $options
     * @param $content
     *
     * @return mixed|void
     */
    public function send($type, $options, $content)
    {
        $campaign = $this->mailchimp->campaigns->create($type, $options, $content);

        $this->mailchimp->campaigns->send($campaign['id']);
    }
}