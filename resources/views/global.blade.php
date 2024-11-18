@extends('layouts.app')

@section('content')


<!-- Why Choose Us for Assignment Help? -->
 <style>
    
    
    .rounded-circle {
    border-radius: 50% !important;
}
    img {
    max-width: 100%;
    height: auto;
    vertical-align: top;
}

.sub-info{
      
    font-family: 'Poppins', sans-serif;
    color: #004975;
}

.display-30 {
    font-size: 0.9rem;
}
 
 </style>
      
     
  
  <!-- Get Your Well-Written Assignment in 3 Easy Steps -->
  <style>
 

.road-map-main {
   margin: 50px 0 51px;
  .road-map-wrapper {
    position: relative;
    display: flex;
    flex-direction: column;
    height: 175px;
    @media (max-width: 991px) {
      margin-bottom: 25px;
      height: auto;
      display: block;
    }

    &::before {
      content: "";
      width: 100%;
      clear: both;
      display: block;
    }
    &::after {
      content: "";
      width: 100%;
      clear: both;
      display: block;
    }
    .road-map-circle {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      border: 25px solid transparent;
      border-top-color: #7a7bd7;
      border-right-color: #7a7bd7;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      margin: auto;
      transform: rotate(45deg);
      @media (max-width: 992px) {
        position: unset;
        border: 25px solid #7a7bd7;
      }

      .road-map-circle-text {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        background-color: #eb0d0de0;
        font-size: 20px;
        font-weight: 600;
        line-height: 26px;
        text-transform: capitalize;
        color: #fff;
        box-shadow: 0px 0px 10px 5px #00000021;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        transform: rotate(-45deg);
      }
    }
    .road-map-card {
      width: 35%;
      // float: right;
      background: #7a7bd7;
      padding: 20px 20px;
      z-index: 1;
      position: absolute;
      right: 0;
      border-radius: 5px;
      &::before {
        content: "";
        width: 25%;
        height: 20px;
        background: #7a7bd7;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: -23%;
        z-index: -1;
      }
      
      @media (max-width: 991px) {
        width: 100%;
        margin-top: 30px;
        position: unset;
        &::before {
          content: "";
          width: 20px;
          height: 30%;
          top: 50%;
          transform: translateX(-50%);
          left: 50%;
        }
      }
      @media (max-width: 425px) {
        top: 45%;
      }
      .card-head {
        font-size: 20px;
        font-weight: 600;
        text-transform: capitalize;
        margin: 0 0 15px;
        color: #fff;
      }
      .card-text {
        color: #fff;
        margin: 0;
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
        overflow: hidden;
        @media (max-width: 1199px) {
          -webkit-line-clamp: 4;
        }
      }
    }
    &:nth-of-type(even) {
      .road-map-circle {
        border-bottom-color: #7a7bd7;
        border-left-color: #7a7bd7;
        border-top-color: transparent;
        border-right-color: transparent;
        @media (max-width: 991px) {
          border-color: #7a7bd7;
        }
      }
      .road-map-card {
        // float: left;
        left: 0;
        &::before {
          
          right: 46%;
          left: unset;
          @media (max-width: 991px) {
            content: "";
            width: 20px;
            height: 30%;
            top: 50%;
            transform: translateX(-50%);
            left: 50%;
          }
          @media (max-width: 425px) {
            top: 45%;
          }
        }
      }
    }
  }
}

  </style>
     <!-- Benefits of Getting Help with Global Assignment Support -->
  <style>

  
#what-we-do{
	background:#ffffff;
}
#what-we-do .card{
	padding: 1rem!important;
	border: none;
	margin-bottom:1rem;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#what-we-do .card:hover{
	-webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	-moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}
#what-we-do .card .card-block{
	padding-left: 50px;
    position: relative;
}
#what-we-do .card .card-block a{
	color:  #258bd5 !important;
	font-weight:700;
	text-decoration:none;
  
}
#what-we-do .card .card-block a i{
	display:none;
	
}
#what-we-do .card:hover .card-block a i{
	display:inline-block;
	font-weight:700;
	
}
#what-we-do .card .card-block:before{
	font-family: FontAwesome;
    position: absolute;
    font-size: 39px;
    color: #000;
    left: 0;
	-webkit-transition: -webkit-transform .2s ease-in-out;
    transition:transform .2s ease-in-out;
}
#what-we-do .card .block-1:before{
    content: "\f0e3";
}
#what-we-do .card .block-2:before{
    content: "\f0eb";
}
#what-we-do .card .block-3:before{
    content: "\f00c";
}
#what-we-do .card .block-4:before{
    content: "\f209";
}
#what-we-do .card .block-5:before{
    content: "\f0a1";
}
#what-we-do .card .block-6:before{
    content: "\f218";
}
#what-we-do .card:hover .card-block:before{
	-webkit-transform: rotate(360deg);
	transform: rotate(360deg);	
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
  </style>
     <!-- Grab Your Discounted Offer Today! -->
<style>
    
.box0 {
  height: 100%;
  overflow: hidden;
}
.box0 {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  margin-bottom:200px;
  background: #cecece;
}
/* .box {
  width: 40em;
  height: 20em;
  background: white;
  background-image: url("assets/images/all-instructor/blog-3.jpg");
  overflow: hidden;
  border-radius: 1em;
  cursor: not-allowed;
  position: relative;
  margin: 1em;
  border: 0;
  box-shadow: 0.1em 0.1em 0.2em 0 #fff3, -0.1em -0.1em 0.2em 0 #0003;
} */
  .inset {
  background: #cecece;
  border-radius: 0.9em;
  width: 100%;
  height: 100%;
  position: relative;
  box-shadow: inset 0em 0em 0em 0em #0006, inset 0.1em 0.1em 0.2em 0 #fff3,
    inset -0.1em -0.1em 0.2em 0 #0003;
}
  .inset::before {
  content: "";
  display: block;
  width: 0.8em;
  height: 7em;
  box-shadow: inset -0.1em -0.1em 0.1em 0.1em #fff3,
    inset 0.1em 0.1em 0.1em 0.1em #0003;
  border-radius: 10px;
  position: absolute;
  top: 0;
  bottom: 0;
  margin: auto;
  left: 1em;
 
}
 .moving {
  pointer-events: none;
}
 :hover .inset {
  animation: pushed 2s ease-in-out forwards;
}
 .hover .inset {
  animation: pushed 0.6s ease-in-out reverse forwards;
   
}
@keyframes pushed {
  0% {
    box-shadow: inset 0em 0em 0em 0em #0006, inset 0.1em 0.1em 0.2em 0 #fff3,
      inset -0.1em -0.1em 0.2em 0 #0003;
    scale: 1;
    translate: 0%;
  }
  24% {
    box-shadow: inset 1.6em 1.6em 1em 0em #0006, inset 0.1em 0.1em 0.2em 0 #fff3,
      inset -0.1em -0.1em 0.2em 0 #0003;
    translate: 0%;
    scale: 0.9;
  }
  100% {
    box-shadow: inset -2.8em 1.6em 1em 0em #0006,
      inset 0.1em 0.1em 0.2em 0 #fff3, inset -0.1em -0.1em 0.2em 0 #0003;
    translate: 88%;
    scale: 0.9;
  }
}
 .inset::after {
  content: "";
  display: block;
  width: 100%;
  height: 100%;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  background-position: 50% 50%;
  background-size: 24%;
  background-repeat: no-repeat;
  position: absolute;
  opacity: 0.05;

  transition: all 0.2s ease-in-out;
}
  .inset:hover::after {
  animation: red-glow 2s infinite ease-out;
}
@keyframes red-glow {
  0% {
    opacity: 0.1;
    filter: invert(10%) sepia(90%) saturate(4763%) hue-rotate(357deg)
      brightness(140%) contrast(114%) drop-shadow(0 0 0px red);
  }
  50% {
    opacity: 0.3;
    filter: invert(10%) sepia(90%) saturate(4763%) hue-rotate(357deg)
      brightness(140%) contrast(114%) drop-shadow(0 0 4px red);
  }
  100% {
    opacity: 0.1;
    filter: invert(10%) sepia(90%) saturate(4763%) hue-rotate(357deg)
      brightness(140%) contrast(114%) drop-shadow(0 0 0px red);
  }
}

 
  .diamond:hover {
  opacity: 1;
  scale: 1.2;
}
@keyframes hueAni {
  0% {
    filter: hue-rotate(0deg);
    rotate: 0;
  }
  100% {
    filter: hue-rotate(360deg);
    rotate: -360deg;
  }
}

 
@keyframes ani-t {
  0% {
    transform: scaleX(0);
  }
  100% {
    transform: scaleX(1);
  }
}
@keyframes ani-t2 {
  0% {
    border-bottom: calc(var(--_ratio) * var(--_size)) solid var(--_clr-main);
  }
  100% {
    border-bottom: calc(var(--_ratio) * var(--_size)) solid var(--_clr-light);
  }
}

 

@keyframes ani-b {
  0% {
    transform: scaleX(0);
  }
  100% {
    transform: scaleX(1);
  }
}
@keyframes ani-b2 {
  0% {
    border-top: calc(var(--_ratio) * var(--_size)) solid var(--_clr-dark);
  }
  100% {
    border-top: calc(var(--_ratio) * var(--_size)) solid var(--_clr-main);
  }
}

</style>


     

        <!-- Services We Offer for Your Research Paper -->
 <style>
  
.sec-icon {
  position: relative;
  display: inline-block;
  padding: 0;
  margin: 0 auto;
}

.sec-icon::before {
  content: "";
  position: absolute;
  height: 1px;
  left: -70px;
  margin-top: -5.5px;
  top: 60%;
  background: #333333;
  width: 50px;
}

.sec-icon::after {
  content: "";
  position: absolute;
  height: 1px;
  right: -70px;
  margin-top: -5.5px;
  top: 60%;
  background: #333;
  width: 50px;
}

.advertisers-service-sec {
  background-color: #f5f5f5;
}

.advertisers-service-sec span {
  color: rgb(255, 23, 131);
}

.advertisers-service-sec .col {
  padding: 0 1em 1em 1em;
  text-align: center;
}

.advertisers-service-sec .service-card {
  width: 100%;
  height: 100%;
  padding: 2em 1.5em;
  border-radius: 5px;
  box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  transition: 0.5s;
  position: relative;
  z-index: 2;
  overflow: hidden;
  background: #fff;
}

.advertisers-service-sec .service-card::after {
  content: "";
  width: 100%;
  height: 100%;
  background: linear-gradient(#0dcaf0, rgb(255, 23, 131));
  position: absolute;
  left: 0%;
  top: -98%;
  z-index: -2;
  transition: all 0.4s cubic-bezier(0.77, -0.04, 0, 0.99);
}

.advertisers-service-sec h3 {
  font-size: 20px;
  text-transform: capitalize;
  font-weight: 200;
  color: #1f194c;
  margin: 1em 0;
  z-index: 3;
}

.advertisers-service-sec p {
  color: #575a7b;
  font-size: 15px;
  line-height: 1.6;
  letter-spacing: 0.03em;
  z-index: 3;
}

.advertisers-service-sec .icon-wrapper {
  background-color: #2c7bfe;
  position: relative;
  background-image: ;
  margin: auto;
  font-size: 30px;
  height: 2.5em;
  width: 2.5em;
  color: #ffffff;
  border-radius: 50%;
  display: grid;
  place-items: center;
  transition: 0.5s;
  z-index: 3; 
  background-image: url("assets/images/all-instructor/writing.png");
}

.advertisers-service-sec .service-card:hover:after {
  top: 0%;
}

.service-card .icon-wrapper {
  background-color: #ffffff;
  color: rgb(255, 23, 131);
}

.advertisers-service-sec .service-card:hover .icon-wrapper {
  color: #0dcaf0;
}

.advertisers-service-sec .service-card:hover h3 {
  color: #ffffff;
}

.advertisers-service-sec .service-card:hover p {
  color: #f0f0f0;
}
 </style>
 
 <!-- Why Do Students Choose Global Assignment Support for Last-Minute Assignment Help? -->
   <style>
  
.box4{
  margin-bottom: 90px;
}

 

@keyframes wave {
  0% {
    background-position: 0;
  }
  100% {
    background-position: 1440px;
  }
}

.listar-feature-item-wrapper {
  margin-bottom: 120px;
  padding-left: 27px;
  padding-right: 27px;
}

.listar-feature-item {
  height: calc(100% - 25px);
   
}

.listar-feature-item.listar-feature-has-link
  ~ .listar-feature-fix-bottom-padding.listar-fix-feature-arrow-button-height {
  position: relative;
  display: block;
  width: 100%;
  height: 30px;
}
 

.listar-feature-item .listar-feature-item-inner {
  padding: 50px 30px;
  
  border-radius: 6px;
  z-index: 5;
  position: relative;
  height: 100%;
}

.listar-feature-item .listar-feature-item-inner {
  padding-top: 60px;
  padding-bottom: 60px;
}

.listar-feature-item .listar-feature-item-inner:before {
  border: 0;
  box-shadow: 120px 0px 150px rgba(80, 80, 80, 0.15),
    10px 0px 10px rgba(80, 80, 80, 0.02);
  border-radius: 1000px;
  background: rgba(255, 255, 255, 0);
  background: -moz-linear-gradient(
    left,
    rgba(255, 255, 255, 0) 0%,
    rgba(255, 255, 255, 0) 40%,
    rgba(255, 255, 255, 1) 100%
  );
   
  background: -webkit-linear-gradient(
    left,
    rgba(255, 255, 255, 0) 0%,
    rgba(255, 255, 255, 0) 40%,
    rgba(255, 255, 255, 1) 100%
  );
  background: -o-linear-gradient(
    left,
    rgba(255, 255, 255, 0) 0%,
    rgba(255, 255, 255, 0) 40%,
    rgba(255, 255, 255, 1) 100%
  );
  background: -ms-linear-gradient(
    left,
    rgba(255, 255, 255, 0) 0%,
    rgba(255, 255, 255, 0) 40%,
    rgba(255, 255, 255, 1) 100%
  );
  background: linear-gradient(
    to right,
    rgba(255, 255, 255, 0) 0%,
    rgba(255, 255, 255, 0) 40%,
    rgba(255, 255, 255, 1) 100%
  );
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff',endColorstr='#ffffff',GradientType=1);
}

.listar-feature-item .listar-feature-item-inner:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.listar-feature-right-border {
  position: absolute;
  width: calc(100% + 24px);
  height: calc(100% + 24px);
  top: -12px;
  left: -50%;
  overflow: hidden;
}

.listar-feature-items {
  text-align: center;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.listar-feature-right-border:before,
.listar-hovering-features
  .listar-feature-item
  a:hover
  ~ .listar-feature-item-inner
  .listar-feature-right-border:before {
  border: 11px solid #2f53bf;
}

.listar-feature-right-border:before,
.listar-hovering-features
  .listar-feature-item
  a:hover
  ~ .listar-feature-item-inner
  .listar-feature-right-border:before,
.listar-hovering-features-grey
  .listar-feature-item
  a:hover
  ~ .listar-feature-item-inner
  .listar-feature-right-border:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  border: 11px solid #258bd5;
  border-radius: 800px;
  left: 50%;
  
}

.listar-feature-item .listar-feature-block-content-wrapper {
  position: relative;
  display: block;
  text-decoration: none;
  margin: -30px;
  padding: 30px;
  height: calc(100% + 100px);
}

.listar-features-design-2 .listar-feature-item-wrapper {
  margin-bottom: 120px;
  padding-left: 27px;
  padding-right: 27px;
}

.listar-feature-item.listar-feature-has-link .listar-feature-item-inner:after {
  content: "";
  background-color: #fff;
  z-index: 6;
  position: absolute;
  background-repeat: no-repeat;
  background-position: center center;
}

.listar-feature-icon-wrapper {
  width: 148px;
  height: 148px;
  line-height: 148px;
  border-radius: 500px;
  position: relative;
  background-color: #fff;
  box-shadow: 8px 8px 30px rgba(0, 0, 0, 0.06);
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  left: 50%;
  vertical-align: middle;
  margin-left: -74px;
  top: -66px;
  margin-top: -74px;
  border: 1px solid #258bd5;
  background-color: #258bd9;
   
}

.listar-feature-icon-inner {
  width: 120px;
  height: 120px;
  line-height: 120px;
  border-radius: 500px;
  position: relative;
  display: inline-block;
  vertical-align: middle;
  box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.14);
  background: #fff;
  border: 1px solid #258bd5;
}

