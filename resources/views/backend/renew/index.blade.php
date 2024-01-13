<x-my-admin-app>
    <div class="section" style="margin-top: -2%">
        <div class="card">
            <div class="card-header mt-3">
                <h3>Pending Request List for Renew</h3>
            </div>
            @if ($pending_renew->count() == 0)
            <div class="card-body">
                <h6 class="text-danger">No Pending Request Found For Renew</h6>
            </div>
            @else
            <div class="card-body">
                <div class="row">
                    @foreach ($pending_renew as $renew)
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6> {{$loop->iteration}}. <b>{{$renew->media->domain}}</b>: ({{$renew->fiscal_year}})</h6>
                                        <p class="ml-3">with the following details</p>
                                    </div>
                                    <div class="col-md-2 mt-2">
                                        <a href="{{route('admin_renew_edit_approve', [$renew->id])}}" class="btn btn-success">Approve</a>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <form action="{{route('admin_renew_update_rejection', [$renew->id])}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Reject with Reason</button> <span class="text-danger"> *</span> <span class="text-danger">@error('rejection_reason'){{$message}}@enderror</span>
                                            <select name="rejection_reason[]" class="select2 form-control" multiple>
                                                <option value="Application">Application</option>
                                                <option value="Audit Report">Audit Report</option>
                                                <option value="Company Renewal">Company Renewal</option>
                                                <option value="Fiscal Year">Fiscal Year</option>
                                                <option value="Minute">Minute</option>
                                                <option value="Payment Voucher">Payment Voucher</option>
                                                <option value="Tax Clearance">Tax Clearance</option>
                                            </select>
                                           

                                        </form>
                                    </div>

                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th><center>#APPLICATION</center></th>
                                            <th><center>#AUDIT REPORT<center></th>
                                            <th><center>#COMPANY RENEWAL<center></th>
                                            <th><center>#MINUTE<center></th>
                                            <th><center>#PAYMENT VOUCHER<center></th>
                                            <th><center>#TAX CLEARANCE<center></th>
                                        </tr>
                                        <tr>
                                            <td><center><img src="/myuploads/renew/{{$renew->application}}" height="200" width="140"></center></td>
                                            <td><center><img src="/myuploads/renew/{{$renew->audit_report}}" height="200" width="140"></center></td>
                                            <td><center><img src="/myuploads/renew/{{$renew->company_renewal}}" height="200" width="140"></center></td>
                                            <td><center><img src="/myuploads/renew/{{$renew->minute}}" height="200" width="140"></center></td>
                                            <td><center><img src="/myuploads/renew/{{$renew->payment_voucher}}" height="200" width="140"></center></td>
                                            <td><center><img src="/myuploads/renew/{{$renew->tax_clearance}}" height="200" width="140"></center></td>
                                        </tr>
                                    </table>  
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
                
            @endif

           
        </div>
        <div class="card">
            <div class="card-header mt-3">
                <h3>Renewal Record Stack</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>Media</th>
                            <th>Duration</th>
                            <th>Renewed</th>
                            <th><center>APPLICATION</center></th>
                            <th><center>#AUDIT REPORT<center></th>
                            <th><center>#COMPANY RENEWAL<center></th>
                            <th><center>#MINUTE<center></th>
                            <th><center>#PAYMENT VOUCHER<center></th>
                            <th><center>#TAX CLEARANCE<center></th>
                        </tr>
    
                        @foreach ($approved_renew as $renew)
                        <tr>
                            <td>{{$renew->media->domain}}<br>{{$renew->fiscal_year}}</td>
                            <td>From:{{$renew->from}}<br>To:{{$renew->to}}</td>
                            <td>On: {{$renew->renewed_on}}<br>By: {{$renew->renewed_by}}</td>
                            
                            <td><center><img src="/myuploads/renew/{{$renew->application}}" height="40" width="30"></center></td>
                            <td><center><img src="/myuploads/renew/{{$renew->audit_report}}" height="40" width="30"></center></td>
                            <td><center><img src="/myuploads/renew/{{$renew->company_renewal}}" height="40" width="30"></center></td>
                            <td><center><img src="/myuploads/renew/{{$renew->minute}}" height="40" width="30"></center></td>
                            <td><center><img src="/myuploads/renew/{{$renew->payment_voucher}}" height="40" width="30"></center></td>
                            <td><center><img src="/myuploads/renew/{{$renew->tax_clearance}}" height="40" width="30"></center></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
               
            </div>
        </div>
    </div>
</x-my-admin-app>
