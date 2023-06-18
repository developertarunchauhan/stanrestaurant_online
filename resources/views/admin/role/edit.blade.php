@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card shadow-sm">
                <div class="card-header bg-light d-flex justify-content-between">
                    {{ __('Role Management') }}

                    <div class="btn-group">
                        <button class="btn btn-outline-success btn-sm" id="btnAddNew"><i class="fa-solid fa-plus"></i> Add New</button>
                        <button class="btn btn-success btn-sm" id="btnList"><i class="fa-solid fa-rectangle-list"></i> View All</button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-container mb-5 border-0 border-bottom p-2">
                        <form id="form-box">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" rows="5" name="description" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" id="btnSubmit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection