<?php

namespace App\Http\Controllers;

use App\Models\Call;
use App\Models\Site;
use App\Models\Product;
use App\Models\SignOff;
use App\Models\Customer;
use App\Models\Engineer;
use App\Models\PartFailed;
use App\Models\Installation;
use Illuminate\Http\Request;
use App\Models\PartReplacement;
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
        $calls = Call::all();
        $engineers = Engineer::all();
        $partsFailed = PartFailed::all();
        $partsReplacement = PartReplacement::all();
        $signOffs = SignOff::all();


        $html = view(
            'reports.index',
            compact([
                'services', 'products', 'customers', 'sites', 'installations', 'feedbacks',
                'calls', 'engineers', 'partsFailed', 'partsReplacement', 'signOffs'
            ])
        )->render();

        Browsershot::html($html)
            ->showBackground()
            ->margins(50, 10, 10, 10)
            ->save($reportPath = storage_path('app/' . uniqid() . '.pdf'));

        Auth::user()->notify(new ReportCompleted($reportPath));
        return 'report mailed successfully';
    }
}
