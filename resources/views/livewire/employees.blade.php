<div>
    {{-- Stop trying to control. --}}
    <h1>Employees </h1>
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
                            <th scope="col" class="TheadBlue"  >Employment Number </th>
                            <th scope="col" class="TheadBlue" >position</th>
                            <th scope="col" class="TheadBlue" >Telephone</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 0px 10px 0px 0px;">Email </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            {{$searchname}}
                        <td><input wire:model.debounce.300ms="searchname" type="text"  name="search" placeholder="Search name"/> </td>
                        <td><input wire:model.debounce.300ms="searchemploymentnumber" type="text"  name="search" placeholder="Search name employment number"/></td>
                        <td><input wire:model.debounce.300ms="searchposition" type="text"  name="search" placeholder="Search position"/></td>
                        <td><input wire:model.debounce.300ms="searchtelephone" type="text"  name="search" placeholder="Search telephone"/></td>
                        <td><input wire:model.debounce.300ms="searchemail" type="text"  name="search " placeholder="Search email "/></td>

                        </tr>
    @foreach($employees as $employee)

        <tr>
        <td>{{$employee->name}}</td>
        <td>{{$employee->employmentnumber}}</td>
        <td>{{$employee->position}}</td>
        <td>{{$employee->telephone}}</td>
        <td>{{$employee->email}}</td>

      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $employees->links() }}
</div>
</div>
