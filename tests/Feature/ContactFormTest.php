<?php

namespace Tests\Feature;

use App\Mail\ContactEnquiry;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    public function test_contact_page_uses_the_laravel_mail_flow(): void
    {
        $this->get('/contact.html')
            ->assertOk()
            ->assertSee(route('contact.store'), false)
            ->assertSee('data-laravel-contact', false);
    }

    public function test_valid_contact_enquiry_is_sent_to_configured_recipient(): void
    {
        Mail::fake();
        config(['mail.contact_to' => 'admin@eirecon.com']);

        $this->from('/contact.html')->post(route('contact.store'), [
            'name' => 'Aisha Rahman',
            'email' => 'aisha@example.com',
            'phone' => '+966 50 123 4567',
            'comments' => 'We would like to discuss an EPC project opportunity.',
        ])->assertRedirect('/contact.html')
            ->assertSessionHas('contact_success');

        Mail::assertSent(ContactEnquiry::class, function (ContactEnquiry $mail): bool {
            return $mail->hasTo('admin@eirecon.com')
                && $mail->hasReplyTo('aisha@example.com');
        });
    }

    public function test_invalid_contact_enquiry_is_rejected_without_sending_mail(): void
    {
        Mail::fake();

        $this->from('/contact.html')->post(route('contact.store'), [
            'name' => '',
            'email' => 'not-an-email',
            'phone' => 'invalid phone',
            'comments' => 'short',
        ])->assertRedirect('/contact.html')
            ->assertSessionHasErrors(['name', 'email', 'phone', 'comments']);

        Mail::assertNothingSent();
    }

    public function test_contact_email_renders_the_branded_form_summary(): void
    {
        $mail = new ContactEnquiry([
            'name' => 'Aisha Rahman',
            'email' => 'aisha@example.com',
            'phone' => '+966 50 123 4567',
            'comments' => 'We would like to discuss an EPC project opportunity.',
        ]);

        $html = $mail->render();

        $this->assertStringContainsString('Eirecon Energy Company', $html);
        $this->assertStringContainsString('Website contact form', $html);
        $this->assertStringContainsString('Full name', $html);
        $this->assertStringContainsString('Project details', $html);
        $this->assertStringContainsString('Reply to Aisha Rahman', $html);
    }
}
