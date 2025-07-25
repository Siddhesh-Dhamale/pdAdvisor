@extends('admin.layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 text-primary">About Us Sections Management</h1>

    <div class="row g-3">

        <div class="col-md-6 col-lg-4">
            <div class="card border border-light shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Subhero Section</h5>
                    <a href="{{ route('admin.about.edit', ['section' => 'subhero', 'id' => 1]) }}" 
                       class="btn btn-outline-primary btn-sm mt-3 w-100">
                        Edit Subhero Section
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card border border-light shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Approach Section</h5>
                    <a href="{{ route('admin.about.edit', ['section' => 'approach', 'id' => 1]) }}" 
                       class="btn btn-outline-primary btn-sm mt-3 w-100">
                        Edit Approach Section
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card border border-light shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Values Section</h5>
                    <a href="{{ route('admin.about.edit', ['section' => 'values', 'id' => 1]) }}" 
                       class="btn btn-outline-primary btn-sm mt-3 w-100">
                        Edit Values Section
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card border border-light shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Value Points</h5>
                    <a href="{{ route('admin.about.valuepoints.index') }}" 
                       class="btn btn-outline-primary btn-sm mt-3 w-100">
                        Manage Value Points
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card border border-light shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Experience Section</h5>
                    <a href="{{ route('admin.about.edit', ['section' => 'experience', 'id' => 1]) }}" 
                       class="btn btn-outline-primary btn-sm mt-3 w-100">
                        Edit Experience Section
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card border border-light shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title text-secondary">CSR Section</h5>
                    <a href="{{ route('admin.about.edit', ['section' => 'csr', 'id' => 1]) }}" 
                       class="btn btn-outline-primary btn-sm mt-3 w-100">
                        Edit CSR Section
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
