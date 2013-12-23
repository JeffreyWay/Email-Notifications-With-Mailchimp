<?php namespace Acme\Providers;

use Illuminate\Support\ServiceProvider;
use Acme\Mail\Blasts\MailchimpBlast;
use Mailchimp;

class EmailBlastServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Acme\Mail\Blasts\EmailBlastInterface', function()
        {
            $mc = new Mailchimp('YOUR MAILCHIMP API KEY');

            return new MailchimpBlast($mc);
        });
    }
}
