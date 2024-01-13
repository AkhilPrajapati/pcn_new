<x-my-admin-app>
    <div class="container" style="margin-top: -30px; margin-left: -15px">
        <div class="card">
            <div class="card-header mt-3">
                <h3>Records of Fiscal Years</h3>
                <a href="{{route('admin_fiscal_year_create')}}" class="btn btn-primary ml-2">Add New</a>
            </div>
            <div class="card-body">
                <table class="table" border="0" style="background-color: ghostwhite">
                    <tr>
                        <th class="text-center">#SN</th>
                        <th>Fiscal Year</th>
                        <th>Duration</th>
                        <th>Remarks</th>
                        <th>More Actions</th>
                    </tr>
                    @foreach ($var_fiscal_year as $fiscal_year)
                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td>{{$fiscal_year->fiscal_year}}</td>
                        <td>({{$fiscal_year->from}}) to ({{$fiscal_year->to}})</td>
                        <td>{{$fiscal_year->remark}}</td>
                        <td>
                            <a href="{{route('admin_fiscal_year_edit', [$fiscal_year->id])}}" class="btn btn-info">Edit Data</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-my-admin-app>