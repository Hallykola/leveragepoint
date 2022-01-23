@extends('layouts.frame')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-6">
            <img src="/../images/regbg.jpg" alt="">
           <div class="container top"></div>
            <h5 class="toptoo">Private Security Registration Company</h5>
            <h4 class="first">Already Registered?</h4>
            <div class="signin">
                SIGNIN
            </div>
        </div>
        <div class="col-6"></div>
    </div>
</div>
@endsection


@section('css')
<style>
    .signin{
        position: absolute;
left: 6.94%;
right: 70.69%;
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
.top{
    position: absolute;
left: 0%;
right: 0%;
top: 5%;
bottom: 0%;
height: 92;
background: url(/../images/computer.jpg);
background-repeat: no-repeat;


}
.toptoo{
position: absolute;
width: 308px;
height: 66px;
left: 161px;
top: 77px;

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
    .first{
        position: absolute;
width: 411px;
height: 42px;
left: 55px;
top: 248px;

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
    img{
        position: absolute;
width: 512px;
height: 1103px;
left: -1px;
top: -48px;


    }

    </style>

@endsection
