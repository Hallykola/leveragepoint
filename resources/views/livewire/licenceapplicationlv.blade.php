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

                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Name</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Name</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Name</th>
                            <th scope="col" class="TheadBlue"  >Employment Number </th>
                            <th scope="col" class="TheadBlue" >position</th>
                            <th scope="col" class="TheadBlue" >Telephone</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 0px 10px 0px 0px;">Email </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td><input wire:model.debounce.300ms="searchname" type="text"  name="search" placeholder="Search name"/> </td>
                        <td><input wire:model.debounce.300ms="searchname" type="text"  name="search" placeholder="Search name"/> </td>
                        <td><input wire:model.debounce.300ms="searchname" type="text"  name="search" placeholder="Search name"/> </td>
                        <td><input wire:model.debounce.300ms="searchemploymentnumber" type="text"  name="search" placeholder="Search name employment number"/></td>
                        <td><input wire:model.debounce.300ms="searchposition" type="text"  name="search" placeholder="Search position"/></td>
                        <td><input wire:model.debounce.300ms="searchemail" type="text"  name="search" placeholder="Search email"/></td>
                        <td><input wire:model.debounce.300ms="searchtelephone" type="text"  name="search " placeholder="Search telephone"/></td>

                        </tr>
    @foreach($companies as $company)

        <tr>
        <td>{{$company->name}}</td>
        <td>{{$company->employmentnumber}}</td>
        <td>{{$company->position}}</td>
        <td>{{$company->telephone}}</td>
        <td>{{$company->email}}</td>
        <td>{{$company->email}}</td>
        <td>{{$company->shareholders}}</td>

      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $companies->onEachSide(3)->links('pagination::bootstrap-4') }}
</div>
</div>
