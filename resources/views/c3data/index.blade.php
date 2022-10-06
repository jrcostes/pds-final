@extends('welcome');


 <head>
    <title>PDS_C3</title>
 </head>


<html>
    <div class="formbody">
        <form method="get" action="/wkhtmltopdf" autocomplete="off" class="form-horizontal">
           {{--  <form method="post" action="{{ route('post.store') }}" autocomplete="off" class="form-horizontal"> --}}
            @csrf
            <h1>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC/NON-GOVERNMENT/PEOPLE/VOLUNTARY ORGANIZATION</h1><br>
            <div class ="VI">

                <table class ="table table-bordered">

                        <tr>
                            <th id="row1", rowspan='2'><b>{{Form::label('form1', 'NAME & ADDRESS OF ORGANIZATION')}}</b></th>
                            <th id="rowid", colspan='2'><b>{{Form::label('form2', 'INCLUSIVE DATES')}}</b></th>
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
                </table>
            <h1>VII. LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS ATTENDED</h1>
                <h3 style="font-style: italic;">(Start from the most recent L&D/training program and include only the relevant L&D/training taken for the last five (5) years for Division Chief/Executive/Managerial positions)</h3><br>
                <table class="table table-bordered">
                    <tr>
                        <th id="row3", rowspan='2'><b>{{Form::label('form1', 'TITLE OF LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS')}}</b></th>
                        <th id="rowid", colspan='2'><b>{{Form::label('form2', 'INCLUSIVE DATES OF ATTENDANCE')}}</b></th>
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

            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="c1form"
                            name="form_radio" class="custom-control-input" value="c3form">
                        <label class="custom-control-label"
                            for="PDF Print">PDF</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="c2form"
                            name="form_radio" class="custom-control-input" value="Sheet">
                        <label class="custom-control-label"
                            for="Save to Database">Save</label>
                    </div>
                    <button type="submit" class="btn btn-dark ">Submit</button>
                </div>
            </div>

            {{Form::close()}}

    </div>
    <div class="buttons">
        <div class="center">
            <a href="/temp" class="btn btn-primary">View in PDF</a>
            <a href="exporter" class="btn btn-primary">Export</a>
        </div>
    </div>
</html>

