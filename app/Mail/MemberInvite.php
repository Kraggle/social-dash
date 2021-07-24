<?php

namespace App\Mail;

use App\Models\Team;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MemberInvite extends Mailable {
    use Queueable, SerializesModels;

    /**
     * The team instance.
     * 
     * @var \App\Models\Team
     */
    public $team;

    /**
     * The token.
     * 
     * @var string
     */
    public $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $token, Team $team) {
        $this->token = $token;
        $this->team = $team;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->from('noreply@social-shadow.com')
            ->markdown('emails.invite.member');
    }
}
