<div>
    {{-- In work, do what you enjoy. --}}
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

                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Application number</th>
                            <th scope="col" class="TheadBlue" >Created at</th>
                            <th scope="col" class="TheadBlue" >Position</th>
                            <th scope="col" class="TheadBlue"  > type </th>
                            <th scope="col" class="TheadBlue" >applicationdate</th>
                            <th scope="col" class="TheadBlue" >Telephone</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 0px 10px 0px 0px;">Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td><input wire:model.debounce.300ms="applicationnumber" type="text"  name="search" placeholder="Search application number"/> </td>
                        <td><input wire:model.debounce.300ms="created_at" type="text"  name="search" placeholder="Search created at"/> </td>
                        <td><input wire:model.debounce.300ms="position" type="text"  name="search" placeholder="Search position"/> </td>
                        <td><input wire:model.debounce.300ms="type" type="text"  name="search" placeholder="Search type"/></td>
                        <td><input wire:model.debounce.300ms="applicationdate" type="text"  name="search" placeholder="Search application date"/></td>
                        <td><input wire:model.debounce.300ms="status" type="text"  name="search" placeholder="Search status"/></td>
                        </tr>
    @foreach($licenceapplications as $licenceapplication)

        <tr>
        <td>{{$licenceapplication->applicationnumber}}</td>
        <td>{{$licenceapplication->created_at}}</td>
        <td>{{$licenceapplication->position}}</td>
        <td>{{$licenceapplication->type}}</td>
        <td>{{$licenceapplication->applicationdate}}</td>
        <td>{{$licenceapplication->status}}</td>

      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $licenceapplications->onEachSide(3)->links('pagination::bootstrap-4') }}
</div>
</div>
