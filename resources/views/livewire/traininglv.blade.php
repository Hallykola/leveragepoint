<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

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

                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Module</th>
                            <th scope="col" class="TheadBlue" >Title</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 0px 10px 0px 0px;">Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td><input wire:model.debounce.300ms="module" type="text"  name="search" placeholder="Search module"/> </td>
                        <td><input wire:model.debounce.300ms="title" type="text"  name="search" placeholder="Search title"/> </td>
                        <td><input wire:model.debounce.300ms="status" type="text"  name="search" placeholder="Search status"/> </td>

                        </tr>
    @foreach($trainings as $training)

        <tr>
        <td>{{$training->module}}</td>
        <td>{{$training->title}}</td>
        <td>{{$training->status}}</td>

      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $trainings->onEachSide(3)->links('pagination::bootstrap-4') }}
</div></div>
