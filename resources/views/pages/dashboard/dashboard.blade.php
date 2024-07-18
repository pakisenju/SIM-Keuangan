@extends('layouts.dashboard-master')
@section('title', 'Dashboard')
@section('style')
@endsection

@section('container')
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row mt-9">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card overflow-hidden">
                            <div class="card-body bg-success p-3">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h5 class="card-title fw-semibold">Total Pemasukkan</h5>
                                        <h4 class="fw-semibold mb-2">IDR 1.515.000</h4>
                                        <a class="btn btn-link p-0" href="">
                                            Lihat selengkapnya <i class="ti ti-arrow-forward-up"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 align-items-center">
                                        <div class="d-flex justify-content-center">
                                            <div
                                                class="text-dark bg-light rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-database-import fs-6"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-center align-items-center mt-2">
                                            <span
                                                class="me-1 rounded-circle bg-dark round-20 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-arrow-up text-success"></i>
                                            </span>
                                            <p class="text-dark me-1 fs-6 mb-0">+9%</p>
                                            <p class="fs-6 mb-0">last year</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card overflow-hidden">
                            <div class="card-body bg-danger p-3">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h5 class="card-title fw-semibold">Total Pengeluaran</h5>
                                        <h4 class="fw-semibold mb-2">IDR 1.050.000</h4>
                                        <a class="btn btn-link p-0" href="">
                                            Lihat selengkapnya <i class="ti ti-arrow-forward-up"></i>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <div class="d-flex justify-content-center">
                                            <div
                                                class="text-light bg-dark rounded-circle p-6 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-database-export fs-6"></i>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-center align-items-center mt-2">
                                            <span
                                                class="me-1 rounded-circle bg-dark round-20 d-flex align-items-center justify-content-center">
                                                <i class="ti ti-arrow-down text-danger"></i>
                                            </span>
                                            <p class="text-dark me-1 fs-6 mb-0">+9%</p>
                                            <p class="fs-6 mb-0">last year</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-strech">
                <div class="card w-100 bg-dark">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                            <div class="mb-3 mb-sm-0">
                                <h5 class="card-title text-light fw-semibold">Grafik Keuangan Bulanan</h5>
                            </div>
                            <div>
                                <select class="form-select bg-dark text-light">
                                    <option value="1">March 2023</option>
                                    <option value="2">April 2023</option>
                                    <option value="3">May 2023</option>
                                    <option value="4">June 2023</option>
                                </select>
                            </div>
                        </div>
                        <div id="chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-strech">
                <div class="card w-100 bg-dark">
                    <div class="card-body">
                        <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                            <div class="mb-3 mb-sm-0">
                                <h5 class="card-title text-light fw-semibold">Grafik Keseluruhan Keuangan</h5>
                            </div>
                        </div>
                        <div id="chart"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card w-100 bg-dark">
                    <div class="card-body p-4">
                        <div class="mb-4">
                            <h5 class="card-title text-light fw-semibold">Riwayat Transaksi</h5>
                        </div>
                        <ul class="timeline-widget mb-0 position-relative mb-n5">
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-light flex-shrink-0 text-end">09:30</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-light mt-n1">Payment received from John Doe
                                    of $385.90</div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-light flex-shrink-0 text-end">10:00 am</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-light mt-n1 fw-semibold">New sale recorded
                                    <a href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-light flex-shrink-0 text-end">12:00 am</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-light mt-n1">Payment was made of $64.95 to
                                    Michael</div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-light flex-shrink-0 text-end">09:30 am</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-light mt-n1 fw-semibold">New sale recorded
                                    <a href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-light flex-shrink-0 text-end">09:30 am</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-light mt-n1 fw-semibold">New arrival
                                    recorded
                                </div>
                            </li>
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-light flex-shrink-0 text-end">12:00 am</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-light mt-n1">Payment Done</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100 bg-dark">
                    <div class="card-body p-4">
                        <h5 class="card-title text-light fw-semibold mb-4">Transaksi Terakhir</h5>
                        <div class="table-responsive">
                            <table class="table table-striped-dark datatable text-nowrap mb-0 align-middle">
                                <thead class="text-light fs-4">
                                    <tr>
                                        <th class="border-bottom-0">
                                            <h6 class="fw-semibold text-light mb-0">No</h6>
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
                                            <h6 class="fw-semibold text-light mb-0">1</h6>
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
                                            <h6 class="fw-semibold text-light mb-0">2</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold text-light mb-1">Andrew McDownland</h6>
                                            <span class="fw-normal">Project Manager</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">Real Homes WP Theme</p>
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
                                            <h6 class="fw-semibold text-light mb-0">3</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold text-light mb-1">Christopher Jamil</h6>
                                            <span class="fw-normal">Project Manager</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">MedicalPro WP Theme</p>
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
                                            <h6 class="fw-semibold text-light mb-0">4</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold text-light mb-1">Nirav Joshi</h6>
                                            <span class="fw-normal">Frontend Engineer</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">Hosting Press HTML</p>
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
        <div class="row">
            <h3 class="text-light my-9">Rencana Pembelian</h3>
            <div class="col-sm-6 col-xl-3">
                <div class="card bg-dark overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="javascript:void(0)"><img src="../assets/images/products/s4.jpg"
                                class="card-img-top rounded-0" alt="..."></a>
                    </div>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold text-light fs-4">Boat Headphone</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-semibold text-light fs-4 mb-0">IDR 150.000</h6>
                            <a class="btn btn-outline-primary" href="">Lihat detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card bg-dark overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="javascript:void(0)"><img src="../assets/images/products/s5.jpg"
                                class="card-img-top rounded-0" alt="..."></a>
                    </div>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold text-light fs-4">MacBook Air Pro</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-semibold text-light fs-4 mb-0">IDR 150.000</h6>
                            <a class="btn btn-outline-primary" href="">Lihat detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card bg-dark overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="javascript:void(0)"><img src="../assets/images/products/s7.jpg"
                                class="card-img-top rounded-0" alt="..."></a>
                    </div>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold text-light fs-4">Red Valvet Dress</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-semibold text-light fs-4 mb-0">IDR 150.000</h6>
                            <a class="btn btn-outline-primary" href="">Lihat detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card bg-dark overflow-hidden rounded-2">
                    <div class="position-relative">
                        <a href="javascript:void(0)"><img src="../assets/images/products/s11.jpg"
                                class="card-img-top rounded-0" alt="..."></a>
                    </div>
                    <div class="card-body pt-3 p-4">
                        <h6 class="fw-semibold text-light fs-4">Cute Soft Teddybear</h6>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="fw-semibold text-light fs-4 mb-0">IDR 150.000</h6>
                            <a class="btn btn-outline-primary" href="">Lihat detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">Design by <a href="https://adminmart.com/" target="_blank"
                    class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Develop by <a
                    href="https://themewagon.com">Fahki Rohandi</a></p>
        </div>
    </div>
@endsection

@section('script')
@endsection
