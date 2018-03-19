<!DOCTYPE html>

<html>
<head>
    <title>Login</title>




    <style>



        @font-face {
            font-family: 'Raleway', sans-serif;
        }
        /* CSS reset */
        body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td {
            margin:0;
            padding:0;
        }
        html,body {
            margin:0;
            padding:0;
            height: 100%;
        }
        table {
            border-collapse:collapse;
            border-spacing:0;
        }
        fieldset,img {
            border:0;
        }
        address,caption,cite,code,dfn,th,var {
            font-style:normal;
            font-weight:normal;
        }
        ol,ul {
            list-style:none;
        }
        caption,th {
            text-align:left;
        }
        h1,h2,h3,h4,h5,h6 {
            font-size:100%;
            font-weight:normal;
        }
        q:before,q:after {
            content:'';
        }
        abbr,acronym { border:0;
        }
        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        /* General Demo Style */
        body{
            font-family: Cambria, Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif;
            background: #fff url(../images/bg.jpg) repeat top left;
            font-weight: 400;
            font-size: 15px;
            color: #1d3c41;
            overflow-y: scroll;
        }
        a{
            color: #333;
            text-decoration: none;
        }
        .container{
            width: 100%;
            height: 100%;
            position: relative;
            text-align: center;

        }
        .clr{
            clear: both;
        }
        .container > header{
            padding: 20px 30px 10px 30px;
            margin: 0px 20px 10px 20px;
            position: relative;
            display: block;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
            text-align: center;
        }
        .container > header h1{
            font-family: 'Raleway', sans-serif;
            font-size: 35px;
            line-height: 35px;
            position: relative;
            color:#FFF;
            padding: 0px 0px 5px 0px;
            font-weight:600;
        }
        .container > header h1 span{
            color: #7cbcd6;
            text-shadow: 0px 1px 1px rgba(255,255,255,0.8);
        }
        .container > header h2{
            font-size: 16px;
            font-style: italic;
            color: #2d6277;
            text-shadow: 0px 1px 1px rgba(255,255,255,0.8);
        }
        /* Header Style */
        .codrops-top{
            line-height: 24px;
            font-size: 11px;
            background: rgba(255, 255, 255, 0.4);
            text-transform: uppercase;
            z-index: 9999;
            position: relative;
            box-shadow: 1px 0px 2px rgba(0,0,0,0.2);
        }
        .codrops-top a{
            padding: 0px 10px;
            letter-spacing: 1px;
            color: #333;
            text-shadow: 0px 1px 1px #fff;
            display: block;
            float: left;
        }
        .codrops-top a:hover{
            background: #fff;
        }
        .codrops-top span.right{
            float: right;
        }
        .codrops-top span.right a{
            float: left;
            display: block;
        }

        .codrops-demos{
            text-align:center;
            display: block;
            padding: 14px;
        }
        .codrops-demos span{
            display: inline-block;
            padding-right: 15px;
            text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.8);
        }
        .codrops-demos a,
        .codrops-demos a.current-demo,
        .codrops-demos a.current-demo:hover{
            display: inline-block;
            font-style: italic;
            font-size: 12px;
            padding: 3px 5px;
            margin: 0px 3px;
            font-weight: 800;
            box-shadow: 1px 1px 1px rgba(0,0,0,0.05) inset;
            color: #fff;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
            background: rgba(104,171,194,0.5);
        }
        .codrops-demos a:hover{
            background: #4fa2c4;
        }
        .codrops-demos a.current-demo,
        .codrops-demos a.current-demo:hover{
            color: rgba(104,171,194,1);
            background: rgba(255,255,255,0.9);
            box-shadow: 0px 1px 1px rgba(0,0,0,0.1);
        }

        /* remove codrops styles and reset the whole thing */
        @import url('https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
        body{background:url(http://www.businessnewsdaily.com/images/i/000/007/874/original/free-business-plan-templates.jpg);
            background-attachment:fixed;
            background-size:cover;
        }
        #container_demo{
            text-align: left;
            margin: 0;
            padding: 0;
            margin: 0 auto;
            font-family: 'Raleway', sans-serif;
        }

        a.hiddenanchor{
            display: none;
        }
        /** The wrapper that will contain our two forms **/
        #wrapper{
            width: 60%;
            right: 0px;
            min-height: 560px;
            margin: 0px auto;
            width: 500px;
            position: relative;
        }
        /**** Styling the form elements **/

        /**** general text styling ****/
        #wrapper a{
            color: rgb(95, 155, 198);
            text-decoration: underline;
        }

        #wrapper h1{
            font-size: 48px;
            color: rgb(6, 106, 117);
            padding: 2px 0 10px 0;
            font-family: 'FranchiseRegular','Arial Narrow',Arial,sans-serif;
            font-weight: bold;
            text-align: center;
            padding-bottom: 30px;
        }
        /** For the moment only webkit supports the background-clip:text; */
        #wrapper h1{
            background: -webkit-repeating-linear-gradient(-45deg,
            rgb(18, 83, 93) ,
            rgb(18, 83, 93) 20px,
            rgb(64, 111, 118) 20px,
            rgb(64, 111, 118) 40px,
            rgb(18, 83, 93) 40px);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
        }
        #wrapper h1:after{
            content: ' ';
            display: block;
            width: 100%;
            height: 2px;
            margin-top: 10px;
            background: -moz-linear-gradient(left, rgba(147,184,189,0) 0%, rgba(147,184,189,0.8) 20%, rgba(147,184,189,1) 53%, rgba(147,184,189,0.8) 79%, rgba(147,184,189,0) 100%);
            background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(147,184,189,0)), color-stop(20%,rgba(147,184,189,0.8)), color-stop(53%,rgba(147,184,189,1)), color-stop(79%,rgba(147,184,189,0.8)), color-stop(100%,rgba(147,184,189,0)));
            background: -webkit-linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%);
            background: -o-linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%);
            background: -ms-linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%);
            background: linear-gradient(left, rgba(147,184,189,0) 0%,rgba(147,184,189,0.8) 20%,rgba(147,184,189,1) 53%,rgba(147,184,189,0.8) 79%,rgba(147,184,189,0) 100%);
        }

        #wrapper p{
            margin-bottom:15px;
        }
        #wrapper p:first-child{
            margin: 0px;
        }
        #wrapper label{
            color: rgb(64, 92, 96);
            position: relative;
        }

        /**** advanced input styling ****/
        /* placeholder */
        ::-webkit-input-placeholder  {
            color: rgb(190, 188, 188);
            font-style: italic;
        }
        input:-moz-placeholder,
        textarea:-moz-placeholder{
            color: rgb(190, 188, 188);
            font-style: italic;
        }
        input {
            outline: none;
        }

        /* all the input except submit and checkbox */
        #wrapper input:not([type="checkbox"]){
            width: 92%;
            margin-top: 4px;
            padding: 10px 5px 10px 32px;
            border: 1px solid rgb(178, 178, 178);
            -webkit-appearance: textfield;
            -webkit-box-sizing: content-box;
            -moz-box-sizing : content-box;
            box-sizing : content-box;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
            -moz-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
            box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        #wrapper input:not([type="checkbox"]):active,
        #wrapper input:not([type="checkbox"]):focus{
            border: 1px solid rgba(91, 90, 90, 0.7);
            background: rgba(238, 236, 240, 0.2);
            -webkit-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.9) inset;
            -moz-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.9) inset;
            box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.9) inset;
        }

        /** the magic icon trick ! **/
        [data-icon]:after {
            content: attr(data-icon);
            font-family: 'FontomasCustomRegular';
            color: rgb(106, 159, 171);
            position: absolute;
            left: 10px;
            top: 35px;
            width: 30px;
        }

        /*styling both submit buttons */
        #wrapper p.button input{
            width: 30%;
            cursor: pointer;
            background: rgb(61, 157, 179);
            padding: 8px 5px;
            font-family: 'BebasNeueRegular','Arial Narrow',Arial,sans-serif;
            color: #fff;
            font-size: 24px;
            border: 1px solid rgb(28, 108, 122);
            margin-bottom: 10px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0px 1px 6px 4px rgba(0, 0, 0, 0.07) inset,
            0px 0px 0px 3px rgb(254, 254, 254),
            0px 5px 3px 3px rgb(210, 210, 210);
            -moz-box-shadow:0px 1px 6px 4px rgba(0, 0, 0, 0.07) inset,
            0px 0px 0px 3px rgb(254, 254, 254),
            0px 5px 3px 3px rgb(210, 210, 210);
            box-shadow:0px 1px 6px 4px rgba(0, 0, 0, 0.07) inset,
            0px 0px 0px 3px rgb(254, 254, 254),
            0px 5px 3px 3px rgb(210, 210, 210);
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }
        #wrapper p.button input:hover{
            background: rgb(74, 179, 198);
        }
        #wrapper p.button input:active,
        #wrapper p.button input:focus{
            background: rgb(40, 137, 154);
            position: relative;
            top: 1px;
            border: 1px solid rgb(12, 76, 87);
            -webkit-box-shadow: 0px 1px 6px 4px rgba(0, 0, 0, 0.2) inset;
            -moz-box-shadow: 0px 1px 6px 4px rgba(0, 0, 0, 0.2) inset;
            box-shadow: 0px 1px 6px 4px rgba(0, 0, 0, 0.2) inset;
        }
        p.login.button,
        p.signin.button{
            text-align: right;
            margin: 5px 0;
        }


        /* styling the checkbox "keep me logged in"*/
        .keeplogin{
            margin-top: -5px;
        }
        .keeplogin input,
        .keeplogin label{
            display: inline-block;
            font-size: 12px;
            font-style: italic;
        }
        .keeplogin input#loginkeeping{
            margin-right: 5px;
        }
        .keeplogin label{
            width: 80%;
        }


        /*styling the links to change from one form to another */

        p.change_link{
            position: absolute;
            color: rgb(127, 124, 124);
            left: 0px;
            height: 20px;
            width: 438px;
            padding: 17px 30px 20px 30px;
            font-size: 16px	;
            text-align: right;
            border-top: 1px solid rgb(219, 229, 232);
            -webkit-border-radius: 0 0  5px 5px;
            -moz-border-radius: 0 0  5px 5px;
            border-radius: 0 0  5px 5px;
            background: rgb(225, 234, 235);
            background: -moz-repeating-linear-gradient(-45deg,
            rgb(247, 247, 247) ,
            rgb(247, 247, 247) 15px,
            rgb(225, 234, 235) 15px,
            rgb(225, 234, 235) 30px,
            rgb(247, 247, 247) 30px
            );
            background: -webkit-repeating-linear-gradient(-45deg,
            rgb(247, 247, 247) ,
            rgb(247, 247, 247) 15px,
            rgb(225, 234, 235) 15px,
            rgb(225, 234, 235) 30px,
            rgb(247, 247, 247) 30px
            );
            background: -o-repeating-linear-gradient(-45deg,
            rgb(247, 247, 247) ,
            rgb(247, 247, 247) 15px,
            rgb(225, 234, 235) 15px,
            rgb(225, 234, 235) 30px,
            rgb(247, 247, 247) 30px
            );
            background: repeating-linear-gradient(-45deg,
            rgb(247, 247, 247) ,
            rgb(247, 247, 247) 15px,
            rgb(225, 234, 235) 15px,
            rgb(225, 234, 235) 30px,
            rgb(247, 247, 247) 30px
            );
        }
        #wrapper p.change_link a {
            display: inline-block;
            font-weight: bold;
            background: rgb(247, 248, 241);
            padding: 2px 6px;
            color: rgb(29, 162, 193);
            margin-left: 10px;
            text-decoration: none;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            border: 1px solid rgb(203, 213, 214);
            -webkit-transition: all 0.4s linear;
            -moz-transition: all 0.4s  linear;
            -o-transition: all 0.4s linear;
            -ms-transition: all 0.4s  linear;
            transition: all 0.4s  linear;
        }
        #wrapper p.change_link a:hover {
            color: rgb(57, 191, 215);
            background: rgb(247, 247, 247);
            border: 1px solid rgb(74, 179, 198);
        }
        #wrapper p.change_link a:active{
            position: relative;
            top: 1px;
        }
        /** Styling both forms **/
        #register,
        #login{
            position: absolute;
            top: 0px;
            width: 88%;
            padding: 18px 6% 60px 6%;
            margin:0  35px;
            background: rgb(247, 247, 247);
            border: 1px solid rgba(147, 184, 189,0.8);
            -webkit-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
            -moz-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
            box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
            -webkit-box-shadow: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        #register{
            z-index: 21;
            opacity: 0;
        }
        #login{
            z-index: 22;
        }
        #toregister:target ~ #wrapper #register,
        #tologin:target ~ #wrapper #login{
            -webkit-box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.36);
            -moz-box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.36);
            box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.36);
            z-index: 22;
            -webkit-animation-name: fadeInLeft;
            -moz-animation-name: fadeInLeft;
            -ms-animation-name: fadeInLeft;
            -o-animation-name: fadeInLeft;
            animation-name: fadeInLeft;
            -webkit-animation-delay: .1s;
            -moz-animation-delay: .1s;
            -o-animation-delay: .1s;
            -ms-animation-delay: .1s;
            animation-delay: .1s;
        }
        #toregister:target ~ #wrapper #login,
        #tologin:target ~ #wrapper #register{
            -webkit-animation-name: fadeOutLeft;
            -moz-animation-name: fadeOutLeft;
            -ms-animation-name: fadeOutLeft;
            -o-animation-name: fadeOutLeft;
            animation-name: fadeOutLeft;
        }

        /** the actual animation, credit where due : http://daneden.me/animate/ ***/
        .animate{
            -webkit-animation-duration: 0.5s;
            -webkit-animation-timing-function: ease;
            -webkit-animation-fill-mode: both;

            -moz-animation-duration: 0.5s;
            -moz-animation-timing-function: ease;
            -moz-animation-fill-mode: both;

            -o-animation-duration: 0.5s;
            -o-animation-timing-function: ease;
            -o-animation-fill-mode: both;

            -ms-animation-duration: 0.5s;
            -ms-animation-timing-function: ease;
            -ms-animation-fill-mode: both;

            animation-duration: 0.5s;
            animation-timing-function: ease;
            animation-fill-mode: both;
        }

        /** yerk some ugly IE fixes 'cause I know someone will ask "why does it look ugly in IE?", no matter how many warnings I will put in the article */

        .lt8 #wrapper input{
            padding: 10px 5px 10px 32px;
            width: 92%;
        }
        .lt8 #wrapper input[type=checkbox]{
            width: 10px;
            padding: 0;
        }
        .lt8 #wrapper h1{
            color: #066A75;
        }
        .lt8 #register{
            display: none;
        }
        .lt8 p.change_link,
        .ie9 p.change_link{
            position: absolute;
            height: 90px;
            background: transparent;
        }

        /*
Animate.css - http://daneden.me/animate
LICENSED UNDER THE  MIT LICENSE (MIT)

Copyright (c) 2011 Dan Eden

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/

        .animated {
            -webkit-animation-fill-mode: both;
            -moz-animation-fill-mode: both;
            -ms-animation-fill-mode: both;
            -o-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-duration: 1s;
            -moz-animation-duration: 1s;
            -ms-animation-duration: 1s;
            -o-animation-duration: 1s;
            animation-duration: 1s;
        }

        .animated.hinge {
            -webkit-animation-duration: 2s;
            -moz-animation-duration: 2s;
            -ms-animation-duration: 2s;
            -o-animation-duration: 2s;
            animation-duration: 2s;
        }

        @-webkit-keyframes flash {
            0%, 50%, 100% {opacity: 1;}
            25%, 75% {opacity: 0;}
        }

        @-moz-keyframes flash {
            0%, 50%, 100% {opacity: 1;}
            25%, 75% {opacity: 0;}
        }

        @-ms-keyframes flash {
        0%, 50%, 100% {opacity: 1;}
        25%, 75% {opacity: 0;}
        }

        @-o-keyframes flash {
            0%, 50%, 100% {opacity: 1;}
            25%, 75% {opacity: 0;}
        }

        @keyframes flash {
            0%, 50%, 100% {opacity: 1;}
            25%, 75% {opacity: 0;}
        }

        .flash {
            -webkit-animation-name: flash;
            -moz-animation-name: flash;
            -ms-animation-name: flash;
            -o-animation-name: flash;
            animation-name: flash;
        }
        @-webkit-keyframes shake {
            0%, 100% {-webkit-transform: translateX(0);}
            10%, 30%, 50%, 70%, 90% {-webkit-transform: translateX(-10px);}
            20%, 40%, 60%, 80% {-webkit-transform: translateX(10px);}
        }

        @-moz-keyframes shake {
            0%, 100% {-moz-transform: translateX(0);}
            10%, 30%, 50%, 70%, 90% {-moz-transform: translateX(-10px);}
            20%, 40%, 60%, 80% {-moz-transform: translateX(10px);}
        }

        @-ms-keyframes shake {
        0%, 100% {-ms-transform: translateX(0);}
        10%, 30%, 50%, 70%, 90% {-ms-transform: translateX(-10px);}
        20%, 40%, 60%, 80% {-ms-transform: translateX(10px);}
        }

        @-o-keyframes shake {
            0%, 100% {-o-transform: translateX(0);}
            10%, 30%, 50%, 70%, 90% {-o-transform: translateX(-10px);}
            20%, 40%, 60%, 80% {-o-transform: translateX(10px);}
        }

        @keyframes shake {
            0%, 100% {transform: translateX(0);}
            10%, 30%, 50%, 70%, 90% {transform: translateX(-10px);}
            20%, 40%, 60%, 80% {transform: translateX(10px);}
        }

        .shake {
            -webkit-animation-name: shake;
            -moz-animation-name: shake;
            -ms-animation-name: shake;
            -o-animation-name: shake;
            animation-name: shake;
        }
        @-webkit-keyframes bounce {
            0%, 20%, 50%, 80%, 100% {-webkit-transform: translateY(0);}
            40% {-webkit-transform: translateY(-30px);}
            60% {-webkit-transform: translateY(-15px);}
        }

        @-moz-keyframes bounce {
            0%, 20%, 50%, 80%, 100% {-moz-transform: translateY(0);}
            40% {-moz-transform: translateY(-30px);}
            60% {-moz-transform: translateY(-15px);}
        }

        @-ms-keyframes bounce {
        0%, 20%, 50%, 80%, 100% {-ms-transform: translateY(0);}
        40% {-ms-transform: translateY(-30px);}
        60% {-ms-transform: translateY(-15px);}
        }

        @-o-keyframes bounce {
            0%, 20%, 50%, 80%, 100% {-o-transform: translateY(0);}
            40% {-o-transform: translateY(-30px);}
            60% {-o-transform: translateY(-15px);}
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-30px);}
            60% {transform: translateY(-15px);}
        }

        .bounce {
            -webkit-animation-name: bounce;
            -moz-animation-name: bounce;
            -ms-animation-name: bounce;
            -o-animation-name: bounce;
            animation-name: bounce;
        }
        @-webkit-keyframes tada {
            0% {-webkit-transform: scale(1);}
            10%, 20% {-webkit-transform: scale(0.9) rotate(-3deg);}
            30%, 50%, 70%, 90% {-webkit-transform: scale(1.1) rotate(3deg);}
            40%, 60%, 80% {-webkit-transform: scale(1.1) rotate(-3deg);}
            100% {-webkit-transform: scale(1) rotate(0);}
        }

        @-moz-keyframes tada {
            0% {-moz-transform: scale(1);}
            10%, 20% {-moz-transform: scale(0.9) rotate(-3deg);}
            30%, 50%, 70%, 90% {-moz-transform: scale(1.1) rotate(3deg);}
            40%, 60%, 80% {-moz-transform: scale(1.1) rotate(-3deg);}
            100% {-moz-transform: scale(1) rotate(0);}
        }

        @-ms-keyframes tada {
        0% {-ms-transform: scale(1);}
        10%, 20% {-ms-transform: scale(0.9) rotate(-3deg);}
        30%, 50%, 70%, 90% {-ms-transform: scale(1.1) rotate(3deg);}
        40%, 60%, 80% {-ms-transform: scale(1.1) rotate(-3deg);}
        100% {-ms-transform: scale(1) rotate(0);}
        }

        @-o-keyframes tada {
            0% {-o-transform: scale(1);}
            10%, 20% {-o-transform: scale(0.9) rotate(-3deg);}
            30%, 50%, 70%, 90% {-o-transform: scale(1.1) rotate(3deg);}
            40%, 60%, 80% {-o-transform: scale(1.1) rotate(-3deg);}
            100% {-o-transform: scale(1) rotate(0);}
        }

        @keyframes tada {
            0% {transform: scale(1);}
            10%, 20% {transform: scale(0.9) rotate(-3deg);}
            30%, 50%, 70%, 90% {transform: scale(1.1) rotate(3deg);}
            40%, 60%, 80% {transform: scale(1.1) rotate(-3deg);}
            100% {transform: scale(1) rotate(0);}
        }

        .tada {
            -webkit-animation-name: tada;
            -moz-animation-name: tada;
            -ms-animation-name: tada;
            -o-animation-name: tada;
            animation-name: tada;
        }
        @-webkit-keyframes swing {
            20%, 40%, 60%, 80%, 100% { -webkit-transform-origin: top center; }
            20% { -webkit-transform: rotate(15deg); }
            40% { -webkit-transform: rotate(-10deg); }
            60% { -webkit-transform: rotate(5deg); }
            80% { -webkit-transform: rotate(-5deg); }
            100% { -webkit-transform: rotate(0deg); }
        }

        @-moz-keyframes swing {
            20% { -moz-transform: rotate(15deg); }
            40% { -moz-transform: rotate(-10deg); }
            60% { -moz-transform: rotate(5deg); }
            80% { -moz-transform: rotate(-5deg); }
            100% { -moz-transform: rotate(0deg); }
        }

        @-ms-keyframes swing {
        20% { -ms-transform: rotate(15deg); }
        40% { -ms-transform: rotate(-10deg); }
        60% { -ms-transform: rotate(5deg); }
        80% { -ms-transform: rotate(-5deg); }
        100% { -ms-transform: rotate(0deg); }
        }

        @-o-keyframes swing {
            20% { -o-transform: rotate(15deg); }
            40% { -o-transform: rotate(-10deg); }
            60% { -o-transform: rotate(5deg); }
            80% { -o-transform: rotate(-5deg); }
            100% { -o-transform: rotate(0deg); }
        }

        @keyframes swing {
            20% { transform: rotate(15deg); }
            40% { transform: rotate(-10deg); }
            60% { transform: rotate(5deg); }
            80% { transform: rotate(-5deg); }
            100% { transform: rotate(0deg); }
        }

        .swing {
            -webkit-transform-origin: top center;
            -moz-transform-origin: top center;
            -ms-transform-origin: top center;
            -o-transform-origin: top center;
            transform-origin: top center;
            -webkit-animation-name: swing;
            -moz-animation-name: swing;
            -ms-animation-name: swing;
            -o-animation-name: swing;
            animation-name: swing;
        }
        /* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

        @-webkit-keyframes wobble {
            0% { -webkit-transform: translateX(0%); }
            15% { -webkit-transform: translateX(-25%) rotate(-5deg); }
            30% { -webkit-transform: translateX(20%) rotate(3deg); }
            45% { -webkit-transform: translateX(-15%) rotate(-3deg); }
            60% { -webkit-transform: translateX(10%) rotate(2deg); }
            75% { -webkit-transform: translateX(-5%) rotate(-1deg); }
            100% { -webkit-transform: translateX(0%); }
        }

        @-moz-keyframes wobble {
            0% { -moz-transform: translateX(0%); }
            15% { -moz-transform: translateX(-25%) rotate(-5deg); }
            30% { -moz-transform: translateX(20%) rotate(3deg); }
            45% { -moz-transform: translateX(-15%) rotate(-3deg); }
            60% { -moz-transform: translateX(10%) rotate(2deg); }
            75% { -moz-transform: translateX(-5%) rotate(-1deg); }
            100% { -moz-transform: translateX(0%); }
        }

        @-ms-keyframes wobble {
        0% { -ms-transform: translateX(0%); }
        15% { -ms-transform: translateX(-25%) rotate(-5deg); }
        30% { -ms-transform: translateX(20%) rotate(3deg); }
        45% { -ms-transform: translateX(-15%) rotate(-3deg); }
        60% { -ms-transform: translateX(10%) rotate(2deg); }
        75% { -ms-transform: translateX(-5%) rotate(-1deg); }
        100% { -ms-transform: translateX(0%); }
        }

        @-o-keyframes wobble {
            0% { -o-transform: translateX(0%); }
            15% { -o-transform: translateX(-25%) rotate(-5deg); }
            30% { -o-transform: translateX(20%) rotate(3deg); }
            45% { -o-transform: translateX(-15%) rotate(-3deg); }
            60% { -o-transform: translateX(10%) rotate(2deg); }
            75% { -o-transform: translateX(-5%) rotate(-1deg); }
            100% { -o-transform: translateX(0%); }
        }

        @keyframes wobble {
            0% { transform: translateX(0%); }
            15% { transform: translateX(-25%) rotate(-5deg); }
            30% { transform: translateX(20%) rotate(3deg); }
            45% { transform: translateX(-15%) rotate(-3deg); }
            60% { transform: translateX(10%) rotate(2deg); }
            75% { transform: translateX(-5%) rotate(-1deg); }
            100% { transform: translateX(0%); }
        }

        .wobble {
            -webkit-animation-name: wobble;
            -moz-animation-name: wobble;
            -ms-animation-name: wobble;
            -o-animation-name: wobble;
            animation-name: wobble;
        }
        /* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

        @-webkit-keyframes pulse {
            0% { -webkit-transform: scale(1); }
            50% { -webkit-transform: scale(1.1); }
            100% { -webkit-transform: scale(1); }
        }
        @-moz-keyframes pulse {
            0% { -moz-transform: scale(1); }
            50% { -moz-transform: scale(1.1); }
            100% { -moz-transform: scale(1); }
        }
        @-ms-keyframes pulse {
        0% { -ms-transform: scale(1); }
        50% { -ms-transform: scale(1.1); }
        100% { -ms-transform: scale(1); }
        }
        @-o-keyframes pulse {
            0% { -o-transform: scale(1); }
            50% { -o-transform: scale(1.1); }
            100% { -o-transform: scale(1); }
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .pulse {
            -webkit-animation-name: pulse;
            -moz-animation-name: pulse;
            -ms-animation-name: pulse;
            -o-animation-name: pulse;
            animation-name: pulse;
        }
        @-webkit-keyframes flip {
            0% {
                -webkit-transform: perspective(400px) rotateY(0);
                -webkit-animation-timing-function: ease-out;
            }
            40% {
                -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -webkit-animation-timing-function: ease-out;
            }
            50% {
                -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -webkit-animation-timing-function: ease-in;
            }
            80% {
                -webkit-transform: perspective(400px) rotateY(360deg) scale(.95);
                -webkit-animation-timing-function: ease-in;
            }
            100% {
                -webkit-transform: perspective(400px) scale(1);
                -webkit-animation-timing-function: ease-in;
            }
        }
        @-moz-keyframes flip {
            0% {
                -moz-transform: perspective(400px) rotateY(0);
                -moz-animation-timing-function: ease-out;
            }
            40% {
                -moz-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -moz-animation-timing-function: ease-out;
            }
            50% {
                -moz-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -moz-animation-timing-function: ease-in;
            }
            80% {
                -moz-transform: perspective(400px) rotateY(360deg) scale(.95);
                -moz-animation-timing-function: ease-in;
            }
            100% {
                -moz-transform: perspective(400px) scale(1);
                -moz-animation-timing-function: ease-in;
            }
        }
        @-ms-keyframes flip {
        0% {
            -ms-transform: perspective(400px) rotateY(0);
            -ms-animation-timing-function: ease-out;
        }
        40% {
            -ms-transform: perspective(400px) translateZ(150px) rotateY(170deg);
            -ms-animation-timing-function: ease-out;
        }
        50% {
            -ms-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
            -ms-animation-timing-function: ease-in;
        }
        80% {
            -ms-transform: perspective(400px) rotateY(360deg) scale(.95);
            -ms-animation-timing-function: ease-in;
        }
        100% {
            -ms-transform: perspective(400px) scale(1);
            -ms-animation-timing-function: ease-in;
        }
        }
        @-o-keyframes flip {
            0% {
                -o-transform: perspective(400px) rotateY(0);
                -o-animation-timing-function: ease-out;
            }
            40% {
                -o-transform: perspective(400px) translateZ(150px) rotateY(170deg);
                -o-animation-timing-function: ease-out;
            }
            50% {
                -o-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                -o-animation-timing-function: ease-in;
            }
            80% {
                -o-transform: perspective(400px) rotateY(360deg) scale(.95);
                -o-animation-timing-function: ease-in;
            }
            100% {
                -o-transform: perspective(400px) scale(1);
                -o-animation-timing-function: ease-in;
            }
        }
        @keyframes flip {
            0% {
                transform: perspective(400px) rotateY(0);
                animation-timing-function: ease-out;
            }
            40% {
                transform: perspective(400px) translateZ(150px) rotateY(170deg);
                animation-timing-function: ease-out;
            }
            50% {
                transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
                animation-timing-function: ease-in;
            }
            80% {
                transform: perspective(400px) rotateY(360deg) scale(.95);
                animation-timing-function: ease-in;
            }
            100% {
                transform: perspective(400px) scale(1);
                animation-timing-function: ease-in;
            }
        }

        .flip {
            -webkit-backface-visibility: visible !important;
            -webkit-animation-name: flip;
            -moz-backface-visibility: visible !important;
            -moz-animation-name: flip;
            -ms-backface-visibility: visible !important;
            -ms-animation-name: flip;
            -o-backface-visibility: visible !important;
            -o-animation-name: flip;
            backface-visibility: visible !important;
            animation-name: flip;
        }
        @-webkit-keyframes flipInX {
            0% {
                -webkit-transform: perspective(400px) rotateX(90deg);
                opacity: 0;
            }

            40% {
                -webkit-transform: perspective(400px) rotateX(-10deg);
            }

            70% {
                -webkit-transform: perspective(400px) rotateX(10deg);
            }

            100% {
                -webkit-transform: perspective(400px) rotateX(0deg);
                opacity: 1;
            }
        }
        @-moz-keyframes flipInX {
            0% {
                -moz-transform: perspective(400px) rotateX(90deg);
                opacity: 0;
            }

            40% {
                -moz-transform: perspective(400px) rotateX(-10deg);
            }

            70% {
                -moz-transform: perspective(400px) rotateX(10deg);
            }

            100% {
                -moz-transform: perspective(400px) rotateX(0deg);
                opacity: 1;
            }
        }
        @-ms-keyframes flipInX {
        0% {
            -ms-transform: perspective(400px) rotateX(90deg);
            opacity: 0;
        }

        40% {
            -ms-transform: perspective(400px) rotateX(-10deg);
        }

        70% {
            -ms-transform: perspective(400px) rotateX(10deg);
        }

        100% {
            -ms-transform: perspective(400px) rotateX(0deg);
            opacity: 1;
        }
        }
        @-o-keyframes flipInX {
            0% {
                -o-transform: perspective(400px) rotateX(90deg);
                opacity: 0;
            }

            40% {
                -o-transform: perspective(400px) rotateX(-10deg);
            }

            70% {
                -o-transform: perspective(400px) rotateX(10deg);
            }

            100% {
                -o-transform: perspective(400px) rotateX(0deg);
                opacity: 1;
            }
        }
        @keyframes flipInX {
            0% {
                transform: perspective(400px) rotateX(90deg);
                opacity: 0;
            }

            40% {
                transform: perspective(400px) rotateX(-10deg);
            }

            70% {
                transform: perspective(400px) rotateX(10deg);
            }

            100% {
                transform: perspective(400px) rotateX(0deg);
                opacity: 1;
            }
        }

        .flipInX {
            -webkit-backface-visibility: visible !important;
            -webkit-animation-name: flipInX;
            -moz-backface-visibility: visible !important;
            -moz-animation-name: flipInX;
            -ms-backface-visibility: visible !important;
            -ms-animation-name: flipInX;
            -o-backface-visibility: visible !important;
            -o-animation-name: flipInX;
            backface-visibility: visible !important;
            animation-name: flipInX;
        }
        @-webkit-keyframes flipOutX {
            0% {
                -webkit-transform: perspective(400px) rotateX(0deg);
                opacity: 1;
            }
            100% {
                -webkit-transform: perspective(400px) rotateX(90deg);
                opacity: 0;
            }
        }

        @-moz-keyframes flipOutX {
            0% {
                -moz-transform: perspective(400px) rotateX(0deg);
                opacity: 1;
            }
            100% {
                -moz-transform: perspective(400px) rotateX(90deg);
                opacity: 0;
            }
        }

        @-ms-keyframes flipOutX {
        0% {
            -ms-transform: perspective(400px) rotateX(0deg);
            opacity: 1;
        }
        100% {
            -ms-transform: perspective(400px) rotateX(90deg);
            opacity: 0;
        }
        }

        @-o-keyframes flipOutX {
            0% {
                -o-transform: perspective(400px) rotateX(0deg);
                opacity: 1;
            }
            100% {
                -o-transform: perspective(400px) rotateX(90deg);
                opacity: 0;
            }
        }

        @keyframes flipOutX {
            0% {
                transform: perspective(400px) rotateX(0deg);
                opacity: 1;
            }
            100% {
                transform: perspective(400px) rotateX(90deg);
                opacity: 0;
            }
        }

        .flipOutX {
            -webkit-animation-name: flipOutX;
            -webkit-backface-visibility: visible !important;
            -moz-animation-name: flipOutX;
            -moz-backface-visibility: visible !important;
            -ms-animation-name: flipOutX;
            -ms-backface-visibility: visible !important;
            -o-animation-name: flipOutX;
            -o-backface-visibility: visible !important;
            animation-name: flipOutX;
            backface-visibility: visible !important;
        }
        @-webkit-keyframes flipInY {
            0% {
                -webkit-transform: perspective(400px) rotateY(90deg);
                opacity: 0;
            }

            40% {
                -webkit-transform: perspective(400px) rotateY(-10deg);
            }

            70% {
                -webkit-transform: perspective(400px) rotateY(10deg);
            }

            100% {
                -webkit-transform: perspective(400px) rotateY(0deg);
                opacity: 1;
            }
        }
        @-moz-keyframes flipInY {
            0% {
                -moz-transform: perspective(400px) rotateY(90deg);
                opacity: 0;
            }

            40% {
                -moz-transform: perspective(400px) rotateY(-10deg);
            }

            70% {
                -moz-transform: perspective(400px) rotateY(10deg);
            }

            100% {
                -moz-transform: perspective(400px) rotateY(0deg);
                opacity: 1;
            }
        }
        @-ms-keyframes flipInY {
        0% {
            -ms-transform: perspective(400px) rotateY(90deg);
            opacity: 0;
        }

        40% {
            -ms-transform: perspective(400px) rotateY(-10deg);
        }

        70% {
            -ms-transform: perspective(400px) rotateY(10deg);
        }

        100% {
            -ms-transform: perspective(400px) rotateY(0deg);
            opacity: 1;
        }
        }
        @-o-keyframes flipInY {
            0% {
                -o-transform: perspective(400px) rotateY(90deg);
                opacity: 0;
            }

            40% {
                -o-transform: perspective(400px) rotateY(-10deg);
            }

            70% {
                -o-transform: perspective(400px) rotateY(10deg);
            }

            100% {
                -o-transform: perspective(400px) rotateY(0deg);
                opacity: 1;
            }
        }
        @keyframes flipInY {
            0% {
                transform: perspective(400px) rotateY(90deg);
                opacity: 0;
            }

            40% {
                transform: perspective(400px) rotateY(-10deg);
            }

            70% {
                transform: perspective(400px) rotateY(10deg);
            }

            100% {
                transform: perspective(400px) rotateY(0deg);
                opacity: 1;
            }
        }

        .flipInY {
            -webkit-backface-visibility: visible !important;
            -webkit-animation-name: flipInY;
            -moz-backface-visibility: visible !important;
            -moz-animation-name: flipInY;
            -ms-backface-visibility: visible !important;
            -ms-animation-name: flipInY;
            -o-backface-visibility: visible !important;
            -o-animation-name: flipInY;
            backface-visibility: visible !important;
            animation-name: flipInY;
        }
        @-webkit-keyframes flipOutY {
            0% {
                -webkit-transform: perspective(400px) rotateY(0deg);
                opacity: 1;
            }
            100% {
                -webkit-transform: perspective(400px) rotateY(90deg);
                opacity: 0;
            }
        }
        @-moz-keyframes flipOutY {
            0% {
                -moz-transform: perspective(400px) rotateY(0deg);
                opacity: 1;
            }
            100% {
                -moz-transform: perspective(400px) rotateY(90deg);
                opacity: 0;
            }
        }
        @-ms-keyframes flipOutY {
        0% {
            -ms-transform: perspective(400px) rotateY(0deg);
            opacity: 1;
        }
        100% {
            -ms-transform: perspective(400px) rotateY(90deg);
            opacity: 0;
        }
        }
        @-o-keyframes flipOutY {
            0% {
                -o-transform: perspective(400px) rotateY(0deg);
                opacity: 1;
            }
            100% {
                -o-transform: perspective(400px) rotateY(90deg);
                opacity: 0;
            }
        }
        @keyframes flipOutY {
            0% {
                transform: perspective(400px) rotateY(0deg);
                opacity: 1;
            }
            100% {
                transform: perspective(400px) rotateY(90deg);
                opacity: 0;
            }
        }

        .flipOutY {
            -webkit-backface-visibility: visible !important;
            -webkit-animation-name: flipOutY;
            -moz-backface-visibility: visible !important;
            -moz-animation-name: flipOutY;
            -ms-backface-visibility: visible !important;
            -ms-animation-name: flipOutY;
            -o-backface-visibility: visible !important;
            -o-animation-name: flipOutY;
            backface-visibility: visible !important;
            animation-name: flipOutY;
        }
        @-webkit-keyframes fadeIn {
            0% {opacity: 0;}
            100% {opacity: 1;}
        }

        @-moz-keyframes fadeIn {
            0% {opacity: 0;}
            100% {opacity: 1;}
        }

        @-ms-keyframes fadeIn {
        0% {opacity: 0;}
        100% {opacity: 1;}
        }

        @-o-keyframes fadeIn {
            0% {opacity: 0;}
            100% {opacity: 1;}
        }

        @keyframes fadeIn {
            0% {opacity: 0;}
            100% {opacity: 1;}
        }

        .fadeIn {
            -webkit-animation-name: fadeIn;
            -moz-animation-name: fadeIn;
            -ms-animation-name: fadeIn;
            -o-animation-name: fadeIn;
            animation-name: fadeIn;
        }
        @-webkit-keyframes fadeInUp {
            0% {
                opacity: 0;
                -webkit-transform: translateY(20px);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
            }
        }

        @-moz-keyframes fadeInUp {
            0% {
                opacity: 0;
                -moz-transform: translateY(20px);
            }

            100% {
                opacity: 1;
                -moz-transform: translateY(0);
            }
        }

        @-ms-keyframes fadeInUp {
        0% {
            opacity: 0;
            -ms-transform: translateY(20px);
        }

        100% {
            opacity: 1;
            -ms-transform: translateY(0);
        }
        }

        @-o-keyframes fadeInUp {
            0% {
                opacity: 0;
                -o-transform: translateY(20px);
            }

            100% {
                opacity: 1;
                -o-transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fadeInUp {
            -webkit-animation-name: fadeInUp;
            -moz-animation-name: fadeInUp;
            -ms-animation-name: fadeInUp;
            -o-animation-name: fadeInUp;
            animation-name: fadeInUp;
        }
        @-webkit-keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
            }
        }

        @-moz-keyframes fadeInDown {
            0% {
                opacity: 0;
                -moz-transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                -moz-transform: translateY(0);
            }
        }

        @-ms-keyframes fadeInDown {
        0% {
            opacity: 0;
            -ms-transform: translateY(-20px);
        }

        100% {
            opacity: 1;
            -ms-transform: translateY(0);
        }
        }

        @-o-keyframes fadeInDown {
            0% {
                opacity: 0;
                -ms-transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                -ms-transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fadeInDown {
            -webkit-animation-name: fadeInDown;
            -moz-animation-name: fadeInDown;
            -ms-animation-name: fadeInDown;
            -o-animation-name: fadeInDown;
            animation-name: fadeInDown;
        }
        @-webkit-keyframes fadeInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-20px);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
            }
        }

        @-moz-keyframes fadeInLeft {
            0% {
                opacity: 0;
                -moz-transform: translateX(-20px);
            }

            100% {
                opacity: 1;
                -moz-transform: translateX(0);
            }
        }

        @-ms-keyframes fadeInLeft {
        0% {
            opacity: 0;
            -ms-transform: translateX(-20px);
        }

        100% {
            opacity: 1;
            -ms-transform: translateX(0);
        }
        }

        @-o-keyframes fadeInLeft {
            0% {
                opacity: 0;
                -o-transform: translateX(-20px);
            }

            100% {
                opacity: 1;
                -o-transform: translateX(0);
            }
        }

        @keyframes fadeInLeft {
            0% {
                opacity: 0;
                transform: translateX(-20px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .fadeInLeft {
            -webkit-animation-name: fadeInLeft;
            -moz-animation-name: fadeInLeft;
            -ms-animation-name: fadeInLeft;
            -o-animation-name: fadeInLeft;
            animation-name: fadeInLeft;
        }
        @-webkit-keyframes fadeInRight {
            0% {
                opacity: 0;
                -webkit-transform: translateX(20px);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
            }
        }

        @-moz-keyframes fadeInRight {
            0% {
                opacity: 0;
                -moz-transform: translateX(20px);
            }

            100% {
                opacity: 1;
                -moz-transform: translateX(0);
            }
        }

        @-ms-keyframes fadeInRight {
        0% {
            opacity: 0;
            -ms-transform: translateX(20px);
        }

        100% {
            opacity: 1;
            -ms-transform: translateX(0);
        }
        }

        @-o-keyframes fadeInRight {
            0% {
                opacity: 0;
                -o-transform: translateX(20px);
            }

            100% {
                opacity: 1;
                -o-transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            0% {
                opacity: 0;
                transform: translateX(20px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .fadeInRight {
            -webkit-animation-name: fadeInRight;
            -moz-animation-name: fadeInRight;
            -ms-animation-name: fadeInRight;
            -o-animation-name: fadeInRight;
            animation-name: fadeInRight;
        }
        @-webkit-keyframes fadeInUpBig {
            0% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
            }
        }

        @-moz-keyframes fadeInUpBig {
            0% {
                opacity: 0;
                -moz-transform: translateY(2000px);
            }

            100% {
                opacity: 1;
                -moz-transform: translateY(0);
            }
        }

        @-ms-keyframes fadeInUpBig {
        0% {
            opacity: 0;
            -ms-transform: translateY(2000px);
        }

        100% {
            opacity: 1;
            -ms-transform: translateY(0);
        }
        }

        @-o-keyframes fadeInUpBig {
            0% {
                opacity: 0;
                -o-transform: translateY(2000px);
            }

            100% {
                opacity: 1;
                -o-transform: translateY(0);
            }
        }

        @keyframes fadeInUpBig {
            0% {
                opacity: 0;
                transform: translateY(2000px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fadeInUpBig {
            -webkit-animation-name: fadeInUpBig;
            -moz-animation-name: fadeInUpBig;
            -ms-animation-name: fadeInUpBig;
            -o-animation-name: fadeInUpBig;
            animation-name: fadeInUpBig;
        }
        @-webkit-keyframes fadeInDownBig {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateY(0);
            }
        }

        @-moz-keyframes fadeInDownBig {
            0% {
                opacity: 0;
                -moz-transform: translateY(-2000px);
            }

            100% {
                opacity: 1;
                -moz-transform: translateY(0);
            }
        }

        @-ms-keyframes fadeInDownBig {
        0% {
            opacity: 0;
            -ms-transform: translateY(-2000px);
        }

        100% {
            opacity: 1;
            -ms-transform: translateY(0);
        }
        }

        @-o-keyframes fadeInDownBig {
            0% {
                opacity: 0;
                -o-transform: translateY(-2000px);
            }

            100% {
                opacity: 1;
                -o-transform: translateY(0);
            }
        }

        @keyframes fadeInDownBig {
            0% {
                opacity: 0;
                transform: translateY(-2000px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fadeInDownBig {
            -webkit-animation-name: fadeInDownBig;
            -moz-animation-name: fadeInDownBig;
            -ms-animation-name: fadeInDownBig;
            -o-animation-name: fadeInDownBig;
            animation-name: fadeInDownBig;
        }
        @-webkit-keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
            }
        }
        @-moz-keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                -moz-transform: translateX(-2000px);
            }

            100% {
                opacity: 1;
                -moz-transform: translateX(0);
            }
        }
        @-ms-keyframes fadeInLeftBig {
        0% {
            opacity: 0;
            -ms-transform: translateX(-2000px);
        }

        100% {
            opacity: 1;
            -ms-transform: translateX(0);
        }
        }
        @-o-keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                -o-transform: translateX(-2000px);
            }

            100% {
                opacity: 1;
                -o-transform: translateX(0);
            }
        }
        @keyframes fadeInLeftBig {
            0% {
                opacity: 0;
                transform: translateX(-2000px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .fadeInLeftBig {
            -webkit-animation-name: fadeInLeftBig;
            -moz-animation-name: fadeInLeftBig;
            -ms-animation-name: fadeInLeftBig;
            -o-animation-name: fadeInLeftBig;
            animation-name: fadeInLeftBig;
        }
        @-webkit-keyframes fadeInRightBig {
            0% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
            }

            100% {
                opacity: 1;
                -webkit-transform: translateX(0);
            }
        }

        @-moz-keyframes fadeInRightBig {
            0% {
                opacity: 0;
                -moz-transform: translateX(2000px);
            }

            100% {
                opacity: 1;
                -moz-transform: translateX(0);
            }
        }

        @-ms-keyframes fadeInRightBig {
        0% {
            opacity: 0;
            -ms-transform: translateX(2000px);
        }

        100% {
            opacity: 1;
            -ms-transform: translateX(0);
        }
        }

        @-o-keyframes fadeInRightBig {
            0% {
                opacity: 0;
                -o-transform: translateX(2000px);
            }

            100% {
                opacity: 1;
                -o-transform: translateX(0);
            }
        }

        @keyframes fadeInRightBig {
            0% {
                opacity: 0;
                transform: translateX(2000px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .fadeInRightBig {
            -webkit-animation-name: fadeInRightBig;
            -moz-animation-name: fadeInRightBig;
            -ms-animation-name: fadeInRightBig;
            -o-animation-name: fadeInRightBig;
            animation-name: fadeInRightBig;
        }
        @-webkit-keyframes fadeOut {
            0% {opacity: 1;}
            100% {opacity: 0;}
        }

        @-moz-keyframes fadeOut {
            0% {opacity: 1;}
            100% {opacity: 0;}
        }

        @-ms-keyframes fadeOut {
        0% {opacity: 1;}
        100% {opacity: 0;}
        }

        @-o-keyframes fadeOut {
            0% {opacity: 1;}
            100% {opacity: 0;}
        }

        @keyframes fadeOut {
            0% {opacity: 1;}
            100% {opacity: 0;}
        }

        .fadeOut {
            -webkit-animation-name: fadeOut;
            -moz-animation-name: fadeOut;
            -ms-animation-name: fadeOut;
            -o-animation-name: fadeOut;
            animation-name: fadeOut;
        }
        @-webkit-keyframes fadeOutUp {
            0% {
                opacity: 1;
                -webkit-transform: translateY(0);
            }

            100% {
                opacity: 0;
                -webkit-transform: translateY(-20px);
            }
        }
        @-moz-keyframes fadeOutUp {
            0% {
                opacity: 1;
                -moz-transform: translateY(0);
            }

            100% {
                opacity: 0;
                -moz-transform: translateY(-20px);
            }
        }
        @-ms-keyframes fadeOutUp {
        0% {
            opacity: 1;
            -ms-transform: translateY(0);
        }

        100% {
            opacity: 0;
            -ms-transform: translateY(-20px);
        }
        }
        @-o-keyframes fadeOutUp {
            0% {
                opacity: 1;
                -o-transform: translateY(0);
            }

            100% {
                opacity: 0;
                -o-transform: translateY(-20px);
            }
        }
        @keyframes fadeOutUp {
            0% {
                opacity: 1;
                transform: translateY(0);
            }

            100% {
                opacity: 0;
                transform: translateY(-20px);
            }
        }

        .fadeOutUp {
            -webkit-animation-name: fadeOutUp;
            -moz-animation-name: fadeOutUp;
            -ms-animation-name: fadeOutUp;
            -o-animation-name: fadeOutUp;
            animation-name: fadeOutUp;
        }
        @-webkit-keyframes fadeOutDown {
            0% {
                opacity: 1;
                -webkit-transform: translateY(0);
            }

            100% {
                opacity: 0;
                -webkit-transform: translateY(20px);
            }
        }

        @-moz-keyframes fadeOutDown {
            0% {
                opacity: 1;
                -moz-transform: translateY(0);
            }

            100% {
                opacity: 0;
                -moz-transform: translateY(20px);
            }
        }

        @-ms-keyframes fadeOutDown {
        0% {
            opacity: 1;
            -ms-transform: translateY(0);
        }

        100% {
            opacity: 0;
            -ms-transform: translateY(20px);
        }
        }

        @-o-keyframes fadeOutDown {
            0% {
                opacity: 1;
                -o-transform: translateY(0);
            }

            100% {
                opacity: 0;
                -o-transform: translateY(20px);
            }
        }

        @keyframes fadeOutDown {
            0% {
                opacity: 1;
                transform: translateY(0);
            }

            100% {
                opacity: 0;
                transform: translateY(20px);
            }
        }

        .fadeOutDown {
            -webkit-animation-name: fadeOutDown;
            -moz-animation-name: fadeOutDown;
            -ms-animation-name: fadeOutDown;
            -o-animation-name: fadeOutDown;
            animation-name: fadeOutDown;
        }
        @-webkit-keyframes fadeOutLeft {
            0% {
                opacity: 1;
                -webkit-transform: translateX(0);
            }

            100% {
                opacity: 0;
                -webkit-transform: translateX(-20px);
            }
        }

        @-moz-keyframes fadeOutLeft {
            0% {
                opacity: 1;
                -moz-transform: translateX(0);
            }

            100% {
                opacity: 0;
                -moz-transform: translateX(-20px);
            }
        }

        @-ms-keyframes fadeOutLeft {
        0% {
            opacity: 1;
            -ms-transform: translateX(0);
        }

        100% {
            opacity: 0;
            -ms-transform: translateX(-20px);
        }
        }

        @-o-keyframes fadeOutLeft {
            0% {
                opacity: 1;
                -o-transform: translateX(0);
            }

            100% {
                opacity: 0;
                -o-transform: translateX(-20px);
            }
        }

        @keyframes fadeOutLeft {
            0% {
                opacity: 1;
                transform: translateX(0);
            }

            100% {
                opacity: 0;
                transform: translateX(-20px);
            }
        }

        .fadeOutLeft {
            -webkit-animation-name: fadeOutLeft;
            -moz-animation-name: fadeOutLeft;
            -ms-animation-name: fadeOutLeft;
            -o-animation-name: fadeOutLeft;
            animation-name: fadeOutLeft;
        }
        @-webkit-keyframes fadeOutRight {
            0% {
                opacity: 1;
                -webkit-transform: translateX(0);
            }

            100% {
                opacity: 0;
                -webkit-transform: translateX(20px);
            }
        }

        @-moz-keyframes fadeOutRight {
            0% {
                opacity: 1;
                -moz-transform: translateX(0);
            }

            100% {
                opacity: 0;
                -moz-transform: translateX(20px);
            }
        }

        @-ms-keyframes fadeOutRight {
        0% {
            opacity: 1;
            -ms-transform: translateX(0);
        }

        100% {
            opacity: 0;
            -ms-transform: translateX(20px);
        }
        }

        @-o-keyframes fadeOutRight {
            0% {
                opacity: 1;
                -o-transform: translateX(0);
            }

            100% {
                opacity: 0;
                -o-transform: translateX(20px);
            }
        }

        @keyframes fadeOutRight {
            0% {
                opacity: 1;
                transform: translateX(0);
            }

            100% {
                opacity: 0;
                transform: translateX(20px);
            }
        }

        .fadeOutRight {
            -webkit-animation-name: fadeOutRight;
            -moz-animation-name: fadeOutRight;
            -ms-animation-name: fadeOutRight;
            -o-animation-name: fadeOutRight;
            animation-name: fadeOutRight;
        }
        @-webkit-keyframes fadeOutUpBig {
            0% {
                opacity: 1;
                -webkit-transform: translateY(0);
            }

            100% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
            }
        }

        @-moz-keyframes fadeOutUpBig {
            0% {
                opacity: 1;
                -moz-transform: translateY(0);
            }

            100% {
                opacity: 0;
                -moz-transform: translateY(-2000px);
            }
        }

        @-ms-keyframes fadeOutUpBig {
        0% {
            opacity: 1;
            -ms-transform: translateY(0);
        }

        100% {
            opacity: 0;
            -ms-transform: translateY(-2000px);
        }
        }

        @-o-keyframes fadeOutUpBig {
            0% {
                opacity: 1;
                -o-transform: translateY(0);
            }

            100% {
                opacity: 0;
                -o-transform: translateY(-2000px);
            }
        }

        @keyframes fadeOutUpBig {
            0% {
                opacity: 1;
                transform: translateY(0);
            }

            100% {
                opacity: 0;
                transform: translateY(-2000px);
            }
        }

        .fadeOutUpBig {
            -webkit-animation-name: fadeOutUpBig;
            -moz-animation-name: fadeOutUpBig;
            -ms-animation-name: fadeOutUpBig;
            -o-animation-name: fadeOutUpBig;
            animation-name: fadeOutUpBig;
        }
        @-webkit-keyframes fadeOutDownBig {
            0% {
                opacity: 1;
                -webkit-transform: translateY(0);
            }

            100% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
            }
        }

        @-moz-keyframes fadeOutDownBig {
            0% {
                opacity: 1;
                -moz-transform: translateY(0);
            }

            100% {
                opacity: 0;
                -moz-transform: translateY(2000px);
            }
        }

        @-ms-keyframes fadeOutDownBig {
        0% {
            opacity: 1;
            -ms-transform: translateY(0);
        }

        100% {
            opacity: 0;
            -ms-transform: translateY(2000px);
        }
        }

        @-o-keyframes fadeOutDownBig {
            0% {
                opacity: 1;
                -o-transform: translateY(0);
            }

            100% {
                opacity: 0;
                -o-transform: translateY(2000px);
            }
        }

        @keyframes fadeOutDownBig {
            0% {
                opacity: 1;
                transform: translateY(0);
            }

            100% {
                opacity: 0;
                transform: translateY(2000px);
            }
        }

        .fadeOutDownBig {
            -webkit-animation-name: fadeOutDownBig;
            -moz-animation-name: fadeOutDownBig;
            -ms-animation-name: fadeOutDownBig;
            -o-animation-name: fadeOutDownBig;
            animation-name: fadeOutDownBig;
        }
        @-webkit-keyframes fadeOutLeftBig {
            0% {
                opacity: 1;
                -webkit-transform: translateX(0);
            }

            100% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
            }
        }

        @-moz-keyframes fadeOutLeftBig {
            0% {
                opacity: 1;
                -moz-transform: translateX(0);
            }

            100% {
                opacity: 0;
                -moz-transform: translateX(-2000px);
            }
        }

        @-ms-keyframes fadeOutLeftBig {
        0% {
            opacity: 1;
            -ms-transform: translateX(0);
        }

        100% {
            opacity: 0;
            -ms-transform: translateX(-2000px);
        }
        }

        @-o-keyframes fadeOutLeftBig {
            0% {
                opacity: 1;
                -o-transform: translateX(0);
            }

            100% {
                opacity: 0;
                -o-transform: translateX(-2000px);
            }
        }

        @keyframes fadeOutLeftBig {
            0% {
                opacity: 1;
                transform: translateX(0);
            }

            100% {
                opacity: 0;
                transform: translateX(-2000px);
            }
        }

        .fadeOutLeftBig {
            -webkit-animation-name: fadeOutLeftBig;
            -moz-animation-name: fadeOutLeftBig;
            -ms-animation-name: fadeOutLeftBig;
            -o-animation-name: fadeOutLeftBig;
            animation-name: fadeOutLeftBig;
        }
        @-webkit-keyframes fadeOutRightBig {
            0% {
                opacity: 1;
                -webkit-transform: translateX(0);
            }

            100% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
            }
        }
        @-moz-keyframes fadeOutRightBig {
            0% {
                opacity: 1;
                -moz-transform: translateX(0);
            }

            100% {
                opacity: 0;
                -moz-transform: translateX(2000px);
            }
        }
        @-ms-keyframes fadeOutRightBig {
        0% {
            opacity: 1;
            -ms-transform: translateX(0);
        }

        100% {
            opacity: 0;
            -ms-transform: translateX(2000px);
        }
        }
        @-o-keyframes fadeOutRightBig {
            0% {
                opacity: 1;
                -o-transform: translateX(0);
            }

            100% {
                opacity: 0;
                -o-transform: translateX(2000px);
            }
        }
        @keyframes fadeOutRightBig {
            0% {
                opacity: 1;
                transform: translateX(0);
            }

            100% {
                opacity: 0;
                transform: translateX(2000px);
            }
        }

        .fadeOutRightBig {
            -webkit-animation-name: fadeOutRightBig;
            -moz-animation-name: fadeOutRightBig;
            -ms-animation-name: fadeOutRightBig;
            -o-animation-name: fadeOutRightBig;
            animation-name: fadeOutRightBig;
        }
        @-webkit-keyframes bounceIn {
            0% {
                opacity: 0;
                -webkit-transform: scale(.3);
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(1.05);
            }

            70% {
                -webkit-transform: scale(.9);
            }

            100% {
                -webkit-transform: scale(1);
            }
        }

        @-moz-keyframes bounceIn {
            0% {
                opacity: 0;
                -moz-transform: scale(.3);
            }

            50% {
                opacity: 1;
                -moz-transform: scale(1.05);
            }

            70% {
                -moz-transform: scale(.9);
            }

            100% {
                -moz-transform: scale(1);
            }
        }

        @-ms-keyframes bounceIn {
        0% {
            opacity: 0;
            -ms-transform: scale(.3);
        }

        50% {
            opacity: 1;
            -ms-transform: scale(1.05);
        }

        70% {
            -ms-transform: scale(.9);
        }

        100% {
            -ms-transform: scale(1);
        }
        }

        @-o-keyframes bounceIn {
            0% {
                opacity: 0;
                -o-transform: scale(.3);
            }

            50% {
                opacity: 1;
                -o-transform: scale(1.05);
            }

            70% {
                -o-transform: scale(.9);
            }

            100% {
                -o-transform: scale(1);
            }
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(.3);
            }

            50% {
                opacity: 1;
                transform: scale(1.05);
            }

            70% {
                transform: scale(.9);
            }

            100% {
                transform: scale(1);
            }
        }

        .bounceIn {
            -webkit-animation-name: bounceIn;
            -moz-animation-name: bounceIn;
            -ms-animation-name: bounceIn;
            -o-animation-name: bounceIn;
            animation-name: bounceIn;
        }
        @-webkit-keyframes bounceInUp {
            0% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
            }

            60% {
                opacity: 1;
                -webkit-transform: translateY(-30px);
            }

            80% {
                -webkit-transform: translateY(10px);
            }

            100% {
                -webkit-transform: translateY(0);
            }
        }
        @-moz-keyframes bounceInUp {
            0% {
                opacity: 0;
                -moz-transform: translateY(2000px);
            }

            60% {
                opacity: 1;
                -moz-transform: translateY(-30px);
            }

            80% {
                -moz-transform: translateY(10px);
            }

            100% {
                -moz-transform: translateY(0);
            }
        }
        @-ms-keyframes bounceInUp {
        0% {
            opacity: 0;
            -ms-transform: translateY(2000px);
        }

        60% {
            opacity: 1;
            -ms-transform: translateY(-30px);
        }

        80% {
            -ms-transform: translateY(10px);
        }

        100% {
            -ms-transform: translateY(0);
        }
        }

        @-o-keyframes bounceInUp {
            0% {
                opacity: 0;
                -o-transform: translateY(2000px);
            }

            60% {
                opacity: 1;
                -o-transform: translateY(-30px);
            }

            80% {
                -o-transform: translateY(10px);
            }

            100% {
                -o-transform: translateY(0);
            }
        }

        @keyframes bounceInUp {
            0% {
                opacity: 0;
                transform: translateY(2000px);
            }

            60% {
                opacity: 1;
                transform: translateY(-30px);
            }

            80% {
                transform: translateY(10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .bounceInUp {
            -webkit-animation-name: bounceInUp;
            -moz-animation-name: bounceInUp;
            -ms-animation-name: bounceInUp;
            -o-animation-name: bounceInUp;
            animation-name: bounceInUp;
        }
        @-webkit-keyframes bounceInDown {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
            }

            60% {
                opacity: 1;
                -webkit-transform: translateY(30px);
            }

            80% {
                -webkit-transform: translateY(-10px);
            }

            100% {
                -webkit-transform: translateY(0);
            }
        }

        @-moz-keyframes bounceInDown {
            0% {
                opacity: 0;
                -moz-transform: translateY(-2000px);
            }

            60% {
                opacity: 1;
                -moz-transform: translateY(30px);
            }

            80% {
                -moz-transform: translateY(-10px);
            }

            100% {
                -moz-transform: translateY(0);
            }
        }

        @-ms-keyframes bounceInDown {
        0% {
            opacity: 0;
            -ms-transform: translateY(-2000px);
        }

        60% {
            opacity: 1;
            -ms-transform: translateY(30px);
        }

        80% {
            -ms-transform: translateY(-10px);
        }

        100% {
            -ms-transform: translateY(0);
        }
        }

        @-o-keyframes bounceInDown {
            0% {
                opacity: 0;
                -o-transform: translateY(-2000px);
            }

            60% {
                opacity: 1;
                -o-transform: translateY(30px);
            }

            80% {
                -o-transform: translateY(-10px);
            }

            100% {
                -o-transform: translateY(0);
            }
        }

        @keyframes bounceInDown {
            0% {
                opacity: 0;
                transform: translateY(-2000px);
            }

            60% {
                opacity: 1;
                transform: translateY(30px);
            }

            80% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .bounceInDown {
            -webkit-animation-name: bounceInDown;
            -moz-animation-name: bounceInDown;
            -ms-animation-name: bounceInDown;
            -o-animation-name: bounceInDown;
            animation-name: bounceInDown;
        }
        @-webkit-keyframes bounceInLeft {
            0% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
            }

            60% {
                opacity: 1;
                -webkit-transform: translateX(30px);
            }

            80% {
                -webkit-transform: translateX(-10px);
            }

            100% {
                -webkit-transform: translateX(0);
            }
        }

        @-moz-keyframes bounceInLeft {
            0% {
                opacity: 0;
                -moz-transform: translateX(-2000px);
            }

            60% {
                opacity: 1;
                -moz-transform: translateX(30px);
            }

            80% {
                -moz-transform: translateX(-10px);
            }

            100% {
                -moz-transform: translateX(0);
            }
        }

        @-ms-keyframes bounceInLeft {
        0% {
            opacity: 0;
            -ms-transform: translateX(-2000px);
        }

        60% {
            opacity: 1;
            -ms-transform: translateX(30px);
        }

        80% {
            -ms-transform: translateX(-10px);
        }

        100% {
            -ms-transform: translateX(0);
        }
        }

        @-o-keyframes bounceInLeft {
            0% {
                opacity: 0;
                -o-transform: translateX(-2000px);
            }

            60% {
                opacity: 1;
                -o-transform: translateX(30px);
            }

            80% {
                -o-transform: translateX(-10px);
            }

            100% {
                -o-transform: translateX(0);
            }
        }

        @keyframes bounceInLeft {
            0% {
                opacity: 0;
                transform: translateX(-2000px);
            }

            60% {
                opacity: 1;
                transform: translateX(30px);
            }

            80% {
                transform: translateX(-10px);
            }

            100% {
                transform: translateX(0);
            }
        }

        .bounceInLeft {
            -webkit-animation-name: bounceInLeft;
            -moz-animation-name: bounceInLeft;
            -ms-animation-name: bounceInLeft;
            -o-animation-name: bounceInLeft;
            animation-name: bounceInLeft;
        }
        @-webkit-keyframes bounceInRight {
            0% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
            }

            60% {
                opacity: 1;
                -webkit-transform: translateX(-30px);
            }

            80% {
                -webkit-transform: translateX(10px);
            }

            100% {
                -webkit-transform: translateX(0);
            }
        }

        @-moz-keyframes bounceInRight {
            0% {
                opacity: 0;
                -moz-transform: translateX(2000px);
            }

            60% {
                opacity: 1;
                -moz-transform: translateX(-30px);
            }

            80% {
                -moz-transform: translateX(10px);
            }

            100% {
                -moz-transform: translateX(0);
            }
        }

        @-ms-keyframes bounceInRight {
        0% {
            opacity: 0;
            -ms-transform: translateX(2000px);
        }

        60% {
            opacity: 1;
            -ms-transform: translateX(-30px);
        }

        80% {
            -ms-transform: translateX(10px);
        }

        100% {
            -ms-transform: translateX(0);
        }
        }

        @-o-keyframes bounceInRight {
            0% {
                opacity: 0;
                -o-transform: translateX(2000px);
            }

            60% {
                opacity: 1;
                -o-transform: translateX(-30px);
            }

            80% {
                -o-transform: translateX(10px);
            }

            100% {
                -o-transform: translateX(0);
            }
        }

        @keyframes bounceInRight {
            0% {
                opacity: 0;
                transform: translateX(2000px);
            }

            60% {
                opacity: 1;
                transform: translateX(-30px);
            }

            80% {
                transform: translateX(10px);
            }

            100% {
                transform: translateX(0);
            }
        }

        .bounceInRight {
            -webkit-animation-name: bounceInRight;
            -moz-animation-name: bounceInRight;
            -ms-animation-name: bounceInRight;
            -o-animation-name: bounceInRight;
            animation-name: bounceInRight;
        }
        @-webkit-keyframes bounceOut {
            0% {
                -webkit-transform: scale(1);
            }

            25% {
                -webkit-transform: scale(.95);
            }

            50% {
                opacity: 1;
                -webkit-transform: scale(1.1);
            }

            100% {
                opacity: 0;
                -webkit-transform: scale(.3);
            }
        }

        @-moz-keyframes bounceOut {
            0% {
                -moz-transform: scale(1);
            }

            25% {
                -moz-transform: scale(.95);
            }

            50% {
                opacity: 1;
                -moz-transform: scale(1.1);
            }

            100% {
                opacity: 0;
                -moz-transform: scale(.3);
            }
        }

        @-ms-keyframes bounceOut {
        0% {
            -ms-transform: scale(1);
        }

        25% {
            -ms-transform: scale(.95);
        }

        50% {
            opacity: 1;
            -ms-transform: scale(1.1);
        }

        100% {
            opacity: 0;
            -ms-transform: scale(.3);
        }
        }

        @-o-keyframes bounceOut {
            0% {
                -o-transform: scale(1);
            }

            25% {
                -o-transform: scale(.95);
            }

            50% {
                opacity: 1;
                -o-transform: scale(1.1);
            }

            100% {
                opacity: 0;
                -o-transform: scale(.3);
            }
        }

        @keyframes bounceOut {
            0% {
                transform: scale(1);
            }

            25% {
                transform: scale(.95);
            }

            50% {
                opacity: 1;
                transform: scale(1.1);
            }

            100% {
                opacity: 0;
                transform: scale(.3);
            }
        }

        .bounceOut {
            -webkit-animation-name: bounceOut;
            -moz-animation-name: bounceOut;
            -ms-animation-name: bounceOut;
            -o-animation-name: bounceOut;
            animation-name: bounceOut;
        }
        @-webkit-keyframes bounceOutUp {
            0% {
                -webkit-transform: translateY(0);
            }

            20% {
                opacity: 1;
                -webkit-transform: translateY(20px);
            }

            100% {
                opacity: 0;
                -webkit-transform: translateY(-2000px);
            }
        }

        @-moz-keyframes bounceOutUp {
            0% {
                -moz-transform: translateY(0);
            }

            20% {
                opacity: 1;
                -moz-transform: translateY(20px);
            }

            100% {
                opacity: 0;
                -moz-transform: translateY(-2000px);
            }
        }

        @-ms-keyframes bounceOutUp {
        0% {
            -ms-transform: translateY(0);
        }

        20% {
            opacity: 1;
            -ms-transform: translateY(20px);
        }

        100% {
            opacity: 0;
            -ms-transform: translateY(-2000px);
        }
        }

        @-o-keyframes bounceOutUp {
            0% {
                -o-transform: translateY(0);
            }

            20% {
                opacity: 1;
                -o-transform: translateY(20px);
            }

            100% {
                opacity: 0;
                -o-transform: translateY(-2000px);
            }
        }

        @keyframes bounceOutUp {
            0% {
                transform: translateY(0);
            }

            20% {
                opacity: 1;
                transform: translateY(20px);
            }

            100% {
                opacity: 0;
                transform: translateY(-2000px);
            }
        }

        .bounceOutUp {
            -webkit-animation-name: bounceOutUp;
            -moz-animation-name: bounceOutUp;
            -ms-animation-name: bounceOutUp;
            -o-animation-name: bounceOutUp;
            animation-name: bounceOutUp;
        }
        @-webkit-keyframes bounceOutDown {
            0% {
                -webkit-transform: translateY(0);
            }

            20% {
                opacity: 1;
                -webkit-transform: translateY(-20px);
            }

            100% {
                opacity: 0;
                -webkit-transform: translateY(2000px);
            }
        }

        @-moz-keyframes bounceOutDown {
            0% {
                -moz-transform: translateY(0);
            }

            20% {
                opacity: 1;
                -moz-transform: translateY(-20px);
            }

            100% {
                opacity: 0;
                -moz-transform: translateY(2000px);
            }
        }

        @-ms-keyframes bounceOutDown {
        0% {
            -ms-transform: translateY(0);
        }

        20% {
            opacity: 1;
            -ms-transform: translateY(-20px);
        }

        100% {
            opacity: 0;
            -ms-transform: translateY(2000px);
        }
        }

        @keyframes bounceOutDown {
            0% {
                transform: translateY(0);
            }

            20% {
                opacity: 1;
                transform: translateY(-20px);
            }

            100% {
                opacity: 0;
                transform: translateY(2000px);
            }
        }

        .bounceOutDown {
            -webkit-animation-name: bounceOutDown;
            -moz-animation-name: bounceOutDown;
            -ms-animation-name: bounceOutDown;
            animation-name: bounceOutDown;
        }
        @-webkit-keyframes bounceOutLeft {
            0% {
                -webkit-transform: translateX(0);
            }

            20% {
                opacity: 1;
                -webkit-transform: translateX(20px);
            }

            100% {
                opacity: 0;
                -webkit-transform: translateX(-2000px);
            }
        }

        @-moz-keyframes bounceOutLeft {
            0% {
                -moz-transform: translateX(0);
            }

            20% {
                opacity: 1;
                -moz-transform: translateX(20px);
            }

            100% {
                opacity: 0;
                -moz-transform: translateX(-2000px);
            }
        }

        @-ms-keyframes bounceOutLeft {
        0% {
            -ms-transform: translateX(0);
        }

        20% {
            opacity: 1;
            -ms-transform: translateX(20px);
        }

        100% {
            opacity: 0;
            -ms-transform: translateX(-2000px);
        }
        }

        @-o-keyframes bounceOutLeft {
            0% {
                -o-transform: translateX(0);
            }

            20% {
                opacity: 1;
                -o-transform: translateX(20px);
            }

            100% {
                opacity: 0;
                -o-transform: translateX(-2000px);
            }
        }

        @keyframes bounceOutLeft {
            0% {
                transform: translateX(0);
            }

            20% {
                opacity: 1;
                transform: translateX(20px);
            }

            100% {
                opacity: 0;
                transform: translateX(-2000px);
            }
        }

        .bounceOutLeft {
            -webkit-animation-name: bounceOutLeft;
            -moz-animation-name: bounceOutLeft;
            -ms-animation-name: bounceOutLeft;
            -o-animation-name: bounceOutLeft;
            animation-name: bounceOutLeft;
        }
        @-webkit-keyframes bounceOutRight {
            0% {
                -webkit-transform: translateX(0);
            }

            20% {
                opacity: 1;
                -webkit-transform: translateX(-20px);
            }

            100% {
                opacity: 0;
                -webkit-transform: translateX(2000px);
            }
        }

        @-moz-keyframes bounceOutRight {
            0% {
                -moz-transform: translateX(0);
            }

            20% {
                opacity: 1;
                -moz-transform: translateX(-20px);
            }

            100% {
                opacity: 0;
                -moz-transform: translateX(2000px);
            }
        }

        @-ms-keyframes bounceOutRight {
        0% {
            -ms-transform: translateX(0);
        }

        20% {
            opacity: 1;
            -ms-transform: translateX(-20px);
        }

        100% {
            opacity: 0;
            -ms-transform: translateX(2000px);
        }
        }

        @-o-keyframes bounceOutRight {
            0% {
                -o-transform: translateX(0);
            }

            20% {
                opacity: 1;
                -o-transform: translateX(-20px);
            }

            100% {
                opacity: 0;
                -o-transform: translateX(2000px);
            }
        }

        @keyframes bounceOutRight {
            0% {
                transform: translateX(0);
            }

            20% {
                opacity: 1;
                transform: translateX(-20px);
            }

            100% {
                opacity: 0;
                transform: translateX(2000px);
            }
        }

        .bounceOutRight {
            -webkit-animation-name: bounceOutRight;
            -moz-animation-name: bounceOutRight;
            -ms-animation-name: bounceOutRight;
            -o-animation-name: bounceOutRight;
            animation-name: bounceOutRight;
        }
        @-webkit-keyframes rotateIn {
            0% {
                -webkit-transform-origin: center center;
                -webkit-transform: rotate(-200deg);
                opacity: 0;
            }

            100% {
                -webkit-transform-origin: center center;
                -webkit-transform: rotate(0);
                opacity: 1;
            }
        }
        @-moz-keyframes rotateIn {
            0% {
                -moz-transform-origin: center center;
                -moz-transform: rotate(-200deg);
                opacity: 0;
            }

            100% {
                -moz-transform-origin: center center;
                -moz-transform: rotate(0);
                opacity: 1;
            }
        }
        @-ms-keyframes rotateIn {
        0% {
            -ms-transform-origin: center center;
            -ms-transform: rotate(-200deg);
            opacity: 0;
        }

        100% {
            -ms-transform-origin: center center;
            -ms-transform: rotate(0);
            opacity: 1;
        }
        }
        @-o-keyframes rotateIn {
            0% {
                -o-transform-origin: center center;
                -o-transform: rotate(-200deg);
                opacity: 0;
            }

            100% {
                -o-transform-origin: center center;
                -o-transform: rotate(0);
                opacity: 1;
            }
        }
        @keyframes rotateIn {
            0% {
                transform-origin: center center;
                transform: rotate(-200deg);
                opacity: 0;
            }

            100% {
                transform-origin: center center;
                transform: rotate(0);
                opacity: 1;
            }
        }

        .rotateIn {
            -webkit-animation-name: rotateIn;
            -moz-animation-name: rotateIn;
            -ms-animation-name: rotateIn;
            -o-animation-name: rotateIn;
            animation-name: rotateIn;
        }
        @-webkit-keyframes rotateInUpLeft {
            0% {
                -webkit-transform-origin: left bottom;
                -webkit-transform: rotate(90deg);
                opacity: 0;
            }

            100% {
                -webkit-transform-origin: left bottom;
                -webkit-transform: rotate(0);
                opacity: 1;
            }
        }

        @-moz-keyframes rotateInUpLeft {
            0% {
                -moz-transform-origin: left bottom;
                -moz-transform: rotate(90deg);
                opacity: 0;
            }

            100% {
                -moz-transform-origin: left bottom;
                -moz-transform: rotate(0);
                opacity: 1;
            }
        }

        @-ms-keyframes rotateInUpLeft {
        0% {
            -ms-transform-origin: left bottom;
            -ms-transform: rotate(90deg);
            opacity: 0;
        }

        100% {
            -ms-transform-origin: left bottom;
            -ms-transform: rotate(0);
            opacity: 1;
        }
        }

        @-o-keyframes rotateInUpLeft {
            0% {
                -o-transform-origin: left bottom;
                -o-transform: rotate(90deg);
                opacity: 0;
            }

            100% {
                -o-transform-origin: left bottom;
                -o-transform: rotate(0);
                opacity: 1;
            }
        }

        @keyframes rotateInUpLeft {
            0% {
                transform-origin: left bottom;
                transform: rotate(90deg);
                opacity: 0;
            }

            100% {
                transform-origin: left bottom;
                transform: rotate(0);
                opacity: 1;
            }
        }

        .rotateInUpLeft {
            -webkit-animation-name: rotateInUpLeft;
            -moz-animation-name: rotateInUpLeft;
            -ms-animation-name: rotateInUpLeft;
            -o-animation-name: rotateInUpLeft;
            animation-name: rotateInUpLeft;
        }
        @-webkit-keyframes rotateInDownLeft {
            0% {
                -webkit-transform-origin: left bottom;
                -webkit-transform: rotate(-90deg);
                opacity: 0;
            }

            100% {
                -webkit-transform-origin: left bottom;
                -webkit-transform: rotate(0);
                opacity: 1;
            }
        }

        @-moz-keyframes rotateInDownLeft {
            0% {
                -moz-transform-origin: left bottom;
                -moz-transform: rotate(-90deg);
                opacity: 0;
            }

            100% {
                -moz-transform-origin: left bottom;
                -moz-transform: rotate(0);
                opacity: 1;
            }
        }

        @-ms-keyframes rotateInDownLeft {
        0% {
            -ms-transform-origin: left bottom;
            -ms-transform: rotate(-90deg);
            opacity: 0;
        }

        100% {
            -ms-transform-origin: left bottom;
            -ms-transform: rotate(0);
            opacity: 1;
        }
        }

        @-o-keyframes rotateInDownLeft {
            0% {
                -o-transform-origin: left bottom;
                -o-transform: rotate(-90deg);
                opacity: 0;
            }

            100% {
                -o-transform-origin: left bottom;
                -o-transform: rotate(0);
                opacity: 1;
            }
        }

        @keyframes rotateInDownLeft {
            0% {
                transform-origin: left bottom;
                transform: rotate(-90deg);
                opacity: 0;
            }

            100% {
                transform-origin: left bottom;
                transform: rotate(0);
                opacity: 1;
            }
        }

        .rotateInDownLeft {
            -webkit-animation-name: rotateInDownLeft;
            -moz-animation-name: rotateInDownLeft;
            -ms-animation-name: rotateInDownLeft;
            -o-animation-name: rotateInDownLeft;
            animation-name: rotateInDownLeft;
        }
        @-webkit-keyframes rotateInUpRight {
            0% {
                -webkit-transform-origin: right bottom;
                -webkit-transform: rotate(-90deg);
                opacity: 0;
            }

            100% {
                -webkit-transform-origin: right bottom;
                -webkit-transform: rotate(0);
                opacity: 1;
            }
        }

        @-moz-keyframes rotateInUpRight {
            0% {
                -moz-transform-origin: right bottom;
                -moz-transform: rotate(-90deg);
                opacity: 0;
            }

            100% {
                -moz-transform-origin: right bottom;
                -moz-transform: rotate(0);
                opacity: 1;
            }
        }

        @-ms-keyframes rotateInUpRight {
        0% {
            -ms-transform-origin: right bottom;
            -ms-transform: rotate(-90deg);
            opacity: 0;
        }

        100% {
            -ms-transform-origin: right bottom;
            -ms-transform: rotate(0);
            opacity: 1;
        }
        }

        @-o-keyframes rotateInUpRight {
            0% {
                -o-transform-origin: right bottom;
                -o-transform: rotate(-90deg);
                opacity: 0;
            }

            100% {
                -o-transform-origin: right bottom;
                -o-transform: rotate(0);
                opacity: 1;
            }
        }

        @keyframes rotateInUpRight {
            0% {
                transform-origin: right bottom;
                transform: rotate(-90deg);
                opacity: 0;
            }

            100% {
                transform-origin: right bottom;
                transform: rotate(0);
                opacity: 1;
            }
        }

        .rotateInUpRight {
            -webkit-animation-name: rotateInUpRight;
            -moz-animation-name: rotateInUpRight;
            -ms-animation-name: rotateInUpRight;
            -o-animation-name: rotateInUpRight;
            animation-name: rotateInUpRight;
        }
        @-webkit-keyframes rotateInDownRight {
            0% {
                -webkit-transform-origin: right bottom;
                -webkit-transform: rotate(90deg);
                opacity: 0;
            }

            100% {
                -webkit-transform-origin: right bottom;
                -webkit-transform: rotate(0);
                opacity: 1;
            }
        }

        @-moz-keyframes rotateInDownRight {
            0% {
                -moz-transform-origin: right bottom;
                -moz-transform: rotate(90deg);
                opacity: 0;
            }

            100% {
                -moz-transform-origin: right bottom;
                -moz-transform: rotate(0);
                opacity: 1;
            }
        }

        @-ms-keyframes rotateInDownRight {
        0% {
            -ms-transform-origin: right bottom;
            -ms-transform: rotate(90deg);
            opacity: 0;
        }

        100% {
            -ms-transform-origin: right bottom;
            -ms-transform: rotate(0);
            opacity: 1;
        }
        }

        @-o-keyframes rotateInDownRight {
            0% {
                -o-transform-origin: right bottom;
                -o-transform: rotate(90deg);
                opacity: 0;
            }

            100% {
                -o-transform-origin: right bottom;
                -o-transform: rotate(0);
                opacity: 1;
            }
        }

        @keyframes rotateInDownRight {
            0% {
                transform-origin: right bottom;
                transform: rotate(90deg);
                opacity: 0;
            }

            100% {
                transform-origin: right bottom;
                transform: rotate(0);
                opacity: 1;
            }
        }

        .rotateInDownRight {
            -webkit-animation-name: rotateInDownRight;
            -moz-animation-name: rotateInDownRight;
            -ms-animation-name: rotateInDownRight;
            -o-animation-name: rotateInDownRight;
            animation-name: rotateInDownRight;
        }
        @-webkit-keyframes rotateOut {
            0% {
                -webkit-transform-origin: center center;
                -webkit-transform: rotate(0);
                opacity: 1;
            }

            100% {
                -webkit-transform-origin: center center;
                -webkit-transform: rotate(200deg);
                opacity: 0;
            }
        }

        @-moz-keyframes rotateOut {
            0% {
                -moz-transform-origin: center center;
                -moz-transform: rotate(0);
                opacity: 1;
            }

            100% {
                -moz-transform-origin: center center;
                -moz-transform: rotate(200deg);
                opacity: 0;
            }
        }

        @-ms-keyframes rotateOut {
        0% {
            -ms-transform-origin: center center;
            -ms-transform: rotate(0);
            opacity: 1;
        }

        100% {
            -ms-transform-origin: center center;
            -ms-transform: rotate(200deg);
            opacity: 0;
        }
        }

        @-o-keyframes rotateOut {
            0% {
                -o-transform-origin: center center;
                -o-transform: rotate(0);
                opacity: 1;
            }

            100% {
                -o-transform-origin: center center;
                -o-transform: rotate(200deg);
                opacity: 0;
            }
        }

        @keyframes rotateOut {
            0% {
                transform-origin: center center;
                transform: rotate(0);
                opacity: 1;
            }

            100% {
                transform-origin: center center;
                transform: rotate(200deg);
                opacity: 0;
            }
        }

        .rotateOut {
            -webkit-animation-name: rotateOut;
            -moz-animation-name: rotateOut;
            -ms-animation-name: rotateOut;
            -o-animation-name: rotateOut;
            animation-name: rotateOut;
        }
        @-webkit-keyframes rotateOutUpLeft {
            0% {
                -webkit-transform-origin: left bottom;
                -webkit-transform: rotate(0);
                opacity: 1;
            }

            100% {
                -webkit-transform-origin: left bottom;
                -webkit-transform: rotate(-90deg);
                opacity: 0;
            }
        }

        @-moz-keyframes rotateOutUpLeft {
            0% {
                -moz-transform-origin: left bottom;
                -moz-transform: rotate(0);
                opacity: 1;
            }

            100% {
                -moz-transform-origin: left bottom;
                -moz-transform: rotate(-90deg);
                opacity: 0;
            }
        }

        @-ms-keyframes rotateOutUpLeft {
        0% {
            -ms-transform-origin: left bottom;
            -ms-transform: rotate(0);
            opacity: 1;
        }

        100% {
            -ms-transform-origin: left bottom;
            -ms-transform: rotate(-90deg);
            opacity: 0;
        }
        }

        @-o-keyframes rotateOutUpLeft {
            0% {
                -o-transform-origin: left bottom;
                -o-transform: rotate(0);
                opacity: 1;
            }

            100% {
                -o-transform-origin: left bottom;
                -o-transform: rotate(-90deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutUpLeft {
            0% {
                transform-origin: left bottom;
                transform: rotate(0);
                opacity: 1;
            }

            100% {
                -transform-origin: left bottom;
                -transform: rotate(-90deg);
                opacity: 0;
            }
        }

        .rotateOutUpLeft {
            -webkit-animation-name: rotateOutUpLeft;
            -moz-animation-name: rotateOutUpLeft;
            -ms-animation-name: rotateOutUpLeft;
            -o-animation-name: rotateOutUpLeft;
            animation-name: rotateOutUpLeft;
        }
        @-webkit-keyframes rotateOutDownLeft {
            0% {
                -webkit-transform-origin: left bottom;
                -webkit-transform: rotate(0);
                opacity: 1;
            }

            100% {
                -webkit-transform-origin: left bottom;
                -webkit-transform: rotate(90deg);
                opacity: 0;
            }
        }

        @-moz-keyframes rotateOutDownLeft {
            0% {
                -moz-transform-origin: left bottom;
                -moz-transform: rotate(0);
                opacity: 1;
            }

            100% {
                -moz-transform-origin: left bottom;
                -moz-transform: rotate(90deg);
                opacity: 0;
            }
        }

        @-ms-keyframes rotateOutDownLeft {
        0% {
            -ms-transform-origin: left bottom;
            -ms-transform: rotate(0);
            opacity: 1;
        }

        100% {
            -ms-transform-origin: left bottom;
            -ms-transform: rotate(90deg);
            opacity: 0;
        }
        }

        @-o-keyframes rotateOutDownLeft {
            0% {
                -o-transform-origin: left bottom;
                -o-transform: rotate(0);
                opacity: 1;
            }

            100% {
                -o-transform-origin: left bottom;
                -o-transform: rotate(90deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutDownLeft {
            0% {
                transform-origin: left bottom;
                transform: rotate(0);
                opacity: 1;
            }

            100% {
                transform-origin: left bottom;
                transform: rotate(90deg);
                opacity: 0;
            }
        }

        .rotateOutDownLeft {
            -webkit-animation-name: rotateOutDownLeft;
            -moz-animation-name: rotateOutDownLeft;
            -ms-animation-name: rotateOutDownLeft;
            -o-animation-name: rotateOutDownLeft;
            animation-name: rotateOutDownLeft;
        }
        @-webkit-keyframes rotateOutUpRight {
            0% {
                -webkit-transform-origin: right bottom;
                -webkit-transform: rotate(0);
                opacity: 1;
            }

            100% {
                -webkit-transform-origin: right bottom;
                -webkit-transform: rotate(90deg);
                opacity: 0;
            }
        }

        @-moz-keyframes rotateOutUpRight {
            0% {
                -moz-transform-origin: right bottom;
                -moz-transform: rotate(0);
                opacity: 1;
            }

            100% {
                -moz-transform-origin: right bottom;
                -moz-transform: rotate(90deg);
                opacity: 0;
            }
        }

        @-ms-keyframes rotateOutUpRight {
        0% {
            -ms-transform-origin: right bottom;
            -ms-transform: rotate(0);
            opacity: 1;
        }

        100% {
            -ms-transform-origin: right bottom;
            -ms-transform: rotate(90deg);
            opacity: 0;
        }
        }

        @-o-keyframes rotateOutUpRight {
            0% {
                -o-transform-origin: right bottom;
                -o-transform: rotate(0);
                opacity: 1;
            }

            100% {
                -o-transform-origin: right bottom;
                -o-transform: rotate(90deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutUpRight {
            0% {
                transform-origin: right bottom;
                transform: rotate(0);
                opacity: 1;
            }

            100% {
                transform-origin: right bottom;
                transform: rotate(90deg);
                opacity: 0;
            }
        }

        .rotateOutUpRight {
            -webkit-animation-name: rotateOutUpRight;
            -moz-animation-name: rotateOutUpRight;
            -ms-animation-name: rotateOutUpRight;
            -o-animation-name: rotateOutUpRight;
            animation-name: rotateOutUpRight;
        }
        @-webkit-keyframes rotateOutDownRight {
            0% {
                -webkit-transform-origin: right bottom;
                -webkit-transform: rotate(0);
                opacity: 1;
            }

            100% {
                -webkit-transform-origin: right bottom;
                -webkit-transform: rotate(-90deg);
                opacity: 0;
            }
        }

        @-moz-keyframes rotateOutDownRight {
            0% {
                -moz-transform-origin: right bottom;
                -moz-transform: rotate(0);
                opacity: 1;
            }

            100% {
                -moz-transform-origin: right bottom;
                -moz-transform: rotate(-90deg);
                opacity: 0;
            }
        }

        @-ms-keyframes rotateOutDownRight {
        0% {
            -ms-transform-origin: right bottom;
            -ms-transform: rotate(0);
            opacity: 1;
        }

        100% {
            -ms-transform-origin: right bottom;
            -ms-transform: rotate(-90deg);
            opacity: 0;
        }
        }

        @-o-keyframes rotateOutDownRight {
            0% {
                -o-transform-origin: right bottom;
                -o-transform: rotate(0);
                opacity: 1;
            }

            100% {
                -o-transform-origin: right bottom;
                -o-transform: rotate(-90deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutDownRight {
            0% {
                transform-origin: right bottom;
                transform: rotate(0);
                opacity: 1;
            }

            100% {
                transform-origin: right bottom;
                transform: rotate(-90deg);
                opacity: 0;
            }
        }

        .rotateOutDownRight {
            -webkit-animation-name: rotateOutDownRight;
            -moz-animation-name: rotateOutDownRight;
            -ms-animation-name: rotateOutDownRight;
            -o-animation-name: rotateOutDownRight;
            animation-name: rotateOutDownRight;
        }
        @-webkit-keyframes hinge {
            0% { -webkit-transform: rotate(0); -webkit-transform-origin: top left; -webkit-animation-timing-function: ease-in-out; }
            20%, 60% { -webkit-transform: rotate(80deg); -webkit-transform-origin: top left; -webkit-animation-timing-function: ease-in-out; }
            40% { -webkit-transform: rotate(60deg); -webkit-transform-origin: top left; -webkit-animation-timing-function: ease-in-out; }
            80% { -webkit-transform: rotate(60deg) translateY(0); opacity: 1; -webkit-transform-origin: top left; -webkit-animation-timing-function: ease-in-out; }
            100% { -webkit-transform: translateY(700px); opacity: 0; }
        }

        @-moz-keyframes hinge {
            0% { -moz-transform: rotate(0); -moz-transform-origin: top left; -moz-animation-timing-function: ease-in-out; }
            20%, 60% { -moz-transform: rotate(80deg); -moz-transform-origin: top left; -moz-animation-timing-function: ease-in-out; }
            40% { -moz-transform: rotate(60deg); -moz-transform-origin: top left; -moz-animation-timing-function: ease-in-out; }
            80% { -moz-transform: rotate(60deg) translateY(0); opacity: 1; -moz-transform-origin: top left; -moz-animation-timing-function: ease-in-out; }
            100% { -moz-transform: translateY(700px); opacity: 0; }
        }

        @-ms-keyframes hinge {
        0% { -ms-transform: rotate(0); -ms-transform-origin: top left; -ms-animation-timing-function: ease-in-out; }
        20%, 60% { -ms-transform: rotate(80deg); -ms-transform-origin: top left; -ms-animation-timing-function: ease-in-out; }
        40% { -ms-transform: rotate(60deg); -ms-transform-origin: top left; -ms-animation-timing-function: ease-in-out; }
        80% { -ms-transform: rotate(60deg) translateY(0); opacity: 1; -ms-transform-origin: top left; -ms-animation-timing-function: ease-in-out; }
        100% { -ms-transform: translateY(700px); opacity: 0; }
        }

        @-o-keyframes hinge {
            0% { -o-transform: rotate(0); -o-transform-origin: top left; -o-animation-timing-function: ease-in-out; }
            20%, 60% { -o-transform: rotate(80deg); -o-transform-origin: top left; -o-animation-timing-function: ease-in-out; }
            40% { -o-transform: rotate(60deg); -o-transform-origin: top left; -o-animation-timing-function: ease-in-out; }
            80% { -o-transform: rotate(60deg) translateY(0); opacity: 1; -o-transform-origin: top left; -o-animation-timing-function: ease-in-out; }
            100% { -o-transform: translateY(700px); opacity: 0; }
        }

        @keyframes hinge {
            0% { transform: rotate(0); transform-origin: top left; animation-timing-function: ease-in-out; }
            20%, 60% { transform: rotate(80deg); transform-origin: top left; animation-timing-function: ease-in-out; }
            40% { transform: rotate(60deg); transform-origin: top left; animation-timing-function: ease-in-out; }
            80% { transform: rotate(60deg) translateY(0); opacity: 1; transform-origin: top left; animation-timing-function: ease-in-out; }
            100% { transform: translateY(700px); opacity: 0; }
        }

        .hinge {
            -webkit-animation-name: hinge;
            -moz-animation-name: hinge;
            -ms-animation-name: hinge;
            -o-animation-name: hinge;
            animation-name: hinge;
        }
        /* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

        @-webkit-keyframes rollIn {
            0% { opacity: 0; -webkit-transform: translateX(-100%) rotate(-120deg); }
            100% { opacity: 1; -webkit-transform: translateX(0px) rotate(0deg); }
        }

        @-moz-keyframes rollIn {
            0% { opacity: 0; -moz-transform: translateX(-100%) rotate(-120deg); }
            100% { opacity: 1; -moz-transform: translateX(0px) rotate(0deg); }
        }

        @-ms-keyframes rollIn {
        0% { opacity: 0; -ms-transform: translateX(-100%) rotate(-120deg); }
        100% { opacity: 1; -ms-transform: translateX(0px) rotate(0deg); }
        }

        @-o-keyframes rollIn {
            0% { opacity: 0; -o-transform: translateX(-100%) rotate(-120deg); }
            100% { opacity: 1; -o-transform: translateX(0px) rotate(0deg); }
        }

        @keyframes rollIn {
            0% { opacity: 0; transform: translateX(-100%) rotate(-120deg); }
            100% { opacity: 1; transform: translateX(0px) rotate(0deg); }
        }

        .rollIn {
            -webkit-animation-name: rollIn;
            -moz-animation-name: rollIn;
            -ms-animation-name: rollIn;
            -o-animation-name: rollIn;
            animation-name: rollIn;
        }
        /* originally authored by Nick Pettit - https://github.com/nickpettit/glide */

        @-webkit-keyframes rollOut {
            0% {
                opacity: 1;
                -webkit-transform: translateX(0px) rotate(0deg);
            }

            100% {
                opacity: 0;
                -webkit-transform: translateX(100%) rotate(120deg);
            }
        }

        @-moz-keyframes rollOut {
            0% {
                opacity: 1;
                -moz-transform: translateX(0px) rotate(0deg);
            }

            100% {
                opacity: 0;
                -moz-transform: translateX(100%) rotate(120deg);
            }
        }

        @-ms-keyframes rollOut {
        0% {
            opacity: 1;
            -ms-transform: translateX(0px) rotate(0deg);
        }

        100% {
            opacity: 0;
            -ms-transform: translateX(100%) rotate(120deg);
        }
        }

        @-o-keyframes rollOut {
            0% {
                opacity: 1;
                -o-transform: translateX(0px) rotate(0deg);
            }

            100% {
                opacity: 0;
                -o-transform: translateX(100%) rotate(120deg);
            }
        }

        @keyframes rollOut {
            0% {
                opacity: 1;
                transform: translateX(0px) rotate(0deg);
            }

            100% {
                opacity: 0;
                transform: translateX(100%) rotate(120deg);
            }
        }

        .rollOut {
            -webkit-animation-name: rollOut;
            -moz-animation-name: rollOut;
            -ms-animation-name: rollOut;
            -o-animation-name: rollOut;
            animation-name: rollOut;
        }






        /* extended by Codrops */

        @-webkit-keyframes scaleOut {
            0% {
                opacity: 1;
                -webkit-transform: scale(1);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(.5);
            }
        }

        @-moz-keyframes scaleOut {
            0% {
                opacity: 1;
                -moz-transform: scale(1);
            }
            100% {
                opacity: 0;
                -moz-transform: scale(.5);
            }
        }

        @-ms-keyframes scaleOut {
        0% {
            opacity: 1;
            -ms-transform: scale(1);
        }100% {
            opacity: 0;
            -ms-transform: scale(.5);
        }
        }

        @-o-keyframes scaleOut {
            0% {
                opacity: 1;
                -o-transform: scale(1);
            }
            100% {
                opacity: 0;
                -o-transform: scale(.5);
            }
        }

        @keyframes scaleOut {
            0% {
                opacity: 1;
                transform: scale(1);
            }
            100% {
                opacity: 0;
                transform: scale(.5);
            }
        }

        .scaleOut {
            -webkit-animation-name: scaleOut;
            -moz-animation-name: scaleOut;
            -ms-animation-name: scaleOut;
            -o-animation-name: scaleOut;
            animation-name: scaleOut;
        }

        @-webkit-keyframes scaleIn {
            0% {
                opacity: 0;
                -webkit-transform: scale(.5);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
            }
        }

        @-moz-keyframes scaleIn {
            0% {
                opacity: 0;
                -moz-transform: scale(.5);
            }
            100% {
                opacity: 1;
                -moz-transform: scale(1);
            }
        }

        @-ms-keyframes scaleIn {
        0% {
            opacity: 0;
            -ms-transform: scale(.5);
        }
        100% {
            opacity: 1;
            -ms-transform: scale(1);
        }
        }

        @-o-keyframes scaleIn {
            0% {
                opacity: 0;
                -o-transform: scale(.5);
            }
            100% {
                opacity: 1;
                -o-transform: scale(1);
            }
        }

        @keyframes scaleIn {
            0% {
                opacity: 0;
                transform: scale(.5);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .scaleIn {
            -webkit-animation-name: scaleIn;
            -moz-animation-name: scaleIn;
            -ms-animation-name: scaleIn;
            -o-animation-name: scaleIn;
            animation-name: scaleIn;
        }



    </style>
</head>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="menu.css">
</head>

<body>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
    <title>Dershane Otomasyonu</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>
<body>
<div class="container">

    <header>
        <h1>Öğretmen Giriş ekranı</h1>

    </header>
    <section>
        <div id="container_demo" >
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <form  action="loginogretmencontrol" method="post">
                        {{csrf_field()}}
                        <h1>Öğretmen</h1>
                        <p>
                            <label for="username" class="uname" >Kullanıcı Adı </label>
                            <input id="username" name="ogretmenadi" required="required" type="text" placeholder="Kullanıcı adını giriniz..."/>
                        </p>
                        <p>
                            <label for="password" class="youpasswd"> Şifre </label>
                            <input id="password" name="ogretmensifre" required="required" type="password" placeholder="Şifre giriniz..." />
                        </p>

                        <p class="login button">

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="submit"></label>
                                <div class="col-md-4">
                        <p align="center"><button id="submit" name="submit" class="btn btn-primary">GİRİŞ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                </div>
            </div>



            </p>


            @if(isset($varmi))
                <br>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submit"></label>
                    <div class="col-md-4">
                        <p align="center"><b>Yanlış Giriş</b>
                    </div>
                </div>
                @endif

                </form>
                <div class="form-group">
                    <label class="col-md-0 control-label" for=""></label>
                    <div class="col-md-4">
                        <a href="yoneticigeri"> <button id="" name="" class="btn btn-success">GERİ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></a>
                    </div>
                </div>
        </div>
</div>

<div id="register" class="animate form">
    <form  action="mysuperscript.php" autocomplete="on">
        <h1> Sign up </h1>
        <p>
            <label for="usernamesignup" class="uname" >Your username</label>
            <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
        </p>
        <p>
            <label for="emailsignup" class="youmail"  > Your email</label>
            <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/>
        </p>
        <p>
            <label for="passwordsignup" class="youpasswd" >Your password </label>
            <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
        </p>
        <p>
            <label for="passwordsignup_confirm" class="youpasswd" >Please confirm your password </label>
            <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
        </p>
        <p class="signin button">
            <input type="submit" value="Sign up"/>
        </p>

    </form>

</div>

</div>
</div>
</section>
</div>
</body>
</html>
</body>
</html>