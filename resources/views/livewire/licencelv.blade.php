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

                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Licence number</th>
                            <th scope="col" class="TheadBlue" >formid</th>
                            <th scope="col" class="TheadBlue" >Licence date</th>
                            <th scope="col" class="TheadBlue"  > Fee paid </th>
                            <th scope="col" class="TheadBlue" >Receipt number</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 0px 10px 0px 0px;">Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td><input wire:model.debounce.300ms="licencenumber" type="text"  name="search" placeholder="Search licence number"/> </td>
                        <td><input wire:model.debounce.300ms="formid" type="text"  name="search" placeholder="Search formid"/> </td>
                        <td><input wire:model.debounce.300ms="licencedate" type="text"  name="search" placeholder="Search licence date"/> </td>
                        <td><input wire:model.debounce.300ms="feepaid" type="text"  name="search" placeholder="Search fee paid"/></td>
                        <td><input wire:model.debounce.300ms="receiptnumber" type="text"  name="search" placeholder="Search receipt number"/></td>
                        <td><input wire:model.debounce.300ms="status" type="text"  name="search" placeholder="Search status"/></td>
                        </tr>
    @foreach($licences as $licence)

        <tr>
        <td>{{$licence->licencenumber}}</td>
        <td>{{$licence->formid}}</td>
        <td>{{$licence->licencedate}}</td>
        <td>{{$licence->feepaid}}</td>
        <td>{{$licence->receiptnumber}}</td>
        <td>{{$licence->status}}</td>

      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $licences->onEachSide(3)->links('pagination::bootstrap-4') }}
</div>
</div>
