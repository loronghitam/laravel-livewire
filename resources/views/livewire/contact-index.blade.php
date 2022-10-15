<div>

    <div class="card-header">
        @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
          </div>
        @endif

        @if($statusUpdate)
            <livewire:contact-update></livewire:contact-update>
        @else
            <livewire:contact-create></livewire:contact-create>
        @endif

    </div>
    <!-- /.card-header -->
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
                    <div wire:click="getContact({{ $contact->id }})" class="btn btn-sm btn-info text-white">Edit</div>
                    <div wire:click="destroy({{ $contact->id }})" class="btn btn-sm btn-danger text-white">Delete</div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $contacts->links() }}
