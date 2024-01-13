<x-my-user-dashboard>

    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3>Media Details<a href="{{route('media_create')}}" class="btn btn-primary ml-2">Add Media</a></h3>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Media Table</a></h4>
                </div>
                <div class="card-body">
                    @if ($media->count() == 0)
                    <h5 class="text-info">No Records Available, Please add First</h5>
                    @else
                    <table class="table">
                        <tr>
                            <th>#SN</th>
                            <th>Protocol</th>
                            <th>Domain</th>
                            <th>Status</th>
                            <th>Renewal</th>
                            <th>Name Server1</th>
                            <th>Name Server2</th>
                            <th>Server Type</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($media as $media)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$media->dprotocol}}</td>
                            <td>{{$media->domain}}</td>
                            <td>
                                @if ($media->status == "approved")
                                <span class="text-success">{{$media->status}}</span>
                                @else
                                <span>{{$media->status}}</span>
                                @endif
                            </td>
                            <td>
                                @if ($media->renew == "yes")
                                {{$media->renew}}: upto({{$media->renew_upto}})
                                @else
                                {{$media->renew}}
                                @endif
                            </td>
                            <td>{{$media->name_server1}}</td>
                            <td>{{$media->name_server2}}</td>
                            <td>{{$media->server_type}}</td>
                            <td>
                                <a href="{{route('media_show', [$media->id])}}" class="btn btn-warning btn-sm">Details</a>
                                @if ($media->status != "approved")
                                <a href="{{route('media_edit', [$media->id])}}" class="btn btn-info btn-sm">Edit Details</a>                                    
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>



</x-my-user-dashboard>