.listar-feature-icon-inner div {
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  display: inline-block;
  position: relative;
  width: 120px;
  height: 120px;
  line-height: 120px;
  text-align: left;
}

.listar-feature-icon-inner img {
  position: relative;
  margin: 0 auto;
  vertical-align: middle;
  display: inline-block;
  width: auto;
  left: 50%;
  -webkit-transform: translate(-50%);
  -moz-transform: translate(-50%);
  -ms-transform: translate(-50%);
  -o-transform: translate(-50%);
  transform: translate(-50%);
  height: 55px;
}

.listar-feature-item img,
.listar-feature-item i {
  position: relative;
  display: inline-block;
  border-bottom: 0;
  font-size: 40px;
  top: 0;
  padding: 0;
  color: #258bd5;
}

.listar-feature-with-image .listar-feature-content-wrapper {
  top: 0;
}
.listar-feature-content-wrapper {
  position: relative;
  margin-top: -15.5px;
  
}

.listar-feature-item .listar-feature-item-title {
  padding-top: 0;
  margin: 0 0 30px;
  text-align: center;
  line-height: 1.5;
  
}

.listar-feature-item
  .listar-feature-item-title.listar-feature-counter-added
  > span {
  margin-left: 25px;
  border-radius:  0 50px 50px 0 ;
  border: 1px solid #258bd5;
    
}

.listar-feature-item .listar-feature-item-title > span {
  box-shadow: 15px 20px 30px rgba(80, 80, 80, 0.12),
    5px 0px 40px rgba(80, 80, 80, 0.1);
  padding: 10px 20px;
  display: inline-block;
  position: relative;
  background-color: #258bd5;
  
}

.listar-feature-item .listar-feature-item-title > span span {
  box-shadow: 15px 15px 30px rgba(80, 80, 80, 0.2),
    5px 0px 80px rgba(80, 80, 80, 0.15);
  padding: 10px 0;
  display: inline-block;
  width: 50px;
  height: 50px;
  line-height: 30px;
  white-space: nowrap;
  position: absolute;
  top: -5px;
  left: -40px;
  border-radius: 50px;
  background-color: #fff;
  border: 1px solid #258bd5;
   
}

.listar-feature-item .listar-feature-item-title span {
  display: inline-block;
  font-size: 14px;
  line-height: normal;
  font-weight: 400;
  text-shadow: none;
  border-radius: 50px;
  color: #252525;
  font-size: 18px;
}

.listar-feature-item-excerpt {
  padding: 0 20px;
}

.listar-feature-item-excerpt {
  color: #252525;
  position: relative;
  top: 0;
  width: 100%;
  margin: 0 auto;
  text-align: center;
}

.pset {
  padding-top: 180px;
  padding-bottom: 80px;
}

.listar-map-button-text span {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  font-size: 15px;
  height: 44px;
  line-height: 1.6;
  padding: 10px 25px;
  box-shadow: 0 0 31px rgba(0, 0, 0, 0.65), 0 0 4px rgba(0, 0, 0, 0.06);
  border-radius: 50px;
  background-color: rgba(35, 40, 45, 0.9);
  color: #fff;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
}

