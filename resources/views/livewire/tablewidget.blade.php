<div>
    {{-- The whole world belongs to you. --}}

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
                            @foreach($headings as $heading )

                            <th scope="col" class="TheadBlue"
                            @if($heading == $headings[0])
                            style="border-radius: 10px 0px 0px 0px;"
                            @endif
                            @if($heading == $headings[count($headings)-1])
                            style="border-radius: 0px 10px 0px 0px;"
                            @endif
                            >{{$heading}}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr >
                        <td><input wire:model.debounce.300ms="applicationnumber" type="text"  name="search" placeholder="Search application number"/> </td>
                        <td><input wire:model.debounce.300ms="applicantname" type="text"  name="search" placeholder="Search applicant names"/> </td>
                        <td><input wire:model.debounce.300ms="town" type="text"  name="search" placeholder="Search town"/> </td>
                        <td><input wire:model.debounce.300ms="submittedby" type="text"  name="search" placeholder="Search by who submitted"/></td>
                        <td><input wire:model.debounce.300ms="aplicationdate" type="text"  name="search" placeholder="Search application date"/></td>
                        <td><input wire:model.debounce.300ms="status" type="text"  name="search" placeholder="Search status"/></td>
                        <td><input wire:model.debounce.300ms="applicant" type="text"  name="search " placeholder="Search applicants"/></td>

                        </tr> -->
    @foreach($data as $dataitem)

        <tr>
        @foreach( $datacolumns as $datacolumn )
        <td
        @if( array_key_exists($datacolumn, $style))
            style="{{$style[$datacolumn]}}"
        @endif
        > @if( array_key_exists($datacolumn, $link))
            <a  href= "{{ $link[$datacolumn]['prefix'] . $dataitem->$datacolumn . $link[$datacolumn]['suffix']}}" >
        @endif

             {{$dataitem->$datacolumn}}
        @endforeach
        @if(array_key_exists($datacolumn, $link))
            </a>
        @endif
        </td>
      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $data->onEachSide(3)->links('pagination::bootstrap-4') }}
</div>
</div>
