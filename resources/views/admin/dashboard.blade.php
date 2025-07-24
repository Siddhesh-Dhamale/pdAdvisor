@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Admin Dashboard</h1>

    <div class="row g-4">
        <!-- Card 1: Industry Slides -->
        <div class="col-md-4">
            <div class="card bg-light shadow-sm ">
                <div class="card-header bg-white border-0">
                    <h5 class="mb-0 text-primary fw-bold">Industry Slides</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-title text-dark">Manage Industry Slides</h6>
                    <p class="card-text text-secondary">Add, edit or remove industry slides content.</p>
                    <a href="{{ route('admin.home.industrySlides.index') }}" class="btn btn-outline-primary btn-sm">Go to Industry Slides</a>
                </div>
            </div>
        </div>

        <!-- Card 2: Solutions -->
        <div class="col-md-4">
            <div class="card bg-light shadow-sm">
                <div class="card-header bg-white border-0">
                    <h5 class="mb-0 text-success fw-bold">Solutions</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-title text-dark">Manage Solutions Content</h6>
                    <p class="card-text text-secondary">Add, edit or remove solutions.</p>
                    <a href="{{ route('admin.solutions.index') }}" class="btn btn-outline-success btn-sm">Go to Solutions</a>
                </div>
            </div>
        </div>

        <!-- Card 3: Other Content -->
        <div class="col-md-4">
            <div class="card bg-light shadow-sm ">
                <div class="card-header bg-white border-0">
                    <h5 class="mb-0 text-warning fw-bold">Other Content</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-title text-dark">Solutions, Industries & Insights</h6>
                    <p class="card-text text-secondary">Manage other page contents easily.</p>
                    <a href="{{ route('admin.sol_ind_ins.solutions') }}" class="btn btn-outline-warning btn-sm">Manage Other Content</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
