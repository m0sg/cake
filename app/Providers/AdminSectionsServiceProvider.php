<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        \App\Articles::class => 'App\Http\Sections\Articles',
        \App\Tags::class => 'App\Http\Sections\Tags',
        \App\Products::class => 'App\Http\Sections\Products',
        \App\Categories::class => 'App\Http\Sections\Categories',
        \App\Pages::class => 'App\Http\Sections\Pages',



        //\App\User::class => 'App\Http\Sections\Users',
    ];

    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
