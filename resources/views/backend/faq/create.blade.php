<x-my-admin-app>
    <div class="container" style="margin-top: -20px">
        <div class="card">
            <div class="card-header mt-3">
                <h3>Create any Question.</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin_faq_store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <div class="bfg">
                                <label for="question">Question *</label>
                                <input type="text" name="question" class="form-control"  id="question"  value="{{old('question')}}">
                                <span class="text-danger">@error('question'){{$message}}@enderror</span>
                            </div>
                        </div>    
                        <div class="col-md-12 mt-3">
                            <div class="bfg">
                                <label for="answer">Answer *</label>
                                <textarea name="answer" class="summernote"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="com-md-12 mt-2">
                        <button type="submit" class="btn btn-primary">Save Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-my-admin-app>
