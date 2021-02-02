<?php
include '../components/header.php';
include '../components/sub_header.php';
?>


        <div class="content">
            <h4>View Beneficiary</h4>
            <!-- <button type="button" class="btn btn-primary" onclick="printJS('printJS-form', 'html')">
                    Print
                </button>
                <table class="table" id="printJS-form">
                    
                    <tbody>
                       
                    </tbody>
                </table> -->

            <style>
                .container {
                    border: 1px solid #ccc;
                    padding: 20px 40px;
                    margin-top: 20px;
                }

                .header_logo {
                    padding: 0 0 20px 0;
                }

                .sub-header {
                    font-weight: 700;
                    padding: 10px 0
                }

                .line {
                    border-bottom: 1px solid black;
                }

                .acceptance-box {
                    padding: 40px;
                    border: 2px solid black;
                    margin-top: 80px;
                }

                .table-header {
                    background-color: black;
                    color: white;
                }

                .table,
                .table-border,
                td,
                th {
                    border: 1px solid black;
                }

                .container ol {
                    counter-reset: item;
                }

                .container li {
                    display: block;
                }

                .container li:before {
                    content: counters(item, ".") " ";
                    counter-increment: item;
                    font-weight: 500;
                }
            </style>

            <div style="text-align:right">
                <button type="button" class="btn btn-primary" onclick="printJS()">Print</button>
            </div>
            <?php include '../server/slim/inc/apis/getUser.php';  ?>
            <div class="container">
                <div id="page1" style='page-break-after:always'>
                    <div class="header_logo">
                        <img src="../assets/img/LOGOFORM.jpg" width="200" alt="" srcset="">
                    </div>
                    <div class="line"></div>
                    <div class="sub-header">
                        INDIVIDUAL MEMBERSHIP FORM
                    </div>
                    <p>
                        The individual membership form is a requirement of section 10 of the Mathuiini Communal Property
                        Association Constitution which stipulates the following:
                    </p>
                    <ol>
                        <li>The first committee meeting shall be convened as soon as possible after the first general meeting at
                            which this constitution is adopted
                            compile a register of all the members of the association.</li>
                        <li>The register shall have a separate page dedicated to each member and shall record:

                            <ol>
                                <li> Full Names and Identity numbers
                                </li>
                                <li>
                                    Full Names and identity numbers of dependents living with and under each member
                                </li>
                                <li>
                                    Date of admission as a member.
                                </li>
                                <li>
                                    The location/ resident details of each member </li>
                            </ol>
                        </li>
                    </ol>
                    <p>
                        All members of the association shall have equal rights irrespective of their gender and such rights
                        shall be respected by atl other members of the association
                    </p>

                    <table class="table table-bordered">
                        <tr>
                            <th colspan="4" class="table-header">1. MEMBER PERSONAL DETAILS</th>
                        </tr>
                        <tr>
                            <th style="width:15%">FULL NAMES</th>
                            <td style="width:35%"><?= $res->data[0]->firstname ?></td>
                            <th style="width:15%">SURNAME</th>
                            <td style="width:35%"><?= $res->data[0]->lastname ?></td>
                        </tr>
                    </table>

                    <table class="table table-bordered">

                        <tr>
                            <th style="width:15%">ID NUMBER</th>
                            <td style="width:35%"><?= $res->data[0]->id_number ?></td>
                            <th style="width:15%">MEMBERSHIP DATE</th>
                            <td style="width:35%"><?= $res->data[0]->user_reg_date ?></td>
                        </tr>
                        <tr>
                            <th style="width:15%">AGE</th>
                            <td style="width:35%">
                                <?php
                                //An example date of birth.
                                $userDob = $res->data[0]->dob;

                                //Create a DateTime object using the user's date of birth.
                                $dob = new DateTime($userDob);

                                //We need to compare the user's date of birth with today's date.
                                $now = new DateTime();



                                //Calculate the time difference between the two dates.
                                $difference = $now->diff($dob);
                                //Get the difference in years, as we are looking for the user's age.
                                $age = $difference->y;

                                //Print it out.
                                echo $age;
                                ?>

                            </td>
                            <th style="width:15%">CONTACT DETAILS</th>
                            <td style="width:35%"><?= $res->data[0]->contact ?></td>
                        </tr>
                        <tr>
                            <th>GENDER</th>
                            <td colspan="3"><?= $res->data[0]->gender_name ?></td>
                        </tr>
                        <tr>
                            <th>BANKING INFORMATION</th>
                            <td colspan="3">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Account Number</th>
                                        <td style="width:50%"><?= $res->data[0]->bnk_acc_no ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Bank Name</th>
                                        <td style="width:50%"><?= $res->data[0]->bnk_name ?></td>
                                    </tr>
                                    <!-- <tr>
                                        <th style="width:50%">Account Number</th>
                                        <td style="width:50%"></td>
                                    </tr> -->
                                    <tr>
                                        <th style="width:50%">Account Type</th>
                                        <td style="width:50%"><?= $res->data[0]->bnk_acc_type ?></td>
                                    </tr>
                                    <tr>
                                        <th style="width:50%">Branch Code</th>
                                        <td style="width:50%"><?= $res->data[0]->bnk_branch_code ?></td>
                                    </tr>
                            </td>
                        </tr>
                    </table>
                    </td>
                    </tr>
                    </table>

                    <table class="table table-bordered">
                        <tr>
                            <th style="width:15%">RESIDENTIAL ADDRESS</th>
                            <td style="width:85%" colspan="3"><?= $res->data[0]->address ?></td>
                        </tr>
                        <tr>
                            <td style="width:85%" colspan="3"></td>
                            <td style="width:15%;border-left: none;">
                                <table class="table-bordered">
                                    <tr>
                                        <th>CODE</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th style="width:15%">POSTAL ADDRESS</th>
                            <td style="width:85%" colspan="3"><?= $res->data[0]->address ?></td>
                        </tr>
                        <tr>
                            <td style="width:85%" colspan="3"></td>
                            <td style="width:15%;border-left: none;">
                                <table class="table-bordered">
                                    <tr>
                                        <th>CODE</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>

                <div id="page2" style='page-break-after:always'>
                    <table class="table table-bordered">
                        <tr>
                            <th colspan="4" class="table-header">2. MEMBERSHIP INFORMATION</th>
                        </tr>
                        <tr>
                            <th style="width:15%">DATE OF MEMBERSHIP</th>
                            <td style="width:85%"></td>
                        </tr>
                        <tr>
                            <th style="width:15%">NUMBER OF DEPEENDENTS</th>
                            <td style="width:85%"></td>
                        </tr>
                        <tr>
                            <th style="width:15%">DEPENDENTS</th>
                            <td style="width:85%">
                                <table class="table">
                                    <tr>
                                        <th style="width:50%">Name(s)</th>
                                        <th style="width:50%">Surname</th>
                                    </tr>
                                    <tr>
                                        <td style="width:50%">1. </td>
                                        <td style="width:50%"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%">2. </td>
                                        <td style="width:50%"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%">3. </td>
                                        <td style="width:50%"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%">4. </td>
                                        <td style="width:50%"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%">5. </td>
                                        <td style="width:50%"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%">6. </td>
                                        <td style="width:50%"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%">7. </td>
                                        <td style="width:50%"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%">8. </td>
                                        <td style="width:50%"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%">9. </td>
                                        <td style="width:50%"></td>
                                    </tr>
                                    <tr>
                                        <td style="width:50%">10. </td>
                                        <td style="width:50%"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>

                    <table class="table table-bordered">
                        <tr>
                            <th style="width:15%">DIVIDENDS RECEIVED</th>
                            <td style="width:85%"></td>
                        </tr>
                        <tr>
                            <th style="width:15%">OTHER BENEFITS RECEIVED</th>
                            <td style="width:85%"></td>
                        </tr>
                    </table>

                    <div class="sub-header">DECLARATION</div>
                    <ol>
                        <li>All Members have the right leave the association and terminate their membership provided
                            that the member intending to leave ser-vices a written notice of his/her intention to terminate
                            membership on the committee,
                            at least two (2) calendar months to date upon which membership will be terminated</li>

                        <li>Members of the household whose age is above eighteen (18) will be required to sign voluntary
                            membership termination to confirm their consent
                            to termination of their membership.
                            The committee shall prepare documents for termination of membership.</li>

                        <li>Any violation of the community rules will be reported to the committee,
                            which in turn will investigate such violation and take appropriate action including imposition of
                            fines.
                            Members who persist in breaking rules after the committee's intervention wilt have to account for
                            their behaviour at a general meeting of the community.
                            The General meeting will decide of the punishment to be imposed on a member who has been found
                            guilty of violation of community rules.</li>

                        <li>Any member who is guilty of committing any one of the following conducts shall be liable to have
                            his/her membership terminated:
                            <ol>

                                <li> Granting to any person rights to the property in violation of the constitution.</li>
                                <li> Abuse of power or authority or encouragement of any person to do so, in such a manner that
                                    the benefits of a member are harmed.</li>
                                <li> Continued non-compliance with community rules.</li>
                                <li> nepotism, corruption and any other related conduct</li>
                                <li> A committee member who does not act in the best interest Ofc the Association.</li>
                            </ol>
                        </li>
                    </ol>
                </div>

                <div id="page3" class="acceptance-box " style='page-break-after:always'>

                    <div class="sub-header">ACCEPTANCE</div>
                    <p>
                        I,_________________________________________________(full names of the member), the undersigned, declare
                        that the information supply is true and correct of my membership.
                        I Accept to abide by the rules of this association as prescribed and agreed upon in our constitution.
                    </p>
                    <br>
                    <br>
                    <p>
                        Signed at: __________________________ on the: ________ day of: _____________________________
                        20/_________
                    </p>
                    <br>
                    <br>
                    __________________________________<br>
                    <strong>Member Signature:</strong>

                    <br>
                    <br>
                    <p>
                        Supporting documents:
                    <ol>
                        <li>Copy of SA Identity Document</li>
                        <li>Proof of resident</li>
                        <li>Any other supporting documents</li>
                    </ol>
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>
<?php include '../components/footer.php'; ?>
<script src="../assets/js/printThis.js"></script>

<script>
    function printJS(id) {
        $('#page1,#page2,#page3').printThis({
            debug: false, // show the iframe for debugging
            importCSS: true, // import parent page css
            importStyle: true, // import style tags
            printContainer: true, // print outer container/$.selector
            loadCSS: [
                "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css",
                "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css",
                "https://printjs-4de6.kxcdn.com/print.min.css"
            ], // path to additional css file - use an array [] for multiple
            pageTitle: "", // add title to print page
            removeInline: false, // remove inline styles from print elements
            removeInlineSelector: "*", // custom selectors to filter inline styles. removeInline must be true
            printDelay: 333, // variable print delay
            header: "", // prefix to html
            footer: "", // postfix to html
            base: "", // preserve the BASE tag or accept a string for the URL
            formValues: true, // preserve input/form values
            canvas: false, // copy canvas content
            doctypeString: '<!doctype html>', // enter a different doctype for older markup
            removeScripts: false, // remove script tags from print content
            copyTagClasses: false, // copy classes from the html & body tag
            beforePrintEvent: null, // function for printEvent in iframe
            beforePrint: null, // function called before iframe is filled
            afterPrint: null // function called before iframe is removed
        });
    }
</script>