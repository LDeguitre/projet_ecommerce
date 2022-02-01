<?php
header("Content-type: text/css");
?>




* {
box-sizing: border-box;
font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
font-size: 16px;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}
html {
height: 100%;
}
body {
position: relative;
min-height: 100%;
color: #555555;
background-color: #FFFFFF;
margin: 0;
padding-bottom: 100px; /* Same height as footer */
}
h1, h2, h3, h4, h5 {
color: #394352;
}
.content-wrapper {
width: 1050px;
margin: 0 auto;
}


header {
border-bottom: 1px solid #EEEEEE;
width: 100%;

color: #fff;

}
header .content-wrapper {
display: flex;
}
header h1 {
display: flex;
flex-grow: 1;
flex-basis: 0;
font-size: 20px;
margin: 0;
padding: 24px 0;
}
header nav {
display: flex;
flex-grow: 1;
flex-basis: 0;
justify-content: center;
align-items: center;
}
header nav a {
text-decoration: none;
color: #555555;
padding: 10px 10px;
margin: 0 10px;
}
header nav a:hover {
border-bottom: 1px solid #aaa;
}
header .link-icons {
display: flex;
flex-grow: 1;
flex-basis: 0;
justify-content: flex-end;
align-items: center;
position: relative;
}
header .link-icons a {
text-decoration: none;
color: #394352;
padding: 0 10px;
}
header .link-icons a:hover {
color: #4e5c70;
}
header .link-icons a i {
font-size: 18px;
}
header .link-icons a span {
display: inline-block;
text-align: center;
background-color: #63748e;
border-radius: 50%;
color: #FFFFFF;
font-size: 12px;
line-height: 16px;
width: 16px;
height: 16px;
font-weight: bold;
position: absolute;
top: 22px;
right: 0;
}
main .featured {
display: flex;
flex-direction: column;
background-image: url(imgs/featured-image.jpg);
background-repeat: no-repeat;
background-size: cover;
height: 500px;
align-items: center;
justify-content: center;
text-align: center;
}
main .featured h2 {
display: inline-block;
margin: 0;
width: 1050px;
font-family: Rockwell, Courier Bold, Courier, Georgia, Times, Times New Roman, serif;
font-size: 68px;
color: #FFFFFF;
padding-bottom: 10px;
}
main .featured p {
display: inline-block;
margin: 0;
width: 1050px;
font-size: 24px;
color: #FFFFFF;
}
main .recentlyadded h2 {
display: block;
font-weight: normal;
margin: 0;
padding: 40px 0;
font-size: 24px;
text-align: center;
width: 100%;
border-bottom: 1px solid #EEEEEE;
}
main .recentlyadded .products, main .products .products-wrapper {
display: flex;
flex-wrap: wrap;
align-items: center;
justify-content: space-between;
padding: 40px 0 0 0;
}
main .recentlyadded .products .product, main .products .products-wrapper .product {
display: block;
overflow: hidden;
text-decoration: none;
width: 25%;
padding-bottom: 60px;
}
main .recentlyadded .products .product img, main .products .products-wrapper .product img {
transform: scale(1);
transition: transform 1s;
}
main .recentlyadded .products .product .name, main .products .products-wrapper .product .name {
display: block;
color: #555555;
padding: 20px 0 2px 0;
}
main .recentlyadded .products .product .price, main .products .products-wrapper .product .price {
display: block;
color: #999999;
}
main .recentlyadded .products .product .rrp, main .products .products-wrapper .product .rrp {
color: #BBBBBB;
text-decoration: line-through;
}
main .recentlyadded .products .product:hover img, main .products .products-wrapper .product:hover img {
transform: scale(1.05);
transition: transform 1s;
}
main .recentlyadded .products .product:hover .name, main .products .products-wrapper .product:hover .name {
text-decoration: underline;
}
main > .product {
display: flex;
padding: 40px 0;
}
main > .product > div {
padding-left: 15px;
}
main > .product h1 {
font-size: 34px;
font-weight: normal;
margin: 0;
padding: 20px 0 10px 0;
}
main > .product .price {
display: block;
font-size: 22px;
color: #999999;
}
main > .product .rrp {
color: #BBBBBB;
text-decoration: line-through;
font-size: 22px;
padding-left: 5px;
}
main > .product form {
display: flex;
flex-flow: column;
margin: 40px 0;
}
main > .product form input[type="number"] {
width: 400px;
padding: 10px;
margin-bottom: 15px;
border: 1px solid #ccc;
color: #555555;
border-radius: 5px;
}
main > .product form input[type="submit"] {
background: #4e5c70;
border: 0;
color: #FFFFFF;
width: 400px;
padding: 12px 0;
text-transform: uppercase;
font-size: 14px;
font-weight: bold;
border-radius: 5px;
cursor: pointer;
}
main > .product form input[type="submit"]:hover {
background: #434f61;
}
main > .products h1 {
display: block;
font-weight: normal;
margin: 0;
padding: 40px 0;
font-size: 24px;
text-align: center;
width: 100%;
}
main > .products .buttons {
text-align: right;
padding-bottom: 40px;
}
main > .products .buttons a {
display: inline-block;
text-decoration: none;
margin-left: 5px;
padding: 12px 20px;
border: 0;
background: #4e5c70;
color: #FFFFFF;
font-size: 14px;
font-weight: bold;
border-radius: 5px;
}
main > .products .buttons a:hover {
background: #434f61;
}
main .cart h1 {
display: block;
font-weight: normal;
margin: 0;
padding: 40px 0;
font-size: 24px;
text-align: center;
width: 100%;
}
main .cart table {
width: 100%;
}
main .cart table thead td {
padding: 30px 0;
border-bottom: 1px solid #EEEEEE;
}
main .cart table thead td:last-child {
text-align: right;
}
main .cart table tbody td {
padding: 20px 0;
border-bottom: 1px solid #EEEEEE;
}
main .cart table tbody td:last-child {
text-align: right;
}
main .cart table .img {
width: 80px;
}