.listar-map-button-text span {
  background-color: #fff;
  color: #252525;
  text-shadow: none;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.listar-map-button-text span:after {
  border: 12px solid #fff;
}

.listar-map-button-text span:after {
  content: "";
  position: absolute;
  top: -14px;
  left: -14px;
  width: calc(100% + 28px);
  height: calc(100% + 28px);
  border-radius: 36px;
}

.listar-map-button:hover .listar-map-button-text span {
  padding: 10px 43px 10px 51px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.listar-feature-with-image .listar-feature-item a:before {
  content: "";
  position: absolute;
  top: -74px;
  left: 50%;
  margin-left: -74px;
  width: 148px;
  height: 148px;
  border-radius: 1000px;
  z-index: 10;
}

.listar-feature-item.listar-feature-has-link .listar-feature-item-inner:after {
  margin-left: -25px;
  width: 50px;
  height: 50px;
  border-radius: 50px;
  box-shadow: 10px 10px 40px rgba(80, 80, 80, 0.15),
    15px 15px 30px rgba(80, 80, 80, 0.05), 0 0 120px rgba(80, 80, 80, 0.6);
  bottom: -30px;
  border: 1px solid #258bd5;
  background-size: 40%;
  color: #555;
  line-height: 52px;
}
  
   </style>
   
 

   <style>
 

.blog-slider {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: auto;
  background:  white;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
   
  border-radius: 25px;
  height: 300px;
  transition: all 0.3s;
}
@media screen and (max-width: 992px) {
  .blog-slider {
    max-width: 680px;
    height: 400px;
  }
}
@media screen and (max-width: 768px) {
  .blog-slider {
    min-height: 300px;
    height: 300px;
    /* margin: 180px auto; */
  }
}
@media screen and (max-height: 500px) and (min-width: 992px) {
  .blog-slider {
    height: 350px;
  }
}
 
 
  
 
   </style>
       


<!--         
<div class="el-breadcrumb-wrapper ">
    <div class="container">
        <div class="el-breadcrmb-inner">
            <h1>Global </h1>
            <ul>
                <li>
                    <a href="index.html">home</a>
                </li>
                <li>></li>
                <li>Global</li>
            </ul>
        </div>
    </div>
</div> -->

     
 
 
<section class="boyy">
	<div class=" container" style="margin-top: 100px;">
		
		<div class="row clearfix">
			<div class="content-column topspaceheader col-lg-6 col-md-12 col-sm-12">
           <div class="content">
                 <h1>Dynamic Content for Assignment Help Services</h1>
        
                 <div class=" col-lg-12 col-md-12 col-sm-12 mt-2"style="display: flex; flex-direction:row; gap:20px; justify-content: space-between; flex-wrap:wrap; flex-shrink:2; background-color: #bde0fe; border-radius: 5px; box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, .08); padding: 20px;">
					          <div style="display: flex; justify-content: space-around;"> 
                  <img src="assets\images\star.png" style="height:40px " alt="Customers Served"  >   
									<span style="font-size: 15px; font-weight: bold; margin-left:20px; text-align:justify">2 Million + <br> Customers</span>
                  </div>
                  <div style="display: flex; justify-content: space-around;"> 
                <img src="assets\images\24-7 (1).png" style="height:40px" alt="24/7 Support"  >
                <span  style="font-size: 15px; font-weight: bold; margin-left:20px;text-align:justify "> 24/7 Support <br> with us </span>
							    </div>
                  <div style="display: flex; justify-content: space-around;"> 
                  <img src="assets\images\new-offer.png" style="height:40px  "  alt="Exclusive"  >
									<span   style="font-size: 15px; font-weight: bold; margin-left:20px; text-align:justify" >Exclusive <br>Up to 40% off</span>
                  </div>
			     	</div>
      </div>
				<div>
				</div>
			  
			</div>

			
      <div class="image-column topspaceheader2 col-lg-6 col-md-12 col-sm-12 py-4">
				<div class="inner-column"	style="border: 5px solid #eee5e9; background-color: white; border-radius: 50px 0px 50px 0px;box-shadow: 10px;box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, .08)">
         
					@if ($errors->any())
						<div id="errorAlert" class="alert alert-danger  ">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						<script>
							setTimeout(function () {
								document.getElementById('errorAlert').style.display = 'none';
							}, 10000); 
						</script>
					@endif
					 
					<form id="orderForm" action="/neworder-fromhome" method="POST" enctype="multipart/form-data">
					 
						@csrf
						<div class="contact-form  p-4">
							@if(Auth::user() == '')
								<div class="row">
									<div class="col-md-6 mt-2">
										<div class="form-group">
											<label for="">Name</label>
											<input type="text" name="user_name" class="form-control input-color"
												placeholder="Your Full Name*" required=""
												style="background-color:#f1f1f1; height: 45px;">
										</div>
									</div>
									<div class="col-md-6 mt-2">
										<div class="form-group">
											<label for="">Email</label>

											<input type="email" name="email" class="form-control"
												placeholder="Your Email Address*" required=""
												style="background-color:#f1f1f1; height: 45px;">
										</div>
									</div>
								</div>
								<input type="hidden" name="countrycode" id="country_c">
								<div class="row">
									<div class="col-md-6 mt-2" >
										<div class="form-group">
											<label for="">Number</label>
											<input type="tel" name="mobile" class="form-control" placeholder="Phone*"
												id="phone_number" style="background-color:#f1f1f1;height: 45px;" />
										</div>
									</div>
									<div class="col-md-6 mt-2">
										<div class="form-group">
											<label for="">deadline</label>
											<input type="date" name="delivery_date" id="DeliveryDate" class="form-control"
												required="" placeholder="deadline"
												style="background-color:#f1f1f1;height: 45px;">
										</div>
									</div>
									<!-- <div class="col-md-6 mt-2">
										<div class="form-group">
											<label>Upload Your Assignment</label>
											<input id="file-upload" type="file" class="form-control" name="doc[]" multiple style="background-color:#f1f1f1; height:45px;" /> 
										</div>
									</div>
									<div class="col-md-6 mt-2">
										<div class="form-group">
											<label for="enterTopic">Enter Topic</label>
											<input type="text" name="topic" id="enterTopic" class="form-control" style="background-color:#f1f1f1; height: 45px;" placeholder="Enter Topic" required>
										</div>
									</div> -->
								</div>
							@else
								<div class="row">
									<div class="col-md-12 mt-2">
										<div class="form-group">
											<label for="">deadline</label>
											<input type="date" name="delivery_date" id="DeliveryDate" class="form-control"
												required="" placeholder="deadline"
												style="background-color:#f1f1f1;height: 45px;">
										</div>
									</div>
									<!-- <div class="col-md-12 mt-2">
										<div class="form-group">
											<label>Upload Your Assignment</label>
											<input id="file-upload" type="file" class="form-control" name="doc[]" multiple style="background-color:#f1f1f1;height: 45px;" /> 
										</div>
									</div>
									<div class="col-md-12 mt-2">
										<div class="form-group">
											<label for="enterTopic">Enter Topic</label>
											<input type="text" name="topic" id="enterTopic" class="form-control" style="background-color:#f1f1f1; height: 45px;" placeholder="Enter Topic" required>
										</div>
									</div> -->
								</div>


							@endif
 

							<div class="mt-4">
								<input class="agree"  type="checkbox" required="">&nbsp;I agree with Privacy Policy and Terms &amp; 
   
							</div>
							<div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
              
              <div class="mt-2 p-2 gradient-text card" style="display: flex; flex-direction:row; justify-content:space-around;    border-radius: 50px 0px 50px 0px;">
						  	<span class="priceoff " style="font-size: 28px; font-family: robotomedium; text-transform: uppercase;  border-radius: 10px; padding: 3px;   font-weight: 600;">40% OFF </span>
                 <span class="priceoff" style="font-size: 28px; font-family: robotomedium; text-transform: uppercase;   border-radius: 3px; padding: 3px;   font-weight: 600;">INR 799.72</span>
              </div>
					 
							<div class="col-md-12 content text-center mt-4" >
								<button class=" place-order"  type="submit">Place Order</button>
							</div>
						</div>
					</form>
				</div>
			</div>
        
</section>
    <!-- ***** FAQ Start ***** -->
       <style>
        
        .gradient-text {
  font-family: "Tilt Neon", sans-serif;
  background-image: linear-gradient(
    90deg,
    rgb(118, 167, 63) 0%,
    rgb(51, 143, 118) 40%,
    rgb(55, 141, 167) 50%,
    rgb(117, 152, 242) 70%,
    rgb(144, 118, 236) 100%
  );
  color: transparent;
  background-size: contain;
  background-clip: text;
  -webkit-background-clip: text;
}
 

.boyy {
  background: #162561;
  background-image: radial-gradient(
      circle at 20% 100%,
      rgba(184, 184, 184, 0.1) 0%,
      rgba(184, 184, 184, 0.1) 33%,
      rgba(96, 96, 96, 0.1) 33%,
      rgba(96, 96, 96, 0.1) 66%,
      rgba(7, 7, 7, 0.1) 66%,
      rgba(7, 7, 7, 0.1) 99%
    ),
    linear-gradient(40deg, #040a22, #162561, #202e64, #6f7aa6);
  background-repeat: no-repeat;
  background-size: cover;
  margin-top: 100px;
  min-height: 70vh;
}

.sectn {
  display: grid;
  grid-template-columns: 50% 45%;
  place-items: center;
  gap: 10px;
  min-height: 70vh;
  padding: 20px 60px;
  margin-top: 100px;
}

/* CONTENT */

.content {
   margin-top: 50px;
  
}

.content h1 {
  font-family: "Comfortaa", sans-serif;
  font-size: clamp(2rem, 4vw, 3.5rem);
  font-weight: 700;
  line-height: 1.2;
  letter-spacing: 1px;
  margin-bottom: 36px;
  /* color: #fff; */
  font-family: "Tilt Neon", sans-serif;
  background-image: linear-gradient(
    90deg,
    rgb(118, 167, 63) 0%,
    rgb(51, 143, 118) 40%,
    rgb(55, 141, 167) 50%,
    rgb(117, 152, 242) 70%,
    rgb(144, 118, 236) 100%
  );
  color: transparent;
  background-size: contain;
  background-clip: text;
  -webkit-background-clip: text;
}

.content p {
  font-size: clamp(0.9rem, 3vw, 1.25rem);
  font-weight: 300;
  line-height: 1.5;
  margin-bottom: 30px;
  color: #fff;
}

.content button {
  background: #eaeaea;
  color: #202134;
  font-size: clamp(0.9rem, 4vw, 1rem);
  font-weight: 600;
  border: 0;
  outline: 0;
  padding: 8px 14px;
  border-radius: 30px;
  transform: scale(1);
  transition: all 0.4s ease-in;
  cursor: pointer;
  width: 100%;
}

.content button:is(:hover, :focus) {
  transform: scale(0.98);
  background-color: #003566;
  color: #eaeaea;
}

/* SLIDER */

 

.cost {
  position: absolute;
  top: 8px;
  right: 6px;
  background: rgba(255, 255, 255, 0.3);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
  box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
  border-radius: 30px;
  padding: 6px 10px;
  color: #fff;
  font-size: clamp(0.8rem, 4vw, 0.9rem);
  font-weight: 600;
}

.dark-text {
  color: #202134;
}

 

.overlay {
  position: absolute;
  display: flex;
  flex-direction: column;
  justify-content: center;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 150px;
  padding: 10px 20px;
  background: rgba(93, 95, 145, 0.2);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border-top: 1px solid rgba(255, 255, 255, 0.3);
  color: #fff;
  border-radius: 0 0 20px 20px;
}

.overlay h1 {
  font-size: clamp(1.2rem, 4vw, 1.5rem);
  font-weight: 600;
}

.overlay p {
  font-size: clamp(0.8rem, 4vw, 0.9rem);
  font-weight: 300;
  line-height: 1.3;
}

.ratings {
  display: flex;
  column-gap: 10px;
  margin-top: -6px;
}

.ratings span {
  font-size: clamp(0.8rem, 4vw, 0.9rem);
  font-weight: 300;
}

.star {
  color: #afe312;
}

.logo {
  position: fixed;
  right: -20px;
  bottom: -30px;
  z-index: 10;
}

.logo img {
  width: 120px;
}

@media (max-width: 890px) {
  .logo {
    right: -10px;
    bottom: -20px;
  }

  .logo img {
    width: 80px;
  }
}

@media (max-width: 1050px) {
 
}

@media (max-width: 930px) {
  .sectn {
    grid-template-columns: 100%;
    /* grid-template-rows: 55% 40%; */
    grid-template-areas:
      "slider"
      "content";
    place-items: center;
    gap: 64px;
    padding: 60px;
  }

  

  .content {
    grid-area: content;
    text-align: center;
  }

  .content h1 {
    margin-bottom: 20px;
  }
}
  .agree{
    height: 13px !important;
  }

@media (max-width: 470px) {
   .sectn {
    padding: 40px 40px 60px;
  }

     
  
}
 .gradient-text {
        background: linear-gradient(to right, red, blue);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

      </style>  

    
   <div id="tsparticles"></div>
   <section class="boyy"> 
  <div class="sectn">
    <div class="content">
      <h1 >Dynamic Content for Assignment Help Services</h1>
        
      <div class=" col-lg-12 col-md-12 col-sm-12 mt-2"style="display: flex; flex-direction:row; justify-content: space-around; flex-wrap:wrap; flex-shrink:2; background-color: #bde0fe; border-radius: 5px; box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, .08); padding: 20px;">
					          <div style="display: flex; justify-content: space-around;"> 
                  <img src="assets\images\star.png" style="height:40px " alt="Customers Served"  >
									<span style="font-size: 15px; font-weight: bold; margin-left:20px;">5 Million+ <br> Customers Served</span>
                  </div>
                  <div style="display: flex; justify-content: space-around;"> 
                <img src="assets\images\24-7 (1).png" style="height:40px" alt="24/7 Support"  >
                <span  style="font-size: 15px; font-weight: bold; margin-left:20px; "> 24/7 Support <br> with us </span>
							  </div>
                <div style="display: flex; justify-content: space-around;"> 
                  <img src="assets\images\new-offer.png" style="height:40px  "  alt="Exclusive"  >
									<span   style="font-size: 15px; font-weight: bold; margin-left:20px; " >Exclusive <br>Up to 40% off</span>
                  </div>
				</div>
    </div>
     

     
        <div class="image-column topspaceheader2 col-lg-12 col-md-12 col-sm-12">
				<div class="inner-column"	style="border: 5px solid #eee5e9; background-color: white; border-radius: 50px 0px 50px 0px;box-shadow: 10px;box-shadow: 0 1rem 1rem 0 rgba(0, 0, 0, .08)">
         
					@if ($errors->any())
						<div id="errorAlert" class="alert alert-danger  ">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						<script>
							setTimeout(function () {
								document.getElementById('errorAlert').style.display = 'none';
							}, 10000); 
						</script>
					@endif
					 
					<form id="orderForm" action="/neworder-fromhome" method="POST" enctype="multipart/form-data">
					 
						@csrf
						<div class="contact-form  p-4">
							@if(Auth::user() == '')
								<div class="row">
									<div class="col-md-6 mt-2">
										<div class="form-group">
											<label for="">Name</label>
											<input type="text" name="user_name" class="form-control input-color"
												placeholder="Your Full Name*" required=""
												style="background-color:#f1f1f1; height: 45px;">
										</div>
									</div>
									<div class="col-md-6 mt-2">
										<div class="form-group">
											<label for="">Email</label>

											<input type="email" name="email" class="form-control"
												placeholder="Your Email Address*" required=""
												style="background-color:#f1f1f1; height: 45px;">
										</div>
									</div>
								</div>
								<input type="hidden" name="countrycode" id="country_c">
								<div class="row">
									<div class="col-md-6 mt-2" >
										<div class="form-group">
											<label for="">Number</label>
											<input type="tel" name="mobile" class="form-control" placeholder="Phone*"
												id="phone_number" style="background-color:#f1f1f1;height: 45px;" />
										</div>
									</div>
									<div class="col-md-6 mt-2">
										<div class="form-group">
											<label for="">deadline</label>
											<input type="date" name="delivery_date" id="DeliveryDate" class="form-control"
												required="" placeholder="deadline"
												style="background-color:#f1f1f1;height: 45px;">
										</div>
									</div>
									<div class="col-md-6 mt-2">
										<div class="form-group">
											<label>Upload Your Assignment</label>
											<input id="file-upload" type="file" class="form-control" name="doc[]" multiple style="background-color:#f1f1f1; height:45px;" /> 
										</div>
									</div>
									<div class="col-md-6 mt-2">
										<div class="form-group">
											<label for="enterTopic">Enter Topic</label>
											<input type="text" name="topic" id="enterTopic" class="form-control" style="background-color:#f1f1f1; height: 45px;" placeholder="Enter Topic" required>
										</div>
									</div>
								</div>
							@else
								<div class="row">
									<div class="col-md-12 mt-2">
										<div class="form-group">
											<label for="">deadline</label>
											<input type="date" name="delivery_date" id="DeliveryDate" class="form-control"
												required="" placeholder="deadline"
												style="background-color:#f1f1f1;height: 45px;">
										</div>
									</div>
									<div class="col-md-12 mt-2">
										<div class="form-group">
											<label>Upload Your Assignment</label>
											<input id="file-upload" type="file" class="form-control" name="doc[]" multiple style="background-color:#f1f1f1;height: 45px;" /> 
										</div>
									</div>
									<div class="col-md-12 mt-2">
										<div class="form-group">
											<label for="enterTopic">Enter Topic</label>
											<input type="text" name="topic" id="enterTopic" class="form-control" style="background-color:#f1f1f1; height: 45px;" placeholder="Enter Topic" required>
										</div>
									</div>
								</div>


							@endif
 

							<div class="mt-4">
								<input class="agree"  type="checkbox" required="">&nbsp;I agree with Privacy Policy and Terms &amp; 
   
							</div>
							<div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
              
						<div class="mt-2 p-2 gradient-text card" style="display: flex; flex-direction:row; justify-content:space-around;    border-radius: 50px 0px 50px 0px;">
						  	<span class="priceoff " style="font-size: 28px; font-family: robotomedium; text-transform: uppercase;  border-radius: 10px; padding: 3px;   font-weight: 600;">40% OFF </span>
                 <span class="priceoff" style="font-size: 28px; font-family: robotomedium; text-transform: uppercase;   border-radius: 3px; padding: 3px;   font-weight: 600;">INR 799.72</span>
              </div>
					 
							<div class="col-md-12 content text-center mt-4" >
								<button class=" place-order"  type="submit">Place Order</button>
							</div>
						</div>
					</form>
				</div>
			</div>
        
    
     
   
  </div>
  </section>
  

 

 

<!-- Why Choose Us for Assignment Help? -->
 <section class="py-5" >
 <div class="container">
    <div class="text-center mb-2-8 mb-lg-6 ">
        <h2 class="display-18 display-md-16 display-lg-14">Why Choose Us for Assignment Help?</h2>
        <p>For academic success, the right assignment help can make a difference. Here's why we are different:</p>
    </div>
    <div class="row align-items-center">
        <div class="col-lg-4 col-md-6 col-sm-6  mb-2-9 mb-sm-0">
            <div class="pr-md-3">
                <div class="text-center text-sm-right mb-2-9">
                    <div class="mb-4"> 
                        <img src="assets\images\24-7 (1).png" alt="..." class="rounded-circle" style="width:50px; height:50px;">
                    </div>
                    <h4 class="sub-info">24/7 Live Assistance:</h4>
                    <p class="display-30 mb-0">Our strong customer care service helps clients 24/7 with updates on their work.</p>
                </div>
                <div class="text-center text-sm-right">
                    <div class="mb-4">
                    <img src="assets\images\high-quality.png" alt="..." class="rounded-circle" style="width:50px; height:50px;">
                    </div>
                    <h4 class="sub-info">Guaranteed Quality:</h4>
                    <p class="display-30 mb-0">We will deliver assignments that meet the highest academic standards. This will ensure your success.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
            <div class="why-choose-center-image">
              
                <!-- <img src="https://www.bootdey.com/image/350x350/FF7F50/000000" alt="..." class="rounded-circle"> -->
                	<img src="assets/images/all-instructor/why choose as.png" alt="" class="rounded-circle">
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="pl-md-3">
                <div class="text-center text-sm-left mb-2-9">
                    <div class="mb-4">
                    <img src="assets\images\book-stack.png" alt="..." class="rounded-circle" style="width:50px; height:50px;">
                    </div>
                    <h4 class="sub-info">Assistance for All Subjects:</h4>
                    <p class="display-30 mb-0">We offer expert help on any subject. You'll get quality assistance, no matter your field. Our team is equipped to handle everything from assignments to research projects.</p>
                </div>

                <div class="text-center text-sm-left">
                    <div class="mb-4">
                    <img src="assets\images\trust (1).png" alt="..." class="rounded-circle" style="width:50px; height:50px;">
                    </div>
                    <h4 class="sub-info">Trusted References and Resources:</h4>
                    <p class="display-30 mb-0">All assignments use credible, well-researched sources for accuracy and quality.
                    </p>
                </div>
            </div>
        </div>
    </div>
  </div>

 </section>
 
  <!-- Get Your Well-Written Assignment in 3 Easy Steps -->
  <div class="container">
    <h2 >Get Your Well-Written Assignment in 3 Easy Steps</h2>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="road-map-main">
            
          <div class="road-map-wrapper">
            <div class="road-map-circle">
              <span class="road-map-circle-text d-flex align-items-center justify-content-center">Place</span>
            </div>
            <div class="road-map-card">
              <h3 class="card-head">Place Your Order</h3>
              <p class="card-text">
              Click on the “Order Now” button to access our simple order form. Fill in your assignment details: topic, word count, deadline, and instructions. Then, submit.
              </p>
            </div>
          </div>
          <div class="road-map-wrapper">
            <div class="road-map-circle">
              <span class="road-map-circle-text d-flex align-items-center justify-content-center">Pay</span>
            </div>
            <div class="road-map-card">
              <h3 class="card-head">Pay for Your Assignment</h3>
              <p class="card-text">Use our secure payment gateway to pay via PayPal, credit, or debit card. We ensure 100% safe and hassle-free transactions. </p>
            </div>
          </div>
          <div class="road-map-wrapper">
            <div class="road-map-circle">
              <span class="road-map-circle-text d-flex align-items-center justify-content-center">Receive</span>
            </div>
            <div class="road-map-card">
              <h3 class="card-head">Receive Your Assignment</h3>
              <p class="card-text">A dedicated writer will finish your assignment and email it to you. With your assignment, you'll get a free "Plagiarism Report" and an "AI Detection Report." We ensure the work's originality and authenticity. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    




  <!-- Benefits of Getting Help with Global Assignment Support -->
  <section id="what-we-do">
		<div class="container">
			<h2 >Benefits of Getting Help with Global Assignment Support</h2>
			<p  >Global Assignment Support will meet your academic needs with care and professionalism. We serve students at all academic levels. Our unique benefits set us apart from other providers.</p>
			<div class="row mt-5">
			 <div class="col-lg-4 col-md-4 col-sm-12">
					<div class="card">
           
						<div class="card-block block-1">
							<h3 class="card-title">Skilled Assignment Writers:</h3> 
							<p class="card-text">Our experts have decades of experience in so many spheres. They will handle your assignments. They know their stuff.</p>
							<a href="#" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a> 
						</div>
					</div>
				</div>
                <div class="col-lg-4 col-md-4 col-sm-12">
					<div class="card">
						<div class="card-block block-2">
							<h3 class="card-title">All-in-One Support:</h3>
							<p class="card-text">We provide full support to ensure your assignment is complete and of high quality. This includes writing, editing, proofreading, and help with specific sections.
                            </p>
							<a href="#" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
                <div class="col-lg-4 col-md-4 col-sm-12">
					<div class="card">
						<div class="card-block block-3">
							<h3 class="card-title">Original Content Guaranteed:</h3>
							<p class="card-text">We do research and write assignments from scratch. Offering original content with no plagiarism.</p>
							<a href="#" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
					<div class="card">
						<div class="card-block block-4">
							<h3 class="card-title">Student-Friendly Pricing:</h3>
							<p class="card-text">We understand students have financial issues. So, we offer low prices. We will not sacrifice the quality of the content.</p>
							<a href="#" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
                <div class="col-lg-4 col-md-4 col-sm-12">
					<div class="card">
						<div class="card-block block-5">
							<h3 class="card-title">Easy Money-Back Option:</h3>
							<p class="card-text">We guarantee your satisfaction; if not, our easy refund policy will keep you free from worry.</p>
							<a href="#" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
                <div class="col-lg-4 col-md-4 col-sm-12">
					<div class="card">
						<div class="card-block block-6">
							<h3 class="card-title">Fast Delivery Times:</h3>
							<p class="card-text">We know deadlines are important. We deliver on time, so you can submit your assignments without stress. </p>
							<a href="#" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>
  <!-- Grab Your Discounted Offer Today! -->
   <section class="box0">
    <div class="box">
  <div class="diamond"  >
       
  
    
  </div>
  <div class="blog-card card">
    <div class="meta">
      <div class="photo" style="background-image: url(assets/images/all-instructor/blog-3.jpg)"></div>
      
    </div>
    <div class="description">
    <h2 >Grab Your Discounted Offer Today!</h2>
    <p>Do not let this opportunity slip and take advantage of our special lower rates! Now is the perfect time to get professional help with your academic tasks at a reduced price. If you struggle with essays or research papers, our offers can help. We guarantee excellent quality support at an affordable price for the budget. Our staff is here to help you achieve academic success at a fraction of the cost.</p>
  
       <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>  
 </div>
 <script>
    const box = document.querySelector(".box");
  let isPushed = false;
  box.addEventListener("click", () => {
  if (box.classList.contains("moving")) return;
  box.classList.add("moving");
  box.classList.remove("pushed", "reverse");
  void box.offsetWidth;
  if (isPushed) {
    box.classList.add("reverse");
  } else {
    box.classList.add("pushed");
  }
  isPushed = !isPushed;
   });
   box.addEventListener("animationend", () => {
  box.classList.remove("moving");
   });

   </script>
 </section>

   <!-- new section  -->
     <section class="Grab"> 
   <div class="blog-card card">
    <div class="meta">
      <div class="photo" style="background-image: url(assets/images/all-instructor/blog-3.jpg)"></div>
      
    </div>
    <div class="description">
    <h2 >Grab Your Discounted Offer Today!</h2>
    <p>Do not let this opportunity slip and take advantage of our special lower rates! Now is the perfect time to get professional help with your academic tasks at a reduced price. If you struggle with essays or research papers, our offers can help. We guarantee excellent quality support at an affordable price for the budget. Our staff is here to help you achieve academic success at a fraction of the cost.</p>
  
       <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
  </section>
   <style>
    /*PEN STYLES*/

 
.Grab {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  margin-bottom:20px;
  background: #cecece;
}

 

.blog-card {
  display: flex;
  flex-direction: column;
  margin: 1rem auto;
  box-shadow: 0 3px 7px -1px rgba(#000, .1);
  margin-bottom: 1.6%;
  background: $color_white;
  line-height: 1.4;
  font-family: sans-serif;
  border-radius: 5px;
  overflow: hidden;
  z-index: 0;
  a {
    color: inherit;
    &:hover {
      color: $color_prime;
    }
  }
  &:hover {
    .photo {
      transform: scale(1) rotate(0deg);
    }
  }
  .meta {
    position: relative;
    z-index: 0;
    height: 200px;
  }
  .photo {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: center;
    transition: transform .2s;
  }
  .details,
  .details ul {
    margin: auto;
    padding: 0;
    list-style: none;
  }

  .details {
    position: absolute;
    top: 0;
    bottom: 0;
    left: -100%;
    margin: auto;
    transition: left .2s;
    background: rgba(#000, .6);
    color: $color_white;
    padding: 10px;
    width: 100%;
    font-size: .9rem;
    a {
      text-decoration: dotted underline
    }
    ul li {
      display: inline-block;
    }
    .author:before {
      font-family: FontAwesome;
      margin-right: 10px;
      content: "\f007";
    }

    .date:before {
      font-family: FontAwesome;
      margin-right: 10px;
      content: "\f133";
    }

    .tags {
      ul:before {
        font-family: FontAwesome;
        content: "\f02b";
        margin-right: 10px;
      }
      li {
        margin-right: 2px;
        &:first-child {
          margin-left: -4px;
        }
      }
    }
  }
  .description {
    padding: 1rem;
    background: $color_white;
    position: relative;
    z-index: 1;
    h1,
    h2 {
      font-family: Poppins, sans-serif;
    }
    h1 {
      line-height: 1;
      margin: 0;
      font-size: 1.7rem;
    }
    h2 {
      font-size: 1rem;
      font-weight: 300;
      text-transform: uppercase;
      color: $color_grey_dark;
      margin-top: 5px;
    }
    .read-more {
      text-align: right;
      a {
        color: $color_prime;
        display: inline-block;
        position: relative;
        &:after {
          content: "\f061";
          font-family: FontAwesome;
          margin-left: -10px;
          opacity: 0;
          vertical-align: middle;
          transition: margin .3s, opacity .3s;
        }

        &:hover:after {
          margin-left: 5px;
          opacity: 1;
        }
      }
    }
  }
  p {
    position: relative;
    margin: 1rem 0 0;
    &:first-of-type {
      margin-top: 1.25rem;
      &:before {
        content: "";
        position: absolute;
        height: 5px;
        background: $color_prime;
        width: 35px;
        top: -0.75rem;
        border-radius: 3px;
      }
    }
  }
  &:hover {
    .details {
      left: 0%;
    }
  }


  @media (min-width: 640px) {
    flex-direction: row;
    max-width: 700px;
    .meta {
      flex-basis: 40%;
      height: auto;
    }
    .description {
      flex-basis: 60%;
      &:before {
        transform: skewX(-3deg);
        content: "";
        background: #fff;
        width: 30px;
        position: absolute;
        left: -10px;
        top: 0;
        bottom: 0;
        z-index: -1;
      }
    }
    &.alt {
      flex-direction: row-reverse;
      .description {
        &:before {
          left: inherit;
          right: -10px;
          transform: skew(3deg)
        }
      }
      .details {
        padding-left: 25px;
      }
    }
  }
}
   </style>
   
    <!-- end section -->


       <!-- new section -->
    
 
  <style>
    
   
  .felxy{
    
      width: 100%;
      /* height: 70vh; */
      display: flex;
      flex-direction:row;
      justify-content: center;
      align-items: center;
      align-content: center;
      background: rgb(224, 224, 224);
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    flex-wrap:wrap;
     flex-shrink:2;
     /* margin: 30px; */
    
  }
.swiper {
  position: relative;
      width: 95%;
    max-width: 450px;
    height: 300px;
  }
.white-container{
/* background-color: aliceblue; */
  
width: 100%;
padding: 20px;
max-width: 600px;
height: 350px;
margin-bottom: 30px;
/* border-radius: 6px;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.301), 0 6px 20px 0 rgba(0, 0, 0, 0.26); */
}
  .swiper-slide {
    text-align: center;
    font-size: 18px;
   background-repeat: no-repeat;
   background-position: center;
   background-size: cover;
    display: flex;
   
    justify-content: center;
    align-items: center;
    border-radius: 6px;
  }
  .image--1{
      background-image: linear-gradient(
        #333333a4,#333333a4
       ), url("assets/images/all-instructor/blog-1.jpg");
  }
  .image--2{
      background-image: linear-gradient(
        #333333a4,#333333a4
       ), url("assets/images/all-instructor/blog-2.jpg");
  }
  .image--3{
      background-image: linear-gradient(
        #333333a4,#333333a4
       ), url("assets/images/all-instructor/blog-3.jpg");
  }
  .image--4{
      background-image: linear-gradient(
        #333333a4,#333333a4
       ), url("assets/images/all-instructor/blog-4.jpg");
  }
  .image--5{ 
      background-image: linear-gradient(     #333333a4,#333333a4
       ), url("assets/images/all-instructor/blog-5.jpg");
  }
  .swiper-slidee img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .carr{
    position: absolute;
    padding: 30px;
    z-index: 1000;
    color: aliceblue;
    display: flex;
    flex-direction: column;
    margin: 0;
  }
  .carr a{
    font-size: 25px;
    text-decoration: none;
     padding: 5px;
    background-color: #8d99ae;
    color: aliceblue;
     
    /* margin: 30px 0 40px 0; */
       align-items: center;
    width: 100px;
    font-size: 15px;
  }.carr p{
    font-size: 15px;
  }
  .carr {
    text-align: left;
    font-size: 2rem;
  }
  .item{
    margin-top: 90px;
  }
</style>

<!-- Swiper -->
 <section class="felxy py-4"> 
      <div class="container"> 
        <div class="row clearfix"> 
        <!-- <div class="felxy" > -->
        <div class="white-container">
        <h2 class="py-4">Grab Your Discounted Offer Today!</h2>
        <p>Do not let this opportunity slip and take advantage of our special lower rates! Now is the perfect time to get professional help with your academic tasks at a reduced price. If you struggle with essays or research papers, our offers can help. We guarantee excellent quality support at an affordable price for the budget. Our staff is here to help you achieve academic success at a fraction of the cost.</p>
        <div class=" col-lg-12 col-md-12 col-sm-12 mb-5"style="display: flex; flex-direction:row; justify-content: space-between; flex-wrap:wrap; flex-shrink:2;   padding: 20px;">
					          <div style="display: flex; justify-content: space-around;"> 
                  <img src="assets\images\trust.png" style="height:40px " alt="Customers Served"  >
									<span style="font-size: 15px; font-weight: bold; margin-left:20px;">Trust <br> pilot</span>
                  </div>
                  <div style="display: flex; justify-content: space-around;"> 
                <img src="assets\images\24-7.png" style="height:40px" alt="24/7 Support"  >
                <span  style="font-size: 15px; font-weight: bold; margin-left:20px; "> 24/7 <br> services</span>
							  </div>
                <div style="display: flex; justify-content: space-around;"> 
                <img src="assets\images\star.png" style="height:40px"  alt="Exclusive" >
									<span   style=" font-size: 15px; font-weight: bold; margin-left:20px;"> Client <br> Reviews</span>
                  </div> 
				</div>
       </div>
        <div class="col-lg-6 col-md-6 col-sm-12"> 
        <div class="felxy" >
        <!-- <div class="white-container"> -->
        <div class="swiper mySwiper">
    
    <div class="swiper-wrapper">
      <div class="swiper-slide image--1">
        <div class="carr">
          <h1>Get 40% off on your next deal with us</h1>
          <a href="">Order now</a>
          <p>Don't Rush We are loading your flights.</p>
          <P style="color: #1c9c9c9;"> Made with love by Manaregr8</P>
        
        </div>
      </div>
      <div class="swiper-slide image--2">
        <div class="carr">
          <h1>Get 40% off on your next deal with us</h1>
          <a href="">Order now</a>

          <p>Loading Data</p>
        <P style="color: #1c9c9c9;"> Made with love by Manaregr8</P>
        </div>
      </div>
      <div class="swiper-slide image--3">
        <div class="carr">
          <h1>Get 40% off on your next deal with us</h1>
          <a href="">Order now</a>

          <p>Getting The Best deals for you.</p>
          <P style="color: #1c9c9c9;"> Made with love by Manaregr8</P>
        
        </div>
      </div>
      <div class="swiper-slide image--4">
        <div class="carr">
          <h1>Get 40% off on your next deal with us</h1>
          <a href="">Order now</a>

          <p>Beautifying site.</p>
          <P style="color: #1c9c9c9;"> Made with love by Manaregr8</P>
        
        </div>
      </div>
      <div class="swiper-slide image--5">
        <div class="carr">
          <h1>Get 40% off on your next deal with us</h1>
          <a href="">Order now</a>
          <p>All Most There!</p>
          <P style="color: #1c9c9c9;"> Made with love by Manaregr8</P>
        </div>
      </div>
    </div>
    <!-- </div> -->

     
  
     
</div>
</div>  
  </div>  
  
      </div> 
      </section>
 

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
      autoplay:{
          delay:2500,
          disableOnInteraction: false,
      },
  });
</script>



    <!-- end new section -->

    <!-- Services We Offer for Your Research Paper -->
<section id="advertisers" class="advertisers-service-sec pt-5 pb-5">
  <div class="container">
    <div class="row">  
      <div class="section-header text-center">
        <h2 class="fw-bold fs-1">
        Services
          <span class="b-class-secondary"> We Offer for Your </span> Research Paper
        </h2>
        <p class="sec-icon"><i class="fa-solid fa-gear"></i></p>
        <p>At Global Assignment Support, we know that writing a research paper is hard. We are here for you; it's always good to know that we all can always get the help that you need. Be you at the stages of getting your ideas down on paper or if you need to polish your existing work, we can help you.</p>
      </div>
    </div>
    <div class="row mt-5 mt-md-4 row-cols-1 row-cols-sm-1 row-cols-md-3 justify-content-center">
      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
          <i class="bi bi-person-circle"></i>
          </div>
          <h3>Writing from Scratch:</h3>
          <p>If you need a new research paper, our experts will write one. It will be well-researched, well-structured, and meet your academic requirements.
          </p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
          <i class="bi bi-person-circle"></i>
          </div>
          <h3>Editing & Review:</h3>
              <p>Already have a draft? Our team will review and enhance your paper, ensuring it's polished to perfection. We ensure clarity, coherence, and correct grammar and formatting. This helps you submit a perfect piece.
              </p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="icon-wrapper">
          <i class="bi bi-person-circle"></i>
          </div>
          <h3>Section Writing:</h3>
              <p>Stuck on a particular section, like the methodology or literature review? We provide targeted support. We help with specific parts of your paper to ensure it meets academic standards.
              </p>
        </div>
      </div>
      
    </div>
  </div>
</section>
 
<!-- Why Do Students Choose Global Assignment Support for Last-Minute Assignment Help? -->
<section > 
   
 <div class="pset">
  
  <div class="container">
  <div class="box4">
     <h2>Why Do Students Choose Global Assignment Support for Last-Minute Assignment Help?</h2>
   <p>At Global Assignment Support, we know the stress behind last-minute assignments. Whether it is a surprise deadline or a difficult topic, our team of experts stands ready to assist. We provide dependable, last-minute assignment help. It will ensure that you meet your deadlines without reducing the standard of work. Students across the world rely on our services. We provide exact assignment help. Your work will be well-structured, researched, and meet the standards of academics.</p>

     </div>
    <div class="row listar-feature-items">
    
      <div class="col-lg-4 col-md-4 col-sm-12 listar-feature-item-wrapper listar-feature-with-image listar-height-changed " data-aos="fade-zoom-in" data-aos-group="features" data-line-height="25.2px">
        <div class="listar-feature-item listar-feature-has-link">

           

          <div class="listar-feature-item-inner">

            <div class="listar-feature-right-border"></div>

            <div class="listar-feature-block-content-wrapper">
              <div class="listar-feature-icon-wrapper">
                <div class="listar-feature-icon-inner">
                  <div>
                    <img alt="Reliable Assistance Anytime" class="listar-image-icon" src="assets/images/all-instructor/WhatsApp Image 2024-09-02 at 17.47.12_e1ba1275.jpg">
                  </div>  
                </div>
              </div>

              <div class="listar-feature-content-wrapper" style="padding-top: 0px;">

                <div class="listar-feature-item-title listar-feature-counter-added">
                  <span><span>01</span> Reliable Assistance Anytime </span>
                </div>

                <div class="listar-feature-item-excerpt">Need help with assignments at the last minute? We've got you covered. Our experts are available 24/7 for prompt, professional support. We ensure that your assignments are always on time.</div>

              </div>
            </div>
          </div>
        </div>
        <div class="listar-feature-fix-bottom-padding listar-fix-feature-arrow-button-height"></div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 listar-feature-item-wrapper listar-feature-with-image listar-height-changed" data-aos="fade-zoom-in" data-aos-group="features" data-line-height="25.2px">
        <div class="listar-feature-item listar-feature-has-link">

         

          <div class="listar-feature-item-inner">

            <div class="listar-feature-right-border"></div>

            <div class="listar-feature-block-content-wrapper">
              <div class="listar-feature-icon-wrapper">
                <div class="listar-feature-icon-inner">
                  <div>
                    <img alt="Customized Solutions for Every Need " class="listar-image-icon" src="assets/images/all-instructor/WhatsApp Image 2024-09-02 at 17.47.12_e1ba1275.jpg">
                  </div>
                </div>
              </div>

              <div class="listar-feature-content-wrapper" style="padding-top: 0px;">

                <div class="listar-feature-item-title listar-feature-counter-added">
                  <span><span>02</span>
                  Customized Solutions for Everyone</span>
                </div>

                <div class="listar-feature-item-excerpt">Get assignments tailored to your exact requirements. We offer tailored solutions. Each project will meet your unique academic goals and specifications.</div>

              </div>
            </div>
          </div>
        </div>
        <div class="listar-feature-fix-bottom-padding listar-fix-feature-arrow-button-height"></div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 listar-feature-item-wrapper listar-feature-with-image listar-height-changed" data-aos="fade-zoom-in" data-aos-group="features" data-line-height="25.2px">
        <div class="listar-feature-item listar-feature-has-link">

          

          <div class="listar-feature-item-inner">

            <div class="listar-feature-right-border"></div>

            <div class="listar-feature-block-content-wrapper">
              <div class="listar-feature-icon-wrapper">
                <div class="listar-feature-icon-inner">
                  <div>
                    <img alt="User-Friendly Ordering Process" class="listar-image-icon" src="assets/images/all-instructor/WhatsApp Image 2024-09-02 at 17.47.12_e1ba1275.jpg">
                  </div>
                </div>
              </div>

              <div class="listar-feature-content-wrapper" style="padding-top: 0px;">

                <div class="listar-feature-item-title listar-feature-counter-added">
                  <span><span>03</span>
                  User-Friendly Ordering Process</span>
                </div>

                <div class="listar-feature-item-excerpt">Placing an order has never been easier. With a few clicks, you can provide your assignment details and get started. Our seamless process ensures you receive help without any hassle.</div>

              </div>
            </div>
          </div>
        </div>
        <!-- <div class="listar-feature-fix-bottom-padding listar-fix-feature-arrow-button-height"> </div> -->
      </div>
    </div>
  </div>
</div>
</section>
  
<section id="parent-right">
 
<div class="container"> 
  <div class="child">

    <div class="scrollable-content">
    <div class="el-blog-single-wrapper">
		<div class="container">
			<div class="row ">
				<div class="col-lg-6 col-md-6">
					<div class="el-inner-blog-box el-blog-single">
						<div class="el-blogsingle-img">
							<!-- <img src="assets/images/all-instructor/blog-4.jpg" alt=""> -->
						</div>
						<div class="el-blogsingle-content">
							<h1 class="el-blog-title">Dissertation Writing Help </h1>
							
                            <h2 style="font-size:25px; " class=" mt-3 mb-3"> Get the Best Dissertation Writing Services for Students
                            </h2>
							<p style="text-align:justify ">When it comes to your academic success, compromising on quality is not an option. At Global Assignment supportte  , we know a dissertation is vital to your studies. It requires great skill and dedication. We offer excellent, tailored dissertation writing help. It is for students aiming for the highest grades.</p>
							<p style="text-align:justify ">Our team has experienced writers and researchers. They know various academic fields. So, your dissertation will be well-researched and meet the highest standards. Our <b>dissertation assistance</b>  will provide you with original, well-researched content. It will reflect your hard work and dedication.</p>
							<p style="text-align:justify ">We know that writing a dissertation can be daunting. It's tough to balance it with other academic work. That's why our online dissertation help is here to support you. We can help, from choosing a topic to your final submission. Whether you need help with research, writing, or editing, we are here to assist you every step of the way.</p>
							<p style="text-align:justify ">We are committed to delivering high-quality dissertations. We feel great satisfaction in aiding the students in their academic endeavors. Our  <b>dissertation writing services</b> will make your work stand out. It will help you succeed. Choose Global Assignment supportte   for expert, reliable dissertation help. It will boost your academic success.</p>
                          
							<h2 style="font-size:25px;" class=" mt-3 mb-3">What Is Expert Dissertation Writing Help Service?</h2>
							<p style="text-align:justify ">Our expert  <b>dissertation writing service</b> helps students at every stage of their dissertation. We offer help for your master's or Phd dissertation. Our goal is to meet the highest quality and academic standards. We provide key services: topic selection, research, data analysis, writing, editing, and proofreading.</p>
						    
								<p><b>A. Topic Selection: </b> We help you find a topic that fits your interests and academic requirements. It must be relevant and compelling.</p>
								<p><b>B. Research Assistance: </b> Our experts guide you in gathering and analyzing data. This will ensure your research is robust and well-supported.</p>
								<p><b>C. Writing: </b> We help you write a clear, structured dissertation that meets academic standards.</p>
								<p><b>D. Editing and Proofreading: </b> We will make your dissertation error-free. It must meet all formatting and style guidelines. Our editing and proofreading services are meticulous.</p>
								 
							 
						 
						<p style="text-align:justify">We tailor our  <b>best dissertation writing services</b> to fit your program. They suit both master's and Phd dissertations.</p>
						<p style="text-align:justify">We take pride in our top-notch dissertation help online. We ensure that every aspect of your dissertation is handled with care. Trust Global Assignment supportte . We have the expertise to help your dissertation succeed. We offer both master's and  <b>Phd dissertation help</b> to help you achieve your academic goals.</p>
						<h2 style="font-size:25px;" class=" mt-3 mb-3">Why Is Global Assignment supportte  the Top Dissertation Writing Service Provider?</h2>
						<p style="text-align:justify ">At Global Assignment supportte , we excel in expertise and support. So, we are the top choice for dissertation help. We commit to excellence and ensure your satisfaction. Thus, you will receive exceptional service at every step of your dissertation journey.</p>
                      
						<br>	<p style="text-align:justify "><b>1. Unmatched Quality and Expertise </b><br>At Global Assignment supportte , we are the  <b>best dissertation writing services</b>. We offer unmatched expertise and a commitment to quality. Our team of expert writers has vast experience in academic writing. So, we guarantee you the highest standard of work.</p>
						<p style="text-align:justify ">Our experts can help you at every stage. Whether you need help with a  <b>dissertation proposal help</b> or a full dissertation.</p>
						
						<br>	<p style="text-align:justify "><b>2. Tailored Support for Every Stage </b><br> Students face complexities and challenges when tackling their dissertations. Our services address your needs. We provide support from topic selection to final submission.</p>
                        <p style="text-align:justify ">If you need help to  <b>write my dissertation for me</b> or with a master's dissertation, we can help. Our solutions will meet your academic needs.</p>

						<br>    <p style="text-align:justify "><b> 3. Comprehensive Dissertation Proposal Help </b><br> A strong dissertation proposal is vital. It sets the foundation for your research. Our team provides expert help with dissertation proposals. We will help you write a proposal. It will outline your research goals, methods, and expected results. </p>
						<p style="text-align:justify ">This service is vital. It ensures your  <b>dissertation proposal help</b> meet academic standards. It also lays a strong foundation for your research.</p>
					   
						<br>	<p style="text-align:justify "><b>4. Commitment to Customer Satisfaction </b><br> We are a top provider of  <b>dissertation writing services</b>. We base our reputation on our reliability and customer satisfaction. We dedicate ourselves to ensuring a smooth and stress-free dissertation process. </p>
						<p style="text-align:justify ">We will provide ongoing support and feedback throughout your journey. Choosing Global Assignment supportte  gives you more than top-tier dissertation help. You will partner with a team committed to your academic success.</p>
						<p style="text-align:justify ">Choose Global Assignment supportte  for expert support. We will help you achieve your dissertation goals with confidence and ease.</p>


						<h2 style="font-size:25px;" class=" mt-3 mb-3">How To Get Dissertation Writing Help Step-by-Step</h2>
						<p style="text-align:justify ">The dissertation process can be daunting. But our step-by-step guide can help. It offers expert support tailored to your needs. Follow these simple steps. They will ensure your dissertation is perfect.</p>
						
					<br>	<p style="text-align:justify "><b>Share Your Details: </b><br> Please submit your dissertation details and requirements. You can use the form, phone, or email to contact us. To help with a bachelor's thesis, a master's dissertation, or a  <b>PhD dissertation help</b>, please share exact details. This ensures we can tailor our support to your needs.</p>
                    <br>    <p style="text-align:justify "><b>Get a Quote: </b><br> Once we get your requirements, we will check your dissertation's complexity and scope. You are given a custom quote by us after that. After you approve the quote and pay, our writers will start on your assignment. If you want to  <b>pay someone to do my dissertation</b>, we ensure high-quality service from start to finish.</p>
					<br>	<p style="text-align:justify "><b>Assigning a Writer: </b><br> We assign a specialized writer with expertise in your field. This depends on your needs: a bachelor's, master's, or Phd dissertation. This ensures that your dissertation receives focused attention from someone knowledgeable.</p>
                    <br>    <p style="text-align:justify "><b>First Draft: </b><br> Our team will develop the first draft of your dissertation and submit it for your review. We await your feedback to ensure the draft meets your standards.</p>
					<br>	<p style="text-align:justify "><b>Editing: </b><br> We carefully incorporate your feedback and make the necessary revisions to perfect the dissertation. Our goal is to refine and polish your work to meet the highest standards.</p>
                    <br>    <p style="text-align:justify "><b>Final Submission: </b><br> Finally, our editor uses advanced tools to find and fix errors. We will ensure your dissertation is flawless before we submit it to you, well before the deadline.</p>
                        <p style="text-align:justify ">Choose our service for expert help with your dissertation.</p>

						<h2 style="font-size:25px;" class=" mt-3 mb-3">Types of Dissertation Writing Help Services</h2>
						<p style="text-align:justify ">We offer a variety of services to help with dissertation writing. They cater to our clients' diverse needs. We can help with a specific chapter or the whole dissertation. We offer custom dissertation writing. We will create a unique dissertation based on your requirements.</p>
						<p style="text-align:justify ">We also edit and proofread. This will make your dissertation error-free and well-structured. With Global Assignment supportte , you have access to the best support for every aspect of your dissertation.</p>
					
						<br>	<p style="text-align:justify "><b>Custom Dissertation Writing Services</b><br>Custom writing services help with dissertations. They can craft proposals, write chapters, and improve the reports. Experts in your field work closely with students. They want their dissertations to meet high academic standards.</p>
						<p style="text-align:justify ">This support improves the clarity, coherence, and originality of the work. Online dissertation writing has key components. One is research help. It covers literature reviews, data collection, analysis, and interpretation of findings. If you need  <b>help me with write my dissertation</b> or its services, these solutions are invaluable.</p>
					
						<br>	<p style="text-align:justify "><b>Editing and Proofreading Services</b><br>To succeed academically, you must ensure that your dissertation is polished and error-free. Our editing and proofreading services provide a careful review. We focus on improving the structure, clarity, and quality of your work.</p>
                        <p style="text-align:justify ">We offer specialized support. This includes your  <b>masters dissertation help</b> and dissertation writing. We aim to ensure your work meets the highest academic standards. We aim to improve your work. We will fix errors and boost coherence. We want your dissertation to be error-free, compelling and well-presented.</p>
                     
						<br><p style="text-align:justify "><b>Topic Selection and Proposal Writing</b><br>A successful dissertation depends on the choice of the right topic. Our topic selection and proposal service will help you. It will find a research-worthy topic and write a strong proposal.</p>
						<p style="text-align:justify ">We provide expert guidance. This ensures your proposal is well-structured. It will also lay a strong foundation for your dissertation. If you need a  <b>PhD dissertation writing service</b>, we will ensure your topic and proposal are up to standard.</p>

						<br>	<p style="text-align:justify "><b>Research and Data Analysis Assistance</b><br>Research and data analysis are pivotal components of a successful dissertation. Our  <b>dissertation help online</b> offers expert guidance on research and data analysis. We help gather data, interpret findings, and present them clearly and scholarly.</p>
						<p style="text-align:justify ">For those on a budget, our  <b>cheap dissertation writing services</b> will help you. You'll get high-quality support without breaking the bank. Trust us to help you excel in your research and data analysis. They are key to a standout dissertation.</p>

						<br>   <p style="text-align:justify "><b>Chapter-wise Dissertation Help</b><br>For help with specific chapters of your dissertation, use our chapter-wise service. It's tailored for you. We provide help on individual chapters. We ensure each section is well written and improves your research's coherence.</p>
						<p style="text-align:justify ">If you need help to  <b>write my dissertation for me</b>, we're here for you. Our expert team can provide dissertation writing services. We'll help you create a high-quality, cohesive dissertation.</p>

                        <h2 style="font-size:25px;" class=" mt-3 mb-3">Benefits of Dissertation Writing Help Online</h2>
						<p style="text-align:justify ">Choosing Global Assignment supportte  for your  <b>dissertation writing help</b> online offers many benefits. We provide high-quality writing services that guarantee originality and adherence to academic standards. </p>
						<p style="text-align:justify ">We design our services to be affordable, ensuring that you get the best value for your money. Our <b>dissertation help online</b> will meet your needs and exceed your expectations. You can trust us to deliver.</p>
                        
					    <br>	<p style="text-align:justify "><b>High-Quality Writing Service</b><br>Our high-quality writing service is the cornerstone of our success. We hire only top writers with expertise in their fields. You ensure that your dissertation meets the highest academic standards.</p>
						<p style="text-align:justify ">If you need help with your dissertation, we excel at every project we take on. We review and refine each dissertation. We guarantee it is well researched, well written, and aligned with your academic goals.</p>

						<br>	<p style="text-align:justify "><b>Plagiarism-Free Dissertation</b><br>At Global Assignment supportte , we focus on originality and academic integrity. Our dissertation help is plagiarism-free. It guarantees that your work is unique. We use advanced tools to check for plagiarism. </p>
						<p style="text-align:justify ">This ensures that your dissertation is 100% original. If you need help to write my dissertation for me, our checks and commitment to quality ensure it is original.</p>

						<br>		<p style="text-align:justify "><b>Cheap Prices</b><br>We believe that quality dissertation help should be accessible to everyone. We keep our prices low, but we won't skimp on quality. If you need  <b>help me write my dissertation</b>, or want a cheap option, our low-cost services are a great value.</p>
						<p style="text-align:justify ">Our <b>cheap dissertation writing services</b> let you get great help within your budget. Rest assured, you'll get the best value for your investment in dissertation support.</p>

						<br>	<p style="text-align:justify "><b>Expert Writer</b><br>When you choose Global Assignment supportte , you gain access to unparalleled expertise. Our expert writer service connects you with top academic writers. They have vast experience and are highly qualified. </p>
						<p style="text-align:justify ">These experts excel at  <b>dissertation writing services</b>. They will ensure your work meets the highest standards. Our writers are dedicated to helping you succeed. If you need help with your dissertation, they will provide top-notch support.</p>

						<br>	<p style="text-align:justify "><b>Before Time Delivery</b><br>Meeting deadlines is crucial in academic writing, especially for advanced degrees. Our masters  <b>dissertation help service</b> guarantees your work will be on time, every time. We value punctuality. We will finish your dissertation well before the deadline.</p>
						<p style="text-align:justify ">This gives you time to review and revise. It reduces stress and allows for adjustments. Our timely delivery lets you manage your schedule and achieve your goals.</p>

						<br>	<p style="text-align:justify "><b>24/7 Customer Support</b><br>Our  <b>Phd dissertation writing services</b> have a 24/7 support team. Our team is always ready to help. Whether you need dissertation help, have questions, or want project updates.</p>
						<p style="text-align:justify ">We guarantee timely replies and support during your dissertation work. Our service is among the best for writing dissertations. It offers 24/7 support for a smooth, stress-free experience.</p>

						<br>	<p style="text-align:justify "><b>Money-Back Guarantee</b><br>We guarantee our  <b>dissertation writing services</b>. So, we offer a money-back guarantee. You can count on us to produce work of superior quality that satisfies your requirements.</p>
						<p style="text-align:justify ">If you're not satisfied with the final product, we will fix it or give you a full refund. You can expect your total satisfaction with our services. This reflects our commitment to excellence and customer care.</p>

						<h2 style="font-size:25px;" class=" mt-3 mb-3">Hire Expert Dissertation Writers Online for Professional Help</h2>
						<p style="text-align:justify ">At Global Assignment supportte , we know that writing a dissertation can be overwhelming. That's why we offer the  <b>best dissertation writing services</b>. We will guide you through every stage. If you're struggling with the research, writing, or editing, we can help. Our expert dissertation writers are here for you. Our team consists of seasoned professionals. They have vast experience in academic writing. We will ensure your dissertation meets the highest quality standards.</p>
						<p style="text-align:justify ">We pride ourselves on providing personalized support tailored to your unique academic needs. By choosing our services, you aren't hiring a writer. You're gaining a partner dedicated to your success. They collaborate intensively in partnership with you. We want to understand your needs. We want your dissertation to reflect your academic abilities.</p>
                        <p style="text-align:justify ">Moreover, that help should be accessible to all. So, we offer  <b>cheap dissertation writing services</b> without compromising on quality. Our transparent pricing ensures you get the best value. It helps you achieve your academic goals.</p>
                        <p style="text-align:justify ">Visit our website to learn about our  <b>dissertation help services</b>. Take the first step toward academic success with Global Assignment supportte .</p>
					
 
 
                        </div>
					</div>
					
				</div>
        <div class="col-lg-6 col-md-6">
					<div class="el-inner-blog-box el-blog-single">
						<div class="el-blogsingle-img">
							<!-- <img src="assets/images/all-instructor/blog-4.jpg" alt=""> -->
						</div>
						<div class="el-blogsingle-content">
							<h1 class="el-blog-title">Dissertation Writing Help </h1>
							
                            <h2 style="font-size:25px; " class=" mt-3 mb-3"> Get the Best Dissertation Writing Services for Students
                            </h2>
							<p style="text-align:justify ">When it comes to your academic success, compromising on quality is not an option. At Global Assignment supportte  , we know a dissertation is vital to your studies. It requires great skill and dedication. We offer excellent, tailored dissertation writing help. It is for students aiming for the highest grades.</p>
							<p style="text-align:justify ">Our team has experienced writers and researchers. They know various academic fields. So, your dissertation will be well-researched and meet the highest standards. Our <b>dissertation assistance</b>  will provide you with original, well-researched content. It will reflect your hard work and dedication.</p>
							<p style="text-align:justify ">We know that writing a dissertation can be daunting. It's tough to balance it with other academic work. That's why our online dissertation help is here to support you. We can help, from choosing a topic to your final submission. Whether you need help with research, writing, or editing, we are here to assist you every step of the way.</p>
							<p style="text-align:justify ">We are committed to delivering high-quality dissertations. We feel great satisfaction in aiding the students in their academic endeavors. Our  <b>dissertation writing services</b> will make your work stand out. It will help you succeed. Choose Global Assignment supportte   for expert, reliable dissertation help. It will boost your academic success.</p>
                          
							<h2 style="font-size:25px;" class=" mt-3 mb-3">What Is Expert Dissertation Writing Help Service?</h2>
							<p style="text-align:justify ">Our expert  <b>dissertation writing service</b> helps students at every stage of their dissertation. We offer help for your master's or Phd dissertation. Our goal is to meet the highest quality and academic standards. We provide key services: topic selection, research, data analysis, writing, editing, and proofreading.</p>
						    
								<p><b>A. Topic Selection: </b> We help you find a topic that fits your interests and academic requirements. It must be relevant and compelling.</p>
								<p><b>B. Research Assistance: </b> Our experts guide you in gathering and analyzing data. This will ensure your research is robust and well-supported.</p>
								<p><b>C. Writing: </b> We help you write a clear, structured dissertation that meets academic standards.</p>
								<p><b>D. Editing and Proofreading: </b> We will make your dissertation error-free. It must meet all formatting and style guidelines. Our editing and proofreading services are meticulous.</p>
								 
							 
						 
						<p style="text-align:justify">We tailor our  <b>best dissertation writing services</b> to fit your program. They suit both master's and Phd dissertations.</p>
						<p style="text-align:justify">We take pride in our top-notch dissertation help online. We ensure that every aspect of your dissertation is handled with care. Trust Global Assignment supportte . We have the expertise to help your dissertation succeed. We offer both master's and  <b>Phd dissertation help</b> to help you achieve your academic goals.</p>
						<h2 style="font-size:25px;" class=" mt-3 mb-3">Why Is Global Assignment supportte  the Top Dissertation Writing Service Provider?</h2>
						<p style="text-align:justify ">At Global Assignment supportte , we excel in expertise and support. So, we are the top choice for dissertation help. We commit to excellence and ensure your satisfaction. Thus, you will receive exceptional service at every step of your dissertation journey.</p>
                      
						<br>	<p style="text-align:justify "><b>1. Unmatched Quality and Expertise </b><br>At Global Assignment supportte , we are the  <b>best dissertation writing services</b>. We offer unmatched expertise and a commitment to quality. Our team of expert writers has vast experience in academic writing. So, we guarantee you the highest standard of work.</p>
						<p style="text-align:justify ">Our experts can help you at every stage. Whether you need help with a  <b>dissertation proposal help</b> or a full dissertation.</p>
						
						<br>	<p style="text-align:justify "><b>2. Tailored Support for Every Stage </b><br> Students face complexities and challenges when tackling their dissertations. Our services address your needs. We provide support from topic selection to final submission.</p>
                        <p style="text-align:justify ">If you need help to  <b>write my dissertation for me</b> or with a master's dissertation, we can help. Our solutions will meet your academic needs.</p>

						<br>    <p style="text-align:justify "><b> 3. Comprehensive Dissertation Proposal Help </b><br> A strong dissertation proposal is vital. It sets the foundation for your research. Our team provides expert help with dissertation proposals. We will help you write a proposal. It will outline your research goals, methods, and expected results. </p>
						<p style="text-align:justify ">This service is vital. It ensures your  <b>dissertation proposal help</b> meet academic standards. It also lays a strong foundation for your research.</p>
					   
						<br>	<p style="text-align:justify "><b>4. Commitment to Customer Satisfaction </b><br> We are a top provider of  <b>dissertation writing services</b>. We base our reputation on our reliability and customer satisfaction. We dedicate ourselves to ensuring a smooth and stress-free dissertation process. </p>
						<p style="text-align:justify ">We will provide ongoing support and feedback throughout your journey. Choosing Global Assignment supportte  gives you more than top-tier dissertation help. You will partner with a team committed to your academic success.</p>
						<p style="text-align:justify ">Choose Global Assignment supportte  for expert support. We will help you achieve your dissertation goals with confidence and ease.</p>


						<h2 style="font-size:25px;" class=" mt-3 mb-3">How To Get Dissertation Writing Help Step-by-Step</h2>
						<p style="text-align:justify ">The dissertation process can be daunting. But our step-by-step guide can help. It offers expert support tailored to your needs. Follow these simple steps. They will ensure your dissertation is perfect.</p>
						
					<br>	<p style="text-align:justify "><b>Share Your Details: </b><br> Please submit your dissertation details and requirements. You can use the form, phone, or email to contact us. To help with a bachelor's thesis, a master's dissertation, or a  <b>PhD dissertation help</b>, please share exact details. This ensures we can tailor our support to your needs.</p>
                    <br>    <p style="text-align:justify "><b>Get a Quote: </b><br> Once we get your requirements, we will check your dissertation's complexity and scope. You are given a custom quote by us after that. After you approve the quote and pay, our writers will start on your assignment. If you want to  <b>pay someone to do my dissertation</b>, we ensure high-quality service from start to finish.</p>
					<br>	<p style="text-align:justify "><b>Assigning a Writer: </b><br> We assign a specialized writer with expertise in your field. This depends on your needs: a bachelor's, master's, or Phd dissertation. This ensures that your dissertation receives focused attention from someone knowledgeable.</p>
                    <br>    <p style="text-align:justify "><b>First Draft: </b><br> Our team will develop the first draft of your dissertation and submit it for your review. We await your feedback to ensure the draft meets your standards.</p>
					<br>	<p style="text-align:justify "><b>Editing: </b><br> We carefully incorporate your feedback and make the necessary revisions to perfect the dissertation. Our goal is to refine and polish your work to meet the highest standards.</p>
                    <br>    <p style="text-align:justify "><b>Final Submission: </b><br> Finally, our editor uses advanced tools to find and fix errors. We will ensure your dissertation is flawless before we submit it to you, well before the deadline.</p>
                        <p style="text-align:justify ">Choose our service for expert help with your dissertation.</p>

						<h2 style="font-size:25px;" class=" mt-3 mb-3">Types of Dissertation Writing Help Services</h2>
						<p style="text-align:justify ">We offer a variety of services to help with dissertation writing. They cater to our clients' diverse needs. We can help with a specific chapter or the whole dissertation. We offer custom dissertation writing. We will create a unique dissertation based on your requirements.</p>
						<p style="text-align:justify ">We also edit and proofread. This will make your dissertation error-free and well-structured. With Global Assignment supportte , you have access to the best support for every aspect of your dissertation.</p>
					
						<br>	<p style="text-align:justify "><b>Custom Dissertation Writing Services</b><br>Custom writing services help with dissertations. They can craft proposals, write chapters, and improve the reports. Experts in your field work closely with students. They want their dissertations to meet high academic standards.</p>
						<p style="text-align:justify ">This support improves the clarity, coherence, and originality of the work. Online dissertation writing has key components. One is research help. It covers literature reviews, data collection, analysis, and interpretation of findings. If you need  <b>help me with write my dissertation</b> or its services, these solutions are invaluable.</p>
					
						<br>	<p style="text-align:justify "><b>Editing and Proofreading Services</b><br>To succeed academically, you must ensure that your dissertation is polished and error-free. Our editing and proofreading services provide a careful review. We focus on improving the structure, clarity, and quality of your work.</p>
                        <p style="text-align:justify ">We offer specialized support. This includes your  <b>masters dissertation help</b> and dissertation writing. We aim to ensure your work meets the highest academic standards. We aim to improve your work. We will fix errors and boost coherence. We want your dissertation to be error-free, compelling and well-presented.</p>
                     
						<br><p style="text-align:justify "><b>Topic Selection and Proposal Writing</b><br>A successful dissertation depends on the choice of the right topic. Our topic selection and proposal service will help you. It will find a research-worthy topic and write a strong proposal.</p>
						<p style="text-align:justify ">We provide expert guidance. This ensures your proposal is well-structured. It will also lay a strong foundation for your dissertation. If you need a  <b>PhD dissertation writing service</b>, we will ensure your topic and proposal are up to standard.</p>

						<br>	<p style="text-align:justify "><b>Research and Data Analysis Assistance</b><br>Research and data analysis are pivotal components of a successful dissertation. Our  <b>dissertation help online</b> offers expert guidance on research and data analysis. We help gather data, interpret findings, and present them clearly and scholarly.</p>
						<p style="text-align:justify ">For those on a budget, our  <b>cheap dissertation writing services</b> will help you. You'll get high-quality support without breaking the bank. Trust us to help you excel in your research and data analysis. They are key to a standout dissertation.</p>

						<br>   <p style="text-align:justify "><b>Chapter-wise Dissertation Help</b><br>For help with specific chapters of your dissertation, use our chapter-wise service. It's tailored for you. We provide help on individual chapters. We ensure each section is well written and improves your research's coherence.</p>
						<p style="text-align:justify ">If you need help to  <b>write my dissertation for me</b>, we're here for you. Our expert team can provide dissertation writing services. We'll help you create a high-quality, cohesive dissertation.</p>

                        <h2 style="font-size:25px;" class=" mt-3 mb-3">Benefits of Dissertation Writing Help Online</h2>
						<p style="text-align:justify ">Choosing Global Assignment supportte  for your  <b>dissertation writing help</b> online offers many benefits. We provide high-quality writing services that guarantee originality and adherence to academic standards. </p>
						<p style="text-align:justify ">We design our services to be affordable, ensuring that you get the best value for your money. Our <b>dissertation help online</b> will meet your needs and exceed your expectations. You can trust us to deliver.</p>
                        
					    <br>	<p style="text-align:justify "><b>High-Quality Writing Service</b><br>Our high-quality writing service is the cornerstone of our success. We hire only top writers with expertise in their fields. You ensure that your dissertation meets the highest academic standards.</p>
						<p style="text-align:justify ">If you need help with your dissertation, we excel at every project we take on. We review and refine each dissertation. We guarantee it is well researched, well written, and aligned with your academic goals.</p>

						<br>	<p style="text-align:justify "><b>Plagiarism-Free Dissertation</b><br>At Global Assignment supportte , we focus on originality and academic integrity. Our dissertation help is plagiarism-free. It guarantees that your work is unique. We use advanced tools to check for plagiarism. </p>
						<p style="text-align:justify ">This ensures that your dissertation is 100% original. If you need help to write my dissertation for me, our checks and commitment to quality ensure it is original.</p>

						<br>		<p style="text-align:justify "><b>Cheap Prices</b><br>We believe that quality dissertation help should be accessible to everyone. We keep our prices low, but we won't skimp on quality. If you need  <b>help me write my dissertation</b>, or want a cheap option, our low-cost services are a great value.</p>
						<p style="text-align:justify ">Our <b>cheap dissertation writing services</b> let you get great help within your budget. Rest assured, you'll get the best value for your investment in dissertation support.</p>

						<br>	<p style="text-align:justify "><b>Expert Writer</b><br>When you choose Global Assignment supportte , you gain access to unparalleled expertise. Our expert writer service connects you with top academic writers. They have vast experience and are highly qualified. </p>
						<p style="text-align:justify ">These experts excel at  <b>dissertation writing services</b>. They will ensure your work meets the highest standards. Our writers are dedicated to helping you succeed. If you need help with your dissertation, they will provide top-notch support.</p>

						<br>	<p style="text-align:justify "><b>Before Time Delivery</b><br>Meeting deadlines is crucial in academic writing, especially for advanced degrees. Our masters  <b>dissertation help service</b> guarantees your work will be on time, every time. We value punctuality. We will finish your dissertation well before the deadline.</p>
						<p style="text-align:justify ">This gives you time to review and revise. It reduces stress and allows for adjustments. Our timely delivery lets you manage your schedule and achieve your goals.</p>

						<br>	<p style="text-align:justify "><b>24/7 Customer Support</b><br>Our  <b>Phd dissertation writing services</b> have a 24/7 support team. Our team is always ready to help. Whether you need dissertation help, have questions, or want project updates.</p>
						<p style="text-align:justify ">We guarantee timely replies and support during your dissertation work. Our service is among the best for writing dissertations. It offers 24/7 support for a smooth, stress-free experience.</p>

						<br>	<p style="text-align:justify "><b>Money-Back Guarantee</b><br>We guarantee our  <b>dissertation writing services</b>. So, we offer a money-back guarantee. You can count on us to produce work of superior quality that satisfies your requirements.</p>
						<p style="text-align:justify ">If you're not satisfied with the final product, we will fix it or give you a full refund. You can expect your total satisfaction with our services. This reflects our commitment to excellence and customer care.</p>

						<h2 style="font-size:25px;" class=" mt-3 mb-3">Hire Expert Dissertation Writers Online for Professional Help</h2>
						<p style="text-align:justify ">At Global Assignment supportte , we know that writing a dissertation can be overwhelming. That's why we offer the  <b>best dissertation writing services</b>. We will guide you through every stage. If you're struggling with the research, writing, or editing, we can help. Our expert dissertation writers are here for you. Our team consists of seasoned professionals. They have vast experience in academic writing. We will ensure your dissertation meets the highest quality standards.</p>
						<p style="text-align:justify ">We pride ourselves on providing personalized support tailored to your unique academic needs. By choosing our services, you aren't hiring a writer. You're gaining a partner dedicated to your success. They collaborate intensively in partnership with you. We want to understand your needs. We want your dissertation to reflect your academic abilities.</p>
                        <p style="text-align:justify ">Moreover, that help should be accessible to all. So, we offer  <b>cheap dissertation writing services</b> without compromising on quality. Our transparent pricing ensures you get the best value. It helps you achieve your academic goals.</p>
                        <p style="text-align:justify ">Visit our website to learn about our  <b>dissertation help services</b>. Take the first step toward academic success with Global Assignment supportte .</p>
					
 
 
                        </div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
    </div>

     </div>
  </div>

  <div class="force-parent-scrollbar"></div>
  </div>
  <script>
    var trapScroll;

(function ($) {
  trapScroll = function (opt) {
    var trapElement;
    var scrollableDist;
    var trapClassName = "trapScroll-enabled";
    var trapSelector = ".trapScroll";

    var trapWheel = function (e) {
      if (!$("body").hasClass(trapClassName)) {
        return;
      } else {
        var curScrollPos = trapElement.scrollTop();
        var wheelEvent = e.originalEvent;
        var dY = wheelEvent.deltaY;

        // only trap events once we've scrolled to the end
        // or beginning
        if (
          (dY > 0 && curScrollPos >= scrollableDist) ||
          (dY < 0 && curScrollPos <= 0)
        ) {
          opt.onScrollEnd();
          return false;
        }
      }
    };

    $(document)
      .on("wheel", trapWheel)
      .on("mouseleave", trapSelector, function () {
        $("body").removeClass(trapClassName);
      })
      .on("mouseenter", trapSelector, function () {
        trapElement = $(this);
        var containerHeight = trapElement.outerHeight();
        var contentHeight = trapElement[0].scrollHeight; // height of scrollable content
        scrollableDist = contentHeight - containerHeight;

        if (contentHeight > containerHeight) $("body").addClass(trapClassName);
      });
  };
})($);

var preventedCount = 0;
var showEventPreventedMsg = function () {
  $("#mousewheel-prevented").stop().animate({ opacity: 1 }, "fast");
};
var hideEventPreventedMsg = function () {
  $("#mousewheel-prevented").stop().animate({ opacity: 0 }, "fast");
};
var addPreventedCount = function () {
  $("#prevented-count").html("prevented <small>x</small>" + preventedCount++);
};

trapScroll({ onScrollEnd: addPreventedCount });
$(".trapScroll")
  .on("mouseenter", showEventPreventedMsg)
  .on("mouseleave", hideEventPreventedMsg);
$('[id*="parent"]').scrollTop(100);

  </script>
</section>
<style>
  
  input {
     
  }
  input[type="text"],
  input[type="search"] {
    background-color: #FFF;
  }
  .input-group {
    display: table;
  }
  .input-group > * {
    display: table-cell;
    white-space: nowrap;
    vertical-align: middle;
  }
  .input-group > *.addon {
    width: 1%;
  }
  .btn-group {
    font-size: 0;
  }
  .btn-group:after {
    content: "";
    display: table;
    clear: both;
  }
  .btn-group > * {
    font-size: 16px;
    display: inline-block;
  }
  #query-field {
    width: 50em;
  }
  #query-string-wrapper input {
    width: 100%;
  }
  [class*="fa-"]:before {
    font-family: "Fontawesome";
    font-style: normal;
  }
  .trap-mousewheel {
    overflow: auto;
  }
   
  #parent-left,
  #parent-right {
    position: relative;
    height: 100%;
    width: 100%;
    padding: 2rem 0.5rem;
    margin-bottom: 40px;
     
    overflow: auto;
    background: #2660a4;
    /* background: #258bd5; */
    /* background: #cecece; */
  }
  #parent-left {
    float: left;
    border-right: 1px solid #999;
  }
  /* #parent-left .child {
    color: #f1c1fd;
    background: #8205a1;
  } */
  #parent-right .child {
    color: black;
    background: white;
    
  }
  .force-parent-scrollbar {
    height: 100%;
  }
  .child {
    position: relative;
    height: 500px;
     
    /* padding: 0 2em; */
    overflow: auto;
  }
  .scrollable-content {
    height: 120%;
    padding-top: 0.5em;
  }
  #mousewheel-prevented {
    z-index: 1;
    top: 0;
    left: 0;
    width: 100%;
    margin-top: -2.6rem;
    opacity: 0;
    padding: 0.8em 0;
    color: #FFF;
    font-size: 0.9em;
    text-align: center;
    background: rgba(0, 0, 0, 0.9);
  }
  [class*="fa-"] {
    font-style: normal;
    font-family: FontAwesome;
  }
  .scroll-down-msg {
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 6em;
    margin-left: -3em;
    padding: 1em;
    background: rgba(0, 0, 0, 0.3);
  }
  .scroll-down-msg i {
    float: right;
  }
  .notes {
    color: #66debc;
    padding: 1em;
    background: rgba(0, 0, 0, 0.4);
  }
  .el-blog-single-wrapper {
      background-color: var(--white-color);
      padding: 20px 0;
  }
   
  
     </style>
     

   



