<!DOCTYPE html>
<html
    @if (Config::get('app.locale') == 'ar') lang="ar" data-textdirection="rtl" @else  lang="en" data-textdirection="ltr" @endif>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{!! $child->childFullName() !!}</title>

    <style>
        body {
            font-family: 'almarai', sans-serif;
            /* font-family: "Times New Roman", Times, serif; */
        }

        .highlight {
            display: block;
            padding: 20px 2px;
            width: 500px;
            border-bottom: 1px solid #979494;
        }

        p {
            font-size: 14px;
            margin: 0 10px;
            line-height: 30px;
        }

        div {
            margin-block: 20px
        }

        .divPadding {
            font-size: 12px;
            margin: 0 10px;
        }

        .symbol {
            font-size: 14px;
            font-weight: 700
        }

        .h1 {
            color: black;
            text-align: center;
            font-size: 30px;
        }

        .black {
            color: #000000;
        }

        .font-0 {
            font-size: 0.8rem;
        }

        .font-1 {
            font-size: 1rem;
        }

        tr td {
            font-size: 0.8rem;
        }

        .border-bottom {
            border-bottom: 1px solid #ccc;
        }


        .column1 {
            float: left;
            width: 90%;
            margin: 0 10px;
            box-sizing: border-box;
        }

        .column2 {
            float: left;
            width: 45%;
            margin: 0 10px;
            box-sizing: border-box;
        }

        .column3 {
            float: left;
            width: 30%;
            margin: 0 10px;
            box-sizing: border-box;
        }


        .column4 {
            float: left;
            width: 22%;
            margin: 0 10px;
            box-sizing: border-box;
        }

        .column5 {
            float: left;
            width: 10%;
            margin: 0 10px;
            box-sizing: border-box;
        }


        .column10 {
            float: left;
            width: 22%;
            margin: 0 10px;
            box-sizing: border-box;
        }

        .text-align-left {
            text-align: left;
        }

        .text-align-center {
            text-align: center;
        }

        .mTop1 {
            margin-top: 1rem;
        }

        .mTop2 {
            margin-top: 2rem;
        }


        .mbootom1 {
            margin-bottom: 1rem;
        }

        .mbootom2 {
            margin-bottom: 2rem;
        }


        /* .column10Underline {
            float: left;
            width: 10%;
            margin: 0 10px;
            box-sizing: border-box;
        }


        .column20 {
            float: left;
            width: 22%;
            margin: 0 10px;
            box-sizing: border-box;
        }


        .column30 {
            float: left;
            width: 30%;
            margin: 0 10px;
            box-sizing: border-box;
        }

        .column30TextLeft {
            float: left;
            width: 30%;
            text-align: left;
            margin: 0 10px;
            box-sizing: border-box;
        } */
    </style>


</head>

