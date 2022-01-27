<div>
    {{-- Success is as dangerous as failure. --}}
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

                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Title</th>
                            <th scope="col" class="TheadBlue" >Case Number</th>
                            <th scope="col" class="TheadBlue" >Company</th>
                            <th scope="col" class="TheadBlue" >Created on</th>
                            <th scope="col" class="TheadBlue"  >Description </th>
                            <th scope="col" class="TheadBlue" >Owner</th>
                            <th scope="col" class="TheadBlue" >Type</th>
                            <th scope="col" class="TheadBlue" >Date Received</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 0px 10px 0px 0px;">Date Resolved </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td><input wire:model.debounce.300ms="title" type="text"  name="search" placeholder="Search title"/> </td>
                        <td><input wire:model.debounce.300ms="casenumber" type="text"  name="search" placeholder="Search case number"/> </td>
                        <td><input wire:model.debounce.300ms="company" type="text"  name="search" placeholder="Search company"/> </td>
                        <td><input wire:model.debounce.300ms="created_on" type="text"  name="search" placeholder="Search date created"/></td>
                        <td><input wire:model.debounce.300ms="description" type="text"  name="search" placeholder="Search description"/></td>
                        <td><input wire:model.debounce.300ms="user_id" type="text"  name="search" placeholder="Search user by id"/></td>
                        <td><input wire:model.debounce.300ms="type" type="text"  name="search " placeholder="Search type"/></td>
                        <td><input wire:model.debounce.300ms="datereceived" type="text"  name="search " placeholder="Search date received"/></td>
                        <td><input wire:model.debounce.300ms="dateresolved" type="text"  name="search " placeholder="Search date resolved"/></td>

                        </tr>
    @foreach($complaints as $complaint)

        <tr>
        <td>{{$complaint->title}}</td>
        <td>{{$complaint->casenumber}}</td>
        <td>{{$complaint->company}}</td>
        <td>{{$complaint->created_on}}</td>
        <td>{{$complaint->description}}</td>
        <td>{{$complaint->user_id}}</td>
        <td>{{$complaint->type}}</td>
        <td>{{$complaint->datereceived}}</td>
        <td>{{$complaint->dateresolved}}</td>

      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $complaints->onEachSide(3)->links('pagination::bootstrap-4') }}
</div>
</div>
