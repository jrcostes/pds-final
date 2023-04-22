@extends('layouts.userlayout')
<?php
$countries = [
    '' => '',
    'Afghanistan' => 'Afghanistan',
    'Aland Islands' => 'Aland Islands',
    'Albania' => 'Albania',
    'Algeria' => 'Algeria',
    'American Samoa' => 'American Samoa',
    'Andorra' => 'Andorra',
    'Angola' => 'Angola',
    'Anguilla' => 'Anguilla',
    'Antarctica' => 'Antarctica',
    'Antigua and Barbuda' => 'Antigua and Barbuda',
    'Argentina' => 'Argentina',
    'Armenia' => 'Armenia',
    'Aruba' => 'Aruba',
    'Australia' => 'Australia',
    'Austria' => 'Austria',
    'Azerbaijan' => 'Azerbaijan',
    'Bahamas' => 'Bahamas',
    'Bahrain' => 'Bahrain',
    'Bangladesh' => 'Bangladesh',
    'Barbados' => 'Barbados',
    'Belarus' => 'Belarus',
    'Belgium' => 'Belgium',
    'Belize' => 'Belize',
    'Benin' => 'Benin',
    'Bermuda' => 'Bermuda',
    'Bhutan' => 'Bhutan',
    'Bolivia' => 'Bolivia',
    'Bonaire, Sint Eustatius and Saba' => 'Bonaire, Sint Eustatius and Saba',
    'Bosnia and Herzegovina' => 'Bosnia and Herzegovina',
    'Botswana' => 'Botswana',
    'Bouvet Island' => 'Bouvet Island',
    'Brazil' => 'Brazil',
    'British Indian Ocean Territory' => 'British Indian Ocean Territory',
    'Brunei Darussalam' => 'Brunei Darussalam',
    'Bulgaria' => 'Bulgaria',
    'Burkina Faso' => 'Burkina Faso',
    'Burundi' => 'Burundi',
    'Cambodia' => 'Cambodia',
    'Cameroon' => 'Cameroon',
    'Canada' => 'Canada',
    'Cape Verde' => 'Cape Verde',
    'Cayman Islands' => 'Cayman Islands',
    'Central African Republic' => 'Central African Republic',
    'Chad' => 'Chad',
    'Chile' => 'Chile',
    'China' => 'China',
    'Christmas Island' => 'Christmas Island',
    'Cocos (Keeling) Islands' => 'Cocos (Keeling) Islands',
    'Colombia' => 'Colombia',
    'Comoros' => 'Comoros',
    'Congo' => 'Congo',
    'The Democratic Republic of Congo' => 'Congo, the Democratic Republic of the',
    'Cook Islands' => 'Cook Islands',
    'Costa Rica' => 'Costa Rica',
    "Cote D'Ivoire" => "Cote D'Ivoire",
    'Croatia' => 'Croatia',
    'Cuba' => 'Cuba',
    'Curacao' => 'Curacao',
    'Cyprus' => 'Cyprus',
    'Czech Republic' => 'Czech Republic',
    'Denmark' => 'Denmark',
    'Djibouti' => 'Djibouti',
    'Dominica' => 'Dominica',
    'Dominican Republic' => 'Dominican Republic',
    'Ecuador' => 'Ecuador',
    'Egypt' => 'Egypt',
    'El Salvador' => 'El Salvador',
    'Equitorial Guinea' => 'Equatorial Guinea',
    'Eritrea' => 'Eritrea',
    'Estonia' => 'Estonia',
    'Ethiopia' => 'Ethiopia',
    'Falkland Islands (Malvinas)' => 'Falkland Islands (Malvinas)',
    'Faroe Islands' => 'Faroe Islands',
    'Fiji' => 'Fiji',
    'Finland' => 'Finland',
    'France' => 'France',
    'French Guiana' => 'French Guiana',
    'French Polynesia' => 'French Polynesia',
    'French Southern Teritories' => 'French Southern Territories',
    'Gabon' => 'Gabon',
    'Gambia' => 'Gambia',
    'Georgia' => 'Georgia',
    'Germany' => 'Germany',
    'Ghana' => 'Ghana',
    'Gibraltar' => 'Gibraltar',
    'Greece' => 'Greece',
    'Greenland' => 'Greenland',
    'Grenada' => 'Grenada',
    'Guadaloupe' => 'Guadeloupe',
    'Guam' => 'Guam',
    'Guatemala' => 'Guatemala',
    'Guernsey' => 'Guernsey',
    'Guinea' => 'Guinea',
    'Guinea-Bissau' => 'Guinea-Bissau',
    'Guyana' => 'Guyana',
    'Haiti' => 'Haiti',
    'Heard Island and Mcdonald Islands' => 'Heard Island and Mcdonald Islands',
    'Holy See (Vatican City State)' => 'Holy See (Vatican City State)',
    'Honduras' => 'Honduras',
    'Hong Kong' => 'Hong Kong',
    'Hungary' => 'Hungary',
    'Iceland' => 'Iceland',
    'India' => 'India',
    'Indonesia' => 'Indonesia',
    'Iran' => 'Iran, Islamic Republic of',
    'Iraq' => 'Iraq',
    'Ireland' => 'Ireland',
    'Isle of Man' => 'Isle of Man',
    'Israel' => 'Israel',
    'Italy' => 'Italy',
    'Jamaica' => 'Jamaica',
    'Japan' => 'Japan',
    'Jersey' => 'Jersey',
    'Jordan' => 'Jordan',
    'Kazakhstan' => 'Kazakhstan',
    'Kenya' => 'Kenya',
    'Kiribati' => 'Kiribati',
    "Korea, Democratic People's Republic of" => "Korea, Democratic People's Republic of",
    'Korea, Republic of' => 'Korea, Republic of',
    'Kosovo' => 'Kosovo',
    'Kuwait' => 'Kuwait',
    'Krygyzstan' => 'Kyrgyzstan',
    "Lao People's Democratic Republic" => "Lao People's Democratic Republic",
    'Latvia' => 'Latvia',
    'Lebanon' => 'Lebanon',
    'Lesotho' => 'Lesotho',
    'Liberia' => 'Liberia',
    'Libyan Arab Jamahiriya' => 'Libyan Arab Jamahiriya',
    'Liechtenstien' => 'Liechtenstein',
    'Lithuania' => 'Lithuania',
    'Luxembourg' => 'Luxembourg',
    'Macao' => 'Macao',
    'Macedonia, the Former Yugoslav Republic of' => 'Macedonia, the Former Yugoslav Republic of',
    'Madagascar' => 'Madagascar',
    'Malawi' => 'Malawi',
    'Malaysia' => 'Malaysia',
    'Maldives' => 'Maldives',
    'Mali' => 'Mali',
    'Malta' => 'Malta',
    'Marshall Islands' => 'Marshall Islands',
    'Matinique' => 'Martinique',
    'Mauritania' => 'Mauritania',
    'Mauritius' => 'Mauritius',
    'Mayotte' => 'Mayotte',
    'Mexico' => 'Mexico',
    'Micronesia, Federated States of' => 'Micronesia, Federated States of',
    'Moldova, Republic of' => 'Moldova, Republic of',
    'Monaco' => 'Monaco',
    'Mongolia' => 'Mongolia',
    'Montenegro' => 'Montenegro',
    'Monserrat' => 'Montserrat',
    'Morocco' => 'Morocco',
    'Mozambique' => 'Mozambique',
    'Myanmar' => 'Myanmar',
    'Namibia' => 'Namibia',
    'Nauru' => 'Nauru',
    'Nepal' => 'Nepal',
    'Netherlands' => 'Netherlands',
    'Netherlands Antilles' => 'Netherlands Antilles',
    'New Caledonia' => 'New Caledonia',
    'New Zealand' => 'New Zealand',
    'Nicaragua' => 'Nicaragua',
    'Niger' => 'Niger',
    'Nigeria' => 'Nigeria',
    'Niue' => 'Niue',
    'Norfolk Island' => 'Norfolk Island',
    'Northern Mariana Islands' => 'Northern Mariana Islands',
    'Norway' => 'Norway',
    'Oman' => 'Oman',
    'Pakistan' => 'Pakistan',
    'Palau' => 'Palau',
    'Palestinian Territory, Occupied' => 'Palestinian Territory, Occupied',
    'Panama' => 'Panama',
    'Papua New Guinea' => 'Papua New Guinea',
    'Paraguay' => 'Paraguay',
    'Peru' => 'Peru',
    'Philippines' => 'Philippines',
    'Pitcairn' => 'Pitcairn',
    'Poland' => 'Poland',
    'Portugal' => 'Portugal',
    'Puerto Rico' => 'Puerto Rico',
    'Qatar' => 'Qatar',
    'Reunion' => 'Reunion',
    'Romania' => 'Romania',
    'Russian Federation' => 'Russian Federation',
    'Rwanda' => 'Rwanda',
    'Saint Barthelemy' => 'Saint Barthelemy',
    'Saint Helena' => 'Saint Helena',
    'Saint Kitts and Nevis' => 'Saint Kitts and Nevis',
    'Saint Lucia' => 'Saint Lucia',
    'Saint Martin' => 'Saint Martin',
    'Saint Pierre and Miquelon' => 'Saint Pierre and Miquelon',
    'Saint Vincent and the Grenadines' => 'Saint Vincent and the Grenadines',
    'Samoa' => 'Samoa',
    'San Marino' => 'San Marino',
    'Sao Tome and Principe' => 'Sao Tome and Principe',
    'Saudi Arabia' => 'Saudi Arabia',
    'Senegal' => 'Senegal',
    'Serbia' => 'Serbia',
    'Serbia and Montenegro' => 'Serbia and Montenegro',
    'Seychelles' => 'Seychelles',
    'Sierra Leone' => 'Sierra Leone',
    'Singapore' => 'Singapore',
    'Sint Maarten' => 'Sint Maarten',
    'Slovakia' => 'Slovakia',
    'Slovenia' => 'Slovenia',
    'Solomon Islands' => 'Solomon Islands',
    'Somalia' => 'Somalia',
    'South Africa' => 'South Africa',
    'South Georgia and the South Sandwich Islands' => 'South Georgia and the South Sandwich Islands',
    'South Sudan' => 'South Sudan',
    'Spain' => 'Spain',
    'Sri Lanka' => 'Sri Lanka',
    'Sudan' => 'Sudan',
    'Suriname' => 'Suriname',
    'Svalbard and Jan Mayen' => 'Svalbard and Jan Mayen',
    'Swaziland' => 'Swaziland',
    'Sweden' => 'Sweden',
    'Switzerland' => 'Switzerland',
    'Syrian Arab Republic' => 'Syrian Arab Republic',
    'Taiwan, Province of China' => 'Taiwan, Province of China',
    'Tajikistan' => 'Tajikistan',
    'Tanzania' => 'Tanzania, United Republic of',
    'Thailand' => 'Thailand',
    'Timor-Leste' => 'Timor-Leste',
    'Togo' => 'Togo',
    'Tokelau' => 'Tokelau',
    'Tonga' => 'Tonga',
    'Trinidad and Tobago' => 'Trinidad and Tobago',
    'Tunisia' => 'Tunisia',
    'Turkey' => 'Turkey',
    'Turkmenistan' => 'Turkmenistan',
    'Turks and Caicos Islands' => 'Turks and Caicos Islands',
    'Tuvalu' => 'Tuvalu',
    'Uganda' => 'Uganda',
    'Ukraine' => 'Ukraine',
    'United Arab Emirates' => 'United Arab Emirates',
    'United Kingdom' => 'United Kingdom',
    'United States' => 'United States',
    'United States Minor Outlying Islands' => 'United States Minor Outlying Islands',
    'Uruguay' => 'Uruguay',
    'Uzbekistan' => 'Uzbekistan',
    'Vanuatu' => 'Vanuatu',
    'Venezuela' => 'Venezuela',
    'Vietnam' => 'Vietnam',
    'Virgin Islands, British' => 'Virgin Islands, British',
    'Virgin Islands, U.s.' => 'Virgin Islands, U.s.',
    'Wallis and Futuna' => 'Wallis and Futuna',
    'Western Sahara' => 'Western Sahara',
    'Yemen' => 'Yemen',
    'Zambia' => 'Zambia',
    'Zimbabwe' => 'Zimbabwe',
];
?>
<?php
$validID = [
    'UMID' => 'e-Card / UMID',
    'Employee ID' => "Employee's ID / Office ID",
    'Driver License' => "Driver's License",
    'Professional Regulation Commission' => 'Professional Regulation Commission (PRC) ID',
    'Passport' => 'Passport',
    'Senior Citizen ID' => 'Senior Citizen ID',
    'SSS ID' => 'SSS ID',
    'COMELEC ID' => 'COMELEC / Voters ID / COMELEC Registration Form',
    'Philippine Identification ID' => 'Philippine Identification (PhilID)',
    'NBI' => 'NBI Clearance',
    'IBP ID' => 'Integrated Bar of the Philippines (IBP) ID',
    'Firearms License' => 'Firearms License',
    'AFPSLAI ID' => 'AFPSLAI ID',
    'PVAO ID' => 'PVAO ID',
    'AFP Beneficiary ID' => 'AFP Beneficiary ID',
    'BIR (TIN)' => 'BIR-TIN ID',
    'Pag-ibig ID' => 'Pag-ibig ID',
    'PWD ID' => 'Person’s With Disability (PWD) ID',
    'Solo Parent ID' => 'Solo Parent ID',
    'Pantawid Pamilya Pilipino Program ID' => '4Ps ID',
    'Barangay ID' => 'Barangay ID',
    'Philippine Postal ID' => 'PhilPost ID',
    'Phil-health ID' => 'Philhealth ID',
    'School ID' => 'School ID',
    'Other Valid Government Issued IDs' => 'Other ID',
    'Documents with Picture and Signature' => 'Other Documents',
];
?>
<?php
$case = [
    'Open' => 'Open',
    'Inactive' => 'Inactive',
    'Closed' => 'Closed',
    'Reopened' => 'Reopened',
];
?>
<?php
$group = [
    '' => '',
    'Abelling' => 'Abelling',
    'Abiyan' => 'Abiyan',
    'Adasen' => 'Adasen',
    'Aeta' => 'Aeta',
    'Aggay' => 'Aggay',
    'Agta' => 'Agta',
    'Agutaynon' => 'Agutaynon',
    'Alab' => 'Alab',
    'Alangan Mangyan' => 'Alangan Mangyan',
    'Apayao' => 'Apayao',
    'Aromanon' => 'Aromanon',
    'Ata' => 'Ata',
    'Ati' => 'Ati',
    'Ayangan' => 'Ayangan',
    'Badjao' => 'Badjao',
    'Bugkalot' => 'Bugkalot',
    'Bago' => 'Bago',
    'Bagobo' => 'Bagobo',
    'Buhid Mangyan' => 'Buhid Mangyan',
    'Balangao' => 'Balangao',
    'Balatoc' => 'Balatoc',
    'Baluga' => 'Baluga',
    'Banao' => 'Banao',
    'Banwaon' => 'Banwaon',
    'Barlig' => 'Barlig',
    'Basao' => 'Basao',
    'Batak' => 'Batak',
    'Batangan Mangyan' => 'Batangan Mangyan',
    'Binongan' => 'Binongan',
    'Blaan' => 'Blaan',
    'Bontok' => 'Bontok',
    'Bukidnon' => 'Bukidnon',
    'Butbut' => 'Butbut',
    'Cagaluan' => 'Cagaluan',
    'Central Bontok' => 'Central Bontok',
    'Cimaron' => 'Cimaron',
    'Cuyunon' => 'Cuyunon',
    'Dacalan' => 'Dacalan',
    'Dagayanen' => 'Dagayanen',
    'Danak' => 'Danak',
    'Dananao' => 'Dananao',
    'Dibabawon' => 'Dibabawon',
    'Dulangan' => 'Dulangan',
    'Dumagat' => 'Dumagat',
    'Eastern Bontok' => 'Eastern Bontok',
    'Escaya' => 'Escaya',
    'Gaddang' => 'Gaddang',
    'Gubang' => 'Gubang',
    'Gubatnon Mangyan' => 'Gubatnon Mangyan',
    'Guilayon' => 'Guilayon',
    'Guinaang' => 'Guinaang',
    'Hanunuo Mangyan' => 'Hanunuo Mangyan',
    'Higaonon' => 'Higaonon',
    'Ibaloy' => 'Ibaloy',
    'Ibanag' => 'Ibanag',
    'Ifugao' => 'Ifugao',
    'Iraya Mangyan' => 'Iraya Mangyan',
    'Isarog' => 'Isarog',
    'Isinai' => 'Isinai',
    'Isneg' => 'Isneg',
    'Itneg' => 'Itneg',
    'Itawis' => 'Itawis',
    'Itom' => 'Itom',
    'Iranon' => 'Iranon',
    'Jama Mapon' => 'Jama Mapon',
    'Kabihug' => 'Kabihug',
    'Kalagan' => 'Kalagan',
    'Kalanguya' => 'Kalanguya',
    'Kalibugan' => 'Kalibugan',
    'Kalinga' => 'Kalinga',
    'Kamigin' => 'Kamigin',
    'Kankanaey Ibenguet' => 'Kankanaey Ibenguet',
    'Kankanaey Iyaplay' => 'Kankanaey Iyaplay',
    'Karao' => 'Karao',
    'Karintik' => 'Karintik',
    'Kongking' => 'Kongking',
    'Korolanos' => 'Korolanos',
    'Lambangian' => 'Lambangian',
    'Langilan' => 'Langilan',
    'Lubo' => 'Lubo',
    'Lubuagan' => 'Lubuagan',
    'Mabaka' => 'Mabaka',
    'Madukayan' => 'Madukayan',
    'Maeng' => 'Maeng',
    'Magahat' => 'Magahat',
    'Maguindanao' => 'Maguindanao',
    'Malbong' => 'Malbong',
    'Mamanwa' => 'Mamanwa',
    'Mandaya' => 'Mandaya',
    'Mandek-ey' => 'Mandek-ey',
    'Mangali' => 'Mangali',
    'Manobo' => 'Manobo',
    'Manobo B‟lit' => 'Manobo B‟lit',
    'Mansaka' => 'Mansaka',
    'Maranao' => 'Maranao',
    'Masadiit' => 'Masadiit',
    'Matigsalog' => 'Matigsalog',
    'Mayudan' => 'Mayudan',
    'Molbog' => 'Molbog',
    'Naneng' => 'Naneng',
    'Negrito' => 'Negrito',
    'Northern Kankanaey' => 'Northern Kankanaey',
    'Palawanon' => 'Palawanon',
    'Pugot' => 'Pugot',
    'Pullon' => 'Pullon',
    'Ratagnon Mangyan' => 'Ratagnon Mangyan',
    'Remontado' => 'Remontado',
    'Sadanga' => 'Sadanga',
    'Salegseg' => 'Salegseg',
    'Sama' => 'Sama',
    'Sama Laut' => 'Sama Laut',
    'Sangil' => 'Sangil',
    'Subanen' => 'Subanen',
    'Sulod' => 'Sulod',
    'Sumadel' => 'Sumadel',
    'T-boli' => 'T-boli',
    'Tabangon' => 'Tabangon',
    'Tadyawan Mangyan' => 'Tadyawan Mangyan',
    'Tagabawa' => 'Tagabawa',
    'Tagakaolo' => 'Sama',
    'Talaandig' => 'Talaandig',
    'Talaingod' => 'Talaingod',
    'Taloctok' => 'Taloctok',
    'Tao‟t Bato' => 'Tao‟t Bato',
    'Tigawahanon' => 'Tigawahanon',
    'Tinggian' => 'Tinggian',
    'Tinglayan' => 'Tinglayan',
    'Tiruray' => 'Tiruray',
    'Tonglayan' => 'Tonglayan',
    'Tulgao' => 'Tulgao',
    'Tuwali' => 'Tuwali',
    'Ubo Manobo' => 'Ubo Manobo',
    'Umayamnon' => 'Umayamnon',
    'Yakan' => 'Yakan',
];