main .cart table .remove {
color: #777777;
font-size: 12px;
padding-top: 3px;
}

main .cart table .remove:hover {
text-decoration: underline;
}

main .cart table .price {
color: #999999;
}

main .cart table a {
text-decoration: none;
color: #555555;
}

main .cart table input[type="number"] {
width: 68px;
padding: 10px;
border: 1px solid #ccc;
color: #555555;
border-radius: 5px;
}

main .cart .subtotal {
text-align: right;
padding: 40px 0;
}

main .cart .subtotal .text {
padding-right: 40px;
font-size: 18px;
}

main .cart .subtotal .price {
font-size: 18px;
color: #999999;
}

main .cart .buttons {
text-align: right;
padding-bottom: 40px;
}

main .cart .buttons input[type="submit"] {
margin-left: 5px;
padding: 12px 20px;
border: 0;
background: #4e5c70;
color: #FFFFFF;
font-size: 14px;
font-weight: bold;
cursor: pointer;
border-radius: 5px;
}

main .cart .buttons input[type="submit"]:hover {
background: #434f61;
}

main .placeorder h1 {
display: block;
font-weight: normal;
margin: 0;
padding: 40px 0;
font-size: 24px;
text-align: center;
width: 100%;
}

main .placeorder p {
text-align: center;
}

footer {
position: absolute;
bottom: 0;
border-top: 1px solid #EEEEEE;
padding: 20px 0;
width: 100%;
}

