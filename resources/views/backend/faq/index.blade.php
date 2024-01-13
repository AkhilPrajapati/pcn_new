<x-my-admin-app>
    <div class="container" style="margin-top: -30px; margin-left: -15px">
        <div class="card">
            <div class="card-header mt-3">
                <h3>List of frequently asked questions</h3>
                <a href="{{route('admin_faq_create')}}" class="btn btn-primary ml-2">Add New</a>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($varFaq as $faq)
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h6> {{$loop->iteration}}. <b>{{$faq->question}}</b></h6>
                                <p style="text-align: justify;">{!!$faq->answer!!}</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <span class="text-danger">Created by: {{$faq->creator}}</span><br>
                                        <span class="text-warning">Created on: {{$faq->created_at}}</span><br>
                                        <span class="text-warning">Updated on: {{$faq->updated_at}}</span><br>
                                    </div>
                                    <div class="col-md-6 mt-3">
                                        <a href="{{route('admin_faq_edit', [$faq->id])}}" class="btn btn-info">Edit</a>
                                        <a href="{{route('admin_faq_delete', [$faq->id])}}" class="btn btn-danger">Remove</a>
                                    </div>
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
