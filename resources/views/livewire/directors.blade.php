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

                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Name</th>
                            <th scope="col" class="TheadBlue" >Percentage</th>
                            <th scope="col" class="TheadBlue" >Share Number</th>
                            <th scope="col" class="TheadBlue"  >Address </th>
                            <th scope="col" class="TheadBlue" >Contact</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 0px 10px 0px 0px;">Nationality </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td><input wire:model.debounce.300ms="name" type="text"  name="search" placeholder="Search name"/> </td>
                        <td><input wire:model.debounce.300ms="percentage" type="text"  name="search" placeholder="Search percentage"/> </td>
                        <td><input wire:model.debounce.300ms="sharenumber" type="text"  name="search" placeholder="Search share number"/> </td>
                        <td><input wire:model.debounce.300ms="address" type="text"  name="search" placeholder="Search address"/></td>
                        <td><input wire:model.debounce.300ms="contact" type="text"  name="search" placeholder="Search contact"/></td>
                        <td><input wire:model.debounce.300ms="nationality" type="text"  name="search" placeholder="Search nationality"/></td>

                        </tr>
    @foreach($directors as $director)

        <tr>
        <td>{{$director->name}}</td>
        <td>{{$director->percentage}}</td>
        <td>{{$director->sharenumber}}</td>
        <td>{{$director->address}}</td>
        <td>{{$director->contact}}</td>
        <td>{{$director->nationality}}</td>

      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $directors->onEachSide(3)->links('pagination::bootstrap-4') }}
</div>
</div>