<section style="padding-top: 20px;">
		<div class="container py-4">
			 
			<div class="row mt-3">
				<div class="col-lg-8 col-md-12 col-sm-12 bg-light">
					<div  >
						 <h2>Best Quality Assignment Writing Services at Affordable Prices</h2>
             <p>Enjoy professional assistance without burning a hole in your pocket.</p>
              <div class="row">
                <div class="  col-md-4 col-sm-4 ">
                <ul >
									<li><i class="fas fa-caret-right"></i> Philosophy Assignment </li>
									<li><i class="fas fa-caret-right"></i>  Sociology Assignment </li>
									<li><i class="fas fa-caret-right"></i>  Nursing Assignment </li>
									 
								</ul>
                </div>
                <div class=" col-md-4 col-sm-4 ">
                  <ul>
                  <li><i class="fas fa-caret-right"></i> Marketing Assignment</li>
									<li><i class="fas fa-caret-right"></i>  Finance Assignment </li>
									<li><i class="fas fa-caret-right"></i>  Statistics Assignment </li>
                  </ul>
                </div>
                <div class=" col-md-4 col-sm-4 ">
                  <ul>
                  <li><i class="fas fa-caret-right"></i>Marketing Assignment  </li>
									<li><i class="fas fa-caret-right"></i>Finance Assignment </li>
									<li><i class="fas fa-caret-right"></i>Statistics Assignment </li>
                  </ul>
                </div>
              </div>
             
					</div>
					
				</div>
				     <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="cristmas" style="box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.10); background-color: #ffffff;">
						    	<a href="#"> 
							    	<!-- <img src="/images/order-strip-GAH.svg?v=6" width="100%" height="100%" alt="login-popup" class="order-mobile"> -->
							  	 <img src="assets\images\all-instructor\social-distance-school.png" width="100%" height="100%" alt="login-popup" class="order-web">
						    	</a>
						   </div>
						</div>
					<div>
						 
						</div>
					</div>
				</div>
			 
			</div>
		</div>
    
	</section>
   
