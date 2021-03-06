@extends('user.layout.master')
@section('user-dashboard')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="top-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('show_user_home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Basic Table</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 ">
            <div class="card left-profile-card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="user-profile">
                        <h3>John Doe</h3>
                        <p>World of Internet</p>
                        <div class="d-flex align-items-center justify-content-center mb-3">
                            <i class="fas fa-star text-info"></i>
                            <i class="fas fa-star text-info"></i>
                            <i class="fas fa-star text-info"></i>
                            <i class="fas fa-star text-info"></i>
                            <i class="fas fa-star text-info"></i>
                        </div>
                    </div>
                    <div class="personal-info">
                        <h3>Personal Information</h3>
                        <ul class="personal-list">
                            <li><i class="fas fa-briefcase "></i><span>Web Designer</span></li>
                            <li><i class="fas fa-map-marker-alt "></i><span> New York</span></li>
                            <li><i class="far fa-envelope "></i><span>like @example.com</span></li>
                            <li><i class="fas fa-mobile "></i><span>1234564343</span></li>
                        </ul>
                    </div>
                    <div class="skill">
                        <h3>Skills</h3>
                        <p>Adobe Photoshop</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>HTML5 &amp; CSS3</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Javascript &amp; Jquery</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Angular &amp; React</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="languages">
                        <h3>Languages</h3>
                        <p>English</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>German</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Hindi</p>
                        <div class="progress mb-3">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card right-profile-card">
                <div class="card-header alert-primary">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-selected="true">Work Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-education-tab" data-toggle="pill" href="#pills-education" role="tab" aria-selected="false">Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-timeline-tab" data-toggle="pill" href="#pills-timeline" role="tab" aria-selected="false">Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-document-tab" data-toggle="pill" href="#" role="tab" aria-selected="false">Document</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-event-tab" data-toggle="pill" href="#" role="tab" aria-selected="false">Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-tasks-tab" data-toggle="pill" href="#" role="tab" aria-selected="false">Tasks</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="work-container">
                                <h3>Tech Lead :- World of Internet</h3>
                                <h4><i class="far fa-calendar-alt"></i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="work-container">
                                <h3>Senior UI Developer :- Pixel Factory</h3>
                                <h4><i class="far fa-calendar-alt"></i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="work-container">
                                <h3>Jr. Front End Developer :- Graphics Media</h3>
                                <h4><i class="far fa-calendar-alt"></i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-education" role="tabpanel">
                            <div class="work-container">
                                <h3>The Art Institute :- New Yourk</h3>
                                <h4><i class="far fa-calendar-alt"></i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="work-container">
                                <h3>Eitech :- New Jersy</h3>
                                <h4><i class="material-icons">date_range</i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="work-container">
                                <h3>School of Visual Arts :- Chicago</h3>
                                <h4><i class="material-icons">date_range</i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-timeline" role="tabpanel">
                            <div class="row">
                                <div class="timeline-centered">
                                    <div class="timeline-entry">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon bg-success">
                                                <i class="entypo-feather"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">Art Ramadani</a> <span>posted a status update</span></h2>
                                                <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added
                                                    forth chief trees but rooms think may.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-entry">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon bg-secondary">
                                                <i class="entypo-suitcase"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">Job Meeting</a></h2>
                                                <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-entry">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon bg-info">
                                                <i class="entypo-location"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">Arlind Nushi</a> <span>checked in at</span> <a href="#">Laborator</a></h2>
                                                <blockquote>Great place, feeling like in home.</blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-entry">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon bg-warning">
                                                <i class="entypo-camera"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">Arber Nushi</a> <span>changed his</span> <a href="#">Profile Picture</a></h2>
                                                <blockquote>Pianoforte principles our unaffected not for astonished travelling are particular.</blockquote>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="timeline-entry begin">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                                                <i class="entypo-flight"></i> +
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
