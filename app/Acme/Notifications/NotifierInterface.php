<?php namespace Acme\Notifications;

interface NotifierInterface {

    /**
     * Notify lesson subscribers
     * @param $data
     *
     * @return mixed
     */
    public function lessonSubscribers($data);
}
