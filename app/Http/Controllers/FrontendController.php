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
}
