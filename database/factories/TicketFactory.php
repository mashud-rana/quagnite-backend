<?php

namespace Database\Factories;

use App\Models\FaqTopic;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    protected $model = Ticket::class;
    private $serialNumber = 0;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $year = now()->year; // Get the current year
        $month = now()->format('m'); // Get the current month in two-digit format

        $serialNumber = str_pad($this->serialNumber, 4, '0', STR_PAD_LEFT);
        $ticketId = "{$year}{$month}-MC{$serialNumber}";

        // Increment the serial number for the next ticket
        $this->serialNumber++;

        $user = User::inRandomOrder()->first();
        $category = FaqTopic::inRandomOrder()->first();

        return [
            'ticket_id' => $ticketId,
            'user_id' => $user->id,
            'category_id' => $category->id,
            'subject' => $this->faker->sentence,
            'slug' => $this->faker->unique()->slug,
            'message' => $this->faker->paragraph,
            'status' => $this->faker->randomElement([OPEN, ASSIGNED, REJECT, INPROGRESS, CLOSED, ANSWERED])
        ];
    }
}
