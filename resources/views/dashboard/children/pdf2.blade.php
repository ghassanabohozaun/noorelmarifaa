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
        }

        .form-box {
            max-width: 800px;
            margin: auto;
            padding: 10px;
            font-size: 9px;
            line-height: 24px;
            font-family: 'almarai', sans-serif;
            color: #555;
            /* border: 2px solid #333; */
        }

        .form-box table {
            width: 100%;
            line-height: inherit;
            text-align: right;
        }

        .form-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .form-box table tr td {
            text-align: left;
        }

        .form-box table tr.top table td {
            /* padding-bottom: 20px; */
        }

        .form-box table tr.top table td.title {
            font-size: 30px;
            line-height: 45px;
            color: #333;
        }

        .form-box table tr.information table td {
            padding-bottom: 40px;
        }

        .form-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #424040;
            font-weight: 100;
        }

        .form-box table tr.details td {
            padding-bottom: 20px;
        }

        .form-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .form-box table tr.item.last td {
            border-bottom: none;
        }

        .form-box table tr.total td {
            border-top: 2px solid #eee;
            font-weight: 100;
        }

        @media only screen and (max-width: 600px) {
            .form-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .form-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: 'almarai', sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td {
            text-align: right;
        }

        @page {
            header: page-header;
            footer: page-footer;
        }
    </style>
</head>

<body>






    <div class="form-box {{ config('app.locale') == 'ar' ? 'rtl' : '' }}">

        <p>
            <img src="{!! $image !!}" style="width: 250px;">
        </p>
        <p>
        <h2 style="color: black"><i><u>{!! __('children.sponsorship_program_file') !!}:</u></i> </h2>
        </p>



        <h1 style="color:#4472C4">Child details</h1>
        <table style="width:100% ;">
            <tr>
                <td> Name:{!! $child->childFullName() !!}</td>
                <td rowspan="5" style="text-align: right; vertical-align: bottom;">
                    <img src="{!! $picture_of_the_orphan_child !!}" style="width: 200px;border: 2px solid #333;border-radius: 10px;">
                </td>
            </tr>
            <tr>
                <td> Child ID: N/A</td>
                <td></td>
            </tr>
            <tr>
                <td> Date of Birth: {!! $child->birthday !!}</td>
                <td></td>
            </tr>
            <tr>
                <td> Age: {!! \Carbon\Carbon::parse($child->birthday)->age !!}</td>
                <td></td>
            </tr>
            <tr>
                <td> Gender: {!! $child->childGender() !!}</td>
                <td></td>
            </tr>
            <tr>
                <td> Category: Quran Hifaz</td>
                <td></td>
            </tr>
            <tr>
                <td> Health: {!! $child->childHealthStatus() !!}</td>
                <td></td>
            </tr>
            <tr>
                <td> City: {!! $child->city->name !!} </td>
                <td></td>
            </tr>

            <tr>
                <td> Country: Palestine </td>
                <td></td>
            </tr>

            <tr>
                <td> Class or Level: {!! $child->childClass() !!} </td>
                <td></td>
            </tr>

            <tr>
                <td> School: Prep school </td>
                <td></td>
            </tr>

            <tr>
                <td> Overall Academic Progress: N/A </td>
            </tr>

        </table>

        <h1 style="color:#4472C4">Parents Details:</h1>
        <table style="width:100% ;">
            <tr>
                <td> Father Name: {!! $child->childFather?->father_full_name !!}</td>
            </tr>
            <tr>
                <td> Mother Name: {!! $child->childMother?->mother_full_name !!}</td>
            </tr>
        </table>

        <h1 style="color:#4472C4">Guardian Details:</h1>
        <table style="width:100% ;">
            <tr>
                <td> Name: {!! $child->childGuardian?->guardian_full_name !!} </td>
            </tr>
            <tr>
                <td> Relationship: {!! $child->childGuardian?->guardian_relationship_with_the_child !!}</td>
            </tr>
            <tr>
                <td> Address: </td>
            </tr>
            <tr>
                <td> Total Family Members: {!! $child->childFamily?->number_of_people_including_mother !!} </td>
            </tr>
        </table>


    </div>


</body>
