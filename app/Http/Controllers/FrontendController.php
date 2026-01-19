<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    public function CompanyProfile(){
        return view("pages.company-profile");
    }
    public function HistoryAndMilestone(){
        return view("pages.history-&-milestone");
    }
    public function AssemblyAndAutomation(){
        return view("pages.assembly-&-automation");
    }
    public function MachineVision(){
        return view("pages.machine-vision-&-laser-inspection");
    }
    public function Reliability(){
        return view("pages.reliability-testing-automation");
    }
    public function RoboticAutomation(){
        return view("pages.robotic-automation");    
    }
    public function Contact(){
        return view("pages.contact");
    }

    public function ProductDetails(){
        return view("pages.product-details");
    }
    public function News(){
        return view("pages.news");
    }
    public function ProductManagement(){
        return view("pages.project-management");
    }
    public function Maintenance(){
        return view("pages.maintenance");
    }
    public function Factory(){
        return view("pages.factory-relocation");
    }
    public function MachineryMove(){
        return view("pages.machinery-move");
    }
    public function VideoGallery(){
        return view("pages.video-gallery");
    }
    public function NewsDetails(){
        return view("pages.news-detail");
    }
}
