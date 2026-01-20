<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class FrontendController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('pages.index', compact('categories'));
    }

    public function CompanyProfile()
    {
        return view("pages.company-profile");
    }
    public function HistoryAndMilestone()
    {
        return view("pages.history-&-milestone");
    }
    public function AssemblyAndAutomation()
    {
        $products = Product::orderBy("id", "desc")->where('category_id', 3)->get();
        return view("pages.assembly-&-automation", compact('products'));
    }
    public function MachineVision()
    {
        $products = Product::orderBy("id", "desc")->where('category_id', 2)->get();
        return view("pages.machine-vision-&-laser-inspection", compact('products'));
    }
    public function Reliability()
    {
        $products = Product::orderBy("id", "desc")->where('category_id', 1)->get();
        return view("pages.reliability-testing-automation", compact('products'));
    }
    public function RoboticAutomation()
    {
        $products = Product::orderBy("id", "desc")->where('category_id', 4)->get();
        return view("pages.robotic-automation", compact('products'));
    }
    public function showCategory($slug = null)
    {
        // Map slug to category IDs
        $category = [
            'reliability-testing-automation' => 1,
            'machine-vision-laser-inspection' => 2,
            'assembly-automation' => 3,
            'robotic-automation' => 4,
        ];

        // Map slug to views (always define this)
        $viewMap = [
            'reliability-testing-automation' => 'pages.reliability-testing-automation',
            'machine-vision-laser-inspection' => 'pages.machine-vision-&-laser-inspection',
            'assembly-automation' => 'pages.assembly-&-automation',
            'robotic-automation' => 'pages.robotic-automation',
        ];

        if ($slug === null) {
            // No slug sent: load default page with all products
            $products = Product::orderBy('id', 'desc')->get();
            $slug = 'reliability-testing-automation'; // default page
        } else {
            // Slug is sent: validate and load specific category
            if (!isset($category[$slug])) {
                abort(404);
            }
            $categoryId = $category[$slug];
            $products = Product::where('category_id', $categoryId)->orderBy('id', 'desc')->get();
        }

        return view($viewMap[$slug], compact('products'));
    }
    public function Contact()
    {
        $products = Product::orderBy('id','desc')->where('status',1)->get();
        return view("pages.contact",compact("products"));
    }

    public function ProductDetails($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.product-details', compact('product'));
    }
    public function News()
    {
        return view("pages.news");
    }
    public function ProductManagement()
    {
        return view("pages.project-management");
    }
    public function Maintenance()
    {
        return view("pages.maintenance");
    }
    public function Factory()
    {
        return view("pages.factory-relocation");
    }
    public function MachineryMove()
    {
        return view("pages.machinery-move");
    }
    public function VideoGallery()
    {
        return view("pages.video-gallery");
    }
    public function NewsDetails()
    {
        return view("pages.news-detail");
    }

    public function send(Request $request)
    {
        // 1. Validate the incoming request
        $request->validate([
            'usrname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'nullable|string|max:20',
            'product' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // 2. Prepare email data
        $data = [
            'name' => $request->usrname,
            'email' => $request->email,
            'phone' => $request->phone_number ?? 'N/A',
            'product' => $request->product ?? 'N/A',
            'messageBody' => $request->message,
        ];

        // 3. Send email using Blade template
        Mail::send('pages.email', $data, function ($message) use ($data) {
            $message->to('anandhwebbitech@gmail.com')
                ->subject('New Enquiry Submission')
                ->from($data['email'], $data['name']); // optional: sender's email
        });

        // 4. Return JSON response
        return response()->json(['success' => 'Message sent successfully!']);
    }
}