<section class=" pt-3 pb-3">
		<div class="container ">
			<div class="my-5 images-container" style="position: relative; border-radius: 5px; overflow: hidden;  ">
				<!-- <div style="background: linear-gradient(275deg, rgba(0,0,245,1) 0%, rgba(0,0,240,0.23012955182072825) 10%, rgba(0,0,250,0.43461134453781514) 21%, rgba(0,0,255,1) 100%); background-size: cover; background-position: center; height: 100%; width: 100%; position: absolute; top: 0; left: 0; ;"></div>
				<div style="background: linear-gradient(to bottom, rgba(100, 150, 255, 0.8), rgba(100, 150, 255, 0.9)); position: absolute; top: 0; left: 0; height: 100%; width: 100%;  "></div>
			 -->
        <div class="container" style="position: relative; z-index: 3;">
					<div class="row">
						<!-- <div class="col-md-12">  -->
							<img src="assets\images\order-2.png" alt="Client Logo" class="img-fluid">
						<!-- </div> -->
						<!-- <div class="col-md-6 mt-4 py-5" >
							<h2 >Can an Expert Do My Assignment?</h2>
							<p>Enjoy all kinds of assignment writing help from reputed academic scholars.</p>
							<div style="text-center"> 
								<a href="#"><button class="btn btn-primary btn-lg">Click to Connect</button></a>
							</div>
						</div> -->
					</div>
				</div>
				</div>
				</div>
	</section>
  
 <div class="el-course-wrapper boundd mb-4">
	<div class="container">
		<div class="el-course-heading text-center">
			<h2 class="el-main-heading" style="color:white;">We Cover All Subjects: Get Help In Any Area</h2>
			<p style="text-align: justify; color:white;" class="el-para">At Global Assignment Support, we provide academic support in many subjects. Our experts can help with complex theories and detailed problems. We offer tailored help in these areas:
			</p>
		</div>
		<div class="el-tab-parent">
			  <div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="all-courses-tab">
					<div class="el-tab-slider-parent ">
						<div class="swiper-wrapper " style="height: 400px; width:200px;">
							<div class="swiper-slide">
                            <div class="el-work-box el-work-box-1 ">
                                <div class="el-work-box-inner">
                                    <div class="el-work-img" >
                                        <img src="../assets/images/all-instructor/w4.png" style="height:30px" alt="work icon">
                                    </div>
                                    <div class="el-work-content  py-4">
                                        <h3>Math Assignment Help</h3>
                                        <p   class="el-para">Struggling with calculus, algebra, or geometry? Our math experts simplify tough problems. This helps you excel in math</p>
                                    </div>
                                </div>
                            </div>
							</div>
							<div class="swiper-slide">
                            <div class="el-work-box el-work-box-1">
                                <div class="el-work-box-inner">
                                    <div class="el-work-img">
                                        <img src="../assets/images/all-instructor/w4.png" alt="work icon">
                                    </div>
                                    <div class="el-work-content  py-4">
                                        <h3>Chemistry Assignment Help</h3>
                                        <p >Our experts assist with all branches, from organic to inorganic. They will help you grasp concepts and achieve high grades.</p>
                                    </div>
                                </div>
                            </div>
                            
							</div>
							<div class="swiper-slide">
                                <div class="el-work-box el-work-box-1">
                                    <div class="el-work-box-inner">
                                        <div class="el-work-img">
                                            <img src="../assets/images/all-instructor/w4.png" alt="work icon">
                                        </div>
                                        <div class="el-work-content  py-4">
                                            <h3>Economic Assignment Help</h3>
                                            <p >Get expert help with micro and macroeconomics. Understand economic theories and their applications better.</p>
                                        </div>
                                    </div>
                                </div>
								
							</div>
							<div class="swiper-slide">
                                <div class="el-work-box el-work-box-1">
                                    <div class="el-work-box-inner">
                                        <div class="el-work-img">
                                            <img src="../assets/images/all-instructor/w4.png" alt="work icon">
                                        </div>
                                        <div class="el-work-content  py-4">
                                            <h3>English Assignment Writing Help</h3>
                                            <p  >Our experts can help with literature, essays, and grammar. Their top-notch help will improve your writing skills</p>
									   </div>
                                    </div>
                                </div>
							</div>	
							<div class="swiper-slide">
                                <div class="el-work-box el-work-box-1">
                                    <div class="el-work-box-inner">
                                        <div class="el-work-img">
                                            <img src="../assets/images/all-instructor/w4.png" alt="work icon">
                                        </div>
                                        <div class="el-work-content  py-4">
                                            <h3>History Assignment Writing Help</h3>
                                            <p  >Get in-depth analyses of historical events, figures, and periods. It will help you create compelling assignments.
                                            </p>  
                                        </div>
                                    </div>
                                </div>
							</div>			
							<div class="swiper-slide">
                                <div class="el-work-box el-work-box-1">
                                    <div class="el-work-box-inner">
                                        <div class="el-work-img">
                                            <img src="../assets/images/all-instructor/w4.png" alt="work icon">
                                        </div>
                                        <div class="el-work-content  py-4">
                                            <h3>Geography Assignment Help</h3>
                                            <p  > Our experts can guide you in geography. It includes physical, human, and environmental topics. They will make your work accurate and insightful.
                                            </p>
                                        </div>
                                    </div>
                                </div>
							</div>
							<div class="swiper-slide">
                                <div class="el-work-box el-work-box-1">
                                    <div class="el-work-box-inner">
                                        <div class="el-work-img">
                                            <img src="../assets/images/all-instructor/w4.png" alt="work icon">
                                        </div>
                                        <div class="el-work-content  py-4">
                                            <h3>Linguistic Assignment Writing Help</h3>
                                            <p  >Get expert help with linguistics assignments. Explore the intricacies of language structure, phonetics, and semantics.
                                            </p>
                                        </div>
                                    </div>
                                </div>
							</div>
							<div class="swiper-slide">
                                <div class="el-work-box el-work-box-1">
                                    <div class="el-work-box-inner">
                                        <div class="el-work-img">
                                            <img src="../assets/images/all-instructor/w4.png" alt="work icon">
                                        </div>
                                        <div class="el-work-content  py-4">
                                            <h3>Nursing Assignment Writing Help</h3>
                                            <p  >Our experts can help you with your nursing coursework. They will explain medical concepts, patient care, and healthcare policies.
                                            </p>
                                        </div>
                                    </div>
                                </div>
								
							</div>
							<div class="swiper-slide">
                            <div class="el-work-box el-work-box-1">
                                    <div class="el-work-box-inner">
                                        <div class="el-work-img">
                                            <img src="../assets/images/all-instructor/w4.png" alt="work icon">
                                        </div>
                                        <div class="el-work-content py-4">
                                            <h3>Physics Assignment Writing Help</h3>
                                            <p style="text-align: justify;">Our experts simplify physics, from classical mechanics to quantum physics. We help you excel in your assignments.</p>
                                            
                                        </div>
                                    </div>
                                </div>
								
							</div>	
							             
                            
						</div>						
					</div>
					<!-- <div class="swiper-button-prev swiper-button-disabled">
						<svg width="7" height="12" viewBox="0 0 7 12" fill="none">
							<path d="M6.46068 0.875485C6.18697 0.596953 5.74568 0.596953 5.47196 0.875485L0.830026 5.59917C0.778242 5.65176 0.737158 5.71423 0.709127 5.78299C0.681096 5.85176 0.666667 5.92547 0.666667 5.99992C0.666667 6.07437 0.681096 6.14808 0.709127 6.21685C0.737158 6.28561 0.778242 6.34808 0.830026 6.40067L5.47196 11.1244C5.74567 11.4029 6.18697 11.4029 6.46068 11.1244C6.73439 10.8458 6.73439 10.3968 6.46068 10.1182L2.41644 5.99708L6.46627 1.87593C6.73439 1.60308 6.73439 1.14833 6.46068 0.875485Z"/>
						</svg>
					</div>						 -->
					<!-- <div class="swiper-button-next">
						<svg width="7" height="12" viewBox="0 0 7 12" fill="none">
							<path d="M0.539362 11.1245C0.813074 11.403 1.25437 11.403 1.52808 11.1245L6.17002 6.40083C6.2218 6.34824 6.26288 6.28578 6.29091 6.21701C6.31894 6.14824 6.33337 6.07453 6.33337 6.00008C6.33337 5.92563 6.31894 5.85192 6.29091 5.78315C6.26288 5.71439 6.2218 5.65192 6.17002 5.59934L1.52808 0.875648C1.25437 0.597115 0.813074 0.597115 0.539362 0.875648C0.26565 1.15418 0.26565 1.60324 0.539362 1.88178L4.5836 6.00292L0.533776 10.1241C0.26565 10.3969 0.26565 10.8517 0.539362 11.1245Z"/>
						</svg>
					</div> -->
				</div>
			
			  </div>
		</div>
	</div>
