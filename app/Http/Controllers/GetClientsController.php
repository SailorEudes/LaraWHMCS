<?php

namespace App\Http\Controllers;

use DarthSoup\Whmcs\WhmcsManager;

class GetClientsController extends Controller
{
    private WhmcsManager $whmcsManager;

    public function __construct(WhmcsManager $whmcsManager)
    {
        $this->whmcsManager = $whmcsManager;
    }

    public function index()
    {
        $result = $this->whmcsManager->client()->getClients();
        dd($result);
    }
}
