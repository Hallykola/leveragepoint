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

                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Form number</th>
                            <th scope="col" class="TheadBlue"  >Applicant name </th>
                            <th scope="col" class="TheadBlue" >Address</th>
                            <th scope="col" class="TheadBlue" >Applied for</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 0px 10px 0px 0px;">Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr  style="display: none;">
                        <td><input wire:model.debounce.300ms="searchname" type="text"  name="search" placeholder="Search name"/> </td>
                        <td><input wire:model.debounce.300ms="searchname" type="text"  name="search" placeholder="Search name"/> </td>
                        <td><input wire:model.debounce.300ms="searchname" type="text"  name="search" placeholder="Search name"/> </td>
                        <td><input wire:model.debounce.300ms="searchemploymentnumber" type="text"  name="search" placeholder="Search name employment number"/></td>
                        <td><input wire:model.debounce.300ms="searchposition" type="text"  name="search" placeholder="Search position"/></td>
                        <td><input wire:model.debounce.300ms="searchemail" type="text"  name="search" placeholder="Search email"/></td>
                        <td><input wire:model.debounce.300ms="searchtelephone" type="text"  name="search " placeholder="Search telephone"/></td>

                        </tr>
    @foreach($companies as $company)

        <tr>
        <td> <a href="/registercompanyb?form= {{$company->form}}"> {{$company->form}} </a> </td>
        <td>{{$company->applicantname}}</td>
        <td>{{$company->applicantadd}}</td>
        <td>{{$company->appliedfor}}</td>
        <td>{{$company->status}}</td>



      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $companies->onEachSide(3)->links('pagination::bootstrap-4') }}
</div>
</div>
