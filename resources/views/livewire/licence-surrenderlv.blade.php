<div>
    {{-- The Master doesn't talk, he acts. --}}

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
                            <th scope="col" class="TheadBlue" >Licence Number</th>
                            <th scope="col" class="TheadBlue" >Email</th>
                            <th scope="col" class="TheadBlue"  >Name </th>
                            <th scope="col" class="TheadBlue" >Phone</th>
                            <th scope="col" class="TheadBlue" >Application date</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 0px 10px 0px 0px;">Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="display: none;">
                        <td><input wire:model.debounce.300ms="applicationnumber" type="text"  name="search" placeholder="Search application number"/> </td>
                        <td><input wire:model.debounce.300ms="applicantname" type="text"  name="search" placeholder="Search applicant names"/> </td>
                        <td><input wire:model.debounce.300ms="town" type="text"  name="search" placeholder="Search town"/> </td>
                        <td><input wire:model.debounce.300ms="submittedby" type="text"  name="search" placeholder="Search by who submitted"/></td>
                        <td><input wire:model.debounce.300ms="aplicationdate" type="text"  name="search" placeholder="Search application date"/></td>
                        <td><input wire:model.debounce.300ms="status" type="text"  name="search" placeholder="Search status"/></td>
                        <td><input wire:model.debounce.300ms="applicant" type="text"  name="search " placeholder="Search applicants"/></td>

                        </tr>
    @foreach($surrenderlicences as $surrenderlicence)

        <tr>
        <td>{{$surrenderlicence->form}}</td>
        <td>{{$surrenderlicence->licencenumber}}</td>
        <td>{{$surrenderlicence->applicantemail}}</td>
        <td>{{$surrenderlicence->applicantname}}</td>
        <td>{{$surrenderlicence->applicantphone}}</td>
        <td>{{$surrenderlicence->created_at}}</td>
        <td>{{$surrenderlicence->status}}</td>

      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $surrenderlicences->onEachSide(3)->links('pagination::bootstrap-4') }}
</div>
</div>
