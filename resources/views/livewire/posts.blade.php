<div>
    {{-- @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif --}}
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @if (count($post) > 0)
            @foreach ($post as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->description }}</td>
                <td>
                <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
            @else
                <tr>
                    <td colspan="3" align="center">
                        No Categories Found.
                    </td>
                </tr>
          @endif
        </tbody>

    </table>
</div>