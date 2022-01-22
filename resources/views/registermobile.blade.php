@extends('layouts.frame')
@section('content')
<h1>Register with us</h1>
<img src="/../images/computer.jpg" height= "112" width="112"/>
<h2>Private Security Registration Company</h2>
<h3>Enter your Verification Code</h3>
<input type="text" name="" value="" placeholder="Input the verification code sent to you" />
<img  src="/../images/Vector.png" height= "112" width="112"/><p class="reset">Reset verification code</p>
<button class="verify"> Verify</button>

@endsection

@section('css')
<style>
  
h1{

font-family: Poppins;
font-style: Bold;
font-size: 22px;
line-height: 33px;
line-height: 100%;
text-align: left;
vertical-align: top;
}
h2{
    font-family: Montserrat;
font-Weight: 600;
font-style: normal;
font-size: 17.3px;
line-height:23.51px;
/* height-letter:3%; */
text-align: Justified;
}
h3{
    font-family: Montserrat;
font-size: 16px;
font-style: normal;
font-weight: 500;
line-height: 24px;
letter-spacing: 0.32em;
text-align: justified;

}

input{
font-family: Montserrat;
font-size: 16px;
font-style: normal;
font-weight: 500;
line-height: 24px;
letter-spacing: 0.32em;
text-align: justified;
}
.reload{
    position: absolute;
left: 9.96%;
right: 9.95%;
top: 8.98%;
bottom: 8.98%;

background: #00489F;
}
.reset{
    position: absolute;
width: 197.01px;
height: 23.27px;
left: 51.17px;
top: 381px;

font-family: Montserrat;
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 151.9%;
/* or 21px */

text-align: justify;

color: #00489F;

}
button.verify{
    position: absolute;
width: 125px;
height: 38px;
left: 33px;
top: 451px;

background: #00489F;
}
button.verifycontent{
    position: absolute;
width: 46px;
height: 24px;
left: 70px;
top: 458px;

font-family: Montserrat;
font-style: normal;
font-weight: 600;
font-size: 15.3785px;
line-height: 151.9%;
/* identical to box height, or 23px */

text-align: justify;

color: #FFFFFF;

}
</style>
@endsection
