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
                    <div class="table-container">
                        <table class="table" id="table-box" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Datatable Inserts Data here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    /**
     * Saving Data to Database
     */
    $(document).ready(function() {
        /**
         * Disaply Table as default view
         */

        $('.form-container').hide();

        /**
         * Switch between form & table
         */
        $('#btnAddNew').click(function() {
            $('.form-container').show();
            $('.table-container').hide();
            $(this).removeClass('btn-outline-success').addClass('btn-success');
            $('#btnList').removeClass('btn-success').addClass('btn-outline-success');
        });
        $('#btnList').click(function() {
            $('.form-container').hide();
            $('.table-container').show();
            $(this).removeClass('btn-outline-success').addClass('btn-success');
            $('#btnAddNew').removeClass('btn-success').addClass('btn-outline-success');
        });
        /**
         * Yajra : Getting All Data 
         */

        datatableAll();

        function datatableAll() {
            var table = $('#table-box').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('role.datatableAll') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        }

        /**
         * Saving data on button click
         */

        $('#form-box').submit(function(e) {
            /**
             * Prevent default form submit action
             */
            e.preventDefault();

            /**
             * Getting data from form
             */

            const form = $('#form-box')[0];
            const data = new FormData(form);

            /**
             * Disabling the submit button when pressed
             */

            $('#btnSubmit').prop('disabled', true);

            /**
             * Creating AJAX request
             */

            $.ajax({
                type: "POST",
                url: "{{route('role.store')}}",
                data: data,
                processData: false,
                contentType: false,
                success: function(data) {
                    /**
                     * What to do when data is saved successfully
                     */
                    /**
                     * Display Success Message
                     */
                    successToast.show();
                    /**
                     * Reload list
                     */
                    $('#table-box').DataTable().ajax.reload();

                    /**
                     * Empty the forms fields
                     */

                    $('#title').val('');
                    $('#description').val('');

                    /**
                     * Enable submit button
                     */

                    $('#btnSubmit').prop('disabled', false);
                },
                error: function(e) {
                    /**
                     * What to do when there is some error
                     */
                    console.log(e.responseText);
                    $('#btnSubmit').prop('disabled', false);
                }
            });
        });
    });
</script>
@endsection