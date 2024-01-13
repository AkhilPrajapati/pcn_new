<x-my-admin-app>
    <div class="container" style="margin-top: -30px; margin-left: -15px">
        <div class="card">
            <div class="card-header mt-3">
                <h3>Rejection Reasons of all Medias</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($media as $media)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5> {{$loop->iteration}}. <b>{{$media->domain}}</b></h5>
                                <div class="ml-3 mt-2">
                                    @foreach ($rejection as $rej)
                                    @if ($media->id == $rej->media_id)
                                    <div class="row">
                                        <div class="col-md-8 mt-2">
                                        <li>{{$rej->reason}}</li>   
                                        </div>
                                        <div class="col-md-4 mt-2">
                                            <a href="{{route('admin_rejection_delete', [$rej->id])}}"><img src="/myassets/cross.png" height="18" width="18"></a>
                                        </div>
                                    </div>                                        
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
               
            </div>
        </div>
    </div>
</x-my-admin-app>
