<div>
    {{-- Do your work, then step back. --}}
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
                            <th scope="col" class="TheadBlue" >Applicant name</th>
                            <th scope="col" class="TheadBlue" >Applicant Phone</th>
                            <th scope="col" class="TheadBlue"  >Applicant Email </th>
                            <th scope="col" class="TheadBlue" >Application date</th>
                            <th scope="col" class="TheadBlue" >Status</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 0px 10px 0px 0px;">Applicant </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td><input wire:model.debounce.300ms="applicationnumber" type="text"  name="search" placeholder="Search application number"/> </td>
                        <td><input wire:model.debounce.300ms="applicantphone" type="text"  name="search" placeholder="Search applicant names"/> </td>
                        <td><input wire:model.debounce.300ms="applicantaddress" type="text"  name="search" placeholder="Search town"/> </td>
                        <td><input wire:model.debounce.300ms="applicantfax" type="text"  name="search" placeholder="Search by who submitted"/></td>
                        <td><input wire:model.debounce.300ms="aplicationdate" type="text"  name="search" placeholder="Search application date"/></td>
                        <td><input wire:model.debounce.300ms="status" type="text"  name="search" placeholder="Search status"/></td>
                        <td><input wire:model.debounce.300ms="applicant" type="text"  name="search " placeholder="Search applicants"/></td>

                        </tr>
    @foreach($ammendmentoflicences as $ammendmentoflicence)

        <tr>
        <td>{{$ammendmentoflicence->form}}</td>
        <td>{{$ammendmentoflicence->applicantname}}</td>
        <td>{{$ammendmentoflicence->applicantphonenumber}}</td>
        <td>{{$ammendmentoflicence->applicantemailaddress}}</td>
        <td>{{$ammendmentoflicence->created_at}}</td>
        <td>{{$ammendmentoflicence->status}}</td>
        <td>{{$ammendmentoflicence->applicantname}}</td>

      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $ammendmentoflicences->onEachSide(3)->links('pagination::bootstrap-4') }}
</div>
</div>
