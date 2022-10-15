<div>
    <div class="card-header">
        <h3 class="card-title">Striped Full Width Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>
                        <div class="btn btn-sm btn-info text-white">Edit</div>
                        <div class="btn btn-sm btn-danger text-white">Delete</div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
