<div>
    {{-- Stop trying to control. --}}
    <h1>Employees </h1>
    <div class="table-responsive">
<div class="container">
<div class="row">
<div class="col-md-6">
<input wire:model.debounce.300ms="searchname" type="text" class="form-control" name="search" placeholder="Enter name"/>
<input wire:model.debounce.300ms="searchemploymentnumber" type="text" class="form-control" name="search" placeholder="Enter nameemployment number"/>
<input wire:model.debounce.300ms="searchposition" type="text" class="form-control" name="search" placeholder="Enter position"/>
<input wire:model.debounce.300ms="searchemail" type="text" class="form-control" name="search" placeholder="Enter email"/>
<input wire:model.debounce.300ms="searchtelephone" type="text" class="form-control" name="search " placeholder="Enter telephone"/>

</div>
</div>
</div>

  <table class="table table-striped table-hover border-secondary">
    <thead class="">
      <tr>
        <!-- <th scope="col">#</th> -->

        <th scope="col">Name</th>
        <th scope="col">Employment Number </th>
        <th scope="col">position</th>
        <th scope="col">Telephone</th>
        <th scope="col">Email</th>




      </tr>
    </thead>

    <tbody>
    @foreach($employees as $employee)
      <tr @if(($loop->index/4)%2==0)
        class="bg-info text-white"
      @endif>

        <td>{{$employee->name}}</td>
        <td>{{$employee->employmentnumber}}</td>
        <td>{{$employee->position}}</td>
        <td>{{$employee->telephone}}</td>
        <td>{{$employee->email}}</td>

      </tr>

      @endforeach
    </tbody>


  </table>
  {{ $employees->onEachSide(3)->links('pagination::bootstrap-4') }}
</div>
</div>
