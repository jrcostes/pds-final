@extends('layouts.app')
@include('sweetalert::alert')


 <head>
    <title>PDS_C3</title>
    <style>
        [contenteditable] {
        outline: 0px solid transparent;
        }
    </style>
 </head>

        @if(session()->has('message'))
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js%22%3E"></script>
            <script src="sweetalert/sweetalert.all.js"></script>

            <script>
                swal({
                    title: "Good job!",
                    text: "Successfully Submitted",
                    icon: "success",
                    button: "Proceed",
                });
            </script>
        @endif

<html>

    <div class="container">
        <form method="get" action="/wkhtmltopdf" autocomplete="off" class="form-horizontal" onsubmit="return submitForm(this);">

           {{--  <form method="post" action="{{ route('post.store') }}" autocomplete="off" class="form-horizontal"> --}}
            @csrf
                <h1>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC/NON-GOVERNMENT/PEOPLE/VOLUNTARY ORGANIZATION</h1><br>
                <span class="border-top"></span>

                <div class="container">
                    <div class="contents">
                        <label for="name">Name & Address of Organization</label>
                        <input name="orgnameAddress1" type="text" class="form-control" placeholder="Type Name & Address of Organization">
                    </div>

                    <div class="row">
                            <label for="incl-dates">Inclusive Dates</label><br>
                            <div class="col-5">
                                <b for="orgdateFrom1">From: </b>
                                <input type="date" class="form-control" id="orgdateFrom1">
                            </div>
                            <div class="col-5">
                                <b for="orgdateTo1">To: </b>
                                <input type="date" class="form-control" id="orgdateTo1">
                            </div>

                            <div class="col-md-4">
                                <label for="num-hours">Number of Hours: </label><br>
                                <input type="date" class="form-control" id="orgnumHours1">
                            </div>

                    </div>
                </div>




                    {{-- Increment Buttons --}}
                    <div class="col-1 row px-2">
                        <div class="col-5 offset-1 px-0">
                            <button class="btn btn-secondary btn-sm w-100" id="minus-ref" disabled>-</button>
                        </div>
                        <div class="col-5 offset-1 px-0">
                            <button class="btn btn-secondary btn-sm w-100" id="add-ref">+</button>
                        </div>
                    </div>
                </div>





    </div>
                            <tr>
                                <th id="row1", rowspan='2'><b>{{Form::label('form1', 'NAME & ADDRESS OF ORGANIZATION')}}</b></th>
                                <th id="row-dates", colspan='2'><b>{{Form:: label('form2', 'INCLUSIVE DATES')}}</b></th>
                                <th id="row1", rowspan='2'><b>{{Form::label('form3', 'NUMBER OF HOURS')}}</b></th>
                                <th id="row1", rowspan='2'><b>{{Form::label('form2','POSITION / NATURE OF WORK')}}</b></th>
                            </tr>
                            <tr>
                                <th id = "row2">{{Form::label('form21', 'From')}}</th>
                                <th id = "row2">{{Form::label('form22', 'To')}}</th>
                            </tr>
                        <tr>
                            <th>{{Form::text('orgnameAddress1')}}</th>
                            <th>{{Form::date('orgdateFrom1')}}</th>
                            <th>{{Form::date('orgdateTo1')}}</th>
                            <th>{{Form::number('orgnumHours1')}}</th>
                            <th>{{Form::text('orgPosition1')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameAddress2')}}</th>
                            <th>{{Form::date('orgdateFrom2')}}</th>
                            <th>{{Form::date('orgdateTo2')}}</th>
                            <th>{{Form::number('orgnumHours2')}}</th>
                            <th>{{Form::text('orgPosition2')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameAddress3')}}</th>
                            <th>{{Form::date('orgdateFrom3')}}</th>
                            <th>{{Form::date('orgdateTo3')}}</th>
                            <th>{{Form::number('orgnumHours3')}}</th>
                            <th>{{Form::text('orgPosition3')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameAddress4')}}</th>
                            <th>{{Form::date('orgdateFrom4')}}</th>
                            <th>{{Form::date('orgdateTo4')}}</th>
                            <th>{{Form::number('orgnumHours4')}}</th>
                            <th>{{Form::text('orgPosition4')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameAddress5')}}</th>
                            <th>{{Form::date('orgdateFrom5')}}</th>
                            <th>{{Form::date('orgdateTo5')}}</th>
                            <th>{{Form::number('orgnumHours5')}}</th>
                            <th>{{Form::text('orgPosition5')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameAddress6')}}</th>
                            <th>{{Form::date('orgdateFrom6')}}</th>
                            <th>{{Form::date('orgdateTo6')}}</th>
                            <th>{{Form::number('orgnumHours6')}}</th>
                            <th>{{Form::text('orgPosition6')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameAddress7')}}</th>
                            <th>{{Form::date('orgdateFrom7')}}</th>
                            <th>{{Form::date('orgdateTo7')}}</th>
                            <th>{{Form::number('orgnumHours7')}}</th>
                            <th>{{Form::text('orgPosition7')}}</th>
                        </tr>
                    </div>

                <h1>VII. LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS ATTENDED</h1>
                    <h3 style="font-style: italic;">(Start from the most recent L&D/training program and include only the relevant L&D/training taken for the last five (5) years for Division Chief/Executive/Managerial positions)</h3><br>
                    <table class="table table-bordered">
                        <tr>
                            <th id="row3-1", rowspan='2'><b>{{Form::label('form1', 'TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS')}}</b></th>
                            <th id="row-dates", colspan='2'><b>{{Form::label('form2', 'INCLUSIVE DATES OF ATTENDANCE')}}</b></th>
                            <th id="row3", rowspan='2'><b>{{Form::label('form3', 'NUMBER OF HOURS')}}</b></th>
                            <th id="row3", rowspan='2'><b>{{Form::label('form3', 'Type of LD')}}</b></th>
                            <th id="row3", rowspan='2'><b>{{Form::label('form2','CONDUCTED/SPONSORED BY')}}</b></th>
                        </tr>
                        <tr>
                            <th id="row4">{{Form::label('form21', 'From')}}</th>
                            <th id="row4">{{Form::label('form22', 'To')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameAddress8')}}</th>
                            <th>{{Form::date('orgdateFrom8')}}</th>
                            <th>{{Form::date('orgdateTo8')}}</th>
                            <th>{{Form::number('orgnumHours8')}}</th>
                            <th>{{Form::text('orgType8')}}</th>
                            <th>{{Form::text('orgnameSponsor8')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameAddress9')}}</th>
                            <th>{{Form::date('orgdateFrom9')}}</th>
                            <th>{{Form::date('orgdateTo9')}}</th>
                            <th>{{Form::number('orgnumHours9')}}</th>
                            <th>{{Form::text('orgType9')}}</th>
                            <th>{{Form::text('orgnameSponsor9')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameAddress10')}}</th>
                            <th>{{Form::date('orgdateFrom10')}}</th>
                            <th>{{Form::date('orgdateTo10')}}</th>
                            <th>{{Form::number('orgnumHours10')}}</th>
                            <th>{{Form::text('orgType10')}}</th>
                            <th>{{Form::text('orgnameSponsor10')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameAddress11')}}</th>
                            <th>{{Form::date('orgdateFrom11')}}</th>
                            <th>{{Form::date('orgdateTo11')}}</th>
                            <th>{{Form::number('orgnumHours11')}}</th>
                            <th>{{Form::text('orgType11')}}</th>
                            <th>{{Form::text('orgnameSponsor11')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameAddress12')}}</th>
                            <th>{{Form::date('orgdateFrom12')}}</th>
                            <th>{{Form::date('orgdateTo12')}}</th>
                            <th>{{Form::number('orgnumHours12')}}</th>
                            <th>{{Form::text('orgType12')}}</th>
                            <th>{{Form::text('orgnameSponsor12')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameAddress13')}}</th>
                            <th>{{Form::date('orgdateFrom13')}}</th>
                            <th>{{Form::date('orgdateTo13')}}</th>
                            <th>{{Form::number('orgnumHours13')}}</th>
                            <th>{{Form::text('orgType13')}}</th>
                            <th>{{Form::text('orgnameSponsor13')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameAddress14')}}</th>
                            <th>{{Form::date('orgdateFrom14')}}</th>
                            <th>{{Form::date('orgdateTo14')}}</th>
                            <th>{{Form::number('orgnumHours14')}}</th>
                            <th>{{Form::text('orgType14')}}</th>
                            <th>{{Form::text('orgnameSponsor14')}}</th>
                        </tr>
                    </table>
                <h1>VIII. OTHER INFORMATION</h1>
                    <table class="table table-bordered">
                        <tr>
                            <th id="row5"><b>{{Form::label('form1', 'SPECIAL SKILLS and HOBBIES')}}</b></th>
                            <th id="row5"><b>{{Form::label('form2', 'NON-ACADEMIC DISTINCTIONS/RECOGNITION')}}</b></th>
                            <th id="row5"><b>{{Form::label('form3', 'MEMBERSHIP IN ASSOCIATION/ORGANIZATION')}}</b></th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameSkill1')}}</th>
                            <th>{{Form::text('orgnameDistinct1')}}</th>
                            <th>{{Form::text('orgnameMembership1')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameSkill2')}}</th>
                            <th>{{Form::text('orgnameDistinct2')}}</th>
                            <th>{{Form::text('orgnameMembership2')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameSkill3')}}</th>
                            <th>{{Form::text('orgnameDistinct3')}}</th>
                            <th>{{Form::text('orgnameMembership3')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameSkill4')}}</th>
                            <th>{{Form::text('orgnameDistinct4')}}</th>
                            <th>{{Form::text('orgnameMembership4')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameSkill5')}}</th>
                            <th>{{Form::text('orgnameDistinct5')}}</th>
                            <th>{{Form::text('orgnameMembership5')}}</th>
                        </tr>
                        <tr>
                            <th>{{Form::text('orgnameSkill6')}}</th>
                            <th>{{Form::text('orgnameDistinct6')}}</th>
                            <th>{{Form::text('orgnameMembership6')}}</th>
                        </tr>
                    </table>




                <div class="container, center">

                   <button type="submit"  class="btn btn-dark ">Submit</button>
                    {{-- <a href="exporter" class="btn btn-primary">Export</a> --}}
                </div>

            {{Form::close()}}

            <div class="buttons">
                <div class="center">
                    <a href="/temp" class="btn btn-primary">Saved Data</a>
                </div>
            </div>

    </div>

</html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="sweetalert/sweetalert.all.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
        <script>
            function submitForm(form) {
                swal({
                    title: "Are you sure?",
                    text: "Do you want to submit?",
                    icon: "info",
                    buttons: true,
                    dangerMode: false
                })
                .then(function (isOkay) {
                    if (isOkay) {
                        swal({
                             icon: "success",
                             text: "Your form has been submitted!",
                             buttons: false
                        });
                        form.submit();
                    }
                });
                return false;
            }
        </script>