#searchbox input[type= »text »] {
background: url(http://2.bp.blogspot.com/-xpzxYc77ack/VDpdOE5tzMI/AAAAAAAAAeQ/TyXhIfEIUy4/s1600/search-dark.png) no-repeat 10px 13px #f2f2f2;
border: 2px solid #f2f2f2;
font: bold 12px Arial,Helvetica,Sans-serif;
color: #6A6F75;
width: 160px;
padding: 14px 17px 12px 30px;
-webkit-border-radius: 5px 0px 0px 5px;
-moz-border-radius: 5px 0px 0px 5px;
border-radius: 5px 0px 0px 5px;
text-shadow: 0 2px 3px #fff;
-webkit-transition: all 0.7s ease 0s;
-moz-transition: all 0.7s ease 0s;
-o-transition: all 0.7s ease 0s;
transition: all 0.7s ease 0s;
}
#searchbox input[type= »text »]:focus {
background: #f7f7f7;
border: 2px solid #f7f7f7;
width: 600px;
padding-left: 100px;
}

.button-submit{
background: url(http://4.bp.blogspot.com/-slkXXLUcxqg/VEQI-sJKfZI/AAAAAAAAAlA/9UtEyStfDHw/s1600/slider-arrow-right.png) no-repeat;
margin-left: -40px;
border-width: 0px;
width: 43px;
height:43px;
}


a {
text-decoration: none;
}

#login{
margin: 0;
padding: 0;
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
font-family: 'Jost', sans-serif;
}

.main{
width: 400px;
height: 550px;
overflow: hidden;
border-radius: 10px;
box-shadow: 5px 15px 45px #000;
}

#chk{
display:none;
visibility:hidden;
}


#login .login{
position: relative;
width:100%;
height: 100%;
padding-top:50px;
}

#login .login label{
color: #573b8a;
}

#login label{
color: #fff;
font-size: 2.3em;
justify-content: center;
display: flex;
font-weight: bold;
cursor: pointer;
transition: .5s ease-in-out;
}

#login input{
width: 60%;
height: 30px;
background: #e0dede;
justify-content: center;
display: flex;
margin: 20px auto;
padding: 10px;
border: none;
outline: none;
}

#login button{
width: 60%;
height: 40px;
margin: 10px auto;
justify-content: center;
display: block;
color: #fff;
background: #573b8a;
font-size: 1em;
font-weight: bold;
margin-top: 20px;
outline: none;
border: none;
border-radius: 5px;
transition: .2s ease-in;
cursor: pointer;
}


#login button:hover{
background: #6d44b8;
}

#login .signup{
background: #573b8a;
transform: translateY(-150px);
transition: .8s ease-in-out;
padding-top: 10px;
height:100%;
}

.signup label{
transform: scale(.6);
margin-bottom: 20px;
}


#login .login form {
    padding-bottom: 1000px;
}

#chk:checked ~ .signup{
transform: translateY(-590px);
}

#chk:checked ~ .signup label{
transform: scale(1);
}

#chk:checked ~ .login label{
transform: scale(.6);
}

.contenu {
margin:auto;
text-align:center;
}


.contenu a {
display: inline;
position: relative;
color: #060201;
text-decoration: none;

}

.contenu a:after {
content: '';
display: block;
bottom: 2px;
width: 0%;
left: 0px;
height: 0.5px;
background: #060201;
}


.contenu a:hover:after {
width: 100%;
}
.horizontal {
writing-mode: horizontal-tb;
}

.container {
inline-size: 400px;
display: grid;
grid-template-columns:350px 150px 160px 160px 160px;
align-items: end;
align-content: end;
}

.item:first-child {
grid-column: 1 / 3;
grid-row: 1 / 3;
align-self: start;
}

.item {
padding: 10px;
background-color: rgba(111,41,97,.3);

}

.Titre{
text-align: center;
font-size: 20px;
font-weight: bold;
}



.formulaireship{
font-size: 14px;
font-weight: bold;
margin-left : 27%;
margin-right : 27%;
column-count : 2;
}

.formulairecart{
font-size: 14px;
font-weight: bold;
margin-left : 35%;
margin-right : 35%;
text-align : center;
}

.formtextregister{
margin: 4%;
}

.buttonsub2{
margin-left: 38%;
background: #4e5c70;
border: 0;
color: #FFFFFF;
width: 400px;
padding: 12px 0;
text-transform: uppercase;
font-size: 14px;
font-weight: bold;
border-radius: 5px;
cursor: pointer;
}






