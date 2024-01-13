<x-my-admin-app>
    <div class="container" style="margin-top: -30px; margin-left: -15px">
        <div class="card">
            <div class="card-header mt-3">
                <h3>Records of Editors</h3>
            </div>
            <div class="card-body">
                <table class="table" border="0" style="background-color: ghostwhite">
                    <tr>
                        <th>#SN</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Duration</th>
                        <th>Media</th>
                        <th>Citizen No.</th>
                        <th>More Actions</th>
                    </tr>
                    @foreach ($editor as $editor)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$editor->name}}<br>{{$editor->nepali_name}}</td>
                        <td>{{$editor->email}}<br>{{$editor->contact}}</td>
                        <td>{{$editor->status}}/{{$editor->activity}}</td>
                        <td>From:{{$editor->appointment_date}}<br>To:{{$editor->retirement_date}}</td>
                        <td>{{$editor->media->domain}}</td>
                        <td>{{$editor->citizen_number}}<br>{{$editor->citizen_district}}</td>
                        <td>
                            <a href="{{route('admin_editor_show', [$editor->id])}}" class="btn btn-info btn-sm">Document</a>
                            <a href="{{route('admin_editor_edit', [$editor->id])}}" class="btn btn-danger btn-sm">Approve</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-my-admin-app>