</div>

<style>
     .boundd {
  background: #162561;
  background-image: radial-gradient(
      circle at 20% 100%,
      rgba(184, 184, 184, 0.1) 0%,
      rgba(184, 184, 184, 0.1) 33%,
      rgba(96, 96, 96, 0.1) 33%,
      rgba(96, 96, 96, 0.1) 66%,
      rgba(7, 7, 7, 0.1) 66%,
      rgba(7, 7, 7, 0.1) 99%
    ),
    linear-gradient(40deg, #040a22, #162561, #202e64, #6f7aa6);
  background-repeat: no-repeat;
  background-size: cover;
}
  
  </style>

<div class="blog-slider">
  <div class="blog-slider__wrp swiper-wrapper">  
  <img src="assets\images\GET SPECIAL PROMO FOR EVERY WHITE SNEAKERS (1)_page-0001.jpg"  alt="">
     
  </div>
   
</div>
 
 <!-- ***** FAQ Start ***** -->
 <div class="faq-section">
    <div class="container">
      <div class="col-lg-12 col-md-12 col-sm-12"> 
        
        <h2 class="faq-heading">Frequently Asked Questions</h2>
        <div class="row">
          <div class="col-lg-6"> 
         
        <div class="faq-item card bg-light">
            <div class="faq-question">
                <h3 style="font-size:20px; font-weight:500px; color:black;">What services do you offer?</h3>
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>We provide academic support across various subjects including Math, Science, English, and more.</p>
            </div>
        </div>
        <div class="faq-item card bg-light">
            <div class="faq-question">
                <h3 style="font-size:20px; font-weight:500px; color:black;">How can I contact support?</h3>
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>You can reach our support team via email or live chat on our website.</p>
            </div>
        </div>
        <div class="faq-item card bg-light">
            <div class="faq-question">
                <h3 style="font-size:20px; font-weight:500px; color:black;">Are your services confidential?</h3>
                <span class="faq-toggle">+</span>
            </div>
            <div class="faq-answer">
                <p>Yes, we prioritize your privacy and ensure that all information is kept confidential.</p>
            </div>
        </div>
        </div>
        <div class="col-lg-6"> 
         
         <div class="faq-item card bg-light">
             <div class="faq-question">
                 <h3 style="font-size:20px; font-weight:500px; color:black;">What services do you offer?</h3>
                 <span class="faq-toggle">+</span>
             </div>
             <div class="faq-answer">
                 <p>We provide academic support across various subjects including Math, Science, English, and more.</p>
             </div>
         </div>
         <div class="faq-item card bg-light">
             <div class="faq-question">
                 <h3 style="font-size:20px; font-weight:500px; color:black;">How can I contact support?</h3>
                 <span class="faq-toggle">+</span>
             </div>
             <div class="faq-answer">
                 <p>You can reach our support team via email or live chat on our website.</p>
             </div>
         </div>
         <div class="faq-item card bg-light">
             <div class="faq-question">
                 <h3 style="font-size:20px; font-weight:500px; color:black;">Are your services confidential?</h3>
                 <span class="faq-toggle">+</span>
             </div>
             <div class="faq-answer">
                 <p>Yes, we prioritize your privacy and ensure that all information is kept confidential.</p>
             </div>
         </div>
         </div>
        </div>
        </div>
        
        <!-- Add more FAQs as needed -->
    </div>
    <script>
document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            const toggle = question.querySelector('.faq-toggle');

            answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
            toggle.textContent = toggle.textContent === '+' ? '−' : '+';
        });
    });
    </script>
