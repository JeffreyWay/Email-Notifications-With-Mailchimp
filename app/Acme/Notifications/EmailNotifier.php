<?php namespace Acme\Notifications;

use Acme\Mail\Blasts\EmailBlastInterface;

class EmailNotifier implements NotifierInterface {

    /**
     * @var \Acme\Mail\Blasts\EmailBlastInterface
     */
    private $blast;

    /**
     * Constructor
     *
     * @param EmailBlastInterface $blast
     */
    public function __construct(EmailBlastInterface $blast)
    {
        $this->blast = $blast;
    }

    /**
     * Notify lesson subscribers
     *
     * @param $lesson
     *
     * @return mixed|void
     */
    public function lessonSubscribers($lesson)
    {
        // You probably shouldn't place this here.
        // Add it to Mailchimp class, or a config file.
        $lessonNotificationsListId = '53e56d2add';

        $this->blast->send('regular', [
            'list_id'    => $lessonNotificationsListId,
            'subject'    => 'New Laracasts Lesson Published!',
            'from_name'  => 'Laracasts',
            'from_email' => 'jeffrey@laracasts.com',
            'to_name'    => 'Laracasts Subscriber'
        ], [
            'html' => $lesson->body,
            'text' => strip_tags($lesson->body)
        ]);
    }
}
