@extends('backend.layouts.master')
@section('title') {{'Custom Domains'}} @endsection
@section('content')
    @include('backend.partials.alert')

    <!-- Start::page-header -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">Custom Domains Request</h1>
    </div>
    <!-- End::page-header -->
    <div class="alert alert-secondary" role="alert">
        NOTE: Custom domain needs manual server work (Trying to make it automatic).
    </div>
    <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="table-responsive mb-4">
                        <table id="datatable-basic" class="table text-nowrap table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Custom Domain</th>
                                <th scope="col">Sub Domain</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($customDomains as $domain)
                                <tr class="product-list">
                                    <td>{{ $domain->customDomain }}</td>
                                    <td>{{ $domain->site->subDomain }}</td>
                                    <td><span class="badge bg-{{ $domain->status == 'pending' ? 'warning' : 'success' }}">{{ strtoupper($domain->status) }}</span></td>
                                    <td>
                                        <div class="hstack gap-2 fs-15">
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                               data-bs-target="#customDomainModalStatus{{ $domain->id }}" class="btn btn-icon btn-sm btn-info-light"><i
                                                        class="ri-edit-line"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal change status for custom domain -->
                                <div class="modal fade" id="customDomainModalStatus{{ $domain->id }}" tabindex="-1"
                                     role="dialog"
                                     aria-labelledby="teamModalCenterTitle" aria-hidden="false">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="teamModalCenterTitle">Change status</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <form class="d-inline-block" action="{{ route('domain.changeStatus') }}"
                                                  method="POST">
                                                @method('PATCH')
                                                @csrf
                                                <div class="modal-body">
                                                    <select name="status" class="form-select" aria-label="Change status">
                                                        <option value="pending" {{ $domain->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                        <option value="active" {{ $domain->status == 'active' ? 'selected' : '' }}>Active</option>
                                                    </select>
                                                    <input type="hidden" name="customDomainId" value="{{ $domain->id }}">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End::row-1 -->
@endsection
