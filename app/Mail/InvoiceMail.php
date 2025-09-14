<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use PDF;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $invoice;

    public $student;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($invoice, $student)
    {
        $this->invoice = $invoice;
        $this->student = $student;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Your Invoice '.$this->invoice->invoice_id,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'email.invoice',
            with: ['invoice' => $this->invoice, 'student' => $this->student]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {

        // Generate the PDF
        $pdf = PDF::loadView('student.invoice.invoice', ['invoice' => $this->invoice, 'student' => $this->student]);
        $pdfContent = $pdf->output();

        // Attach the PDF
        return [
            Attachment::fromData(fn () => $pdfContent, $this->invoice->invoice_id.'_invoice.pdf')
                ->withMime('application/pdf'),
        ];
    }
}
