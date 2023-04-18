@extends('/Admin/layoutAdmin')



@section('content')
<!-- Content Wrapper START -->
<div class="main-content">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-blue">
                                            <i class="anticon anticon-dollar"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0">$23,523</h2>
                                            <p class="m-b-0 text-muted">Profit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                                            <i class="anticon anticon-line-chart"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0">+ 17.21%</h2>
                                            <p class="m-b-0 text-muted">Growth</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-gold">
                                            <i class="anticon anticon-profile"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0">3,685</h2>
                                            <p class="m-b-0 text-muted">Orders</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-icon avatar-lg avatar-purple">
                                            <i class="anticon anticon-user"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0">1,832</h2>
                                            <p class="m-b-0 text-muted">Customers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5>Total Revenue</h5>
                                        <div>
                                            <div class="btn-group">
                                                <button class="btn btn-default active">
                                                    <span>Month</span>
                                                </button>
                                                <button class="btn btn-default">
                                                    <span>Year</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-t-50" style="height: 330px">
                                        <canvas class="chart" id="revenue-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="m-b-0">Customers</h5>
                                    <div class="m-v-60 text-center" style="height: 200px">
                                        <canvas class="chart" id="customers-chart"></canvas>
                                    </div>
                                    <div class="row border-top p-t-25">
                                        <div class="col-4">
                                            <div class="d-flex justify-content-center">
                                                <div class="media align-items-center">
                                                    <span class="badge badge-success badge-dot m-r-10"></span>
                                                    <div class="m-l-5">
                                                        <h4 class="m-b-0">350</h4>
                                                        <p class="m-b-0 muted">New</p>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex justify-content-center">
                                                <div class="media align-items-center">
                                                    <span class="badge badge-secondary badge-dot m-r-10"></span>
                                                    <div class="m-l-5">
                                                        <h4 class="m-b-0">450</h4>
                                                        <p class="m-b-0 muted">Returning</p>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex justify-content-center">
                                                <div class="media align-items-center">
                                                    <span class="badge badge-warning badge-dot m-r-10"></span>
                                                    <div class="m-l-5">
                                                        <h4 class="m-b-0">100</h4>
                                                        <p class="m-b-0 muted">Others</p>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h2 class="m-b-0">$17,267</h2>
                                            <p class="m-b-0 text-muted">Avg.Profit</p>
                                        </div>
                                        <div>
                                            <span class="badge badge-pill badge-cyan font-size-12">
                                                <span class="font-weight-semibold m-l-5">+5.7%</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-t-50" style="height: 375px">
                                         <canvas class="chart" id="avg-profit-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                   <div class="d-flex justify-content-between align-items-center">
                                        <h5>Top Product</h5>
                                        <div>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                                        </div>
                                    </div>
                                    <div class="m-t-30">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Sales</th>
                                                        <th>Earning</th>
                                                        <th style="max-width: 70px">Stock Left</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-image rounded">
                                                                    <img src="/admin/app/assets/images/others/thumb-9.jpg" alt="">
                                                                </div>
                                                                <div class="m-l-10">
                                                                    <span>Gray Sofa</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>81</td>
                                                        <td>$1,912.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-sm w-100 m-b-0">
                                                                    <div class="progress-bar bg-success" style="width: 82%"></div>
                                                                </div>
                                                                <div class="m-l-10">
                                                                    82
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-image rounded">
                                                                    <img src="/admin/app/assets/images/others/thumb-10.jpg" alt="">
                                                                </div>
                                                                <div class="m-l-10">
                                                                    <span>Gray Sofa</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>26</td>
                                                        <td>$1,377.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-sm w-100 m-b-0">
                                                                    <div class="progress-bar bg-success" style="width: 61%"></div>
                                                                </div>
                                                                <div class="m-l-10">
                                                                    61
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-image rounded">
                                                                    <img src="/admin/app/assets/images/others/thumb-11.jpg" alt="">
                                                                </div>
                                                                <div class="m-l-10">
                                                                    <span>Wooden Rhino</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>71</td>
                                                        <td>$9,212.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-sm w-100 m-b-0">
                                                                    <div class="progress-bar bg-danger" style="width: 23%"></div>
                                                                </div>
                                                                <div class="m-l-10">
                                                                    23
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-image rounded">
                                                                    <img src="/admin/app/assets/images/others/thumb-12.jpg" alt="">
                                                                </div>
                                                                <div class="m-l-10">
                                                                    <span>Red Chair</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>79</td>
                                                        <td>$1,298.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-sm w-100 m-b-0">
                                                                    <div class="progress-bar bg-warning" style="width: 54%"></div>
                                                                </div>
                                                                <div class="m-l-10">
                                                                    54
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-image rounded">
                                                                    <img src="/admin/app/assets/images/others/thumb-13.jpg" alt="">
                                                                </div>
                                                                <div class="m-l-10">
                                                                    <span>Wristband</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>60</td>
                                                        <td>$7,376.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-sm w-100 m-b-0">
                                                                    <div class="progress-bar bg-success" style="width: 76%"></div>
                                                                </div>
                                                                <div class="m-l-10">
                                                                    76
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="m-b-0">Latest Upload</h5>
                                        <div>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                                        </div>
                                    </div>
                                    <div class="m-t-30">
                                        <div class="m-b-25">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="media align-items-center">
                                                    <div class="font-size-35">
                                                        <i class="anticon anticon-file-word text-primary"></i>
                                                    </div>
                                                    <div class="m-l-15">
                                                        <h6 class="m-b-0">
                                                            <a class="text-dark" href="javascript:void(0);">Documentation.doc</a>
                                                        </h6>
                                                        <p class="text-muted m-b-0">1.2MB</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-eye"></i>
                                                            <span class="m-l-10">View</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-download"></i>
                                                            <span class="m-l-10">Download</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-delete"></i>
                                                            <span class="m-l-10">Remove</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-b-25">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="media align-items-center">
                                                    <div class="font-size-35">
                                                        <i class="anticon anticon-file-excel text-success"></i>
                                                    </div>
                                                    <div class="m-l-15">
                                                        <h6 class="m-b-0">
                                                            <a class="text-dark" href="javascript:void(0);">Expensess.xls</a>
                                                        </h6>
                                                        <p class="text-muted m-b-0">518KB</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-eye"></i>
                                                            <span class="m-l-10">View</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-download"></i>
                                                            <span class="m-l-10">Download</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-delete"></i>
                                                            <span class="m-l-10">Remove</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-b-25">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="media align-items-center">
                                                    <div class="font-size-35">
                                                        <i class="anticon anticon-file-text text-secondary"></i>
                                                    </div>
                                                    <div class="m-l-15">
                                                        <h6 class="m-b-0">
                                                            <a class="text-dark" href="javascript:void(0);">Receipt.txt</a>
                                                        </h6>
                                                        <p class="text-muted m-b-0">355KB</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-eye"></i>
                                                            <span class="m-l-10">View</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-download"></i>
                                                            <span class="m-l-10">Download</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-delete"></i>
                                                            <span class="m-l-10">Remove</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-b-25">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="media align-items-center">
                                                    <div class="font-size-35">
                                                        <i class="anticon anticon-file-word text-primary"></i>
                                                    </div>
                                                    <div class="m-l-15">
                                                        <h6 class="m-b-0">
                                                            <a class="text-dark" href="javascript:void(0);">Project Requirement.doc</a>
                                                        </h6>
                                                        <p class="text-muted m-b-0">1.6MB</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-eye"></i>
                                                            <span class="m-l-10">View</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-download"></i>
                                                            <span class="m-l-10">Download</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-delete"></i>
                                                            <span class="m-l-10">Remove</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-b-25">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="media align-items-center">
                                                    <div class="font-size-35">
                                                        <i class="anticon anticon-file-pdf text-danger"></i>
                                                    </div>
                                                    <div class="m-l-15">
                                                        <h6 class="m-b-0">
                                                            <a class="text-dark" href="javascript:void(0);">App Flow.pdf</a>
                                                        </h6>
                                                        <p class="text-muted m-b-0">19.8MB</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-eye"></i>
                                                            <span class="m-l-10">View</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-download"></i>
                                                            <span class="m-l-10">Download</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-delete"></i>
                                                            <span class="m-l-10">Remove</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="media align-items-center">
                                                    <div class="font-size-35">
                                                        <i class="anticon anticon-file-ppt text-warning"></i>
                                                    </div>
                                                    <div class="m-l-15">
                                                        <h6 class="m-b-0">
                                                            <a class="text-dark" href="javascript:void(0);">Presentation.ppt</a>
                                                        </h6>
                                                        <p class="text-muted m-b-0">2.7MB</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-eye"></i>
                                                            <span class="m-l-10">View</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-download"></i>
                                                            <span class="m-l-10">Download</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-delete"></i>
                                                            <span class="m-l-10">Remove</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="m-b-0">Latest Upload</h5>
                                        <div>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                                        </div>
                                    </div>
                                    <div class="m-t-30">
                                        <div class="overflow-y-auto scrollable relative" style="height: 437px">
                                            <ul class="timeline p-t-10 p-l-10">
                                                <li class="timeline-item">
                                                    <div class="timeline-item-head">
                                                        <div class="avatar avatar-text avatar-sm bg-primary">
                                                            <span>V</span>
                                                        </div>                                                                
                                                    </div>
                                                    <div class="timeline-item-content">
                                                        <div class="m-l-10">
                                                            <h5 class="m-b-5">Virgil Gonzales</h5>
                                                            <p class="m-b-0">
                                                                <span class="font-weight-semibold">Complete task </span> 
                                                                <span class="m-l-5"> Prototype Design</span>
                                                            </p>
                                                            <span class="text-muted font-size-13">
                                                                <i class="anticon anticon-clock-circle"></i>
                                                                <span class="m-l-5">10:44 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-item">
                                                    <div class="timeline-item-head">
                                                        <div class="avatar avatar-text avatar-sm bg-success">
                                                            <span>L</span>
                                                        </div>                                                                
                                                    </div>
                                                    <div class="timeline-item-content">
                                                        <div class="m-l-10">
                                                            <h5 class="m-b-5">Lilian Stone</h5>
                                                            <p class="m-b-0">
                                                                <span class="font-weight-semibold">Attached file </span> 
                                                                <span class="m-l-5"> Mockup Zip</span>
                                                            </p>
                                                            <span class="text-muted font-size-13">
                                                                <i class="anticon anticon-clock-circle"></i>
                                                                <span class="m-l-5">8:34 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-item">
                                                    <div class="timeline-item-head">
                                                        <div class="avatar avatar-text avatar-sm bg-warning">
                                                            <span>E</span>
                                                        </div>                                                                
                                                    </div>
                                                    <div class="timeline-item-content">
                                                        <div class="m-l-10">
                                                            <h5 class="m-b-5">Erin Gonzales</h5>
                                                            <p class="m-b-0">
                                                                <span class="font-weight-semibold">Commented  </span> 
                                                                <span class="m-l-5"> 'This is not our work!'</span>
                                                            </p>
                                                            <span class="text-muted font-size-13">
                                                                <i class="anticon anticon-clock-circle"></i>
                                                                <span class="m-l-5">8:34 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-item">
                                                    <div class="timeline-item-head">
                                                        <div class="avatar avatar-text avatar-sm bg-primary">
                                                            <span>R</span>
                                                        </div>                                                                
                                                    </div>
                                                    <div class="timeline-item-content">
                                                        <div class="m-l-10">
                                                            <h5 class="m-b-5">Riley Newman</h5>
                                                            <p class="m-b-0">
                                                                <span class="font-weight-semibold">Commented  </span> 
                                                                <span class="m-l-5"> 'Hi, please done this before tommorow'</span>
                                                            </p>
                                                            <span class="text-muted font-size-13">
                                                                <i class="anticon anticon-clock-circle"></i>
                                                                <span class="m-l-5">8:34 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-item">
                                                    <div class="timeline-item-head">
                                                        <div class="avatar avatar-text avatar-sm bg-danger">
                                                            <span>P</span>
                                                        </div>                                                                
                                                    </div>
                                                    <div class="timeline-item-content">
                                                        <div class="m-l-10">
                                                            <h5 class="m-b-5">Pamela Wanda</h5>
                                                            <p class="m-b-0">
                                                                <span class="font-weight-semibold">Removed  </span> 
                                                                <span class="m-l-5"> a file</span>
                                                            </p>
                                                            <span class="text-muted font-size-13">
                                                                <i class="anticon anticon-clock-circle"></i>
                                                                <span class="m-l-5">8:34 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="timeline-item">
                                                    <div class="timeline-item-head">
                                                        <div class="avatar avatar-text avatar-sm bg-secondary">
                                                            <span>M</span>
                                                        </div>                                                                
                                                    </div>
                                                    <div class="timeline-item-content">
                                                        <div class="m-l-10">
                                                            <h5 class="m-b-5">Marshall Nichols</h5>
                                                            <p class="m-b-0">
                                                                <span class="font-weight-semibold">Create   </span> 
                                                                <span class="m-l-5"> this project</span>
                                                            </p>
                                                            <span class="text-muted font-size-13">
                                                                <i class="anticon anticon-clock-circle"></i>
                                                                <span class="m-l-5">5:21 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="m-b-0">Task</h5>
                                        <div>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-t-10">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#tab-today">Today</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab-week">Week</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tab-month">Month</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content m-t-15">
                                        <div class="tab-pane card-body fade show active" id="tab-today">
                                            <div class="m-b-15">
                                                <div class="d-flex align-items-center">
                                                    <div class="checkbox">
                                                        <input id="task-today-1" type="checkbox">
                                                        <label for="task-today-1" class="d-flex align-items-center">
                                                            <span class="inline-block m-l-10">
                                                                <span class="text-dark font-weight-semi-bold font-size-16">Define users and workflow</span>
                                                                <span class="m-b-0 text-muted font-size-13 d-block">A cheeseburger is more than sandwich</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b-15">
                                                <div class="d-flex align-items-center">
                                                    <div class="checkbox">
                                                        <input id="task-today-2" type="checkbox" checked="">
                                                        <label for="task-today-2" class="d-flex align-items-center">
                                                            <span class="inline-block m-l-10">
                                                                <span class="text-dark font-weight-semi-bold font-size-16">Schedule jobs</span>
                                                                <span class="m-b-0 text-muted font-size-13 d-block">I'm gonna build me an airport</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b-15">
                                                <div class="d-flex align-items-center">
                                                    <div class="checkbox">
                                                        <input id="task-today-3" type="checkbox" checked="">
                                                        <label for="task-today-3" class="d-flex align-items-center">
                                                            <span class="inline-block m-l-10">
                                                                <span class="text-dark font-weight-semi-bold font-size-16">Extend the data model</span>
                                                                <span class="m-b-0 text-muted font-size-13 d-block">Let us wax poetic about cheeseburger</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b-15">
                                                <div class="d-flex align-items-center">
                                                    <div class="checkbox">
                                                        <input id="task-today-4" type="checkbox">
                                                        <label for="task-today-4" class="d-flex align-items-center">
                                                            <span class="inline-block m-l-10">
                                                                <span class="text-dark font-weight-semi-bold font-size-16">Change interface</span>
                                                                <span class="m-b-0 text-muted font-size-13 d-block">Efficiently unleash cross-media information</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b-15">
                                                <div class="d-flex align-items-center">
                                                    <div class="checkbox">
                                                        <input id="task-today-5" type="checkbox">
                                                        <label for="task-today-5" class="d-flex align-items-center">
                                                            <span class="inline-block m-l-10">
                                                                <span class="text-dark font-weight-semi-bold font-size-16">Create databases</span>
                                                                <span class="m-b-0 text-muted font-size-13 d-block">Here's the story of a man named Brady</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane card-body fade" id="tab-week">
                                            <div class="m-b-15">
                                                <div class="d-flex align-items-center">
                                                    <div class="checkbox">
                                                        <input id="task-week-1" type="checkbox">
                                                        <label for="task-week-1" class="d-flex align-items-center">
                                                            <span class="inline-block m-l-10">
                                                                <span class="text-dark font-weight-semi-bold font-size-16">Verify connectivity</span>
                                                                <span class="m-b-0 text-muted font-size-13 d-block">Bugger bag egg's old boy willy jolly</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b-15">
                                                <div class="d-flex align-items-center">
                                                    <div class="checkbox">
                                                        <input id="task-week-2" type="checkbox">
                                                        <label for="task-week-2" class="d-flex align-items-center">
                                                            <span class="inline-block m-l-10">
                                                                <span class="text-dark font-weight-semi-bold font-size-16">Order console machines</span>
                                                                <span class="m-b-0 text-muted font-size-13 d-block">Value proposition alpha crowdsource</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b-15">
                                                <div class="d-flex align-items-center">
                                                    <div class="checkbox">
                                                        <input id="task-week-3" type="checkbox" checked="">
                                                        <label for="task-week-3" class="d-flex align-items-center">
                                                            <span class="inline-block m-l-10">
                                                                <span class="text-dark font-weight-semi-bold font-size-16">Customize Template</span>
                                                                <span class="m-b-0 text-muted font-size-13 d-block">Do you see any Teletubbies in here</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b-15">
                                                <div class="d-flex align-items-center">
                                                    <div class="checkbox">
                                                        <input id="task-week-4" type="checkbox" checked="">
                                                        <label for="task-week-4" class="d-flex align-items-center">
                                                            <span class="inline-block m-l-10">
                                                                <span class="text-dark font-weight-semi-bold font-size-16">Batch schedule</span>
                                                                <span class="m-b-0 text-muted font-size-13 d-block">Trillion a very small stage in a vast</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b-15">
                                                <div class="d-flex align-items-center">
                                                    <div class="checkbox">
                                                        <input id="task-week-5" type="checkbox" checked="">
                                                        <label for="task-week-5" class="d-flex align-items-center">
                                                            <span class="inline-block m-l-10">
                                                                <span class="text-dark font-weight-semi-bold font-size-16">Prepare implementation</span>
                                                                <span class="m-b-0 text-muted font-size-13 d-block">Drop in axle roll-in rail slide</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane card-body fade" id="tab-month">
                                            <div class="m-b-15">
                                                <div class="d-flex align-items-center">
                                                    <div class="checkbox">
                                                        <input id="task-month-1" type="checkbox">
                                                        <label for="task-month-1" class="d-flex align-items-center">
                                                            <span class="inline-block m-l-10">
                                                                <span class="text-dark font-weight-semi-bold font-size-16">Create user groups</span>
                                                                <span class="m-b-0 text-muted font-size-13 d-block">Nipperkin run a rig ballast chase</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b-15">
                                                <div class="d-flex align-items-center">
                                                    <div class="checkbox">
                                                        <input id="task-month-2" type="checkbox" checked="">
                                                        <label for="task-month-2" class="d-flex align-items-center">
                                                            <span class="inline-block m-l-10">
                                                                <span class="text-dark font-weight-semi-bold font-size-16">Design Wireframe</span>
                                                                <span class="m-b-0 text-muted font-size-13 d-block">Value proposition alpha crowdsource</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b-15">
                                                <div class="d-flex align-items-center">
                                                    <div class="checkbox">
                                                        <input id="task-month-3" type="checkbox">
                                                        <label for="task-month-3" class="d-flex align-items-center">
                                                            <span class="inline-block m-l-10">
                                                                <span class="text-dark font-weight-semi-bold font-size-16">Customize Template</span>
                                                                <span class="m-b-0 text-muted font-size-13 d-block">I'll be sure to note that</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b-15">
                                                <div class="d-flex align-items-center">
                                                    <div class="checkbox">
                                                        <input id="task-month-4" type="checkbox">
                                                        <label for="task-month-4" class="d-flex align-items-center">
                                                            <span class="inline-block m-l-10">
                                                                <span class="text-dark font-weight-semi-bold font-size-16">Management meeting</span>
                                                                <span class="m-b-0 text-muted font-size-13 d-block">Hand-crafted exclusive finest</span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-b-15">
                                                <div class="d-flex align-items-center">
                                                    <div class="checkbox">
                                                        <input id="task-month-5" type="checkbox" checked="">
                                                        <label for="task-month-5" class="d-flex align-items-center">
                                                            <span class="inline-block m-l-10">
                                                                <span class="text-dark font-weight-semi-bold font-size-16">Extend data model</span>
                                                                <span class="m-b-0 text-muted font-size-13 d-block">European minnow priapumfish mosshead</span>
                                                            </span>
                                                        </label>
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
                <!-- Content Wrapper END -->


@endsection