<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css">
    <link type="text/css" rel="stylesheet" href="styles/home.css">
    <link type="text/css" rel="stylesheet" href="styles/newGuest.css">
    <title>New Guest</title>
</head>
<body>
    <?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>


    <div class="container">

        <form action="#" method="post" id="formGuest">
            <h2>Outreach Contact Report</h2>
            <p id="obligitory"><i>* obligatory fields</i></p>
            <fieldset class="form-group">
                <legend>Guest's Information</legend>
                <div class="row">
                    <div class="form-group col-8">
                        <label class="form-control-label"><b>*Name:</b>
                            <!-- check for valid fist and last name -->
                            <?php if (isset($invalidFirstName)): ?>
                                <span class="text-danger font-weight-normal"> - Invalid first name</span>
                            <?php endif; ?>
                            <?php if (isset($invalidLastName)): ?>
                                <span class="text-danger font-weight-normal"> - Invalid Last name</span>
                            <?php endif; ?>

                        </label>
                        <div class="row">
                            <div class="form-group col-6">
                                <input class="form-control" type="text" id="first" name="first" placeholder="First Name"
                                <?php if (isset($firstName)): ?>
                                    value="<?= ($firstName) ?>"
                                <?php endif; ?>>
                            </div>
                            <div class="form-group col-6">
                                <input class="form-control" type="text" id="last" name="last" placeholder="Last Name"
                                <?php if (isset($lastName)): ?>
                                    value="<?= ($lastName) ?>"
                                <?php endif; ?>>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-3">

                        <label for="birthdate" class="form-control-label"><b>Date of Birth:</b>
                            <?php if (isset($invalidBirthdate)): ?>
                                <span class="text-danger font-weight-normal"> - Invalid</span>
                            <?php endif; ?>
                        </label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate"
                        <?php if (isset($birthdate)): ?>
                            value="<?= ($birthdate) ?>"
                        <?php endif; ?>>

                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="form-group col-4">
                        <div class="row">
                            <div class="form-group col-10">
                                <label class="form-control-label">Phone:
                                    <?php if (isset($invalidPhone)): ?>
                                        <span class="text-danger font-weight-normal"> - Invalid</span>
                                    <?php endif; ?>
                                </label>
                                <input class="form-control" type="text" id="phone" name="phone" maxlength="10" placeholder="no spaces or dashes"
                                <?php if (isset($phone)): ?>
                                    value="<?= ($phone) ?>"
                                <?php endif; ?>>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-4">
                        <label class="form-control-label">Email:
                        </label>
                        <input class="form-control" type="email" id="email" name="email"
                        <?php if (isset($email)): ?>
                            value="<?= ($email) ?>"
                        <?php endif; ?>>
                    </div>
                    <div class="form-group col-3">
                        <label class="form-check-label">Ethnicity:</label>
                        <label class="d-block"></label>
                        <select class="form-control dropdown" id="ethnicity" name="ethnicity">
                            <option value="">-- select one --</option>

                            <?php foreach (($ethnicities?:[]) as $ethnicity1): ?>
                                <option <?php if ($ethnicity1 == $ethnicity): ?>selected<?php endif; ?>  value="<?= ($ethnicity1) ?>" > <?= ($ethnicity1) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="form-group col-10">
                        <label class="form-control-label">Address:</label>
                        <div class="row">
                            <div class="form-group col-5">
                                <input class="form-control" type="text" id="street" name="street" placeholder="Street"
                                <?php if (isset($street)): ?>
                                    value="<?= ($street) ?>"
                                <?php endif; ?>>
                            </div>
                            <div class="form-group col-4">
                                <input class="form-control" type="text" id="city" name="city" placeholder="City"
                                <?php if (isset($city)): ?>
                                    value="<?= ($city) ?>"
                                <?php endif; ?>>
                            </div>
                            <div class="form-group col-3">
                                <input class="form-control" type="text" id="zip" name="zip" placeholder="Zip" maxlength="5"
                                <?php if (isset($zip)): ?>
                                    value="<?= ($zip) ?>"
                                <?php endif; ?>>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="form-group col-3">
                        <div class="form-check">
                            <label class="d-block">Mental Disability:</label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id='mental' name='mental'
                                <?php if ($mental == 'on'): ?>
                                    checked
                                <?php endif; ?>>
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="form-check">
                            <label class="d-block">Physical Disability:</label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id='physical' name='physical'
                                <?php if ($physical == 'on'): ?>
                                    checked
                                <?php endif; ?>>
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="form-check">
                            <label class="d-block">Veteran:</label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id='veteran' name='veteran'
                                <?php if ($veteran =='on'): ?>
                                    checked
                                <?php endif; ?>>
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <div class="form-check">
                            <label class="d-block">Homeless:</label>
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id='homeless' name='homeless'
                                <?php if ($homeless == 'on'): ?>
                                    checked
                                <?php endif; ?>>
                            </label>
                        </div>
                    </div>
                </div> <!-- row -->
            </fieldset>	<!-- Guest Information fieldset -->

            <fieldset class="form-group">
                <legend>Income and Accounts</legend>
                <div class="row">
                    <div class="form-group col-3">
                        <label class="form-control-label">Monthly income:
                            <?php if (isset($invalidIncome)): ?>
                                <span class="text-danger font-weight-normal"> - Invalid</span>
                            <?php endif; ?>
                        </label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control" type="tel" id="income" name="income"
                            <?php if (isset($income)): ?>
                                value="<?= ($income) ?>"
                                <?php else: ?>value="0"
                            <?php endif; ?>>
                        </div>
                    </div>
                    <div class="form-group col-3">
                        <label class="form-control-label">Monthly Rent:
                            <?php if (isset($invalidRent)): ?>
                                <span class="text-danger font-weight-normal"> - Invalid</span>
                            <?php endif; ?>
                        </label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span><input class="form-control" type="text" id="rent" name="rent"
                            <?php if (isset($rent)): ?>
                                value="<?= ($rent) ?>"
                                <?php else: ?>value="0"
                            <?php endif; ?>>
                            
                        </div>
                    </div>

                    <div class="form-group col-3">
                        <label class="form-control-label">Food Stamps:
                            <?php if (isset($invalidFoodstamps)): ?>
                                <span class="text-danger font-weight-normal"> - Invalid</span>
                            <?php endif; ?>
                        </label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span><input class="form-control" type="text" id="foodStamp" name="foodStamp"
                            <?php if (isset($foodStamp)): ?>
                                value="<?= ($foodStamp) ?>"
                                <?php else: ?>value="0"
                            <?php endif; ?>>
                        </div>
                    </div>

                    <div class="form-group col-3">
                        <label class="form-control-label">Additional Support:
                            <?php if (isset($invalidAddSupport)): ?>
                                <span class="text-danger font-weight-normal"> - Invalid</span>
                            <?php endif; ?>
                        </label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span><input class="form-control" type="text" id="addSupport" name="addSupport"
                            <?php if (isset($addSupport)): ?>
                                value="<?= ($addSupport) ?>"
                                <?php else: ?>value="0"
                            <?php endif; ?>>
                            
                        </div>
                    </div>
                </div> <!-- row -->

                <div class="row">
                    <div class="form-group col-4">
                        <label class="form-control-label">Driver's License or Photo ID#:</label><input class="form-control" type="text" id="license" name="license"
                        <?php if (isset($license)): ?>
                            value="<?= ($license) ?>"
                        <?php endif; ?>>
                    </div>
                    <div class="form-group col-4">
                        <label class="form-control-label">Puget Sound Energy Account #:</label><input class="form-control" type="tel" id="pse" name="pse"
                        <?php if (isset($pse)): ?>
                            value="<?= ($pse) ?>"
                        <?php endif; ?>>
                    </div>
                    <div class="form-group col-4">
                        <label class="form-control-label">Water Account #:</label><input class="form-control" type="text" id="water" name="water"
                        <?php if (isset($water)): ?>
                            value="<?= ($water) ?>"
                        <?php endif; ?>>
                    </div>
                </div> <!-- row -->
            </fieldset> <!-- Income and Accounts fieldset -->

            <fieldset class="form-group">
                <legend>Household Members</legend>
                <div class="row" id="household">
                    <div class="form-group col-4">
                        <label class="form-checkNum-label">Members in household:</label>
                        <button class="btn btn-light" id="add-member-button">Add member</button>
                    </div>
                </div> <!-- row -->





                <?php if (isset($members)): ?>

                    
                        <span id="member-div" name="member-div">
                                <?php foreach (($members?:[]) as $member): ?>

                                    <div class="row" >
                                        <div class="form-group col-5">
                                            <label class="form-control-label">Name:</label><input class="form-control" type="text" name="name[]" value="<?= ($member[0]) ?>">
                                        </div>

                                        <div class="form-group col-2">
                                            <label class="form-control-label">Age:</label><input class="form-control" type="text" name="age[]" maxlength="3" value="<?= ($member[1]) ?>">
                                        </div>

                                        <div class="form-group col-2">
                                            <label class="form-check-label">Gender:</label>
                                            <label class="d-block"></label>
                                            <select class="form-control dropdown" name="gender[]">
                                                <option value="">select one</option>
                                                <?php foreach (($listGenders?:[]) as $thisGender): ?>
                                                    <option <?php if ($thisGender == $member[2]): ?>selected<?php endif; ?>  value="<?= ($thisGender) ?>" > <?= ($thisGender) ?></option>
                                                <?php endforeach; ?>

                                            </select>
                                        </div>

                                        <button class="btn btn-danger btn-member-delete" type="button">Delete</button>

                                    </div>

                                <?php endforeach; ?>
                        </span>

                    

                    <?php else: ?>

                        <span id="member-div" name="member-div">

                            <div class="row" >
                                        <div class="form-group col-5">
                                            <label class="form-control-label">Name:</label><input class="form-control" type="text" name="name[]" value>
                                        </div>

                                        <div class="form-group col-2">
                                            <label class="form-control-label">Age:</label><input class="form-control" type="text" name="age[]" maxlength="3">
                                        </div>

                                        <div class="form-group col-2">
                                            <label class="form-check-label">Gender:</label>
                                            <label class="d-block"></label>
                                            <select class="form-control dropdown" name="gender[]">
                                                <option value="">select one</option>
                                                <?php foreach (($listGenders?:[]) as $thisGender): ?>
                                                    <option value="<?= ($thisGender) ?>" > <?= ($thisGender) ?></option>
                                                <?php endforeach; ?>

                                            </select>




                                        </div>
                                        <button class="btn btn-danger btn-member-delete" type="button">Delete</button>
                                    </div>

                        </span>
                    

                <?php endif; ?>




            </fieldset> <!-- Household Member fieldset -->
            <fieldset class="form-group">
                <legend>Help Provided</legend>
                <div class="row">
                    <div class="form-group col-12">
                        <label class="form-control-label">Interviewer's notes:</label>
                        <textarea class="form-control" id="notes" name="notes" rows="4"><?php if (isset($notes)): ?><?= ($notes) ?><?php endif; ?></textarea>
                    </div>
                </div> <!-- row -->



                <div class="row" id="checkvoucher">
                    <div class="form-group col-4">
                        <label class="form-checkNum-label">Vouchers</label>
                        <button class="btn btn-light" id="add-voucher-button">Add voucher</button>
                    </div>
                </div> <!-- row -->





                <?php if (isset($vouchers)): ?>

                    
                        <span id="voucher-div" name="voucher-div">
                                <?php foreach (($vouchers?:[]) as $voucher): ?>

                                    <div class='row'>
                                        <div class='form-group col'>
                                            <label class='form-control-label'>Voucher#:</label><input class='form-control' type='text' name='voucher[]' value='<?= ($voucher[0]) ?>'>
                                        </div>
                                        <div class='form-group col'>
                                            <label class='form-control-label'>Check#:</label><input class='form-control' type='text'name='checkNum[]' value='<?= ($voucher[1]) ?>'>
                                        </div>
                                        <div class='form-group col'>
                                            <label class='form-control-label'>Amount:</label>
                                            <div class='input-group'>
                                                <span class='input-group-addon'>$</span><input class='form-control' type='amount' name='amount[]' value='<?= ($voucher[2]) ?>'>
                                            </div>
                                        </div>
                                        <div class="form-group col-3">
                                            <label class="form-control-label">Date:</label><input class='form-control' type='date' name='date[]' value="<?= ($voucher[3]) ?>">
                                        </div>
                                        <div class='form-group col'>
                                            <label class='form-check-label'>Resource:</label>
                                            <label class='d-block'></label>

                                            <select class="form-control dropdown" name="resource[]">
                                                <option value="">-- select one --</option>

                                                <?php foreach (($listResources?:[]) as $thisResource): ?>
                                                    <option <?php if ($thisResource == $voucher[4]): ?>selected<?php endif; ?>  value="<?= ($thisResource) ?>" > <?= ($thisResource) ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                        </div>
                                        <div class="form-group col">
                                <button class="btn btn-danger btn-voucher-delete" type="button">Delete</button>
                            </div>
                                    </div>
                                <?php endforeach; ?>
                        </span>

                    

                    <?php else: ?>

                        <span id="voucher-div" name="voucher-div">
                        <div class='row'>
                            <div class='form-group col'>
                                <label class='form-control-label'>Voucher#:</label><input class='form-control' type='text' name='voucher[]'>
                            </div>
                            <div class='form-group col'>
                                <label class='form-control-label'>Check#:</label><input class='form-control' type='text'name='checkNum[]'>
                            </div>
                            <div class='form-group col'>
                                <label class='form-control-label'>Amount:</label>
                                <div class='input-group'>
                                    <span class='input-group-addon'>$</span><input class='form-control' type='amount' name='amount[]'>
                                </div>
                            </div>
                            <div class="form-group col-3">
                                <label class="form-control-label">Date:</label><input class='form-control' type='date' name='date[]' value="<?= ($dateToday) ?>">
                            </div>

                            <div class="form-group col">
                                <label class='form-check-label'>Resource:</label>
                                <label class='d-block'></label>

                                <select class="form-control dropdown" name="resource[]">
                                                <option value="">-- select one --</option>

                                                <?php foreach (($listResources?:[]) as $thisResource): ?>
                                                    <option value="<?= ($thisResource) ?>" > <?= ($thisResource) ?></option>
                                                <?php endforeach; ?>
                                            </select>

                            </div>
                            <div class="form-group col">
                                <button class="btn btn-danger btn-voucher-delete" type="button">Delete</button>
                            </div>
                        </div>
                        </span>
                    

                <?php endif; ?>



            </fieldset> <!-- Help Provided Fieldset -->

            <input id="preview" name="preview" type="button" value="Preview &raquo;" data-toggle='modal' data-target='#confirm-submit'>
            <input id="submit" name="submit" type="submit" value="Submit Guest &raquo;">
        </form>	<!-- Guest Form -->
        <div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><h4>Preview Form</h4></div>
                    <div class="modal-body" id="previewForm">
                        <h6>Are you sure you want to submit the following details?</h6>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close" class="btn btn-default" data-dismiss="modal">Return</button>
                    </div>
                </div>
            </div>
        </div> <!-- Preview Form -->
    </div>
    <!-- Bootstrap and jQuery -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="./js/newGuest.js"></script>

