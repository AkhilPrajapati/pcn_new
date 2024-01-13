<x-my-admin-app>
    <div class="container" style="margin-top: -30px; margin-left: -15px">
        <div class="card">
            <div class="card-header mt-3">
                <h3>Documents of Editor: {{$editor->name}}</h3>
            </div>
            <div class="card-body">
                <table class="table" border="0" style="background-color: ghostwhite">
                    <tr>
                        <th>#SN.</th>
                        <th>Parameters</th>
                        <th>Documents</th>
                    </tr>
                    @php
                        $default = "/myassets/noimage.jpg"
                    @endphp
                    <tr>
                        <td>1.</td>
                        <td>Profile</td>
                        <td>
                            <img src="{{(!empty($editor->photo))?url("/myuploads/editor/$editor->photo"):url($default)}}" height="200" width="200">
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Citizenship</td>
                        <td>
                            <img src="{{(!empty($editor->photo))?url("/myuploads/editor/$editor->citizenship"):url($default)}}" height="200" width="200">
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>SEE-Documents</td>
                        <td>
                            <img src="{{(!empty($editor->photo))?url("/myuploads/editor/$editor->see_marksheet"):url($default)}}" height="200" width="200">
                            <img src="{{(!empty($editor->photo))?url("/myuploads/editor/$editor->see_character"):url($default)}}" height="200" width="200">
                            <img src="{{(!empty($editor->photo))?url("/myuploads/editor/$editor->see_certificate"):url($default)}}" height="200" width="200">
                        </td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>SLC-Documents</td>
                        <td>
                            <img src="{{(!empty($editor->photo))?url("/myuploads/editor/$editor->slc_marksheet"):url($default)}}" height="200" width="200">
                            <img src="{{(!empty($editor->photo))?url("/myuploads/editor/$editor->slc_character"):url($default)}}" height="200" width="200">
                            <img src="{{(!empty($editor->photo))?url("/myuploads/editor/$editor->slc_certificate"):url($default)}}" height="200" width="200">
                        </td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Bachlor-Documents</td>
                        <td>
                            <img src="{{(!empty($editor->photo))?url("/myuploads/editor/$editor->bachlor_marksheet"):url($default)}}" height="200" width="200">
                            <img src="{{(!empty($editor->photo))?url("/myuploads/editor/$editor->bachlor_character"):url($default)}}" height="200" width="200">
                            <img src="{{(!empty($editor->photo))?url("/myuploads/editor/$editor->bachlor_certificate"):url($default)}}" height="200" width="200">

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-my-admin-app>