</div>

<style>
.faq-section {
    background-color: #f9f9f9;
    padding: 60px 20px;
    margin-bottom: 100px;
    margin-top: 10px;
}

/* .container {
    max-width: 1000px;
    margin: 0 auto;
} */

.faq-heading {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 40px;
    color: black;
}

.faq-item {
    border-bottom: 1px solid #ddd;
    margin-bottom: 20px;
}

.faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    padding: 15px 20px;
    transition: background-color 0.3s;
    font-size: 20px;
    font-weight: 500px;
     
}

.faq-question:hover {
    background-color: #e9ecef;
}

.faq-answer {
    display: none;
     
    padding: 0 20px 15px;
    color: #555;
}

.faq-toggle {
    font-size: 1rem;
    font-weight: bold;
}

</style>
  
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="carousel-wrapper">
  <div class="carousel">  
    <div class="item"><img src="assets\images\star.png" alt="apple"></div>
    <div class="item"><img src="assets\images\gift.png" alt="Google"></div>
    <div class="item"><img src="assets\images\sale-tag.png" alt="Google"></div>
    <div class="item"><img src="assets\images\new-offer.png" alt="Google"></div>
    <div class="item"><img src="assets\images\special-tag.png" alt="apple"></div>
    <div class="item"><img src="assets\images\gift.png" alt="Google"></div>
    <div class="item"><img src="assets\images\special-tag.png" alt="apple"></div>
    <div class="item"><img src="assets\images\gift.png" alt="Google"></div>
    <div class="item"><img src="assets\images\special-tag.png" alt="apple"></div>
    <div class="item"><img src="assets\images\gift.png" alt="Google"></div>
    <div class="item"><img src="assets\images\special-tag.png" alt="apple"></div>
    <div class="item"><img src="assets\images\gift.png" alt="Google"></div>
    <div class="item"><img src="assets\images\special-tag.png" alt="apple"></div>
    <div class="item"><img src="assets\images\gift.png" alt="Google"></div>
   

  </div>