?>

@section('content')
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            body {
                font-family: "Times New Roman", Times, serif;
            }

            .h2 {
                font-family: "Times New Roman", Times, serif;
            }

            /* Style the tab */
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }

            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;

            }

            #submitbtn {
                padding-top: 1%;
                padding-left: 1%;
                color: #383c54;
            }

            #submitbutton {
                background-color: #383c54;
                border-block-color: #383c54;
            }
        </style>
    </head>

    <body>

        <div class="w3-container">
            <div class="instruction">
                <h2>Personal Datasheet</h2>
                <p>Click on the buttons inside the tabbed menu.</p>
            </div>

            <div class="w3-bar w3-black">
                <button class="w3-bar-item w3-button tablink" onclick="openForm(event,'C1FORM')">Personal
                    Information</button>
                <button class="w3-bar-item w3-button tablink" onclick="openForm(event,'C2FORM')">Work Experience</button>
                <button class="w3-bar-item w3-button tablink" onclick="openForm(event,'C3FORM')">Voluntary Work</button>
                <button class="w3-bar-item w3-button tablink" onclick="openForm(event,'C4FORM')">Other Information</button>
            </div>

            <script>
                function openForm(evt, formName) {
                    var i, x, tablinks;
                    x = document.getElementsByClassName("form");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablink");
                    for (i = 0; i < x.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace("w3", "");
                    }
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " w3";
                }
            </script>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route("user.formss.update", [$surname]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div id="C1FORM" class="tabcontent">
                    <div class="box-form">
                        <div>
                            <p><em><b>WARNING: Any misrepresentation made in the Personal Data Sheet and the Work Experience
                                        Sheet
                                        shall cause the filing of administrative/criminal case/s against the person
                                        concerned.</b></em></p>
                            <p><em><b>READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS) BEFORE
                                        ACCOMPLISHING
                                        PDS
                                        FORM.</b></em></p>
                            </p>
                            <p><b>DO NOT ABBREVIATE.</b></p>
                        </div>

                        <div class="personalInformation">
                            <h2 id="personal">I. Personal Information</h2><br>

                            {{-- Full Name --}}
                            <div class="row">
                                <div class="col">
                                    {{ Form::label('surname', 'Last Name') }}
                                    <input class="form-control" type="text" name="surname" id="surname" value="{{ old('surname', $surname) }}" required>
                                </div>
                                <div class="col">
                                    {{ Form::label('firstname', 'First Name') }}
                                    <input class="form-control" type="text" name="firstname" id="firstname" value="{{ old('firstname', $firstname) }}" required>
                                </div>
                                <div class="col">
                                    {{ Form::label('midname', 'Middle Name') }}
                                    <input class="form-control" type="text" name="midname" id="mid" value="{{ old('midname', $midname) }}" required>
                                </div>
                                <div class="col col-lg-2">
                                    {{ Form::label('nameext', 'Name Extension') }}
                                    <input class="form-control" type="text" name="nameext" id="firstnameext" value="{{ old('firstnameext', $answersc1['firstnameext']) }}" >
                                </div>
                            </div>

                            {{-- Birth --}}
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <br>
                                    {{ Form::label('placeofBirth', 'Place of Birth') }}
                                    <input class="form-control" type="text" name="placeofBirth" id="placeofbirth" value="{{ old('placeofBirth', $answersc1['placeBirth']) }}" required>

                                </div>
                                <div class="col-6 col-md-4">
                                    <br>

                                    <label for="birthdate">Date of Birth</label><br>

                                    <input type="date" class="date-picker" name="birthdate" id="birthdate" value="{{old('birthdate', $answersc1['birthdate'])}}"
                                        data-coreui-toggle="date-picker" required>
                                </div>

                            </div>

                            <br>

                            {{-- Sex > Weight --}}
                            <div class="row">
                                <div class="col-sm">
                                    {{-- <div class="form-row align-items-center"> --}}
                                    <div class="col-auto my-1">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Sex</label>
                                        <select class="form-select" aria-label="Default select example" id="sex"
                                            name="sex">
                                            <option value="0">Male</option>
                                            <option value="1">Female</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm">
                                    <div class="col-auto my-1">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Civil Status</label>
                                        <select class="form-control" aria-label="Default select example" id="civilStatus"
                                            name='civilStatus'>
                                            <option value='single'>Single</option>
                                            <option value='married'>Married</option>
                                            <option value='separated'>Separated</option>
                                            <option value='widowed'>Widowed</option>
                                            <option value='other'>Other/s</option>
                                        </select>
                                        <input class="form-control" type="text" name="civilothers" id="civilothers">
                                    </div>
                                </div>

                                <div class="col-sm">
                                    {{-- <div class="form-row align-items-center"> --}}
                                    <div class="col-auto my-1">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Bloodtype</label>
                                        <select class="form-select" aria-label="Default select example" id="bloodType"
                                            name="bloodType" placeholder="Select one..." value="{{old('bloodType', $answersc1['bloodType'])}}">
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="unknown">unknown</option>
                                        </select>
                                    </div>
                                    {{-- {{ Form::label('bloodType', 'Bloodtype') }}<br>
                    {{ Form::text('bloodType', '', ['required' => 'required']) }} --}}
                                    {{-- </div> --}}
                                </div>
                                <div class="col-sm">
                                    {{ Form::label('height', 'Height') }}<br>
                                    <input class="form-control" type="number" name="height" id="height" value="{{ old('height', $answersc1['height']) }}" required>
                                </div>
                                <div class="col-sm">
                                    {{ Form::label('weight', 'Weight') }}<br>
                                    <input class="form-control" type="number" name="weight" id="weight" value="{{ old('weight', $answersc1['weight']) }}" required>
                                </div>
                            </div>
                        </div>

                        <br>

                        {{-- Government IDs --}}
                        <b>{{ Form::label('Government/Company IDs') }}</b><br>
                        <div class="row">
                            <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="gsisno">GSIS No.</span>
                                    </div>
                                    <input name="gsisno" type="text" class="form-control" aria-label="Small"
                                        aria-describedby="inputGroup-sizing-sm" value="{{old('gsisno', $answersc1['gsisno'])}}">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="pagibigno">PAG-IBIG No.</span>
                                    </div>
                                    <input name="pagibigno" type="text" class="form-control" aria-label="Small"
                                        aria-describedby="inputGroup-sizing-sm" value="{{old('gsisno', $answersc1['gsisno'])}}">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="philhealthno">PHILHEALTH No.</span>
                                    </div>
                                    <input name="philhealthno" type="text" class="form-control" aria-label="Small"
                                        aria-describedby="inputGroup-sizing-sm" value="{{old('philhealthno', $answersc1['philhealthno'])}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="sssno">SSS No.</span>
                                    </div>
                                    <input name="sssno" type="text" class="form-control" aria-label="Small"
                                        aria-describedby="inputGroup-sizing-sm" value="{{old('sssno', $answersc1['sssno'])}}">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="tinno">TIN No.</span>
                                    </div>
                                    <input name="tinno" type="text" class="form-control" aria-label="Small"
                                        aria-describedby="inputGroup-sizing-sm" value="{{old('tinno', $answersc1['tinno'])}}">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="agencyemp">AGENCY EMPLOYEE No.</span>
                                    </div>
                                    <input name="agencyemp" type="text" class="form-control" aria-label="Small"
                                        aria-describedby="inputGroup-sizing-sm" value="{{old('agencyemp', $answersc1['agencyemp'])}}">
                                </div>
                            </div>
                        </div>

                        {{-- Citizenship --}}
                        <b>{{ Form::label('citizenship', 'Citizenship') }}<br></b>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="citizens" id="flexRadioDefault1"
                                value="Filipino">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Filipino
                            </label>
                            <br>

                            <input class="form-check-input" type="radio" name="citizens" id="flexRadioDefault2"
                                value="Dual Citizenship">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Dual Citizenship
                            </label>


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Select</label>
                                </div>
                                <select class="form-select" aria-label="Default select example" id="dualcitizenType"
                                    name="dualcitizenType" aria-placeholder="Select one...">
                                    <option value="by birth">By Birth</option>
                                    <option value="by naturalization">By Naturalization</option>
                                </select>
                            </div>
                            {{ Form::label('Please indicate country') }}
                            {{ Form::select('country', $countries, null, ['class' => 'form-control', 'placeholder' => 'Select Country...']) }}
                        </div>

                        <br>

                        {{-- Address --}}
                        {{-- <div class="container"> --}}
                        <div class="row">
                            <div class="col">
                                <b>{{ Form::label('residential-address', 'Residential Address') }}<br></b>
                                <div class="row">
                                    <div class="col">
                                    <input class="form-control" type="text" name="residentialhouse" id="houseno-R" value="{{ old('', $answersc1['residentialhouse']) }}" required>
                                    <input class="form-control" type="text" name="residentialst" id="street-R" value="{{ old('residentialst', $answersc1['residentialst']) }}" required>
                                    <input class="form-control" type="text" name="residentialsudv" id="sudbivillage-R" value="{{ old('residentialsudv', $answersc1['residentialsudv']) }}" required>
                                    </div><br>
                                    <div class="col">
                                    <input class="form-control" type="text" name="residentialbrgy" id="barangay-R" value="{{ old('residentialbrgy', $answersc1['residentialbrgy']) }}" required>
                                    <input class="form-control" type="text" name="residentialcity" id="CityMunicipality-R" value="{{ old('residentialcity', $answersc1['residentialcity']) }}" required>
                                    <input class="form-control" type="text" name="residentialprv" id="province-R" value="{{ old('residentialprv', $answersc1['residentialprv']) }}" required>
                                    </div>
                                </div>
                                <br>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="zipcode-R">Zip Code</span>
                                    </div>
                                    <input type="text" name="residentialzip" id="residentialzip" class="form-control"
                                        aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{old('residentialzip', $answersc1['residentialzip'])}}">
                                </div>
                            </div>

                            <div class="col">
                                <b>{{ Form::label('permanentaddress', 'Permanent Address') }}<br></b>
                                <div class="row">
                                    <div class="col">
                                    <input class="form-control" type="text" name="permanenthouse" id="houseno-P" value="{{ old('', $answersc1['permanenthouse']) }}" required>
                                    <input class="form-control" type="text" name="permanentst" id="street-P" value="{{ old('residentialst', $answersc1['permanentst']) }}" required>
                                    <input class="form-control" type="text" name="permanentsubdv" id="sudbivillage-P" value="{{ old('permanentsubdv', $answersc1['permanentsubdv']) }}" required>
                                    </div>
                                    <div class="col">
                                    <input class="form-control" type="text" name="permanentbrgy" id="barangayP" value="{{ old('permanentbrgy', $answersc1['permanentbrgy']) }}" required>
                                    <input class="form-control" type="text" name="permanentcity" id="CityMunicipality-P" value="{{ old('permanentcity', $answersc1['permanentcity']) }}" required>
                                    <input class="form-control" type="text" name="permanentprv" id="province-P" value="{{ old('permanentprv', $answersc1['permanentprv']) }}" required>
                                    </div>
                                </div>
                                <br>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="zipcode-R">Zip Code</span>
                                    </div>
                                    <input name="permanentzip" id="permanentzip" type="text" class="form-control"
                                        aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{old('permanentzip', $answersc1['permanentzip'])}}">
                                </div>
                            </div>
                        </div>
                        {{-- </div> --}}

                        <b>
                            {{ Form::label('contact', 'Contact Information') }}<br>
                        </b>
                        <div class="row">
                            <div class="col">
                            <input class="form-control" type="text" name="mobno" id="mobno" value="{{ old('mobno', $answersc1['mobno']) }}" required>
                            </div>
                            <div class="col">
                            <input class="form-control" type="text" name="telno" id="telno" value="{{ old('telno', $answersc1['telno']) }}" required>

                            </div>
                            <div class="col">
                            <input class="form-control" type="text" name="email" id="email" value="{{ old('email', $answersc1['email']) }}" required>

                            </div>
                        </div>
                        <br>

                        <div class="familyInformation">
                            <h2 id="family">II. Family Background</h2>
                            <b>{{ Form::label('spouse', "Spouse's Name") }}</b><br>
                            <div class="row">
                                <div class="col">
                                <input class="form-control" type="text" name="spousesn" id="surname-S" value="{{ old('spousesn', $answersc1['spousesn']) }}"  placeholder="Spouse's Surname">
                                </div>
                                <div class="col">
                                <input class="form-control" type="text" name="spousefn" id="firstname-S" value="{{ old('spousefn', $answersc1['spousefn']) }}"  placeholder="Spouse's Firstname">
                                </div>
                                <div class="col">
                                <input class="form-control" type="text" name="spousemn" id="midname-S" value="{{ old('spousemn', $answersc1['spousemn']) }}"  placeholder="Spouse's Middle Name">
                                </div>
                                <div class="col col-lg-2">
                                <input class="form-control" type="text" name="spousenmext" id="namext-S" value="{{ old('spousenmext', $answersc1['spousenmext']) }}"  placeholder="Spouse Name Extension">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                <input class="form-control" type="text" name="spouseocc" id="occupation-S" value="{{ old('spouseocc', $answersc1['spouseocc']) }}"  placeholder="Spouse's Occupation">
                                </div>
                                <div class="col">
                                <input class="form-control" type="text" name="spouseemp" id="spouseemp" value="{{ old('spouseemp', $answersc1['spouseemp']) }}"  placeholder="Spouse's Employer">
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                <input class="form-control" type="text" name="spouseempadd" id="employadd-S" value="{{ old('spouseempadd', $answersc1['spouseempadd']) }}"  placeholder="Employer's Address">
                                </div>
                                <div class="col">
                                <input class="form-control" type="text" name="spousesn" id="surname-S" value="{{ old('spousetel', $answersc1['spousetel']) }}"  placeholder="Telephone Number">
                                </div>
                            </div><br>

                            <b>{{ Form::label('father', "Father's Name") }}</b><br>
                            <div class="row">
                                <div class="col">
                                <input class="form-control" type="text" name="fathersn" id="surname-F" value="{{ old('fathersn', $answersc1['fathersn']) }}"  placeholder="Father's Surname">
                                </div>
                                <div class="col">
                                <input class="form-control" type="text" name="fatherfn" id="firstname-F" value="{{ old('fatherfn', $answersc1['fatherfn']) }}"  placeholder="Father's First name">
                                </div>
                                <div class="col">
                                <input class="form-control" type="text" name="fathermn" id="midname-F" value="{{ old('fathermn', $answersc1['fathermn']) }}"  placeholder="Father's Middle name">
                                </div>
                                <div class="col col-lg-2">
                                <input class="form-control" type="text" name="fatherext" id="namext-F" value="{{ old('fatherext', $answersc1['fatherext']) }}"  placeholder="Father's First name extention">
                                </div>
                            </div><br>

                            <b>{{ Form::label('mother', "Mother's Maiden Name") }}</b><br>
                            <div class="row">
                                <div class="col">
                                <input class="form-control" type="text" name="mothernm" id="surname-M" value="{{ old('mothernm', $answersc1['mothernm']) }}"  placeholder="Mother's Last name">
                                </div>
                                <div class="col">
                                <input class="form-control" type="text" name="motherfn" id="firstname-M" value="{{ old('motherfn', $answersc1['motherfn']) }}"  placeholder="Mother's First name">
                                </div>
                                <div class="col">
                                <input class="form-control" type="text" name="mothermn" id="midname-M" value="{{ old('mothermn', $answersc1['mothermn']) }}"  placeholder="Mother's Middle name">
                                </div>
                            </div><br>

                            <div class="children">
                                <b>{{ Form::label('children', 'Name of Children (List all names)') }}</b>
                                <div class="row">
                                    <div class="col">
                                        <b>{{ Form::label('child0', 'Name: ') }}</b>
                                        <input class="form-control" type="text" name="child0" id="child0" value="{{ old('child0', $answersc1['child0']) }}"  placeholder="Child's Name">
                                    </div>
                                    <div class="col">
                                        <b><label for="birthchild0">Date of Birth:</label><br></b>
                                        <input type="date" class="date-picker" name="birthchild0" id="birthchild0"
                                            data-coreui-toggle="date-picker" value="{{old('birthchild', $answersc1['birthchild'])}}">
                                    </div>
                                </div>

                                <div class="child1-container">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child1', 'Name: ') }}</b>
                                            <input class="form-control" type="text" name="child1" id="child1" value="{{ old('child1', $answersc1['child1']) }}"  placeholder="Child's Name">
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild1">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild1"
                                                id="birthchild1" data-coreui-toggle="date-picker" value="{{old('birthchild1', $answersc1['birthchild1']) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="child2-container">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child2', 'Name: ') }}</b>
                                            <input class="form-control" type="text" name="child2" id="child2" value="{{ old('child2', $answersc1['child2']) }}"  placeholder="Child's Name">
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild2">Date of Birth:</label><br></b>
                                            <input type="date" class="date-picker" name="birthchild2"
                                                id="birthchild2" data-coreui-toggle="date-picker" value="{{old('birthchild2', $answersc1['birthchild2']) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="child3-container">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child3', 'Name: ') }}</b>
                                            <input class="form-control" type="text" name="child3" id="child3" value="{{ old('child3', $answersc1['child3']) }}"  placeholder="Child's Name">
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild3">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild3"
                                                id="birthchild3" data-coreui-toggle="date-picker"  value="{{old('birthchild3', $answersc1['birthchild3']) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="child4-container">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child4', 'Name: ') }}</b>
                                            <input class="form-control" type="text" name="child4" id="child4" value="{{ old('child4', $answersc1['child4']) }}"  placeholder="Child's Name">
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild4">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild4"
                                                id="birthchild4" data-coreui-toggle="date-picker" value="{{old('birthchild4', $answersc1['birthchild4']) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="child5-container">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child5', 'Name: ') }}</b>
                                            <input class="form-control" type="text" name="child5" id="child5" value="{{ old('child5', $answersc1['child5']) }}"  placeholder="Child's Name">
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild5">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild5"
                                                id="birthchild5" data-coreui-toggle="date-picker" value="{{old('birthchild5', $answersc1['birthchild5']) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="child6-container">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child6', 'Name: ') }}</b>
                                            <input class="form-control" type="text" name="child6" id="child6" value="{{ old('child6', $answersc1['child6']) }}"  placeholder="Child's Name">
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild6">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild6"
                                                id="birthchild6" data-coreui-toggle="date-picker" value="{{old('birthchild6', $answersc1['birthchild6']) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="child7-container">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child7', 'Name: ') }}</b>
                                            <input class="form-control" type="text" name="child7" id="child7" value="{{ old('child7', $answersc1['child7']) }}"  placeholder="Child's Name">
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild7">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild7"
                                                id="birthchild7" data-coreui-toggle="date-picker" value="{{old('birthchild7', $answersc1['birthchild7']) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="child8-container">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child8', 'Name: ') }}</b>
                                            <input class="form-control" type="text" name="child8" id="child8" value="{{ old('child8', $answersc1['child8']) }}"  placeholder="Child's Name">
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild8">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild8"
                                                id="birthchild8" data-coreui-toggle="date-picker" value="{{old('birthchild8', $answersc1['birthchild8']) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="child9-container">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child9', 'Name: ') }}</b>
                                            <input class="form-control" type="text" name="child9" id="child9" value="{{ old('child9', $answersc1['child9']) }}"  placeholder="Child's Name">
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild9">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild9"
                                                id="birthchild9" data-coreui-toggle="date-picker" value="{{old('birthchild9', $answersc1['birthchild9']) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="child10-container">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child10', 'Name: ') }}</b>
                                            <input class="form-control" type="text" name="child10" id="child10" value="{{ old('child10', $answersc1['child10']) }}"  placeholder="Child's Name">
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild10">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild10"
                                                id="birthchild10" data-coreui-toggle="date-picker" value="{{old('birthchild10', $answersc1['birthchild10']) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="child11-container">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child11', 'Name: ') }}</b>
                                            <input class="form-control" type="text" name="child11" id="child11" value="{{ old('child11', $answersc1['child11']) }}"  placeholder="Child's Name">
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild11">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild11"
                                                id="birthchild11" data-coreui-toggle="date-picker" value="{{old('birthchild11', $answersc1['birthchild11']) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="educationalBackground">
                            <h2 id='education'>III. Educational Background</h2>

                            <br>
                            <b>{{ Form::label('elem', 'Elementary') }}</b><br>
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="text" name="elemname" id="elemname" value="{{ old('elemname', $answersc1['elemname']) }}"  placeholder="Name of School (No Abbreviations)">
                                </div>
                                <div class="col">
                                    <input class="form-control" type="text" name="elemdeg" id="elemdeg" value="{{ old('elemdeg', $answersc1['elemdeg']) }}"  placeholder="Basic Education/Degree/Course (No Abbreviations)">
                                </div>
                            </div>

                            <b>Period of Attendance</b><br>
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="month" name="attendancefrom" id="elemattendFrom" value="{{ old('attendancefrom', $answersc1['attendancefrom']) }}"  placeholder="FROM">
                                </div>
                                <div class="col">
                                    <input class="form-control" type="month" name="attendanceto" id="elemattendto" value="{{ old('attendanceto', $answersc1['attendanceto']) }}"  placeholder="TO">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="number" name="elemunitLevel" id="elemunitLevel" value="{{ old('elemunitLevel', $answersc1['elemunitLevel']) }}"  placeholder="Highest Unit / Level earned">
                                </div>
                                <div class="col">
                                    <input class="form-control" type="text" name="yeargradelem" id="yearelem" value="{{ old('yeargradelem', $answersc1['yeargradelem']) }}"  placeholder="Year Graduated">
                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" name="scholarshipelem" id="scholarelem" value="{{ old('scholarshipelem', $answersc1['scholarshipelem']) }}"  placeholder="Scholarship/Academic Honors Recieved">
                                </div>
                            </div>

                            <b>{{ Form::label('hs', 'Secondary') }}</b><br>
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="text" name="hsname" id="hsname" value="{{ old('hsname', $answersc1['hsname']) }}"  placeholder="Name of School (No Abbreviations)">
                                </div>
                                <div class="col">
                                    <input class="form-control" type="text" name="hsdeg" id="hsdeg" value="{{ old('hsdeg', $answersc1['hsdeg']) }}"  placeholder="Basic Education/Degree/Course (No Abbreviations)">
                                 </div>
                            </div>

                            <b>Period of Attendance</b><br>
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="month" name="attendancefromhs" id="hsattendFrom" value="{{ old('attendancefromhs', $answersc1['attendancefromhs']) }}"  placeholder="FROM">
                                </div>
                                <div class="col">
                                    <input class="form-control" type="month" name="attendancetohs" id="hsattendto" value="{{ old('attendancetohs', $answersc1['attendancetohs']) }}"  placeholder="TO">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="number" name="hsunitLevel" id="hsunitLevel" value="{{ old('hsunitLevel', $answersc1['hsunitLevel']) }}"  placeholder="Highest Unit / Level earned">
                                </div>
                                <div class="col">
                                    <input class="form-control" type="text" name="yeargradhs" id="yearhs" value="{{ old('yeargradhs', $answersc1['yeargradhs']) }}"  placeholder="Year Graduated">
                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" name="scholarshiphs" id="scholarhs" value="{{ old('scholarshiphs', $answersc1['scholarshiphs']) }}"  placeholder="Scholarship/Academic Honors Recieved">
                                </div>
                            </div>

                            <b>{{ Form::label('voc', 'Vocational/Trade Course') }}</b><br>
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="text" name="vocname" id="vocname" value="{{ old('vocname', $answersc1['vocname']) }}"  placeholder="Name of School (No Abbreviations)">
                                </div>
                                <div class="col">
                                    <input class="form-control" type="text" name="vocdeg" id="vocdegree" value="{{ old('vocdeg', $answersc1['vocdeg']) }}"  placeholder="Basic Education/Degree/Course (No Abbreviations)">
                                 </div>
                            </div>

                            <b>Period of Attendance</b><br>
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="month" name="attendancefromvoc" id="vocattendFrom" value="{{ old('attendancefromvoc', $answersc1['attendancefromvoc']) }}"  placeholder="FROM">
                                </div>
                                <div class="col">
                                    <input class="form-control" type="month" name="attendancetovoc" id="vocattendto" value="{{ old('attendancetovoc', $answersc1['attendancetovoc']) }}"  placeholder="TO">
                                </div>
                            </div>

                             <div class="row">
                                <div class="col">
                                    <input class="form-control" type="number" name="vocunitLevel" id="vocunitLevel" value="{{ old('vocunitLevel', $answersc1['vocunitLevel']) }}"  placeholder="Highest Unit / Level earned">
                                </div>
                                <div class="col">
                                    <input class="form-control" type="text" name="yeargradvoc" id="yearvoc" value="{{ old('yeargradvoc', $answersc1['yeargradvoc']) }}"  placeholder="Year Graduated">
                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" name="scholarshipvoc" id="scholarvoc" value="{{ old('scholarshipvoc', $answersc1['scholarshipvoc']) }}"  placeholder="Scholarship/Academic Honors Recieved">
                                </div>
                            </div>

                            <b>{{ Form::label('col', 'College') }}</b><br>
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="text" name="colname" id="colname" value="{{ old('colname', $answersc1['colname']) }}"  placeholder="Name of School (No Abbreviations)">
                                </div>
                                <div class="col">
                                    <input class="form-control" type="text" name="coldeg" id="coldegree" value="{{ old('coldeg', $answersc1['coldeg']) }}"  placeholder="Basic Education/Degree/Course (No Abbreviations)">
                                 </div>
                            </div>

                            <b>Period of Attendance</b><br>
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="month" name="attendancefromcol" id="colattendFrom" value="{{ old('attendncefromcol', $answersc1['attendncefromcol']) }}"  placeholder="FROM">
                                </div>
                                <div class="col">
                                    <input class="form-control" type="month" name="attendancetovcol" id="colattendto" value="{{ old('attendancetocol', $answersc1['attendancetocol']) }}"  placeholder="TO">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="number" name="colunitLevel" id="colunitLevel" value="{{ old('colunitLevel', $answersc1['colunitLevel']) }}"  placeholder="Highest Unit / Level earned">
                                </div>
                                <div class="col">
                                    {{-- <input class="form-control" type="text" name="yeargradcol" id="yearcol" value="{{ old('yeargradcol', $answersc1['yeargradcol']) }}"  placeholder="Year Graduated">--}}
                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" name="scholarshipcol" id="scholarcol" value="{{ old('scholarshipcol', $answersc1['scholarshipcol']) }}"  placeholder="Scholarship/Academic Honors Recieved">
                                </div>
                            </div>

                            <b>{{ Form::label('grad', 'Graduate Studies') }}</b><br>
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="text" name="gradname" id="gradname" value="{{ old('gradname', $answersc1['gradname']) }}"  placeholder="Name of School (No Abbreviations)">
                                </div>
                                <div class="col">
                                    <input class="form-control" type="text" name="graddeg" id="graddegree" value="{{ old('graddeg', $answersc1['graddeg']) }}"  placeholder="Basic Education/Degree/Course (No Abbreviations)">
                                 </div>
                            </div>

                            <b>Period of Attendance</b><br>
                            <div class="col">
                                <input class="form-control" type="month" name="attendancefromgrad" id="gradattendFrom" value="{{ old('attendancefromgrad', $answersc1['attendancefromgrad']) }}"  placeholder="FROM">
                            </div>
                            <div class="col">
                                <input class="form-control" type="month" name="attendancetograd" id="gradattendto" value="{{ old('attendancetograd', $answersc1['attendancetograd']) }}"  placeholder="TO">
                            </div>

                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="number" name="gradunitLevel" id="gradunitLevel" value="{{ old('gradunitLevel', $answersc1['colunitLevel']) }}"  placeholder="Highest Unit / Level earned">
                                </div>
                                <div class="col">
                                    <input class="form-control" type="text" name="yeargrad" id="yeargrad" value="{{ old('yeargrad', $answersc1['yeargrad']) }}"  placeholder="Year Graduated">
                                </div>
                                <div class="col-5">
                                    <input class="form-control" type="text" name="scholarshipgrad" id="scholargrad" value="{{ old('scholarshipgrad', $answersc1['scholarshipgrad']) }}"  placeholder="Scholarship/Academic Honors Recieved">
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>

                <div id="C2FORM" class="tabcontent">
                    <div class="box-form">
                        <div class="col-1 row px-0">
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="minus-refc2"
                                    disabled>-</button>
                            </div>
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="add-refc2">+</button>
                            </div>
                        </div>

                        <div class="form-container static">
                            <div class="container">
                                <h3>#1</h3>
                                <div class="row align-items-center">
                                    <div class="col">
                                        {{ Form::label('eligibility', "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License") }}
                                        <input class="form-control" type="text" name="eligibility" id="eligibility" value="{{ old('eligibility', $answersc2['eligibility']) }}" >

                                        {{ Form::label('rating', 'Rating (if applicable)') }}
                                        <input class="form-control" type="text" name="rating" id="rating" value="{{ old('rating', $answersc2['rating']) }}" >


                                        {{ Form::label('dateofexam', 'Date of Examination/Conferment') }}<br>
                                        <input class="form-control" type="date" name="dateofexam" id="dateofexam" value="{{ old('dateofexam', $answersc2['dateofexam']) }}" >
                                    </div>
                                    <div class="col">
                                        {{ Form::label('placeofexam', 'Place of Examination/Conferment') }}

                                        <input class="form-control" type="text" name="placeofexam" id="placeofexam" value="{{ old('placeofexam', $answersc2['placeofexam']) }}" >

                                        {{ Form::label('licenseno', 'Licsense number (if applicable)') }}
                                        <input class="form-control" type="text" name="licenseno" id="licenseno" value="{{ old('licenseno', $answersc2['licenseno']) }}" >

                                        {{ Form::label('validity', 'Date of Validity') }}<br>
                                        <input class="form-control" type="date" name="validity" id="validity" value="{{ old('validity', $answersc2['validity']) }}" >

                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>

                        <div class='form-container1'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#2</h3>
                                    <div class='row align-items-center'>
                                        <div class="col">
                                            {{ Form::label('eligibility', "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License") }}
                                            <input class="form-control" type="text" name="eligibility2" id="eligibility2" value="{{ old('eligibility2', $answersc2['eligibility2']) }}" >

                                            {{ Form::label('rating', 'Rating (if applicable)') }}
                                            <input class="form-control" type="text" name="rating2" id="rating2" value="{{ old('rating2', $answersc2['rating2']) }}" >


                                            {{ Form::label('dateofexam', 'Date of Examination/Conferment') }}<br>
                                            <input class="form-control" type="date" name="dateofexam2" id="dateofexam2" value="{{ old('dateofexam2', $answersc2['dateofexam2']) }}" >
                                        </div>
                                        <div class="col">
                                            {{ Form::label('placeofexam', 'Place of Examination/Conferment') }}

                                            <input class="form-control" type="text" name="placeofexam2" id="placeofexam2" value="{{ old('placeofexam2', $answersc2['placeofexam2']) }}" >

                                            {{ Form::label('licenseno', 'Licsense number (if applicable)') }}
                                            <input class="form-control" type="text" name="licenseno2" id="licenseno2" value="{{ old('licenseno2', $answersc2['licenseno2']) }}" >

                                            {{ Form::label('validity', 'Date of Validity') }}<br>
                                            <input class="form-control" type="date" name="validity2" id="validity2" value="{{ old('validity2', $answersc2['validity2']) }}" >

                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class='form-container2'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#3</h3>
                                    <div class='row align-items-center'>
                                    <div class="col">
                                            {{ Form::label('eligibility', "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License") }}
                                            <input class="form-control" type="text" name="eligibility3" id="eligibility3" value="{{ old('eligibility3', $answersc2['eligibility3']) }}" >

                                            {{ Form::label('rating', 'Rating (if applicable)') }}
                                            <input class="form-control" type="text" name="rating3" id="rating3" value="{{ old('rating3', $answersc2['rating3']) }}" >


                                            {{ Form::label('dateofexam', 'Date of Examination/Conferment') }}<br>
                                            <input class="form-control" type="date" name="dateofexam3" id="dateofexam3" value="{{ old('dateofexam3', $answersc2['dateofexam3']) }}" >
                                        </div>
                                        <div class="col">
                                            {{ Form::label('placeofexam', 'Place of Examination/Conferment') }}

                                            <input class="form-control" type="text" name="placeofexam3" id="placeofexam3" value="{{ old('placeofexam3', $answersc2['placeofexam3']) }}" >

                                            {{ Form::label('licenseno', 'Licsense number (if applicable)') }}
                                            <input class="form-control" type="text" name="licenseno3" id="licenseno3" value="{{ old('licenseno3', $answersc2['licenseno3']) }}" >

                                            {{ Form::label('validity', 'Date of Validity') }}<br>
                                            <input class="form-control" type="date" name="validity3" id="validity3" value="{{ old('validity3', $answersc2['validity3']) }}" >

                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class='form-container3'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#4</h3>
                                    <div class='row align-items-center'>
                                    <div class="col">
                                            {{ Form::label('eligibility', "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License") }}
                                            <input class="form-control" type="text" name="eligibility4" id="eligibility4" value="{{ old('eligibility4', $answersc2['eligibility4']) }}" >

                                            {{ Form::label('rating', 'Rating (if applicable)') }}
                                            <input class="form-control" type="text" name="rating4" id="rating4" value="{{ old('rating4', $answersc2['rating4']) }}" >


                                            {{ Form::label('dateofexam', 'Date of Examination/Conferment') }}<br>
                                            <input class="form-control" type="date" name="dateofexam4" id="dateofexam4" value="{{ old('dateofexam4', $answersc2['dateofexam4']) }}" >
                                        </div>
                                        <div class="col">
                                            {{ Form::label('placeofexam', 'Place of Examination/Conferment') }}

                                            <input class="form-control" type="text" name="placeofexam4" id="placeofexam4" value="{{ old('placeofexam4', $answersc2['placeofexam4']) }}" >

                                            {{ Form::label('licenseno', 'Licsense number (if applicable)') }}
                                            <input class="form-control" type="text" name="licenseno4" id="licenseno4" value="{{ old('licenseno4', $answersc2['licenseno4']) }}" >

                                            {{ Form::label('validity', 'Date of Validity') }}<br>
                                            <input class="form-control" type="date" name="validity4" id="validity4" value="{{ old('validity4', $answersc2['validity4']) }}" >

                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class='form-container4'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#5</h3>
                                    <div class='row align-items-center'>
                                        <div class="col">
                                            {{ Form::label('eligibility', "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License") }}
                                            <input class="form-control" type="text" name="eligibility5" id="eligibility5" value="{{ old('eligibility5', $answersc2['eligibility5']) }}" >

                                            {{ Form::label('rating', 'Rating (if applicable)') }}
                                            <input class="form-control" type="text" name="rating5" id="rating5" value="{{ old('rating5', $answersc2['rating5']) }}" >


                                            {{ Form::label('dateofexam', 'Date of Examination/Conferment') }}<br>
                                            <input class="form-control" type="date" name="dateofexam5" id="dateofexam5" value="{{ old('dateofexam5', $answersc2['dateofexam5']) }}" >
                                        </div>
                                        <div class="col">
                                            {{ Form::label('placeofexam', 'Place of Examination/Conferment') }}

                                            <input class="form-control" type="text" name="placeofexam5" id="placeofexam5" value="{{ old('placeofexam5', $answersc2['placeofexam5']) }}" >

                                            {{ Form::label('licenseno', 'Licsense number (if applicable)') }}
                                            <input class="form-control" type="text" name="licenseno5" id="licenseno5" value="{{ old('licenseno5', $answersc2['licenseno5']) }}" >

                                            {{ Form::label('validity', 'Date of Validity') }}<br>
                                            <input class="form-control" type="date" name="validity5" id="validity5" value="{{ old('validity5', $answersc2['validity5']) }}" >

                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class='form-container5 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#6</h3>
                                    <div class='row align-items-center'>
                                    <div class="col">
                                            {{ Form::label('eligibility', "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License") }}
                                            <input class="form-control" type="text" name="eligibility6" id="eligibility6" value="{{ old('eligibility6', $answersc2['eligibility6']) }}" >

                                            {{ Form::label('rating', 'Rating (if applicable)') }}
                                            <input class="form-control" type="text" name="rating6" id="rating6" value="{{ old('rating6', $answersc2['rating6']) }}" >


                                            {{ Form::label('dateofexam', 'Date of Examination/Conferment') }}<br>
                                            <input class="form-control" type="date" name="dateofexam6" id="dateofexam6" value="{{ old('dateofexam6', $answersc2['dateofexam6']) }}" >
                                        </div>
                                        <div class="col">
                                            {{ Form::label('placeofexam', 'Place of Examination/Conferment') }}

                                            <input class="form-control" type="text" name="placeofexam6" id="placeofexam6" value="{{ old('placeofexam6', $answersc2['placeofexam6']) }}" >

                                            {{ Form::label('licenseno', 'Licsense number (if applicable)') }}
                                            <input class="form-control" type="text" name="licenseno6" id="licenseno6" value="{{ old('licenseno6', $answersc2['licenseno6']) }}" >

                                            {{ Form::label('validity', 'Date of Validity') }}<br>
                                            <input class="form-control" type="date" name="validity6" id="validity6" value="{{ old('validity6', $answersc2['validity6']) }}" >

                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class='form-container6 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#7</h3>
                                    <div class='row align-items-center'>
                                        <div class="col">
                                            {{ Form::label('eligibility', "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License") }}
                                            <input class="form-control" type="text" name="eligibility7" id="eligibility7" value="{{ old('eligibility7', $answersc2['eligibility7']) }}" >

                                            {{ Form::label('rating', 'Rating (if applicable)') }}
                                            <input class="form-control" type="text" name="rating7" id="rating7" value="{{ old('rating7', $answersc2['rating7']) }}" >


                                            {{ Form::label('dateofexam', 'Date of Examination/Conferment') }}<br>
                                            <input class="form-control" type="date" name="dateofexam7" id="dateofexam7" value="{{ old('dateofexam7', $answersc2['dateofexam7']) }}" >
                                        </div>
                                        <div class="col">
                                            {{ Form::label('placeofexam', 'Place of Examination/Conferment') }}

                                            <input class="form-control" type="text" name="placeofexam7" id="placeofexam7" value="{{ old('placeofexam7', $answersc2['placeofexam7']) }}" >

                                            {{ Form::label('licenseno', 'Licsense number (if applicable)') }}
                                            <input class="form-control" type="text" name="licenseno7" id="licenseno7" value="{{ old('licenseno7', $answersc2['licenseno7']) }}" >

                                            {{ Form::label('validity', 'Date of Validity') }}<br>
                                            <input class="form-control" type="date" name="validity7" id="validity7" value="{{ old('validity7', $answersc2['validity7']) }}" >

                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <h2>V. WORK EXPERIENCE</h2><br>

                        <div class="col-1 row px-0">
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="minus-refc21"
                                    disabled>-</button>
                            </div>
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="add-refc21">+</button>
                            </div>
                        </div>


                        <div class="form-container static">
                            <div class='container'>
                                <h2>#1</h2>
                                <div class='row align-items-center'>
                                    <div class='col'>
                                        <label>Inclusive Dates</label><br>
                                        {{ Form::label('datefrom', 'From') }}
                                        <input class="form-control" type="date" name="datefrom" id="datefrom" value="{{ old('datefrom', $answersc2['datefrom']) }}" >

                                        {{ Form::label('dateto', 'To') }}
                                        <input class="form-control" type="date" name="dateto" id="dateto" value="{{ old('dateto', $answersc2['dateto']) }}" >


                                        {{ Form::label('position', 'Position/Title (Do Not Abbreviate)') }}
                                        <input class="form-control" type="text" name="position" id="position" value="{{ old('position', $answersc2['position']) }}" >

                                        {{ Form::label('department', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                        <input class="form-control" type="text" name="department" id="department" value="{{ old('department', $answersc2['department']) }}" >

                                        {{ Form::label('salary', 'Monthly Salary') }}
                                        <input class="form-control" type="text" name="salary" id="salary" value="{{ old('salary', $answersc2['salary']) }}" >
                                        {{ Form::text('salary', '', ['class' => 'form-control']) }}
                                    </div>
                                    <div class='col'>
                                        {{ Form::label('paygrade', 'Salary/Job/Pay Grade (if applicable)') }}
                                        <input class="form-control" type="text" name="paygrade" id="paygrade" value="{{ old('paygrade', $answersc2['paygrade']) }}" >

                                        {{ Form::label('appointment', 'Status of Appointment') }}
                                        <input class="form-control" type="text" name="appointment" id="appointment" value="{{ old('appointment', $answersc2['appointment']) }}" >

                                        {{ Form::label('governmentserv', 'Government service (Y/N)') }}
                                        <select class="custom-select mr-sm-2" id="governmentserv" name="governmentserv"
                                            >
                                            <option value=''></option>
                                            <option value="Yes">YES</option>
                                            <option value="No">NO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <div class='form-container21 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#2</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom2', 'From') }}
                                            <input class="form-control" type="date" name="datefrom2" id="datefrom2" value="{{ old('datefrom2', $answersc2['datefrom2']) }}" >

                                            {{ Form::label('dateto2', 'To') }}
                                            <input class="form-control" type="date" name="dateto2" id="dateto2" value="{{ old('dateto2', $answersc2['dateto2']) }}" >

                                            {{ Form::label('position2', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position2" id="position2" value="{{ old('position2', $answersc2['position2']) }}" >

                                            {{ Form::label('department2', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department2" id="department2" value="{{ old('department2', $answersc2['department2']) }}" >

                                            {{ Form::label('salary2', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary2" id="salary2" value="{{ old('salary2', $answersc2['salary2']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade2', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade2" id="paygrade2" value="{{ old('paygrade2', $answersc2['paygrade2']) }}" >

                                            {{ Form::label('appointment2', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment2" id="appointment2" value="{{ old('appointment2', $answersc2['appointment2']) }}" >

                                            {{ Form::label('governmentserv2', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv2" id="governmentserv2" value="{{ old('governmentserv2', $answersc2['governmentserv2']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv2'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container22 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#3</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom3', 'From') }}
                                            <input class="form-control" type="date" name="datefrom3" id="datefrom3" value="{{ old('datefrom3', $answersc2['datefrom3']) }}" >

                                            {{ Form::label('dateto3', 'To') }}
                                            <input class="form-control" type="date" name="dateto3" id="dateto3" value="{{ old('dateto3', $answersc2['dateto3']) }}" >

                                            {{ Form::label('position3', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position3" id="position3" value="{{ old('position3', $answersc2['position3']) }}" >

                                            {{ Form::label('department3', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department3" id="department3" value="{{ old('department3', $answersc2['department3']) }}" >

                                            {{ Form::label('salary3', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary3" id="salary3" value="{{ old('salary3', $answersc2['salary3']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade3', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade3" id="paygrade3" value="{{ old('paygrade3', $answersc2['paygrade3']) }}" >

                                            {{ Form::label('appointment3', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment3" id="appointment3" value="{{ old('appointment3', $answersc2['appointment3']) }}" >

                                            {{ Form::label('governmentserv3', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv3" id="governmentserv3" value="{{ old('governmentserv3', $answersc2['governmentserv3']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv3'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container23 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#4</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom4', 'From') }}
                                            <input class="form-control" type="date" name="datefrom4" id="datefrom4" value="{{ old('datefrom4', $answersc2['datefrom4']) }}" >

                                            {{ Form::label('dateto4', 'To') }}
                                            <input class="form-control" type="date" name="dateto4" id="dateto4" value="{{ old('dateto4', $answersc2['dateto4']) }}" >

                                            {{ Form::label('position4', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position4" id="position4" value="{{ old('position4', $answersc2['position4']) }}" >

                                            {{ Form::label('department4', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department4" id="department4" value="{{ old('department4', $answersc2['department4']) }}" >

                                            {{ Form::label('salary4', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary4" id="salary4" value="{{ old('salary4', $answersc2['salary4']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade4', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade4" id="paygrade4" value="{{ old('paygrade4', $answersc2['paygrade4']) }}" >

                                            {{ Form::label('appointment4', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment4" id="appointment4" value="{{ old('appointment3', $answersc2['appointment4']) }}" >

                                            {{ Form::label('governmentserv4', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv4" id="governmentserv4" value="{{ old('governmentserv4', $answersc2['governmentserv4']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv4'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container24 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#5</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom5', 'From') }}
                                            <input class="form-control" type="date" name="datefrom5" id="datefrom5" value="{{ old('datefrom5', $answersc2['datefrom5']) }}" >

                                            {{ Form::label('dateto5', 'To') }}
                                            <input class="form-control" type="date" name="dateto5" id="dateto5" value="{{ old('dateto5', $answersc2['dateto5']) }}" >

                                            {{ Form::label('position5', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position5" id="position5" value="{{ old('position5', $answersc2['position5']) }}" >

                                            {{ Form::label('department5', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department5" id="department5" value="{{ old('department5', $answersc2['department5']) }}" >

                                            {{ Form::label('salary5', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary5" id="salary5" value="{{ old('salary5', $answersc2['salary5']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade5', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade5" id="paygrade5" value="{{ old('paygrade5', $answersc2['paygrade5']) }}" >

                                            {{ Form::label('appointment5', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment5" id="appointment5" value="{{ old('appointment5', $answersc2['appointment5']) }}" >

                                            {{ Form::label('governmentserv5', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv5" id="governmentserv5" value="{{ old('governmentserv5', $answersc2['governmentserv5']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv5'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container25 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#6</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom6', 'From') }}
                                            <input class="form-control" type="date" name="datefrom6" id="datefrom6" value="{{ old('datefrom6', $answersc2['datefrom6']) }}" >

                                            {{ Form::label('dateto6', 'To') }}
                                            <input class="form-control" type="date" name="dateto6" id="dateto6" value="{{ old('dateto6', $answersc2['dateto6']) }}" >

                                            {{ Form::label('position6', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position6" id="position6" value="{{ old('position6', $answersc2['position6']) }}" >

                                            {{ Form::label('department6', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department6" id="department6" value="{{ old('department6', $answersc2['department6']) }}" >

                                            {{ Form::label('salary6', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary6" id="salary6" value="{{ old('salary6', $answersc2['salary6']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade6', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade6" id="paygrade6" value="{{ old('paygrade6', $answersc2['paygrade6']) }}" >

                                            {{ Form::label('appointment6', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment6" id="appointment6" value="{{ old('appointment6', $answersc2['appointment6']) }}" >

                                            {{ Form::label('governmentserv6', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv6" id="governmentserv6" value="{{ old('governmentserv6', $answersc2['governmentserv6']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv6'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container26 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#7</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom7', 'From') }}
                                            <input class="form-control" type="date" name="datefrom7" id="datefrom7" value="{{ old('datefrom7', $answersc2['datefrom7']) }}" >

                                            {{ Form::label('dateto7', 'To') }}
                                            <input class="form-control" type="date" name="dateto7" id="dateto7" value="{{ old('dateto7', $answersc2['dateto7']) }}" >

                                            {{ Form::label('position7', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position7" id="position7" value="{{ old('position7', $answersc2['position7']) }}" >

                                            {{ Form::label('department7', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department7" id="department7" value="{{ old('department7', $answersc2['department7']) }}" >

                                            {{ Form::label('salary7', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary7" id="salary7" value="{{ old('salary7', $answersc2['salary7']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade7', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade7" id="paygrade7" value="{{ old('paygrade7', $answersc2['paygrade7']) }}" >

                                            {{ Form::label('appointment7', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment7" id="appointment7" value="{{ old('appointment7', $answersc2['appointment7']) }}" >

                                            {{ Form::label('governmentserv7', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv7" id="governmentserv7" value="{{ old('governmentserv7', $answersc2['governmentserv7']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv7'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container27 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#8</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom8', 'From') }}
                                            <input class="form-control" type="date" name="datefrom8" id="datefrom8" value="{{ old('datefrom8', $answersc2['datefrom8']) }}" >

                                            {{ Form::label('dateto8', 'To') }}
                                            <input class="form-control" type="date" name="dateto8" id="dateto8" value="{{ old('dateto8', $answersc2['dateto8']) }}" >

                                            {{ Form::label('position8', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position8" id="position8" value="{{ old('position8', $answersc2['position8']) }}" >

                                            {{ Form::label('department8', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department8" id="department8" value="{{ old('department8', $answersc2['department8']) }}" >

                                            {{ Form::label('salary8', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary8" id="salary8" value="{{ old('salary8', $answersc2['salary8']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade8', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade8" id="paygrade8" value="{{ old('paygrade8', $answersc2['paygrade8']) }}" >

                                            {{ Form::label('appointment8', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment8" id="appointment8" value="{{ old('appointment8', $answersc2['appointment8']) }}" >

                                            {{ Form::label('governmentserv8', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv8" id="governmentserv8" value="{{ old('governmentserv8', $answersc2['governmentserv8']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv8'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container28 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#9</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom9', 'From') }}
                                            <input class="form-control" type="date" name="datefrom9" id="datefrom9" value="{{ old('datefrom9', $answersc2['datefrom9']) }}" >

                                            {{ Form::label('dateto9', 'To') }}
                                            <input class="form-control" type="date" name="dateto9" id="dateto9" value="{{ old('dateto9', $answersc2['dateto9']) }}" >

                                            {{ Form::label('position9', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position9" id="position9" value="{{ old('position9', $answersc2['position9']) }}" >

                                            {{ Form::label('department9', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department9" id="department9" value="{{ old('department9', $answersc2['department9']) }}" >

                                            {{ Form::label('salary9', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary9" id="salary9" value="{{ old('salary9', $answersc2['salary9']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade9', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade9" id="paygrade9" value="{{ old('paygrade9', $answersc2['paygrade9']) }}" >

                                            {{ Form::label('appointment9', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment9" id="appointment9" value="{{ old('appointment9', $answersc2['appointment9']) }}" >

                                            {{ Form::label('governmentserv9', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv9" id="governmentserv9" value="{{ old('governmentserv9', $answersc2['governmentserv9']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv9'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container29 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#10</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom10', 'From') }}
                                            <input class="form-control" type="date" name="datefrom10" id="datefrom10" value="{{ old('datefrom10', $answersc2['datefrom10']) }}" >

                                            {{ Form::label('dateto10', 'To') }}
                                            <input class="form-control" type="date" name="dateto10" id="dateto10" value="{{ old('dateto10', $answersc2['dateto10']) }}" >

                                            {{ Form::label('position10', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position10" id="position10" value="{{ old('position10', $answersc2['position10']) }}" >

                                            {{ Form::label('department10', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department10" id="department10" value="{{ old('department10', $answersc2['department10']) }}" >

                                            {{ Form::label('salary10', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary10" id="salary10" value="{{ old('salary10', $answersc2['salary10']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade10', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade10" id="paygrade10" value="{{ old('paygrade10', $answersc2['paygrade10']) }}" >

                                            {{ Form::label('appointment10', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment10" id="appointment10" value="{{ old('appointment10', $answersc2['appointment10']) }}" >

                                            {{ Form::label('governmentserv10', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv10" id="governmentserv10" value="{{ old('governmentserv10', $answersc2['governmentserv10']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv10'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container30 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#11</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom11', 'From') }}
                                            <input class="form-control" type="date" name="datefrom11" id="datefrom11" value="{{ old('datefrom11', $answersc2['datefrom11']) }}" >

                                            {{ Form::label('dateto11', 'To') }}
                                            <input class="form-control" type="date" name="dateto11" id="dateto11" value="{{ old('dateto11', $answersc2['dateto11']) }}" >

                                            {{ Form::label('position11', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position11" id="position11" value="{{ old('position11', $answersc2['position11']) }}" >

                                            {{ Form::label('department11', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department11" id="department11" value="{{ old('department11', $answersc2['department11']) }}" >

                                            {{ Form::label('salary11', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary11" id="salary11" value="{{ old('salary11', $answersc2['salary11']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade11', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade11" id="paygrade11" value="{{ old('paygrade11', $answersc2['paygrade11']) }}" >

                                            {{ Form::label('appointment11', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment11" id="appointment11" value="{{ old('appointment11', $answersc2['appointment11']) }}" >

                                            {{ Form::label('governmentserv11', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv11" id="governmentserv11" value="{{ old('governmentserv11', $answersc2['governmentserv11']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv11'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container31 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#12</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom12', 'From') }}
                                            <input class="form-control" type="date" name="datefrom12" id="datefrom12" value="{{ old('datefrom12', $answersc2['datefrom12']) }}" >

                                            {{ Form::label('dateto12', 'To') }}
                                            <input class="form-control" type="date" name="dateto12" id="dateto12" value="{{ old('dateto12', $answersc2['dateto12']) }}" >

                                            {{ Form::label('position12', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position12" id="position12" value="{{ old('position12', $answersc2['position12']) }}" >

                                            {{ Form::label('department12', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department12" id="department12" value="{{ old('department12', $answersc2['department12']) }}" >

                                            {{ Form::label('salary12', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary12" id="salary12" value="{{ old('salary12', $answersc2['salary12']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade12', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade12" id="paygrade12" value="{{ old('paygrade12', $answersc2['paygrade12']) }}" >

                                            {{ Form::label('appointment12', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment12" id="appointment12" value="{{ old('appointment12', $answersc2['appointment12']) }}" >

                                            {{ Form::label('governmentserv12', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv12" id="governmentserv12" value="{{ old('governmentserv12', $answersc2['governmentserv12']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv12'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container32 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#13</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom13', 'From') }}
                                            <input class="form-control" type="date" name="datefrom13" id="datefrom13" value="{{ old('datefrom13', $answersc2['datefrom13']) }}" >

                                            {{ Form::label('dateto13', 'To') }}
                                            <input class="form-control" type="date" name="dateto13" id="dateto13" value="{{ old('dateto13', $answersc2['dateto13']) }}" >

                                            {{ Form::label('position13', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position13" id="position13" value="{{ old('position13', $answersc2['position13']) }}" >

                                            {{ Form::label('department13', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department13" id="department13" value="{{ old('department13', $answersc2['department13']) }}" >

                                            {{ Form::label('salary13', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary13" id="salary13" value="{{ old('salary13', $answersc2['salary13']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade13', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade13" id="paygrade13" value="{{ old('paygrade13', $answersc2['paygrade13']) }}" >

                                            {{ Form::label('appointment13', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment13" id="appointment13" value="{{ old('appointment13', $answersc2['appointment13']) }}" >

                                            {{ Form::label('governmentserv13', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv13" id="governmentserv13" value="{{ old('governmentserv13', $answersc2['governmentserv13']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv13'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container33 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#14</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom14', 'From') }}
                                            <input class="form-control" type="date" name="datefrom14" id="datefrom14" value="{{ old('datefrom14', $answersc2['datefrom14']) }}" >

                                            {{ Form::label('dateto14', 'To') }}
                                            <input class="form-control" type="date" name="dateto14" id="dateto14" value="{{ old('dateto14', $answersc2['dateto14']) }}" >

                                            {{ Form::label('position14', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position14" id="position14" value="{{ old('position14', $answersc2['position14']) }}" >

                                            {{ Form::label('department14', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department14" id="department14" value="{{ old('department14', $answersc2['department14']) }}" >

                                            {{ Form::label('salary14', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary14" id="salary14" value="{{ old('salary14', $answersc2['salary14']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade14', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade14" id="paygrade14" value="{{ old('paygrade14', $answersc2['paygrade14']) }}" >

                                            {{ Form::label('appointment14', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment14" id="appointment14" value="{{ old('appointment14', $answersc2['appointment14']) }}" >

                                            {{ Form::label('governmentserv14', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv14" id="governmentserv14" value="{{ old('governmentserv14', $answersc2['governmentserv14']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv14'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container34 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#15</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom15', 'From') }}
                                            <input class="form-control" type="date" name="datefrom15" id="datefrom15" value="{{ old('datefrom15', $answersc2['datefrom15']) }}" >

                                            {{ Form::label('dateto15', 'To') }}
                                            <input class="form-control" type="date" name="dateto15" id="dateto15" value="{{ old('dateto15', $answersc2['dateto15']) }}" >

                                            {{ Form::label('position15', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position15" id="position15" value="{{ old('position15', $answersc2['position15']) }}" >

                                            {{ Form::label('department15', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department15" id="department15" value="{{ old('department15', $answersc2['department15']) }}" >

                                            {{ Form::label('salary15', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary15" id="salary15" value="{{ old('salary15', $answersc2['salary15']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade15', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade15" id="paygrade15" value="{{ old('paygrade15', $answersc2['paygrade15']) }}" >

                                            {{ Form::label('appointment15', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment15" id="appointment15" value="{{ old('appointment15', $answersc2['appointment15']) }}" >

                                            {{ Form::label('governmentserv15', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv15" id="governmentserv15" value="{{ old('governmentserv15', $answersc2['governmentserv15']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv15'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container35 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#16</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom16', 'From') }}
                                            <input class="form-control" type="date" name="datefrom16" id="datefrom16" value="{{ old('datefrom16', $answersc2['datefrom16']) }}" >

                                            {{ Form::label('dateto16', 'To') }}
                                            <input class="form-control" type="date" name="dateto16" id="dateto16" value="{{ old('dateto16', $answersc2['dateto16']) }}" >

                                            {{ Form::label('position16', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position16" id="position16" value="{{ old('position16', $answersc2['position16']) }}" >

                                            {{ Form::label('department16', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department16" id="department16" value="{{ old('department16', $answersc2['department16']) }}" >

                                            {{ Form::label('salary16', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary16" id="salary16" value="{{ old('salary16', $answersc2['salary16']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade16', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade16" id="paygrade16" value="{{ old('paygrade16', $answersc2['paygrade16']) }}" >

                                            {{ Form::label('appointment16', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment16" id="appointment16" value="{{ old('appointment16', $answersc2['appointment16']) }}" >

                                            {{ Form::label('governmentserv16', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv16" id="governmentserv16" value="{{ old('governmentserv16', $answersc2['governmentserv16']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv16'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container36 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#17</h3>
                                    <div class='col'>
                                        <label>Inclusive Dates</label><br>
                                        {{ Form::label('datefrom17', 'From') }}
                                        <input class="form-control" type="date" name="datefrom17" id="datefrom17" value="{{ old('datefrom17', $answersc2['datefrom17']) }}" >

                                        {{ Form::label('dateto17', 'To') }}
                                        <input class="form-control" type="date" name="dateto17" id="dateto17" value="{{ old('dateto17', $answersc2['dateto6']) }}" >

                                        {{ Form::label('position17', 'Position/Title (Do Not Abbreviate)') }}
                                        <input class="form-control" type="text" name="position17" id="position17" value="{{ old('position17', $answersc2['position17']) }}" >

                                        {{ Form::label('department17', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                        <input class="form-control" type="text" name="department17" id="department17" value="{{ old('department17', $answersc2['department17']) }}" >

                                        {{ Form::label('salary17', 'Monthly Salary') }}
                                        <input class="form-control" type="text" name="salary17" id="salary17" value="{{ old('salary17', $answersc2['salary17']) }}" >

                                    </div>
                                    <div class='col'>
                                        {{ Form::label('paygrade17', 'Salary/Job/Pay Grade (if applicable)') }}
                                        <input class="form-control" type="text" name="paygrade17" id="paygrade17" value="{{ old('paygrade17', $answersc2['paygrade17']) }}" >

                                        {{ Form::label('appointment17', 'Status of Appointment') }}
                                        <input class="form-control" type="text" name="appointment17" id="appointment17" value="{{ old('appointment17', $answersc2['appointment17']) }}" >

                                        {{ Form::label('governmentserv17', 'Government service (Y/N)') }}
                                        <input class="form-control" type="text" name="governmentserv17" id="governmentserv17" value="{{ old('governmentserv17', $answersc2['governmentserv17']) }}" >
                                        <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv17'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container37 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#18</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom18', 'From') }}
                                            <input class="form-control" type="date" name="datefrom18" id="datefrom18" value="{{ old('datefrom18', $answersc2['datefrom18']) }}" >

                                            {{ Form::label('dateto18', 'To') }}
                                            <input class="form-control" type="date" name="dateto18" id="dateto18" value="{{ old('dateto18', $answersc2['dateto18']) }}" >

                                            {{ Form::label('position18', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position18" id="position18" value="{{ old('position18', $answersc2['position18']) }}" >

                                            {{ Form::label('department18', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department18" id="department18" value="{{ old('department18', $answersc2['department18']) }}" >

                                            {{ Form::label('salary18', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary18" id="salary18" value="{{ old('salary18', $answersc2['salary18']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade18', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade18" id="paygrade18" value="{{ old('paygrade18', $answersc2['paygrade18']) }}" >

                                            {{ Form::label('appointment18', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment18" id="appointment18" value="{{ old('appointment18', $answersc2['appointment18']) }}" >

                                            {{ Form::label('governmentserv18', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv18" id="governmentserv18" value="{{ old('governmentserv18', $answersc2['governmentserv18']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv18'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container38 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#19</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom19', 'From') }}
                                            <input class="form-control" type="date" name="datefrom19" id="datefrom19" value="{{ old('datefrom19', $answersc2['datefrom19']) }}" >

                                            {{ Form::label('dateto19', 'To') }}
                                            <input class="form-control" type="date" name="dateto19" id="dateto19" value="{{ old('dateto19', $answersc2['dateto19']) }}" >

                                            {{ Form::label('position19', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position19" id="position19" value="{{ old('position19', $answersc2['position19']) }}" >

                                            {{ Form::label('department19', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department19" id="department19" value="{{ old('department19', $answersc2['department19']) }}" >

                                            {{ Form::label('salary19', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary19" id="salary19" value="{{ old('salary19', $answersc2['salary19']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade19', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade19" id="paygrade19" value="{{ old('paygrade19', $answersc2['paygrade19']) }}" >

                                            {{ Form::label('appointment19', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment19" id="appointment19" value="{{ old('appointment19', $answersc2['appointment19']) }}" >

                                            {{ Form::label('governmentserv19', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv19" id="governmentserv19" value="{{ old('governmentserv19', $answersc2['governmentserv19']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv19'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container39 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#20</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom20', 'From') }}
                                            <input class="form-control" type="date" name="datefrom20" id="datefrom20" value="{{ old('datefrom20', $answersc2['datefrom20']) }}" >

                                            {{ Form::label('dateto20', 'To') }}
                                            <input class="form-control" type="date" name="dateto20" id="dateto20" value="{{ old('dateto20', $answersc2['dateto20']) }}" >

                                            {{ Form::label('position20', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position20" id="position20" value="{{ old('position20', $answersc2['position20']) }}" >

                                            {{ Form::label('department20', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department20" id="department20" value="{{ old('department20', $answersc2['department20']) }}" >

                                            {{ Form::label('salary20', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary20" id="salary20" value="{{ old('salary20', $answersc2['salary20']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade20', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade20" id="paygrade20" value="{{ old('paygrade20', $answersc2['paygrade20']) }}" >

                                            {{ Form::label('appointment20', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment20" id="appointment20" value="{{ old('appointment20', $answersc2['appointment20']) }}" >

                                            {{ Form::label('governmentserv20', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv20" id="governmentserv20" value="{{ old('governmentserv20', $answersc2['governmentserv20']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv20'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container40 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#21</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom21', 'From') }}
                                            <input class="form-control" type="date" name="datefrom21" id="datefrom21" value="{{ old('datefrom21', $answersc2['datefrom21']) }}" >

                                            {{ Form::label('dateto21', 'To') }}
                                            <input class="form-control" type="date" name="dateto21" id="dateto21" value="{{ old('dateto21', $answersc2['dateto21']) }}" >

                                            {{ Form::label('position21', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position21" id="position21" value="{{ old('position21', $answersc2['position21']) }}" >

                                            {{ Form::label('department21', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department21" id="department21" value="{{ old('department21', $answersc2['department21']) }}" >

                                            {{ Form::label('salary21', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary21" id="salary21" value="{{ old('salary21', $answersc2['salary21']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade21', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade21" id="paygrade21" value="{{ old('paygrade21', $answersc2['paygrade21']) }}" >

                                            {{ Form::label('appointment21', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment21" id="appointment21" value="{{ old('appointment21', $answersc2['appointment21']) }}" >

                                            {{ Form::label('governmentserv21', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv21" id="governmentserv21" value="{{ old('governmentserv21', $answersc2['governmentserv21']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv21'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container41 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#22</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom22', 'From') }}
                                            <input class="form-control" type="date" name="datefrom22" id="datefrom22" value="{{ old('datefrom22', $answersc2['datefrom22']) }}" >

                                            {{ Form::label('dateto22', 'To') }}
                                            <input class="form-control" type="date" name="dateto22" id="dateto22" value="{{ old('dateto22', $answersc2['dateto22']) }}" >

                                            {{ Form::label('position22', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position22" id="position22" value="{{ old('position22', $answersc2['position22']) }}" >

                                            {{ Form::label('department22', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department22" id="department22" value="{{ old('department22', $answersc2['department22']) }}" >

                                            {{ Form::label('salary22', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary22" id="salary22" value="{{ old('salary22', $answersc2['salary22']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade22', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade22" id="paygrade22" value="{{ old('paygrade22', $answersc2['paygrade22']) }}" >

                                            {{ Form::label('appointment22', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment22" id="appointment22" value="{{ old('appointment22', $answersc2['appointment22']) }}" >

                                            {{ Form::label('governmentserv22', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv22" id="governmentserv22" value="{{ old('governmentserv22', $answersc2['governmentserv22']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv22'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container42 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#23</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom23', 'From') }}
                                            <input class="form-control" type="date" name="datefrom23" id="datefrom23" value="{{ old('datefrom23', $answersc2['datefrom23']) }}" >

                                            {{ Form::label('dateto23', 'To') }}
                                            <input class="form-control" type="date" name="dateto23" id="dateto23" value="{{ old('dateto23', $answersc2['dateto23']) }}" >

                                            {{ Form::label('position23', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position23" id="position23" value="{{ old('position23', $answersc2['position23']) }}" >

                                            {{ Form::label('department23', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department23" id="department23" value="{{ old('department23', $answersc2['department23']) }}" >

                                            {{ Form::label('salary23', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary23" id="salary23" value="{{ old('salary23', $answersc2['salary23']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade23', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade23" id="paygrade23" value="{{ old('paygrade23', $answersc2['paygrade23']) }}" >

                                            {{ Form::label('appointment23', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment23" id="appointment23" value="{{ old('appointment23', $answersc2['appointment23']) }}" >

                                            {{ Form::label('governmentserv23', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv23" id="governmentserv23" value="{{ old('governmentserv23', $answersc2['governmentserv23']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv23'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container43 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#24</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom24', 'From') }}
                                            <input class="form-control" type="date" name="datefrom24" id="datefrom24" value="{{ old('datefrom24', $answersc2['datefrom24']) }}" >

                                            {{ Form::label('dateto24', 'To') }}
                                            <input class="form-control" type="date" name="dateto24" id="dateto24" value="{{ old('dateto24', $answersc2['dateto24']) }}" >

                                            {{ Form::label('position24', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position24" id="position24" value="{{ old('position24', $answersc2['position24']) }}" >

                                            {{ Form::label('department24', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department24" id="department24" value="{{ old('department24', $answersc2['department24']) }}" >

                                            {{ Form::label('salary24', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary24" id="salary24" value="{{ old('salary24', $answersc2['salary24']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade24', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade24" id="paygrade24" value="{{ old('paygrade24', $answersc2['paygrade24']) }}" >

                                            {{ Form::label('appointment24', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment24" id="appointment24" value="{{ old('appointment24', $answersc2['appointment24']) }}" >

                                            {{ Form::label('governmentserv24', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv24" id="governmentserv24" value="{{ old('governmentserv24', $answersc2['governmentserv24']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv24'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container44 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#25</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom25', 'From') }}
                                            <input class="form-control" type="date" name="datefrom25" id="datefrom25" value="{{ old('datefrom25', $answersc2['datefrom25']) }}" >

                                            {{ Form::label('dateto25', 'To') }}
                                            <input class="form-control" type="date" name="dateto25" id="dateto25" value="{{ old('dateto25', $answersc2['dateto25']) }}" >

                                            {{ Form::label('position25', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position25" id="position25" value="{{ old('position25', $answersc2['position25']) }}" >

                                            {{ Form::label('department25', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department25" id="department25" value="{{ old('department25', $answersc2['department25']) }}" >

                                            {{ Form::label('salary25', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary25" id="salary25" value="{{ old('salary25', $answersc2['salary25']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade25', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade25" id="paygrade25" value="{{ old('paygrade25', $answersc2['paygrade25']) }}" >

                                            {{ Form::label('appointment25', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment25" id="appointment25" value="{{ old('appointment25', $answersc2['appointment25']) }}" >

                                            {{ Form::label('governmentserv25', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv25" id="governmentserv25" value="{{ old('governmentserv25', $answersc2['governmentserv25']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv25'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container45 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#26</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom26', 'From') }}
                                            <input class="form-control" type="date" name="datefrom26" id="datefrom26" value="{{ old('datefrom26', $answersc2['datefrom26']) }}" >

                                            {{ Form::label('dateto26', 'To') }}
                                            <input class="form-control" type="date" name="dateto26" id="dateto26" value="{{ old('dateto26', $answersc2['dateto26']) }}" >

                                            {{ Form::label('position26', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position26" id="position26" value="{{ old('position26', $answersc2['position26']) }}" >

                                            {{ Form::label('department26', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department26" id="department26" value="{{ old('department26', $answersc2['department26']) }}" >

                                            {{ Form::label('salary26', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary26" id="salary26" value="{{ old('salary26', $answersc2['salary26']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade26', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade26" id="paygrade26" value="{{ old('paygrade26', $answersc2['paygrade26']) }}" >

                                            {{ Form::label('appointment26', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment26" id="appointment26" value="{{ old('appointment26', $answersc2['appointment26']) }}" >

                                            {{ Form::label('governmentserv26', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv26" id="governmentserv26" value="{{ old('governmentserv26', $answersc2['governmentserv26']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv26'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container46 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#27</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom27', 'From') }}
                                            <input class="form-control" type="date" name="datefrom27" id="datefrom27" value="{{ old('datefrom27', $answersc2['datefrom27']) }}" >

                                            {{ Form::label('dateto27', 'To') }}
                                            <input class="form-control" type="date" name="dateto27" id="dateto27" value="{{ old('dateto27', $answersc2['dateto27']) }}" >

                                            {{ Form::label('position27', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position27" id="position27" value="{{ old('position27', $answersc2['position27']) }}" >

                                            {{ Form::label('department27', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department27" id="department27" value="{{ old('department27', $answersc2['department27']) }}" >

                                            {{ Form::label('salary27', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary27" id="salary27" value="{{ old('salary27', $answersc2['salary27']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade27', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade27" id="paygrade27" value="{{ old('paygrade27', $answersc2['paygrade27']) }}" >

                                            {{ Form::label('appointment27', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment27" id="appointment27" value="{{ old('appointment27', $answersc2['appointment27']) }}" >

                                            {{ Form::label('governmentserv27', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv27" id="governmentserv27" value="{{ old('governmentserv27', $answersc2['governmentserv27']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv27'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container47 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#28</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom28', 'From') }}
                                            <input class="form-control" type="date" name="datefrom28" id="datefrom28" value="{{ old('datefrom28', $answersc2['datefrom28']) }}" >

                                            {{ Form::label('dateto28', 'To') }}
                                            <input class="form-control" type="date" name="dateto28" id="dateto28" value="{{ old('dateto28', $answersc2['dateto28']) }}" >

                                            {{ Form::label('position28', 'Position/Title (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="position28" id="position28" value="{{ old('position28', $answersc2['position28']) }}" >

                                            {{ Form::label('department28', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            <input class="form-control" type="text" name="department28" id="department28" value="{{ old('department28', $answersc2['department28']) }}" >

                                            {{ Form::label('salary28', 'Monthly Salary') }}
                                            <input class="form-control" type="text" name="salary28" id="salary28" value="{{ old('salary28', $answersc2['salary28']) }}" >

                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade28', 'Salary/Job/Pay Grade (if applicable)') }}
                                            <input class="form-control" type="text" name="paygrade28" id="paygrade28" value="{{ old('paygrade28', $answersc2['paygrade28']) }}" >

                                            {{ Form::label('appointment28', 'Status of Appointment') }}
                                            <input class="form-control" type="text" name="appointment28" id="appointment28" value="{{ old('appointment28', $answersc2['appointment28']) }}" >

                                            {{ Form::label('governmentserv28', 'Government service (Y/N)') }}
                                            <input class="form-control" type="text" name="governmentserv28" id="governmentserv28" value="{{ old('governmentserv28', $answersc2['governmentserv28']) }}" >
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv28'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
                <div id="C3FORM" class="tabcontent">

                    <div class="box-form">

                        <h2>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC/NON-GOVERNMENT/PEOPLE/VOLUNTARY ORGANIZATION</h2>
                        <h5>{{ Form::label('orgname', 'Please fill-up the following: ') }}</h5>
                        <br>
                        <div class="org0-static">
                            <div class="orgname1">
                                <div class="row">
                                    <div class="col">
                                        <b>{{ Form::label('orgnameAddress1', 'Name & Address of Organization: ') }}</b>
                                        <input class="form-control" type="text" name="orgnameAddress1" id="orgnameAddress1" value="{{ old('orgnameAddress1', $answersc3['orgnameAddress1']) }}" >
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('Inclusive Dates: ') }}</b><br>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateFrom1', 'From: ') }}</b><br>
                                            <input class="form-control" type="date" name="orgdateFrom1" id="orgdateFrom1" value="{{ old('orgdateFrom1', $answersc3['orgdateFrom1']) }}" >
                                        </div>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateTo1', 'To: ') }}</b><br>
                                            <input class="form-control" type="date" name="orgdateTo1" id="orgdateTo1" value="{{ old('orgdateTo1', $answersc3['orgdateTo1']) }}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <b>{{ Form::label('orgnumHours1', 'Number of Hours: ') }}</b><br>
                                            <input class="form-control" type="text" name="orgnumHours1" id="orgnumHours1" value="{{ old('orgnumHours1', $answersc3['orgnumHours1']) }}" >
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgPosition1', 'Position/Nature of Work: ') }}</b>
                                            <input class="form-control" type="text" name="orgPosition1" id="orgPosition1" value="{{ old('orgPosition1', $answersc3['orgPosition1']) }}" >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="org1-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress2', 'Name & Address of Organization: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress2" id="orgnameAddress2" value="{{ old('orgnameAddress2', $answersc3['orgnameAddress2']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom2', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom2" id="orgdateFrom2" value="{{ old('orgdateFrom2', $answersc3['orgdateFrom2']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo2', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo2" id="orgdateTo2" value="{{ old('orgdateTo2', $answersc3['orgdateTo2']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <b>{{ Form::label('orgnumHours2', 'Number of Hours: ') }}</b><br>
                                        <input class="form-control" type="text" name="orgnumHours2" id="orgnumHours2" value="{{ old('orgnumHours2', $answersc3['orgnumHours2']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgPosition2', 'Position/Nature of Work: ') }}</b>
                                        <input class="form-control" type="text" name="orgPosition2" id="orgPosition2" value="{{ old('orgPosition2', $answersc3['orgPosition2']) }}" >
                                </div>
                            </div>
                        </div>

                        <div class="org2-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress3', 'Name & Address of Organization: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress3" id="orgnameAddress3" value="{{ old('orgnameAddress3', $answersc3['orgnameAddress3']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom3', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom3" id="orgdateFrom3" value="{{ old('orgdateFrom3', $answersc3['orgdateFrom3']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo3', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo3" id="orgdateTo3" value="{{ old('orgdateTo3', $answersc3['orgdateTo3']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <b>{{ Form::label('orgnumHours3', 'Number of Hours: ') }}</b><br>
                                        <input class="form-control" type="text" name="orgnumHours3" id="orgnumHours3" value="{{ old('orgnumHours3', $answersc3['orgnumHours3']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgPosition3', 'Position/Nature of Work: ') }}</b>
                                        <input class="form-control" type="text" name="orgPosition3" id="orgPosition3" value="{{ old('orgPosition3', $answersc3['orgPosition3']) }}" >
                                </div>
                            </div>
                        </div>

                        <div class="org3-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress4', 'Name & Address of Organization: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress4" id="orgnameAddress4" value="{{ old('orgnameAddress4', $answersc3['orgnameAddress4']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom4', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom4" id="orgdateFrom4" value="{{ old('orgdateFrom4', $answersc3['orgdateFrom4']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo4', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo4" id="orgdateTo4" value="{{ old('orgdateTo4', $answersc3['orgdateTo4']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <b>{{ Form::label('orgnumHours4', 'Number of Hours: ') }}</b><br>
                                        <input class="form-control" type="text" name="orgnumHours4" id="orgnumHours4" value="{{ old('orgnumHours4', $answersc3['orgnumHours4']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgPosition4', 'Position/Nature of Work: ') }}</b>
                                        <input class="form-control" type="text" name="orgPosition4" id="orgPosition4" value="{{ old('orgPosition4', $answersc3['orgPosition4']) }}" >
                                </div>
                            </div>
                        </div>

                        <div class="org4-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress5', 'Name & Address of Organization: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress5" id="orgnameAddress5" value="{{ old('orgnameAddress5', $answersc3['orgnameAddress5']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom5', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom5" id="orgdateFrom5" value="{{ old('orgdateFrom5', $answersc3['orgdateFrom5']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo5', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo5" id="orgdateTo5" value="{{ old('orgdateTo5', $answersc3['orgdateTo5']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <b>{{ Form::label('orgnumHours5', 'Number of Hours: ') }}</b><br>
                                        <input class="form-control" type="text" name="orgnumHours5" id="orgnumHours5" value="{{ old('orgnumHours5', $answersc3['orgnumHours5']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgPosition5', 'Position/Nature of Work: ') }}</b>
                                        <input class="form-control" type="text" name="orgPosition5" id="orgPosition5" value="{{ old('orgPosition5', $answersc3['orgPosition5']) }}" >
                                </div>
                            </div>
                        </div>

                        <div class="org5-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress6', 'Name & Address of Organization: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress6" id="orgnameAddress6" value="{{ old('orgnameAddress6', $answersc3['orgnameAddress6']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom6', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom6" id="orgdateFrom6" value="{{ old('orgdateFrom6', $answersc3['orgdateFrom6']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo6', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo6" id="orgdateTo6" value="{{ old('orgdateTo6', $answersc3['orgdateTo6']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <b>{{ Form::label('orgnumHours6', 'Number of Hours: ') }}</b><br>
                                        <input class="form-control" type="text" name="orgnumHours6" id="orgnumHours6" value="{{ old('orgnumHours6', $answersc3['orgnumHours6']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgPosition6', 'Position/Nature of Work: ') }}</b>
                                        <input class="form-control" type="text" name="orgPosition6" id="orgPosition6" value="{{ old('orgPosition6', $answersc3['orgPosition6']) }}" >
                                </div>
                            </div>
                        </div>

                        <div class="org6-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress7', 'Name & Address of Organization: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress7" id="orgnameAddress7" value="{{ old('orgnameAddress7', $answersc3['orgnameAddress7']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom7', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom7" id="orgdateFrom7" value="{{ old('orgdateFrom7', $answersc3['orgdateFrom7']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo7', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo7" id="orgdateTo7" value="{{ old('orgdateTo7', $answersc3['orgdateTo7']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <b>{{ Form::label('orgnumHours7', 'Number of Hours: ') }}</b><br>
                                        <input class="form-control" type="text" name="orgnumHours7" id="orgnumHours7" value="{{ old('orgnumHours7', $answersc3['orgnumHours7']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgPosition7', 'Position/Nature of Work: ') }}</b>
                                        <input class="form-control" type="text" name="orgPosition7" id="orgPosition7" value="{{ old('orgPosition7', $answersc3['orgPosition7']) }}" >
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-1 row px-0">
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="minus-refc3"
                                    disabled>-</button>
                            </div>
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="add-refc3">+</button>
                            </div>
                        </div>

                        <h2>VII. LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS ATTENDED</h2>
                        <h6 style="font-style: italic;">(Start from the most recent L&D/training program and include only
                            the
                            relevant L&D/training taken for the last five (5) years for Division Chief/Executive/Managerial
                            positions)</h6><br>
                        <h5>{{ Form::label('orgname', 'Please fill-up the following:') }}</h5>
                        <br>

                        <div class="org-static2">

                            <div class="orgname7-static">
                                <div class="row">
                                    <div class="col">
                                        <b>{{ Form::label('orgnameAddress8', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                        <input class="form-control" type="text" name="orgnameAddress8" id="orgnameAddress8" value="{{ old('orgnameAddress8', $answersc3['orgnameAddress8']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateFrom8', 'From: ') }}</b><br>
                                            <input class="form-control" type="date" name="orgdateFrom8" id="orgdateFrom8" value="{{ old('orgdateFrom8', $answersc3['orgdateFrom8']) }}" >
                                        </div>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateTo8', 'To: ') }}</b><br>
                                            <input class="form-control" type="date" name="orgdateTo8" id="orgdateTo8" value="{{ old('orgdateTo8', $answersc3['orgdateTo8']) }}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <b>{{ Form::label('orgnumHours8', 'Number of Hours: ') }}</b><br>
                                        <input class="form-control" type="text" name="orgnumHours8" id="orgnumHours8" value="{{ old('orgnumHours8', $answersc3['orgnumHours8']) }}" >
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgType8', 'Type of LD: ') }}</b>
                                        <input class="form-control" type="text" name="orgType8" id="orgType8" value="{{ old('orgType8', $answersc3['orgType8']) }}"  placeholder="Type of LD...">
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgnameSponsor8', 'Conducted/Sponsored by: ') }}</b>
                                        <input class="form-control" type="text" name="orgnameSponsor8" id="orgnameSponsor8" value="{{ old('orgnameSponsor8', $answersc3['orgnameSponsor8']) }}"  placeholder="Conducted/Sponsored by...">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="orgLD1-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress9', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress9" id="orgnameAddress9" value="{{ old('orgnameAddress9', $answersc3['orgnameAddress9']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom9', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom9" id="orgdateFrom9" value="{{ old('orgdateFrom9', $answersc3['orgdateFrom9']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo9', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo9" id="orgdateTo9" value="{{ old('orgdateTo9', $answersc3['orgdateTo9']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours9', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours9" id="orgnumHours9" value="{{ old('orgnumHours9', $answersc3['orgnumHours9']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType9', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType9" id="orgType9" value="{{ old('orgType9', $answersc3['orgType9']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor9', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor9" id="orgnameSponsor9" value="{{ old('orgnameSponsor9', $answersc3['orgnameSponsor9']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD2-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress10', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress10" id="orgnameAddress10" value="{{ old('orgnameAddress10', $answersc3['orgnameAddress10']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom10', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom10" id="orgdateFrom10" value="{{ old('orgdateFrom10', $answersc3['orgdateFrom10']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo10', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo10" id="orgdateTo10" value="{{ old('orgdateTo10', $answersc3['orgdateTo10']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours10', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours10" id="orgnumHours10" value="{{ old('orgnumHours10', $answersc3['orgnumHours10']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType10', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType10" id="orgType10" value="{{ old('orgType10', $answersc3['orgType10']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor10', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor10" id="orgnameSponsor10" value="{{ old('orgnameSponsor10', $answersc3['orgnameSponsor10']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD3-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress11', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress11" id="orgnameAddress11" value="{{ old('orgnameAddress11', $answersc3['orgnameAddress11']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom11', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom11" id="orgdateFrom11" value="{{ old('orgdateFrom11', $answersc3['orgdateFrom11']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo11', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo11" id="orgdateTo11" value="{{ old('orgdateTo11', $answersc3['orgdateTo11']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours11', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours11" id="orgnumHours11" value="{{ old('orgnumHours11', $answersc3['orgnumHours11']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType11', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType11" id="orgType11" value="{{ old('orgType11', $answersc3['orgType11']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor11', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor11" id="orgnameSponsor11" value="{{ old('orgnameSponsor11', $answersc3['orgnameSponsor11']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD4-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress12', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress12" id="orgnameAddress12" value="{{ old('orgnameAddress12', $answersc3['orgnameAddress12']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom12', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom12" id="orgdateFrom12" value="{{ old('orgdateFrom12', $answersc3['orgdateFrom12']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo12', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo12" id="orgdateTo12" value="{{ old('orgdateTo12', $answersc3['orgdateTo12']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours12', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours12" id="orgnumHours12" value="{{ old('orgnumHours12', $answersc3['orgnumHours12']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType12', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType12" id="orgType12" value="{{ old('orgType12', $answersc3['orgType12']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor12', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor12" id="orgnameSponsor12" value="{{ old('orgnameSponsor12', $answersc3['orgnameSponsor12']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD5-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress13', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress13" id="orgnameAddress13" value="{{ old('orgnameAddress13', $answersc3['orgnameAddress13']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom13', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom13" id="orgdateFrom13" value="{{ old('orgdateFrom13', $answersc3['orgdateFrom13']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo13', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo13" id="orgdateTo13" value="{{ old('orgdateTo13', $answersc3['orgdateTo13']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours13', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours13" id="orgnumHours13" value="{{ old('orgnumHours13', $answersc3['orgnumHours13']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType13', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType13" id="orgType13" value="{{ old('orgType13', $answersc3['orgType13']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor13', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor13" id="orgnameSponsor13" value="{{ old('orgnameSponsor13', $answersc3['orgnameSponsor13']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD6-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress14', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress14" id="orgnameAddress14" value="{{ old('orgnameAddress14', $answersc3['orgnameAddress14']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom14', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom14" id="orgdateFrom14" value="{{ old('orgdateFrom14', $answersc3['orgdateFrom14']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo14', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo14" id="orgdateTo14" value="{{ old('orgdateTo14', $answersc3['orgdateTo14']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours14', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours14" id="orgnumHours14" value="{{ old('orgnumHours14', $answersc3['orgnumHours14']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType14', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType14" id="orgType14" value="{{ old('orgType14', $answersc3['orgType14']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor14', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor14" id="orgnameSponsor14" value="{{ old('orgnameSponsor14', $answersc3['orgnameSponsor14']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD7-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress15', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress15" id="orgnameAddress15" value="{{ old('orgnameAddress15', $answersc3['orgnameAddress15']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom15', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom15" id="orgdateFrom15" value="{{ old('orgdateFrom15', $answersc3['orgdateFrom15']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo15', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo15" id="orgdateTo15" value="{{ old('orgdateTo15', $answersc3['orgdateTo15']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours15', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours15" id="orgnumHours15" value="{{ old('orgnumHours15', $answersc3['orgnumHours15']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType15', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType15" id="orgType15" value="{{ old('orgType15', $answersc3['orgType15']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor15', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor15" id="orgnameSponsor15" value="{{ old('orgnameSponsor15', $answersc3['orgnameSponsor15']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD8-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress16', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress16" id="orgnameAddress16" value="{{ old('orgnameAddress16', $answersc3['orgnameAddress16']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom16', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom16" id="orgdateFrom16" value="{{ old('orgdateFrom16', $answersc3['orgdateFrom16']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo16', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo16" id="orgdateTo16" value="{{ old('orgdateTo16', $answersc3['orgdateTo16']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours16', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours16" id="orgnumHours16" value="{{ old('orgnumHours16', $answersc3['orgnumHours16']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType16', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType16" id="orgType16" value="{{ old('orgType16', $answersc3['orgType16']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor16', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor16" id="orgnameSponsor16" value="{{ old('orgnameSponsor16', $answersc3['orgnameSponsor16']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>
                        <div class="orgLD9-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress16', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress16" id="orgnameAddress16" value="{{ old('orgnameAddress16', $answersc3['orgnameAddress16']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom16', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom16" id="orgdateFrom16" value="{{ old('orgdateFrom16', $answersc3['orgdateFrom16']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo16', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo16" id="orgdateTo16" value="{{ old('orgdateTo16', $answersc3['orgdateTo16']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours17', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours17" id="orgnumHours17" value="{{ old('orgnumHours17', $answersc3['orgnumHours17']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType17', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType17" id="orgType17" value="{{ old('orgType17', $answersc3['orgType17']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor17', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor17" id="orgnameSponsor17" value="{{ old('orgnameSponsor17', $answersc3['orgnameSponsor17']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD10-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress18', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress18" id="orgnameAddress18" value="{{ old('orgnameAddress18', $answersc3['orgnameAddress18']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom18', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom18" id="orgdateFrom18" value="{{ old('orgdateFrom18', $answersc3['orgdateFrom18']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo18', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo18" id="orgdateTo18" value="{{ old('orgdateTo18', $answersc3['orgdateTo18']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours18', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours18" id="orgnumHours18" value="{{ old('orgnumHours18', $answersc3['orgnumHours18']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType18', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType18" id="orgType18" value="{{ old('orgType18', $answersc3['orgType18']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor18', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor18" id="orgnameSponsor18" value="{{ old('orgnameSponsor18', $answersc3['orgnameSponsor18']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD11-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress19', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress19" id="orgnameAddress19" value="{{ old('orgnameAddress19', $answersc3['orgnameAddress19']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom19', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom19" id="orgdateFrom19" value="{{ old('orgdateFrom19', $answersc3['orgdateFrom19']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo19', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo19" id="orgdateTo19" value="{{ old('orgdateTo19', $answersc3['orgdateTo19']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours19', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours19" id="orgnumHours19" value="{{ old('orgnumHours19', $answersc3['orgnumHours19']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType19', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType19" id="orgType19" value="{{ old('orgType19', $answersc3['orgType19']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor19', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor19" id="orgnameSponsor19" value="{{ old('orgnameSponsor19', $answersc3['orgnameSponsor19']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD12-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress20', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress20" id="orgnameAddress20" value="{{ old('orgnameAddress20', $answersc3['orgnameAddress20']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom20', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom20" id="orgdateFrom20" value="{{ old('orgdateFrom20', $answersc3['orgdateFrom20']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo20', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo20" id="orgdateTo20" value="{{ old('orgdateTo20', $answersc3['orgdateTo20']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours20', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours20" id="orgnumHours20" value="{{ old('orgnumHours20', $answersc3['orgnumHours20']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType20', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType20" id="orgType20" value="{{ old('orgType20', $answersc3['orgType20']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor20', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor20" id="orgnameSponsor20" value="{{ old('orgnameSponsor20', $answersc3['orgnameSponsor20']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD13-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress21', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress21" id="orgnameAddress21" value="{{ old('orgnameAddress21', $answersc3['orgnameAddress21']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom21', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom21" id="orgdateFrom21" value="{{ old('orgdateFrom21', $answersc3['orgdateFrom21']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo21', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo21" id="orgdateTo21" value="{{ old('orgdateTo21', $answersc3['orgdateTo21']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours21', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours21" id="orgnumHours21" value="{{ old('orgnumHours21', $answersc3['orgnumHours21']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType21', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType21" id="orgType21" value="{{ old('orgType21', $answersc3['orgType21']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor21', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor21" id="orgnameSponsor21" value="{{ old('orgnameSponsor21', $answersc3['orgnameSponsor21']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD14-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress22', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress22" id="orgnameAddress22" value="{{ old('orgnameAddress22', $answersc3['orgnameAddress22']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom22', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom22" id="orgdateFrom22" value="{{ old('orgdateFrom22', $answersc3['orgdateFrom22']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo22', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo22" id="orgdateTo22" value="{{ old('orgdateTo22', $answersc3['orgdateTo22']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours22', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours22" id="orgnumHours22" value="{{ old('orgnumHours22', $answersc3['orgnumHours22']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType22', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType22" id="orgType22" value="{{ old('orgType22', $answersc3['orgType22']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor22', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor22" id="orgnameSponsor22" value="{{ old('orgnameSponsor22', $answersc3['orgnameSponsor22']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD15-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress23', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress23" id="orgnameAddress23" value="{{ old('orgnameAddress23', $answersc3['orgnameAddress23']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom23', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom23" id="orgdateFrom23" value="{{ old('orgdateFrom23', $answersc3['orgdateFrom23']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo23', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo23" id="orgdateTo23" value="{{ old('orgdateTo23', $answersc3['orgdateTo23']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours23', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours23" id="orgnumHours23" value="{{ old('orgnumHours23', $answersc3['orgnumHours23']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType23', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType23" id="orgType23" value="{{ old('orgType23', $answersc3['orgType23']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor23', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor23" id="orgnameSponsor23" value="{{ old('orgnameSponsor23', $answersc3['orgnameSponsor23']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD16-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress24', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress24" id="orgnameAddress24" value="{{ old('orgnameAddress24', $answersc3['orgnameAddress24']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom24', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom24" id="orgdateFrom24" value="{{ old('orgdateFrom24', $answersc3['orgdateFrom24']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo24', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo24" id="orgdateTo24" value="{{ old('orgdateTo24', $answersc3['orgdateTo24']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours24', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours24" id="orgnumHours24" value="{{ old('orgnumHours24', $answersc3['orgnumHours24']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType24', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType24" id="orgType24" value="{{ old('orgType24', $answersc3['orgType24']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor24', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor24" id="orgnameSponsor24" value="{{ old('orgnameSponsor24', $answersc3['orgnameSponsor24']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD17-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress25', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    {{ Form::text('orgnameAddress25', null, ['class' => 'form-control', 'id' => 'orgnameAddress25', 'placeholder' => 'Title of Learning and Development Interventions/Training Programs...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom25', 'From: ') }}</b><br>
                                        {{ Form::date('orgdateFrom25', '') }}
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo25', 'To: ') }}</b><br>
                                        {{ Form::date('orgdateTo25', '') }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours25', 'Number of Hours: ') }}</b><br>
                                    {{ Form::text('orgnumHours25', null, ['class' => 'form-control', 'id' => 'orgnumHours25', 'placeholder' => 'No. of Hours...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType25', 'Type of LD: ') }}</b>
                                    {{ Form::text('orgType25', null, ['class' => 'form-control', 'id' => 'orgType25', 'placeholder' => 'Type of LD...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor25', 'Conducted/Sponsored by: ') }}</b>
                                    {{ Form::text('orgnameSponsor25', null, ['class' => 'form-control', 'id' => 'orgnameSponsor25', 'placeholder' => 'Conducted/Sponsored by...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>

                        <div class="orgLD18-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress26', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress26" id="orgnameAddress26" value="{{ old('orgnameAddress26', $answersc3['orgnameAddress26']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom26', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom26" id="orgdateFrom26" value="{{ old('orgdateFrom26', $answersc3['orgdateFrom26']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo26', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo26" id="orgdateTo26" value="{{ old('orgdateTo26', $answersc3['orgdateTo26']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours26', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours26" id="orgnumHours26" value="{{ old('orgnumHours26', $answersc3['orgnumHours26']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType26', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType26" id="orgType26" value="{{ old('orgType26', $answersc3['orgType26']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor26', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor26" id="orgnameSponsor26" value="{{ old('orgnameSponsor26', $answersc3['orgnameSponsor26']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD19-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress27', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress27" id="orgnameAddress27" value="{{ old('orgnameAddress27', $answersc3['orgnameAddress27']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom27', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom27" id="orgdateFrom27" value="{{ old('orgdateFrom27', $answersc3['orgdateFrom27']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo27', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo27" id="orgdateTo27" value="{{ old('orgdateTo27', $answersc3['orgdateTo27']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours27', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours27" id="orgnumHours27" value="{{ old('orgnumHours27', $answersc3['orgnumHours27']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType27', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType27" id="orgType27" value="{{ old('orgType27', $answersc3['orgType27']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor27', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor27" id="orgnameSponsor27" value="{{ old('orgnameSponsor27', $answersc3['orgnameSponsor27']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <div class="orgLD20-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress28', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameAddress28" id="orgnameAddress28" value="{{ old('orgnameAddress28', $answersc3['orgnameAddress28']) }}"  placeholder="Title of Learning and Development Interventions/Training Programs">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom28', 'From: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateFrom28" id="orgdateFrom28" value="{{ old('orgdateFrom28', $answersc3['orgdateFrom28']) }}" >
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo28', 'To: ') }}</b><br>
                                        <input class="form-control" type="date" name="orgdateTo28" id="orgdateTo28" value="{{ old('orgdateTo28', $answersc3['orgdateTo28']) }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <b>{{ Form::label('orgnumHours28', 'Number of Hours: ') }}</b><br>
                                    <input class="form-control" type="text" name="orgnumHours28" id="orgnumHours28" value="{{ old('orgnumHours28', $answersc3['orgnumHours28']) }}" >
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgType28', 'Type of LD: ') }}</b>
                                    <input class="form-control" type="text" name="orgType28" id="orgType28" value="{{ old('orgType28', $answersc3['orgType28']) }}"  placeholder="Type of LD...">
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameSponsor28', 'Conducted/Sponsored by: ') }}</b>
                                    <input class="form-control" type="text" name="orgnameSponsor28" id="orgnameSponsor28" value="{{ old('orgnameSponsor28', $answersc3['orgnameSponsor28']) }}"  placeholder="Conducted/Sponsored by...">
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="col-1 row px-0">
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="minus-refc31"
                                    disabled>-</button>
                            </div>
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="add-refc31">+</button>
                            </div>
                        </div><br>

                        <h2>VIII. OTHER INFORMATION</h2>
                        <h5>{{ Form::label('orgname', 'Please fill-up the following: ') }}</h5>
                        <br>
                        <div class="org-static3">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameSkill1', 'Special Skills and Hobbies: ') }}</b><br>
                                    {{ Form::text('orgnameSkill1', null, ['class' => 'form-control', 'id' => 'orgnameSkill1', 'placeholder' => 'Special Skills and Hobbies...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameDistinct1', 'Non-Academic Distinctions/Recognition: ') }}</b>
                                    {{ Form::text('orgnameDistinct1', null, ['class' => 'form-control', 'id' => 'orgnameDistinct1', 'placeholder' => 'Non-Academic Distinctions/Recognition...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameMembership1', 'Membership in Association/Organization: ') }}</b>
                                    {{ Form::text('orgnameMembership1', null, ['class' => 'form-control', 'id' => 'orgnameMembership1', 'placeholder' => 'Membership in Association/Organization...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>

                        <div class="orgOI1-container d-none"><br>
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameSkill2', 'Special Skills and Hobbies: ') }}</b><br>
                                    {{ Form::text('orgnameSkill2', null, ['class' => 'form-control', 'id' => 'orgnameSkill2', 'placeholder' => 'Special Skills and Hobbies...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameDistinct2', 'Non-Academic Distinctions/Recognition: ') }}</b>
                                    {{ Form::text('orgnameDistinct2', null, ['class' => 'form-control', 'id' => 'orgnameDistinct2', 'placeholder' => 'Non-Academic Distinctions/Recognition...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameMembership2', 'Membership in Association/Organization: ') }}</b>
                                    {{ Form::text('orgnameMembership2', null, ['class' => 'form-control', 'id' => 'orgnameMembership2', 'placeholder' => 'Membership in Association/Organization...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>

                        <div class="orgOI2-container d-none"><br>
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameSkill3', 'Special Skills and Hobbies: ') }}</b><br>
                                    {{ Form::text('orgnameSkill3', null, ['class' => 'form-control', 'id' => 'orgnameSkill3', 'placeholder' => 'Special Skills and Hobbies...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameDistinct3', 'Non-Academic Distinctions/Recognition: ') }}</b>
                                    {{ Form::text('orgnameDistinct3', null, ['class' => 'form-control', 'id' => 'orgnameDistinct3', 'placeholder' => 'Non-Academic Distinctions/Recognition...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameMembership3', 'Membership in Association/Organization: ') }}</b>
                                    {{ Form::text('orgnameMembership3', null, ['class' => 'form-control', 'id' => 'orgnameMembership3', 'placeholder' => 'Membership in Association/Organization...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>

                        <div class="orgOI3-container d-none"><br>
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameSkill4', 'Special Skills and Hobbies: ') }}</b><br>
                                    {{ Form::text('orgnameSkill4', null, ['class' => 'form-control', 'id' => 'orgnameSkill4', 'placeholder' => 'Special Skills and Hobbies...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameDistinct4', 'Non-Academic Distinctions/Recognition: ') }}</b>
                                    {{ Form::text('orgnameDistinct4', null, ['class' => 'form-control', 'id' => 'orgnameDistinct4', 'placeholder' => 'Non-Academic Distinctions/Recognition...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameMembership4', 'Membership in Association/Organization: ') }}</b>
                                    {{ Form::text('orgnameMembership4', null, ['class' => 'form-control', 'id' => 'orgnameMembership4', 'placeholder' => 'Membership in Association/Organization...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>

                        <div class="orgOI4-container d-none"><br>
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameSkill5', 'Special Skills and Hobbies: ') }}</b><br>
                                    {{ Form::text('orgnameSkill5', null, ['class' => 'form-control', 'id' => 'orgnameSkill5', 'placeholder' => 'Special Skills and Hobbies...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameDistinct5', 'Non-Academic Distinctions/Recognition: ') }}</b>
                                    {{ Form::text('orgnameDistinct5', null, ['class' => 'form-control', 'id' => 'orgnameDistinct5', 'placeholder' => 'Non-Academic Distinctions/Recognition...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameMembership5', 'Membership in Association/Organization: ') }}</b>
                                    {{ Form::text('orgnameMembership5', null, ['class' => 'form-control', 'id' => 'orgnameMembership5', 'placeholder' => 'Membership in Association/Organization...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>

                        <div class="orgOI5-container d-none"><br>
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameSkill6', 'Special Skills and Hobbies: ') }}</b><br>
                                    {{ Form::text('orgnameSkill6', null, ['class' => 'form-control', 'id' => 'orgnameSkill6', 'placeholder' => 'Special Skills and Hobbies...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameDistinct6', 'Non-Academic Distinctions/Recognition: ') }}</b>
                                    {{ Form::text('orgnameDistinct6', null, ['class' => 'form-control', 'id' => 'orgnameDistinct6', 'placeholder' => 'Non-Academic Distinctions/Recognition...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameMembership6', 'Membership in Association/Organization: ') }}</b>
                                    {{ Form::text('orgnameMembership6', null, ['class' => 'form-control', 'id' => 'orgnameMembership6', 'placeholder' => 'Membership in Association/Organization...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="col-1 row px-0">
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="minus-refc32"
                                    disabled>-</button>
                            </div>
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="add-refc32">+</button>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>

                <div id="C4FORM" class="tabcontent">

                    <div class="box-form">

                        questions portion
                        <div class="questions">
                            <b>34. Are you related by consanguinity or affinity to the appointing or recommending authority,
                                or
                                to chief of bureu or office or to the person who has made immediate supervision over you in
                                the
                                Office,
                                Bureau or Department where you will be appointed,</b><br>

                            <b>{{ Form::label('34-a-answer', 'a. within the third degree?') }}<br></b>
                            @if ($answersc4['a34'] == '1')
                                {{ Form::radio('34a', '1' , 'selected') }}
                                {{ Form::label('34a', 'YES') }}

                                {{ Form::radio('34a', '0') }}
                                {{ Form::label('34a', 'NO') }}<br>
                            @elseif($answersc4['a34'] == '0')
                                {{ Form::radio('34a', '1') }}
                                {{ Form::label('34a', 'YES') }}

                                {{ Form::radio('34a', '0' , 'selected') }}
                                {{ Form::label('34a', 'NO') }}<br>
                            @else
                                {{ Form::radio('34a', '1') }}
                                {{ Form::label('34a', 'YES') }}

                                {{ Form::radio('34a', '0') }}
                                {{ Form::label('34a', 'NO') }}<br>
                            @endif


                            <b>{{ Form::label('34b', 'b. within the fourth degree (for Local government Unit - Career Employees)?') }}<br></b>
                            @if ($answersc4['b34'] == '1')
                                {{ Form::radio('34b', '1' , 'selected') }}
                                {{ Form::label('34b', 'YES') }}

                                {{ Form::radio('34b', '0') }}
                                {{ Form::label('34b', 'NO') }}<br>
                            @elseif($answersc4['b34'] == '0')
                                {{ Form::radio('34b', '1') }}
                                {{ Form::label('34b', 'YES') }}

                                {{ Form::radio('34b', '0' , 'selected') }}
                                {{ Form::label('34b', 'NO') }}<br>
                            @else
                                {{ Form::radio('34b', '1') }}
                                {{ Form::label('34b', 'YES') }}

                                {{ Form::radio('34b', '0') }}
                                {{ Form::label('34b', 'NO') }}<br>
                            @endif

                            {{ Form::label('34bdetails', 'If YES, give details: ') }}
                            <input class="form-control" type="text" name="b34details" id="b34details" value="{{ old('detailsb34', $answersc4['detailsb34']) }}"  autocomplete="off" disabled>

                            <b>{{ Form::label('35a', '35. a. Have you ever been found guilty of any administrative offense?') }}<br></b>
                            @if ($answersc4['a35'] == '1')
                            {{ Form::radio('35a', '1' , 'selected') }}
                            {{ Form::label('35a', 'YES') }}

                            {{ Form::radio('35a', '0') }}
                            {{ Form::label('35a', 'NO') }}<br>
                            @elseif($answersc4['a35'] == '0')
                            {{ Form::radio('35a', '1') }}
                            {{ Form::label('35a', 'YES') }}

                            {{ Form::radio('35a', '0' , 'selected') }}
                            {{ Form::label('35a', 'NO') }}<br>
                            @else
                            {{ Form::radio('35a', '1') }}
                            {{ Form::label('35a', 'YES') }}

                            {{ Form::radio('35a', '0') }}
                            {{ Form::label('35a', 'NO') }}<br>
                            @endif

                            {{ Form::label('35adetails', 'If YES, give details: ') }}
                            <input class="form-control" type="text" name="a35details" id="details35a" value="{{ old('details35a', $answersc4['details35a']) }}"  autocomplete="off" disabled>

                            <b>{{ Form::label('35-b-answer', 'b. Have you been criminally change before any court?') }}<br></b>
                            @if ($answersc4['b35'] == '1')
                            {{ Form::radio('35b', '1' , 'selected') }}
                            {{ Form::label('35b', 'YES') }}

                            {{ Form::radio('35b', '0') }}
                            {{ Form::label('35b', 'NO') }}<br>
                            @elseif($answersc4['b35'] == '0')
                            {{ Form::radio('35b', '1') }}
                            {{ Form::label('35b', 'YES') }}
                            <input class="form-control" type="text" name="a38details" id="details37a" value="{{ old('details38a', $answersc4['detailsb38a']) }}"  autocomplete="off" disabled>

                            {{ Form::radio('35b', '0' , 'selected') }}
                            {{ Form::label('35b', 'NO') }}<br>
                            @else
                            {{ Form::radio('35b', '1') }}
                            {{ Form::label('35b', 'YES') }}

                            {{ Form::radio('35b', '0') }}
                            {{ Form::label('35b', 'NO') }}<br>
                            @endif

                            {{ Form::label('b35details', 'If YES, give details: ') }}<br>
                            {{ Form::label('b35date', 'Date Field: ') }}
                            <input class="form-control" type="date" name="b35date" id="b35date" value="{{ old('b35date', $answersc4['b35date']) }}"  disabled>
                            {{ Form::label('b35cases', 'Status of Case/s: ') }}
                            {{ Form::select('b35case', $case, null, ['class' => 'form-control', 'id' => '35-b-answer-case', 'placeholder' => 'Status', 'disabled']) }}

                            <b>{{ Form::label('36a', '36. Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?') }}<br></b>
                            @if ($answersc4['a36'] == '1')
                            {{ Form::radio('36a', '1' , 'selected') }}
                            {{ Form::label('36a', 'YES') }}

                            {{ Form::radio('36a', '0') }}
                            {{ Form::label('36a', 'NO') }}<br>
                            @elseif($answersc4['a36'] == '0')
                            {{ Form::radio('36a', '1') }}
                            {{ Form::label('36a', 'YES') }}

                            {{ Form::radio('36a', '0' , 'selected') }}
                            {{ Form::label('36a', 'NO') }}<br>
                            @else
                            {{ Form::radio('36a', '1') }}
                            {{ Form::label('36a', 'YES') }}

                            {{ Form::radio('36a', '0') }}
                            {{ Form::label('36a', 'NO') }}<br>
                            @endif

                            {{ Form::label('a36details', 'If YES, give details: ') }}
                            <input class="form-control" type="text" name="a36details" id="details36a" value="{{ old('a36details', $answersc4['a36details']) }}"  autocomplete="off" disabled>

                            <b>{{ Form::label(
                                '37a',
                                '37. Have you ever been separated from the service in any of the following modes:                                                                                                                                                                                                                                                 resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or                                                                                                                                                                                                                                         phased out (abolition) in the public or private sector?',
                            ) }}<br></b>
                            @if ($answersc4['a37'] == '1')
                            {{ Form::radio('37a', '1' , 'selected') }}
                            {{ Form::label('37a', 'YES') }}

                            {{ Form::radio('37a', '0') }}
                            {{ Form::label('37a', 'NO') }}<br>
                            @elseif($answersc4['a37'] == '0')
                            {{ Form::radio('37a', '1') }}
                            {{ Form::label('37a', 'YES') }}

                            {{ Form::radio('37a', '0' , 'selected') }}
                            {{ Form::label('37a', 'NO') }}<br>
                            @else
                            {{ Form::radio('37a', '1') }}
                            {{ Form::label('37a', 'YES') }}

                            {{ Form::radio('37a', '0') }}
                            {{ Form::label('37a', 'NO') }}<br>
                            @endif

                            {{ Form::label('a37details', 'If YES, give details: ') }}
                            <input class="form-control" type="text" name="a37details" id="details37a" value="{{ old('a37details', $answersc4['a37details']) }}"  autocomplete="off" disabled>

                            <b>{{ Form::label(
                                '38a',
                                '38. a. Have you ever been a candidate in a national or local election held within the last year<br>
                                                                                                                                                                                                                                                                            (except Barangay election)?',
                            ) }}<br></b>
                            @if ($answersc4['a38'] == '1')
                            {{ Form::radio('38a', '1' , 'selected') }}
                            {{ Form::label('38a', 'YES') }}

                            {{ Form::radio('38a', '0') }}
                            {{ Form::label('38a', 'NO') }}<br>
                            @elseif($answersc4['a38'] == '0')
                            {{ Form::radio('38a', '1') }}
                            {{ Form::label('38a', 'YES') }}

                            {{ Form::radio('38a', '0' , 'selected') }}
                            {{ Form::label('38a', 'NO') }}<br>
                            @else
                            {{ Form::radio('38a', '1') }}
                            {{ Form::label('38a', 'YES') }}

                            {{ Form::radio('38a', '0') }}
                            {{ Form::label('38a', 'NO') }}<br>
                            @endif

                            {{ Form::label('38a', 'If YES, give details: ') }}
                            <input class="form-control" type="text" name="a38details" id="details38a" value="{{ old('a38details', $answersc4['a38details']) }}"  autocomplete="off" disabled>

                            <b>{{ Form::label(
                                '38b',
                                'b. Have you resigned from the government service during the three (3)-month period before<br>
                                                                                                                                                                                                                                                                            the last election to promote/actively campaign for a national or local candidate?',
                            ) }}<br></b>
                            @if ($answersc4['b38'] == '1')
                            {{ Form::radio('38b', '1' , 'selected') }}
                            {{ Form::label('38b', 'YES') }}

                            {{ Form::radio('38b', '0') }}
                            {{ Form::label('38b', 'NO') }}<br>
                            @elseif($answersc4['b38'] == '0')
                            {{ Form::radio('38b', '1') }}
                            {{ Form::label('38b', 'YES') }}

                            {{ Form::radio('38b', '0' , 'selected') }}
                            {{ Form::label('38b', 'NO') }}<br>
                            @else
                            {{ Form::radio('38b', '1') }}
                            {{ Form::label('38b', 'YES') }}

                            {{ Form::radio('38b', '0') }}
                            {{ Form::label('38b', 'NO') }}<br>
                            @endif

                            {{ Form::label('b38details', 'If YES, give details: ') }}
                            <input class="form-control" type="text" name="b38details" id="details38b" value="{{ old('b38details', $answersc4['b38details']) }}"  autocomplete="off" disabled>

                            {{ Form::text('b38details', null, ['class' => 'form-control', 'id' => '38-b-answer-details', 'disabled', 'autocomplete' => 'off']) }}

                            <b>{{ Form::label('39a', '39. Have you acquired the status of an immigrant or permanent resident of another country?') }}<br></b>
                            @if ($answersc4['a39'] == '1')
                            {{ Form::radio('39a', '1' , 'selected') }}
                            {{ Form::label('39a', 'YES') }}

                            {{ Form::radio('39a', '0') }}
                            {{ Form::label('39a', 'NO') }}<br>
                            @elseif($answersc4['a39'] == '0')
                            {{ Form::radio('39a', '1') }}
                            {{ Form::label('39a', 'YES') }}

                            {{ Form::radio('39a', '0' , 'selected') }}
                            {{ Form::label('39a', 'NO') }}<br>
                            @else
                            {{ Form::radio('39a', '1') }}
                            {{ Form::label('39a', 'YES') }}

                            {{ Form::radio('39a', '0') }}
                            {{ Form::label('39a', 'NO') }}<br>
                            @endif

                            {{ Form::label('a39details', 'If YES, give details: ') }}
                            <input class="form-control" type="text" name="a39details" id="details39a" value="{{ old('a39details', $answersc4['a39details']) }}"  autocomplete="off" disabled>

                            <b>40. Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons
                                (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following
                                items: </b><br>

                            <b>{{ Form::label('40a', 'a.   Are you a member of any indigenous group?') }}<br></b>
                            @if ($answersc4['a40'] == '1')
                            {{ Form::radio('40a', '1' , 'selected') }}
                            {{ Form::label('40a', 'YES') }}

                            {{ Form::radio('40a', '0') }}
                            {{ Form::label('40a', 'NO') }}<br>
                            @elseif($answersc4['a40'] == '0')
                            {{ Form::radio('40a', '1') }}
                            {{ Form::label('40a', 'YES') }}

                            {{ Form::radio('40a', '0' , 'selected') }}
                            {{ Form::label('40a', 'NO') }}<br>
                            @else
                            {{ Form::radio('40a', '1') }}
                            {{ Form::label('40a', 'YES') }}

                            {{ Form::radio('40a', '0') }}
                            {{ Form::label('40a', 'NO') }}<br>
                            @endif

                            {{ Form::label('a40details', 'If YES, please specify: ') }}
                            {{ Form::select('a40details', $group, null, ['class' => 'form-control', 'id' => '40-a-answer-details', 'disabled']) }}

                            <b>{{ Form::label('40b', 'b.   Are you a person with disability?') }}<br></b>
                            @if ($answersc4['b40'] == '1')
                            {{ Form::radio('40b', '1' , 'selected') }}
                            {{ Form::label('40b', 'YES') }}

                            {{ Form::radio('40b', '0') }}
                            {{ Form::label('40b', 'NO') }}<br>
                            @elseif($answersc4['b40'] == '0')
                            {{ Form::radio('40b', '1') }}
                            {{ Form::label('40b', 'YES') }}

                            {{ Form::radio('40b', '0' , 'selected') }}
                            {{ Form::label('40b', 'NO') }}<br>
                            @else
                            {{ Form::radio('40b', '1') }}
                            {{ Form::label('40b', 'YES') }}

                            {{ Form::radio('40b', '0') }}
                            {{ Form::label('40b', 'NO') }}<br>
                            @endif

                            {{ Form::label('b40details', 'If YES, please specify ID No: ') }}
                            <input class="form-control" type="text" name="b40details" id="details40b" value="{{ old('b40details', $answersc4['b40details']) }}"  autocomplete="off" disabled>
                            <b>{{ Form::label('40c', 'c.   Are you a solo parent?') }}<br></b>
                            @if ($answersc4['c40'] == '1')
                            {{ Form::radio('40c', '1' , 'selected') }}
                            {{ Form::label('40c', 'YES') }}

                            {{ Form::radio('40c', '0') }}
                            {{ Form::label('40c', 'NO') }}<br>
                            @elseif($answersc4['c40'] == '0')
                            {{ Form::radio('40c', '1') }}
                            {{ Form::label('40c', 'YES') }}

                            {{ Form::radio('40c', '0' , 'selected') }}
                            {{ Form::label('40c', 'NO') }}<br>
                            @else
                            {{ Form::radio('40c', '1') }}
                            {{ Form::label('40c', 'YES') }}

                            {{ Form::radio('40c', '0') }}
                            {{ Form::label('40c', 'NO') }}<br>
                            @endif

                            {{ Form::label('c40details', 'If YES, please specify ID No: ') }}
                            <input class="form-control" type="number" name="c40details" id="details40c" value="{{ old('c40details', $answersc4['c40details']) }}"  autocomplete="off" disabled>
                            <hr class="line1">

                        </div>

                        {{-- references portion --}}
                        <div class="references">

                            <div class="row">
                                <div class="col-11"><b>41. REFRENCES </b></div>
                                <div class="col-1 row px-0">
                                    <div class="col-5 offset-1 px-0">
                                        <button class="btn btn-secondary btn-sm w-100" id="minusc4-ref"
                                            disabled>-</button>
                                    </div>
                                    <div class="col-5 offset-1 px-0">
                                        <button class="btn btn-secondary btn-sm w-100" id="addc4-ref">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <i>(Person not related by consangurity or affinity to applicant/appointee)</i><br>
                        <hr>
                        <b>{{ Form::label('name41', 'Name: ') }}</b>
                        <input class="form-control" type="text" name="name41" id="41-b-answer-name" value="{{ old('name41', $answersc4['name41']) }}" autocomplete="off">
                        <b>{{ Form::label('address41', 'Address: ') }}</b>
                        <input class="form-control" type="text" name="address41" id="41-a-answer-address" value="{{ old('address41', $answersc4['address41']) }}" autocomplete="off">
                        <b>{{ Form::label('contactno', 'Telephone Number: ') }}</b>
                        <input class="form-control" type="text" name="contactno41" id="contactno41" value="{{ old('contactno41', $answersc4['contactno41']) }}" autocomplete="off">

                        {{-- enabled/disabled reference forms --}}
                        <div class="41-b-container d-none">
                            <hr>
                            <b>{{ Form::label('name42', 'Name: ') }}</b>
                            <input class="form-control" type="text" name="name42" id="42-b-answer-name" value="{{ old('name42', $answersc4['name42']) }}" autocomplete="off">
                            <b>{{ Form::label('address42', 'Address: ') }}</b>
                            <input class="form-control" type="text" name="address42" id="42-a-answer-address" value="{{ old('address42', $answersc4['address42']) }}" autocomplete="off">
                            <b>{{ Form::label('contactno42', 'Telephone Number: ') }}</b>
                            <input class="form-control" type="text" name="contactno42" id="contactno42" value="{{ old('contactno42', $answersc4['contactno42']) }}" autocomplete="off">

                       </div>
                        <div class="41-c-container d-none">
                            <hr>
                            <b>{{ Form::label('name43', 'Name: ') }}</b>
                            <input class="form-control" type="text" name="name43" id="43-b-answer-name" value="{{ old('name43', $answersc4['name43']) }}" autocomplete="off">
                            <b>{{ Form::label('address43', 'Address: ') }}</b>
                            <input class="form-control" type="text" name="address43" id="43-a-answer-address" value="{{ old('address43', $answersc4['address43']) }}" autocomplete="off" >
                            <b>{{ Form::label('contactno43', 'Telephone Number: ') }}</b>
                            <input class="form-control" type="text" name="contactno43" id="contactno43" value="{{ old('contactno43', $answersc4['contactno43']) }}" autocomplete="off">
                        </div>



                        <div class="oath">

                            <b><i>42. I declare under oath that I have personally accomplished this Personal Data Sheet
                                    which is
                                    a 'YES', correct and
                                    complete statement pursuant to the provisions of pertinent laws, rules and regulations
                                    of
                                    the Republic of the
                                    Philippines. I authorize the agency head/authorized representative to verify/validate
                                    the
                                    contents stated herein.
                                    I agree that any misrepresentation made in this document and its attachments shall cause
                                    the
                                    filin'g
                                    of administrative/criminal case/s against me.</i></b>
                        </div>

                        <div class="id">

                            <br><b>Government Issued ID </b><i>(i.e.Passport, GSIS, SSS, PRC, Driver's License,
                                etc.)</i><br>
                            <b>PLEASE INDICATE ID Number</b><br>
                            <b>{{ Form::label('govid44', 'Government Issued ID: ') }}</b>
                            {{ Form::select('govid44', $validID, null, ['class' => 'form-control', 'placeholder' => 'Select ID...']) }}
                            <b>{{ Form::label('valid44', 'ID/License/Passport No.: ') }}</b>
                            <input class="form-control" type="text" name="valid44" id="42-answer-valid-id-no" value="{{ old('valid44', $answersc4['valid44']) }}" autocomplete="off">
                            {{ Form::label('issuanceplace44', 'Place of Issuance: ') }}
                            <input class="form-control" type="text" name="issuanceplace44" id="42-answer-issuance-details" value="{{ old('issuanceplace44', $answersc4['issuanceplace44']) }}" autocomplete="off" placeholder="Place of Issuance">
                            {{ Form::label('issuancedate44', 'Date of Issuance: ') }}
                            <input class="form-control" type="date" name="issuancedate44" id="42-answer-issuance-details" value="{{ old('issuancedate44', $answersc4['issuancedate44']) }}" autocomplete="off">

                        </div>


                    </div>
                </div>

                <div class="button" id="submitbtn">
                    <button type="submit" id="submitbutton" class="btn btn-primary btn-loading"
                        data-coreui-timeout="2000" value="submit">Submit</button>
                </div>

            </form>
            <script>
                function openForm(evt, formName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(formName).style.display = "block";
                    evt.currentTarget.className += " active";
                }
            </script>

            {{-- c4 increment button --}}
            <script>
                $(function(){
                    var refCount = 1;
                    $('#addc4-ref').on('click', function (e) {
                    e.preventDefault();

                    if (refCount === 1) {
                        $('.41-b-container').removeClass('d-none');
                        $('#minusc4-ref').attr('disabled', false);
                        refCount++;
                    } else if (refCount === 2) {
                        $('.41-c-container').removeClass('d-none');
                        $('#addc4-ref').attr('disabled', true, required);
                        refCount++;
                    }
                    });
                    $('#minusc4-ref').on('click', function (e) {
                    e.preventDefault();

                    if (refCount === 2) {
                        $('.41-c-container').addClass('d-none');
                        $('#addc4-ref').attr('disabled', false);
                        refCount--;
                    } else if (refCount === 1) {
                        $('.41-b-container').addClass('d-none');
                        $('#minusc4-ref').attr('disabled', true, required);
                        }
                    });
                });
            </script>

            {{-- c4 hidden form scripts --}}
            <script>
                $(function(){
                    $('input[name="34b"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[id="b34details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="b34details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="35a"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="a35details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="a35details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="35b"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="b35date"]').attr({
                                'disabled': false,
                                'required': true
                            })
                            $('select[name="b35case"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="b35date"]').attr({
                                'disabled': true,
                                'required': false
                            })
                            $('select[name="b35case"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="36a"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="a36details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="a36details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="37a"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="a37details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="a37details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="38a"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="a38details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="a38details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="38b"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="b38details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="b38details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="39a"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="a39details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="a39details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="40a"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('select[name="a40details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('select[name="a40details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="40b"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="b40details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="b40details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="40c"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="c40details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="c40details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });

            </script>

            {{-- c3 first incrementing button --}}
            <script>
                $(function() {
                    var refCount = 5;
                    var counter = 0

                    $('#add-refc3').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 5 && counter == 0) {
                            $('.org1-container').removeClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 1) {
                            $('.org2-container').removeClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 2) {
                            $('.org3-container').removeClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 3) {
                            $('.org4-container').removeClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 4) {
                            $('.org5-container').removeClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 5) {
                            $('.org6-container').removeClass('d-none');
                            $('#add-refc3').attr('disabled', true);

                        }
                    });

                    $('#minus-refc3').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 5 && counter == 5) {
                            $('.org6-container').addClass('d-none');
                            $('#add-refc3').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 4) {
                            $('.org5-container').addClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 3) {
                            $('.org4-container').addClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 2) {
                            $('.org3-container').addClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 1) {
                            $('.org2-container').addClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 0) {
                            $('.org1-container').addClass('d-none');
                            $('#minus-refc3').attr('disabled', true);
                        }

                    });
                });
            </script>

            {{-- c3 second incrementing button --}}
            <script>
                $(function() {
                    var refCount = 19;
                    var counter = 0;

                    $('#add-refc31').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 19 && counter == 0) {
                            $('.orgLD1-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 1) {
                            $('.orgLD2-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 2) {
                            $('.orgLD3-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 3) {
                            $('.orgLD4-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 4) {
                            $('.orgLD5-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 5) {
                            $('.orgLD6-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 6) {
                            $('.orgLD7-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 7) {
                            $('.orgLD8-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 8) {
                            $('.orgLD9-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 9) {
                            $('.orgLD10-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 10) {
                            $('.orgLD11-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 11) {
                            $('.orgLD12-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 12) {
                            $('.orgLD13-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 13) {
                            $('.orgLD14-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 14) {
                            $('.orgLD15-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 15) {
                            $('.orgLD16-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 16) {
                            $('.orgLD17-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 17) {
                            $('.orgLD18-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 18) {
                            $('.orgLD19-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 19 && counter == 19) {
                            $('.orgLD20-container').removeClass('d-none');
                            $('#add-refc31').attr('disabled', true);
                        }
                    });

                    $('#minus-refc31').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 19 && counter == 19) {
                            $('.orgLD20-container').addClass('d-none');
                            $('#add-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 18) {
                            $('.orgLD19-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 17) {
                            $('.orgLD18-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 16) {
                            $('.orgLD17-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 15) {
                            $('.orgLD16-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 14) {
                            $('.orgLD15-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 13) {
                            $('.orgLD14-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 12) {
                            $('.orgLD13-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 11) {
                            $('.orgLD12-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 10) {
                            $('.orgLD11-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 9) {
                            $('.orgLD10-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 8) {
                            $('.orgLD9-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 7) {
                            $('.orgLD8-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 6) {
                            $('.orgLD7-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 5) {
                            $('.orgLD6-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 4) {
                            $('.orgLD5-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 3) {
                            $('.orgLD4-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 2) {
                            $('.orgLD3-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 1 ) {
                            $('.orgLD2-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 19 && counter == 0) {
                            $('.orgLD1-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', true);
                        }

                    });
                });
            </script>

            {{-- c3 third incrementing button --}}
            <script>
                $(function() {
                    var refCount = 4;
                    var counter = 0

                    $('#add-refc32').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 4 && counter == 0) {
                            $('.orgOI1-container').removeClass('d-none');
                            $('#minus-refc32').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 4 && counter == 1) {
                            $('.orgOI2-container').removeClass('d-none');
                            $('#minus-refc32').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 4 && counter == 2) {
                            $('.orgOI3-container').removeClass('d-none');
                            $('#minus-refc32').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 4 && counter == 3) {
                            $('.orgOI4-container').removeClass('d-none');
                            $('#minus-refc32').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 4 && counter == 4) {
                            $('.orgOI5-container').removeClass('d-none');
                            $('#add-refc32').attr('disabled', true);
                        }


                    });

                    $('#minus-refc32').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 4 && counter == 4) {
                            $('.orgOI5-container').addClass('d-none');
                            $('#add-refc32').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 4 && counter == 3) {
                            $('.orgOI4-container').addClass('d-none');
                            $('#minus-refc32').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 4 && counter == 2) {
                            $('.orgOI3-container').addClass('d-none');
                            $('#minus-refc32').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 4 && counter == 1) {
                            $('.orgOI2-container').addClass('d-none');
                            $('#minus-refc32').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 4 && counter == 0) {
                            $('.orgOI1-container').addClass('d-none');
                            $('#minus-refc32').attr('disabled', true);
                        }

                    });
                });
            </script>

            {{-- c2 first incrementing button  --}}
            <script>
                $(function() {
                    var refCount = 5;
                    var counter = 0

                    $('#add-refc2').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 5 && counter == 0) {
                            $('.form-container1').removeClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 1) {
                            $('.form-container2').removeClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 2) {
                            $('.form-container3').removeClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 3) {
                            $('.form-container4').removeClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 4) {
                            $('.form-container5').removeClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 5) {
                            $('.form-container6').removeClass('d-none');
                            $('#add-refc2').attr('disabled', true);

                        }
                    });

                    $('#minus-refc2').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 5 && counter == 5) {
                            $('.form-container6').addClass('d-none');
                            $('#add-refc2').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 4) {
                            $('.form-container5').addClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 3) {
                            $('.form-container4').addClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 2) {
                            $('.form-container3').addClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 1) {
                            $('.form-container2').addClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 0) {
                            $('.form-container1').addClass('d-none');
                            $('#minus-refc2').attr('disabled', true);
                        }

                    });
                });
            </script>

            {{-- c2 second incrementing button --}}
            <script>
                $(function() {
                    var refCount = 26;
                    var counter = 0

                    $('#add-refc21').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 26 && counter == 0) {
                            $('.form-container21').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 1) {
                            $('.form-container22').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 2) {
                            $('.form-container23').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 3) {
                            $('.form-container24').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 4) {
                            $('.form-container25').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 5) {
                            $('.form-container26').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', );
                            counter++;
                        } else if (refCount <= 26 && counter == 6) {
                            $('.form-container27').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 7) {
                            $('.form-container28').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 29 && counter == 8) {
                            $('.form-container29').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 9) {
                            $('.form-container30').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 10) {
                            $('.form-container31').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 11) {
                            $('.form-container32').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 12) {
                            $('.form-container33').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 13) {
                            $('.form-container34').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 14) {
                            $('.form-container35').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 15) {
                            $('.form-container36').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 16) {
                            $('.form-container37').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 17) {
                            $('.form-container38').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 18) {
                            $('.form-container39').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 19) {
                            $('.form-container40').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 20) {
                            $('.form-container41').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 21) {
                            $('.form-container42').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 22) {
                            $('.form-container43').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 23) {
                            $('.form-container44').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 24) {
                            $('.form-container45').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 25) {
                            $('.form-container46').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 26) {
                            $('.form-container47').removeClass('d-none');
                            $('#add-refc21').attr('disabled', true);
                        }
                    });

                    $('#minus-refc21').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 26 && counter == 26) {
                            $('.form-container47').addClass('d-none');
                            $('#add-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 25) {
                            $('.form-container46').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 24) {
                            $('.form-container45').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 23) {
                            $('.form-container44').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 22) {
                            $('.form-container43').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 21) {
                            $('.form-container42').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 20) {
                            $('.form-container41').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 19) {
                            $('.form-container40').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 18) {
                            $('.form-container39').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 17) {
                            $('.form-container38').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 16) {
                            $('.form-container37').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 15) {
                            $('.form-container36').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 14) {
                            $('.form-container35').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 13) {
                            $('.form-container34').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 12) {
                            $('.form-container33').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 11) {
                            $('.form-container32').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 10) {
                            $('.form-container31').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 9) {
                            $('.form-container30').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 8) {
                            $('.form-container29').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 7) {
                            $('.form-container28').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 6) {
                            $('.form-container27').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 5) {
                            $('.form-container26').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 4) {
                            $('.form-container25').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 3) {
                            $('.form-container24').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 2) {
                            $('.form-container23').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 1) {
                            $('.form-container22').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 0) {
                            $('.form-container21').addClass('d-none');
                            $('#minus-refc21').attr('disabled', true);
                        }

                    });
                });
            </script>

            {{-- c1 incrementing button --}}
            <script>
                $(function() {
                    var refCount = 11;
                    var counter = 0

                    $('#add-refc1').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 11 && counter == 0) {
                            $('.child1-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 1) {
                            $('.child2-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 2) {
                            $('.child3-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 3) {
                            $('.child4-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 4) {
                            $('.child5-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 5) {
                            $('.child6-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 6) {
                            $('.child6-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 7) {
                            $('.child7-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 8) {
                            $('.child8-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 9) {
                            $('.child9-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 10) {
                            $('.child10-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 11) {
                            $('.child11-container').removeClass('d-none');
                            $('#add-refc1').attr('disabled', true);
                        }
                    });

                    $('#minus-refc1').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 11 && counter == 11) {
                            $('.child11-container').addClass('d-none');
                            $('#add-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 10) {
                            $('.child10-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 9) {
                            $('.child9-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 8) {
                            $('.child8-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 7) {
                            $('.child7-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 6) {
                            $('.child6-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 5) {
                            $('.child5-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 4) {
                            $('.child4-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 3) {
                            $('.child3-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 2) {
                            $('.child2-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 1) {
                            $('.child1-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', true);
                            counter--;
                        }

                    });
                });
            </script>

            {{-- C4 incrementing button --}}
            <script>
                // for enabling/disabling reference forms
                $(function() {
                    var refCount = 1;
                    $('#addc4-ref').on('click', function(e) {
                        e.preventDefault();

                        if (refCount === 1) {
                            $('.41-b-container').removeClass('d-none');
                            $('#minusc4-ref').attr('disabled', false);
                            refCount++;
                        } else if (refCount === 2) {
                            $('.41-c-container').removeClass('d-none');
                            $('#addc4-ref').attr('disabled', true, required);
                            refCount++;
                        }
                    });

                    $('#minus-ref').on('click', function(e) {
                        e.preventDefault();

                        if (refCount === 2) {
                            $('.41-c-container').addClass('d-none');
                            $('#addc4-ref').attr('disabled', false);
                            refCount--;
                        } else if (refCount === 1) {
                            $('.41-b-container').addClass('d-none');
                            $('#minusc4-ref').attr('disabled', true, required);
                            refCount--;
                        }
                    });

                    // enabling/disabling the text boxes for questions portion
                    $('input[name="34-b-answer"]').change(function() {
                        if ($(this).is(':checked') && $(this).val() == 'YES') {
                            $('input[name="34-b-answer-details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="34-b-answer-details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                    $('input[name="35-a-answer"]').change(function() {
                        if ($(this).is(':checked') && $(this).val() == 'YES') {
                            $('input[name="35-a-answer-details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="35-a-answer-details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                    $('input[name="35-b-answer"]').change(function() {
                        if ($(this).is(':checked') && $(this).val() == 'YES') {
                            $('input[name="35-b-answer-date"]').attr({
                                'disabled': false,
                                'required': true
                            })
                            $('select[name="35-b-answer-case"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="35-b-answer-date"]').attr({
                                'disabled': true,
                                'required': false
                            })
                            $('input[name="35-b-answer-case"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                    $('input[name="36-answer"]').change(function() {
                        if ($(this).is(':checked') && $(this).val() == 'YES') {
                            $('input[name="36-answer-details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="36-answer-details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                    $('input[name="37-answer"]').change(function() {
                        if ($(this).is(':checked') && $(this).val() == 'YES') {
                            $('input[name="37-answer-details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="37-answer-details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                    $('input[name="38-a-answer"]').change(function() {
                        if ($(this).is(':checked') && $(this).val() == 'YES') {
                            $('input[name="38-a-answer-details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="38-a-answer-details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                    $('input[name="38-b-answer"]').change(function() {
                        if ($(this).is(':checked') && $(this).val() == 'YES') {
                            $('input[name="38-b-answer-details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="38-b-answer-details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                    $('input[name="39-answer"]').change(function() {
                        if ($(this).is(':checked') && $(this).val() == 'YES') {
                            $('input[name="39-answer-details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="39-answer-details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                    $('input[name="40-a-answer"]').change(function() {
                        if ($(this).is(':checked') && $(this).val() == 'YES') {
                            $('select[name="40-a-answer-details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="40-a-answer-details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                    $('input[name="40-b-answer"]').change(function() {
                        if ($(this).is(':checked') && $(this).val() == 'YES') {
                            $('input[name="40-b-answer-details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="40-b-answer-details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                    $('input[name="40-c-answer"]').change(function() {
                        if ($(this).is(':checked') && $(this).val() == 'YES') {
                            $('input[name="40-c-answer-details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="40-c-answer-details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
            </script>
    </body>

    </html>
@endsection

