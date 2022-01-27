<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

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
                            <th scope="col" class="TheadBlue" >Application Date</th>
                            <th scope="col" class="TheadBlue" >Name</th>
                            <th scope="col" class="TheadBlue">Status</th>
                            <th scope="col" class="TheadBlue"  >Type </th>
                            <th scope="col" class="TheadBlue" >Contact Phone</th>
                            <th scope="col" class="TheadBlue" >Current Employer</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Edit</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td><input wire:model.debounce.300ms="applicationnumber" type="text"  name="search" placeholder="Search by application number"/> </td>
                        <td><input wire:model.debounce.300ms="applicationdate" type="text"  name="search" placeholder="Search by application date"/> </td>
                        <td><input wire:model.debounce.300ms="name" type="text"  name="search" placeholder="Search by name"/></td>
                        <td><input wire:model.debounce.300ms="status" type="text"  name="search" placeholder="Search by status"/></td>
                        <td><input wire:model.debounce.300ms="type" type="text"  name="search " placeholder="Search by type"/></td>
                        <td><input wire:model.debounce.300ms="contactphone" type="text"  name="search" placeholder="Search by contact phone"/></td>
                        <td><input wire:model.debounce.300ms="currentemployername" type="text"  name="search" placeholder="Search by current employer name"/></td>
                        <td></td>
                    </tr>
    @foreach($securityguards as $securityguard)

        <tr>
        <td>{{$securityguard->applicationnumber}}</td>
        <td>{{$securityguard->applicationdate}}</td>
        <td>{{$securityguard->name}}</td>
        <td>{{$securityguard->status}}</td>
        <td>{{$securityguard->type}}</td>
        <td>{{$securityguard->contactphone}}</td>
        <td>{{$securityguard->currentemployername}}</td>
        <td><button>Edit</button></td>
      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $securityguards->onEachSide(3)->links('pagination::bootstrap-4') }}
</div>
</div>