</div>
      </div>
    </div>
  </div>
</section>
 
<style>
  /* * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
:root {
  --bg-clr: #64748b;
}
body {
  min-height: 100svh;
  display: grid;
  place-content: center;
  background-color: var(--bg-clr);
} */

.carousel-wrapper {
  --width: 100px;
  --gap: 0;
  --num-items: 10;
  --ani-offset: calc(var(--width) * var(--num-items) * -1);
  --ani-speed: 10s;

  width: auto;
  overflow: hidden;
  position: relative;
}
.carousel-wrapper::before,
.carousel-wrapper::after {
  content: "";
  position: absolute;
  width: 20%;
  height: 100%;
  z-index: 1;
  top: 0;
}
.carousel-wrapper::before {
  left: 0;
  background-image: linear-gradient(
    to right,
    var(--bg-clr) 0%,
    transparent 50%
  );
}
.carousel-wrapper::after {
  right: 0;
  background-image: linear-gradient(to left, var(--bg-clr) 0%, transparent 50%);
}

.carousel {
  display: flex;
  align-items: center;
  animation: slide var(--ani-speed) linear infinite;
}
.item {
  flex: 1 0 var(--width);
  text-align: center;
  padding: 1rem;
}
.item:last-child {
  /*background: red;*/
}
.item > img {
  width: 100%;
  height: auto;
  object-fit: cover;
}

@keyframes slide {
  100% {
    transform: translateX(var(--ani-offset));
  }
}

</style>
 



<section class="service-grid pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center mb-4">
                    <div class="service-title">
                        <h4>Our Services</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center mb-3">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h4>Web Application</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-3">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <i class="far fa-chart-bar"></i>
                        </div>
                        <h4>Highly customizable</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-3">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h4>Responsive design</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-3">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4>service & plugins</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-3">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <h4>Optimised for speed</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-3">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <i class="fas fa-thumbs-up"></i>
                        </div>
                        <h4>Dedicated support</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry...</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
 <style>
  
.service-grid {
  background: #fcfcfc;
}
 .service-title h4 {
  position: relative;
  display: inline-block;
}
.service-icon {
  position: relative;
}
.service-title p {
  padding: 0 190px;
  margin-bottom: 10px;
}
.about-info-text h2 {
  margin-bottom: 23px;
  text-transform: capitalize;
  font-weight: 700;
  line-height: .9;
}
.about-info-text p {
  padding: 0 100px;
  font-size: 18px;
  margin-bottom: 26px;
    position: relative;
}
.about-content p {
  margin-bottom: 0;
}
.about-info-text a {
  margin-bottom: 20px;
    position: relative;
}
.service-icon i {
  font-size: 40px;
  color: #e8bc00;
  margin-bottom: 20px;
  display: inline-block;
}
.service-wrap {
  border: 1px solid #e6e6e6;
  padding: 50px 30px;
    position: relative;
}

.service-wrap p{
    position: relative;
}

.service-wrap:hover {
  background-image: url(https://i.ibb.co/mykzQks/services1.jpg);
  background-size: cover;
  background-position: center center;
  background-attachment: local;
  transition: all .5s;
}

.service-wrap:hover:before {
  background: rgba(0, 0, 0, 0.2901960784313726);
  position: absolute;
  height: 100%;
  width: 100%;
  left: 0px;
  content: "";
  top: 0;
  opacity: 1;
}

.service-wrap:hover h4,.service-wrap:hover p{
  color: #fff;
}
.service-wrap h4 {
  font-weight: 600;
  color: #1e2331;
  margin-bottom: 17px;
  font-size: 18px;
  text-transform: capitalize;
    position: relative;
}
.service-wrap a {
  font-size: 14px;
  font-weight: 600;
    position: relative;

}

 </style>
    
<!-- new section -->
 
 

   
  <section   > 
  <div class="container text:center;">
     
      <div class="col-lg-8 col-md-8 col-sm-12 ">
         
          <div class="testimonial">
             
            <div class="pic">
              <img src="\assets\images\new-offer.png" alt="" class="img-responsive">
            </div>
            <h3 class="testimonial-info" >
             offer
              <small> Global Assignment Support</small>
            </h3>
            <p class="description" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi facilisis.</p>
          </div>
        </div>
       
     
  </div>
  </section>
  
<style>
 

  
.testimonial {
  /* background: #4d241c; */
  background-color: #004658;
  padding: 30px 32px 30px 90px;
  margin: 50px 20px 50px 200px;
  border-radius: 0 100px 100px 0;
  color: #fff;
  position: relative;
  border: 5px solid #4B70F5;
   
   
}
.testimonial .pic {
  width: 210px;
  height: 210px;
  line-height: 200px;
  border-radius: 50%;
  border: 14px solid #4B70F5;
  position: absolute;
  top: -15px;
  left: -120px;
  overflow: hidden;
}
.testimonial .pic img {
  width: 100%;
  height: 100%;
}
.testimonial .testimonial-info {
  display: inline-block;
  width: 35%;
  float: left;
  font-size: 20px;
  font-weight: 700;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  padding: 28px 25px;
  margin: 0;
  border-right: 1px solid #d0ab6d;
}
.testimonial .testimonial-info small {
  display: block;
  font-size: 12px;
  color: #fff;
  margin-top: 5px;
}
.testimonial .description {
  display: inline-block;
  width: 65%;
  font-size: 15px;
  color: #fff;
  letter-spacing: 0.5px;
  margin-bottom: 0;
  padding: 28px 0 28px 28px;
  position: relative;
}
.testimonial .description:before {
  content: "offer";
  font-family: fontawesome;
  position: absolute;
  top: 0;
  left: 10px;
  font-size: 20px;
  color: #d0ab6d;
}
.testimonial .description:after {
  content: "offer";
  font-family: fontawesome;
  font-size: 20px;
  color: #d0ab6d;
  position: absolute;
  bottom: 5px;
}
 
@media only screen and (max-width: 767px) {
  .testimonial {
    border-radius: 40px;
    margin: 90px 15px 0;
    padding: 100px 40px 30px 40px;
  }
  .testimonial .pic {
    position: absolute;
    top: -85px;
    left: 0;
    right: 0;
    margin: 0 auto;
  }
  .testimonial .testimonial-info {
    width: 100%;
    float: none;
    border-right: none;
    text-align: center;
    border-bottom: 1px solid rgba(255, 255, 255, 0.5);
  }
  .testimonial .description {
    width: 100%;
  }
}
@media only screen and (max-width: 480px) {
  .testimonial {
    padding: 100px 30px 30px;
  }
}

</style>
 

<!-- end-->

<section>
  <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="gallery-wrap">
            <img src="assets\images\arrow (1).png" alt="" id="backBtn" >  
            <div class="gallery">
    <div>
      <span><img src="assets\images\all-instructor\blog-1.jpg" alt=""></span>
      <span><img src="assets\images\all-instructor\blog-1.jpg" alt=""></span>
      <span><img src="assets\images\all-instructor\blog-1.jpg" alt=""></span>
        
    </div>
    <div>  
      <span><img src="assets\images\all-instructor\blog-1.jpg" alt=""></span>
      <span><img src="assets\images\all-instructor\blog-1.jpg" alt=""></span>
      <span><img src="assets\images\all-instructor\blog-1.jpg" alt=""></span>
        
    </div>
  </div> 
            <img src="assets\images\arrow (3).png" alt="" id="nextBtn"> 
          </div>
    
        </div>
    </div>
  </div>
  <script>
    let scrollContainer =document.querySelector('.gallery');
    let backBtn =document.getElementById('backBtn');
    let nextBtn =document.getElementById('nextBtn');

    scrollContainer.addEventListener('wheel', (evt)=>{
      evt.preventDefault();
      scrollContainer.scrollLeft += evt.deltaY;
    })

    nextBtn.addEventListener("click",()=>{
      scrollContainer.style.scrollBehavior =  "smooth";
      scrollContainer.scrollLeft += 900;
    })

    backBtn.addEventListener("click",()=>{
      scrollContainer.scrollLeft -= 900;
    })
  </script>
</section>
  

  <style>
    .gallery{
      height: auto;
      display: flex;
       
       overflow-y: hidden;
    }

    .gallery div{
      width: 100%;
      display: grid;
      grid-template-columns: auto auto auto;
      grid-gap:20px;
      padding: 10px;
      flex:none;
    }

    .gallery div img {
      width:100%;
    }

    .gallery::-webkit-scrollbar-button{
      display: block;
    }

    .gallery-wrap{
      display:block
      align-items: center;
      justify-content: center;
      margin: 10% auto;
    }

    #backBtn, #nextBtn{
      width: 50px;
      cursor: pointer;
      
    }
  </style>

<div class="courses-container">
	<div class="course">
		<div class="course-preview">
			<!-- <h6>Offer</h6>
			<h2>Global Assignment Support</h2>
			<a href="#">View all Offer <i class="fas fa-chevron-right"></i></a> --> 
      <img class="off" src="\assets\images\new-offer.png" alt=""   > 
		</div>
		<div class="course-info">
     
    <div class="progress-container">
				<div class="progress"></div>
				<h6 class="progress-text">
        Special-offer
      </h6>  
      
      
        	</div> 
        <div>
        <h4 class="mt-4"> Global Assignment Support </h4>
        <h2 class="offer-text" >50% Off! ON EVERY ASSIGNMENT </h2>  
       
      
        </div>
			    
       <div>
       <button class="btn">Continue</button>
       </div>
			 
		</div>
	</div>
</div>

 
 
 

<style>
  /* @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

* {
	box-sizing: border-box;
}


body {
	background-image: linear-gradient(45deg, #7175da, #9790F2);
	font-family: 'Muli', sans-serif;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	min-height: 100vh;
	margin: 0;
} */

.offer-text {
   
	text-transform: uppercase;
	background: linear-gradient(to right, #30CFD0 0%, #330867 100%);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
	font: {
		size: 20vw;
		family: $font;
	};
 
    }

.courses-container {
	
}
.off {
  width: 100%;
  height: auto;
  object-fit: contain;
  margin-top: 15px;
  
   
}

.course {
	background-color: #fff;
	border-radius: 10px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	display: flex;
	max-width: 100%;
	margin: 20px;
	overflow: hidden;
	width: 700px;
  margin: auto;
}

.course h6 {
	opacity: 0.9;
 
	letter-spacing: 2px;
	text-transform: uppercase;
}

.course h2 {
	letter-spacing: 1px;
	/* margin: 10px 0; */
  margin-top: 20px;

  word-break: normal;
}

.course-preview {
	/* background-color: #2A265F; */
  background-color: #004658;
	color: #fff;
	/* padding: 30px; */
	/* max-width: 300px; */
}

/* .course-preview a {
	color: #fff;
	display: inline-block;
	font-size: 12px;
	opacity: 0.6;
	margin-top: 30px;
	text-decoration: none;
} */

.course-info {
	padding: 15px;
  
	position: relative;
	width: 100%;
  
    
}

.progress-container {
	/* position: absolute;
	top: 30px;
	right: 30px;
	text-align: right;
	width: 150px; */
  
  position: absolute;
    top: 0px;
    right: 15px;
    text-align: right;
    width: 100px;
}

.progress {
	background-color: #ddd;
	border-radius: 3px;
	height: 5px;
	width: 100%;
   
}

.progress::after {
	border-radius: 3px;
	background-color: #2A265F;
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	height: 5px;
	width: 66%;
}

.progress-text {
	font-size: 10px;
	opacity: 0.6;
	letter-spacing: 1px;
  
}

.btn {
	background-color: #004658;
	border: 0;
	border-radius: 50px;
	box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2);
	color: #fff;
	font-size: 16px;
	/* padding: 12px 25px; */
	/* position: absolute;
	bottom: 30px;
	right: 30px;
  margin-top: 10px; */
	/* letter-spacing: 1px;
  margin: 10px; */
  bottom: 30px;
	right: 30px;
     /* color: #fff; */
    display: inline-block;
    /* font-size: 12px; */
    /* opacity: 0.6; */
    
    /* text-decoration: none; */
}

/* SOCIAL PANEL CSS */
.social-panel-container {
	position: fixed;
	right: 0;
	bottom: 80px;
	transform: translateX(100%);
	transition: transform 0.4s ease-in-out;
}

.social-panel-container.visible {
	transform: translateX(-10px);
}

.social-panel {	
	background-color: #fff;
	border-radius: 16px;
	box-shadow: 0 16px 31px -17px rgba(0,31,97,0.6);
	border: 5px solid #001F61;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
	font-family: 'Muli';
	position: relative;
	height: 169px;	
	width: 370px;
	max-width: calc(100% - 10px);
}

.social-panel button.close-btn {
	border: 0;
	color: #97A5CE;
	cursor: pointer;
	font-size: 20px;
	position: absolute;
	top: 5px;
	right: 5px;
}

.social-panel button.close-btn:focus {
	outline: none;
}

.social-panel p {
	background-color: #001F61;
	border-radius: 0 0 10px 10px;
	color: #fff;
	font-size: 14px;
	line-height: 18px;
	padding: 2px 17px 6px;
	position: absolute;
	top: 0;
	left: 50%;
	margin: 0;
	transform: translateX(-50%);
	text-align: center;
	width: 235px;
}

.social-panel p i {
	margin: 0 5px;
}

.social-panel p a {
	color: #FF7500;
	text-decoration: none;
}

.social-panel h4 {
	 
	color: #97A5CE;	
	font-family: 'Muli';	
	font-size: 14px;	
	line-height: 18px;
	text-transform: uppercase;
}

.social-panel ul {
	display: flex;
	list-style-type: none;
	padding: 0;
	margin: 0;
}

.social-panel ul li {
	margin: 0 10px;
}

.social-panel ul li a {
	border: 1px solid #DCE1F2;
	border-radius: 50%;
	color: #001F61;
	font-size: 20px;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 50px;
	width: 50px;
	text-decoration: none;
}

.social-panel ul li a:hover {
	border-color: #FF6A00;
	box-shadow: 0 9px 12px -9px #FF6A00;
}

 

@media screen and (max-width: 480px) {

	.social-panel-container.visible {
		transform: translateX(0px);
	}
	
	.floating-btn {
		right: 10px;
	}
}
</style>

     @endsection