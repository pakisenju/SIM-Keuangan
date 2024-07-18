@extends('layouts.dashboard-master')
@section('title', 'Money Storage')
@section('style')
@endsection

@section('container')
    <div class="container-fluid" style="min-height: 100vh">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-light fw-semibold mt-4">Penyimpanan Uang</h4>
                </div>
                <div class="col-lg-12 mt-4">
                    <div class="alert alert-info mb-3 py-2 fw-semibold">
                        <marquee behavior="" direction="">Total Uang : IDR 1.500.000 | Dana : IDR 500.000 | BNI :
                            1.000.000</marquee>
                    </div>
                </div>
            </div>
            <!--  Row 1 -->
            <div class="card bg-dark m-0">
                <div class="card-body">
                    <h5 class="card-title text-light fw-medium mb-4">Daftar Penyimpanan</h5>
                    <div class="table-responsive">
                        <table class="table table-striped-dark datatable text-nowrap mb-0 align-middle">
                            <thead class="text-light fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="text-center fw-semibold text-light mb-0">No</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold text-light mb-0">Assigned</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold text-light mb-0">Name</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold text-light mb-0">Priority</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold text-light mb-0">Budget</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="text-center fw-semibold text-light mb-0">1</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold text-light mb-1">Sunil Joshi</h6>
                                        <span class="fw-normal">Web Designer</span>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal text-light">Elite Admin</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge w-100 bg-primary rounded-3 fw-semibold">Low</span>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold text-light mb-0 fs-4">$3.9</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="text-center fw-semibold text-light mb-0">2</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold text-light mb-1">Andrew McDownland</h6>
                                        <span class="fw-normal">Project Manager</span>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal text-light">Real Homes WP Theme</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge w-100 bg-secondary rounded-3 fw-semibold">Medium</span>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold text-light mb-0 fs-4">$24.5k</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="text-center fw-semibold text-light mb-0">3</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold text-light mb-1">Christopher Jamil</h6>
                                        <span class="fw-normal">Project Manager</span>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal text-light">MedicalPro WP Theme</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge w-100 bg-danger rounded-3 fw-semibold">High</span>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold text-light mb-0 fs-4">$12.8k</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="text-center fw-semibold text-light mb-0">4</h6>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold text-light mb-1">Nirav Joshi</h6>
                                        <span class="fw-normal">Frontend Engineer</span>
                                    </td>
                                    <td class="border-bottom-0">
                                        <p class="mb-0 fw-normal text-light">Hosting Press HTML</p>
                                    </td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge w-100 bg-success rounded-3 fw-semibold">Critical</span>
                                        </div>
                                    </td>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold text-light mb-0 fs-4">$2.4k</h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
