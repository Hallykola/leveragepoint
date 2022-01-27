<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="table-responsive">
<div class="container">
<div class="row">
<div class="col-md-6">

</div>
</div>
</div>


<div class="row">
            <div class="col">
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr>

                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Refusal number </th>
                            <th scope="col" class="TheadBlue" >Refusal Date</th>
                            <th scope="col" class="TheadBlue" >Applicant</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 0px 10px 0px 0px;">Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td><input wire:model.debounce.300ms="refusalnumber" type="text"  name="search" placeholder="Search refusal number"/> </td>
                        <td><input wire:model.debounce.300ms="refusaldate" type="text"  name="search" placeholder="Search refusal date"/> </td>
                        <td><input wire:model.debounce.300ms="applicant" type="text"  name="search" placeholder="Search applicant"/> </td>
                        <td><input wire:model.debounce.300ms="status" type="text"  name="search" placeholder="Search status"/></td>

                        </tr>
    @foreach($licencerefusals as $licencerefusal)

        <tr>
        <td>{{$licencerefusal->refusalnumber}}</td>
        <td>{{$licencerefusal->refusaldate}}</td>
        <td>{{$licencerefusal->applicant}}</td>
        <td>{{$licencerefusal->status}}</td>

      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $licencerefusals->onEachSide(3)->links('pagination::bootstrap-4') }}
</div>
</div>
