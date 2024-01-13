<x-my-admin-app>
    <section class="section" style="margin-top: -2%">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header mt-3">
                    <h3>Records of Medias</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th>#SN</th>
                                    <th>D-protocol</th>
                                    <th>Domain</th>
                                    <th>Status</th>
                                    <th>NameServer1</th>
                                    <th>NameServer2</th>
                                    <th>More Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($media_data as $media)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $media->dprotocol }}</td>
                                    <td>{{ $media->domain }}</td>
                                    @if ($media->status == "pending")
                                    <td><div class="badge badge-info">pending</div></td>
                                    @elseif($media->status == "rejected")
                                    <td><div class="badge badge-danger">rejected</div>
                                    @elseif($media->status == "approved")
                                    <td><div class="badge badge-success">approved</div>
                                    @endif
                                    <td>{{ $media->name_server1 }}</td>
                                    <td>{{ $media->name_server2 }}</td>
                                    <td>
                                        <a href={{route('admin_media_show', [$media->id])}} class="btn btn-warning btn-sm">Details</a>
                                        @if ($media->status == "pending")
                                        <a href={{route('admin_media_approve', [$media->id])}} class="btn btn-danger btn-sm">Approve</a>
                                        @endif                                                           
                                    </td>
                                </tr>
                                @endforeach
                          </tbody>
                        </table>
                    </div> 
                </div>
              </div>
            </div>
          </div>
    </section>
</x-my-admin-app>
