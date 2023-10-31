<?php

namespace Winnie\BulkDeleteOperation;

use Illuminate\Support\ServiceProvider;

class AddonServiceProvider extends ServiceProvider
{
    use AutomaticServiceProvider;

    protected $vendorName = 'winnie';
    protected $packageName = 'bulk-delete-operation';
    protected $commands = [];
}
