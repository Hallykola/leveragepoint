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

                            <th scope="col" class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Payment Date</th>
                            <th scope="col" class="TheadBlue"  >Received from</th>
                            <th scope="col" class="TheadBlue" >Amount</th>
                            <th scope="col" class="TheadBlue" >Currency</th>
                            <th scope="col" class="TheadBlue" >Created by</th>
                            <th scope="col" class="TheadBlue" style="border-radius: 0px 10px 0px 0px;">Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                        <td><input wire:model.debounce.300ms="searchpaymentdate" type="text"  name="search" placeholder="Search payment date"/> </td>
                        <td><input wire:model.debounce.300ms="searchuserid" type="text"  name="search" placeholder="Search Received from"/> </td>
                        <td><input wire:model.debounce.300ms="searchamount" type="text"  name="search" placeholder="Search amount"/></td>
                        <td><input wire:model.debounce.300ms="searchcurrency" type="text"  name="search" placeholder="Search currency"/></td>
                        <td><input wire:model.debounce.300ms="searchpaymenttype" type="text"  name="search" placeholder="Search payment type"/></td>
                        <td><input wire:model.debounce.300ms="searchstatus" type="text"  name="search " placeholder="Search status"/></td>

                        </tr>
    @foreach($payments as $payment)

        <tr>
        <td>{{$payment->paymentdate}}</td>
        <td>{{$payment->user_id}}</td>
        <td>{{$payment->amount}}</td>
        <td>{{$payment->currency}}</td>
        <td>{{$payment->paymenttype}}</td>
        <td>{{$payment->status}}</td>

      </tr>

      @endforeach
    </tbody>
                </table>
            </div>
        </div>

  {{ $payments->onEachSide(3)->links('pagination::bootstrap-4') }}
</div>
</div>
