<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReminderMail;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
        // 予約当日の日付を取得
        $today = now()->format('Y-m-d');

        // 予約当日の予約情報を取得するクエリ
        $reservations = \App\Models\Reservation::where('rsv_date', $today)->get();

        foreach ($reservations as $reservation) {
            // ユーザー情報を取得
            $user = $reservation->user; // 'user' はリレーションのメソッド名に置き換える

            // リマインドメールを送信
            \Illuminate\Support\Facades\Mail::to($user->email)->send(new \App\Mail\ReminderMail($reservation));
        }
    })->dailyAt('08:00');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
