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

                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Application number</th>
                            <th scope="col" class="TheadBlue" >Applicant name</th>
                            <th scope="col" class="TheadBlue" >Town</th>
                            <th scope="col" class="TheadBlue"  >Submitted by </th>
                            <th scope="col" class="TheadBlue" >Application date</th>
                            <th scope="col" class="TheadBlue" >Status</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 0px 10px 0px 0px;">Applicant </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td><input wire:model.debounce.300ms="applicationnumber" type="text"  name="search" placeholder="Search application number"/> </td>
                        <td><input wire:model.debounce.300ms="applicantname" type="text"  name="search" placeholder="Search applicant names"/> </td>
                        <td><input wire:model.debounce.300ms="town" type="text"  name="search" placeholder="Search town"/> </td>
                        <td><input wire:model.debounce.300ms="submittedby" type="text"  name="search" placeholder="Search by who submitted"/></td>
                        <td><input wire:model.debounce.300ms="aplicationdate" type="text"  name="search" placeholder="Search application date"/></td>
                        <td><input wire:model.debounce.300ms="status" type="text"  name="search" placeholder="Search status"/></td>
                        <td><input wire:model.debounce.300ms="applicant" type="text"  name="search " placeholder="Search applicants"/></td>

                        </tr>
    @foreach($ammendmentoflicences as $ammendmentoflicence)

        <tr>
        <td>{{$ammendmentoflicence->applicationnumber}}</td>
        <td>{{$ammendmentoflicence->applicantname}}</td>
        <td>{{$ammendmentoflicence->town}}</td>
        <td>{{$ammendmentoflicence->submittedby}}</td>
        <td>{{$ammendmentoflicence->aplicationdate}}</td>
        <td>{{$ammendmentoflicence->status}}</td>
        <td>{{$ammendmentoflicence->applicant}}</td>

      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $ammendmentoflicences->onEachSide(3)->links('pagination::bootstrap-4') }}
</div>
</div>
