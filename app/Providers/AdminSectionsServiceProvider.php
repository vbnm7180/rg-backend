<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        \App\Models\User::class => 'App\Http\Admin\Sections\Users',
        \App\Models\Product::class => 'App\Http\Admin\Sections\Products',
        \App\Models\Category::class => 'App\Http\Admin\Sections\Categories',
        \App\Models\Order::class => 'App\Http\Admin\Sections\Orders',
    ];

    /**
     * Register sections.
     *
     * @param \SleepingOwl\Admin\Admin $admin
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
