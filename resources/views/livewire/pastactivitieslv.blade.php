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

                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Activity</th>
                            <th scope="col" class="TheadBlue" >Date initiated</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 0px 10px 0px 0px;">Requested by </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td><input wire:model.debounce.300ms="activity" type="text"  name="search" placeholder="Search by activity"/> </td>
                        <td><input wire:model.debounce.300ms="dateinitiated" type="text"  name="search" placeholder="Search by date initiated"/> </td>
                        <td><input wire:model.debounce.300ms="requestedby" type="text"  name="search" placeholder="Search requested by"/> </td>

                        </tr>
    @foreach($pastactivities as $pastactivity)

        <tr>
        <td>{{$pastactivity->activity}}</td>
        <td>{{$pastactivity->dateinitiated}}</td>
        <td>{{$pastactivity->requestedby}}</td>

      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $pastactivities->onEachSide(3)->links('pagination::bootstrap-4') }}
</div>
</div>