<!--    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


    <script>

        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();

        if(dd<10) {
            dd = '0'+dd
        }

        if(mm<10) {
            mm = '0'+mm
        }
        date = yyyy + '-' + mm + '-' + dd;


        //Remove a direction from the direction list
        $('.btn-voucher-delete').click(function() {
            var parent = this.parentElement;
            $(parent).remove();
        });

        //Adding a direction when submitting a form
        $('#add-voucher-button').click(function(event) {
            event.preventDefault();
            const CLONE_HTML =

        '<div class="row">\n' +
            '<div class="form-group col">\n' +
                '<label class="form-control-label">Voucher#:</label><input class="form-control" type="text" name="voucher[]">\n' +
            '</div>\n' +
            '<div class="form-group col">\n' +
                '<label class="form-control-label">Check#:</label><input class="form-control" type="text" name="checkNum[]" >\n' +
            '</div>\n' +
            '<div class="form-group col">\n' +
                '<label class="form-control-label">Amount:</label>\n' +
                '<div class="input-group">\n' +
                    '<span class="input-group-addon">$</span><input class="form-control" type="amount" name="amount[]">\n' +
                '</div>\n' +

            '</div>\n' +

            '<div class="form-group col-3">\n' +
                '<label class="form-control-label">Date:</label><input class="form-control" type="date" name="date[]" value="'+date+'">\n' +
            '</div>\n' +
            '<div class="form-group col"> \n' +
                '<label class="form-check-label">Resource:</label> \n' +
                '<label class="d-block"></label> \n' +
                '<select class="form-control dropdown" name="resource[]">\n' +
                    '<option value="">-- select one --</option> \n' +
                    '<option value="thriftshop">Thrift Shop</option> \n' +
                    '<option value="gas">Gas</option> \n' +
                    '<option value="waterbill">Water Bill</option> \n' +
                    '<option value="energybill">Energy Bill</option> \n' +
                    '<option value="food">Food</option> \n' +
                    '<option value="dol">dol</option> \n' +
                    '<option value="other">Other</option> \n' +
                '</select> \n' +
            '</div>  \n' +
            '<div class="form-group col">' +
                '<button class="btn btn-danger btn-voucher-delete" type="button">Delete</button>' +
            '</div> \n' +
        '</div>';

            console.log(CLONE_HTML);
            $('#voucher-div').append(CLONE_HTML);

            // Add event listener to new node.
            $('.btn-voucher-delete').click(function() {
                var parent = this.parentElement;
                $(parent).remove();
            });
        });





        //Remove a direction from the direction list
        $('.btn-member-delete').click(function() {
            var parent = this.parentElement;
            $(parent).remove();
        });

        //Adding a direction when submitting a form
        $('#add-member-button').click(function(event) {
            event.preventDefault();
            const CLONE_HTML =

            '<div class="row" > \n' +
                '<div class="form-group col-5"> \n' +
                    '<label class="form-control-label">Name:</label><input class="form-control" type="text" name="name[]" > \n' +
                '</div> \n' +

                '<div class="form-group col-2"> \n' +
                    '<label class="form-control-label">Age:</label><input class="form-control" type="text" name="age[]" maxlength="3"> \n' +
                '</div> \n' +

                '<div class="form-group col-2"> \n' +
                    '<label class="form-check-label">Gender:</label> \n' +
                    '<label class="d-block"></label> \n' +
                    '<select class="form-control dropdown" name="gender[]"> \n' +
                        '<option value="">select one</option> \n' +
                        '<option value="male">male</option>\n' +
                        '<option value="female">female</option> \n' +
                        '<option value="other">other</option>\n' +
                    '</select> \n' +
                '</div> \n' +
                '<button class="btn btn-danger btn-member-delete" type="button">Delete</button> \n' +
            '</div>';


            console.log(CLONE_HTML);
            $('#member-div').append(CLONE_HTML);

            // Add event listener to new node.
            $('.btn-member-delete').click(function() {
                var parent = this.parentElement;
                $(parent).remove();
            });
        });
    </script>




</body>
</html>