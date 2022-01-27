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
                            <th scope="col" class="TheadBlue" >Current Employer Phone</th>
                            <th scope="col" class="TheadBlue" >Position</th>
                            <th scope="col" class="TheadBlue">Telephone</th>
                            <th scope="col" class="TheadBlue"  >Email Address </th>
                            <th scope="col" class="TheadBlue" >Status</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Edit</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td><input wire:model.debounce.300ms="name" type="text"  name="search" placeholder="Search by name"/> </td>
                        <td><input wire:model.debounce.300ms="currentemployerphone" type="text"  name="search" placeholder="Search by current employer phone"/> </td>
                        <td><input wire:model.debounce.300ms="position" type="text"  name="search" placeholder="Search by position"/></td>
                        <td><input wire:model.debounce.300ms="telephone" type="text"  name="search" placeholder="Search by telephone"/></td>
                        <td><input wire:model.debounce.300ms="emailaddress" type="text"  name="search " placeholder="Search by email address"/></td>
                        <td><input wire:model.debounce.300ms="status" type="text"  name="search" placeholder="Search by status"/></td>
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
