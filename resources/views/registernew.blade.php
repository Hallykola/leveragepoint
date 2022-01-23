@extends('layouts.frame')

@section('content')
<div class="container min-vw-100  min-vh-100 d-flex align-items-center " style="background-color: #fff;height:100%">
<div class="row h-100 ">
<div class="col space " >
<div class="container">
<img src="/../images/regbg.jpg" alt="" height="800" width="90%" >
<p class="name">Private Security Registration Company</p>
<h6 class="registered">Already Registered?</h6>
<div class="col sign">
    <p >Sign in to your Account</p>
</div>
</div>
</div>

<div class="col mx-auto ml-5"  >
<form action="">
    <h1 class="mt-5" style="font-family: Poppins; font-weight:700 ">Register with Us</h1>
    <p >"Leveraging and harnessing on information technology for the prosperity of the security sector of Botswana"</p>
    <div class="row">
    <div class="form-group col-xs-12 col-sm-6 mb-5" >

    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

    </div>
    <div class="form-group col-xs-12 col-sm-6 mb-5" >

<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

    </div>
    </div>

    <div class="form-group col-12 mb-5">

    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

    </div>
    <div class="row">
    <div class="form-group col-xs-12 col-sm-6 mb-5" >

    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group col-xs-12 col-sm-6  mb-5" >

<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

    </div>
    </div>
    <div class="row">
    <div class="form-group col-xs-12 col-sm-6  mb-5" >

    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

    </div>
    <div class="form-group col-xs-12 col-sm-6  mb-5" >


<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
</div>
<p>By clicking Signup, you agree to our <a href="">Terms, Data Policy and Cookie policy</a> </p>
<button type="button" class="col-6 mx-auto btn btn-primary">REGISTER ACCOUNT</button>
    </div>

    </div>

</form>

</div>

</div>

</div>
@endsection


@section('css')
<style>
@media (max-width: 992px) {
  .space {
    display: none;
  }
}
button{
font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 25.6714px;
line-height: 39px;
/* identical to box height */


color: #FFFFFF
}
p{
    font-family: Montserrat;
    font-weight:500 ;
}
input{
    font-family: Poppins;
    font-weight:500 ;
    size: 20.74px;
line-height:31.12px
}
.name{
    position: absolute;
width: 308px;
height: 66px;
left: 6%;
top: 10%;

font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 24px;
line-height: 135.9%;
/* or 33px */

text-align: justify;
letter-spacing: 0.03em;

color: #FFFFFF;
}
.sign{
    position: absolute;
left: 7.01%;
right: 70.62%;
top: 84.38%;
bottom: 12.6%;

font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 28px;
line-height: 135.9%;
/* or 38px */

text-align: justify;
letter-spacing: -0.015em;

color: #FFFFFF;
}

.registered{
position: absolute;


left: 7.01%;
right: 70.62%;
bottom: 84.38%;
top: 24.6%;

font-family: Poppins;
font-style: normal;
font-weight: 600;
font-size: 28px;
line-height: 158.4%;
/* or 44px */

text-align: justify;
letter-spacing: 0.245em;

color: #FFFFFF;

}

    </style>

@endsection
