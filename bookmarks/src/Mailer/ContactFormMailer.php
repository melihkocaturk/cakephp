<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * ContactForm mailer.
 */
class ContactFormMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'ContactForm';

    public function submission(array $data)
    {
        $this->From('info@bookmarks.com', 'Bookmarks')
             ->to('me@domain.com', 'Me')
             ->template('default', 'default')
             ->set(['data' => $data]);
    }
}
