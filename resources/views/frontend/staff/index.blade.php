<x-my-user-dashboard>

    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3>
                        List of Staff Details
                        <a href="{{route('staff_create')}}" class="btn btn-primary">Add Staff</a>
                        <a href="{{route('editor_create')}}" class="btn btn-primary">Add Editor</a>
                        <a href="{{route('chairman_create')}}" class="btn btn-primary">Add Chairman</a>
                    </h3>
                </div>
            </div>

            @foreach ($media as $media)
            <div class="card">
                <div class="card-header">
                    <h4 class="mt-2">{{$loop->iteration}}. {{$media->domain}}:</h4>
                </div>
                <div class="card-body">


                  

                   <table class="table">
                    <tr>
                        <th>#SN</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Post</th>
                        <th>Status</th>
                        <th>Salary</th>
                        <th>Press Pass No.</th>
                        <th>Actions</th>
                    </tr>
                    @if ($active_editor != null)
                    @foreach ($active_editor as $editor)
                    @if ($editor->media_id == $media->id)
                    <tr>
                        <td>1.</td>
                        <td>{{$editor->name}}</td>
                        <td>{{$editor->gender}}</td>
                        <td>Editor</td>
                        <td>{{$editor->status}}</td>
                        <td>-----</td>
                        <td>-----</td>
                        <td>
                            <a href="{{route('editor_show', [$editor->id])}}" class="btn btn-success btn-sm">Show</a>
                            @if ($editor->status == 'pending')
                            <a href="{{route('editor_edit', [$editor->id])}}" class="btn btn-info btn-sm">Edit</a>                                    
                            @else
                            <a href="{{route('editor_create')}}" class="btn btn-danger btn-sm">Change</a>
                            @endif
                        </td>
                    </tr>
                    @endif
                   
                    @endforeach
                    @endif

                    @if ($active_chairman != null)
                    @foreach ($active_chairman as $chairman)
                    @if ($chairman->media_id == $media->id)
                    <tr>
                        <td>2.</td>
                        <td>{{$chairman->name}}</td>
                        <td>{{$chairman->gender}}</td>
                        <td>Chairman</td>
                        <td>{{$chairman->status}}</td>
                        <td>-----</td>
                        <td>-----</td>
                       
                        <td>
                            <a href="{{route('chairman_show', [$chairman->id])}}" class="btn btn-success btn-sm">Show</a>
                            @if ($chairman->status == 'pending')
                            <a href="{{route('chairman_edit', [$chairman->id])}}" class="btn btn-info btn-sm">Edit</a>                                    
                            @else
                            <a href="{{route('chairman_create')}}" class="btn btn-danger btn-sm">Change</a>
                            @endif
                        </td>
                    </tr>
                    @endif
                    @endforeach
                    @endif
                    
                    @foreach ($staff as $index=>$staff_data)
                    @if ($staff_data->media_id == $media->id)
                        <tr>
                            <td>{{$index+3}}</td>
                            <td>{{$staff_data->name}}</td>
                            <td>{{$staff_data->gender}}</td>
                            <td>{{$staff_data->post}}</td>
                            @if ($staff_data->status == "approved")
                            <td class="text-success">{{$staff_data->status}}</td>                                
                            @else
                            <td class="text-danger">{{$staff_data->status}}</td>
                            @endif
                            <td>{{$staff_data->salary}}</td>
                            <td>{{$staff_data->press_pass_number}}</td>
                            <td>
                                <a href="{{route('staff_edit', [$staff_data->id])}}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{route('staff_delete', [$staff_data->id])}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endif





                   
                    @endforeach
                   </table>


                    
                    @if ($inactive_editor != null)
                    <div class="container">
                        @foreach ($inactive_editor as $inactive_editor_data)
                        @if ($inactive_editor_data->media_id == $media->id)
                        <h5>#Previous Editors</h5>
                        <li class="ml-3">
                            {{$inactive_editor_data->name}}: [{{$inactive_editor_data->appointment_date}}-{{$inactive_editor_data->retirement_date}}]
                            <a href="{{route('editor_show', [$inactive_editor_data->id])}}" class="btn btn-xs btn-light">Show</a>
                        </li>
                        @endif
                        @endforeach
                    </div>
                    @endif

                    @if ($inactive_chairman != null)
                    <div class="container">
                        @foreach ($inactive_chairman as $inactive_chairman_data)
                        @if ($inactive_chairman_data->media_id == $media->id)
                        <h5>#Previous Chairmans</h5>
                        <li class="ml-3">
                            {{$inactive_chairman_data->name}}: [{{$inactive_chairman_data->appointment_date}}-{{$inactive_chairman_data->retirement_date}}]
                            <a href="{{route('editor_show', [$inactive_chairman_data->id])}}" class="btn btn-xs btn-light">Show</a>
                        </li>
                        @endif
                        @endforeach
                    </div>
                    @endif

                </div>
            </div>
            @endforeach
           

        </div>
    </div>

 


</x-my-user-dashboard>




