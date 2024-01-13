<x-my-admin-app>
    <div class="container" style="margin-top: -30px; margin-left: -15px">
        <div class="card">
            <div class="card-header mt-3">
                <h3>Records of Chairmans</h3>
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
                        <th>Profile</th>
                        <th>Citizen</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($chairman as $chairman)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$chairman->name}}<br>{{$chairman->nepali_name}}</td>
                        <td>{{$chairman->email}}<br>{{$chairman->contact}}</td>
                        <td>{{$chairman->status}}/{{$chairman->activity}}</td>
                        <td>From:{{$chairman->appointment_date}}<br>To:{{$chairman->retirement_date}}</td>
                        <td>{{$chairman->media->domain}}</td>
                        <td>{{$chairman->citizen_number}}<br>{{$chairman->citizen_district}}</td>
                        <td><img src="/myuploads/chairman/{{$chairman->photo}}" height="50" width="50"></td>
                        <td><img src="/myuploads/chairman/{{$chairman->citizenship}}" height="50" width="50"></td>

                        <td>
                            <a href="{{route('admin_chairman_edit', [$chairman->id])}}" class="btn btn-info">Approve</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-my-admin-app>
