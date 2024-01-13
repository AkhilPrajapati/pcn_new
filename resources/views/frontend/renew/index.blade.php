<x-my-user-dashboard>

    <div class="app-main" id="main">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3>Media Renewal Page</h3>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Media to be Renewed Now</h4>
                </div>
                <div class="card-body">
                    @if ($media_data->count() == 0)
                    <h5 class="text-info">No Media are Pending for Renew</h5>
                    @else
                    <table class="table">
                        <tr>
                            <th class="text-center">#SN</th>
                            <th>Media</th>
                            <th>Renew Status</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($media_data as $media)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$media->domain}}</td>
                            <td>
                                {{$media->renew}}
                            </td>
                            <td>
                                <a href="{{route('renew_create', [$media->id])}}" class="btn btn-primary btn-sm">Renew</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @endif
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Renew Stack</h4>
                </div>
                <div class="card-body">
                    @if ($renew_data->count() == 0)
                    <h5 class="text-info">No Records Available</h5>
                    @else
                    <table class="table">
                        <tr>
                            <th class="text-center">#SN</th>
                            <th>Media</th>
                            <th>Fiscal Year</th>
                            <th>Duration</th>
                            <th>Status</th>
                            <th>Renewal</th>
                            <th>Actions</th>
                        </tr>
                        @foreach ($renew_data as $renew)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$renew->media->domain}}</td>
                            <td>{{$renew->fiscal_year}}</td>
                            <td>
                                From: {{$renew->from}}
                                <br>
                                To: {{$renew->to}}
                            </td>
                            <td>
                                {{$renew->status}} <br>
                                @if ($renew->rejection_reason != null)
                                (<b>{{$renew->rejection_reason}}</b>)    
                                @endif
                            </td>
                            <td>
                                On: {{$renew->renewed_on}}
                                <br>
                                By: {{$renew->renewed_by}}
                            </td>
                            <td>
                                @if ($renew->status != "approved")
                                <a href="{{route('renew_edit', [$renew->id])}}" class="btn btn-primary btn-sm">Edit</a>                                    
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

