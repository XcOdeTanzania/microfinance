<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * @return blacklist view in settng route
     */
    function blackListPage()
    {
        return view('pages.setting.blacklist');
    }

    /**
     * @return productGoup view in settings
     */
    function productGroupPage()
    {
        return view('pages.setting.productgroup');
    }

    /**
     * @return financialActivity view in Settings
     */
    function financialActivityPage() {
        return view('pages.setting.financialactivity');
    }

    /**
     * @return currenciesPage view in settings
     */
    function currenciesPage() {
        return view('pages.setting.currencies');
    }
}
