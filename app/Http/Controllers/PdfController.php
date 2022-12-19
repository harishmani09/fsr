<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Installation;
use Illuminate\Http\Request;
use App\Models\ServiceProvider;
use App\Models\CustomerFeedback;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Auth;
use App\Notifications\ReportCompleted;

class PdfController extends Controller
{
    public function __invoke(Request $request)
    {

        $services = ServiceProvider::first()->get();
        $products = Product::all();
        $customers = Customer::all();
        $sites = Site::all();
        $installations = Installation::all();
        $feedbacks = CustomerFeedback::all();


        $html = view(
            'reports.index',
            compact(['services', 'products', 'customers', 'sites', 'installations', 'feedbacks'])
        )->render();

        Browsershot::html($html)
            ->showBackground()
            ->margins(50, 10, 10, 10)
            ->save($reportPath = storage_path('app/' . rand(100, 999) . '.pdf'));

        Auth::user()->notify(new ReportCompleted($reportPath));
        return 'report mailed successfully';
    }
}
