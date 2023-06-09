<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'after_or_equal'       => 'The :attribute must be a date after or equal to :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'before_or_equal'      => 'The :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'dimensions'           => 'The :attribute has invalid image dimensions.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'The :attribute must be a file.',
    'filled'               => 'The :attribute field must have a value.',
    'gt'                   => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'string'  => 'The :attribute must be greater than :value characters.',
        'array'   => 'The :attribute must have more than :value items.',
    ],
    'gte'                  => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'ipv4'                 => 'The :attribute must be a valid IPv4 address.',
    'ipv6'                 => 'The :attribute must be a valid IPv6 address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'lt'                   => [
        'numeric' => 'The :attribute must be less than :value.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => 'The :attribute must be less than :value characters.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte'                  => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
        'array'   => 'The :attribute must not have more than :value items.',
    ],
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'mimetypes'            => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'uploaded'             => 'The :attribute failed to upload.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
            //C1 validation error messages
            'civilOthers' => ['reuired' => 'Please specify your civil status.',],
            'surname' => ['max' => 'Maximum amount of characters reached on last name.', 'required' => 'Please enter your last name.',],
            'firstname' => ['max' => 'Maximum amount of characters reached on fisrt name.', 'required' => 'Please enter your first name.',],
            'birthdate' => ['before' => 'You must be at legal age to submit this form.', 'required' => 'Please enter your birthdate.',],
            'sex' => ['required' => 'Please enter your sex.',],
            'placeofBirth' => ['max' => 'Maximum amount of characters reached on place of birth.', 'required' => 'Please enter your place of birth.',],
            'civilStatus' => ['required' => 'Please enter your civil status.',],
            'citizens' => ['required' => 'Please select your citizenship.',],
            'dualCitizenType' => ['required' => 'Please specify your dual citizenship.',],
            'country' => ['required_if' => 'Please indicate your country.',],
            'residentialhouse' => ['max' => 'Maximum amount of characters reached.', 'required' => 'Please complete your residential address.',],
            'residentialst' => ['max' => 'Maximum amount of characters reached.', 'required' => 'Please complete your residential address.',],
            'residentialsudv' => ['max' => 'Maximum amount of characters reached.', 'required' => 'Please complete your residential address.',],
            'residentialcity' => ['max' => 'Maximum amount of characters reached.', 'required' => 'Please complete your residential address.',],
            'residentialprv' => ['max' => 'Maximum amount of characters reached.', 'required' => 'Please complete your residential address.',],
            'residentialzip' => ['max' => 'Maximum amount of characters reached.', 'required' => 'Please complete your residential address.',],
            'permanenthouse' => ['max' => 'Maximum amount of characters reached.',],
            'permanentst' => ['max' => 'Maximum amount of characters reached.',],
            'permanentsubdv' => ['max' => 'Maximum amount of characters reached.',],
            'permanentbrgy' => ['max' => 'Maximum amount of characters reached.',],
            'permenentcity' => ['max' => 'Maximum amount of characters reached.',],
            'permanentprv' => ['max' => 'Maximum amount of characters reached.',],
            'permanentzip' => ['max' => 'Maximum amount of characters reached.',],
            'telno' => ['max' => 'Maximum amount of characters reached.',],
            'mobno' => ['max' => 'Maximum amount of characters reached.',],
            'spousesn' => ['max' => 'Maximum amount of characters reached.',],
            'spousefn' => ['max' => 'Maximum amount of characters reached.',],
            'spousemn' => ['max' => 'Maximum amount of characters reached.',],
            'spousenmext' => ['max' => 'Maximum amount of characters reached.',],
            'spouseocc' => ['max' => 'Maximum amount of characters reached.',],
            'spouseempadd' => ['max' => 'Maximum amount of characters reached.',],
            'spousetel' => ['max' => 'Maximum amount of characters reached.',],
            'fathersn' => ['max' => 'Maximum amount of characters reached.',],
            'fatherfn' => ['max' => 'Maximum amount of characters reached.',],
            'fathermn' => ['max' => 'Maximum amount of characters reached.',],
            'fatherext' => ['max' => 'Maximum amount of characters reached.',],
            'mothernm' => ['max' => 'Maximum amount of characters reached.',],
            'mothersn' => ['max' => 'Maximum amount of characters reached.',],
            'motherfn' => ['max' => 'Maximum amount of characters reached.',],
            'mothermn' => ['max' => 'Maximum amount of characters reached.',],
            'child0' => ['max' => 'Maximum amount of characters reached.',],
            'birthchild0' => ['before' => 'Enter a valid birthdate.',],
            'child1' => ['max' => 'Maximum amount of characters reached.',],
            'birthchild1' => ['before' => 'Enter a valid birthdate.',],
            'child2' => ['max' => 'Maximum amount of characters reached.',],
            'birthchild2' => ['before' => 'Enter a valid birthdate.',],
            'child3' => ['max' => 'Maximum amount of characters reached.',],
            'birthchild3' => ['before' => 'Enter a valid birthdate.',],
            'child4' => ['max' => 'Maximum amount of characters reached.',],
            'birthchild4' => ['before' => 'Enter a valid birthdate.',],
            'child5' => ['max' => 'Maximum amount of characters reached.',],
            'birthchild5' => ['before' => 'Enter a valid birthdate.',],
            'child6' => ['max' => 'Maximum amount of characters reached.',],
            'birthchild6' => ['before' => 'Enter a valid birthdate.',],
            'child7' => ['max' => 'Maximum amount of characters reached.',],
            'birthchild7' => ['before' => 'Enter a valid birthdate.',],
            'child8' => ['max' => 'Maximum amount of characters reached.',],
            'birthchild8' => ['before' => 'Enter a valid birthdate.',],
            'child9' => ['max' => 'Maximum amount of characters reached.',],
            'birthchild9' => ['before' => 'Enter a valid birthdate.',],
            'child10' => ['max' => 'Maximum amount of characters reached.',],
            'birthchild10' => ['before' => 'Enter a valid birthdate.',],
            'child11' => ['max' => 'Maximum amount of characters reached.',],
            'birthchild11' => ['before' => 'Enter a valid birthdate.',],
            'elemname' => ['max' => 'Maximum amount of characters reached.',],
            'elemdeg' => ['max' => 'Maximum amount of characters reached.',],
            //elemunitlevel
            'attendancefrom' => ['before' => 'Enter a valid period of attendance in elementary level.',],
            'attendanceto' => ['required_with' => 'Complete your period of attendance in elementary level.'], ['after' => 'Dates should not overlap in elementary level.'],
            //yeargradelem
            'scholarshipelem' => ['max' => 'Maximum amount of characters reached.',],
            'hsname' => ['max' => 'Maximum amount of characters reached.',],
            'hsdeg' => ['max' => 'Maximum amount of characters reached.',],
            //hsnitlevel
            'attendancefromhs' => ['before' => 'Enter a valid period of attendance in high school level.',],
            'attendancetohs' => ['required_with' => 'Complete your period of attendance in high school level.'], ['after' => 'Dates should not overlap in high school level.'],
            //yeargradhs
            'scholarshiphs' => ['max' => 'Maximum amount of characters reached.',],
            'vocname' => ['max' => 'Maximum amount of characters reached.',],
            'vocdeg' => ['max' => 'Maximum amount of characters reached.',],
            //vocunitlevel
            'attendancefromvoc' => ['before' => 'Enter a valid period of attendance in vocational level.',],
            'attendancetovoc' => ['required_with' => 'Complete your period of attendance in vocational level.'], ['after' => 'Dates should not overlap in vocational level.'],
            //yeargradvoc
            'scholarshipvoc' => ['max' => 'Maximum amount of characters reached.',],
            'colname' => ['max' => 'Maximum amount of characters reached.',],
            'coldeg' => ['max' => 'Maximum amount of characters reached.',],
            //colunitlevel
            'attendancefromcol' => ['before' => 'Enter a valid period of attendance in college level.',],
            'attendancetocol' => ['required_with' => 'Complete your period of attendance in college level.'], ['after' => 'Dates should not overlap in college level.'],
            //yeargradcol
            'scholarshipcol' => ['max' => 'Maximum amount of characters reached.',],
            'gradname' => ['max' => 'Maximum amount of characters reached.',],
            'graddeg' => ['max' => 'Maximum amount of characters reached.',],
            //gradunitlevel
            'attendnacefromgrad' => ['before' => 'Enter a valid period of attendance in graduate level.',],
            'attendancetograd' => ['required_with' => 'Complete your period of attendance in graduate level.'], ['after' => 'Dates should not overlap in graduate level.'],
            //yeargrad
            'scholarshipgrad' => ['max' => 'Maximum amount of characters reached.',],

            //C2 validation error messages
            'eligibility' => ['max' => 'Maximum amount of characters reached.',],
            'rating' => ['max' => 'Maximum amount of characters reached.',],
            'placeofexam' => ['max' => 'Maximum amount of characters reached.',],
            'dateofexam' => ['before' => 'Enter a valid date of examination in Work Experience Section on number 1.',],
            'licenseno' => ['max' => 'Maximum amount of characters reached.',],
            'validity' => ['required_if' => 'Enter date of validity of license on number 1.',],

            'eligibility2' => ['max' => 'Maximum amount of characters reached.',],
            'rating2' => ['max' => 'Maximum amount of characters reached.',],
            'placeofexam2' => ['max' => 'Maximum amount of characters reached.',],
            'dateofexam2' => ['before' => 'Enter a valid date of examination in Work Experience Section on number 2.',],
            'licenseno2' => ['max' => 'Maximum amount of characters reached.',],
            'validity2' => ['required_if' => 'Enter date of validity of license on number 2.',],

            'eligibility3' => ['max' => 'Maximum amount of characters reached.',],
            'rating3' => ['max' => 'Maximum amount of characters reached.',],
            'placeofexam3' => ['max' => 'Maximum amount of characters reached.',],
            'dateofexam3' => ['before' => 'Enter a valid date of examination in Work Experience Section on number 3.',],
            'licenseno3' => ['max' => 'Maximum amount of characters reached.',],
            'validity3' => ['required_if' => 'Enter date of validity of license on number 3.',],

            'eligibility4' => ['max' => 'Maximum amount of characters reached.',],
            'rating4' => ['max' => 'Maximum amount of characters reached.',],
            'placeofexam4' => ['max' => 'Maximum amount of characters reached.',],
            'dateofexam4' => ['before' => 'Enter a valid date of examination in Work Experience Section on number 4.',],
            'licenseno4' => ['max' => 'Maximum amount of characters reached.',],
            'validity4' => ['required_if' => 'Enter date of validity of license on number 4.',],

            'eligibility5' => ['max' => 'Maximum amount of characters reached.',],
            'rating5' => ['max' => 'Maximum amount of characters reached.',],
            'placeofexam5' => ['max' => 'Maximum amount of characters reached.',],
            'dateofexam5' => ['before' => 'Enter a valid date of examination in Work Experience Section on number 5.',],
            'licenseno5' => ['max' => 'Maximum amount of characters reached.',],
            'validity5' => ['required_if' => 'Enter date of validity of license on number 5.',],

            'eligibility6' => ['max' => 'Maximum amount of characters reached.',],
            'rating6' => ['max' => 'Maximum amount of characters reached.',],
            'placeofexam6' => ['max' => 'Maximum amount of characters reached.',],
            'dateofexam6' => ['before' => 'Enter a valid date of examination in Work Experience Section on number 6.',],
            'licenseno6' => ['max' => 'Maximum amount of characters reached.',],
            'validity6' => ['required_if' => 'Enter date of validity of license on number 6.',],

            'eligibility7' => ['max' => 'Maximum amount of characters reached.',],
            'rating7' => ['max' => 'Maximum amount of characters reached.',],
            'placeofexam7' => ['max' => 'Maximum amount of characters reached.',],
            'dateofexam7' => ['before' => 'Enter a valid date of examination in Work Experience Section on number 7.',],
            'licenseno7' => ['max' => 'Maximum amount of characters reached.',],
            'validity7' => ['required_if' => 'Enter date of validity of license on number 7.',],

            'datefrom' => ['before' => 'Enter a valid date of Work Experience on number 1.',],
            'dateto' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position' => ['max' => 'Maximum amount of characters reached.',],
            'department' => ['max' => 'Maximum amount of characters reached.',],
            //salary
            'paygrade' => ['max' => 'Maximum amount of characters reached.',],

            'datefrom2' => ['before' => 'Enter a valid date.',],
            'dateto2' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position2' => ['max' => 'Maximum amount of characters reached.',],
            'department2' => ['max' => 'Maximum amount of characters reached.',],
            //salary2
            'paygrade2' => ['max' => 'Maximum amount of characters reached.',],

            'datefrom3' => ['before' => 'Enter a valid date.',],
            'dateto3' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position3' => ['max' => 'Maximum amount of characters reached.',],
            'department3' => ['max' => 'Maximum amount of characters reached.',],
            //salary3
            'paygrade3' => ['max' => 'Maximum amount of characters reached.',],

            'datefrom4' => ['before' => 'Enter a valid date.',],
            'dateto4' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position4' => ['max' => 'Maximum amount of characters reached.',],
            'department4' => ['max' => 'Maximum amount of characters reached.',],
            //salary4
            'paygrade4' => ['max' => 'Maximum amount of characters reached.',],

            'datefrom5' => ['before' => 'Enter a valid date.',],
            'dateto5' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position5' => ['max' => 'Maximum amount of characters reached.'],
            'department5' => ['max' => 'Maximum amount of characters reached.'],
            //salary5
            'paygrade5' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom6' => ['before' => 'Enter a valid date.',],
            'dateto6' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position6' => ['max' => 'Maximum amount of characters reached.'],
            'department6' => ['max' => 'Maximum amount of characters reached.'],
            //salary6
            'paygrade6' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom7' => ['before' => 'Enter a valid date.',],
            'dateto7' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position7' => ['max' => 'Maximum amount of characters reached.'],
            'department6' => ['max' => 'Maximum amount of characters reached.'],
            //salary7
            'paygrade7' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom8' => ['before' => 'Enter a valid date.',],
            'dateto8' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position8' => ['max' => 'Maximum amount of characters reached.'],
            'department8' => ['max' => 'Maximum amount of characters reached.'],
            //salary8
            'paygrade8' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom9' => ['before' => 'Enter a valid date.',],
            'dateto9' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position9' => ['max' => 'Maximum amount of characters reached.'],
            'department9' => ['max' => 'Maximum amount of characters reached.'],
            //salary9
            'paygrade9' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom10' => ['before' => 'Enter a valid date.',],
            'dateto10' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position10' => ['max' => 'Maximum amount of characters reached.'],
            'department10' => ['max' => 'Maximum amount of characters reached.'],
            //salary10
            'paygrade10' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom11' => ['before' => 'Enter a valid date.',],
            'dateto11' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position11' => ['max' => 'Maximum amount of characters reached.'],
            'department11' => ['max' => 'Maximum amount of characters reached.'],
            //salary11
            'paygrade11' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom12' => ['before' => 'Enter a valid date.',],
            'dateto12' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position12' => ['max' => 'Maximum amount of characters reached.'],
            'department12' => ['max' => 'Maximum amount of characters reached.'],
            //salary12
            'paygrade12' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom13' => ['before' => 'Enter a valid date.',],
            //'dateto13' => 'required_with:datefrom6|after:datefrom6|nullable',
            'position13' => ['max' => 'Maximum amount of characters reached.'],
            'department13' => ['max' => 'Maximum amount of characters reached.'],
            //salary13
            'paygrade13' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom14' => ['before' => 'Enter a valid date.',],
            'dateto14' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position14' => ['max' => 'Maximum amount of characters reached.'],
            'department14' => ['max' => 'Maximum amount of characters reached.'],
            //salary14
            'paygrade14' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom15' => ['before' => 'Enter a valid date.',],
            'dateto15' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position15' => ['max' => 'Maximum amount of characters reached.'],
            'department15' => ['max' => 'Maximum amount of characters reached.'],
            //salary15
            'paygrade15' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom16' => ['before' => 'Enter a valid date.',],
            'dateto16' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position16' => ['max' => 'Maximum amount of characters reached.'],
            'department16' => ['max' => 'Maximum amount of characters reached.'],
            //salary16
            'paygrade16' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom17' => ['before' => 'Enter a valid date.',],
            'dateto17' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position17' => ['max' => 'Maximum amount of characters reached.'],
            'department17' => ['max' => 'Maximum amount of characters reached.'],
            //salary17
            'paygrade17' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom18' => ['before' => 'Enter a valid date.',],
            'dateto18' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position18' => ['max' => 'Maximum amount of characters reached.'],
            'department18' => ['max' => 'Maximum amount of characters reached.'],
            //salary18
            'paygrade18' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom19' => ['before' => 'Enter a valid date.',],
            'dateto19' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position19' => ['max' => 'Maximum amount of characters reached.'],
            'department19' => ['max' => 'Maximum amount of characters reached.'],
            //salary19
            'paygrade19' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom20' => ['before' => 'Enter a valid date.',],
            'dateto20' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position20' => ['max' => 'Maximum amount of characters reached.'],
            'department20' => ['max' => 'Maximum amount of characters reached.'],
            //salary20
            'paygrade20' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom21' => ['before' => 'Enter a valid date.',],
            'dateto21' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position21' => ['max' => 'Maximum amount of characters reached.'],
            'department21' => ['max' => 'Maximum amount of characters reached.'],
            //salary21
            'paygrade21' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom22' => ['before' => 'Enter a valid date.',],
            'dateto22' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position22' => ['max' => 'Maximum amount of characters reached.'],
            'department22' => ['max' => 'Maximum amount of characters reached.'],
            //salary22
            'paygrade22' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom23' => ['before' => 'Enter a valid date.',],
            'dateto23' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position23' => ['max' => 'Maximum amount of characters reached.'],
            'department23' => ['max' => 'Maximum amount of characters reached.'],
            //salary23
            'paygrade23' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom24' => ['before' => 'Enter a valid date.',],
            'dateto24' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position24' => ['max' => 'Maximum amount of characters reached.'],
            'department24' => ['max' => 'Maximum amount of characters reached.'],
            //salary24
            'paygrade24' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom25' => ['before' => 'Enter a valid date.',],
            'dateto25' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position25' => ['max' => 'Maximum amount of characters reached.'],
            'department25' => ['max' => 'Maximum amount of characters reached.'],
            //salary25
            'paygrade25' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom26' => ['before' => 'Enter a valid date.',],
            'dateto26' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position26' => ['max' => 'Maximum amount of characters reached.'],
            'department26' => ['max' => 'Maximum amount of characters reached.'],
            //salary26
            'paygrade26' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom27' => ['before' => 'Enter a valid date.',],
            'dateto27' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position27' => ['max' => 'Maximum amount of characters reached.'],
            'department27' => ['max' => 'Maximum amount of characters reached.'],
            //salary27
            'paygrade27' => ['max' => 'Maximum amount of characters reached.'],

            'datefrom28' => ['before' => 'Enter a valid date.',],
            'dateto28' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            'position28' => ['max' => 'Maximum amount of characters reached.'],
            'department28' => ['max' => 'Maximum amount of characters reached.'],
            //salary28
            'paygrade28' => ['max' => 'Maximum amount of characters reached.'],

            //C3 validation error messages
            'orgnameAddress1' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom1' => ['before' => 'Enter a valid date.',],
            'orgdateTo1' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours1
            'orgPosition1' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress2' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom2' => ['before' => 'Enter a valid date.',],
            'orgdateTo2' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours2
            'orgPosition2' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress3' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom4' => ['before' => 'Enter a valid date.',],
            'orgdateTo3' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours3
            'orgPosition3' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress4' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom4' => ['before' => 'Enter a valid date.',],
            'orgdateTo4' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours4
            'orgPosition4' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress5' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom5' => ['before' => 'Enter a valid date.',],
            'orgdateTo5' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours5
            'orgPosition5' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress6' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom6' => ['before' => 'Enter a valid date.',],
            'orgdateTo6' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours6
            'orgPosition6' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress7' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom7' => ['before' => 'Enter a valid date.',],
            'orgdateTo7' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours7
            'orgPosition7' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress8' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom8' => ['before' => 'Enter a valid date.',],
            'orgdateTo8' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours8
            'orgPosition8' => ['max' => 'Maximum amount of characters reached.'],
            'orgType8' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor8' => ['max' => 'Maximum amount of characters reached.'],


            'orgnameAddress9' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom9' => ['before' => 'Enter a valid date.',],
            'orgdateTo9' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours9
            'orgPosition9' => ['max' => 'Maximum amount of characters reached.'],
            'orgType9' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor9' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress10' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom10' => ['before' => 'Enter a valid date.',],
            'orgdateTo10' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours10
            'orgPosition10' => ['max' => 'Maximum amount of characters reached.'],
            'orgType10' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor10' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress11' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom11' => ['before' => 'Enter a valid date.',],
            'orgdateTo11' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours11
            'orgPosition11' => ['max' => 'Maximum amount of characters reached.'],
            'orgType11' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor11' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress12' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom12' => ['before' => 'Enter a valid date.',],
            'orgdateTo12' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours12
            'orgPosition12' => ['max' => 'Maximum amount of characters reached.'],
            'orgType12' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor12' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress13' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom13' => ['before' => 'Enter a valid date.',],
            'orgdateTo13' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours13
            'orgPosition13' => ['max' => 'Maximum amount of characters reached.'],
            'orgType13' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor13' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress14' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom14' => ['before' => 'Enter a valid date.',],
            'orgdateTo14' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours14
            'orgPosition14' => ['max' => 'Maximum amount of characters reached.'],
            'orgType14' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor14' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress15' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom15' => ['before' => 'Enter a valid date.',],
            'orgdateTo15' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours14
            'orgPosition15' => ['max' => 'Maximum amount of characters reached.'],
            'orgType15' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor15' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress16' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom16' => ['before' => 'Enter a valid date.',],
            'orgdateTo16' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours16
            'orgPosition16' => ['max' => 'Maximum amount of characters reached.'],
            'orgType16' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor16' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress17' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom17' => ['before' => 'Enter a valid date.',],
            'orgdateTo17' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours17
            'orgPosition17' => ['max' => 'Maximum amount of characters reached.'],
            'orgType17' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor17' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress18' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom18' => ['before' => 'Enter a valid date.',],
            'orgdateTo18' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours18
            'orgPosition18' => ['max' => 'Maximum amount of characters reached.'],
            'orgType18' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor18' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress19' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom19' => ['before' => 'Enter a valid date.',],
            'orgdateTo19' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours19
            'orgPosition19' => ['max' => 'Maximum amount of characters reached.'],
            'orgType19' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor19' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress20' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom120' => ['before' => 'Enter a valid date.',],
            'orgdateTo20' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours20
            'orgPosition20' => ['max' => 'Maximum amount of characters reached.'],
            'orgType20' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor20' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress21' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom121' => ['before' => 'Enter a valid date.',],
            'orgdateTo21' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours21
            'orgPosition21' => ['max' => 'Maximum amount of characters reached.'],
            'orgType21' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor21' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress22' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom122' => ['before' => 'Enter a valid date.',],
            'orgdateTo22' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours22
            'orgPosition22' => ['max' => 'Maximum amount of characters reached.'],
            'orgType22' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor22' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress23' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom123' => ['before' => 'Enter a valid date.',],
            'orgdateTo23' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours23
            'orgPosition23' => ['max' => 'Maximum amount of characters reached.'],
            'orgType23' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor23' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress24' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom124' => ['before' => 'Enter a valid date.',],
            'orgdateTo24' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours24
            'orgPosition24' => ['max' => 'Maximum amount of characters reached.'],
            'orgType24' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor24' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress25' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom125' => ['before' => 'Enter a valid date.',],
            'orgdateTo25' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours25
            'orgPosition25' => ['max' => 'Maximum amount of characters reached.'],
            'orgType25' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor25' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress26' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom126' => ['before' => 'Enter a valid date.',],
            'orgdateTo26' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours26
            'orgPosition26' => ['max' => 'Maximum amount of characters reached.'],
            'orgType26' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor26' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress27' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom127' => ['before' => 'Enter a valid date.',],
            'orgdateTo27' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours27
            'orgPosition27' => ['max' => 'Maximum amount of characters reached.'],
            'orgType27' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor27' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameAddress28' => ['max' => 'Maximum amount of characters reached.'],
            'orgdateFrom128' => ['before' => 'Enter a valid date.',],
            'orgdateTo28' => ['required_with' => 'Input a date.'], ['after' => 'Dates should not overlap.'],
            //orgnumHours28
            'orgPosition28' => ['max' => 'Maximum amount of characters reached.'],
            'orgType28' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameSponsor28' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameSkill1' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameDistinct1' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameMembership1' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameSkill2' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameDistinct2' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameMembership2' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameSkill3' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameDistinct3' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameMembership3' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameSkill4' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameDistinct4' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameMembership4' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameSkill5' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameDistinct5' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameMembership5' => ['max' => 'Maximum amount of characters reached.'],

            'orgnameSkill6' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameDistinct6' => ['max' => 'Maximum amount of characters reached.'],
            'orgnameMembership6' => ['max' => 'Maximum amount of characters reached.'],

            //C4 validation error messages
            'b34details' => ['max' => 'Maximum amount of characters reached.'],
            'a35details' => ['max' => 'Maximum amount of characters reached.'],
            'b35details' => ['max' => 'Maximum amount of characters reached.'],
            'b35case' => ['max' => 'Maximum amount of characters reached.'],
            'a36details' => ['max' => 'Maximum amount of characters reached.'],
            'a37details' => ['max' => 'Maximum amount of characters reached.'],
            'a38details' => ['max' => 'Maximum amount of characters reached.'],
            'b38details' => ['max' => 'Maximum amount of characters reached.'],
            'a39details' => ['max' => 'Maximum amount of characters reached.'],
            'a40details' => ['max' => 'Maximum amount of characters reached.'],
            'b40details' => ['max' => 'Maximum amount of characters reached.'],
            'c40details' => ['max' => 'Maximum amount of characters reached.'],
            'name41' => ['max' => 'Maximum amount of characters reached.'],
            'address41' => ['max' => 'Maximum amount of characters reached.'],
            'contactno41' => ['max' => 'Maximum amount of characters reached.'],
            'name42' => ['max' => 'Maximum amount of characters reached.'],
            'address42' => ['max' => 'Maximum amount of characters reached.'],
            'contactno42' => ['max' => 'Maximum amount of characters reached.'],
            'name43' => ['max' => 'Maximum amount of characters reached.'],
            'address43' => ['max' => 'Maximum amount of characters reached.'],
            'contactno43' => ['max' => 'Maximum amount of characters reached.'],
            'valid44' => ['max' => 'Maximum amount of characters reached.'],
            'issuanceplace44' => ['max' => 'Maximum amount of characters reached.'],
            'issuancedate44' => ['before' => 'Enter a valid date.'],


        /*
        |--------------------------------------------------------------------------
        | Custom Validation Attributes
        |--------------------------------------------------------------------------
        |
        | The following language lines are used to swap attribute place-holders
        | with something more reader friendly such as E-Mail Address instead
        | of "email". This simply helps us make messages a little cleaner.
        |
        */

        'attributes' => [],
        ]

    ];