<body>



    {{-- Section I: Child Section --}}
    <p>
        <img src="{!! $image !!}" style="width: 280px;">
    </p>

    <h1 class="h1">Child Information Form</h1>

    <p class="font-0"> Ref: name of country/ no of form</p>
    <h3 class="black"><u>Section I: Child Section</u> </h3>

    <table style="width:100%">
        <tr>
            <td> Full Name: {!! $child->childFullName() !!}</td>
            <td rowspan="6" style="text-align: right; vertical-align: bottom;">
                <img src="{!! $picture_of_the_orphan_child !!}"
                    style="width: 140px;height: 150px; border: 1px solid #333;border-radius: 10px;">
            </td>
        </tr>
        <tr>

            <td> Sex :
                <span style="{!! $child->gender == 'male' ? 'background-color: yellow' : '' !!}">M</span>
                &nbsp;&nbsp;
                <span style="{!! $child->gender == 'female' ? 'background-color: yellow' : '' !!}">F</span>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>Date of Birth (dd/mm/yy): <span class="highlight">{!! $child->childBirthDay() !!} </span></td>
            <td></td>
        </tr>
        <tr>
            <td> Nationality: <span class="highlight">Palestinian</span> </td>
            <td></td>
        </tr>
        <tr>
            <td> Religion: <span class="highlight">Muslim </span></td>
            <td></td>
        </tr>
        <tr>
            <td> Address Line 1: <span class="highlight"> {!! $child->governorate->name !!}</span> </td>
            <td></td>
        </tr>
        <tr>
            <td>City/ District: <span class="highlight">{!! $child->city->name !!}</span> </td>
            <td></td>
        </tr>
        <tr>
            <td> City: <span class="highlight">{!! $child->city->name !!}</span> </td>
            <td></td>
        </tr>

        <tr>
            <td> Country: <span class="highlight">Palestine</span> </td>
            <td></td>
        </tr>

        <tr>
            <td> Is the child? </td>
            <td><u>Medical Information:</u></td>
        </tr>

        <tr>
            <td>Orphan:
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Yes <span class="symbol">&#9745;</span>
                &nbsp;&nbsp; &nbsp;
                No
                {{-- <span class="symbol">{!! $child->health_status == 'good' ? '&#9746;' : '' !!}</span> --}}
            </td>

            <td>General health:
                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Poor <span class="symbol">{!! $child->health_status == 'sick' ? '&#9745;' : '' !!}</span>
                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                Good <span class="symbol">{!! $child->health_status == 'good' ? '&#9745;' : '' !!}</span>

            </td>
        </tr>

        <tr>
            <td> Needy:
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Yes
                {{-- <span class="symbol">&#9745;</span> --}}
                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                No <span class="symbol">&#9746;</span>
            </td>
            <td>If condition is poor, give details; </td>
        </tr>
        <tr>
            <td> With a disability:
                &nbsp;&nbsp;&nbsp;
                Yes
                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                No <span class="symbol">&#9746;</span>
            </td>
            <td>___________________________________________________________________________ </td>
        </tr>
        <tr>
            <td>Kind of disability: _____________________ </td>
            <td>___________________________________________________________________________ </td>
        </tr>



    </table>


    <table style="width:100% ;">
        <tr>
            <td>Is the child receiving a sponsorship/ financial support from any other organisation?</td>
        </tr>
        <tr>
            <td>
                Yes
                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                No <span class="symbol">&#9746;</span>
            </td>
        </tr>
        <tr>
            <td> If yes, Name of organisation:
                ___________________________________________________________________________
            </td>

        </tr>
        <tr>
            <td> Full Address :
                __________________________________________________________________________________________
            </td>
        </tr>
        <tr>
            <td> Name of Representative:
                _______________________________________________________________________________
        </tr>
        <tr>
            <td> Tel no:
                _________________________________________________________________________________________________
            </td>
        </tr>
        <tr>
            <td> Amount of financial support per month/ year :
                __________________________________________________________
            </td>
        </tr>
        <tr>
            <td> What does it cover? &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                Education______ Health_______ Food______ Clothes______ Other______
            </td>
        </tr>
        <tr>
            <td> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>

        <tr>
            <td style="font-weight: 700;font-size: 14px"><u>School/Madrasa Information:</u> </td>
            <td> &nbsp;</td>
        </tr>
        <tr>
            <td> Name of school/madras <span class="highlight"> Prep School</span> </td>

        </tr>
        <tr>
            <td> Tel no:
                <span class="highlight"> 5252566655</span>
            </td>
        </tr>
        <tr>
            <td> Type of School (ex: Government, Private): <span class="highlight"> UNRWA</span>
            </td>
        </tr>

        <tr>
            <td> Grade/ class Attending: <span class="highlight"> {!! $child->childClass() !!}</span> </td>
        </tr>

        <tr>
            <td> Does the family pay school fees?
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                Yes
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                No <span class="symbol">&#9746;</span>
            </td>
        </tr>
        <tr>
            <td> If yes, what are the School Fees per month:
                ___________________________________________________________
            </td>
        </tr>
    </table>

    {{-- Section II: Family Section --}}
    <br /><br /><br /><br />
    <h3 class="black" style="margin-top: 200px"><u>Section II: Family Section</u> </h3>
    {{-- Father --}}
    <p>Father’s Name: <span class="highlight">{!! $child->childFather->father_full_name !!}</span> </p>
    <div class="row">
        <div class="column3 border-bottom">&nbsp;</div>
        <div class="column3 border-bottom">&nbsp;</div>
        <div class="column3 border-bottom">&nbsp;</div>
    </div>
    <div style="clear: both;"></div>
    <div class="row">
        <div class="column3 text-align-left font-0">First Name</div>
        <div class="column3 text-align-left font-0">Middle Name</div>
        <div class="column3 text-align-left font-0">Surname</div>
    </div>
    <div style="clear: both; mTop2"></div>



    <p class="mTop1">Father’s work: <span class="highlight">Employed</span> </p>
    <div style="clear: both;"></div>

    <div class="row font-0">
        <div class="column4">Date of death, if applicable: </div>
        <div class="column4 border-bottom">&nbsp; </div>
        <div class="column4 ">Cause of death:</div>
        <div class="column4 border-bottom"> &nbsp;</div>
    </div>
    <div style="clear: both;"></div>

    {{-- Mother --}}
    <br /> <br />
    <p>Mother’s Name: <span class="highlight">{!! $child->childFather->father_full_name !!}</span> </p>
    <div class="row">
        <div class="column3 border-bottom">&nbsp;</div>
        <div class="column3 border-bottom">&nbsp;</div>
        <div class="column3 border-bottom">&nbsp;</div>
    </div>
    <div style="clear: both;"></div>
    <div class="row">
        <div class="column3 text-align-left font-0">First Name</div>
        <div class="column3 text-align-left font-0">Middle Name</div>
        <div class="column3 text-align-left font-0">Surname</div>
    </div>
    <div style="clear: both;"></div>



    <div class="row font-0">
        <div class="column4">Date of death, if applicable: </div>
        <div class="column4 border-bottom">&nbsp; </div>
        <div class="column4 ">Cause of death:</div>
        <div class="column4 border-bottom"> &nbsp;</div>
    </div>
    <div style="clear: both;"></div>


    <p class="mTop1">
        Who is taking care of the child?
        &nbsp;&nbsp; &nbsp;&nbsp;
        Parent <span class="symbol">&#9745;</span>
        &nbsp;&nbsp;&nbsp;&nbsp;
        Guardian
    </p>


    {{-- Mother --}}
    <br /> <br />
    <p>If Guardian, </p>
    <p>Guardian’s Name: <span class="highlight">{!! $child->childFather->father_full_name !!}</span> </p>
    <div class="row">
        <div class="column3 border-bottom">&nbsp;</div>
        <div class="column3 border-bottom">&nbsp;</div>
        <div class="column3 border-bottom">&nbsp;</div>
    </div>
    <div style="clear: both;"></div>
    <div class="row">
        <div class="column3 text-align-left font-0">First Name</div>
        <div class="column3 text-align-left font-0">Middle Name</div>
        <div class="column3 text-align-left font-0">Surname</div>
    </div>
    <div style="clear: both;"></div>



    <div class="row font-0">
        <div class="column2">Relationship to child: (Uncle/Grandmother etc) </div>
        <div class="column2 ">Guardian’s work</div>
    </div>
    <div style="clear: both;"></div>

    <div class="row font-0">
        <div class="column2 border-bottom"> &nbsp; </div>
        <div class="column2 border-bottom"> &nbsp;</div>
    </div>
    <div style="clear: both;"></div>




    <div class="row font-0">
        <div class="column2">Guardian’s address </div>
    </div>
    <div style="clear: both;"></div>

    <div class="row font-0">
        <div class="column1 border-bottom"> &nbsp; </div>
    </div>
    <div style="clear: both;"></div>



    <p>Number of brothers and sisters: {!! $child->childFamily->number_of_people_including_mother !!}</p>

    <div class="row font-0">
        <div class="column2">Names and ages of brothers:
            <span class="highlight">{!! $child->childFamily->male_number !!}</span>
        </div>
        <div class="column2 "> Names and ages of sisters:
            <span class="highlight">{!! $child->childFamily->female_number !!}</span>
        </div>
    </div>
    <div style="clear: both;"></div>


    <div class="row font-0">

        <div class="column2">
            <p>1 .</p>
            <p>2 .</p>
        </div>

        <div class="column2">
            <p>1 .</p>
            <p>2 .</p>
            <p>3 .</p>
        </div>
    </div>
    <div style="clear: both;"></div>




    <p>
        Do any of the sisters/ brothers receive any sponsorship from any origination?
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Yes
        &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        No <span class="symbol">&#9746;</span>
    </p>

    <p>
        If yes, how many children are receiving sponsorships in the family
        <span>___________________________________</span>
    </p>

    <p>
        Name of sponsor/ organization
        <span>______________________________________________</span>

    </p>

    <p>
        Average Total Monthly Income:
        <span>______________________________________________</span>
    </p>







    <div class="row font-0">
        <div class="column2"> Is the family eligible for Zakah payments? </div>
        <div class="column2 ">
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Yes
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            No <span class="symbol">&#9746;</span></div>
    </div>
    <div style="clear: both;"></div>



    <div class="row font-0">
        <div class="column2"> Is the family receiving any financial assistance? </div>
        <div class="column2 ">
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Yes
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            No <span class="symbol">&#9746;</span>
            <br />
            &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;
            If yes how much <span class="highlight"> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</span>
        </div>
    </div>
    <div style="clear: both;"></div>






















    {{-- Section III: Relevant Information  --}}

    <br /><br /><br /><br /> <br /><br /><br /><br /> <br /><br /><br /><br />
    <h3 class="black" style="margin-top: 500px"><u>Section III: Relevant Information</u> </h3>
    <h5>State any information about the child/ family? </h5>

    <div class="row font-0">
        <div class="column2">- Health problems</div>
    </div>
    <div style="clear: both;"></div>

    <div class="row font-0">
        <div class="column1 border-bottom"> &nbsp; </div>
    </div>
    <div style="clear: both;"></div>
    <div class="row font-0">
        <div class="column1 border-bottom"> &nbsp; </div>
    </div>
    <div style="clear: both;"></div>
    <br />


    <div class="row font-0">
        <div class="column2">- Economic situation of the family</div>
    </div>
    <div style="clear: both;"></div>

    <div class="row font-0">
        <div class="column1 border-bottom"> &nbsp; </div>
    </div>
    <div style="clear: both;"></div>
    <div class="row font-0">
        <div class="column1 border-bottom"> &nbsp; </div>
    </div>
    <div style="clear: both;"></div>
    <br />


    <div class="row font-0">
        <div class="column1">
            - The child’s school progress/Hifz progress (how many Juz completed/How many years remaining till completion
            of Hifz?)</div>
    </div>
    <div style="clear: both;"></div>

    <div class="row font-0">
        <div class="column1 border-bottom"> &nbsp; </div>
    </div>
    <div style="clear: both;"></div>
    <div class="row font-0">
        <div class="column1 border-bottom"> &nbsp; </div>
    </div>
    <div style="clear: both;"></div>
    <br />


    <div class="row font-0">
        <div class="column2"> - Expenses required by school/Madrasa?</div>
    </div>
    <div style="clear: both;"></div>

    <div class="row font-0">
        <div class="column1 border-bottom"> &nbsp; </div>
    </div>
    <div style="clear: both;"></div>
    <div class="row font-0">
        <div class="column1 border-bottom"> &nbsp; </div>
    </div>
    <div style="clear: both;"></div>
    <br />



    <div class="row font-0">
        <div class="column2"> - Expenses required by school/Madrasa?</div>
    </div>
    <div style="clear: both;"></div>

    <div class="row font-0">
        <div class="column1 border-bottom"> &nbsp; </div>
    </div>
    <div style="clear: both;"></div>
    <div class="row font-0">
        <div class="column1 border-bottom"> &nbsp; </div>
    </div>
    <div style="clear: both;"></div>
    <br />



    <div class="row font-0">
        <div class="column2"> - What will the sponsorship funds cover?</div>
    </div>
    <div style="clear: both;"></div>

    <div class="row font-0">
        <div class="column1 border-bottom"> &nbsp; </div>
    </div>
    <div style="clear: both;"></div>
    <div class="row font-0">
        <div class="column1 border-bottom"> &nbsp; </div>
    </div>
    <div style="clear: both;"></div>
    <br />



    <table style="width:100% ;">

        <tr>
            <td style="width: 60%">Declaration: (From partner organization)
            </td>
            <td style="width: 40%">
                For office use
            </td>
        </tr>

        <tr>
            <td style="width: 60%">I herby confirm that the information provided in this application has
                <br />
                been verified by our organisation:
                <span class="highlight"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                    &nbsp;</span>
            </td>
            <td style="width: 40%">
                Date approved:
            </td>
        </tr>
        <tr>
            <td style="width: 60%">Name of Organisation: Nour El Marifa Association
            </td>
            <td style="width: 40%">
                Child ID:
            </td>
        </tr>
        <tr>
            <td style="width: 60%">Address: Palestine – Gaza – Nuseirat – New Camp
            </td>
            <td style="width: 40%">
                Comment:
            </td>
        </tr>
        <tr>
            <td style="width: 60%">Name of Representative: MOHAMMED A. WAHED
                <br />
                (Capitals)

            </td>
            <td style="width: 40%">
            </td>
        </tr>
        <tr>
            <td style="width: 60%">Signature: Mohammed Abdul-Wahed
            </td>
            <td style="width: 40%">
            </td>
        </tr>
        <tr>
            <td style="width: 60%">Date: 7/10/2025
            </td>
            <td style="width: 40%">
            </td>
        </tr>

    </table>


    <p style="margin-top: 20px" class="font-0">
        The parent/guardian need to be aware that the identification of donors may take some time.
        In addition, if a donor drops out, we will make every effort to replace the donor as soon as possible to
        avoid reduction in support.
    </p>


    {{-- Section IIII: CONSENT FORM   --}}
    <br /><br /><br /><br />
    <p style="text-align: center ; margin-top: 500px;">
        <img src="{!! $image !!}" style="width: 250px;">
    </p>


    <h1 class="text-align-center">CONSENT FORM </h1>
    <p class="text-align-center">
        (To be signed by the child Parent / Guardian)
    </p>
    <h2 class="text-align-center">Children Sponsorship Project </h2>
    <br />
    <p style="">
        This form gives UK Islamic Mission the right to use the child’s photos sent along with the child details
        form, progress reports, case studies and any other way of communication between UK Islamic Mission and the
        child/family. By signing this form, you are assigning to UKIM the copyright and all other rights in using
        the photos in all media now known or which may be developed in future.
    </p>

    <p>Thank you for your assistance.</p>
    <p>I agree the above terms</p>
    <p>
        Parent / Guardian Consent [include if the person is under 18]</p>

    <p>I am the parent or guardian of
        <span class="highlight"> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            &nbsp;&nbsp;</span>
    </p>

    <p>
        I have the legal right to consent to and do consent to this form.
    </p>

    <p>Parent / Guardian Name:
        <span class="highlight"> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            &nbsp;&nbsp;</span>
    </p>
    <p>Parent / Guardian Sign.:
        <span class="highlight"> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            &nbsp;&nbsp;</span>
    </p>

    <p>Date:
        <span class="highlight"> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            &nbsp;&nbsp;</span>
    </p>

    <br /><br />
    <p class="text-align-center">
        UK Islamic Mission, Central office, 202 North Gower Street
    </p>
    <br />
    <p class="text-align-center">
        +44(0)2073872157 | cp@ukim.org | www.ukim.org
    </p>
    </div>


</body>
