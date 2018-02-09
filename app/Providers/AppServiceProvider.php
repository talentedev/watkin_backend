<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use App\Task;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        Schema::defaultStringLength(191);        

        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {

            // Sidebar menu items
            $upcoming_tasks = [
                'text' => 'Upcoming Tasks',
                'url' => 'upcoming',
                'icon' => 'line-chart',
                'label'       => $this->getBadgeNumber('upcoming'),
                'label_color' => 'success'
            ];

            $completed_tasks = [
                'text' => 'Completed Tasks',
                'url'  => 'completed',
                'icon' => 'list-ul',
                'label'       => 6154,
                'label_color' => 'success'
            ];

            $assigned_tasks = [
                'text' => 'Assigned Tasks',
                'url'  => 'assigned',
                'icon' => 'list-ul',
                'label'       => 6154,
                'label_color' => 'success'
            ];

            $messages = [
                'text' => 'Messages',
                'url'  => 'messages',
                'icon' => 'list-ul',
                'label'       => 6154,
                'label_color' => 'success'
            ];

            $notifications = [
                'text' => 'Notifications',
                'url'  => 'notifications',
                'icon' => 'list-ul',
                'label'       => 6154,
                'label_color' => 'success'
            ];

            $contact_us = [
                'text' => 'Contact Us',
                'url'  => 'contactus',
                'icon' => 'list-ul',
                'label'       => 6154,
                'label_color' => 'success'
            ];

            // add menu items
            $event->menu->add(
                $upcoming_tasks,
                $completed_tasks,
                $assigned_tasks,
                $messages,
                $notifications,
                $contact_us
            );
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the number for sidebar badge.
     *
     * @return Integer
     */
    protected function getBadgeNumber($menu_name)
    {
        switch ($menu_name) {
            case 'upcoming':
                return Task::count();
                break;
            
            default:
                return '';
                break;
        }
    }
}