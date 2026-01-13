@extends('layouts.app')
@section('content')

    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <h5 class="banner-title">History / Milestones</h5>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-light">Home</a></li>
                        <li class="breadcrumb-item active text-light" aria-current="page">About us</li>
                        <li class="breadcrumb-item active text-light" aria-current="page"> History / Milestones</li>

                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="timeline-section mb-5">
        <div class="container">
            <h3 class="text-center pb-0 pb-md-5 fs-1 fw-bold text-danger">Milestones</h3>
            <div class="timeline">

                <div class="timeline-item left">
                    <div class="timeline-card">
                        <span class="year"><img src="./assets/images/new-images/milestone-img.png" alt="" class="milestone-img me-3"> 2016</span>
                        <p>Company formed and started with a Facility of 750 Sq. Feet Space with 2 Employees</p>
                    </div>
                </div>

                <div class="timeline-item right">
                    <div class="timeline-card">
                        <span class="year">2017 <img src="./assets/images/new-images/milestone-img.png" alt="" class="milestone-img ms-3"></span>
                        <p>Company developed a 3 Axis Welding Automation.</p>
                    </div>
                </div>

                <div class="timeline-item left">
                    <div class="timeline-card">
                        <span class="year"><img src="./assets/images/new-images/milestone-img.png" alt="" class="milestone-img me-3">2018</span>
                        <p>Company developed a First Laser Inspection system for inspecting Automotive Component.</p>
                    </div>
                </div>

                <div class="timeline-item right">
                    <div class="timeline-card">
                        <span class="year">2019<img src="./assets/images/new-images/milestone-img.png" alt="" class="milestone-img ms-3"></span>
                        <p>Company developed a Performance Testing Equipment for Nozzle – Gasoline Pump.</p>
                    </div>
                </div>

                <div class="timeline-item left">
                    <div class="timeline-card">
                        <span class="year"><img src="./assets/images/new-images/milestone-img.png" alt="" class="milestone-img me-3">2020</span>
                        <p>Covid Crisis – With M/s. RBL support, the company designed and developed Automated Brake Pad Inspection System.</p>
                    </div>
                </div>

                <div class="timeline-item right">
                    <div class="timeline-card">
                        <span class="year">2021<img src="./assets/images/new-images/milestone-img.png" alt="" class="milestone-img ms-3"></span>
                        <p>DDL Loading Automation developed for M/s. RBL.</p>
                    </div>
                </div>
                <div class="timeline-item left">
                    <div class="timeline-card">
                        <span class="year"><img src="./assets/images/new-images/milestone-img.png" alt="" class="milestone-img me-3">2022</span>
                        <p>Projects completed for M/s. GVR – Dunk Test with Auto Clamping, Dunk Test with Low/High Pressure Testing.</p>
                    </div>
                </div>

                <div class="timeline-item right">
                    <div class="timeline-card">
                        <span class="year">2023<img src="./assets/images/new-images/milestone-img.png" alt="" class="milestone-img ms-3"></span>
                        <p>Developed DDL loading automation solutions for M/s RBL.</p>
                    </div>
                </div>

                <div class="timeline-item left">
                    <div class="timeline-card">
                        <span class="year"><img src="./assets/images/new-images/milestone-img.png" alt="" class="milestone-img me-3">2024</span>
                        <p>Projects Completed with M/s. Rane, Madras for EPS Assembly Line Automation with Builtup Area of 2400 Sqft.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
