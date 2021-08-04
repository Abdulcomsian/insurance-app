<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.datatables')
</head>
<body>

<div class="container">
    <h1>Laravel 8 Datatables Tutorial <br/> ItSolutionStuff.com</h1>
    <table class="table table-bordered data-table">
        <thead>
        <tr>
            <th>S.No</th>
            <th>Company Name</th>
            <th>Country</th>
            <th>Contact#</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

</body>

<script type="text/javascript">
    $(function () {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            dom: 'lBfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],
            ajax: "{{ route('insurance_companies.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'company_name', name: 'company_name'},
                {data: 'country', name: 'country'},
                {data: 'contact_number', name: 'contact_number'},
                {data: 'company_type', name: 'company_type'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    });
</script>
</html>
