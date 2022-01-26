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

                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Date Created</th>
                            <th scope="col" class="TheadBlue" >Business ID tag</th>
                            <th scope="col" class="TheadBlue" >Type</th>
                            <th scope="col" class="TheadBlue">Intervention Date</th>
                            <th scope="col" class="TheadBlue"  >Created by </th>
                            <th scope="col" class="TheadBlue" >Status</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Edit</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td><input wire:model.debounce.300ms="searchdatecreated" type="text"  name="search" placeholder="Search by date created"/> </td>
                        <td><input wire:model.debounce.300ms="searchbusinessidtag" type="text"  name="search" placeholder="Search by business id tag"/> </td>
                        <td><input wire:model.debounce.300ms="searchtype" type="text"  name="search" placeholder="Search by type"/></td>
                        <td><input wire:model.debounce.300ms="searchinterventiondate" type="text"  name="search" placeholder="Search by intervention date"/></td>
                        <td><input wire:model.debounce.300ms="searchcreatedby" type="text"  name="search " placeholder="Search by creator"/></td>
                        <td><input wire:model.debounce.300ms="searchstatus" type="text"  name="search" placeholder="Search by status"/></td>
                        <td></td>
                    </tr>
    @foreach($securityguards as $securityguard)

        <tr>
        <td>{{$securityguard->name}}</td>
        <td>{{$securityguard->currentemployerphone}}</td>
        <td>{{$securityguard->position}}</td>
        <td>{{$securityguard->telephone}}</td>
        <td>{{$securityguard->emailaddress}}</td>
        <td>{{$securityguard->status}}</td>
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
