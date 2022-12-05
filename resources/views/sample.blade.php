<html>
    <div class="children">
        <b>{{ Form::label('children', 'Name of Children (List all names)') }}</b>
        <div class="col-1 row px-0">
            <div class="col-5 offset-1 px-0">
                <button class="btn btn-secondary btn-sm w-100" id="minus-ref" disabled>-</button>
            </div>
            <div class="col-5 offset-1 px-0">
                <button class="btn btn-secondary btn-sm w-100" id="add-ref">+</button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <b>{{ Form::label('child0', 'Name: ') }}</b>
                {{ Form::text('child0', null, ['class' => 'form-control', 'id' => 'child0', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
            </div>
            <div class="col"><b>{{ Form::label('birthchild0', 'Birthdate: ') }}</b><br>
                {{ Form::date('birthchild0', '') }}
            </div>
        </div>

        <div class="child1-container d-none">
            <div class="row">
                <div class="col">
                    <b>{{ Form::label('child1', 'Name: ') }}</b>
                    {{ Form::text('child1', null, ['class' => 'form-control', 'id' => 'child1', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                </div>
                <div class="col">
                    <b>{{ Form::label('birthchild1', 'Birthdate: ') }}</b><br>
                    {{ Form::date('birthchild1', '') }}
                </div>
            </div>
        </div>

        <div class="child2-container d-none">
            <div class="row">
                <div class="col">
                    <b>{{ Form::label('child2', 'Name: ') }}</b>
                    {{ Form::text('child2', null, ['class' => 'form-control', 'id' => 'child2', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                </div>
                <div class="col">
                    <b>{{ Form::label('birthchild2', 'Birthdate: ') }}</b><br>
                    {{ Form::date('birthchild2', '') }}
                </div>
            </div>
        </div>

        <div class="child3-container d-none">
            <div class="row">
                <div class="col">
                    <b>{{ Form::label('child3', 'Name: ') }}</b>
                    {{ Form::text('child3', null, ['class' => 'form-control', 'id' => 'child3', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                </div>
                <div class="col">
                    <b>{{ Form::label('birthchild3', 'Birthdate: ') }}</b><br>
                    {{ Form::date('birthchild3', '') }}
                </div>
            </div>
        </div>

        <div class="child4-container d-none">
            <div class="row">
                <div class="col">
                    <b>{{ Form::label('child4', 'Name: ') }}</b>
                    {{ Form::text('child4', null, ['class' => 'form-control', 'id' => 'child4', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                </div>
                <div class="col">
                    <b>{{ Form::label('birthchild4', 'Birthdate: ') }}</b><br>
                    {{ Form::date('birthchild4', '') }}
                </div>
            </div>
        </div>

        <div class="child5-container d-none">
            <div class="row">
                <div class="col">
                    <b>{{ Form::label('child5', 'Name: ') }}</b>
                    {{ Form::text('child5', null, ['class' => 'form-control', 'id' => 'child5', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                </div>
                <div class="col">
                    <b>{{ Form::label('birthchild5', 'Birthdate: ') }}</b><br>
                    {{ Form::date('birthchild5', '') }}
                </div>
            </div>
        </div>

        <div class="child6-container d-none">
            <div class="row">
                <div class="col">
                    <b>{{ Form::label('child6', 'Name: ') }}</b>
                    {{ Form::text('child6', null, ['class' => 'form-control', 'id' => 'child6', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                </div>
                <div class="col">
                    <b>{{ Form::label('birthchild6', 'Birthdate: ') }}</b><br>
                    {{ Form::date('birthchild6', '') }}
                </div>
            </div>
        </div>

        <div class="child7-container d-none">
            <div class="row">
                <div class="col">
                    <b>{{ Form::label('child7', 'Name: ') }}</b>
                    {{ Form::text('child7', null, ['class' => 'form-control', 'id' => 'child7', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                </div>
                <div class="col">
                    <b>{{ Form::label('birthchild7', 'Birthdate: ') }}</b><br>
                    {{ Form::date('birthchild7', '') }}
                </div>
            </div>
        </div>

        <div class="child8-container d-none">
            <div class="row">
                <div class="col">
                    <b>{{ Form::label('child8', 'Name: ') }}</b>
                    {{ Form::text('child8', null, ['class' => 'form-control', 'id' => 'child8', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                </div>
                <div class="col">
                    <b>{{ Form::label('birthchild8', 'Birthdate: ') }}</b><br>
                    {{ Form::date('birthchild8', '') }}
                </div>
            </div>
        </div>

        <div class="child9-container d-none">
            <div class="row">
                <div class="col">
                    <b>{{ Form::label('child9', 'Name: ') }}</b>
                    {{ Form::text('child9', null, ['class' => 'form-control', 'id' => 'child9', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                </div>
                <div class="col">
                    <b>{{ Form::label('birthchild9', 'Birthdate: ') }}</b><br>
                    {{ Form::date('birthchild9', '') }}
                </div>
            </div>
        </div>

        <div class="child10-container d-none">
            <div class="row">
                <div class="col">
                    <b>{{ Form::label('child10', 'Name: ') }}</b>
                    {{ Form::text('child10', null, ['class' => 'form-control', 'id' => 'child10', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                </div>
                <div class="col">
                    <b>{{ Form::label('birthchild10', 'Birthdate: ') }}</b><br>
                    {{ Form::date('birthchild10', '') }}
                </div>
            </div>
        </div>

        <div class="child11-container d-none">
            <div class="row">
                <div class="col">
                    <b>{{ Form::label('child11', 'Name: ') }}</b>
                    {{ Form::text('child11', null, ['class' => 'form-control', 'id' => 'child11', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                </div>
                <div class="col">
                    <b>{{ Form::label('birthchild11', 'Birthdate: ') }}</b><br>
                    {{ Form::date('birthchild11', '') }}
                </div>
            </div>
        </div>
    </div>
    </div>
</html>

<script>
    $(function() {
        var refCount = 11;
        var counter = 0

        $('#add-ref').on('click', function(e) {
            e.preventDefault();

            if (refCount <= 11 && counter == 0) {
                $('.child1-container').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter++;
            } else if (refCount <= 11 && counter == 1) {
                $('.child2-container').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter++;
            } else if (refCount <= 11 && counter == 2) {
                $('.child3-container').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter++;
            } else if (refCount <= 11 && counter == 3) {
                $('.child4-container').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter++;
            } else if (refCount <= 11 && counter == 4) {
                $('.child5-container').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter++;
            } else if (refCount <= 11 && counter == 5) {
                $('.child6-container').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter++;
            } else if (refCount <= 11 && counter == 6) {
                $('.child6-container').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter++;
            } else if (refCount <= 11 && counter == 7) {
                $('.child7-container').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter++;
            } else if (refCount <= 11 && counter == 8) {
                $('.child8-container').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter++;
            } else if (refCount <= 11 && counter == 9) {
                $('.child9-container').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter++;
            } else if (refCount <= 11 && counter == 10) {
                $('.child10-container').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter++;
            } else if (refCount <= 11 && counter == 11) {
                $('.child11-container').removeClass('d-none');
                $('#add-ref').attr('disabled', true);
            }
        });

        $('#minus-ref').on('click', function(e) {
            e.preventDefault();

            if (refCount <= 11 && counter == 11) {
                $('.child11-container').addClass('d-none');
                $('#add-ref').attr('disabled', false);
                counter--;
            } else if (refCount <= 11 && counter == 10) {
                $('.child10-container').addClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter--;
            } else if (refCount <= 11 && counter == 9) {
                $('.child9-container').addClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter--;
            } else if (refCount <= 11 && counter == 8) {
                $('.child8-container').addClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter--;
            } else if (refCount <= 11 && counter == 7) {
                $('.child7-container').addClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter--;
            } else if (refCount <= 11 && counter == 6) {
                $('.child6-container').addClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter--;
            } else if (refCount <= 11 && counter == 5) {
                $('.child5-container').addClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter--;
            } else if (refCount <= 11 && counter == 4) {
                $('.child4-container').addClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter--;
            } else if (refCount <= 11 && counter == 3) {
                $('.child3-container').addClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter--;
            } else if (refCount <= 11 && counter == 2) {
                $('.child2-container').addClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter--;
            } else if (refCount <= 11 && counter == 1) {
                $('.child1-container').addClass('d-none');
                $('#minus-ref').attr('disabled', true);
                counter--;
            }

        });
    });
</script>
