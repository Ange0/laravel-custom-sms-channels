<?php

namespace Gabeta\CustomSmsChannels\Http\Controllers;

use Illuminate\Routing\Controller;

class PreviewDashboardController extends Controller
{
    public function __invoke()
    {
        $messages = app('providers.sms_log')->read();

        return view('customsms::dashboard', compact('messages'));
    }
}
