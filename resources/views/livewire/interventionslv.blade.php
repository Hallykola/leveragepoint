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

                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Intervention date</th>
                            <th scope="col" class="TheadBlue" >Summary</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 0px 10px 0px 0px;">Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td><input wire:model.debounce.300ms="interventiondate" type="text"  name="search" placeholder="Search intervention date"/> </td>
                        <td><input wire:model.debounce.300ms="summary" type="text"  name="search" placeholder="Search summary"/> </td>
                        <td><input wire:model.debounce.300ms="status" type="text"  name="search" placeholder="Search status"/> </td>

                        </tr>
    @foreach($interventions as $intervention)

        <tr>
        <td>{{$intervention->interventiondate}}</td>
        <td>{{$intervention->summary}}</td>
        <td>{{$intervention->status}}</td>

      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $interventions->onEachSide(3)->links('pagination::bootstrap-4') }}
</div>
</div>
